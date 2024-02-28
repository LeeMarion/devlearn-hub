<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Python Variables</title>
    <link rel="icon" href="assets/images/lg.png">
</head>
<body>
    <div class="sidenav">
        <a href="coursemod"><h2>Python</h2></a>
        <a href="intro">Python Introduction</a>
        <a href="data">Python Data Types</a>
        <a href="list">Python List</a>
        <a href="variables">Python Variables</a>
        <a href="syntax">Python Syntax</a>
        <a href="operators">Python Operators</a>
        <a href="condition">Python Condition</a>
        <a href="while">Python While Loops</a>
        <a href="for">Python For Loops</a>
    </div>

    <div class="main">
        <h2>Variables</h2>
        <p>A Python variable is a reserved memory location to store values. In other words, a variable in a python program gives data to the computer for processing. Every value in Python has a datatype. Different data types in Python are Numbers, List, Tuple, Strings, Dictionary, etc.</p>

        <h2>Creating Variables</h2>
            <p>Python has no command for declaring a variable.</p>
            <p>A variable is created the moment you first assign a value to it.</p>
            <h3>Example:</h3>
            <p>x = 5</p>
            <p>y = "John"</p>
            <p>print(x)</p>
            <p>print(y)</p>
            <h3>Output:</h3>
            <p>5</p>
            <p>John</p>

            <p>Note: Variables do not need to be declared with any particular type, and can even change type after they have been set.</p>
            <h3>Example:</h3>
            <p>x = 4       # x is of type int</p>
            <p>x = "Sally" # x is now of type str</p>
            <p>print(x)</p>
            <h3>Output:</h3>
            <p>Sally</p>

        <h2>Casting</h2>
            <p>If you want to specify the data type of a variable, this can be done with casting.</p>
            <h3>Example:</h3>
            <p>x = str(3)    # x will be '3'</p>
            <p>y = int(3)    # y will be 3</p>
            <p>z = float(3)  # z will be 3.0</p>
            <h3>Example:</h3>
            <p>3</p>
            <p>3</p>
            <p>3.0</p>

        <h2>Get the Type</h2>
            <p>You can get the data type of a variable with the type() function.</p>
            <h3>Example:</h3>
            <p>x = 5</p>
            <p>y = "John"</p>
            <p>print(type(x))</p>
            <p>print(type(y))</p>
            <h3>Output:</h3>
            <p>class 'int'</p>
            <p>class 'str'</p>

        <h2>Single or Double Quotes</h2>
            <p>String variables can be declared either by using single or double quotes:</p>
            <h3>Example:</h3>
            <p>x = "John"</p>
            <p># is the same as</p>
            <p>x = 'John'</p>
            <h3>Output:</h3>
            <p>John</p> 

        <h2>Case-Sensitive</h2>
            <p>Variable names are case-sensitive.</p>
            <h3>Example:</h3>
            <p>This will create two variables:</p>
            <p>a = 4</p>
            <p>A = "Sally"</p>
            <p>#A will not overwrite a</p>  
            <p>print(a)</p>
            <p>print(A)</p>
            <h3>Output:</h3>
            <p>4</p>
            <p>Sally</p> 
            
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