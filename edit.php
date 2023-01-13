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
    <title>Apply Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <form action="update.php?id=<?php echo $form->id; ?>" method="POST">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-8">
                    <div class="form-group mt-2">
                        <label for="name">Name</label>
                        <input type="text" name="name" value="<?php echo $form->name; ?>" class="form-control">
                    </div>
                    <div class="form-group mt-2">
                        <label for="email">E-mail</label>
                        <input type="text" name="email" value="<?php echo $form->email; ?>" class="form-control">
                    </div>
                    <div class="form-group mt-2">
                        <label for="passowrd">Password</label>
                        <input type="password" name="password" value="<?php echo $form->password; ?>" class="form-control">
                    </div>
                    <div class="form-group mt-2">
                        <label for="gender">Gender</label>
                        <select name="gender" class="form-control" id="">
                            <option value="<?php echo $form->gender; ?>"><?php echo $form->gender; ?></option>
                            <option value="male">male</option>
                            <option value="female">female</option>
                        </select>
                    </div>
                    <div class="form-group mt-2">
                        <label for="dob">Date of Birth</label>
                        <input type="date" name="dob" value="<?php echo $form->dob; ?>" class="form-control">
                    </div>
                    <div class="form-group mt-2">
                        <label for="position">Position</label>
                        <input type="text" name="position" value="<?php echo $form->position; ?>" class="form-control">
                    </div>
                    <div class="form-group mt-2">
                        <label for="salary">Salary</label>
                        <input type="text" name="salary" value="<?php echo $form->salary; ?>" class="form-control">
                    </div>
                    <a href="show.php?id=<?php echo $form->id; ?>" class="btn btn-primary mt-2">Back</a>
                    <button class="btn btn-warning mt-2">Edit</button>
                </div>
            </div>
        </div>
    </form>
</body>
</html>