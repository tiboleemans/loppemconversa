<?php

include "StudentRepository.php";

$config = include("config.php");
$db = new PDO($config["db"], $config["username"], $config["password"]);
$students = new StudentRepository($db);


switch($_SERVER["REQUEST_METHOD"]) {

    case "POST":
        $result = $students->insert(array(
            "sessionLanguage" => $_POST["langInput"],
            "sessionPeriod" => $_POST["periodeInput"],
            "studentName" => $_POST["lastNameStudent"],
            "studentFirstname" => $_POST["firstNameStudent"],
            "studentBirthdate" => $_POST["birthDateInput"],
            "studentGender" => $_POST["genderInput"],
            "parentName" => $_POST["lastNameParent"],
            "parentFirstname" => $_POST["firstNameParent"],
            "parentMail" => $_POST["email"],
            "parentRelation" => $_POST["relationInput"],
            "parentStreet" => $_POST["streetParent"],
            "parentHousenr" => $_POST["streetNumParent"],
            "parentBusnr" => $_POST["busNrParent"],
            "parentZipcode" => $_POST["zipCodeParent"],
            "parentCity" => $_POST["cityParent"],
            "parentCell" => $_POST["gsm"],
            "parentUrgent" => $_POST["telUrgent"],
            "schoolName" => $_POST["nameSchool"],
            "schoolStreet" => $_POST["streetSchool"],
            "schoolHousenr" => $_POST["streetNumSchool"],
            "schoolBusnr" => $_POST["busNrSchool"],
            "schoolZipcode" => $_POST["zipCodeSchool"],
            "schoolCity" => $_POST["citySchool"],
            "profTitle" => $_POST["titreProfInput"],
            "profName" => $_POST["nameProf"],
            "langYears" => $_POST["amountYearsInput"],
            "langHours" => $_POST["amountHoursInput"],
            "immersion" => $_POST["immersionInput"],
            "exam" => $_POST["rapportInput"],
            "referral" => $_POST["apportedStudent"],
            "contact" => $_POST["contactInput"],
            "extraInformation" => $_POST["addedInfo"],
            "allergiesInfo" => $_POST["allergiesInfo"],
            "interest" => $_POST["comment"]
        ));
        break;

/*    case "POST":
        $result = $students->insert(array(
            "naam" => $_POST["naam"],
            "voornaam" => $_POST["voornaam"],
            "address" => $_POST["address"],
            "married" => $_POST["married"] === "true" ? 1 : 0,
            "country_id" => intval($_POST["country_id"])
        ));
        break;w

    case "PUT":
        parse_str(file_get_contents("php://input"), $_PUT);

        $result = $students->update(array(
            "id" => intval($_PUT["id"]),
            "name" => $_PUT["name"],
            "age" => intval($_PUT["age"]),
            "address" => $_PUT["address"],
            "married" => $_PUT["married"] === "true" ? 1 : 0,
            "country_id" => intval($_PUT["country_id"])
        ));
        break;

    case "DELETE":
        parse_str(file_get_contents("php://input"), $_DELETE);

        $result = $students->remove(intval($_DELETE["id"]));
        break;*/
}

header("Content-Type: application/json");
echo json_encode($result);

?>
