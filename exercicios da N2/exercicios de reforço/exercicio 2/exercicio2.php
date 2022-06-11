<?php 
    if (isset($_POST['numero1'])&&
       (isset($_POST['numero2']))&&
       (isset($_POST['numero3']))){
           
        $menor = $_POST['numero1'];
        $meio = $_POST['numero2'];
        $maior = $_POST['numero3'];

        if($meio < $menor){
            $temp=$menor;
            $menor=$meio;
            $meio=$temp;
        }else if($maior < $menor){
            $temp=$menor;
            $menor=$maior;
            $maior=$temp;
        }else if($maior < $meio){
            $temp=$meio;
            $meio=$maior;
            $maior=$temp;
        }
        echo "$menor < $meio < $maior";
    }else{
        header("location:index.php?");
    }
?>