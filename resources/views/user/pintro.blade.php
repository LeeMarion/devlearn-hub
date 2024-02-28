<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Introduction</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="icon" href="assets/images/lg.png">
</head>
<body>
    <div class="sidenav">
        <a href="coursemod"><h2>PHP</h2></a>
        <a href="pintro">PHP Introduction</a>
        <a href="pdata">PHP Data Types</a>
        <a href="plist">PHP Arrays</a>
        <a href="pvariables">PHP Variables</a>
        <a href="psyntax">PHP Syntax</a>
        <a href="poperators">PHP Operators</a>
        <a href="pcondition">PHP Condition</a>
        <a href="pwhile">PHP While Loops</a>
        <a href="pfor">PHP For Loops</a>
    </div>

    <div class="main">
        <h2>What is PHP?</h2>
        <p>PHP is a server scripting language, and a powerful tool for making dynamic and interactive Web pages. PHP is a widely-used, free, and efficient alternative to competitors such as Microsoft's ASP.</p>
        <li>PHP is an acronym for "PHP: Hypertext Preprocessor"</li>
        <li>PHP is a widely-used, open source scripting language</li>
        <li>PHP scripts are executed on the server</li>
        <li>PHP is free to download and use</li>
        <h3>PHP is an amazing and popular language!</h3>
         <p>It is powerful enough to be at the core of the biggest blogging system on the web (WordPress)!</p>
         <p>It is deep enough to run large social networks!</p>
         <p>It is also easy enough to be a beginner's first server side language!</p>

        <h2>What is a PHP File?</h2>
            <li>PHP files can contain text, HTML, CSS, JavaScript, and PHP code</li>   
            <li>PHP code is executed on the server, and the result is returned to the browser as plain HTML</li>
            <li>PHP files have extension ".php"</li>

        <h2>What Can PHP Do?</h2>
        <li>PHP can generate dynamic page content</li>
        <li>PHP can create, open, read, write, delete, and close files on the server</li>
        <li>PHP can collect form data</li>
        <li>PHP can send and receive cookies</li>
        <li>PHP can add, delete, modify data in your database</li>
        <li>PHP can be used to control user-access</li>
        <li>PHP can encrypt data</li>
        <p>With PHP you are not limited to output HTML. You can output images or PDF files. You can also output any text, such as XHTML and XML.</p>
        
        <h2>Why PHP?</h2>
        <li>PHP runs on various platforms (Windows, Linux, Unix, Mac OS X, etc.)</li>
        <li>PHP is compatible with almost all servers used today (Apache, IIS, etc.)</li>
        <li>PHP supports a wide range of databases</li> 
        <li>PHP is free. Download it from the official PHP resource: www.php.net</li>
        <li>PHP is easy to learn and runs efficiently on the server side</li>

   
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