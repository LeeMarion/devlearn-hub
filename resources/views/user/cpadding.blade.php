<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CSS Padding</title>
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
        <h2>CSS Padding</h2>
        <p>Padding is used to create space around an element's content, inside of any defined borders.</p>
        <p>The CSS padding properties are used to generate space around an element's content, inside of any defined borders.</p>
        <p>With CSS, you have full control over the padding. There are properties for setting the padding for each side of an element (top, right, bottom, and left).</p>

        <h2>Padding - Individual Sides</h2>
        <p>CSS has properties for specifying the padding for each side of an element:</p>
        <h3>Example:</h3>
        <li>padding-top</li>
        <li>padding-right</li>
        <li>padding-bottom</li>
        <li>padding-left/</li>
        <p>All the padding properties can have the following values:</p>
        <li>length - specifies a padding in px, pt, cm, etc.</li>
        <li>% - specifies a padding in % of the width of the containing element</li>
        <li>inherit - specifies that the padding should be inherited from the parent element</li>
        <h3>Example:</h3>
        <p>Set different padding for all four sides of a <div> element:  </p>
            <p>div {</p>
            <p>  padding-top: 50px;</p>
            <p>  padding-right: 30px;</p>
            <p>  padding-bottom: 50px;</p>
            <p>  padding-left: 80px;</p>
            <p>}</p>
       

        <h2>Padding - Shorthand Property</h2>
        <p>To shorten the code, it is possible to specify all the padding properties in one property.</p>
        <p> The padding property is a shorthand property for the following individual padding properties:</p>
        <li>padding-top</li>
        <li>padding-right</li>
        <li>padding-bottom</li>
        <li>padding-left</li>
        <h3>If the padding property has four values:</h3>
        <p>padding: 25px 50px 75px 100px;</p>
        <p>top padding is 25px</p>
        <p>right padding is 50px</p>
        <p>bottom padding is 75px</p>
        <p>left padding is 100px</p>
        <h3>Example:</h3>
        <p>Use the padding shorthand property with four values:</p>
        <p>p {</p>
        <p>  padding: 25px 50px 75px 100px;</p>
        <p>}</p>
        <h3>If the padding property has three values:</h3>
        <p>padding: 25px 50px 75px;</p>
        <p>top padding is 25px</p>
        <p>right and left padding are 50px</p>
        <p>bottom padding is 75px</p>
        <h3>Example:</h3>
        <p>Use the padding shorthand property with three values: </p>
        <p>p {</p>
        <p>  padding: 25px 50px 75px;</p>
        <p>}</p>
        <h3>If the padding property has two values:</h3>
        <p>padding: 25px 50px;</p>
        <p>top and bottom padding are 25px</p>
        <p>right and left padding are 50px</p>
        <h3>Example:</h3>
        <p>Use the padding shorthand property with three values: </p>
        <p>p {</p>
        <p> padding: 25px 50px;</p>
        <p>}</p>
        <h3>If the padding property has one value:</h3>
        <p>padding: 25px;</p>
        <p>all four padding are 25px</p>
        <h3>Example:</h3>
        <p>p {</p>
            <p>  padding: 25px;</p>
            <p>}</p>

        <h2>Padding and Element Width</h2>
        <p>The CSS width property specifies the width of the element's content area. The content area is the portion inside the padding, border, and margin of an element (the box model).</p>
        <p>So, if an element has a specified width, the padding added to that element will be added to the total width of the element. This is often an undesirable result.</p>
        <h3>Example:</h3>
        <p>Here, the < div > element is given a width of 300px. However, the actual width of the < div > element will be 350px (300px + 25px of left padding + 25px of right padding):</p>
        <p>div {</p>
        <p>  width: 300px;</p>
        <p>  padding: 25px;</p>
        <p>}</p>

        <h2>All CSS Padding Properties</h2>
        <table>
            <thead>
              <tr>
                <th>Property</th>
                <th>Description</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>padding</td>
                <td>A shorthand property for setting all the padding properties in one declaration </td>
              </tr>
              <tr>
                <td>padding-bottom</td>
                <td>	Sets the bottom padding of an element </td>
              </tr>
              <tr>
                <td>padding-left</td>
                <td>	Sets the left padding of an element</td>
              </tr>
              <tr>
                <td>padding-right</td>
                <td>		Sets the right padding of an element</td>
              </tr>
              <tr>
                <td>padding-top</td>
                <td>	Sets the top padding of an element</td>
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