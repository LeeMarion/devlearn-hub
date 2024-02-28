<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>C Introduction</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="icon" href="assets/images/lg.png">
</head>
<body>
    <div class="sidenav">
        <a href="coursemod"><h2>C</h2></a>
        <a href="cpintro">C Introduction</a>
        <a href="cpdata">C Data Types</a>
        <a href="cplist">C Arrays</a>
        <a href="cpvariables">C Variables</a>
        <a href="cpsyntax">C Syntax</a>
        <a href="cpoperators">C Operators</a>
        <a href="cpcondition">C Condition</a>
        <a href="cpwhile">C While Loops</a>
        <a href="cpfor">C For Loops</a> 
    </div>

    <div class="main">
        <h2>What is C?</h2>
        <li>C is a general-purpose programming language created by Dennis Ritchie at the Bell Laboratories in 1972.</li>
        <li>It is a very popular language, despite being old. The main reason for its popularity is because it is a fundamental language in the field of computer science.</li>
        <li>C is strongly associated with UNIX, as it was developed to write the UNIX operating system. It is a general-purpose computer programming language for system administration, network programming, and embedded software.</li>
    
        <h2>Why Learn C?</h2>
        <li>It is one of the most popular programming languages in the world</li>
        <li>If you know C, you will have no problem learning other popular programming languages such as Java, Python, C++, C#, etc, as the syntax is similar</li>
        <li>C is very fast, compared to other programming languages, like Java and Python</li>
        <li>C is very versatile; it can be used in both applications and technologies</li>

        <h2>Difference between C and C++</h2>
        <li>C++ was developed as an extension of C, and both languages have almost the same syntax</li>
        <li>The main difference between C and C++ is that C++ support classes and objects, while C does not</li>
        
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