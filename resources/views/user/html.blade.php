<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HTML</title>
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
        <h2>What is HTML?</h2>
    <li>HTML stands for Hyper Text Markup Language</li>
    <li>HTML is the standard markup language for creating Web pages</li>
    <li>HTML describes the structure of a Web page</li>
    <li>HTML consists of a series of elements</li>
    <li>HTML elements tell the browser how to display the content</li>
    <li>HTML elements label pieces of content such as "this is a heading", "this is a paragraph", "this is a link", etc.</li>   
    
        <h2>A Simple HTML Document</h2>
        <h3>Example:</h3>
        <p>< !DOCTYPE html ></p>    
        <p>< html ></p>
        <p>< head ></p>
        <p>< Page Title ></p>
        <p>< head ></p>
        <p>< body ></p>
        <p> < h1 > Heading < /h1 > </p>
        <p> < p > Paragraph < /p > </p>
        <p>< /body ></p>
        <p>< /html ></p>
        <h3>Output:</h3>
        <h1>Heading</h1>
        <p>Paragraph</p>
        <h3>Example Explained</h3>
        <li>The < !DOCTYPE html > declaration defines that this document is an HTML5 document</li>
        <li>The < html > element is the root element of an HTML page</li>
        <li>The < head > element contains meta information about the HTML page</li>
        <li>The < title > element specifies a title for the HTML page (which is shown in the browser's title bar or in the page's tab)</li>
        <li>The < body > element defines the document's body, and is a container for all the visible contents, such as headings, paragraphs, images, hyperlinks, tables, lists, etc.</li>
        <li>The < h1 > element defines a large heading</li>
        <li>The < p > element defines a paragraph</li>

        <h2>What is an HTML Element?</h2>
        <p>An HTML element is defined by a start tag, some content, and an end tag:</p>
        <p> < tagname > Content goes here... < tagname ></p>

        <h2>Web Browsers</h2>
        <p>The purpose of a web browser (Chrome, Edge, Firefox, Safari) is to read HTML documents and display them correctly.</p>
        <p>A browser does not display the HTML tags, but uses them to determine how to display the document:</p>
        <img src="assets/images/web.png" alt="">

        <h2>HTML Page Structure</h2>
        <p>Below is a visualization of an HTML page structure:</p>
        <img src="assets/images/structure.png" alt="">
        
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