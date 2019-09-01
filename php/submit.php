<?php 

if(!empty($_POST['name']) || !empty($_POST['email']) || !empty($_FILES['file'])){
    $uploadedFile = '';

    //create directory if not exists
	if (!file_exists('../uploads')) {
		mkdir('../uploads', 0777, true);
    }
    
    if(!empty($_FILES["file"]["type"])){
        $fileName = time().'_'.$_FILES['file']['name'];
        $valid_extensions = array("jpeg", "jpg", "png");
        $temporary = explode(".", $_FILES["file"]["name"]);
        $file_extension = end($temporary);
        if((($_FILES["file"]["type"] == "image/png") || ($_FILES["file"]["type"] == "image/jpg") || ($_FILES["file"]["type"] == "image/jpeg")) && in_array($file_extension, $valid_extensions)){
            $sourcePath = $_FILES['file']['tmp_name'];
            $targetPath = "../uploads/".$fileName;
            if(move_uploaded_file($sourcePath,$targetPath)){
                $uploadedFile = $fileName;
            }
        }
    }
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    
    //include database configuration file
    include '../dbconfig/conexion.php';

    //insert form data in the database
    //$insert = $db->query("INSERT INTO form_data (name,email,url_file) VALUES ('".$name."','".$email."','".$uploadedFile."')");
    
    $sql = "INSERT INTO form_data(name,email,url_file) VALUES ('$name', '$email', '$uploadedFile')";
    mysqli_query($db, $sql);
    echo 'ok';
    //echo $insert?'ok':'err';
    //var_dump($_POST);
    //var_dump($_FILES);

}

?>