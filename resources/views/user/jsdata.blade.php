<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>JavaScript Data Types</title>
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
        <h2>JavaScript Data Types</h2>
        <h3>JavaScript has 8 Datatypes:</h3>
            <p>1. String</p>
            <p>2. Number</p>
            <p>3. Bigint</p>
            <p>4. Boolean</p>
            <p>5. Undefined</p>
            <p>6. Null</p>
            <p>7. Symbol</p>
            <p>8. Object</p>
            <h3>The Object Datatype</h3>
            <p>The object data type can contain:</p>
            <p>1. An object</p>
            <p>2. An array</p>
            <p>3. A date</p>
            <h3>Example:</h3>
            <p>// Numbers:</p>
            <p>let length = 16;</p>
            <p>let weight = 7.5;</p>
            <p>// Strings:</p>
            <p>let color = "Yellow";</p>
            <p>let lastName = "Johnson";</p>
            <p>// Booleans</p>
            <p>let x = true;</p>
            <p>let y = false;</p>
            <p>// Object:</p>
            <p>const person = {firstName:"John", lastName:"Doe"};</p>
            <p>// Array object:</p>
            <p>const cars = ["Saab", "Volvo", "BMW"];</p>
            <p>// Date object:</p>
            <p>const date = new Date("2022-03-25");</p>
            <p>Note: A JavaScript variable can hold any type of data.</p>

        <h2>The Concept of Data Types</h2>
            <p>In programming, data types is an important concept. To be able to operate on variables, it is important to know something about the type.</p>
            <p>Without data types, a computer cannot safely solve this:</p>
            <p>let x = 16 + "Volvo";</p>
            <p>Does it make any sense to add "Volvo" to sixteen? Will it produce an error or will it produce a result?</p>
            <p>JavaScript will treat the example above as:</p>
            <p>let x = "16" + "Volvo";</p>
            <p>Note: When adding a number and a string, JavaScript will treat the number as a string.</p>
            <h3>Example:</h3>
            <p>let x = 16 + "Volvo";</p>
            <h3>Output:</h3>
            <p>16Volvo</p>
            <h3>Example:</h3>
            <p>let x = "Volvo" + 16;</p>
            <h3>Output:</h3>
            <p>Volvo16</p>
            <p>JavaScript evaluates expressions from left to right. Different sequences can produce different results:</p>
            <h3>Example:</h3>
            <p>let x = 16 + 4 + "Volvo";</p>
            <h3>Output:</h3>
            <p>20Volvo</p>
            <h3>Example:</h3>
            <p>let x = "Volvo" + 16 + 4;</p>
            <h3>Output:</h3>
            <p>Volvo164</p>
            <p>In the first example, JavaScript treats 16 and 4 as numbers, until it reaches "Volvo".</p>
            <p>In the second example, since the first operand is a string, all operands are treated as strings.</p>


              <h2>JavaScript Types are Dynamic</h2>
              <p>JavaScript has dynamic types. This means that the same variable can be used to hold different data types:</p>
            <h3>Example:</h3>
            <p>let x;       // Now x is undefined</p>
            <p>x = 5;       // Now x is a Number</p>
            <p>x = "John";  // Now x is a String</p>
            <h3>Output:</h3>
            <p>John</p>

            <h2>JavaScript Strings</h2>
            <p>A string (or a text string) is a series of characters like "John Doe".</p>
            <p>Strings are written with quotes. You can use single or double quotes:</p>
            <h3>Example:</h3>
            <p>// Using double quotes:</p>
            <p>let carName1 = "Volvo XC60";</p>
            <p>// Using single quotes:</p>
            <p>let carName2 = 'Volvo XC60';</p>
            <h3>Output:</h3>
            <p>Volvo XC60</p>
            <p>Volvo XC60</p>

            <h2>JavaScript Numbers</h2>
            <p>All JavaScript numbers are stored as decimal numbers (floating point).</p>
            <p>Numbers can be written with, or without decimals:</p>
            <h3>Example:</h3>
            <p>// With decimals:</p>
            <p>let x1 = 34.00;</p>
            <p>// Without decimals:</p>
            <p>let x2 = 34;</p>
            <h3>Output:</h3>
            <p>34.00</p>
            <p>34</p>

            <h2>JavaScript BigInt</h2>
            <p>All JavaScript numbers are stored in a a 64-bit floating-point format. JavaScript BigInt is a new datatype (ES2020) that can be used to store integer values that are too big to be represented by a normal JavaScript Number.</p>
            <h3>Example:</h3>
            <p>let x = BigInt("123456789012345678901234567890");</p>
            <h3>Output:</h3>
            <p>123456789012345678901234567890</p>

            <h2>JavaScript Booleans</h2>
            <p>Booleans can only have two values: true or false.</p>
            <h3>Example:</h3>
            <p>let x = 5;</p>
            <p>let y = 5;</p>
            <p>let z = 6;</p>
            <p>(x == y)       // Returns true</p>
            <p>(x == z)       // Returns false</p>
            <h3>Output:</h3>
            <p>true</p>
            <p>false</p>

            <h2>JavaScript Arrays</h2>
            <p>JavaScript arrays are written with square brackets. Array items are separated by commas.</p>
            <p>The following code declares (creates) an array called cars, containing three items (car names):</p>
            <h3>Example:</h3>
            <p>const cars = ["Saab", "Volvo", "BMW"];</p>
            <h3>Output:</h3>
            <p>Saab,Volvo,BMW</p>
            <p>Array indexes are zero-based, which means the first item is [0], second is [1], and so on.</p>

            <h2>JavaScript Objects</h2>
            <p>JavaScript objects are written with curly braces {}. Object properties are written as name:value pairs, separated by commas.</p>
            <h3>Example:</h3>
            <p>const person = {firstName:"John", lastName:"Doe", age:50, eyeColor:"blue"};</p>
            <p>person.firstName + " is " + person.age + " years old.";</p>
            <h3>Output:</h3>
            <p>John is 50 years old.</p>
            <p>The object (person) in the example above has 4 properties: firstName, lastName, age, and eyeColor.</p>

            <h2>JavaScript Undefined</h2>
            <p>In JavaScript, a variable without a value, has the value undefined. The type is also undefined.</p>
            <h3>Example:</h3>
            <p>let car;    // Value is undefined, type is undefined</p>
            <h3>Output:</h3>
            <p>Undefined</p>
            <p>Any variable can be emptied, by setting the value to undefined. The type will also be undefined.</p>

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