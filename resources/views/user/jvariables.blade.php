<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Java Variables</title>
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
        <h2>Java Variables</h2>
        <p>Variables are containers for storing data values.</p>
        <p>In Java, there are different types of variables, for example:</p>
        <li>String - stores text, such as "Hello". String values are surrounded by double quotes</li>
        <li>int - stores integers (whole numbers), without decimals, such as 123 or -123</li>
        <li>float - stores floating point numbers, with decimals, such as 19.99 or -19.99</li>
        <li>char - stores single characters, such as 'a' or 'B'. Char values are surrounded by single quotes</li>
        <li>boolean - stores values with two states: true or false</li>

        <h2>Declaring (Creating) Variables</h2>
            <p>To create a variable, you must specify the type and assign it a value:</p>
            <h3>Syntax</h3>
            <p>type variableName = value;</p>
            <p>Where type is one of Java's types (such as int or String), and variableName is the name of the variable (such as x or name). The equal sign is used to assign values to the variable.</p>
            <p>To create a variable that should store text, look at the following example:</p>
            <h3>Example:</h3>
            <p>Create a variable called name of type String and assign it the value "John":</p>
            <p>String name = "John";</p>
            <p>System.out.println(name);</p>
            <h3>Output:</h3>
            <p>John</p>

            <p>To create a variable that should store a number, look at the following example:</p>
            <h3>Example:</h3>
            <p>Create a variable called myNum of type int and assign it the value 15:</p>
            <p>int myNum = 15;</p>
            <p>System.out.println(myNum);</p>
            <h3>Output:</h3>
            <p>15</p>

            <p>You can also declare a variable without assigning the value, and assign the value later:</p>
            <h3>Example:</h3>
            <p>int myNum;</p>
            <p>myNum = 15;</p>
            <p>System.out.println(myNum);</p>
            <h3>Output:</h3>
            <p>15</p>

            <p>Note: that if you assign a new value to an existing variable, it will overwrite the previous value:</p>
            <h3>Example:</h3>
            <p>Change the value of myNum from 15 to 20:</p>
            <p>int myNum = 15;</p>
            <p>myNum = 20;  // myNum is now 20</p>
            <p>System.out.println(myNum);</p>
            <h3>Output:</h3>
            <p>20</p>

            <h2>Declare Many Variables</h2>
            <p>To declare more than one variable of the same type, you can use a comma-separated list:</p>
            <h3>Example:</h3>
            <p>Instead of writing:</p>
            <p>int x = 5;</p>
            <p>int y = 6;</p>
            <p>int z = 50;</p>
            <p>System.out.println(x + y + z);</p>
            <p>You can simply write:</p>
            <p>int x = 5, y = 6, z = 50;</p>
            <p>System.out.println(x + y + z);</p>
            <h3>Output:</h3>
            <p>61</p>

            <h2>One Value to Multiple Variables</h2>
            <p>You can also assign the same value to multiple variables in one line:</p>
            <h3>Example:</h3>
            <p>int x, y, z;</p>
            <p>x = y = z = 50;</p>
            <p>System.out.println(x + y + z);</p>
            <h3>Output:</h3>
            <p>150</p>


        <h2>Other Types</h2>
            <p>A demonstration of how to declare variables of other types:</p>
            <h3>Example:</h3>
            <p>int myNum = 5;</p>
            <p>float myFloatNum = 5.99f;</p>
            <p>char myLetter = 'D';</p>
            <p>boolean myBool = true;</p>
            <p>String myText = "Hello";</p>
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