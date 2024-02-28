<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CSS</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="icon" href="assets/images/lg.png">
</head>
<body>
    <div class="sidenav">
        <a href="coursemod"><h2>CSS</h2></a>
        <a href="cintro">CSS Introduction</a>
        <a href="csyntax">CSS Syntax</a>
        <a href="chow">CSS How To</a>
        <a href="ccolors">CSS Colors</a>
        <a href="cmargin">CSS Margin</a>
        <a href="cborder">CSS Border</a>
        <a href="cpadding">CSS Padding</a>
        <a href="chw">CSS Height & Width</a>
    </div>

    <div class="main">
        <h2>What is CSS?</h2>
        <li>CSS stands for Cascading Style Sheets</li>
        <li>CSS describes how HTML elements are to be displayed on screen, paper, or in other media</li>
        <li>CSS saves a lot of work. It can control the layout of multiple web pages all at once</li>
        <li>External stylesheets are stored in CSS files</li>
    
        <h2>Why Use CSS?</h2>
        <p>CSS is used to define styles for your web pages, including the design, layout and variations in display for different devices and screen sizes.</p>
        <h3>Example:</h3>
        <p>body {</p>
        <p>  background-color: lightblue;</p>
        <p>}</p>
        <p>h1 {</p>
        <p>  color: white;</p>
        <p>  text-align: center;</p>
        <p>}</p>
        <p>p {</p>
        <p>  font-family: verdana;</p>
        <p>  font-size: 20px;</p>
        <p>}</p>

        <h2>CSS Solved a Big Problem</h2>
        <p>HTML was NEVER intended to contain tags for formatting a web page!</p>
        <p> HTML was created to describe the content of a web page, like:</p>
        <p>< h1>This is a heading</h1></p>
        <p>< p >This is a paragraph.< /p ></p>
        <p>When tags like < font >, and color attributes were added to the HTML 3.2 specification, it started a nightmare for web developers. Development of large websites, where fonts and color information were added to every single page, became a long and expensive process.</p>
            <p>To solve this problem, the World Wide Web Consortium (W3C) created CSS.</p>
            <p>CSS removed the style formatting from the HTML page!</p>

        <h2>CSS Saves a Lot of Work!</h2>
        <p>The style definitions are normally saved in external .css files.</p>
        <p>With an external stylesheet file, you can change the look of an entire website by changing just one file!</p>
        
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