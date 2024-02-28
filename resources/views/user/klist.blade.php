<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Kotlin Arrays</title>
    <link rel="icon" href="assets/images/lg.png">
</head>
<body>
    <div class="sidenav">
        <a href="coursemod"><h2>Kotlin</h2></a>
        <a href="kintro">Kotlin Introduction</a>
        <a href="kdata">Kotlin Data Types</a>
        <a href="klist">Kotlin Arrays</a>
        <a href="kvariables">Kotlin Variables</a>
        <a href="ksyntax">Kotlin Syntax</a>
        <a href="koperators">Kotlin Operators</a>
        <a href="kcondition">Kotlin Condition</a>
        <a href="kwhile">Kotlin While Loops</a>
        <a href="kfor">Kotlin For Loops</a>
    </div>

    <div class="main">
        <h2>Kotlin Arrays</h2>
        <p>Arrays are used to store multiple values in a single variable, instead of creating separate variables for each value. It is a data structure that holds a fixed number of values of the same type or its subtypes. </p>
        <p>To create an array, use the arrayOf() function, and place the values in a comma-separated list inside it:</p>
        <p>val cars = arrayOf("Volvo", "BMW", "Ford", "Mazda")</p>
        
        <h2>Access the Elements of an Array</h2>
            <p>You can access an array element by referring to the index number, inside square brackets.</p>
            <p>In this example, we access the value of the first element in cars:</p>
            <h3>Example:</h3>
            <p>val cars = arrayOf("Volvo", "BMW", "Ford", "Mazda")</p>
            <p>println(cars[0])</p>
            <h3>Output:</h3>
            <p>Volvo</p>
            <p>Note: Just like with Strings, Array indexes start with 0: [0] is the first element. [1] is the second element, etc.</p>

         <h2>Change an Array Element</h2>
            <p>To change the value of a specific element, refer to the index number:    </p>
            <h3>Example:</h3>
            <p>cars[0] = "Opel";</p>
            <h3>Example:</h3>
            <p>val cars = arrayOf("Volvo", "BMW", "Ford", "Mazda")</p>
            <p>cars[0] = "Opel"</p>
            <p>println(cars[0])</p>
            <h3>Output:</h3>
            <p>Opel</p>

         <h2>Array Length</h2>
            <p>To find out how many elements an array have, use the size property:</p>
            <h3>Example:</h3>
            <p>val cars = arrayOf("Volvo", "BMW", "Ford", "Mazda")</p>
            <p>println(cars.size)</p>
            <h3>Output:</h3>
            <p>4</p>

            <h2>Check if an Element Exists</h2>
            <p>You can use the in operator to check if an element exists in an array:</p>
            <h3>Example:</h3>
            <p>val cars = arrayOf("Volvo", "BMW", "Ford", "Mazda")</p>
            <p>if ("Volvo" in cars) {</p>
            <p>  println("It exists!")</p>
            <p>} else {</p>
            <p>  println("It does not exist.")</p>
            <p>}</p>
            <h3>Output:</h3>
            <p>It exists!</p>

            <h2>Loop Through an Array</h2>
            <p>Often when you work with arrays, you need to loop through all of the elements.</p>
            <p>You can loop through the array elements with the for loop, which you will learn even more about in the next chapter.</p>
            <p>The following example outputs all elements in the cars array:</p>
            <h3>Example:</h3>
            <p>val cars = arrayOf("Volvo", "BMW", "Ford", "Mazda")</p>
            <p>for (x in cars) {</p>
            <p>  println(x)</p>
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