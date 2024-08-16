<?php
    //preparing all the variables 
    $weight = $_POST['weight'];

    //conversion for weight to lbs
    if($_POST['unit']=='kg'){
        $weight = $weight * 2.20462;
    }

    //for gender constant
    if($_POST['gender']=='male'){
        $gender_constant = 0.73;
    }
    else{
        $gender_constant = 0.66;
    }

    $no_of_drinks = $_POST['drinks'];
    $alcohol_content = $_POST['alcohol_content'];
    $alcohol_consumed = $no_of_drinks * $alcohol_content;
    $time_elapsed = $_POST['time_elapsed'];

    //main formula
    $BAC = (($alcohol_consumed * 5.14) / ($weight * $gender_constant)) - 0.015 * $time_elapsed;
    
    session_start();
     $_SESSION['BAC']=$BAC;
     header("Location:/index.php");
    
?>