<?php 

namespace App\Entity\Traits;

trait Timestampable
{
    /**
     * @ORM\HasLifecycleCallbacks()
     */
    
    /**
     * @ORM\Column(type="datetime", options={"default": "CURRENT_TIMESTAMP"})
     */
    private $createAt;

    /**
     * @ORM\Column(type="datetime", options={"default": "CURRENT_TIMESTAMP"})
     */
    private $updateAt;

    
    public function getCreateAt(): ?\DateTimeInterface
    {
        return $this->createAt;
    }

    public function setCreateAt(\DateTimeInterface $createAt): self
    {
        $this->createAt = $createAt;

        return $this;
    }

    public function getUpdateAt(): ?\DateTimeInterface
    {
        return $this->updateAt;
    }

    public function setUpdateAt(\DateTimeInterface $updateAt): self
    {
        $this->updateAt = $updateAt;

        return $this;
    }


    // Création et Mise à jour de la date de Création et date de modification de notre Pin
    /**
    *@ORM\PrePersist
    *@ORM\PreUpdate
    */
    public function updateTimestamps()
    {
        if ($this->getCreateAt() === null){
            $this->setCreateAt(new \DateTimeImmutable);
        }
       
       $this->setUpdateAt(new \DateTimeImmutable);
    }
}