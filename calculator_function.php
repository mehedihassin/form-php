<?php 
function add($first_number,$second_number){
    return $first_number + $second_number;
}
function sub($first_number,$second_number){
    return $first_number - $second_number;
}

function mul($first_number,$second_number){
    return $first_number * $second_number;
}

function div($first_number,$second_number){
    
        if($second_number == 0){
            return 'Divide by 0 is not possible';
        }
        else {
            return $first_number / $second_number;
        }
    
}

?>