<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>JavaScript While Loops</title>
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
        <h2>JavaScript While Loop</h2>
            <p>A while loop is a control flow statement which repeatedly executes a block of code until the condition is satisfied. It stops executing the block only if the condition fails.</p>
            <h3>Syntax:</h3>
            <p>while (condition) {</p>
            <p>  // code block to be executed</p>
            <p>}</p>
            <h3>Example:</h3>
            <p>In the following example, the code in the loop will run, over and over again, as long as a variable (i) is less than 10:</p>
            <p>while (i < 10) {</p>
            <p>text += "The number is " + i;</p>
            <p>i++;</p>
            <p>}</p>
            <h3>Output:</h3>
            <p>The number is 0</p>
            <p>The number is 1</p>
            <p>The number is 2</p>
            <p>The number is 3</p>
            <p>The number is 4</p>
            <p>The number is 5</p>
            <p>The number is 6</p>
            <p>The number is 7</p>
            <p>The number is 8</p>
            <p>The number is 9</p>

            <h2>The Do/While Loop</h2>
            <p>The do/while loop is a variant of the while loop. This loop will execute the code block once, before checking if the condition is true, then it will repeat the loop as long as the condition is true.</p>
            <h3>Syntax:</h3>
            <p>do {</p>
            <p>  // code block to be executed</p>
            <p>}</p>
            <p>while (condition);</p>
            <h3>Example:</h3>
            <p>The example below uses a do while loop. The loop will always be executed at least once, even if the condition is false, because the code block is executed before the condition is tested:   </p>
            <p>do {</p>
            <p>i++;</p>
            <p>}</p>
            <p>while (i < 10);</p>
            <h3>Output:</h3>
            <p>The number is 0</p>
            <p>The number is 1</p>
            <p>The number is 2</p>
            <p>The number is 3</p>
            <p>The number is 4</p>
            <p>The number is 5</p>
            <p>The number is 6</p>
            <p>The number is 7</p>
            <p>The number is 8</p>
            <p>The number is 9</p>
            <p>Note: Do not forget to increase the variable used in the condition, otherwise the loop will never end!</p>

            
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