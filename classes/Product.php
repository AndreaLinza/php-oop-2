<?php
include_once __DIR__ . "/Pets/Bears.php";
include_once __DIR__ . "/Pets/Cats.php";
include_once __DIR__ . "/Pets/Dogs.php";

class Product
{
    
    private $serial;
    protected $name;
    protected $imgProduct;
    protected $company;
    protected $category;
    
    
    
    public function __construct( string $_name, int $_serial, $_category){

        $this->name = $_name;
        $this->serial = $_serial;        
        $this->category = $_category;

    }
    
    
/**
     * Get the value of serial
     */
    public function getSerial()
    {
        return $this->serial;
    }

    /**
     * Set the value of serial
     */
    public function setSerial($serial): self
    {
        $this->serial = $serial;

        return $this;
    }

    /**
     * Get the value of imgProduct
     */
    public function getImgProduct()
    {
        return $this->imgProduct;
    }

    /**
     * Set the value of imgProduct
     */
    public function setImgProduct($imgProduct): self
    {
        $this->imgProduct = $imgProduct;

        return $this;
    }

    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     */
    public function setName($name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of company
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * Set the value of company
     */
    public function setCompany($company): self
    {
        $this->company = $company;

        return $this;
    }

    /**
     * Get the value of category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set the value of category
     */
    public function setCategory($category): self
    {
        $this->category = $category;

        return $this;
    }
}