<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>C For Loops</title>
    <link rel="icon" href="assets/images/lg.png">
</head>
<body>
    <div class="sidenav">
        <a href="coursemod"><h2>C</h2></a>
        <a href="cpintro">C Introduction</a>
        <a href="cpdata">C Data Types</a>
        <a href="cplist">C Arrays</a>
        <a href="cpvariables">C Variables</a>
        <a href="cpsyntax">C Syntax</a>
        <a href="cpoperators">C Operators</a>
        <a href="cpcondition">C Condition</a>
        <a href="cpwhile">C While Loops</a>
        <a href="cpfor">C For Loops</a> 
    </div>

    <div class="main">
        <h2>C For Loop</h2>
        <p>When you know exactly how many times you want to loop through a block of code, use the for loop instead of a while loop:</p>    
            <h3>Syntax:</h3>
            <p>for (statement 1; statement 2; statement 3) {</p>
            <p>  // code block to be executed</p>
            <p>}</p>
            <p>Statement 1 is executed (one time) before the execution of the code block.</p>
            <p>Statement 2 defines the condition for executing the code block.</p>
            <p>Statement 3 is executed (every time) after the code block has been executed.</p>
            <p>The example below will print the numbers 0 to 4:</p>
            <h3>Example:</h3>
            <p>int i;</p>
            <p>for (int i = 0; i < 5; i++) {</p>
            <p>printf("%d\n", i);</p>
            <p>}</p>
            <h3>Output:</h3>
            <p>0</p>
            <p>1</p>
            <p>2</p>
            <p>3</p>
            <p>4</p>
            <p>Example explained</p>
            <p>Statement 1 sets a variable before the loop starts (int i = 0).</p>
            <p>Statement 2 defines the condition for the loop to run (i must be less than 5). If the condition is true, the loop will start over again, if it is false, the loop will end.</p>
            <p>Statement 3 increases a value (i++) each time the code block in the loop has been executed.</p>


        <h2>Nested Loops</h2>
            <p>It is also possible to place a loop inside another loop. This is called a nested loop.</p>
            <p>The "inner loop" will be executed one time for each iteration of the "outer loop":The "inner loop" will be executed one time for each iteration of the "outer loop":</p>
            <h3>Example:</h3>
            <p>int i, j;</p>
            <p>// Outer loop</p>
            <p>for (int i = 1; i <= 2; i++) {</p>
            <p>printf("Outer: %d\n", i);  // Executes 2 times</p>
            <p>// Inner loop</p>
            <p>for (int j = 1; j <= 3; j++) {</p>
            <p> printf(" Inner: %d\n", j); // Executes 6 times (2 * 3)</p>
            <p>}</p>
            <p>}</p>
            <h3>Output:</h3>
            <p>Outer: 1</p>
            <p> Inner: 1</p>
            <p> Inner: 2</p>
            <p> Inner: 3</p>
            <p>Outer: 2</p>
            <p> Inner: 1</p>
            <p> Inner: 2</p>
            <p> Inner: 3</p>

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