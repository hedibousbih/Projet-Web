<?php

class Course{
    private $id;
    private $nom;
    private $image;
    private $category;
    private $teacher;
    private $teacher_image;
    private $free;

    function __construct($nom,$image,$category,$teacher,$teacher_image,$free)
    {

        $this->nom=$nom;
        $this->image=$image;
        $this->category=$category;
        $this->teacher=$teacher;
        $this->teacher_image=$teacher_image;
        $this->free=$free;    
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

    /**
     * Get the value of free
     */
     function getFree()
    {
        return $this->free;
    }

    /**
     * Set the value of free
     *
     * @return  self
     */
     function setFree($free)
    {
        $this->free = $free;

        return $this;
    }

    /**
     * Get the value of teacher
     */
    public function getTeacher()
    {
        return $this->teacher;
    }

    /**
     * Set the value of teacher
     *
     * @return  self
     */
    public function setTeacher($teacher)
    {
        $this->teacher = $teacher;

        return $this;
    }

    /**
     * Get the value of teacher_image
     */
    public function getTeacherImage()
    {
        return $this->teacher_image;
    }

    /**
     * Set the value of teacher_image
     *
     * @return  self
     */
    public function setTeacherImage($teacher_image)
    {
        $this->teacher_image = $teacher_image;

        return $this;
    }
}



?>