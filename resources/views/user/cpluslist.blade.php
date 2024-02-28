<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>C++ Arrays</title>
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
        <h2>C++ Arrays</h2>
        <p>Arrays are used to store multiple values in a single variable, instead of declaring separate variables for each value. It  is a variable that can store multiple values. For example, if you want to store 100 integers, you can create an array for it.</p>
        <p>To declare an array, define the variable type, specify the name of the array followed by square brackets and specify the number of elements it should store:</p>
        <p>string cars[4];</p>
        <p>We have now declared a variable that holds an array of four strings. To insert values to it, we can use an array literal - place the values in a comma-separated list, inside curly braces:</p>
        <p>string cars[4] = {"Volvo", "BMW", "Ford", "Mazda"};</p>
        <p>To create an array of three integers, you could write:</p>
        <p>int myNum[3] = {10, 20, 30};</p>

        <h2>Access the Elements of an Array</h2>
            <p>You access an array element by referring to the index number inside square brackets [].</p>
            <p>This statement accesses the value of the first element in cars:</p>
            <h3>Example:</h3>
            <p>string cars[4] = {"Volvo", "BMW", "Ford", "Mazda"};</p>
            <p>cout << cars[0];</p>
            <p>// Outputs Volvo</p>
            <p>Note: Array indexes start with 0: [0] is the first element. [1] is the second element, etc.</p>

         <h2>Change an Array Element</h2>
            <p>To change the value of a specific element, refer to the index number:</p>
            <h3>Example:</h3>
            <p>string cars[4] = {"Volvo", "BMW", "Ford", "Mazda"};</p>
            <p>cars[0] = "Opel";</p>
            <p>cout << cars[0];</p>
            <p>// Now outputs Opel instead of Volvo</p>

         <h2>Loop Through an Array</h2>
            <p>You can loop through the array elements with the for loop.</p>
            <p>The following example outputs all elements in the cars array:</p>
            <h3>Example:</h3>
            <p>string cars[5] = {"Volvo", "BMW", "Ford", "Mazda", "Tesla"};</p>
            <p>for (int i = 0; i < 5; i++) {</p>
            <p>  cout << cars[i] << "\n";</p>
            <p>}</p>

        <h2>The foreach Loop</h2>
        <p>There is also a "for-each loop" (introduced in C++ version 11 (2011), which is used exclusively to loop through elements in an array:</p>
        <h3>Syntax:</h3>
        <p>for (type variableName : arrayName) {</p>
        <p>  // code block to be executed</p>
        <p>}</p>
        <p>The following example outputs all elements in an array, using a "for-each loop":</p>
        <h3>Example:</h3>
        <p>int myNumbers[5] = {10, 20, 30, 40, 50};</p>
        <p>for (int i : myNumbers) {</p>
        <p>  cout << i << "\n";</p>
        <p>}</p>

        <h2>Get the Size of an Array</h2>
            <p>To get the size of an array, you can use the sizeof() operator:</p>
            <h3>Example:</h3>
            <p>int myNumbers[5] = {10, 20, 30, 40, 50};</p>
            <p>cout << sizeof(myNumbers);</p>
            <h3>Output:</h3>
            <p>20</p>

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