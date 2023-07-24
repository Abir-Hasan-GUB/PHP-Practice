<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
   <h1>Hello world</h1>

   <section>
       <?php
       include_once 'exception.php';
       include_once 'session.php';
       
    // if($_GET['num1'] && $_GET['num2']) {
    //     $firstNumber = $_GET['num1'];
    //     $secondNumber = $_GET['num2'];
    //     $calculateResult = new CalculateDivision($firstNumber, $secondNumber);
    // }
       
       // echo "Hello world from abir";

       setcookie('userName', 'abir@gmail.com', time()+50, '/');
    //    print_r($_COOKIE);

    ?>
    <form method="get" action="./index.php">
        <br>
    <input type="number" name="num1" id="" placeholder="Input first number">
    <input type="number" name="num2" id="" placeholder="Input second number">

    <input type="submit" value="Calculate">
    </form>

   </section>

</body>
</html>