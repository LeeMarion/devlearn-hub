<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CSS Height and Width</title>
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
        <h2>CSS Height, Width and Max-width</h2>
        <p>The CSS height and width properties are used to set the height and width of an element.</p>
        <p>The CSS max-width property is used to set the maximum width of an element.</p>
    
        <h2>CSS Setting height and width</h2>
        <p>The height and width properties are used to set the height and width of an element.</p>
        <p>The height and width properties do not include padding, borders, or margins. It sets the height/width of the area inside the padding, border, and margin of the element.</p>
        

        <h2>CSS height and width Values</h2>
        <p>The height and width properties may have the following values:</p>
        <li>auto - This is default. The browser calculates the height and width</li>
        <li>length - Defines the height/width in px, cm, etc.</li>
        <li>% - Defines the height/width in percent of the containing block</li>
        <li>initial - Sets the height/width to its default value</li>
        <li>inherit - The height/width will be inherited from its parent value</li>
        <h3>Example:</h3>
        <p>Set the height and width of a <div> element:</p>
            <p>div {</p>
            <p>  height: 200px;</p>
            <p>  width: 50%;</p>
            <p>  background-color: powderblue;</p>
            <p>}</p>
            <p>Note: Remember that the height and width properties do not include padding, borders, or margins! They set the height/width of the area inside the padding, border, and margin of the element!</p>


        <h2>Setting max-width</h2>
        <p>The max-width property is used to set the maximum width of an element.</p>
        <p>The max-width can be specified in length values, like px, cm, etc., or in percent (%) of the containing block, or set to none (this is default. Means that there is no maximum width).</p>
        <p>The problem with the < div > above occurs when the browser window is smaller than the width of the element (500px). The browser then adds a horizontal scrollbar to the page.</p>
        <p>Using max-width instead, in this situation, will improve the browser's handling of small windows.</p>
        <p>Tip: Drag the browser window to smaller than 500px wide, to see the difference between the two divs!</p>
        <h3>Example:</h3>
        <p>This <div> element has a height of 100 pixels and a max-width of 500 pixels: </p>
        <p>div {</p>
        <p>  max-width: 500px;</p>
        <p>  height: 100px;</p>
        <p>  background-color: powderblue;</p>
        <p>}</p>

        
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