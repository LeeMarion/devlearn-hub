<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kotlin</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
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
        <h2>What is Kotlin?</h2>
        <p>Kotlin is a modern, trending programming language that was released in 2016 by JetBrains. It has become very popular since it is compatible with Java (one of the most popular programming languages out there), which means that Java code (and libraries) can be used in Kotlin programs.</p>
        <h3>Kotlin is used for:</h3>
            <li>Mobile applications (specially Android apps)</li>
            <li>Web development</li>
            <li>Server side applications</li>
            <li>Data science</li>
            <li>And much, much more!</li>
        <h2>Why Use Kotlin?</h2>
            <li>Kotlin is fully compatible with Java</li>  
            <li>Kotlin works on different platforms (Windows, Mac, Linux, Raspberry Pi, etc.)</li>  
            <li>Kotlin is concise and safe</li>  
            <li>Kotlin is easy to learn, especially if you already know Java</li>  
            <li>Kotlin is free to use</li>  
            <li>Big community/support</li>  
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