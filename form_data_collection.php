<!-- Date: 18-06-2023  -->
<?php 
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'];
    $email = $_POST['email'];
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Form data collection</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 mx-auto mt-5">
                <form action="user.php" method="POST" class="d-flex flex-column gap-3">
                    <input class="form-control rounded-0" type="text" name="name" id="name" placeholder="Enter name">
                    <input class="form-control rounded-0" type="email" name="email" id="email"
                        placeholder='Enter email'>
                    <input class="form-control rounded-0" type="password" name="password" id="password"
                        placeholder="Enter password">
                    <button type="submit" class="btn btn-success rounded-0">REGISTER</button>
                </form>
            </div>
            <div class="col-md-12">
                <h2><?php echo $name?></h2>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>

</html>