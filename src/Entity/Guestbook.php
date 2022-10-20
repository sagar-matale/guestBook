<?php

namespace App\Entity;

use App\Repository\GuestbookRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=GuestbookRepository::class)
 */
class Guestbook
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $gb_id;
    public function getGb_id(): ?int { return $this->gb_id; }
    
    /**
     * @ORM\Column(type="string", length=100)
     */
    private $name;
    public function getName(): ?string { return $this->name; }
    public function setName(string $name): self { $this->name = $name; return $this; }

    /**
     * @ORM\Column(type="string", length=250)
     */
    private $password;
    public function getPassword(): ?string { return $this->password; }
    public function setPassword(string $password): self { $this->password = $password; return $this; }

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $image;
    public function getImage(): ?string { return $this->image; }
    public function setImage(?string $image): self { $this->image = $image; return $this; }

    /**
     * @ORM\Column(type="integer")
     */
    private $role;
    public function getRole(): ?int { return $this->role; }
    public function setRole(?int $role): self { $this->role = $role; return $this; }

    /**
     * @ORM\Column(type="integer")
     */
    private $is_approved;
    public function getIs_approved(): ?int { return $this->is_approved; }
    public function setIs_approved(?int $is_approved): self { $this->is_approved = $is_approved; return $this; }

    /**
     * @ORM\Column(type="integer")
     */
    private $is_deleted;
    public function getIs_deleted(): ?int { return $this->is_deleted; }
    public function setIs_deleted(?int $is_deleted): self { $this->is_deleted = $is_deleted; return $this; }

    /**
     * @ORM\Column(type="datetime")
     */
    private $created_on;
    public function getCreated_on() { return $this->created_on; }
    public function setCreated_on($created_on): self { $this->created_on = $created_on; return $this; }

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $created_by; 
    public function getCreated_by(): ?string { return $this->created_by; }
    public function setCreated_by(?string $created_by): self { $this->created_by = $created_by; return $this; }  
    
    /**
     * @ORM\Column(type="datetime")
     */
    private $updated_on;
    public function getUpdated_on() { return $this->updated_on; }
    public function setUpdated_on($updated_on): self { $this->updated_on = $updated_on; return $this; }

    /**
     * @ORM\Column(type="integer")
     */
    private $updated_by; 
    public function getUpdated_by(): ?int { return $this->updated_by; }
    public function setUpdated_by(?int $updated_by): self { $this->updated_by = $updated_by; return $this; }
    
    /**
     * @ORM\Column(type="datetime")
     */
    private $deleted_on;
    public function getDeleted_on() { return $this->deleted_on; }
    public function setDeleted_on($deleted_on): self { $this->deleted_on = $deleted_on; return $this; }

    /**
     * @ORM\Column(type="integer")
     */
    private $deleted_by; 
    public function getDeleted_by(): ?int { return $this->deleted_by; }
    public function setDeleted_by(?int $deleted_by): self { $this->deleted_by = $deleted_by; return $this; }
}
