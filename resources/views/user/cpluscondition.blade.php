<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>C++ Condition</title>
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
        <h2>C++ Conditions and If Statements</h2>
        <p>Conditional statements, like the if-else statement in Java, control program flow based on conditions. The if-else syntax consists of an initial condition followed by code blocks for true and false outcomes. It enables executing different code paths depending on whether a condition evaluates to true or false.</p>
        <p>You already know that C++ supports the usual logical conditions from mathematics:</p>
        
            <li>Less than: a < b</li>
            <li>Less than or equal to: a <= b</li>
            <li>Greater than: a > b</li>
            <li>Greater than or equal to: a >= b</li>
            <li>Equal to a == b</li>
            <li>Not Equal to: a != b</li>
            <p>You can use these conditions to perform different actions for different decisions.</p>
            <p>C++ has the following conditional statements:</p>
            <li>Use if to specify a block of code to be executed, if a specified condition is true</li>
            <li>Use else to specify a block of code to be executed, if the same condition is false</li>
            <li>Use else if to specify a new condition to test, if the first condition is false</li>
            <li>Use switch to specify many alternative blocks of code to be executed</li>

        <h2>The if Statement</h2>
            <p>Use the if statement to specify a block of C++ code to be executed if a condition is true.</p>
            <h3>Syntax:</h3>
            <p>if (condition) {</p>
            <p>// block of code to be executed if the condition is true</p>
            <p>}</p>
            <p>Note that if is in lowercase letters. Uppercase letters (If or IF) will generate an error.</p>
            <p>In the example below, we test two values to find out if 20 is greater than 18. If the condition is true, print some text:</p>
            <h3>Example:</h3>
            <p>if (20 > 18) {</p>
                <p>cout << "20 is greater than 18";</p>
                <p>}</p>
            <h3>Output:</h3>
            <p>20 is greater than 18</p>

            <h2>The else Statement</h2>
            <p>Use the else statement to specify a block of code to be executed if the condition is false.</p>
            <h3>Syntax:</h3>
            <p>if (condition) {</p>
            <p>// block of code to be executed if the condition is true</p>
            <p>} else {</p>
            <p>// block of code to be executed if the condition is false</p>
            <p>}</p>
            <h3>Example:</h3>
            <p>int time = 20;</p>
            <p>if (time < 18) {</p>
            <p>  cout << "Good day.";</p>
            <p>} else {</p>
            <p> cout << "Good evening.";</p>
            <p>}</p>
            <h3>Output:</h3>
            <p>Good Evening.</p>


            <h2>The else if Statement</h2>
            <p>Use the else if statement to specify a new condition if the first condition is false.</p>
            <h3>Syntax</h3>
            <p>if (condition1) {</p>
            <p>  // block of code to be executed if condition1 is true</p>
            <p>} else if (condition2) {</p>
            <p>  // block of code to be executed if the condition1 is false and condition2 is true</p>
            <p>} else {</p>
            <p>  // block of code to be executed if the condition1 is false and condition2 is false</p>
            <p>}</p>
            <h3>Example:</h3>
            <p>int time = 22;</p>
            <p>if (time < 10) {</p>
            <p>   cout << "Good morning.";</p>
            <p>} else if (time < 18) {</p>
            <p>   cout << "Good day.";</p>
            <p>} else {</p>
            <p>   cout << "Good evening.";</p>
            <p>}</p>
            <h3>Output:</h3>
            <p>Good Evening.</p>

            
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