<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>PHP For Loops</title>
    <link rel="icon" href="assets/images/lg.png">
</head>
<body>
    <div class="sidenav">
        <a href="coursemod"><h2>PHP</h2></a>
        <a href="pintro">PHP Introduction</a>
        <a href="pdata">PHP Data Types</a>
        <a href="plist">PHP Arrays</a>
        <a href="pvariables">PHP Variables</a>
        <a href="psyntax">PHP Syntax</a>
        <a href="poperators">PHP Operators</a>
        <a href="pcondition">PHP Condition</a>
        <a href="pwhile">PHP While Loops</a>
        <a href="pfor">PHP For Loops</a>
    </div>

    <div class="main">
        <h2>The PHP for Loop</h2>
        <p>When you know exactly how many times you want to loop through a block of code, use the for loop instead of a while loop:</p>    
            <h3>Syntax:</h3>
            <p>for (expression 1; expression 2; expression 3) {</p>
            <p>  // code block to be executed</p>
            <p>}</p>
            <p>expression 1 is evaluated once</p>
            <p>expression 2 is evaluated before each iterarion.</p>
            <p>expression 3 is evaluated after each iterarion.</p>

            <h3>Example:</h3>
            <p>Print the numbers from 0 to 10:</p>
            <p>for ($x = 0; $x <= 10; $x++) {</p>
            <p>  echo "The number is: $x <br>";</p>
            <p>}</p>
            <p>The number is: 0</p>
            <p>The number is: 1</p>
            <p>The number is: 2</p>
            <p>The number is: 3</p>
            <p>The number is: 4</p>
            <p>The number is: 5</p>
            <p>The number is: 6</p>
            <p>The number is: 7</p>
            <p>The number is: 8</p>
            <p>The number is: 9</p>
            <p>The number is: 10</p>
            <h3>Example Explained</h3>
            <p>The first expression, $x = 0;, is evaluated once and sets a counter to 0.</p>
            <p>The second expression, $x <= 10;, is evaluated before each iteration, and the code block is only executed if this expression evaluates to true. In this example the expression is true as long as $x is less than, or equal to, 10.</p>
            <p>The third expression, $x++;, is evaluated after each iteration, and in this example, the expression increases the value of $x by one at each iteration.</p>


        <h2>The foreach Loop on Arrays</h2>
            <p>The foreach loop - Loops through a block of code for each element in an array or each property in an object.</p>
            <p>The most common use of the foreach loop, is to loop through the items of an array.</p>
            <h3>Example:</h3>
            <p>Loop through the items of an indexed array:</p>
            <p>$colors = array("red", "green", "blue", "yellow");</p>
            <p>foreach ($colors as $x) {</p>
            <p>  echo "$x <br>";</p>
            <p>}</p>
            <p>red</p>
            <p>green</p>
            <p>blue</p>
            <p>yellow</p>


        <h2>The foreach Loop on Objects</h2>
        <p>The foreach loop can also be used to loop through properties of an object:</p>
        <h3>Example</h3>
        <p>Print the property names and values of the $myCar object:</p>
        <p>class Car {</p>
        <p>  public $color;</p>
        <p>  public $model;</p>
        <p>  public function __construct($color, $model) {</p>
        <p>    $this->color = $color;</p>
        <p>    $this->model = $model;</p>
        <p>  }</p>
        <p>}</p>
        <p>$myCar = new Car("red", "Volvo");</p>
        <p>foreach ($myCar as $x => $y) {</p>
        <p>  echo "$x: $y <br>";</p>
        <p>}</p>
        <h3>Output:</h3>
        <p>color: red</p>
        <p>model: Volvo</p>

    </div>

    <style>
    .sidenav{
        background: #8B89E3;
        position: fixed;
        height: 100%;
        width: 20%;
        top: 0;
        left: 0;
        z-index: 1;
        overflow: hidden;
        padding-top: 20px;
    }

    .sidenav a{
        color: #ffffff;
        padding: 10px 15px 10px 16px;
        text-decoration: none;
        font-size: 25px;
        display: block;
    }

    .sidenav a:hover{
        background: #f5a425;
    }

    h2{
        padding: 10px 15px 10px 16px;
        color: black;
        border-bottom: solid;
        text-align: center;
        font-size: 30px;
    }

    .main{
        background-color: #ffffff;
        margin-left: 20%;
        padding: 4px 10px;
        color: black;
        display: inline-block;
    }

    table {
  border-collapse: collapse;
  width: 70%;
}

th, td {
  border: 1px solid black;
  padding: 15px;
  text-align: left;
}

    @media screen and (max-width: 600px)
    {
        .sidenav
        {
                padding-top: 15px;
                width: 155px;
        }

        .sidenav a
        {
                padding-left: 20px;
                font-size: 18px;
        }

        .main
        {
            margin-left: 32px;
            font-size: 15px;
        }

        p 
        {
            display: inline-block;
        }
    }
    </style>
</body>
</html>