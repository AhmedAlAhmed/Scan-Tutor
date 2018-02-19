<?php

/**
 * Created by PhpStorm.
 * User: ahmed
 * Date: 2/19/2018
 * Time: 2:23 PM
 */
class Tutor extends Student
{
    private $availability, $price, $advertising, $specialization, $nationality,
        $mobile_phone;

    public static $AVAILABLE = "AVAILABLE";
    public static $NOT_AVAILABLE = "NOT_AVAILABLE";

    /**
     * Tutor constructor.
     */
    public function __construct()
    {
    }

    /**
     * @return mixed
     */
    public function getAvailability()
    {
        return $this->availability;
    }

    /**
     * @param mixed $availability
     */
    public function setAvailability($availability)
    {
        $this->availability = $availability;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getAdvertising()
    {
        return $this->advertising;
    }

    /**
     * @param mixed $advertising
     */
    public function setAdvertising($advertising)
    {
        $this->advertising = $advertising;
    }

    /**
     * @return mixed
     */
    public function getSpecialization()
    {
        return $this->specialization;
    }

    /**
     * @param mixed $specialization
     */
    public function setSpecialization($specialization)
    {
        $this->specialization = $specialization;
    }

    /**
     * @return mixed
     */
    public function getNationality()
    {
        return $this->nationality;
    }

    /**
     * @param mixed $nationality
     */
    public function setNationality($nationality)
    {
        $this->nationality = $nationality;
    }

    /**
     * @return mixed
     */
    public function getMobilePhone()
    {
        return $this->mobile_phone;
    }

    /**
     * @param mixed $mobile_phone
     */
    public function setMobilePhone($mobile_phone)
    {
        $this->mobile_phone = $mobile_phone;
    }



}