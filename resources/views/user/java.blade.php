<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Java</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
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
        <h2>What is Java?</h2>
        <p>Java is a popular programming language, created in 1995. It is owned by Oracle, and more than 3 billion devices run Java. Java is a widely-used programming language for coding web applications. Java is a multi-platform, object-oriented, and network-centric language that can be used as a platform in itself.</p>
        <h3>It is used for:</h3>
            <li>Mobile applications (specially Android apps)</li>
            <li>Desktop applications</li>
            <li>Web applications</li>
            <li>Web servers and application servers</li>
            <li>Games</li>
            <li>Database connection</li>
            <li>And much, much more!</li>
        <h2>Why Use Java?</h2>
            <li>Java works on different platforms (Windows, Mac, Linux, Raspberry Pi, etc.)</li>
            <li>It is one of the most popular programming languages in the world</li>
            <li>It has a large demand in the current job market</li>
            <li>It is easy to learn and simple to use</li>
            <li>It is open-source and free</li>
            <li>It is secure, fast and powerful</li>
            <li>It has huge community support (tens of millions of developers)</li>
            <li>Java is an object oriented language which gives a clear structure to programs and allows code to be reused, lowering development costs</li>
            <li>As Java is close to C++ and C#, it makes it easy for programmers to switch to Java or vice versa</li>    
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