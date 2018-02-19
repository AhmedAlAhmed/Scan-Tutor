<?php

/**
 * Created by PhpStorm.
 * User: ahmed
 * Date: 2/19/2018
 * Time: 1:45 PM
 */
class Student
{
    private $id;
    private $first_name, $last_name, $email, $hashed_password;
    private $nationality, $city, $gender, $profile_image_url;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * @param mixed $first_name
     */
    public function setFirstName($first_name)
    {
        $this->first_name = $first_name;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * @param mixed $last_name
     */
    public function setLastName($last_name)
    {
        $this->last_name = $last_name;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getHashedPassword()
    {
        return $this->hashed_password;
    }

    /**
     * @param mixed $hashed_password
     */
    public function setHashedPassword($hashed_password)
    {
        $this->hashed_password = $hashed_password;
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
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param mixed $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * @return mixed
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @param mixed $gender
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    /**
     * @return mixed
     */
    public function getProfileImageUrl()
    {
        return $this->profile_image_url;
    }

    /**
     * @param mixed $profile_image_url
     */
    public function setProfileImageUrl($profile_image_url)
    {
        $this->profile_image_url = $profile_image_url;
    }


}


?>