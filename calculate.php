<?php 
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operator'];
    if(is_numeric($num1)&&is_numeric($num2)){
        switch($operation){
            case "Add":
                $result = $num1 + $num2;
                break;
            case "Sub":
                $result = $num1 - $num2;
                break;
            case "Mul":
                $result = $num1 * $num2;
                break;
            case "Div":
                $result = $num1 / $num2;
                break;
        }
        
}else if(empty($num1)||empty($num2)){
    $result = "<script>alert('Please Enter Two Valid Numbers');</script>";
}

if(is_numeric($result)){
echo round($result, 2);
}else{
    echo $result;
}

?>