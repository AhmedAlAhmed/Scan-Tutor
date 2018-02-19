<?php
/**
 * Created by PhpStorm.
 * User: ahmed
 * Date: 2/19/2018
 * Time: 7:59 PM
 */

class Schedule
{
    private $id, $hour,$day, $place, $tutor_id, $student_id;

    /**
     * Schedule constructor.
     */
    public function __construct()
    {
    }

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
    public function getHour()
    {
        return $this->hour;
    }

    /**
     * @param mixed $hour
     */
    public function setHour($hour)
    {
        $this->hour = $hour;
    }

    /**
     * @return mixed
     */
    public function getDay()
    {
        return $this->day;
    }

    /**
     * @param mixed $day
     */
    public function setDay($day)
    {
        $this->day = $day;
    }

    /**
     * @return mixed
     */
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * @param mixed $place
     */
    public function setPlace($place)
    {
        $this->place = $place;
    }

    /**
     * @return mixed
     */
    public function getTutorId()
    {
        return $this->tutor_id;
    }

    /**
     * @param mixed $tutor_id
     */
    public function setTutorId($tutor_id)
    {
        $this->tutor_id = $tutor_id;
    }

    /**
     * @return mixed
     */
    public function getStudentId()
    {
        return $this->student_id;
    }

    /**
     * @param mixed $student_id
     */
    public function setStudentId($student_id)
    {
        $this->student_id = $student_id;
    }




}





?>