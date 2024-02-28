<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Python While Loops</title>
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
        <h2>Python Loops</h2>
        <p>Python has two primitive loop commands:</p>
            <li>while loops</li>
            <li>for loops</li>

        <h2>The While Loop</h2>
            <p>A while loop is a control flow statement which repeatedly executes a block of code until the condition is satisfied. It stops executing the block only if the condition fails.</p>
            <h3>Example:</h3>
            <p>Print i as long as i is less than 6:</p>
            <p>i = 1</p>
            <p>while i < 6:</p>
            <p>>>>print(i)</p>
            <p>>>> i += 1</p>
            <h3>Output:</h3>
            <p>1</p>
            <p>2</p>
            <p>3</p>
            <p>4</p>
            <p>5</p>
            <p>Note: remember to increment i, or else the loop will continue forever.</p>

            <h2>The break Statement</h2>
            <p>With the break statement we can stop the loop even if the while condition is true:</p>
            <h3>Example:</h3>
            <p>Exit the loop when i is 3:</p>
            <p>i = 1</p>
            <p>while i < 6:</p>
            <p>>>>print(i)</p>
            <p>>>>if i == 3:</p>
            <p>>>>>break</p>
            <p>>>>i += 1</p>
            <h3>Output:</h3>
            <p>1</p>
            <p>2</p>
            <p>3</p>

            <h2>The continue Statement</h2>
            <p>With the continue statement we can stop the current iteration, and continue with the next:</p>
            <h3>Example:</h3>
            <p>Continue to the next iteration if i is 3:</p>
            <p>i = 0</p>
            <p>while i < 6:</p>
            <p>>>>i += 1</p>
            <p>>>>if i == 3:</p>
            <p>>>>>continue</p>
            <p>>>>print(i)</p>
            <h3>Output:</h3>
            <p>1</p>
            <p>2</p>
            <p>3</p>
            <p>4</p>
            <p>5</p>
            <p>6</p>

            <h2>The else Statement</h2>
            <p>With the else statement we can run a block of code once when the condition no longer is true:</p>
            <h3>Example:</h3>
            <p>Print a message once the condition is false:</p>
            <p>i = 1</p>
            <p>while i < 6:</p>
            <p>>>>print(i)</p>
            <p>>>>i += 1</p>
            <p>else:</p>
            <p>>>>print("i is no longer less than 6")</p>
            <h3>Output:</h3>
            <p>1</p>
            <p>2</p>
            <p>3</p>
            <p>4</p>
            <p>5</p>
            <p>i is no longer less than 6</p>

            <h2>Not</h2>
            <p>The not keyword is a logical operator, and is used to reverse the result of the conditional statement:</p>
            <h3>Example:</h3>
            <p>Test if a is NOT greater than b:</p>
            <p>a = 33</p>
            <p>b = 200</p>
            <p>if not a > b:</p>
            <p>>>>print("a is NOT greater than b")</p>
            <h3>Output:</h3>
            <p>a is NOT greater than b</p>

            <h2>Nested If</h2>
            <p>You can have if statements inside if statements, this is called nested if statements.</p>
            <h3>Example:</h3>
            <p>x = 41</p>
            <p>if x > 10:</p>
            <p>>>>print("Above ten,")</p>
            <p>>>>if x > 20:</p>
            <p>>>>>print("and also above 20!")</p>
            <p>>>> else:</p>
            <p>>>>>print("but not above 20.")</p>
            <h3>Output:</h3>
            <p>Above ten,</p>
            <p>and also above 20!</p>

            <h2>The pass Statement</h2>
            <p>if statements cannot be empty, but if you for some reason have an if statement with no content, put in the pass statement to avoid getting an error.</p>
            <h3>Example:</h3>
            <p>a = 33</p>
            <p>b = 200</p>
            <p>if b > a:</p>
            <p>>>> pass</p>
            <h3>Output:</h3>
            <p># having an empty if statement like this, would raise an error without the pass statement</p>
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