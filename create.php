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
    <form action="store.php" method="POST">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-8">
                    <div class="form-group mt-2">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="form-group mt-2">
                        <label for="email">E-mail</label>
                        <input type="text" name="email" class="form-control">
                    </div>
                    <div class="form-group mt-2">
                        <label for="passowrd">Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <div class="form-group mt-2">
                        <label for="gender">Gender</label>
                        <select name="gender" class="form-control" id="">
                            <option value="" disabled selected>Choose Your Gender</option>
                            <option value="male">male</option>
                            <option value="female">female</option>
                        </select>
                    </div>
                    <div class="form-group mt-2">
                        <label for="dob">Date of Birth</label>
                        <input type="date" name="dob" class="form-control">
                    </div>
                    <div class="form-group mt-2">
                        <label for="position">Position</label>
                        <input type="text" name="position" class="form-control">
                    </div>
                    <div class="form-group mt-2">
                        <label for="salary">Salary</label>
                        <input type="text" name="salary" class="form-control">
                    </div>
                    <a href="index.php" class="btn btn-primary mt-2">Back</a>
                    <button class="btn btn-success mt-2">Apply</button>
                </div>
            </div>
        </div>
    </form>
</body>
</html>