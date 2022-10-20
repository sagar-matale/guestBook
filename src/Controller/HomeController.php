<?php

namespace App\Controller;
use App\Entity\Guestbook;
use App\Repository\GuestbookRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(): Response
    {
        //START : CHECK IF USER SESSION IS ALREADY STARTED OR NOT. IF STARTED, REDIRECTED TO LISTING PAGE
        $session_user_id = $this->get('session')->get('LOGIN_USER_ID');
        $session_user_type = $this->get('session')->get('LOGIN_USER_TYPE');
        
		if(isset($session_user_id) && $session_user_id != "" && isset($session_user_type) && ($session_user_type == "1" || $session_user_type == "2"))
		{
			return $this->redirect($this->generateUrl('guestbook.listing'));
		}
        //END : CHECK IF USER SESSION IS ALREADY STARTED OR NOT. IF STARTED, REDIRECTED TO LISTING PAGE
		
		return $this->render('home/index.html.twig');
    }

    /**
     * @Route("/guest_login", name="guest_login")
     */
    public function guest_login(): Response
    {
        //START : SET SESSION FOR GUEST USER
        $session_user_id = $this->get('session')->get('LOGIN_USER_ID');
        $session_user_type = $this->get('session')->get('LOGIN_USER_TYPE');
        
		if(!isset($session_user_id) || $session_user_id == "" || !isset($session_user_type) || $session_user_type == "")
		{
			$this->get('session')->set('LOGIN_USER_ID', date("YmdHis").rand());
			$this->get('session')->set('LOGIN_USER_TYPE', 2);
		}
        //END : SET SESSION FOR GUEST USER
		
		return $this->redirect($this->generateUrl('guestbook.listing'));            
    }

    /**
     * @Route("/admin_login", name="admin_login")
     */
    public function admin_login(Request $request, GuestbookRepository $gbr): Response
    {
        //START : CHECK IF USER SESSION IS ALREADY STARTED OR NOT. IF STARTED, REDIRECTED TO LISTING PAGE
        $session_user_id = $this->get('session')->get('LOGIN_USER_ID');
        $session_user_type = $this->get('session')->get('LOGIN_USER_TYPE');
        		
		if(isset($session_user_id) && $session_user_id != "" && isset($session_user_type) && ($session_user_type == "1" || $session_user_type == "2"))
		{
			return $this->redirect($this->generateUrl('guestbook.listing'));
		}
        //END : CHECK IF USER SESSION IS ALREADY STARTED OR NOT. IF STARTED, REDIRECTED TO LISTING PAGE
		
		//ADMIN LOGIN FORM
		$login_form = $this->createFormBuilder()->getForm();        
		$login_form->handleRequest($request);    

        //if(isset($_POST) && count($_POST) > 0)
        if($login_form->isSubmitted())
        {
			$input = $_POST; //$login_form->getData(); 
            
            $username = $input['username'];
            $password = md5($input['password']);
            
            //CHECK USERNAME AND PASSWORD ARE CORRECT OR NOT
            $admin_data = $gbr->checkAdminLogin(array('username'=>$username, 'password'=>$password));
            
            if(count($admin_data) > 0)
            {
                $this->get('session')->set('LOGIN_USER_ID', 1);
                $this->get('session')->set('LOGIN_USER_TYPE', 1);
            }
            else
            {
                $this->addFlash('error', 'Invalid credentials');
                return $this->redirect($this->generateUrl('admin_login'));
            }

            return $this->redirect($this->generateUrl('guestbook.listing'));
        }

        return $this->render('home/admin_login.html.twig', 
		[
			'login_form' => $login_form->createView()
		]);            
    }

    /**
     * @Route("/logout", name="logout")
     */
    public function logout(): Response
    {
        $this->get('session')->set('LOGIN_USER_ID', '');
        $this->get('session')->set('LOGIN_USER_TYPE', '');
        return $this->redirect($this->generateUrl('home'));            
    }
}
