<?php

namespace LearnDoctrine\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'users')]
class User
{
    #[ORM\Id]
    #[ORM\Column(type: 'integer')]
    #[ORM\GeneratedValue]
    private int|null $id = null;

    #[ORM\Column(type: 'string')]
    private string $name;
    
    #[ORM\Column(type: 'string')]
    private string $password;

    public function setName(string $name):void
    {
        $this->name = $name;
    }

    public function setPassword(string $password):void
    {
        $this->password = password_hash($password, PASSWORD_DEFAULT);
    }

    public function getName():string
    {
        return $this->name;
    }
}
