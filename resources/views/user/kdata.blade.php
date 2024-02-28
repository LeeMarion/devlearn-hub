<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Kotlin Data Types</title>
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
        <h2>Kotlin Data Types</h2>
        <p>In Kotlin, everything is an object in the sense that you can call member functions and properties on any variable. While certain types have an optimized internal representation as primitive values at runtime (such as numbers, characters, booleans and others), they appear and behave like regular classes to you.</p>
        <p>In Kotlin, the type of a variable is decided by its value:</p>
        <h3>Example:</h3>
            <li>val myNum = 5             // Int</li>
            <li>val myDoubleNum = 5.99    // Double</li>
            <li>val myLetter = 'D'        // Char</li>
            <li>val myBoolean = true      // Boolean</li>
            <li>val myText = "Hello"      // String</li>
            <p>Data types are divided into different groups:</p>
            <li>Numbers</li>
            <li>Characters</li>
            <li>Booleans</li>
            <li>Strings</li>
            <li>Arrays</li>

        <h2>Numbers</h2>
            <p>Number types are divided into two groups:</p>
            <p>Integer types store whole numbers, positive or negative (such as 123 or -456), without decimals. Valid types are Byte, Short, Int and Long.</p>
            <p>Floating point types represent numbers with a fractional part, containing one or more decimals. There are two types: Float and Double.</p>
            <h3><center>Integer Types</center></h3>
            <h3>Byte</h3>
            <p>The Byte data type can store whole numbers from -128 to 127. This can be used instead of Int or other integer types to save memory when you are certain that the value will be within -128 and 127:</p>
            <h3>Example:</h3>
            <p>val myNum: Byte = 100</p>
            <p>println(myNum)</p>
            <h3>Output:</h3>
            <p>100</p>
            <h3>Short</h3>
            <p>The Short data type can store whole numbers from -32768 to 32767:</p>
            <h3>Example:</h3>
            <p>val myNum: Short = 5000</p>
            <p>println(myNum)</p>
            <h3>Output:</h3>
            <p>5000</p>
            <h3>Int</h3>
            <p>The Int data type can store whole numbers from -2147483648 to 2147483647:</p>
            <h3>Example:</h3>
            <p>val myNum: Short = 100000</p>
            <p>println(myNum)</p>
            <h3>Output:</h3>
            <p>100000</p>
            <h3>Long</h3>
            <p>The Long data type can store whole numbers from -9223372036854775807 to 9223372036854775807. This is used when Int is not large enough to store the value. Optionally, you can end the value with an "L":</p>
            <h3>Example:</h3>
            <p>val myNum: Long = 15000000000L</p>
            <p>println(myNum)</p>
            <h3>Output:</h3>
            <p>15000000000</p>
            <h3><center>Floating Point Types</center></h3>
            <p>Floating point types represent numbers with a decimal, such as 9.99 or 3.14515.</p>
            <p>The Float and Double data types can store fractional numbers:</p>
            <h3>Float Example:</h3>
            <p>val myNum: Float = 5.75F</p>
            <p>println(myNum)</p>
            <h3>Output:</h3>
            <p>5.75</p>
            <h3>Double Example:</h3>
            <p>val myNum: Double = 19.99</p>
            <p>println(myNum)</p>
            <h3>Output:</h3>
            <p>19.99</p>

              <h2>Booleans</h2>
              <p>The Boolean data type and can only take the values true or false:</p>
              <h3>Example:</h3>
              <p>val isKotlinFun: Boolean = true</p>
              <p>val isFishTasty: Boolean = false</p>
              <p>println(isKotlinFun)</p>
              <p>println(isFishTasty) </p>
              <h3>Output:</h3>
              <p>true</p>
              <p>false</p>

              <h2>Characters</h2>
              <p>The Char data type is used to store a single character. A char value must be surrounded by single quotes, like 'A' or 'c':</p>
              <h3>Example:</h3>
              <p>val myGrade: Char = 'B'</p>
              <p>println(myGrade)</p>
              <h3>Output:</h3>
              <p>B</p>

              <h2>Strings</h2>
              <p>The String data type is used to store a sequence of characters (text). String values must be surrounded by double quotes:</p>
              <h3>Example:</h3>
              <p>val myText: String = "Hello World"</p>
              <p>println(myText)</p>
              <h3>Output:</h3>
              <p>Hello World</p>
              

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