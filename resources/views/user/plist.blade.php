<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>PHP Arrays</title>
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
        <h2>PHP Arrays</h2>
        <p>Arrays are used to store multiple values in a single variable, instead of declaring separate variables for each value. An array is a container object that holds a fixed number of values of a single type. The length of an array is established when the array is created. </p>
        <p>$cars = array("Volvo", "BMW", "Toyota");</p>
        
        <h2>PHP Array Types</h2>
            <p>In PHP, there are three types of arrays:</p>
            <li>Indexed arrays - Arrays with a numeric index</li>
            <li>Associative arrays - Arrays with named keys</li>
            <li>Multidimensional arrays - Arrays containing one or more arrays</li>

         <h2>Working With Arrays</h2>
            <p>In this tutorial you will learn how to work with arrays, including:</p>
            <li>Create Arrays</li>
            <li>Access Arrays</li>
            <li>Update Arrays</li>
            <li>Add Array Items</li>
            <li>Remove Array Items</li>
            <li>Sort Arrays</li>

         <h2>Array Items</h2>
            <p>Array items can be of any data type. The most common are strings and numbers (int, float), but array items can also be objects, functions or even arrays.</p>
            <p>You can have different data types in the same array.</p>
            <h3>Example:</h3>
            <p>Array items of four different data types:</p>
            <p>$myArr = array("Volvo", 15, ["apples", "bananas"], myFunction);</p>
        
        <h2>Array Functions</h2>
        <p>The real strength of PHP arrays are the built-in array functions, like the count() function for counting array items:</p>
        <h3>Example:</h3>
        <p>How many items are in the $cars array:</p>
        <p>$cars = array("Volvo", "BMW", "Toyota");</p>
        <p>echo count($cars);</p>
        <h3>Output:</h3>
        <p>3</p>
        
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