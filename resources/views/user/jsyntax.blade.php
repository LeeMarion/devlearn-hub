<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Java Syntax</title>
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
        <h2>Java Syntax</h2>
        <p>The syntax of Java is the set of rules defining how a Java program is written and interpreted. A snippet of Java code with keywords highlighted in bold blue font.</p>
        <h3>Main.java</h3>
            <p>public class Main {</p>
                <p>public static void main(String[] args) {</p>
                    <p>System.out.println("Hello World");</p>
                    <p> }</p>
                    <p>}</p>
            <h3>Example explained</h3>
            <p>Every line of code that runs in Java must be inside a class. In our example, we named the class Main. A class should always start with an uppercase first letter.</p>
            <p>Note: Java is case-sensitive: "MyClass" and "myclass" has different meaning.</p>
            <p>The name of the java file must match the class name. When saving the file, save it using the class name and add ".java" to the end of the filename. </p>
            
            <h2>The main Method</h2>
            <p>The main() method is required and you will see it in every Java program:</p>
            <p>public static void main(String[] args)</p>
            <p>Any code inside the main() method will be executed. Don't worry about the keywords before and after main.</p>
            <h3>System.out.println()</h3>
            <p>Inside the main() method, we can use the println() method to print a line of text to the screen:</p>
            <p>public static void main(String[] args) {</p>
                <p>System.out.println("Hello World");</p>
                <p>}</p>
            <h3>Output:</h3>
            <p>Hello World</p>
            <p>Note: The curly braces {} marks the beginning and the end of a block of code.</p>
            <p>System is a built-in Java class that contains useful members, such as out, which is short for "output". The println() method, short for "print line", is used to print a value to the screen (or a file).</p>
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