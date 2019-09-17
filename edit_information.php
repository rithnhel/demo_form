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
                <a href="index.php" class="btn btn-success">Go Back</a>
                <hr>
                <?php
                $id = $_GET['id'];
                $query = "SELECT * FROM users WHERE id = $id";
                $data = mysqli_query($conn, $query);

                foreach ($data as $column) {
                ?>
                <form action="#" method="post">
                    <div class="form-group">
                        <label for="username">Username: </label>
                        <input type="text" name="username" value="<?php echo $column['username'];?>" id="username" placeholder="Username" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="password">New Password: </label>
                        <input type="password" name="password" id="password" placeholder="Password" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="edit" value="Edit Information" class="btn btn-success">
                    </div>
                </form>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</body>
</html>
<?php
    if(isset($_POST['edit'])){
        $id = $_GET['id'];
        $username = $_POST['username'];
        $password = md5($_POST['password']);

        $query = "UPDATE users SET username = '$username', passwords = '$password' WHERE id = $id";
        $result = mysqli_query($conn, $query);
        if($result){
            header("Location: index.php");
        }else{
            echo "Cannot Update";
        }
    }
?>