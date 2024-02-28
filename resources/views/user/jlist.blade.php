<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Java Arrays</title>
    <link rel="icon" href="assets/images/lg.png">
</head>
<body>
    <div class="sidenav">
        <a href="coursemod"><h2>Java</h2></a>
        <a href="jintro">Java Introduction</a>
        <a href="jdata">Java Data Types</a>
        <a href="jlist">Java Arrays</a>
        <a href="jvariables">Java Variables</a>
        <a href="jsyntax">Java Syntax</a>
        <a href="joperators">Java Operators</a>
        <a href="jcondition">Java Condition</a>
        <a href="jwhile">Java While Loops</a>
        <a href="jfor">Java For Loops</a>
    </div>

    <div class="main">
        <h2>Java Arrays</h2>
        <p>Arrays are used to store multiple values in a single variable, instead of declaring separate variables for each value. An array is a container object that holds a fixed number of values of a single type. The length of an array is established when the array is created. </p>
        <p>To declare an array, define the variable type with square brackets:</p>
        <p>String[] cars;</p>
        <p>We have now declared a variable that holds an array of strings. To insert values to it, you can place the values in a comma-separated list, inside curly braces:</p>
        <p>String[] cars = {"Volvo", "BMW", "Ford", "Mazda"};</p>
        <p>To create an array of integers, you could write:</p>
        <p>int[] myNum = {10, 20, 30, 40};</p>
        
        <h2>Access the Elements of an Array</h2>
            <p>You can access an array element by referring to the index number.</p>
            <p>This statement accesses the value of the first element in cars:</p>
            <h3>Example:</h3>
            <p>String[] cars = {"Volvo", "BMW", "Ford", "Mazda"};</p>
            <p>System.out.println(cars[0]);</p>
            <h3>Output:</h3>
            <p>Volvo</p>
            <p>Note: Array indexes start with 0: [0] is the first element. [1] is the second element, etc.</p>

         <h2>Change an Array Element</h2>
            <p>To change the value of a specific element, refer to the index number:</p>
            <h3>Example:</h3>
            <p>cars[0] = "Opel";</p>
            <h3>Example:</h3>
            <p>String[] cars = {"Volvo", "BMW", "Ford", "Mazda"};</p>
            <p>cars[0] = "Opel";</p>
            <p>System.out.println(cars[0]);</p>
            <h3>Output:</h3>
            <p>Opel</p>

         <h2>Array Length</h2>
            <p>To find out how many elements an array has, use the length property:</p>
            <h3>Example:</h3>
            <p>String[] cars = {"Volvo", "BMW", "Ford", "Mazda"};</p>
            <p>System.out.println(cars.length);</p>
            <h3>Output:</h3>
            <p>4</p>
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