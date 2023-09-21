<?php
require_once __DIR__ . "/Pets/Bears.php";
require_once __DIR__ . "/Pets/Cats.php";
require_once __DIR__ . "/Pets/Dogs.php";


class Product
{

    protected $name;
    protected $imgProduct;
    protected $category;



    public function __construct(string $_name, string $_category)
    {

        $this->setName($_name);
        $this->setCategory($_category);
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
    public function setName($name)
    {
        $this->name = $name;

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
