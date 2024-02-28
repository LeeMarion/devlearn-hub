<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>JavaScript Variables</title>
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
        <h2>JavaScript Variables</h2>
        <p>Variables are containers for storing data values.</p>
        <p>JavaScript Variables can be declared in 4 ways:</p>
        <li>Automatically</li>
        <li>Using var</li>
        <li>Using let</li>
        <li>Using const</li>
        <p>In this first example, x, y, and z are undeclared variables.</p>
        <p>They are automatically declared when first used:</p>
        <h3>Example:</h3>
        <p>x = 5;</p>
        <p>y = 6;</p>
        <p>z = x + y;</p>
        <p>document.getElementById("demo").innerHTML = "The value of z is: " + z;</p>
        <h3>Output:</h3>
        <p>The value of z is: 11</p>
        <h3>Example using var:</h3>
        <p>x = 5;</p>
        <p>y = 6;</p>
        <p>z = x + y;</p>
        <p>document.getElementById("demo").innerHTML = "The value of z is: " + z;</p>
        <h3>Output:</h3>
        <p>The value of z is: 11</p>
        <h3>Note:</h3>
        <p>The var keyword was used in all JavaScript code from 1995 to 2015.</p>
        <p>The let and const keywords were added to JavaScript in 2015.</p>
        <p>The var keyword should only be used in code written for older browsers.</p>
        <h3>Example using let:</h3>
        <p>x = 5;</p>
        <p>y = 6;</p>
        <p>z = x + y;</p>
        <p>document.getElementById("demo").innerHTML = "The value of z is: " + z;</p>
        <h3>Output:</h3>
        <p>The value of z is: 11</p>
        <h3>Example using const:</h3>
        <p>x = 5;</p>
        <p>y = 6;</p>
        <p>z = x + y;</p>
        <p>document.getElementById("demo").innerHTML = "The value of z is: " + z;</p>
        <h3>Output:</h3>
        <p>The value of z is: 11</p>
        <h3>Mixed Example:</h3>
        <p>const price1 = 5;</p>
        <p>y = 6;</p>
        <p>const price2 = 6;</p>
        <p>let total = price1 + price2;</p>
        <p>document.getElementById("demo").innerHTML = "The total is: " + total;</p>
        <h3>Output:</h3>
        <p>The total is: 11</p>
        <p>The two variables price1 and price2 are declared with the const keyword.</p>
        <p>These are constant values and cannot be changed.</p>
        <p>The variable total is declared with the let keyword.</p>
        <p>The value total can be changed.</p>


        <h2>JavaScript Identifiers</h2>
            <p>All JavaScript variables must be identified with unique names. These unique names are called identifiers. Identifiers can be short names (like x and y) or more descriptive names (age, sum, totalVolume).</p>
            <p>The general rules for constructing names for variables (unique identifiers) are:</p>
            <li>Names can contain letters, digits, underscores, and dollar signs.</li>
            <li>Names must begin with a letter.</li>
            <li>Names can also begin with $ and _ (but we will not use it in this tutorial).</li>
            <li>Names are case sensitive (y and Y are different variables).</li>
            <li>Reserved words (like JavaScript keywords) cannot be used as names.</li>
            <p>Note: JavaScript identifiers are case-sensitive.</p>

            <h2>Re-Declaring JavaScript Variables</h2>
            <p>If you re-declare a JavaScript variable declared with var, it will not lose its value.</p>
            <p>The variable carName will still have the value "Volvo" after the execution of these statements:</p>
            <h3>Example:</h3>
            <p>var carName = "Volvo";</p>
            <p>var carName;</p>
            <p>document.getElementById("demo").innerHTML = carName;</p>
            <h3>Output:</h3>
            <p>Volvo</p>
            <p>Note: You cannot re-declare a variable declared with let or const.</p>
            <p>This will not work:</p>
            <p>let carName = "Volvo";</p>
            <p>let carName;</p>
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