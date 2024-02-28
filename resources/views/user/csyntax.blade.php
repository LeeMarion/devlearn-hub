<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CSS Syntax</title>
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
        <h2>CSS Syntax</h2>
        <p>A CSS rule consists of a selector and a declaration block. The basic goal of the Cascading Stylesheet (CSS) language is to allow a browser engine to paint elements of the page with specific features, like colors, positioning, or decorations.</p>
        <h3>Example:</h3>
        <p>In this example all <p> elements will be center-aligned, with a red text color:</p>
        <p>p {</p>
        <p>  color: red;</p>
        <p>  text-align: center;</p>
        <p>}</p>
        <h3>Example Explained</h3>
        <li>p is a selector in CSS (it points to the HTML element you want to style: < p >).</li>
        <li>color is a property, and red is the property value</li>
        <li>text-align is a property, and center is the property value</li>

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