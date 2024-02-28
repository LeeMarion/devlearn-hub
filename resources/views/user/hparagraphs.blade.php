<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HTML Paragraphs</title>
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
        <h2>HTML Paragraphs</h2>
        <p>The HTML < p > element defines a paragraph.</p>
        <p>A paragraph always starts on a new line, and browsers automatically add some white space (a margin) before and after a paragraph.</p>
        <h3>Example:</h3>
        <p>< p>This is a paragraph.< /p ></p>
        <p>< p >This is another paragraph.< /p ></p>
    

        <h2>HTML Display</h2>
        <p>You cannot be sure how HTML will be displayed. Large or small screens, and resized windows will create different results. With HTML, you cannot change the display by adding extra spaces or extra lines in your HTML code.</p>
        <p>The browser will automatically remove any extra spaces and lines when the page is displayed:</p>
        <p><h3>Example:</h3>
            <p>< p ></p>
            <p>This paragraph</p>
            <p>contains a lot of lines</p>
            <p>in the source code,</p>
            <p>but the browser</p>
            <p>ignores it.</p>
            <p>< /p ></p></p>
        
        <h2>Bigger Headings</h2>
        <p>Each HTML heading has a default size. However, you can specify the size for any heading with the style attribute, using the CSS font-size property:</p>
        <h3>Example:</h3>
        <p>< h1 style="font-size:60px;">Heading 1< /h1 ></p>

        <h2>HTML Tag Reference</h2>
        <p>Tag reference contains additional information about these tags and their attributes.</p>
        <table>
            <thead>
              <tr>
                <th></th>
                <th>Tag</th>
                <th>Description</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>< html ></td>
                <td>Defines the root of an HTML document</td>
              </tr>
              <tr>
                <td>2</td>
                <td>< body ></td>
                <td>Defines the document's body</td>
              </tr>
              <tr>
                <td>3</td>
                <td>< h1 > to < h6 ></td>
                <td>	Defines HTML headings</td>
              </tr>

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