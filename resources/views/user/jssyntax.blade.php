<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>JavaScript Syntax</title>
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
        <h2>JavaScript Syntax</h2>
        <p>JavaScript syntax is the set of rules, how JavaScript programs are constructed:</p>
        <p>// How to create variables:</p>
        <p>var x;</p>
        <p>let y;</p>
        <p>// How to use variables:</p>
        <p>x = 5;</p>
        <p>y = 6;</p>
        <p>let z = x + y;</p>
        
            
            <h2>JavaScript Values</h2>
            <p>The JavaScript syntax defines two types of values:</p>
            <li>Fixed values</li>
            <li>Variable values</li>
            <p>Fixed values are called Literals.</p>
            <p>Variable values are called Variables.</p>
            
            <h2>JavaScript Literals </h2>
            <p>The two most important syntax rules for fixed values are:</p>
            <h3>1. Numbers are written with or without decimals:</h3>
            <h3>Example:</h3>
            <p>10.50</p>
            <p>1001</p>
            <p>document.getElementById("demo").innerHTML = 10.50;</p>
            <h3>Output:</h3>
            <p>10.5</p>
            <h3>2. Strings are text, written within double or single quotes:</h3>
            <h3>Example:</h3>
            <p>"John Doe"</p>
            <p>'John Doe'</p>
            <p>  document.getElementById("demo").innerHTML = 'John Doe';</p>
            <h3>Output:</h3>
            <p>John Doe</p>

            <h2>JavaScript Variables</h2>
        <p>In a programming language, variables are used to store data values. JavaScript uses the keywords var, let and const to declare variables. An equal sign is used to assign values to variables.</p>
        <p>In this example, x is defined as a variable. Then, x is assigned (given) the value 6:    </p>
        <p>let x;</p>
        <p>x = 6;</p>
        <p>document.getElementById("demo").innerHTML = x;</p>
        <p>6</p>

        <h2>JavaScript Operators</h2>
        <p>JavaScript uses arithmetic operators ( + - * / ) to compute values:</p>
        <p>(5 + 6) * 10</p>
        <p>document.getElementById("demo").innerHTML = (5 + 6) * 10;</p>
        <p>110</p>
        <p>JavaScript uses an assignment operator ( = ) to assign values to variables:</p>
        <p>let x, y;</p>
        <p>x = 5;</p>
        <p>y = 6;</p>
        <p>document.getElementById("demo").innerHTML = x + y;</p>
        <p>11</p>

        <h2>JavaScript is Case Sensitive</h2>
        <p>All JavaScript identifiers are case sensitive. </p>
        <p>The variables lastName and lastname, are two different variables:</p>
        <p>let lastname, lastName;</p>
        <p>lastName = "Doe";</p>
        <p>lastname = "Peterson";</p>
        <p>document.getElementById("demo").innerHTML = lastName;</p>
        <p>Doe</p>
        <p>JavaScript does not interpret LET or Let as the keyword let.</p>
        
        <h2>JavaScript and Camel Case</h2>
        <p>Historically, programmers have used different ways of joining multiple words into one variable name: </p>
        <h3>Hyphens:</h3>
        <p>first-name, last-name, master-card, inter-city.</p>
        <p>Hyphens are not allowed in JavaScript. They are reserved for subtractions.</p>
        <h3>Underscore:</h3>
        <p>first_name, last_name, master_card, inter_city.</p>
        <h3>Upper Camel Case (Pascal Case):</h3>
        <p>FirstName, LastName, MasterCard, InterCity.</p>
        <h3>Lower Camel Case:</h3>
        <p>JavaScript programmers tend to use camel case that starts with a lowercase letter:</p>
        <p>firstName, lastName, masterCard, interCity.</p>
        
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