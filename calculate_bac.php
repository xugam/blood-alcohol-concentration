<?php
    //preparing all the variables 
    $weight = $_GET['weight'];
    //conversion for weight to lbs
    if($_GET['unit']=='kg'){
        $weight = $weight * 2.20462;
    }
    //echo $weight;
    //for gender constant
    if($_GET['gender']=='male'){
        $gender_constant = 0.73;
    }
    else{
        $gender_constant = 0.66;
    }
    // echo $gender_constant;
    $no_of_drinks = $_GET['drinks'];
    $alcohol_content = $_GET['alcohol_content'];
    $alcohol_consumed = $no_of_drinks * $alcohol_content;
    $time_elapsed = $_GET['time_elapsed'];

    //main formula
    $BAC = (($alcohol_consumed * 5.14) / ($weight * $gender_constant)) - 0.015 * $time_elapsed;

    echo $BAC; 
    if($BAC>=0.08){
        // $content = "Safe to Drive";
        session_start();
        $_SESSION['variable'] = 'This is a variable from file1.php';
    }else{
    //    $content = "Unsafe to Drive";
    session_start();
        $_SESSION['variable'] = 'This is a variable from file1.php';
    }
    $_SESSION['BAC']=$BAC;
    exit;
    
?>