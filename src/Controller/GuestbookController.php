<?php

namespace App\Controller;

use App\Entity\Guestbook;
use App\Repository\GuestbookRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @Route("/guestbook", name="guestbook.")
 */
class GuestbookController extends AbstractController
{
    /**
     * @Route("/", name="listing")
     */
    public function index(Request $request, GuestbookRepository $gbr): Response //allowed for both admin and guest user
    {
        //START : CHECK USER SESSION IS STARTED OR NOT. IF NOT STARTED, REDIRECTED TO LOGOUT
        $session_user_id = $this->get('session')->get('LOGIN_USER_ID');
        $session_user_type = $this->get('session')->get('LOGIN_USER_TYPE');
        if(!isset($session_user_id) || $session_user_id == "" || !isset($session_user_type) || $session_user_type == "")
        {
            return $this->redirect($this->generateUrl('logout')); 
        }
        //END : CHECK USER SESSION IS STARTED OR NOT. IF NOT STARTED, REDIRECTED TO LOGOUT
        
		//GET GUESK BOOKING DATA
        $guest_book = $gbr->getBookListing(array('session_user_id'=>$session_user_id, 'session_user_type'=>$session_user_type));
        
		return $this->render('guestbook/index.html.twig', 
        [
            'guest_book' => $guest_book,
            'session_user_type'=>$session_user_type,
            'admin_data'=>$gbr->getAdminUserDataById(array('gb_id'=>$session_user_id))
        ]);
    }

    /**
     * @Route("/create", name="create")
     */
    public function create(Request $request): Response //allowed only for guest user
    {
        //START : CHECK USER SESSION IS STARTED OR NOT. IF NOT STARTED, REDIRECTED TO LOGOUT. ALSO CHECK LOGGED IN USER TYPE MUST BE 1 AS GUEST USER
        $session_user_id = $this->get('session')->get('LOGIN_USER_ID');
        $session_user_type = $this->get('session')->get('LOGIN_USER_TYPE');
        if(!isset($session_user_id) || $session_user_id == "" || !isset($session_user_type) || $session_user_type == "" || $session_user_type == '1')
        {
            return $this->redirect($this->generateUrl('logout')); 
        }
        //END : CHECK USER SESSION IS STARTED OR NOT. IF NOT STARTED, REDIRECTED TO LOGOUT. ALSO CHECK LOGGED IN USER TYPE MUST BE 1 AS GUEST USER
				
        //CREATE FORM
        $create_form = $this->createFormBuilder()->getForm();
        $create_form->handleRequest($request);    

        if($create_form->isSubmitted())
        {
            $input = $_POST;   
            $guestbook = new Guestbook();
            
            if(isset($_FILES["image"]["name"]) && $_FILES["image"]["name"] != "")
            {
                $target_dir = "uploads/guestbook_img/";
                $img_name = $_FILES["image"]["name"];
                $tmp_name = $_FILES["image"]["tmp_name"];
                $ext = strtolower(pathinfo($img_name,PATHINFO_EXTENSION));
                $newfilename = 'guest_img_'.date('YmdHis').rand() . '.' . $ext;

                $target_file = $target_dir . basename($newfilename);
                move_uploaded_file($tmp_name, $target_dir . $newfilename);
            
                $guestbook->setImage($newfilename);
            }

            $guestbook->setName($input['name']);
            $guestbook->setRole('2');
            $guestbook->setIs_approved('0');
            $guestbook->setIs_deleted('0');
            $guestbook->setCreated_on(new \DateTime());
            $guestbook->setCreated_by($this->get('session')->get('LOGIN_USER_ID'));
            
            //EntityManager
            $em = $this->getDoctrine()->getManager();
            $em->persist($guestbook);
            $em->flush();
            
            $this->addFlash('success', 'Guest Book record added successfully');
            return $this->redirect($this->generateUrl('guestbook.listing'));
        } 

        return $this->render('guestbook/create.html.twig');
    }

    /**
     * @Route("/approve/{gb_id}", name="approve")
     */
    public function approve($gb_id, GuestbookRepository $gbr) //allowed only for admin user
    {
        //START : CHECK USER SESSION IS STARTED OR NOT. IF NOT STARTED, REDIRECTED TO LOGOUT. ALSO CHECK LOGGED IN USER TYPE MUST BE 2 AS ADMIN USER
        $session_user_id = $this->get('session')->get('LOGIN_USER_ID');
        $session_user_type = $this->get('session')->get('LOGIN_USER_TYPE');
        if(!isset($session_user_id) || $session_user_id == "" || !isset($session_user_type) || $session_user_type == "" || $session_user_type == '2')
        {
            return $this->redirect($this->generateUrl('logout')); 
        }
		else
		{
			$admin_data = $gbr->getAdminUserDataById(array('gb_id'=>$session_user_id));
			if(count($admin_data) == 0)
			{
				return $this->redirect($this->generateUrl('logout'));  
			}
		}
        //END : CHECK USER SESSION IS STARTED OR NOT. IF NOT STARTED, REDIRECTED TO LOGOUT. ALSO CHECK LOGGED IN USER TYPE MUST BE 2 AS ADMIN USER
		
		$gbr->approveGuestByAdmin(array('gb_id'=>$gb_id, 'session_user_id'=>$session_user_id));

        //message
        $this->addFlash('success', 'Record approved successfully');
        return $this->redirect($this->generateUrl('guestbook.listing'));
    }

    /**
     * @Route("/remove/{gb_id}", name="remove")
     */
    public function remove($gb_id, GuestbookRepository $gbr) //allowed only for admin user
    {
        //START : CHECK USER SESSION IS STARTED OR NOT. IF NOT STARTED, REDIRECTED TO LOGOUT. ALSO CHECK LOGGED IN USER TYPE MUST BE 2 AS ADMIN USER
        $session_user_id = $this->get('session')->get('LOGIN_USER_ID');
        $session_user_type = $this->get('session')->get('LOGIN_USER_TYPE');
        if(!isset($session_user_id) || $session_user_id == "" || !isset($session_user_type) || $session_user_type == "" || $session_user_type == '2')
        {
            return $this->redirect($this->generateUrl('logout')); 
        }
		else
		{
			$admin_data = $gbr->getAdminUserDataById(array('gb_id'=>$session_user_id));
			if(count($admin_data) == 0)
			{
				return $this->redirect($this->generateUrl('logout'));  
			}
		}
        //END : CHECK USER SESSION IS STARTED OR NOT. IF NOT STARTED, REDIRECTED TO LOGOUT. ALSO CHECK LOGGED IN USER TYPE MUST BE 2 AS ADMIN USER
		
		$gbr->deleteGuestByAdmin(array('gb_id'=>$gb_id, 'session_user_id'=>$session_user_id));

        //message
        $this->addFlash('success', 'Record deleted successfully');
        return $this->redirect($this->generateUrl('guestbook.listing'));
    }
}
