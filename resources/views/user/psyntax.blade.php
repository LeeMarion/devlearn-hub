<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>PHP Syntax</title>
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
        <h2>PHP Syntax</h2>
        <p>A PHP script is executed on the server, and the plain HTML result is sent back to the browser.</p>
        <h3>Basic PHP Syntax</h3>
            <p>A PHP script can be placed anywhere in the document.</p>
                <p>A PHP script starts with < ?php and ends with ?>:</p>
                    <p>< ?php</p>
                    <p> // PHP code goes here </p>
                    <p>?></p>
                    <p>The default file extension for PHP files is ".php".</p>
                    <p>A PHP file normally contains HTML tags, and some PHP scripting code.</p>
                    <p>Below, we have an example of a simple PHP file, with a PHP script that uses a built-in PHP function "echo" to output the text "Hello World!" on a web page:</p>
                    <h3>Example:</h3>
                    <p>A simple .php file with both HTML code and PHP code:</p>
                    <p>< !DOCTYPE html ></p>
                    <p>< html ></p>
                    <p>< body ></p>
                    <p>< h1 >My first PHP page< /h1 ></p>
                    <p>< ?php</p>
                    <p>echo "Hello World!";</p>
                    <p>?></p>
                    <p>< /body ></p>
                    <p>< /html ></p>
                    <p>Note: PHP statements end with a semicolon (;).</p>

        <h2>PHP Case Sensitivity</h2>
        <p>In PHP, keywords (e.g. if, else, while, echo, etc.), classes, functions, and user-defined functions are not case-sensitive.</p>
        <p>In the example below, all three echo statements below are equal and legal:</p>
        <h3>Example:</h3>
        <p>ECHO is the same as echo:</p>
        <p>< !DOCTYPE html ></p>
        <p>< html ></p>
        <p>< body ></p>
        <p>< ?php</p>
        <p>ECHO "Hello World!< br >";</p>
        <p>echo "Hello World!< br >";</p>
        <p>EcHo "Hello World!< br >";</p>
        <p>?></p>
        <p>< /body ></p>
        <p>< /html ></p>
        <h3>Output:</h3>
        <p>Hello World!</p>
        <p>Hello World!</p>
        <p>Hello World!</p>
        <p>Note: However; all variable names are case-sensitive!</p>
        
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