<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HTML Elements</title>
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
        <h2>HTML Elements</h2>
        <p>An HTML element is defined by a start tag, some content, and an end tag.</p>
        <p>The HTML element is everything from the start tag to the end tag:</p>
        <p>< tagname >Content goes here...< /tagname ></p>
        <p>Examples of some HTML elements:</p>
        <p>< h1 >My First Heading< /h1 ></p>
        <p>< p> My first paragraph.< /p ></p>
        <p>Note: Some HTML elements have no content (like the < br>  element). These elements are called empty elements. Empty elements do not have an end tag!</p >
        <p>The following example contains four HTML elements (< html >, < body >, < h1 > and < p >):</p>
    
        <h2>Nested HTML Elements</h2>
        <p>HTML elements can be nested (this means that elements can contain other elements). All HTML documents consist of nested HTML elements.</p>
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

        <h3>Example Explained:</h3>
        <p>The < html > element is the root element and it defines the whole HTML document.</p>
        <p>It has a start tag < html > and an end tag < /html >.</p>
        <p>Then, inside the < html > element there is a < body > element</p>
        <p>The < body > element defines the document's body.</p>
        <p>It has a start tag < body > and an end tag < /body >.</p>
        <p>Then, inside the < body > element there are two other elements: < h1 > and < p >:</p>
        <p>The < h1 > element defines a heading.</p>
        <p>It has a start tag < h1 > and an end tag < /h1 >:</p>
        <p>The < p > element defines a paragraph.</p>
        <p>It has a start tag < p > and an end tag < /p >:</p>




        
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