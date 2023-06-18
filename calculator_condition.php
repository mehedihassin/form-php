<?php 
$result = 0;


if($_SERVER['REQUEST_METHOD'] == 'POST'){
$first_number = $_POST['first_number'];
$second_number = $_POST['second_number'];
$operator = $_POST['operator'];
if($first_number !== '' && $second_number !== ''){
    if( $operator == 'add'){
        $result = add($first_number,$second_number);
    }
    elseif( $operator == 'sub'){
        $result = sub($first_number,$second_number);
      
    }
    elseif( $operator == 'mul'){
        $result =  mul($first_number,$second_number);
       
    }
    elseif($operator == 'div'){
        $result =  div($first_number,$second_number);
      
    }
}
else {
    $result = 'Please enter both numbers';
}

}
?>