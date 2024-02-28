<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>JavaScript Arrays</title>
    <link rel="icon" href="assets/images/lg.png">
</head>
<body>
    <div class="sidenav">
        <a href="coursemod"><h2>JavaScript</h2></a>
        <a href="jsintro">JavaScript Introduction</a>
        <a href="jsdata">JavaScript Data Types</a>
        <a href="jslist">JavaScript Arrays</a>
        <a href="jsvariables">JavaScript Variables</a>
        <a href="jssyntax">JavaScript Syntax</a>
        <a href="jsoperators">JavaScript Operators</a>
        <a href="jscondition">JavaScript Condition</a>
        <a href="jswhile">JavaScript While Loops</a>
        <a href="jsfor">JavaScript For Loops</a>
    </div>

    <div class="main">
        <h2>JavaScript Arrays</h2>
        <p>Arrays are used to store multiple values in a single variable, instead of declaring separate variables for each value. An array is a container object that holds a fixed number of values of a single type. The length of an array is established when the array is created. </p>
        <p>An array is a special variable, which can hold more than one value:</p>
        <p>const cars = ["Saab", "Volvo", "BMW"];</p>
        
        <h2>Why Use Arrays?</h2>
            <p>If you have a list of items (a list of car names, for example), storing the cars in single variables could look like this:</p>
            <p>let car1 = "Saab";</p>
            <p>let car2 = "Volvo";</p>
            <p>let car3 = "BMW";</p>
            <p>An array can hold many values under a single name, and you can access the values by referring to an index number.</p>

         <h2>Creating an Array</h2>
            <p>Using an array literal is the easiest way to create a JavaScript Array.</p>
            <h3>Syntax:</h3>
            <p>const array_name = [item1, item2, ...];   </p>
            <h3>Example:</h3>
            <p>const cars = ["Saab", "Volvo", "BMW"];</p>
            <p>document.getElementById("demo").innerHTML = cars;</p>
            <h3>Output:</h3>
            <p>Saab,Volvo,BMW</p>

         <h2>Using the JavaScript Keyword new</h2>
            <p>The following example also creates an Array, and assigns values to it:</p>
            <h3>Example:</h3>
            <p>const cars = new Array("Saab", "Volvo", "BMW");</p>
            <p>document.getElementById("demo").innerHTML = cars;</p>
            <h3>Output:</h3>
            <p>Saab,Volvo,BMW</p>

            <h2>Accessing Array Elements</h2>
            <p>You access an array element by referring to the index number:</p>
            <h3>Example:</h3>
            <p>const cars = ["Saab", "Volvo", "BMW"];</p>
            <p>let car = cars[0];</p>
            <p>document.getElementById("demo").innerHTML = cars[0];</p>
            <h3>Output:</h3>
            <p>Saab</p>
            <p>Note: Array indexes start with 0.</p>

            <h2>Changing an Array Element</h2>
            <p>This statement changes the value of the first element in cars:</p>
            <h3>Example:</h3>
            <p>const cars = ["Saab", "Volvo", "BMW"];</p>
            <p>cars[0] = "Opel";</p>
            <p>document.getElementById("demo").innerHTML = cars;</p>
            <h3>Output:</h3>
            <p>Opel,Volvo,BMW</p>

            <h2>Converting an Array to a String</h2>
            <p>The JavaScript method toString() converts an array to a string of (comma separated) array values.</p>
            <h3>Example:</h3>
            <p>const fruits = ["Banana", "Orange", "Apple", "Mango"];</p>
            <p>document.getElementById("demo").innerHTML = fruits.toString();</p>
            <h3>Output:</h3>
            <p>Banana,Orange,Apple,Mango</p>

            <h2>Access the Full Array</h2>
            <p>With JavaScript, the full array can be accessed by referring to the array name:</p>
            <h3>Example:</h3>
            <p>const cars = ["Saab", "Volvo", "BMW"];</p>
            <p>document.getElementById("demo").innerHTML = cars;</p>
            <h3>Output:</h3>
            <p>Saab,Volvo,BMW</p>

            <h2>Array Properties and Methods</h2>
            <p>The real strength of JavaScript arrays are the built-in array properties and methods:</p>
            <p>cars.length   // Returns the number of elements</p>
            <p>cars.sort()   // Sorts the array</p>
            <h3>The length Property</h3>
            <p>The length property of an array returns the length of an array (the number of array elements).</p>
            <h3>Example:</h3>
            <p>const fruits = ["Banana", "Orange", "Apple", "Mango"];</p>
            <p>let length = fruits.length;</p>
            <p>document.getElementById("demo").innerHTML = size;</p>
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