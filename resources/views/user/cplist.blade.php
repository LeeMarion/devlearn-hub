<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>C List</title>
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
        <h2>C Arrays</h2>
        <p>Arrays are used to store multiple values in a single variable, instead of declaring separate variables for each value. It  is a variable that can store multiple values. For example, if you want to store 100 integers, you can create an array for it.</p>
        <p>To create an array, define the data type (like int) and specify the name of the array followed by square brackets [].</p>
        <p>To insert values to it, use a comma-separated list, inside curly braces:</p>
        <h3>Example:</h3>
            <p>int myNumbers[] = {25, 50, 75, 100};</p>

        <h2>Access the Elements of an Array</h2>
            <p>To access an array element, refer to its index number.</p>
            <p>Array indexes start with 0: [0] is the first element. [1] is the second element, etc.</p>
            <p>This statement accesses the value of the first element [0] in myNumbers:</p>
            <h3>Example:</h3>
            <p>int myNumbers[] = {25, 50, 75, 100};</p>
            <p>printf("%d", myNumbers[0]);</p>
            <p>// Outputs 25</p>

         <h2>Change an Array Element</h2>
            <p>To change the value of a specific element, refer to the index number:</p>
            <h3>Example:</h3>
            <p>int myNumbers[] = {25, 50, 75, 100};</p>
            <p>myNumbers[0] = 33;</p>
            <p>printf("%d", myNumbers[0]);</p>
            <p>// Now outputs 33 instead of 25</p>

         <h2>Loop Through an Array</h2>
            <p>You can loop through the array elements with the for loop.</p>
            <p>The following example outputs all elements in the myNumbers array:</p>
            <h3>Example:</h3>
            <p>int myNumbers[] = {25, 50, 75, 100};</p>
            <p>int i;</p>
            <p>for (i = 0; i < 4; i++) {</p>
            <p>  printf("%d\n", myNumbers[i]);</p>
            <p>}</p>

        <h2>Set Array Size</h2>
            <p> Another common way to create arrays, is to specify the size of the array, and add elements later:</p>
            <h3>Example:</h3>
            <p>// Declare an array of four integers:</p>
            <p>int myNumbers[4];</p>
            <p>// Add elements</p>
            <p>myNumbers[0] = 25;</p>
            <p>myNumbers[1] = 50;</p>
            <p>myNumbers[2] = 75;</p>
            <p>myNumbers[3] = 100;</p>
            <p>Using this method, you should know the number of array elements in advance, in order for the program to store enough memory.</p>
            <p>You are not able to change the size of the array after creation.</p>

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