<?php

class chapter{

    private $id;
    private $nom;
   
    private $category;
   
    function __construct($id,$nom,$category)
    {
       $this->id=$id;
        $this->nom=$nom;
   
        $this->category=$category;
           
    }
    
    /**
     * Get the value of id
     */
     function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */
     function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of nom
     */
    function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */
     function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of image
     */
     function getImage()
    {
        return $this->image;
    }

    /**
     * Set the value of image
     *
     * @return  self
     */
     function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get the value of category
     */
     function getCategory()
    {
        return $this->category;
    }

    /**
     * Set the value of category
     *
     * @return  self
     */
     function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    }



?>