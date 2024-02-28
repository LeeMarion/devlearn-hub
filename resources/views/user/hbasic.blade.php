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
        <h2>HTML Documents</h2>
        <p>An HTML document is based on a file containing hypertext markup language. In HTML, tags, or hidden keywords, tell processing programs, often Web browsers, how to display text.</p>
        <p>All HTML documents must start with a document type declaration: < !DOCTYPE html >.</p>
        <p>The HTML document itself begins with < html > and ends with < /html >.</p>
        <p>The visible part of the HTML document is between < body > and < /body >.</p>
        <h3>Example:</h3>
        <p>< !DOCTYPE html ></p>
        <p>< html ></p>
        <p>< body ></p>
        <p>< h1>My First Heading< /h1 ></p>
        <p>< p>My first paragraph.< /p ></p>
        <p>< /body></p>
        <p>< /html></p>
        <h3>Output:</h3>
        <h1>My First Heading</h1>
        <p>My first paragraph.</p>
    
        <h2>The < !DOCTYPE > Declaration</h2>
        <p>The < !DOCTYPE > declaration represents the document type, and helps browsers to display web pages correctly.</p>
        <p>It must only appear once, at the top of the page (before any HTML tags).</p>
        <p>The < !DOCTYPE > declaration is not case sensitive.</p>
        <p>The < !DOCTYPE > declaration for HTML5 is:</p>
        <p>html</p>

        <h2>HTML Headings</h2>
        <p>HTML headings are defined with the < h1 > to < h6 > tags.</p>
        <p> < h1 > defines the most important heading. < h6>  defines the least important heading: </p>
        <h3>Example:</h3>
        <p>< h1 >This is heading 1< /h1 ></p>
        <p>< h2 >This is heading 2< /h2 ></p>
        <p>< h3 >This is heading 3< /h3 ></p>

        <h2>HTML Paragraphs</h2>
        <p>HTML paragraphs are defined with the < p > tag:</p>
        <h3>Example:</h3>
        <p>< p >This is a paragraph.< /p ></p>
        <p>< p >This is another paragraph.< /p ></p>

        <h2>HTML Links</h2>
        <p>HTML links are defined with the < a>  tag:</p>
        <h3>Example:</h3>
        <p>< a href="https://www.youtube.com/">This is a link< /a ></p>
        <p>The link's destination is specified in the href attribute. </p>
        <p>Attributes are used to provide additional information about HTML elements.</p>

        <h2>HTML Images</h2>
        <p>HTML images are defined with the < img > tag.</p>
        <p>The source file (src), alternative text (alt), width, and height are provided as attributes:</p>
        <h3>Example</h3>
        <p>< img src="logo.jpg" alt="logo" width="104" height="142" ></p>
        



        
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