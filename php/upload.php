<?php
// $target_dir = "uploads/";
$target_dir = "../images/gallery/july2018/";
$filesToUpload = $_FILES["fileToUpload"]["name"];
for($i = 0; $i < 3; $i++) {
    $target_file = $target_dir . basename($fileToUpload);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["name"][i]);
        if($check !== false) {
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }
    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        echo "Current file type: " . $imageFileType;
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["name"][i], $target_file)) {
            echo "The file ". basename( $_FILES["fileToUpload"]["name"][i]) . " has been uploaded. \n";
        } else {
            echo "Sorry, there was an error uploading your file." .$target_file. "\n";
        }
    }
}
?>