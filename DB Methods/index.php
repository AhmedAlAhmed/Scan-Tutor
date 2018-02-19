<?php
/**
 * Created by PhpStorm.
 * User: ahmed
 * Date: 2/19/2018
 * Time: 1:38 PM
 */
    require_once 'dbconfig.php';
    global $conn;


    if($conn == null) {
        // an error occurred.
        exit(-1);
    }

    require_once 'services.api.php';


    $x = new Tutor();

    $x->setFirstName("xxxxx");
    $x->setEmail("xxxxxxxxxxxxxxxxx@asdasd.com");
    $x->setLastName("asdnasd");
    $x->setCity("asdnasd");
    $x->setHashedPassword("asdnaskjdnas");
    $x->setNationality("asdjnaskjdsnad");
    $x->setGender("a");
    $x->setProfileImageUrl("ajsnd");
    $x->setMobilePhone("0999");
    $x->setAdvertising("aaaaaa");
    $x->setPrice(123);
    $x->setSpecialization("asjdnajksndad");
    $x->setAvailability(Tutor::$NOT_AVAILABLE);
    $x->setId(12);


    $ser = new Services($conn);



    $sc = new Schedule();
    $sc->setDay("day1");
    $sc->setHour("03:22 PM");
    $sc->setPlace("place 2");
    $sc->setTutorId(12);
    $sc->setStudentId(3);
    $sc->setId(3);

    print_r($ser->AllTutorSchedules(12));




?>