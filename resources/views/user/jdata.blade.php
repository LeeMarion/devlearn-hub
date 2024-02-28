<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Java Data Types</title>
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
        <h2>Java Data Types</h2>
        <p>Java is a statically-typed programming language. It means, all variables must be declared before its use. That is why we need to declare variable's type and name.</p>
        <h3>Example:</h3>
            <li>int myNum = 5;  // Integer (whole number)</li>
            <li>float myFloatNum = 5.99f;  // Floating point number</li>
            <li>char myLetter = 'D';         // Character</li>
            <li>boolean myBool = true;       // Boolean</li>
            <li>String myText = "Hello";     // String</li>
            <p>Data types are divided into two groups:</p>
            <li>Primitive data types - includes byte, short, int, long, float, double, boolean and char</li>
            <li>Non-primitive data types - such as String, Arrays and Classes (you will learn more about these in a later chapter)</li>

        <h2>Primitive Data Types</h2>
            <p>A primitive data type specifies the size and type of variable values, and it has no additional methods.</p>
            <p>There are eight primitive data types in Java:</p>
            <table>
                <thead>
                  <tr>
                    <th></th>
                    <th>Data Type</th>
                    <th>Size</th>
                    <th>Description</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>byte</td>
                    <td>1 byte</td>
                    <td>Stores whole numbers from -128 to 127</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>short</td>
                    <td>2 bytes</td>
                    <td>Stores whole numbers from -32,768 to 32,767</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>int</td>
                    <td>4 bytes</td>
                    <td>Stores whole numbers from -2,147,483,648 to 2,147,483,647</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>long</td>
                    <td>8 bytes</td>
                    <td>Stores whole numbers from -9,223,372,036,854,775,808 to 9,223,372,036,854,775,807</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>float</td>
                    <td>4 bytes</td>
                    <td>Stores fractional numbers. Sufficient for storing 6 to 7 decimal digits</td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td>double</td>
                    <td>8 bytes</td>
                    <td>Stores fractional numbers. Sufficient for storing 15 decimal digits</td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td>boolean</td>
                    <td>1 bit</td>
                    <td>Stores true or false values</td>
                  </tr>
                  <tr>
                    <td>8</td>
                    <td>char</td>
                    <td>2 bytes</td>
                    <td>Stores a single character/letter or ASCII values</td>
                  </tr>
                </tbody>
              </table>


              <h2>Non-Primitive Data Types</h2>
              <p>Non-primitive data types are called reference types because they refer to objects.</p>
              <p>The main difference between primitive and non-primitive data types are:</p>
              <li>Primitive types are predefined (already defined) in Java. Non-primitive types are created by the programmer and is not defined by Java (except for String).</li>
              <li>Non-primitive types can be used to call methods to perform certain operations, while primitive types cannot.</li>
              <li>A primitive type has always a value, while non-primitive types can be null.</li>
              <li>A primitive type starts with a lowercase letter, while non-primitive types starts with an uppercase letter.</li>
              <p>Examples of non-primitive types are Strings, Arrays, Classes, Interface, etc. You will learn more about these in a later chapter.</p>
              
              <h2>Boolean Types</h2>
                <p>Very often in programming, you will need a data type that can only have one of two values, like:</p>
            <li>YES / NO</li>
            <li>ON / OFF</li>
            <li>TRUE / FALSE</li>
            <p>For this, Java has a boolean data type, which can only take the values true or false:</p>
            <h3>Example:</h3>
            <p>boolean isJavaFun = true;</p>
            <p>boolean isFishTasty = false;</p>
            <p>System.out.println(isJavaFun);     // Outputs true</p>
            <p>System.out.println(isFishTasty);   // Outputs false</p>
            <h3>Output:</h3>
            <p>true</p>
            <p>false</p>
            <p>Boolean values are mostly used for conditional testing.</p>

            <h2>Characters</h2>
            <p>The char data type is used to store a single character. The character must be surrounded by single quotes, like 'A' or 'c':</p>
            <h3>Example:</h3>
            <p>char myGrade = 'B';</p>
            <p>System.out.println(myGrade);</p>
            <h3>Output:</h3>
            <p>B</p>
            <p>Alternatively, if you are familiar with ASCII values, you can use those to display certain characters:</p>
            <h3>Example:</h3>
            <p>char myVar1 = 65, myVar2 = 66, myVar3 = 67;</p>
            <p>System.out.println(myVar1);</p>
            <p>System.out.println(myVar2);</p>
            <p>System.out.println(myVar3);</p>
            <h3>Output:</h3>
            <p>A</p>
            <p>B</p>
            <p>C</p>

            <h2>Strings</h2>
            <p>The String data type is used to store a sequence of characters (text). String values must be surrounded by double quotes:</p>
            <h3>Example:</h3>
            <p>String greeting = "Hello World";</p>
            <p>System.out.println(greeting);</p>
            <h3>Output:</h3>
            <p>Hello World</p>
            <p>Alternatively, if you are familiar with ASCII values, you can use those to display certain characters:</p>
            <h3>Example:</h3>
            <p>char myVar1 = 65, myVar2 = 66, myVar3 = 67;</p>
            <p>System.out.println(myVar1);</p>
            <p>System.out.println(myVar2);</p>
            <p>System.out.println(myVar3);</p>
            <h3>Output:</h3>
            <p>A</p>
            <p>B</p>
            <p>C</p>

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