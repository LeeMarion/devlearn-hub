<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HTML Styles</title>
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
        <h2>The HTML Style Attribute</h2>
        <p>Setting the style of an HTML element, can be done with the style attribute. It  contains style information for a document, or part of a document. It contains CSS, which is applied to the contents of the document containing the < style > element.</p>
        <p>The HTML style attribute has the following syntax:</p>
        <h3>Syntax:</h3>
        <p>< tagname style="property:value;" ></p>
        <p>The property is a CSS property. The value is a CSS value.</p>
    

        <h2>Background Color</h2>
        <p>The CSS background-color property defines the background color for an HTML element.</p>
        <h3>Example:</h3>
        <p>Set the background color for a page to powderblue:</p>
        <p>< body style="background-color:powderblue;" ></p>
        <p>< h1 >This is a heading< /h1 ></p>
        <p>< p >This is a paragraph.< /p ></p>
        <p>< /body ></p>
        
        <h2>Text Color</h2>
        <p>The CSS color property defines the text color for an HTML element:</p>
        <h3>Example:</h3>
        <p>< h1 style="color:blue;">This is a heading< /h1 ></p>
        <p>< p style="color:red;">This is a paragraph.< /p ></p>

        <h2>Fonts</h2>
        <p>The CSS font-family property defines the font to be used for an HTML element:</p>
        <h3>Example:</h3>
        <p>< h1 style="font-family:verdana;">This is a heading< /h1 ></p>
        <p>< p style="font-family:courier;">This is a paragraph.< /p ></p>

        <h2>Text Size</h2>
        <p>The CSS font-size property defines the text size for an HTML element:</p>
        <h3>Example:</h3>
        <p>< h1 style="font-size:300%;">This is a heading< /h1 ></p>
        <p>< p style="font-size:160%;">This is a paragraph.< /p ></p>

        <h2>Text Alignment</h2>
        <p>The CSS text-align property defines the horizontal text alignment for an HTML element:</p>
        <h3>Example:</h3>
        <p>< h1 style="text-align:center;">Centered Heading< /h1 ></p>
        <p>< p style="text-align:center;">Centered paragraph.< /p ></p>

        <h2>Summary:</h2>
        <li>Use the style attribute for styling HTML elements</li>
        <li>Use background-color for background color</li>
        <li>Use color for text colors</li>
        <li>Use font-family for text fonts</li>
        <li>Use font-size for text sizes</li>
        <li>Use text-align for text alignment</li>

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