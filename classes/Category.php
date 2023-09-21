<?php
require_once __DIR__ . "/Products/Foods.php";
require_once __DIR__ . "/Products/Toys.php";
require_once __DIR__ . "/Products/Houses.php";


class Category

{
    protected $species;
    protected $imgSpecies;


    public function __construct(string $_species, string $_imgSpecies)
    {
        $this->species = $_species;  
        $this->imgSpecies = $_imgSpecies;  
    }


    /**
     * Get the value of species
     */
    public function getSpecies()
    {
        return $this->species;
    }

    /**
     * Set the value of species
     */
    public function setSpecies($species): self
    {
        $this->species = $species;

        return $this;
    }

    /**
     * Get the value of imgSpecies
     */
    public function getImgSpecies()
    {
        return $this->imgSpecies;
    }

    /**
     * Set the value of imgSpecies
     */
    public function setImgSpecies($imgSpecies): self
    {
        $this->imgSpecies = $imgSpecies;

        return $this;
    }
}
