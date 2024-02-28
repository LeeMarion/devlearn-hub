<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Python Condition</title>
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
        <h2>Python Conditions and If statements</h2>
        <p>What is a condition in Python?
            Conditional statements are an essential part of programming in Python. They allow you to make decisions based on the values of variables or the result of comparisons.</p>
        <p>Python supports the usual logical conditions from mathematics:</p>
            <li>Equals: a == b</li>
            <li>Not Equals: a != b</li>
            <li>Less than: a < b</li>
            <li>Less than or equal to: a <= b</li>
            <li>Greater than: a > b</li>
            <li>Greater than or equal to: a >= b</li>
            <p>These conditions can be used in several ways, most commonly in "if statements" and loops.</p>
            <p>An "if statement" is written by using the if keyword.</p>
            <h3>Example:</h3>
            <p>If statement:</p>
            <p>a = 33</p>
            <p>b = 200</p>
            <p>if b > a:</p>
            <p>>>>print("b is greater than a")</p>
            <h3>Output:</h3>
            <p>b is greater than a</p>

        <h2>Elif</h2>
            <p>The elif keyword is Python's way of saying "if the previous conditions were not true, then try this condition".</p>
            <h3>Example:</h3>
            <p>a = 33</p>
            <p>b = 33</p>
            <p>if b > a:</p>
            <p>>>>print("b is greater than a")</p>
            <p>elif a == b:</p>
            <p>>>>print("a and b are equal")</p>
            <h3>Output:</h3>
            <p>a and b are equal</p>

            <h2>Else</h2>
            <p>The else keyword catches anything which isn't caught by the preceding conditions.</p>
            <h3>Example:</h3>
            <p>a = 200</p>
            <p>b = 33</p>
            <p>if b > a:</p>
            <p>>>>print("b is greater than a")</p>
            <p>elif a == b:</p>
            <p>>>>print("a and b are equal")</p>
            <p>else:</p>
            <p>>>>print("a is greater than b")</p>
            <h3>Output:</h3>
            <p>a is greater than b</p>

            <h2>And</h2>
            <p>The and keyword is a logical operator, and is used to combine conditional statements:</p>
            <h3>Example:</h3>
            <p>Test if a is greater than b, AND if c is greater than a:</p>
            <p>a = 200</p>
            <p>b = 33</p>
            <p>c = 500</p>
            <p>if a > b and c > a:</p>
            <p>>>>print("Both conditions are True")</p>
            <h3>Output:</h3>
            <p>Both conditions are True</p>

            <h2>Or</h2>
            <p>The or keyword is a logical operator, and is used to combine conditional statements:</p>
            <h3>Example:</h3>
            <p>Test if a is greater than b, OR if a is greater than c:</p>
            <p>a = 200</p>
            <p>b = 33</p>
            <p>c = 500</p>
            <p>if a > b or a > c:</p>
            <p>>>>print("At least one of the conditions is True")</p>
            <h3>Output:</h3>
            <p>At least one of the conditions is True</p>

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