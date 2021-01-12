<?php
// Look for a 'food' key
    $n1 = $_GET['food'];
// Look for a 'best' key
    $n2 = $_GET['best'];
// Look for a 'worst' key
    $n3 = $_GET['worst'];

$valuesSum = $n1 + $n2 + $n3;
    
echo $valuesSum;
echo "<br>";
// Use score to determine cat result
    if ($valuesSum == "0" ||$valuesSum == "1" ||$valuesSum == "4"){
        header("Location: SpiersmeQuizResult-Ash.php");
        exit;

    }elseif ($valuesSum == "2" ||$valuesSum == "3" ||$valuesSum == "6"){
        header("Location: SpiersmeQuizResult-Pud.php");
        exit;

    }elseif($valuesSum >= "8"){
        header("Location: SpiersmeQuizResult-Panini.php");
        exit;
                    
    }else{
        header("Location: SpiersmeQuizResult-combo.php");
        exit;
    }


/***** References ******

https://www.w3schools.com/php/php_forms.asp

https://www.w3schools.com/php/php_if_else.asp

/***********************/

?>