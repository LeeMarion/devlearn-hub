<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CSS Colors</title>
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
        <h2>CSS Colors</h2>
        <p>Colors are specified using predefined color names, or RGB, HEX, HSL, RGBA, HSLA values. The < color > CSS data type represents a color. A < color > may also include an alpha-channel transparency value, indicating how the color should composite with its background.</p>
    
        <h2>CSS Color Names</h2>
        <p>In CSS, a color can be specified by using a predefined color name:</p>
        <h3>Example:</h3>
        <p>< h1 style="background-color:Tomato;">Tomato< /h1 ></p>
        <p>< h1 style="background-color:Orange;">Orange< /h1 ></p>
        <p>< h1 style="background-color:DodgerBlue;">DodgerBlue< /h1 ></p>

        <h2>CSS Background Color</h2>
        <p>You can set the background color for HTML elements:</p>
        <h3>Example:</h3>
        <p>< h1 style="background-color:DodgerBlue;">Hello World< /h1 ></p>
        <p>< p style="background-color:Tomato;">Lorem ipsum...< /p ></p>

            <h2>CSS Text Color</h2>
            <p>You can set the color of text:</p>
            <h3>Example:</h3>
            <p>< h1 style="color:Tomato;">Hello World< /h1> </p>
            <p>< p style="color:DodgerBlue;">Lorem ipsum...< /p> </p>
            <p>< p style="color:MediumSeaGreen;">Ut wisi enim...< /p> </p>

            <h2>CSS Border Color</h2>
        <p>You can set the color of borders:</p>
        <h3>Example:</h3>
        <p>< h1 style="border:2px solid Tomato;">Hello World< /h1> </p>
        <p>< h1 style="border:2px solid DodgerBlue;">Hello World< /h1> </p>
        <p>< h1 style="border:2px solid Violet;">Hello World< /h1> </p>

            <h2>CSS Color Values</h2>
        <p>In CSS, colors can also be specified using RGB values, HEX values, HSL values, RGBA values, and HSLA values:</p>
        <p>To use inline styles, add the style attribute to the relevant element. The style attribute can contain any CSS property.</p>
        <h3>Example:</h3>
        <p>< h1 style="background-color:rgb(255, 99, 71);">...< /h1> </p>
        <p>< h1 style="background-color:#ff6347;">...< /h1> </p>
        <p>< h1 style="background-color:hsl(9, 100%, 64%);">...< /h1> </p>
        <p>< h1 style="background-color:rgba(255, 99, 71, 0.5);">...< /h1> </p>
        <p>< h1 style="background-color:hsla(9, 100%, 64%, 0.5);">...< /h1> </p>


        
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