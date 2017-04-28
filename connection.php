<?php
    if(!empty($_POST))
    {
        $name = "";
        $email = "";
       
        $password="";
        $address = "";
        $sec1="";
        $sec2="";
        $tel="";
        $ans1="";
        $ans2="";
    
        $localdob="";
       
        if(isset($_POST["name"])) {
            //echo("in first if");
            $name = $_POST["name"];
            //echo($name);
        }
        if(isset($_POST["emailadd"])) {
            $email = $_POST["emailadd"];
        }
        
        if(isset($_POST["password"])) {
            $password = $_POST["password"];
        }
        if(isset($_POST["address"])) {
            $address = $_POST["address"];
        }
        if(isset($_POST["question1"])) {
            $sec1 = $_POST["question1"];
        }
        if(isset($_POST["question2"])) {
            $sec2 = $_POST["question2"];
        }
        if(isset($_POST["answer1"])) {
            $ans1 = $_POST["answer1"];
        }
        if(isset($_POST["answer2"])) {
            $ans2 = $_POST["answer2"];
        }

        if(isset($_POST["mobile"])) {
            $tel = $_POST["mobile"];
        }
        
        if(isset($_POST["area"])) {
            $localdb = $_POST["area"];
            //echo($localdb);
            
        }
        
        if ($name) {
            
            $conn = mysqli_connect("127.0.0.1", "root", "lokipoki123", "login") or die("Could not connect: " . $conn->connect_error);

            $query = "INSERT INTO `registration` (`userid`,`password`,`email`,`question1`,`ans1`,`question2`,`ans2`,`mobile`,`address`,`areas`)
            VALUES ('$name','$password','$email', '$sec1','$ans1', '$sec2','$ans2','$tel', '$address','$localdb')";
            
            echo($query);
            
            $result = mysqli_query($conn, $query)or die('Error, insert query failed');
            
            if ($result) {
                echo "<p class='acceptmsg'> User $name added !</p>";
            } else {
                die('Invalid query: ' . $result->connect_error);
            }
        }
    }
    else{
        
    }
        ?>
