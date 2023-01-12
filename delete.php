<?php
    try{
        $db = new PDO ("mysql:dbname=form;dbhost=localhost","root","vaddshah");

        $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        $data = $db->prepare("DELETE FROM `form` WHERE id=:id");

        $data->bindParam(":id",$_GET['id']);


        if($data->execute())
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