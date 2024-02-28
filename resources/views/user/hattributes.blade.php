<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HTML Attributes</title>
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
        <h2>HTML Attributes</h2>
        <li>All HTML elements can have attributes</li>
        <li>Attributes provide additional information about elements</li>
        <li>Attributes are always specified in the start tag</li>
        <li>Attributes usually come in name/value pairs like: name="value"</li>
        
    
        <h2>The href Attribute</h2>H
        <p>The < a > tag defines a hyperlink. The href attribute specifies the URL of the page the link goes to:</p>
        <h3>Example:</h3>
        <p>< a href="https://www.youtube.com">Visit Youtube< /a ></p>    
    

        <h2>The src Attribute</h2>
        <p>The < img > tag is used to embed an image in an HTML page. The src attribute specifies the path to the image to be displayed:</p>
        <h3>Example:</h3>
        <p>< img src="img.jpg" ></p>
        <p>There are two ways to specify the URL in the src attribute:</p>
        <p>1. Absolute URL - Links to an external image that is hosted on another website. Example: src="https://www.youtube.com/images/img.jpg".</p>
        <p>Notes: External images might be under copyright. If you do not get permission to use it, you may be in violation of copyright laws. In addition, you cannot control external images; it can suddenly be removed or changed.</p>
        <p>2. Relative URL - Links to an image that is hosted within the website. Here, the URL does not include the domain name. If the URL begins without a slash, it will be relative to the current page. Example: src="img_girl.jpg". If the URL begins with a slash, it will be relative to the domain. Example: src="/images/img_girl.jpg".</p>
        
        <h2>The width and height Attributes</h2>
        <p>The < img > tag should also contain the width and height attributes, which specify the width and height of the image (in pixels):</p>
        <h3>Example:</h3>
        <p>< img src="img_girl.jpg" width="500" height="600" ></p>

        <h2>The alt Attribute</h2>
        <p>The required alt attribute for the < img > tag specifies an alternate text for an image, if the image for some reason cannot be displayed. This can be due to a slow connection, or an error in the src attribute, or if the user uses a screen reader.</p>
        <h3>Example:</h3>
        <p>< img src="img_girl.jpg" alt="Girl with a jacket" ></p>

        <h2>The style Attribute</h2>
        <p>The style attribute is used to add styles to an element, such as color, font, size, and more.</p>
        <h3>Example:</h3>
        <p>< p style="color:red;">This is a red paragraph.< /p ></p>

        <h2>The lang Attribute</h2>
        <p>You should always include the lang attribute inside the < html > tag, to declare the language of the Web page. This is meant to assist search engines and browsers.</p>
        <p>The following example specifies English as the language:</p>
        <p>< !DOCTYPE html ></p>
        <p>< html lang="en" ></p>
        <p>< body ></p>
        <p>...</p>
        <p>< /body ></p>
        <p>< /html ></p>

        <h2>The title Attribute</h2>
        <p>The title attribute defines some extra information about an element.</p>
        <p>The value of the title attribute will be displayed as a tooltip when you mouse over the element:</p>
        <h3>Example:</h3>
        <p>< p title="I'm a tooltip">This is a paragraph.< /p ></p>

        <h2>Summary</h2>
        <li>All HTML elements can have attributes</li>
        <li>The href attribute of < a > specifies the URL of the page the link goes to</li>
        <li>The src attribute of < img > specifies the path to the image to be displayed</li>
        <li>The width and height attributes of < img > provide size information for images</li>
        <li>The alt attribute of < img > provides an alternate text for an image</li>
        <li>The style attribute is used to add styles to an element, such as color, font, size, and more</li>
        <li>The lang attribute of the < html > tag declares the language of the Web page</li>
        <li>The title attribute defines some extra information about an element</li>

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