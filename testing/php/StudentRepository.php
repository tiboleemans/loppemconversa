<?php

include "Student.php";

class StudentRepository {

    protected $db;

    public function __construct(PDO $db) {
        $this->db = $db;
    }

    private function read($row) {
        $result = new Student();
        $result->id = $row["ID"];
        $result->inscriptionDate = $row["INSCRIPTION_DATE"];
        $result->sessionLanguage = $row["SESSION_LANGUAGE"];
        $result->sessionPeriod = $row["SESSION_PERIOD"];
        $result->studentName = $row["STUDENT_NAME"];
        $result->studentFirstname = $row["STUDENT_FIRSTNAME"];
        $result->studentBirthdate = $row["STUDENT_BIRTHDATE"];
        $result->studentGender = $row["STUDENT_GENDER"];
        $result->parentName = $row["PARENT_NAME"];
        $result->parentFirstname = $row["PARENT_FIRSTNAME"];
        $result->parentMail = $row["PARENT_MAIL"];
        $result->parentRelation = $row["PARENT_RELATION"];
        $result->parentStreet = $row["PARENT_STREET"];
        $result->parentHousenr = $row["PARENT_HOUSENR"];
        $result->parentBusnr = $row["PARENT_BUSNR"];
        $result->parentZipcode = $row["PARENT_ZIPCODE"];
        $result->parentCity = $row["PARENT_CITY"];
        $result->parentCell = $row["PARENT_CELL"];
        $result->parentUrgent = $row["PARENT_URGENT"];
        $result->schoolName = $row["SCHOOL_NAME"];
        $result->schoolStreet = $row["SCHOOL_STREET"];
        $result->schoolHousenr = $row["SCHOOL_HOUSENR"];
        $result->schoolBusnr = $row["SCHOOL_BUSNR"];
        $result->schoolZipcode = $row["SCHOOL_ZIPCODE"];
        $result->schoolCity = $row["SCHOOL_CITY"];
        $result->profTitle = $row["PROF_TITLE"];
        $result->profName = $row["PROF_NAME"];
        $result->langYears = $row["LANG_YEARS"];
        $result->langHours = $row["LANG_HOURS"];
        $result->immersion = $row["IMMERSION"];
        $result->exam = $row["EXAM"];
        $result->referral = $row["REFERRAL"];
        $result->contact = $row["CONTACT"];
        $result->extraInformation = $row["EXTRA_INFORMATION"];
        $result->allergiesInfo = $row["ALLERGIES_INFORMATION"];
        $result->interest = $row["INTEREST"];
        $result->cancellation = $row["CANCELLATION"];
        $result->waitList = $row["WAIT_LIST"];
        return $result;
    }

    public function insert($data){
        $sql = "INSERT INTO Inschrijvingen2018 (SESSION_LANGUAGE, SESSION_PERIOD, STUDENT_NAME, STUDENT_FIRSTNAME, STUDENT_BIRTHDATE, STUDENT_GENDER, PARENT_NAME, PARENT_FIRSTNAME, PARENT_MAIL, PARENT_RELATION, PARENT_STREET, PARENT_HOUSENR, PARENT_BUSNR, PARENT_ZIPCODE, PARENT_CITY, PARENT_CELL, PARENT_URGENT, SCHOOL_NAME, SCHOOL_STREET, SCHOOL_HOUSENR, SCHOOL_BUSNR, SCHOOL_ZIPCODE, SCHOOL_CITY, PROF_TITLE, PROF_NAME, LANG_YEARS, LANG_HOURS, IMMERSION, EXAM, REFERRAL, CONTACT, EXTRA_INFORMATION, ALLERGIES_INFORMATION, INTEREST) VALUES (:sessionLanguage, :sessionPeriod, :studentName, :studentFirstname, :studentBirthdate, :studentGender, :parentName, :parentFirstname, :parentMail, :parentRelation, :parentStreet, :parentHousenr, :parentBusnr, :parentZipcode, :parentCity, :parentCell, :parentUrgent, :schoolName, :schoolStreet, :schoolHousenr, :schoolBusnr, :schoolZipcode, :schoolCity, :profTitle, :profName, :langYears, :langHours, :immersion, :exam, :referral, :contact, :allergiesInfo, :extraInformation, :interest)";

        $q = $this->db->prepare($sql);
        $q->bindParam(":sessionLanguage", $data["sessionLanguage"]);
        $q->bindParam(":sessionPeriod", $data["sessionPeriod"]);
        $q->bindParam(":studentName", $data["studentName"]);
        $q->bindParam(":studentFirstname", $data["studentFirstname"]);
        $birthdateFormFormat = DateTime::createFromFormat('d/m/Y', $data["studentBirthdate"]);
        $birthdateDbFormat=$birthdateFormFormat->format('Y-m-d');
        $q->bindParam(":studentBirthdate", $birthdateDbFormat);
        $q->bindParam(":studentGender", $data["studentGender"]);
        $q->bindParam(":parentName", $data["parentName"]);
        $q->bindParam(":parentFirstname", $data["parentFirstname"]);
        $q->bindParam(":parentMail", $data["parentMail"]);
        $q->bindParam(":parentRelation", $data["parentRelation"]);
        $q->bindParam(":parentStreet", $data["parentStreet"]);
        $q->bindParam(":parentHousenr", $data["parentHousenr"]);
        $q->bindParam(":parentBusnr", $data["parentBusnr"]);
        $q->bindParam(":parentZipcode", $data["parentZipcode"]);
        $q->bindParam(":parentCity", $data["parentCity"]);
        $q->bindParam(":parentCell", $data["parentCell"]);
        $q->bindParam(":parentUrgent", $data["parentUrgent"]);
        $q->bindParam(":schoolName", $data["schoolName"]);
        $q->bindParam(":schoolStreet", $data["schoolStreet"]);
        $q->bindParam(":schoolHousenr", $data["schoolHousenr"]);
        $q->bindParam(":schoolBusnr", $data["schoolBusnr"]);
        $q->bindParam(":schoolZipcode", $data["schoolZipcode"]);
        $q->bindParam(":schoolCity", $data["schoolCity"]);
        $q->bindParam(":profTitle", $data["profTitle"]);
        $q->bindParam(":profName", $data["profName"]);
        $q->bindParam(":langYears", $data["langYears"]);
        $q->bindParam(":langHours", $data["langHours"]);
        $q->bindParam(":immersion", $data["immersion"]);
        $q->bindParam(":exam", $data["exam"]);
        $q->bindParam(":referral", $data["referral"]);
        $q->bindParam(":contact", $data["contact"]);
        $q->bindParam(":extraInformation", $data["extraInformation"]);
        $q->bindParam(":allergiesInfo", $data["allergiesInfo"]);
        $q->bindParam(":interest", $data["interest"]);
        $q->execute();

        print_r($q->errorInfo());



        return $this->getById($this->db->lastInsertId());

    }

    public function getById($id) {
        $sql = "SELECT * FROM Inschrijvingen2018 WHERE id = :id";
        $q = $this->db->prepare($sql);
        $q->bindParam(":id", $id, PDO::PARAM_INT);
        $q->execute();
        $rows = $q->fetchAll();
        return $this->read($rows[0]);
    }

}

?>