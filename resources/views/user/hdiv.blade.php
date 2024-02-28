<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HTML Basic</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="icon" href="assets/images/lg.png">
</head>
<body>
    <div class="sidenav">
        <a href="coursemod"><h2>HTML</h2></a>
        <a href="hintro">HTML Introduction</a>
        <a href="hbasic">HTML Basic</a>
        <a href="helements">HTML Elements</a>
        <a href="hattributes">HTML Attributes</a>
        <a href="hheadings">HTML Headings</a>
        <a href="hparagraphs">HTML Paragraphs</a>
        <a href="hstyles">HTML Styles</a>
        <a href="hlists">HTML Lists</a>
    </div>

    <div class="main">
        <h2>The < div>  Element</h2>
        <p>The < div > element is by default a block element, meaning that it takes all available width, and comes with line breaks before and after. It has no effect on the content or layout until styled in some way using CSS.</p>
        <h3>Example:</h3>
        <p>A < div > element takes up all available width:</p>
        <p>Lorem Ipsum < div >I am a div< /div > dolor sit amet.</p>
        <h3>Output:</h3>
        <p>Lorem Ipsum</p>
        <p>I am a div</p>
        <p>dolor sit amet.</p>
        <p>The < div > element has no required attributes, but style, class and id are common.</p>

    
        <h2>< div > as a container</h2>
        <p>The < div > element is often used to group sections of a web page together.</p>
        <h3>Example:</h3>
        <p>A < div > element with HTML elements:</p>
        <p> < div ></p>
        <p>  < h3 >London< /h3 ></p>
        <p>  < p >London is the capital city of England.< /p ></p>
        <p>  < p >London has over 13 million inhabitants.< /p ></p>
        <p>< /div ></p>
        <h3>Output:</h3>
        <h3>London</h3>
        <p>London is the capital city of England./p>
        <p>London has over 13 million inhabitants.</p>

        <h2>Multiple < div > elements</h2>
        <p>You can have many < div > containers on the same page.</p>
        <h3>Example:</h3>
        <p>< div ></p>
        <p>  < h3>London< /h3 ></p>
        <p>  < p>London is the capital city of England.< /p ></p>
        <p>  < p>London has over 13 million inhabitants.< /p ></p>
        <p>< /div ></p>
        <p>< div ></p>
        <p>  < h3>Oslo< /h3 ></p>
        <p>  < p>Oslo is the capital city of Norway.< /p ></p>
        <p>  < p>Oslo has over 600.000 inhabitants.< /p> </p>
        <p>< /div ></p>
        <p>< div ></p>
        <p>  < h3>Rome< /h3 ></p>
        <p>  < p>Rome is the capital city of Italy.< /p ></p>
        <p>  < p>Rome has almost 3 million inhabitants.< /p ></p>
        <p>< /div> </p>
        <h3>Output:</h3>
        <h3>London</h3>
        <p>London is the capital city of England.</p>
        <p>London has over 13 million inhabitants.</p>
        <h3>Oslo</h3>
        <p>Oslo is the capital city of Norway.</p>
        <p>Oslo has over 600.000 inhabitants.</p>
        <h3>Rome</h3>
        <p>Rome is the capital city of Italy.</p>
        <p>Rome has almost 3 million inhabitants.</p>



        
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