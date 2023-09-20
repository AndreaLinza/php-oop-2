<?php

require_once __DIR__ . "/../Category.php";

class Dogs extends Category

{

    private $name;
    protected $kinds;
    protected $icon;
    protected $age;


    public function __construct()
    {
        $this->icon = '<i class="fa-solid fa-dog"></i>';
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
     * Get the value of kinds
     */
    public function getKinds()
    {
        return $this->kinds;
    }

    /**
     * Set the value of kinds
     */
    public function setKinds($kinds): self
    {
        $this->kinds = $kinds;

        return $this;
    }

    /**
     * Get the value of icon
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * Set the value of icon
     */
    public function setIcon($icon): self
    {
        $this->icon = $icon;

        return $this;
    }

    /**
     * Get the value of age
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set the value of age
     */
    public function setAge($age): self
    {
        $this->age = $age;

        return $this;
    }
}