<?php

    if(isset($_POST["submit"])){
        
        $prof = $_POST['prof'];
        $tel = $_POST['tel'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $id = $_POST['id'];
        $file = $_FILES['file'];

        $fileName = $_FILES['file']['name'];
        $fileTmpName = $_FILES['file']['tmp_name'];
        $fileSize = $_FILES['file']['size'];
        $fileError = $_FILES['file']['error'];
        $fileType = $_FILES['file']['type'];

        $fileExt = explode('.', $fileName);
        $fileActExt = strtolower(end($fileExt));

        $allowed = array('jpg', 'jpeg', 'png');

        if(in_array($fileActExt, $allowed)){
            if($fileError === 0){
                if($fileSize < 1000000){

                    $fileNewName = uniqid('', true).".".$fileActExt;
                    $fileDestination = '../../images/img_upload/'.$fileNewName;
                    move_uploaded_file($fileTmpName, $fileDestination);

                    require_once 'dbconnection.php';
                    require_once 'functions.php';
        
                    continueRegister($conn, $prof, $tel, $cidade, $estado, $fileNewName, $id);
                }else{

                    header("location: ../front-end/register.php?error=imgbig");
                    exit();
                }

                
            }else{

                header("location: ../front-end/register.php?error=uploaderror");
                exit();
            }

        }else{
            
            header("location: ../front-end/register.php?error=imgerror");
            exit();
        }

    }else{

        header("location: ../front-end/login.php");
        exit();
    }