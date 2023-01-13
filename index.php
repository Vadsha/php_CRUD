<?php

    try{
        $db = new PDO("mysql:dbname=form;dbhost=localhost","root","vaddshah2626");

        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $data = $db->query("SELECT * FROM `form`");

        if ($data) {
            $forms = $data->fetchAll(PDO::FETCH_OBJ);
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
    <title>View</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <table class="table mt-5">
                    <thead>
                        <tr class="text-center">
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Position</th>
                            <th><a href="create.php" class="btn btn-primary btn-sm">Add New</a></th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach($forms as $form) : ?>
                            <tr class="text-center">
                                <td><?php echo $form->id; ?></td>
                                <td><?php echo $form->name; ?></td>
                                <td><?php echo $form->email; ?></td>
                                <td><?php echo $form->position; ?></td>
                                <td>
                                    <a href="show.php?id=<?php echo $form->id; ?>" class="btn btn-sm btn-info">Detail</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>