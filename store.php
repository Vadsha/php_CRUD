<?php

    try{
        $db = new PDO ("mysql:dbname=form;dbhost=localhost","root","vaddshah2626");

        $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        $database = $db->prepare("
        INSERT INTO `form`(`name`,`email`,`password`,`gender`,`dob`,`position`,`salary`)
        VALUES(:name,:email,:password,:gender,:dob,:position,:salary)");

        $database->bindParam(":name",$_POST['name']);
        $database->bindParam(":email",$_POST['email']);
        $database->bindParam(":password",$_POST['password']);
        $database->bindParam(":gender",$_POST['gender']);
        $database->bindParam(":dob",$_POST['dob']);
        $database->bindParam(":position",$_POST['position']);
        $database->bindParam(":salary",$_POST['salary']);

        if($database->execute())
        {
            header("Location:http://localhost:8000/index.php");
        }
        else{
            echo "Error!";
        }
    }

    catch(PDOException $e){
        echo $e->getMessage();
    }
    catch(Exception $e){
        echo $e->getMessage();
        echo $e->getLine();
        echo $e->getCode();
    }
?>



