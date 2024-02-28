<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JavaScript</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
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
        <h2>What is JavaScript?</h2>
        <p>JavaScript , often abbreviated as JS, is a programming language and core technology of the World Wide Web, alongside HTML and CSS. It has dynamic typing, prototype-based object-orientation, and first-class functions. It is multi-paradigm, supporting event-driven, functional, and imperative programming styles.</p>
        <h3>It is used for:</h3>
            <li>Web Development</li>
            <li>Web Applications</li>
            <li>Presentations</li>
            <li>Web servers and application servers</li>
            <li>Games</li>
            <li>Mobile Apps</li>
            <li>And much, much more!</li>
        <h2>Why Use JavaScript?</h2>
            <li>Client-side execution of the logic brings faster user experiences. With the code running directly in the browser, the need for server calls is abstracted, hence a cut in loading times. </li>
            <li>JavaScript has brought user interface interactivity to the web. It now does the same for applications of all kind, helping to develop the most engaging UX.</li>
            <li>JavaScript is behind any good responsive web design. More and more, developers need to adapt their design across multiple browsers and devices.</li>
            <li>For developers, JS is easy to learn and fast to get into active development. Its syntax is easy and flexible for newcomers. It also simplifies the development of complex applications by enabling developers to simplify the app’s composition. </li>    
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