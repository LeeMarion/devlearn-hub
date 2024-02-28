<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Kotlin For Loops</title>
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
        <h2>Kotlin For Loop</h2>
        <p>There is no traditional for loop in Kotlin unlike Java and other languages. In Kotlin, for loop is used to iterate through ranges, arrays, maps and so on (anything that provides an iterator).</p> 
        <p>To loop through array elements, use the for loop together with the in operator:</p>   
            <h3>Example:</h3>
            <p>Output all elements in the cars array:</p>
            <p>val cars = arrayOf("Volvo", "BMW", "Ford", "Mazda")</p>
            <p>for (x in cars) {</p>
            <p>  println(x)</p>
            <p>}</p>
            <h3>Output:</h3>
            <p>Volvo</p>
            <p>BMW</p>
            <p>Ford</p>
            <p>Mazda</p>
            <p>You can loop through all kinds of arrays. In the example above, we used an array of strings.</p>
            <p>In the example below, we loop through an array of integers:</p>
            <h3>Example:</h3>
            <p>val nums = arrayOf(1, 5, 10, 15, 20)</p>
            <p>for (x in nums) {</p>
            <p>  println(x)</p>
            <p>}</p>
            <h3>Output:</h3>
            <p>1</p>
            <p>5</p>
            <p>10</p>
            <p>15</p>
            <p>20</p>


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