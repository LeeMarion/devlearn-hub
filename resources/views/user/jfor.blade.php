<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Java For Loops</title>
    <link rel="icon" href="assets/images/lg.png">
</head>
<body>
    <div class="sidenav">
        <a href="coursemod"><h2>Java</h2></a>
        <a href="jintro">Java Introduction</a>
        <a href="jdata">Java Data Types</a>
        <a href="jlist">Java Arrays</a>
        <a href="jvariables">Java Variables</a>
        <a href="jsyntax">Java Syntax</a>
        <a href="joperators">Java Operators</a>
        <a href="jcondition">Java Condition</a>
        <a href="jwhile">Java While Loops</a>
        <a href="jfor">Java For Loops</a>
    </div>

    <div class="main">
        <h2>Java For Loop</h2>
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
            <p>for (int i = 0; i < 5; i++) {</p>
            <p>  System.out.println(i);</p>
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
            <p>// Outer loop</p>
            <p>for (int i = 1; i <= 2; i++) {</p>
            <p>System.out.println("Outer: " + i); // Executes 2 times</p>
            <p>// Inner loop</p>
            <p>for (int j = 1; j <= 3; j++) {</p>
            <p>System.out.println(" Inner: " + j); // Executes 6 times (2 * 3)</p>
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

            <h2>For-Each Loop</h2>
            <p>There is also a "for-each" loop, which is used exclusively to loop through elements in an array:</p>
            <h3>Syntax:</h3>
            <p>for (type variableName : arrayName) {</p>
            <p>// code block to be executed</p>
            <p>}</p>
            <p>The following example outputs all elements in the cars array, using a "for-each" loop:</p>
            <h3>Example:</h3>
            <p>String[] cars = {"Volvo", "BMW", "Ford", "Mazda"};</p>
            <p>for (String i : cars) {</p>
            <h3> System.out.println(i);</h3>
            <p>}</p>
            <h3>Output:</h3>
            <p>Volvo</p>
            <p>BMW</p>
            <p>Ford</p>
            <p>Mazda</p>

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