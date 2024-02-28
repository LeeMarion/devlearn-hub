<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HTML Headings</title>
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
        <h2>HTML Headings</h2>
        <p>HTML headings are titles or subtitles that you want to display on a webpage. HTML elements represent six levels of section headings. < h1 > is the highest section level and < h6 > is the lowest. By default, all heading elements create a block-level box in the layout, starting on a new line and taking up the full width available in their containing block.</p>
        
    
        <h3>Example:</h3>
        <p>< h1 >Heading 1< /h1 ></p>
        <p>< h2 >Heading 2< /h2 ></p>
        <p>< h3 >Heading 3< /h3 ></p>
        <p>< h4 >Heading 4< /h4 ></p>
        <p>< h5 >Heading 5< /h5 ></p>
        <p>< h6 >Heading 6< /h6 ></p>
    

        <h2>Headings Are Important</h2>
        <p>Search engines use the headings to index the structure and content of your web pages.</p>
        <p>Users often skim a page by its headings. It is important to use headings to show the document structure.</p>
        <p>< h1 > headings should be used for main headings, followed by < h2 > headings, then the less important < h3 >, and so on.</p>
        <p>Note: Use HTML headings for headings only. Don't use headings to make text BIG or bold.</p>
        
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