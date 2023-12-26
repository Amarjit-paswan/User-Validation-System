<?php 
session_start();

if(!isset($_SESSION['email'])){
    header('Location: index.php');
    exit();
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 p-0">
                <div class="navbar bg bg-secondary justify-content-end">
                    <ul class="nav mx-4">
                        <li class="nav-item">
                            <a href="logout.php" class="btn btn-primary">Logout</a>
                        </li>
                    </ul>
                </div>
            <div class="col-12 mt-4 bg-success py-3 text-white">
                <h1 class="text-center fs-1">Welcome! <?php echo $_SESSION['email'];?></h1>
            </div>
            </div>
        </div>
    </div>
</body>
</html>