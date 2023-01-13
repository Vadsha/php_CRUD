<?php

    try{
        $db = new PDO ("mysql:dbname=form;dbhost=localhost","root","vaddshah2626");

        $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        $data = $db->prepare("SELECT * FROM `form` WHERE id=:id");

        $data->bindParam(":id",$_GET['id']);


        if($data->execute())
        {
            $form = $data->fetch(PDO::FETCH_OBJ);
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="d-flex row justify-content-center">
            <div class="card col-6 mt-5">
                <div class="card-header">
                    <div class="card-title h1 mt-2"><?php echo $form->name; ?></div>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item h6">Email : <?php echo $form->email; ?></li>
                        <li class="list-group-item h6">Password : <?php echo $form->password; ?></li>
                        <li class="list-group-item h6">Gender : <?php echo $form->gender; ?></li>
                        <li class="list-group-item h6">Date of Birth : <?php echo $form->dob; ?></li>
                        <li class="list-group-item h6">Position : <?php echo $form->position; ?></li>
                        <li class="list-group-item h6">Salary : <?php echo $form->salary; ?></li>
                    </ul>
                </div>
                <div class="card-footer">
                    <a href="index.php" class="btn btn-primary btn-sm">Back</a>
                    <a href="edit.php?id=<?php echo $form->id; ?>" class="btn btn-warning btn-sm">Edit</a>
                    <a href="delete.php?id=<?php echo $form->id; ?>" class="btn btn-danger btn-sm">Delete</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>