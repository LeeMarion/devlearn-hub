<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>PHP While Loops</title>
    <link rel="icon" href="assets/images/lg.png">
</head>
<body>
    <div class="sidenav">
        <a href="coursemod"><h2>PHP</h2></a>
        <a href="pintro">PHP Introduction</a>
        <a href="pdata">PHP Data Types</a>
        <a href="plist">PHP Arrays</a>
        <a href="pvariables">PHP Variables</a>
        <a href="psyntax">PHP Syntax</a>
        <a href="poperators">PHP Operators</a>
        <a href="pcondition">PHP Condition</a>
        <a href="pwhile">PHP While Loops</a>
        <a href="pfor">PHP For Loops</a>    
    </div>

    <div class="main">
        <h2>The PHP while Loop</h2>
            <p>A while loop is a control flow statement which repeatedly executes a block of code until the condition is satisfied. It stops executing the block only if the condition fails.</p>
            <h3>Example:</h3>
            <p>Print $i as long as $i is less than 6:</p>
            <p>$i = 1;</p>
            <p>while ($i < 6) {</p>
            <p>  echo $i;</p>
            <p>  $i++;</p>
            <p>}</p>
            <h3>Output:</h3>
            <p>12345</p>
            <p>Note: remember to increment $i, or else the loop will continue forever.</p>

            <h2>The PHP do...while Loop</h2>
            <p>The do/while loop is a variant of the while loop. This loop will execute the code block once, before checking if the condition is true, then it will repeat the loop as long as the condition is true.</p>
            <h3>Example:</h3>
            <p>$i = 1;</p>
            <p>do {</p>
            <p>  echo $i;</p>
            <p>  $i++;</p>
            <p>} while ($i < 6);</p>
            <h3>Output:</h3>
            <p>12345</p>
            <p>Note: In a do...while loop the condition is tested AFTER executing the statements within the loop. This means that the do...while loop will execute its statements at least once, even if the condition is false.</p>

            <h2>The break Statement</h2>
            <p>With the break statement we can stop the loop even if the condition is still true:</p>
            <h3>Example:</h3>
            <p>Stop the loop when $i is 3:</p>
            <p>$i = 1;</p>
            <p>do {</p>
            <p>  if ($i == 3) break;</p>
            <p>  echo $i;</p>
            <p>  $i++;</p>
            <p>} while ($i < 6);</p>
            <h3>Output:</h3>
            <p>12</p>

            <h2>The continue Statement</h2>
            <p>With the continue statement we can stop the current iteration, and continue with the next:</p>
            <h3>Example</h3>
            <p>Stop, and jump to the next iteration if $i is 3:</p>
            <p>$i = 0;</p>
            <p>do {</p>
            <p>  $i++;</p>
            <p>  if ($i == 3) continue;</p>
            <p>  echo $i;</p>
            <p>} while ($i < 6);</p>
            <h3>Output:</h3>
            <p>12456</p>
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