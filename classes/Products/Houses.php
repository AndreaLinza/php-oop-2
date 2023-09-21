<?php
require_once __DIR__ . "/../../traits/NecessaryData.php";
require_once __DIR__ . "/../Product.php";


class Houses extends Product
{
    use NecessaryData;
    protected $img;
    protected $tipology;
    protected $price;
    protected $brand;
    protected $description;



    public function __construct( string $_name, $_category, string $_img, int $_price,)
    {

        $this->name = $_name;
        $this->category = $_category;
        $this->img = $_img;
        $this->price = $_price;
        
    }

    /**
     * Get the value of img
     */
    public function getImg()
    {
        return $this->img;
    }

    /**
     * Set the value of img
     */
    public function setImg($img): self
    {
        $this->img = $img;

        return $this;
    }

    /**
     * Get the value of tipology
     */
    public function getTipology()
    {
        return $this->tipology;
    }

    /**
     * Set the value of tipology
     */
    public function setTipology($tipology): self
    {
        $this->tipology = $tipology;

        return $this;
    }

    /**
     * Get the value of price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     */
    public function setPrice($price): self
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get the value of brand
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Set the value of brand
     */
    public function setBrand($brand): self
    {
        $this->brand = $brand;

        return $this;
    }

    /**
     * Get the value of description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     */
    public function setDescription($description): self
    {
        $this->description = $description;

        return $this;
    }
}