<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CSS How To</title>
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
        <h2>How To Add CSS</h2>
        <p>When a browser reads a style sheet, it will format the HTML document according to the information in the style sheet.</p>
    
        <h2>Three Ways to Insert CSS</h2>
        <p>There are three ways of inserting a style sheet:</p>
        <li>External CSS</li>
        <li>Internal CSS</li>
        <li>Inline CSS</li>

        <h2>External CSS</h2>
        <p>With an external style sheet, you can change the look of an entire website by changing just one file!</p>
        <p>Each HTML page must include a reference to the external style sheet file inside the < link > element, inside the head section.</p>
        <h3>Example:</h3>
        <p>External styles are defined within the < link > element, inside the < head > section of an HTML page:</p>
            <p>< !DOCTYPE html></p>
            <p>< html ></p>
            <p>< head ></p>
            <p>< link rel="stylesheet" href="mystyle.css" ></p>
            <p>< /head ></p>
            <p>< body ></p>
            <p>< h1 >This is a heading< /h1 ></p>
            <p>< p This is a paragraph.< /p ></p>
            <p> < /body > </p>
            <p>< /html ></p>
            <p>An external style sheet can be written in any text editor, and must be saved with a .css extension. The external .css file should not contain any HTML tags.</p>

            <h2>Internal CSS</h2>
            <p>An internal style sheet may be used if one single HTML page has a unique style. The internal style is defined inside the < style > element, inside the head section.</p>
            <h3>Example:</h3>
            <p>Internal styles are defined within the < style > element, inside the < head > section of an HTML page:</p>
            <p>< !DOCTYPE html ></p>
            <p>< html ></p>
            <p>< head ></p>
            <p>< style ></p>
            <p>body {</p>
            <p>  background-color: linen;</p>
            <p>}</p>
            <p>h1 {</p>
            <p>  color: maroon;</p>
            <p>  margin-left: 40px;</p>
            <p>}</p>
            <p>< /style ></p>
            <p>< /head ></p>
            <p>< body ></p>
            <p>< h1 >This is a heading< /h1 ></p>
            <p>< p >This is a paragraph.< /p ></p>
            <p>< /body </p>
            <p>< /html ></p>

            <h2>Inline CSS</h2>
        <p>An inline style may be used to apply a unique style for a single element. To use inline styles, add the style attribute to the relevant element. The style attribute can contain any CSS property.</p>
        <h3>Example:</h3>
        <p>Inline styles are defined within the "style" attribute of the relevant element:</p>
            <p>< !DOCTYPE html ></p>
            <p>< html ></p>
            <p>< body ></p>
            <p>< h1 style="color:blue;text-align:center;">This is a heading< /h1 ></p>
            <p>< p style="color:red;">This is a paragraph.< /p ></p>
            <p>< /body ></p>
            <p>< /html ></p>

            <h2>Cascading Order</h2>
        <p>All the styles in a page will "cascade" into a new "virtual" style sheet by the following rules, where number one has the highest priority:</p>
        <p>To use inline styles, add the style attribute to the relevant element. The style attribute can contain any CSS property.</p>
        <li>Inline style (inside an HTML element)</li>
        <li>External and internal style sheets (in the head section)</li>
        <li>Browser default</li>
        <p>So, an inline style has the highest priority, and will override external and internal styles and browser defaults.</p>


        
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