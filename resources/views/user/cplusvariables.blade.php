<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>C++ Variables</title>
    <link rel="icon" href="assets/images/lg.png">
</head>
<body>
    <div class="sidenav">
        <a href="coursemod"><h2>C++</h2></a>
        <a href="cplusintro">C++ Introduction</a>
        <a href="cplusdata">C++ Data Types</a>
        <a href="cpluslist">C++ Arrays</a>
        <a href="cplusvariables">C++ Variables</a>
        <a href="cplussyntax">C++ Syntax</a>
        <a href="cplusoperators">C++ Operators</a>
        <a href="cpluscondition">C++ Condition</a>
        <a href="cpluswhile">C++ While Loops</a>
        <a href="cplusfor">C++ For Loops</a> 
    </div>

    <div class="main">
        <h2>C++ Variables</h2>
        <p>Variables are containers for storing data values, like numbers and characters.</p>
        <p>In C++, there are different types of variables (defined with different keywords), for example:</p>
        <li>int - stores integers (whole numbers), without decimals, such as 123 or -123</li>
        <li>double - stores floating point numbers, with decimals, such as 19.99 or -19.99</li>
        <li>char - stores single characters, such as 'a' or 'B'. Characters are surrounded by single quotes</li>
        <li>string - stores text, such as "Hello World". String values are surrounded by double quotes</li>
        <li>bool - stores values with two states: true or false</li>


        <h2>Declaring (Creating) Variables</h2>
            <p>To create a variable, specify the type and assign it a value:</p>
            <h3>Syntax:</h3>
            <p>type variableName = value;</p>
            <p>Where type is one of C types (such as int), and variableName is the name of the variable (such as x or myName). The equal sign is used to assign a value to the variable.</p>
            <p>So, to create a variable that should store a number, look at the following example:</p>
            <h3>Example:</h3>
            <p>Create a variable called myNum of type int and assign the value 15 to it:</p>
            <p>int myNum = 15;</p>
            <p>cout << myNum;</p>

         <h2>Display Variables</h2>
            <p>The cout object is used together with the << operator to display variables.</p>
            <p>To combine both text and a variable, separate them with the << operator:</p>
            <h3>Example:</h3>
            <p>int myAge = 35;</p>
            <p>cout << "I am " << myAge << " years old.";</p>
            <h3>Output:</h3>
            <p>I am 35 years old.</p>
            


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