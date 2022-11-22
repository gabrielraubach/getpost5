<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXE5</title>
    <style>
        body {
            background-color: gray;
        }

        .container {
            background-color: gray;
            width: 400px;
            height: auto;
            margin: 100px auto;
            padding: 20px;
            align-items: baseline;
        }
    </style>
</head>

<body>
    <div class="container">
        <form  method="POST">
            <h1>Exercicio nº 5 </h1>
            <p>Informe o valor de 1</p>
            <input type="number" name="1" id="1">
            <p>Informe o valor de 2</p>
            <input type="number" name="2" id="2">
            <p>Informe o valor de 3</p>
            <input type="number" name="3" id="3"><br><br>
            <input type="submit" name="btngerar" value="calcular"> 
        </form>
        <?php
        $M = 0;
        if(isset($_POST['btngerar'])){
               
        $A = $_POST['1'];
        $B = $_POST['2'];
        $C = $_POST['3'];
        
            if($A >= 0 && $B >= 0 && $C >= 0){
            $M = number_format(($A+$B+$C)/3,2) ;
            
            echo"<h1> O Resultado da média é: ".$M;
        }
        else{
            echo"<h1> Coloque um numero descente. </h1>";
        }

        }
       
        ?>
    </div>
    
</body>

</html>