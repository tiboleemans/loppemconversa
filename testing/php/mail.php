<?php

$langInput = strip_tags(htmlspecialchars($_POST["langInput"]));
$periodeInput = strip_tags(htmlspecialchars($_POST["periodeInput"]));
$lastNameStudent = strip_tags(htmlspecialchars($_POST["lastNameStudent"]));
$firstNameStudent = strip_tags(htmlspecialchars($_POST["firstNameStudent"]));
$birthDateInput = strip_tags(htmlspecialchars($_POST["birthDateInput"]));
$genderInput = strip_tags(htmlspecialchars($_POST["genderInput"]));
$lastNameParent = strip_tags(htmlspecialchars($_POST["lastNameParent"]));
$firstNameParent = strip_tags(htmlspecialchars($_POST["firstNameParent"]));
$email_parent = strip_tags(htmlspecialchars($_POST["email"]));
$relationInput = strip_tags(htmlspecialchars($_POST["relationInput"]));
$streetParent = strip_tags(htmlspecialchars($_POST["streetParent"]));
$streetNumParent = strip_tags(htmlspecialchars($_POST["streetNumParent"]));
$busNrParent = strip_tags(htmlspecialchars($_POST["busNrParent"]));
$zipCodeParent = strip_tags(htmlspecialchars($_POST["zipCodeParent"]));
$cityParent = strip_tags(htmlspecialchars($_POST["cityParent"]));
$gsm = strip_tags(htmlspecialchars($_POST["gsm"]));
$telUrgent = strip_tags(htmlspecialchars($_POST["telUrgent"]));
$nameSchool = strip_tags(htmlspecialchars($_POST["nameSchool"]));
$streetSchool = strip_tags(htmlspecialchars($_POST["streetSchool"]));
$streetNumSchool = strip_tags(htmlspecialchars($_POST["streetNumSchool"]));
$busNrSchool = strip_tags(htmlspecialchars($_POST["busNrSchool"]));
$zipCodeSchool = strip_tags(htmlspecialchars($_POST["zipCodeSchool"]));
$citySchool = strip_tags(htmlspecialchars($_POST["citySchool"]));
$titreProfInput = strip_tags(htmlspecialchars($_POST["titreProfInput"]));
$nameProf = strip_tags(htmlspecialchars($_POST["nameProf"]));
$amountYearsInput = strip_tags(htmlspecialchars($_POST["amountYearsInput"]));
$amountHoursInput = strip_tags(htmlspecialchars($_POST["amountHoursInput"]));
$immersionInput = strip_tags(htmlspecialchars($_POST["immersionInput"]));
$rapportInput = strip_tags(htmlspecialchars($_POST["rapportInput"]));
$apportedStudent = strip_tags(htmlspecialchars($_POST["apportedStudent"]));
$contactInput = strip_tags(htmlspecialchars($_POST["contactInput"]));
$addedInfo = strip_tags(htmlspecialchars($_POST["addedInfo"]));
$allergiesInfo = strip_tags(htmlspecialchars($_POST["allergiesInfo"]));
$comment = strip_tags(htmlspecialchars($_POST["comment"]));

$inputArrayFR = [
	"Langue choisie" => $langInput,
	"Période choisie" => $periodeInput,
	"Nom élève" => $lastNameStudent,
	"Prénom élève" => $firstNameStudent,
	"Date de naissance" => $birthDateInput,
	"Sexe" => $genderInput,
	"Nom parent" => $lastNameParent,
	"Prénom parent" => $firstNameParent,
	"E-mail parent" => $email_parent,
	"Relation avec l'élève" => $relationInput,
	"Rue parent" => $streetParent,
	"Numéro rue parent" => $streetNumParent,
	"Numéro boîte parent" => $busNrParent,
	"Code postal parent" => $zipCodeParent,
	"Commune parent" => $cityParent,
	"Numéro téléphone parent" => $gsm,
	"Numéro d'urgence" => $telUrgent,
	"Nom école" => $nameSchool,
	"Rue école" => $streetSchool,
	"Numéro rue école" => $streetNumSchool,
	"Numéro boîte école" => $busNrSchool,
	"Code postal école" => $zipCodeSchool,
	"Commune école" => $citySchool,
	"Titre du prof" => $titreProfInput,
	"Nom du prof" => $nameProf,
	"Nombre d'années langue choisie" => $amountYearsInput,
	"Nombre d'heures langue choisie" => $amountHoursInput,
	"Immersion" => $immersionInput,
	"Bulletin" => $rapportInput,
	"Elève apporté" => $apportedStudent,
	"Voie contact" => $contactInput,
	"Extra info" => $addedInfo,
	"Intolérances ou allergies alimentaires" => $allergiesInfo,
	"Intéressé" => $comment,
];

$inputArrayNL = [
	"Gekozen taal" => $langInput,
	"Gekozen periode" => $periodeInput,
	"Naam leerling" => $lastNameStudent,
	"Voornaam leerling" => $firstNameStudent,
	"Geboortedatum" => $birthDateInput,
	"Geslacht" => $genderInput,
	"Naam ouder" => $lastNameParent,
	"Voornaam ouder" => $firstNameParent,
	"E-mail ouder" => $email_parent,
	"Relatie met leerling" => $relationInput,
	"Straatnaam ouder" => $streetParent,
	"Huisnummer ouder" => $streetNumParent,
	"Busnummer" => $busNrParent,
	"Postcode ouder" => $zipCodeParent,
	"Gemeente ouder" => $cityParent,
	"Telefoonnummer ouder" => $gsm,
	"Noodnummer" => $telUrgent,
	"Naam school" => $nameSchool,
	"Straatnaam school" => $streetSchool,
	"Huisnummer school" => $streetNumSchool,
	"Busnummer school" => $busNrSchool,
	"Postcode school" => $zipCodeSchool,
	"Gemeente school" => $citySchool,
	"Aanspreektitel leerkracht" => $titreProfInput,
	"Naam leerkracht" => $nameProf,
	"Aantal jaren les in de gekozen taal" => $amountYearsInput,
	"Aantal uren les per week in de gekozen taal" => $amountHoursInput,
	"CLIL" => $immersionInput,
	"Rapport" => $rapportInput,
	"Aangebrachte leerling" => $apportedStudent,
	"Contactwijze" => $contactInput,
	"Extra info" => $addedInfo,
	"Voedselallergieën of intoleranties" => $allergiesInfo,
	"Interesse" => $comment,
];

$email_content_loppem = 'Gegevens nieuwe inschrijving: ' . "\n\n";

$email_subject_parent_FR = 'Confirmation d\'inscription Loppem Conversa';

// Prepare our content string
$email_content_introduction_FR = 
'Madame, Monsieur ' . $lastNameParent . "\n\n" . 
'Nous avons bien reçu votre inscription de '. $firstNameStudent .' ' . $lastNameStudent .' pour la période ' . $periodeInput .' et vous en remercions.' . "\n" . 
'Nous vous attendons le premier jour du stage entre 9 et 11 heures à l\'adresse suivante:' . "\n\n" .
'Loppem Conversa
Ecole abbatiale de Zevenkerken
Zevenkerken 4
8200 Brugge.' . "\n\n";


$email_content_parent_before_june_FR = 
'Veuillez verser l\'acompte dans les trois jours ouvrables sur notre compte BE36 0016 2215 8581.
Veuillez également vous acquitter du solde (€ 400) avant le premier juin \'18.
En bas vous trouverez le formulaire d\'inscription que vous avez envoyé. Merci de vérifier si les données sont correctes. 
En juin, vous recevrez un mail avec toutes les informations pratiques.
Au plaisir de vous voir à Loppem! ' . "\n\n" .
'Bien cordialement, ' . "\n" .
'Loppem Conversa ' . "\n\n" ;

$email_content_parent_after_june_FR = 
'Veuillez verser le solde immédiatement sur notre compte BE36 0016 2215 8581.
Bientôt, vous recevrez un mail avec toutes les informations pratiques.   
En bas vous trouverez le formulaire d\'inscription que vous avez envoyé. Merci de vérifier si les données sont correctes. 
Au plaisir de vous voir à Loppem! ' . "\n\n" .
'Bien cordialement, ' . "\n" .
'Loppem Conversa ' . "\n\n" ;

$email_subject_parent_NL = 'Bevestiging inschrijving Loppem Conversa';
$email_content_introduction_NL = 
'Mijnheer, Mevrouw '  . $lastNameParent . "\n\n" . 
'Wij hebben uw inschrijving van '. $firstNameStudent .' ' . $lastNameStudent .' goed ontvangen voor de periode ' . $periodeInput .' ' . "\n" .
'Wij verwachten jullie de eerste dag van de stage tussen 9 en 11 uur op het volgende adres: ' . "\n\n" .' 
Loppem Conversa
Abdijschool van Zevenkerken
Zevenkerken 4
8200 Brugge.' . "\n\n";



$email_content_parent_before_june_NL = 
'Gelieve het voorschot binnen de drie werkdagen te storten op rekening BE36 0016 2215 8581.
Gelieve het resterende saldo (€ 400) te betalen voor 1 juni \'18.
Hieronder vindt u een overzicht van de door u ingevulde gegevens in het inschrijvingsformulier. In geval een veld niet correct zou zijn ingevuld, gelieve dit per e-mail te melden (info@loppemconversa.be).
In juni contacteren wij u per e-mail met praktische informatie m.b.t. het taalkamp. 
Wij danken u voor het gestelde vertrouwen in Loppem Conversa ' . "\n" .'
Met vriendelijke groeten, ' . "\n\n" .'
Loppem Conversa' . "\n\n" ;

$email_content_parent_after_june_NL = 
'Gelieve het totale bedrag onmiddellijk te storten op rekening BE36 0016 2215 8581.
Hieronder vindt u een overzicht van de door u ingevulde gegevens in het inschrijvingsformulier. In geval een veld niet correct zou zijn ingevuld, gelieve dit per e-mail te melden (info@loppemconversa.be).
Binnenkort contacteren wij u per e-mail met praktische informatie m.b.t. het taalkamp. 
Wij danken u voor het gestelde vertrouwen in Loppem Conversa ' . "\n" .'
Met vriendelijke groeten, ' . "\n\n" .'
Loppem Conversa' . "\n\n" ;

// simple email content
if($_POST["pageLang"] == "NL"){
	$email_subject_parent = $email_subject_parent_FR;
	$email_content_parent =  $email_content_introduction_FR . "\n\n" . $email_content_parent_before_june_FR;
	foreach($inputArrayFR as $key => $value) {
	  $email_content_loppem .= $key . ': ' . $value . "\n";
	  $email_content_parent .= $key . ': ' . $value . "\n";
	}
}

if($_POST["pageLang"] == "FR"){
	$email_subject_parent = $email_subject_parent_NL;
	$email_content_parent =  $email_content_introduction_NL . "\n\n" . $email_content_parent_before_june_NL;
	foreach($inputArrayNL as $key => $value) {
	  $email_content_loppem .= $key . ': ' . $value . "\n";
	  $email_content_parent .= $key . ': ' . $value . "\n";
	}
}


// Mail to Loppem Conversa
$email_loppem = 'info@loppemconversa.be';
$email_subject_loppem = 'Nieuwe inschrijving - ' . $lastNameStudent . ' ' .$firstNameStudent;
$email_content_loppem = strip_tags(htmlspecialchars($email_content_loppem));
$headers_loppem = 'From: info@loppemconversa.be' . "\r\n" .
'Reply-To:  ' . $email_parent  . "\r\n" .
'X-Mailer: PHP/' . phpversion();

// mail($email_loppem, $email_subject_loppem, $email_content_loppem, $headers_loppem);

// Mail backup
$email_one = 'inschrijvingen2018@loppemconversa.be';
$email_content_parent = strip_tags(htmlspecialchars($email_content_parent));
$headers_parents = 'From: info@loppemconversa.be' . "\r\n" .
'Reply-To: info@loppemconversa.be' . "\r\n" .
'X-Mailer: PHP/' . phpversion();

mail($email_one, $email_subject_loppem, $email_content_loppem, $headers_loppem);

// Mail to parents
mail($email_parent, $email_subject_parent, $email_content_parent, $headers_parents);
?>