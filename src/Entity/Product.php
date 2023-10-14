<?php

namespace LearnDoctrine\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'products')]
class Product
{
    #[ORM\Id]
    #[ORM\Column(type: 'integer')]
    #[ORM\GeneratedValue]
    private int|null $id = null;

    #[ORM\Column(type: 'string')]
    private string $title;
    
    #[ORM\Column(type: 'float')]
    private float $price;

    public function setTitle(string $title):void
    {
        $this->title = $title;
    }

    public function setPrice(float $price):void
    {
        $this->price = $price;
    }

    public function getPrice():float
    {
        return $this->title;
    }

    public function getTitle():string
    {
        return $this->title;
    }
}
