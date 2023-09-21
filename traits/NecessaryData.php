<?php

trait NecessaryData
{


    private $serial;
    protected $company;


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
}
