<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CSS Margin</title>
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
        <h2>CSS Margins</h2>
        <p>Margins are used to create space around elements, outside of any defined borders. The CSS margin properties are used to create space around elements, outside of any defined borders.</p>
        <p>With CSS, you have full control over the margins. There are properties for setting the margin for each side of an element (top, right, bottom, and left).</p>
    
        <h2>Margin - Individual Sides</h2>
        <p>CSS has properties for specifying the margin for each side of an element:</p>
        <h3>Example:</h3>
        <li>margin-top</li>
        <li>margin-right</li>
        <li>margin-bottom</li>
        <li>margin-left</li>
        <p>All the margin properties can have the following values:</p>
        <li>auto - the browser calculates the margin</li>
        <li>length - specifies a margin in px, pt, cm, etc.</li>
        <li>% - specifies a margin in % of the width of the containing element</li>
        <li>inherit - specifies that the margin should be inherited from the parent element</li>
        <p>Tip: Negative values are allowed.</p>
        <h3>Example:</h3>
        <p>Set different margins for all four sides of a < p > element:</p>
        <p>p {</p>
        <p>  margin-top: 100px;</p>
        <p>  margin-bottom: 100px;</p>
        <p>  margin-right: 150px;</p>
        <p>  margin-left: 80px;</p>
        <p>}</p>

        <h2>Margin - Shorthand Property</h2>
        <p>To shorten the code, it is possible to specify all the margin properties in one property.</p>
        <p> The margin property is a shorthand property for the following individual margin properties:</p>
        <li>margin-top</li>
        <li>margin-right</li>
        <li>margin-bottom</li>
        <li>margin-left</li>
        <h3>If the margin property has four values:</h3>
        <p>margin: 25px 50px 75px 100px;</p>
        <p>top margin is 25px</p>
        <p>right margin is 50px</p>
        <p>bottom margin is 75px</p>
        <p>left margin is 100px</p>
        <h3>Example:</h3>
        <p>Use the margin shorthand property with four values:</p>
        <p>p {</p>
        <p>  margin: 25px 50px 75px 100px;</p>
        <p>}</p>
        <h3>If the margin property has three values:</h3>
        <p>margin: 25px 50px 75px;</p>
        <p>top margin is 25px</p>
        <p>right and left margins are 50px</p>
        <p>bottom margin is 75px</p>
        <h3>Example:</h3>
        <p>Use the margin shorthand property with three values: </p>
        <p>p {</p>
        <p>  margin: 25px 50px 75px;</p>
        <p>}</p>
        <h3>If the margin property has two values:</h3>
        <p>margin: 25px 50px;</p>
        <p>top and bottom margins are 25px</p>
        <p>right and left margins are 50px</p>
        <h3>Example:</h3>
        <p>Use the margin shorthand property with three values: </p>
        <p>p {</p>
        <p> margin: 25px 50px;</p>
        <p>}</p>
        <h3>If the margin property has one value:</h3>
        <p>margin: 25px;</p>
        <p>all four margins are 25px</p>
        <h3>Example:</h3>
        <p>p {</p>
            <p>  margin: 25px;</p>
            <p>}</p>

        <h2>The auto Value</h2>
        <p>You can set the margin property to auto to horizontally center the element within its container.</p>
        <p>The element will then take up the specified width, and the remaining space will be split equally between the left and right margins.</p>
        <h3>Example:</h3>
        <p>Use margin: auto:</p>
        <p>div {</p>
        <p>  width: 300px;</p>
        <p>  margin: auto;</p>
        <p>  border: 1px solid red;</p>
        <p>}</p>

        <h2>The inherit Value</h2>
        <p>This example lets the left margin of the < p class="ex1" > element be inherited from the parent element (< div >):</p>
        <h3>Example:</h3>
        <p>Use of the inherit value:</p>
        <p>div {</p>
        <p>  border: 1px solid red;</p>
        <p>  margin-left: 100px;</p>
        <p>}</p>
        <p>p.ex1 {</p>
        <p>  margin-left: inherit;</p>
        <p>}</p>

        <h2>All CSS Margin Properties</h2>
        <table>
            <thead>
              <tr>
                <th>Property</th>
                <th>Description</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>margin</td>
                <td>A shorthand property for setting all the margin properties in one declaration </td>
              </tr>
              <tr>
                <td>margin-bottom</td>
                <td>	Sets the bottom margin of an element </td>
              </tr>
              <tr>
                <td>margin-left</td>
                <td>	Sets the left margin of an element</td>
              </tr>
              <tr>
                <td>margin-right</td>
                <td>		Sets the right margin of an element</td>
              </tr>
              <tr>
                <td>margin-top</td>
                <td>	Sets the top margin of an element</td>
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