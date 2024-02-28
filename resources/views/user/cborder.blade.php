<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CSS Border</title>
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
        <h2>CSS Borders</h2>
        <p>The CSS border properties allow you to specify the style, width, and color of an element's border.</p>
    
        <h2>CSS Border Style</h2>
        <p>The border-style property specifies what kind of border to display.</p>
        <p>The following values are allowed:</p>
        <li>dotted - Defines a dotted border</li>
        <li>dashed - Defines a dashed border</li>
        <li>solid - Defines a solid border</li>
        <li>double - Defines a double border</li>
        <li>groove - Defines a 3D grooved border. The effect depends on the border-color value</li>
        <li>ridge - Defines a 3D ridged border. The effect depends on the border-color value</li>
        <li>inset - Defines a 3D inset border. The effect depends on the border-color value</li>
        <li>outset - Defines a 3D outset border. The effect depends on the border-color value</li>
        <li>none - Defines no border</li>
        <li>hidden - Defines a hidden border</li>
        <p>The border-style property can have from one to four values (for the top border, right border, bottom border, and the left border).</p>
        <h3>Example:</h3>
        <p>Demonstration of the different border styles:</p>
        <p>p.dotted { border-style: dotted; }</p>
        <p>p.dashed { border-style: dashed; }</p>
        <p>p.solid { border-style: solid; }</p>
        <p>p.double { border-style: double; }</p>
        <p>p.groove  {border-style: groove; }</p>
        <p>p.ridge { border-style: ridge; }</p>
        <p>p.inset { border-style: inset; }</p>
        <p>p.outset { border-style: outset; }</p>
        <p>p.none { border-style: none; }</p>
        <p>p.hidden { border-style: hidden; }</p>
        <p>p.mix { border-style: dotted dashed solid double; }</p>
        <p>Note: None of the OTHER CSS border properties (which you will learn more about in the next chapters) will have ANY effect unless the border-style property is set!</p>

        
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