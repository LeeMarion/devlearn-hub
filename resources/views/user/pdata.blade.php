<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>PHP Data Types</title>
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
        <h2>PHP Data Types</h2>
        <p>Variables can store data of different types, and different data types can do different things.</p>
        <h3>PHP supports the following data types::</h3>
            <li>String</li>
            <li>Integer</li>
            <li>Float (floating point numbers - also called double)</li>
            <li>Boolean</li>
            <li>Array</li>
            <li>Object</li>
            <li>NULL</li>
            <li>Resource</li>

        <h2>Getting the Data Type</h2>
            <p>You can get the data type of any object by using the var_dump() function.</p>
            <h3>Example</h3>
            <p>The var_dump() function returns the data type and the value:</p>
            <p>$x = 5;</p>
            <p>var_dump($x);</p>
            <h3>Output:</h3>
            <p>int(5)</p>

              <h2>PHP String</h2>
              <p>A string is a sequence of characters, like "Hello world!".</p>
              <p>A string can be any text inside quotes. You can use single or double quotes:</p>
              <li>Primitive types are predefined (already defined) in Java. Non-primitive types are created by the programmer and is not defined by Java (except for String).</li>
              <h3>Example:</h3>
              <p>$x = "Hello world!";</p>
              <p>$y = 'Hello world!';</p>
              <p>var_dump($x);</p>
              <p>echo "<br>";</p>
              <p>var_dump($y);</p>
              <h3>Output:</h3>
              <p>string(12) "Hello world!"</p>
              <p>string(12) "Hello world!"</p>
              
              <h2>PHP Integer</h2>
                <p>An integer data type is a non-decimal number between -2,147,483,648 and 2,147,483,647.</p>
                <p>Rules for integers:</p>
                <li>An integer must have at least one digit</li>
                <li>An integer must not have a decimal point</li>
                <li>An integer can be either positive or negative</li>
                <li>Integers can be specified in: decimal (base 10), hexadecimal (base 16), octal (base 8), or binary (base 2) notation</li>
                <p>In the following example $x is an integer. The PHP var_dump() function returns the data type and value:</p>
            <h3>Example:</h3>
            <p>$x = 5985;</p>
            <p>var_dump($x);</p>
            <h3>Output:</h3>
            <p>int(5985)</p>

            <h2>PHP Float</h2>
            <p>A float (floating point number) is a number with a decimal point or a number in exponential form.</p>
            <p>In the following example $x is a float. The PHP var_dump() function returns the data type and value:</p>
            <h3>Example:</h3>
            <p>$x = 10.365;</p>
            <p>var_dump($x);</p>
            <h3>Output:</h3>
            <p>float(10.365)</p>

            <h2>PHP Boolean</h2>
            <p>A Boolean represents two possible states: TRUE or FALSE.</p>
            <p>In the following example $x is a float. The PHP var_dump() function returns the data type and value:</p>
            <h3>Example:</h3>
            <p>$x = true;</p>
            <p>var_dump($x);</p>
            <h3>Output:</h3>
            <p>bool(true)</p>
            

            <h2>PHP Array</h2>
            <p>An array stores multiple values in one single variable.</p>
            <p>In the following example $cars is an array. The PHP var_dump() function returns the data type and value:</p>
            <h3>Example:</h3>
            <p>$cars = array("Volvo","BMW","Toyota");</p>
            <p>var_dump($cars);</p>
            <h3>Output:</h3>
            <p>array(3) {</p>
            <p>  [0]=></p>
            <p>  string(5) "Volvo"</p>
            <p>  [1]=></p>
            <p>  string(3) "BMW"</p>
            <p>  [2]=></p>
            <p>  string(6) "Toyota"</p>
            <p>}</p>
            
            <h2>PHP Object</h2>
            <p>Classes and objects are the two main aspects of object-oriented programming. A class is a template for objects, and an object is an instance of a class.</p>
            <p>In the following example $x is a float. The PHP var_dump() function returns the data type and value:</p>
            <h3>Example:</h3>
            <p>class Car {</p>
            <p>  public $color;</p>
            <p>  public $model;</p>
            <p>  public function __construct($color, $model) {</p>
            <p>    $this->color = $color;</p>
            <p>    $this->model = $model;</p>
            <p>  }</p>
            <p>  public function message() {</p>
            <p>    return "My car is a " . $this->color . " " . $this->model . "!";</p>
            <p>  }</p>
            <p>}</p>
            <p>$myCar = new Car("red", "Volvo");</p>
            <p>var_dump($myCar);</p>
            <h3>Output:</h3>
            <p>object(Car)#1 (2) { ["color"]=> string(3) "red" ["model"]=> string(5) "Volvo" }</p>

            <h2>PHP NULL Value</h2>
            <p>Null is a special data type which can have only one value: NULL.</p>
            <p>A variable of data type NULL is a variable that has no value assigned to it.</p>
            <h3>Example:</h3>
            <p>$x = "Hello world!";</p>
            <p>$x = null;</p>
            <p>var_dump($x);</p>
            <h3>Output:</h3>
            <p>NULL</p>

            <h2>PHP Resource</h2>
            <p>The special resource type is not an actual data type. It is the storing of a reference to functions and resources external to PHP.</p>
            <p>A common example of using the resource data type is a database call.</p>
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