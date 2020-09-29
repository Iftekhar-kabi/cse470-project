<?php
class newfile
{

    public $first_name;

    /**
     * @return string
     */

    public $lastname;

    /**
     * @return string
     */

    public function getUsername()
    {

        return "$this->first_name $this->lastname";
    }

    public $email;

    /**
     * @return string
     */


    public function getEmail()
    {
        return $this->email;
    }


    public $disease;
    /**
     * @return string
     */
    public $admission_date;

    /**
     * @return string
     */


    public function setPaitent()
    {
        return "$this->first_name $this->lastname $this->email $this->disease $this->admission_date";
    }

    public $doctor;
    /**
     * @return string
     */
    public $specialist;
    /**
     * @return string
     */
    public $time;

    /**
     * @return double
     */
    public function setdoctor()
    {
        return "$this->first_name $this->lastname $this->email $this->specialist $this->time ";
    }

    public function getdoctor()
    {
        return $this->doctor;
    }

    public $Vehical_name;
    /**
     * @return string
     */
    public $company;
    /**
     * @return string
     */
    public $date_of_service;
    /**
     * @return string
     */
    public $cost;

    /**
     * @return int
     */
    public function InsertVehical()
    {

        return "$this->Vehical_name $this->company $this->date_of_service $this->cost";
    }

    public $PayBill;
    /**
     * @return int
     */
    public $Payment_date;

    /**
     * @return string
     */
    public function posttransiction()
    {
        return "$this->PayBill $this->Payment_date";
    }
    public $Items;
    /**
     * @return int
     */
    public $New_purchase;

    /**
     * @return int
     */
    public function HospitalAssets()
    {
        return "$this->Items $this->New_purchase $this->date_of_service ";

    }

}