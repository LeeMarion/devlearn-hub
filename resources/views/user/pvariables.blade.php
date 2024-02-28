<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>PHP Variables</title>
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
        <h2>Creating (Declaring) PHP Variables</h2>
        <p>In PHP, a variable starts with the $ sign, followed by the name of the variable:</p>
        <h3>Example:</h3>
        <p>$x = 5;</p>
        <p>$y = "John"</p>
        <h3>Output:</h3>
        <p>5</p>
        <p>John</p>
        <p>In the example above, the variable $x will hold the value 5, and the variable $y will hold the value "John".</p>
        <p>Note: When you assign a text value to a variable, put quotes around the value.</p>
        <p>Note: Unlike other programming languages, PHP has no command for declaring a variable. It is created the moment you first assign a value to it.</p>
        
        <h2>PHP Variables</h2>
        <p>A variable can have a short name (like $x and $y) or a more descriptive name ($age, $carname, $total_volume).</p>
        <p>Rules for PHP variables:</p>
        <li>A variable starts with the $ sign, followed by the name of the variable</li>
        <li>A variable name must start with a letter or the underscore character</li>
        <li>A variable name cannot start with a number</li>
        <li>A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )</li>
        <li>Variable names are case-sensitive ($age and $AGE are two different variables)</li>
        <p>Remember that PHP variable names are case-sensitive!</p>

        <h2>Output Variables</h2>
        <p>The PHP echo statement is often used to output data to the screen.</p>\
        <p>The following example will show how to output text and a variable:</p>
        <h3>Example:</h3>
        <p>$txt = "you";</p>
        <p>echo "I love $txt!";</p>
        <h3>Output:</h3>
        <p>I love you</p>


        <h2>Variable Types</h2>
            <p>PHP has no command for declaring a variable, and the data type depends on the value of the variable.</p>
            <h3>Example:</h3>
            <p>$x = 5;      // $x is an integer</p>
            <p>$y = "John"; // $y is a string</p>
            <p>echo $x;</p>
            <p>echo $y;</p>
            <h3>Output:</h3>
            <p>5John</p>
            <h3>PHP supports the following data types:</h3>
            <li>String</li>
            <li>Integer</li>
            <li>Float (floating point numbers - also called double)</li>
            <li>Boolean</li>
            <li>Array</li>
            <li>Object</li>
            <li>NULL</li>
            <li>Resource</li>

            <h2>Get the Type</h2>
            <p>To get the data type of a variable, use the var_dump() function.</p>
            <h3>Example:</h3>
            <p>$x = 5;</p>
            <p>var_dump($x);</p>
            <h3>Output:</h3>
            <p>int(5)</p>

            <h2>Assign String to a Variable</h2>
            <p>Assigning a string to a variable is done with the variable name followed by an equal sign and the string:</p>
            <h3>Example:</h3>
            <p>$x = "John";</p>
            <p>echo $x;</p>
            <h3>Output:</h3>
            <p>John</p>

            <h2>Assign Multiple Values</h2>
            <p>You can assign the same value to multiple variables in one line:</p>
            <h3>Example:</h3>
            <p>All three variables get the value "Fruit":</p>
            <p>$x = $y = $z = "Fruit";</p>
            <h3>Output:</h3>
            <p>FruitFruitFruit</p>
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