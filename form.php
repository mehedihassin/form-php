<?php 
$name=null;
$email=null;
$gender=null;
$skills=null;
$country=null;
$comment=null;
if($_SERVER ["REQUEST_METHOD"] == "POST"){
$name =$_POST['name'];
$email =$_POST['email'];
$gender =$_POST['gender'];
$skills =$_POST['skills'];
$country =$_POST['country'];
$comment =$_POST['comment'];

}
 

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Form</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form action="" method="POST" class="d-flex flex-column gap-2 shadow-sm p-4">
                    <div>
                        <label for="name">Name:</label>
                        <input type="text" name="name" id="name" class="form-control">
                    </div>
                    <div>
                        <label for="email">Email:</label>
                        <input type="email" name="email" id="email" class="form-control">
                    </div>
                    <div>
                        <label for="password">Password:</label>
                        <input type="password" name="password" id="password" class="form-control">
                    </div>
                    <div>
                        <p>Gender:</p>

                        <input type="radio" name="gender" id="male" value="male">
                        <label for="male">Male</label>
                        <input type="radio" name="gender" id="female" value='female'>
                        <label for="female">female</label>
                    </div>

                    <div class="skills">
                        <p>Skills:</p>
                        <div>

                            <input type="checkbox" name="skills" id="php" value='PHP'>
                            <label for="php">PHP</label>
                        </div>
                        <div>

                            <input type="checkbox" name="skills" id="laravel" value='Laravel'>
                            <label for="laravel">Laravel</label>
                        </div>
                        <div>

                            <input type="checkbox" name="skills" id="javascript" value='JavaScript'>
                            <label for="javascript">JavaScript</label>
                        </div>
                    </div>
                    <div class="country">
                        <p>Country:</p>
                        <select name="country" id="country">

                            <option value="Bangladesh">Bangladesh</option>
                            <option value="Pakistan">Pakistan</option>
                            <option value="India">India</option>
                        </select>
                    </div>
                    <div class="comment">
                        <p>Comment:</p>
                        <textarea name="comment" id="comment" class="w-100" cols="10" rows="10"></textarea>
                    </div>

                    <div class='btn'>
                        <button type="submit" class='btn btn-success w-100'>Register</button>
                    </div>
                </form>
            </div>
            <div class="col-md-6 shadow-sm p-4">
                <h2>My Information</h2>
                <p>Name:<?php echo $name?> </p>
                <p>Email:<?php echo $email?> </p>
                <p>Gender: <?php echo $gender?> </p>
                <p>Skills:<?php echo $skills?> </p>
                <p>Country:<?php echo $country?></p>
                <p>Comment: <?php echo $comment?></p>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>

</html>