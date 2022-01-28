<?php

class user_meetic {
    public int $id;
    public string $name;
    public string $firstname;
    public string $email;
    public string $date;
    public string $genre;
    public string $location;
    public array $loisir;
    
    

    public function __construct($id,$name,$firstname,$email,$date,$genre,$location,$loisir)
    {
        $this->id = $id;
        $this->name = $name;
        $this->firstname = $firstname;
        $this->email = $email;
        $this->date = $date;
        $this->genre = $genre;
        $this->location = $location;
        $this->loisir = $loisir;
        
        
        
    }
    public function getId()
    {
        return $this->id;
    }
    
    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getFirstname()
    {
        return $this->firstname;
    }

    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }
    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function getDate()
    {
        return $this->date;
    }

    public function setDate($date)
    {
        $this->date = $date;
    }
    public function getGenre()
    {
        return $this->genre;
    }

    public function setGenre($genre)
    {
        $this->genre = $genre;
    }


    public function getLocation()
    {
        return $this->location;
    }

    public function setLocation($location)
    {
        $this->location = $location;
    }
   
    public function getLoisir()
    {
        return $this->loisir;
    }

    public function setLoisir($loisir)
    {
        $this->loisir = $loisir;
    }
   
   
    

}




?>

