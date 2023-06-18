<?php 
include 'calculator_function.php';
include 'calculator_condition.php';


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Calculator</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 mx-auto mt-5 shadow-sm p-4">
                <form action="" class='d-flex flex-column gap-3 mb-3' method='POST'>
                    <input class="form-control" placeholder="Enter first number" type="number" name="first_number"
                        id="first_number">
                    <select name="operator" id="" class='form-control'>
                        <option value="add">ADD</option>
                        <option value="sub">SUBTRACT</option>
                        <option value="mul">MULTIPLICATION</option>
                        <option value="div">DIVISION</option>
                    </select>
                    <input class="form-control" placeholder="Enter second number" type="number" name="second_number"
                        id="second_number">
                    <button type="submit" class="btn btn-success">SUBMIT</button>
                </form>
                <h2>Result: <h5><?php echo $result?></h5>
                </h2>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>

</html>