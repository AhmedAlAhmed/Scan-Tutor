<?php
/**
 * Created by PhpStorm.
 * User: ahmed
 * Date: 2/19/2018
 * Time: 1:42 PM
 */

require_once './Models/Student.php';
require_once './Models/Tutor.php';
require_once './Models/Schedule.php';

/**
 * Class Services
 */
class Services
{

    /**
     * @var
     */
    private $conn;

    /**
     * @param $connection
     */
    private function init($connection)
    {
        $this->conn = $connection;
    }

    /**
     * Services constructor.
     * @param $conn
     */
    function __construct($conn)
    {
        $this->conn = $conn;
    }


    /**
     * @param $student
     */
    function PushStudent($student)
    {
        $sql_query = "INSERT INTO student (ID, FIRST_NAME, LAST_NAME, EMAIL, HASHED_PASSWORD, NATIONALITY, CITY, GENDER, PROFILE_IMAGE_URL) ";
        $sql_query .= "VALUES (NULL, :fn, :ln, :email, :hpwd, :nat, :city, :gender, :url);";

        $stmt = $this->conn->prepare($sql_query);

        $fn = $student->getFirstName();
        $ln = $student->getLastName();
        $email = $student->getEmail();
        $hpwd = $student->getHashedPassword();
        $nat = $student->getNationality();
        $city = $student->getCity();
        $gender = $student->getGender();
        $url = $student->getProfileImageUrl();


        $stmt->bindParam(':fn', $fn);
        $stmt->bindParam(':ln', $ln);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':hpwd', $hpwd);
        $stmt->bindParam(':nat', $nat);
        $stmt->bindParam(':city', $city);
        $stmt->bindParam(':gender', $gender);
        $stmt->bindParam(':url', $url);

        $stmt->execute();

    }

    /**
     * @param $id
     * @return mixed
     */
    function DeleteStudent($id)
    {
        $stmt = $this->conn->prepare("DELETE FROM STUDENT WHERE ID = :id");
        $stmt->bindParam('id', $id);
        return $stmt->execute();
    }


    /**
     * @param $st
     * @return mixed
     */
    function UpdateStudent($student)
    {
        $sql = "UPDATE STUDENT SET FIRST_NAME=:fn, LAST_NAME=:ln, EMAIL=:email, HASHED_PASSWORD=:hpwd, NATIONALITY=:nat";
        $sql .= ", CITY=:city, GENDER=:gender, PROFILE_IMAGE_URL=:url WHERE ID=:id";

        $stmt = $this->conn->prepare($sql);


        $fn = $student->getFirstName();
        $ln = $student->getLastName();
        $email = $student->getEmail();
        $hpwd = $student->getHashedPassword();
        $nat = $student->getNationality();
        $city = $student->getCity();
        $gender = $student->getGender();
        $url = $student->getProfileImageUrl();
        $id = $student->getId();

        $stmt->bindParam(':fn', $fn);
        $stmt->bindParam(':ln', $ln);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':hpwd', $hpwd);
        $stmt->bindParam(':nat', $nat);
        $stmt->bindParam(':city', $city);
        $stmt->bindParam(':gender', $gender);
        $stmt->bindParam(':url', $url);
        $stmt->bindParam(':id', $id);

        return $stmt->execute();
    }


    /**
     * @param Tutor $tutor
     * @return mixed
     */
    function PushTutor(Tutor $tutor)
    {
        $fn = $tutor->getFirstName();
        $ln = $tutor->getLastName();
        $email = $tutor->getEmail();
        $gender = $tutor->getGender();
        $city = $tutor->getCity();
        $nat = $tutor->getNationality();
        $hpwd = $tutor->getHashedPassword();
        $url = $tutor->getProfileImageUrl();
        $price = $tutor->getPrice();
        $avail = $tutor->getAvailability();
        $adv = $tutor->getAdvertising();
        $spec = $tutor->getSpecialization();
        $mobile = $tutor->getMobilePhone();


        $sql = "INSERT INTO TUTOR (ID, EMAIL, FIRST_NAME, LAST_NAME, HASHED_PASSWORD, AVAILABILITY, PRICE, ADVERTISING, SPECIALIZATION, NATIONALITY, MOBILE_PHONE, CITY, GENDER, PROFILE_IMAGE_URL )";
        $sql .= " VALUES(NULL, :email, :fn, :ln, :hpwd, :avail, :price, :adv, :spec, :nat, :mobile, :city, :gender, :url)";

        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam('email', $email);
        $stmt->bindParam('fn', $fn);
        $stmt->bindParam('ln', $ln);
        $stmt->bindParam('hpwd', $hpwd);
        $stmt->bindParam('avail', $avail);
        $stmt->bindParam('price', $price);
        $stmt->bindParam('adv', $adv);
        $stmt->bindParam('spec', $spec);
        $stmt->bindParam('nat', $nat);
        $stmt->bindParam('mobile', $mobile);
        $stmt->bindParam('city', $city);
        $stmt->bindParam('gender', $gender);
        $stmt->bindParam('url', $url);

        return $stmt->execute();

    }


    /**
     * @param $id
     * @return mixed
     */
    function DeleteTutor($id)
    {
        $sql = "DELETE FROM TUTOR WHERE ID=:id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam('id', $id);
        return $stmt->execute();
    }


    /**
     * @param $tutor
     * @return mixed
     */
    function UpdateTutor($tutor)
    {
        $sql = "UPDATE TUTOR SET EMAIL=:email, FIRST_NAME=:fn, LAST_NAME=:ln, HASHED_PASSWORD=:hpwd, AVAILABILITY=:avail,";
        $sql .= "PRICE=:price, ADVERTISING=:adv, SPECIALIZATION=:spec, NATIONALITY=:nat, MOBILE_PHONE=:mobile, CITY=:city, GENDER=:gender, PROFILE_IMAGE_URL=:url";
        $sql .= " WHERE ID=:id";

        $stmt = $this->conn->prepare($sql);

        $fn = $tutor->getFirstName();
        $ln = $tutor->getLastName();
        $email = $tutor->getEmail();
        $gender = $tutor->getGender();
        $city = $tutor->getCity();
        $nat = $tutor->getNationality();
        $hpwd = $tutor->getHashedPassword();
        $url = $tutor->getProfileImageUrl();
        $price = $tutor->getPrice();
        $avail = $tutor->getAvailability();
        $adv = $tutor->getAdvertising();
        $spec = $tutor->getSpecialization();
        $mobile = $tutor->getMobilePhone();
        $id = $tutor->getId();

        $stmt->bindParam('email', $email);
        $stmt->bindParam('fn', $fn);
        $stmt->bindParam('ln', $ln);
        $stmt->bindParam('hpwd', $hpwd);
        $stmt->bindParam('avail', $avail);
        $stmt->bindParam('price', $price);
        $stmt->bindParam('adv', $adv);
        $stmt->bindParam('spec', $spec);
        $stmt->bindParam('nat', $nat);
        $stmt->bindParam('mobile', $mobile);
        $stmt->bindParam('city', $city);
        $stmt->bindParam('gender', $gender);
        $stmt->bindParam('url', $url);
        $stmt->bindParam('id', $id);

        return $stmt->execute();

    }


    /**
     * @return mixed
     */
    function AllStudents()
    {
        $stmt = $this->conn->prepare("SELECT * FROM STUDENT");
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt->fetchAll();
    }

    /**
     * @return mixed
     */
    function AllTutors()
    {
        $stmt = $this->conn->prepare("SELECT * FROM TUTOR");
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt->fetchAll();
    }

    /**
     * @param int $id
     * @return mixed
     */
    function GetStudentByID($id)
    {
        $stmt = $this->conn->prepare("SELECT * FROM STUDENT WHERE ID=:id");
        $stmt->bindParam('id', $id);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $res = $stmt->fetchAll();
        if (count($res) > 0) return $res[0];
        else return false;
    }

    /**
     * @param int $id
     * @return mixed
     */
    function GetTutorByID($id)
    {
        $stmt = $this->conn->prepare("SELECT * FROM TUTOR WHERE ID=:id");
        $stmt->bindParam('id', $id);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $res = $stmt->fetchAll();
        if (count($res) > 0) return $res[0];
        else return false;
    }

    /**
     * @param int $studentID
     * @param int $tutorID
     * @return mixed
     */
    function SendStudentRequest($studentID, $tutorID)
    {
        $stmt = $this->conn->prepare("INSERT INTO tutor_teach_student VALUES(:sid, :tid, 'pending', -1, '')");
        $stmt->bindParam('sid', $studentID);
        $stmt->bindParam('tid', $tutorID);
        return $stmt->execute();
    }

    /**
     * @param int $studentID
     * @param int $tutorID
     * @return mixed
     */
    function TutorAcceptRequest($studentID, $tutorID)
    {
        $sql = "UPDATE tutor_teach_student SET STATE='accepted' WHERE STUDENT_ID=:sid AND TUTOR_ID=:tid";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam('sid', $studentID);
        $stmt->bindParam('tid', $tutorID);
        return $stmt->execute();
    }

    /**
     * @param int $studentID
     * @param int $tutorID
     * @return mixed
     */
    function TutorRejectRequest($studentID, $tutorID)
    {
        $sql = "UPDATE tutor_teach_student SET STATE='rejected' WHERE STUDENT_ID=:sid AND TUTOR_ID=:tid";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam('sid', $studentID);
        $stmt->bindParam('tid', $tutorID);
        return $stmt->execute();
    }

    /**
     * Return an array contains all requests sent from students to a specific tutor.
     * @param int $tutorID
     * @param int $filter
     * @return mixed
     */
    function AllStudentRequests($tutorID, $filter = -1)
    {
        $fltr = " AND STATE LIKE '$filter'";
        if ($filter == -1) $fltr = '';
        $sql = "SELECT * FROM tutor_teach_student WHERE TUTOR_ID=:tid $fltr";

        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam('tid', $tutorID);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();
        $res = $stmt->fetchAll();
        return $res;

    }

    /**
     * Return an array contains all requests sent from a specific student to all the tutors.
     * @param int $student_id
     * @return mixed
     */
    function AllTutorRequests($student_id)
    {
        $sql = "SELECT * FROM tutor_teach_student WHERE STUDENT_ID=:sid";

        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam('sid', $student_id);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();
        $res = $stmt->fetchAll();
        return $res;
    }


    function SendFeedback($student_id, $tutor_id, $rate, $feedback)
    {
        $sql = "UPDATE tutor_teach_student SET RATE=:rate, FEEDBACK=:feedback WHERE STUDENT_ID=:sid AND TUTOR_ID=:tid";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam('rate', $rate);
        $stmt->bindParam('feedback', $feedback);
        $stmt->bindParam('sid', $student_id);
        $stmt->bindParam('tid', $tutor_id);

        return $stmt->execute();
    }

    function PushSchedule($schedule)
    {
        $hour = $schedule->getHour();
        $day = $schedule->getDay();
        $place = $schedule->getPlace();
        $tid = $schedule->getTutorId();
        $sid = $schedule->getStudentId();

        $sql = "INSERT INTO schedule VALUES(NULL, :h, :d, :p, :tid, :sid)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam('h', $hour);
        $stmt->bindParam('d', $day);
        $stmt->bindParam('p', $place);
        $stmt->bindParam('tid', $tid);
        $stmt->bindParam('sid', $sid);

        return $stmt->execute();
    }

    function DeleteSchedule($id)
    {
        $sql = "DELETE FROM SCHEDULE WHERE SCHEDUAL_ID=:id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam('id', $id);
        return $stmt->execute();
    }

    function UpdateSchedule(Schedule $schedule)
    {
        $id = $schedule->getId();
        $hour = $schedule->getHour();
        $day = $schedule->getDay();
        $place = $schedule->getPlace();

        $sql = "UPDATE SCHEDULE SET Hour=:h, Day=:d, PLACE_TEACHING=:p WHERE SCHEDUAL_ID=:id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam('h', $hour);
        $stmt->bindParam('d', $day);
        $stmt->bindParam('p', $place);
        $stmt->bindParam('id', $id);

        return $stmt->execute();

    }

    function AllStudentSchedules($student_id)
    {
        $sql = "SELECT * FROM SCHEDULE WHERE STUDENT_ID=:id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam('id', $student_id);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);

        return $stmt->fetchAll();
    }


    function AllTutorSchedules($tutor_id)
    {
        $sql = "SELECT * FROM SCHEDULE WHERE TUTOR_ID=:id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam('id', $tutor_id);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);

        return $stmt->fetchAll();
    }
}


?>