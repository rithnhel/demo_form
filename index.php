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
    <?php
        include_once "dbConnect.php";
        $query = "SELECT * FROM users";
        $data = mysqli_query($conn, $query);
    ?>
        <div class="card shadow-lg">
            <div class="card-body">
                <a href="add_information.php" class="btn btn-success">Add New</a>
                <hr>
                <table class="table table-bordered">
                    <thead class="thead-light">
                        <tr>
                            <th>ID</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach ($data as $row) {
                    ?>
                        <tr>
                            <td><?php echo $row['id'];?></td>
                            <td><?php echo $row['username'];?></td>
                            <td><?php echo $row['passwords'];?></td>
                            <td>
                                <a href="edit_information.php?id=<?php echo $row['id'];?>" class="btn btn-success">Edit</a>
                                <a href="delete_information.php?id=<?php echo $row['id'];?>" onClick="return confirm('Are you sure to delete?');" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    <?php 
                       
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
