<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Kotlin Syntax</title>
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
        <h2>Kotlin Syntax</h2>
        <p>Knowing the basic Kotlin syntax is the first step towards Kotlin programming. The Kotlin syntax does not call for the semicolon(;) to be a compulsion for ending a statement as in Java C++, C#, etc.  A Kotlin statement works the same way without a semicolon as it does with a semicolon. </p>
        <h3>Example</h3>
        <p>fun main() {</p>
        <p>  println("Hello World")</p>
        <p>}</p>
        <h3>Output:</h3>
        <p>Hello World</p>
            
                   
            <h3>Example explained</h3>
            <p>The fun keyword is used to declare a function. A function is a block of code designed to perform a particular task. In the example above, it declares the main() function.</p>
            <p>The main() function is something you will see in every Kotlin program. This function is used to execute code. Any code inside the main() function's curly brackets {} will be executed.</p>
            <p>For example, the println() function is inside the main() function, meaning that this will be executed. The println() function is used to output/print text, and in our example it will output "Hello World". </p>
            
            <h2>Main Parameters</h2>
            <p>Before Kotlin version 1.3, it was required to use the main() function with parameters, like: fun main(args : Array<String>). The example above had to be written like this to work:</p>
            <h3>Example</h3>
            <p>fun main(args : Array<String>) {</p>
            <p>  println("Hello World")</p>
            <p>}</p>
            <h3>Output:</h3>
            <p>Hello World</p>
            <p>Note: This is no longer required, and the program will run fine without it. However, it will not do any harm if you have been using it in the past, and will continue to use it.</p>
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