<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HTML Lists</title>
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
        <h2>HTML Lists</h2>
        <p>HTML lists allow web developers to group a set of related items in lists. HTML offers web authors three ways for specifying lists of information. All lists must contain one or more list elements.</p>
        <h3>Example:</h3>
        <h3>An unordered HTML list:</h3>
        <ul>
            <li>Item</li>
            <li>Item</li>
            <li>Item</li>
            <li>Item</li>
          </ul>
        <h3>An ordered HTML list:</h3>
        <ol>
            <li>First item</li>
            <li>Second item</li>
            <li>Third item</li>
            <li>Fourth item</li>
          </ol>
    

        <h2>Unordered HTML List</h2>
        <p>An unordered list starts with the < ul > tag. Each list item starts with the < li > tag.</p>
            <p>The list items will be marked with bullets (small black circles) by default:</p>
        <h3>Example:</h3>
        <p>< ul ></p>
        <p>  < li >Coffee< /li ></p>
        <p>  < li >Tea< /li ></p>
        <p>  < li >Milk< /li ></p>
        <p>< /ul ></p>

        <h2>Ordered HTML List</h2>
        <p>An ordered list starts with the < ol > tag. Each list item starts with the < li > tag.</p>
        <p>The list items will be marked with numbers by default:</p>
        <h3>Example:</h3>
        <p>< ol ></p>
        <p>  < li >Coffee< /li ></p>
        <p>  < li> Tea< /li ></p>
        <p>  < li >Milk< /li ></p>
        <p>< /ol ></p>

        <h2>HTML Description Lists</h2>
        <p>HTML also supports description lists. A description list is a list of terms, with a description of each term.</p>
        <p>The < dl > tag defines the description list, the < dt > tag defines the term (name), and the < dd > tag describes each term:</p>
        <h3>Example:</h3>
        <p>< dl ></p>
        <p>  < dt >Coffee< /dt ></p>
        <p>  < dd >- black hot drink< /dd ></p>
        <p>  < dt >Milk< dt ></p>
        <p>  < dd >- white cold drink< /dd ></p>
        <p>< /dl ></p>

        <h2>HTML List Tags</h2>
        <table>
            <thead>
              <tr>
                <th>Tag</th>
                <th>Description</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>< ul ></td>
                <td>	Defines an unordered list</td>
              </tr>
              <tr>
                <td>< ol ></td>
                <td>	Defines an ordered list</td>
              </tr>
              <tr>
                <td>< li ></td>
                <td>Defines a list item</td>
              </tr>
              <tr>
                <td>< dl ></td>
                <td>Defines a description list</td>
              </tr>
              <tr>
                <td>< dt ></td>
                <td>Defines a term in a description list</td>
              </tr>
              <tr>
                <td>< dd ></td>
                <td>Describes the term in a description list</td>
              </tr>
        </tbody>
      </table> 

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

        table {
  border-collapse: collapse;
  width: 70%;
}

th, td {
  border: 1px solid black;
  padding: 15px;
  text-align: left;
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