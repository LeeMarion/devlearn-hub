<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>JavaScript Condition</title>
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
        <h2>JavaScript Conditions and If Statements</h2>
        <p>Very often when you write code, you want to perform different actions for different decisions. You can use conditional statements in your code to do this.</p>
        <p>In JavaScript we have the following conditional statements:</p>
        <li>Use if to specify a block of code to be executed, if a specified condition is true</li>
        <li>Use else to specify a block of code to be executed, if the same condition is false</li>
        <li>Use else if to specify a new condition to test, if the first condition is false</li>
        <li>Use switch to specify many alternative blocks of code to be executed</li>
        <p>The switch statement is described in the next chapter.</p>

        <h2>The if Statement</h2>
            <p>Use the if statement to specify a block of JavaScript code to be executed if a condition is true.</p>
            <h3>Syntax:</h3>
            <p>if (condition) {</p>
            <p>// block of code to be executed if the condition is true</p>
            <p>}</p>
            <p>Note that if is in lowercase letters. Uppercase letters (If or IF) will generate an error.</p>
            <h3>Example:</h3>
            <p>Make a "Good day" greeting if the hour is less than 18:00:</p>
            <p>if (hour < 18) {</p>
                <p>greeting = "Good day";</p>
                <p>}</p>
            <h3>Output:</h3>
            <p>Good day</p>

            <h2>The else Statement</h2>
            <p>Use the else statement to specify a block of code to be executed if the condition is false.</p>
            <h3>Syntax:</h3>
            <p>if (condition) {</p>
            <p>// block of code to be executed if the condition is true</p>
            <p>} else {</p>
            <p>// block of code to be executed if the condition is false</p>
            <p>}</p>
            <h3>Example:</h3>
            <p>If the hour is less than 18, create a "Good day" greeting, otherwise "Good evening":</p>
            <p>if (hour < 18) {</p>
            <p> greeting = "Good day";</p>
            <p>  } else {</p>
            <p>greeting = "Good evening";</p>
            <p>}</p>
            <h3>Output:</h3>
            <p>Good day</p>


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
            <p>If time is less than 10:00, create a "Good morning" greeting, if not, but time is less than 20:00, create a "Good day" greeting, otherwise a "Good evening":</p>
            <p>if (time < 10) {</p>
            <p>greeting = "Good morning";</p>
            <p>} else if (time < 20) {</p>
            <p>greeting = "Good day";</p>
            <p> } else {</p>
            <p>greeting = "Good evening";</p>
            <p>}</p>
            <h3>Output:</h3>
            <p>Good Day</p>

            
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