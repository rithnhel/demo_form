<?php 
include_once "dbConnect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Final Exam of PHP Basic</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body class="bg-dark">
    <div class="container mt-4">
        <div class="card shadow-lg">
            <div class="card-body">
                <h4 class="text-center text-primary">Add Information Form</h4>
                <hr>
                <form action="#" method="post">
                    <div class="form-group">
                        <label for="username">Username: </label>
                        <input type="text" name="username" id="username" placeholder="Username" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password: </label>
                        <input type="password" name="password" id="password" placeholder="Password" class="form-control" required>
                    </div>
                    <input type="submit" name="create" value="Create" class="btn btn-success">
                    <input type="reset" value="Cancel" class="btn btn-warning float-right">
                </form>
            </div>
        </div>
    </div>
</body>
</html>
<?php
    if(isset($_POST['create'])){
        $username = $_POST['username'];
        $password = md5($_POST['password']);

        $query = "INSERT INTO users(username, passwords) VALUES('$username', '$password')";
        $result = mysqli_query($conn, $query);
        if($result){
            header("Location: index.php");
        }else{
            echo "Cannot Insert Data!!!";
        }

    }
?>
