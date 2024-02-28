<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Python</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="icon" href="assets/images/lg.png">
</head>
<body>
    <div class="sidenav">
        <a href="/"><h2>Python</h2></a>
        <a href="intro">Python Introduction</a>
        <a href="data">Python Data Types</a>
        <a href="list">Python List</a>
        <a href="variables">Python Variables</a>
        <a href="syntax">Python Syntax</a>
        <a href="operators">Python Operators</a>
        <a href="condition">Python Condition</a>
        <a href="while">Python While Loops</a>
        <a href="for">Python For Loops</a>
    </div>

    <div class="main">
        <h2>What is Python?</h2>
        <p>Python is a popular programming language. It was created by Guido van Rossum, and released in 1991.</p>
        <h3>It is used for:</h3>
            <li>web development (server-side),</li>
            <li>software development,</li>
            <li>mathematics,</li>
            <li>system scripting.</li>
        <h2>What can Python do?</h2>
            <li>Python can be used on a server to create web applications.</li>
            <li>Python can be used alongside software to create workflows.</li>
            <li>Python can connect to database systems. It can also read and modify files.</li>
            <li>Python can be used to handle big data and perform complex mathematics.</li>
            <li>Python can be used for rapid prototyping, or for production-ready software development.</li>
        <h2>Why Python?</h2>
            <li>Python works on different platforms (Windows, Mac, Linux, Raspberry Pi, etc).</li>
            <li>Python has a simple syntax similar to the English language.</li>
            <li>Python has syntax that allows developers to write programs with fewer lines than some other programming languages.</li>
            <li>Python runs on an interpreter system, meaning that code can be executed as soon as it is written. This means that prototyping can be very quick.</li>
            <li>Python can be treated in a procedural way, an object-oriented way or a functional way.</li> 
         <h2>Python Syntax compared to other programming languages</h2>
            <li>Python was designed for readability, and has some similarities to the English language with influence from mathematics.</li>
            <li>Python uses new lines to complete a command, as opposed to other programming languages which often use semicolons or parentheses.</li>
            <li>Python relies on indentation, using whitespace, to define scope; such as the scope of loops, functions and classes. Other programming languages often use curly-brackets for this purpose.</li>    
    </div>
    

    <style>

    body{
        font-family:Arial, Helvetica, sans-serif;
    }
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