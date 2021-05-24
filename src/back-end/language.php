<?php

    if(isset($_POST["submit"])){
        
        $cargo1 = $_POST['cargo1'];
        $desc1 = $_POST['desc1'];
        $cargo2 = $_POST['cargo2'];
        $desc2 = $_POST['desc2'];
        $cargo3 = $_POST['cargo3'];
        $desc3 = $_POST['desc3'];
        $id = $_POST['id'];

        require_once 'dbconnection.php';
        require_once 'functions.php';

        registerLanguage($conn, $cargo1, $desc1, $cargo2, $desc2, $cargo3, $desc3, $id);

    }else{

        header("location: ../front-end/login.php");
        exit();
    }