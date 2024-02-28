<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Python Operators</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="icon" href="assets/images/lg.png">
</head>
<body>
    <div class="sidenav">
        <a href="coursemod"><h2>Python</h2></a>
        <a href="intro">Python Introduction</a>
        <a href="data">Python Data Types</a>
        <a href="list">Python List</a>
        <a href="variables">Python Variables</a>
        <a href="syntax">Python Syntax</a>
        <a href="operators">Python Operators</a>
        <a href="condition">Python Condition</a>
        <a href="while">Python While Loops</a>
        <a href="for">Python For Loops</a>
    </div>

    <div class="main">
        <h2>Python Operators</h2>
        <p>In Python programming, Operators in general are used to perform operations on values and variables. These are standard symbols used for the purpose of logical and arithmetic operations. In this article, we will look into different types of Python operators. </p>
        <h3>Example:</h3>
            <p>print(10 + 5)</p>
            <h3>Output:</h3>
            <p>15</p>
            <h2>Python Arithmetic Operators</h2>
            <p>Arithmetic operators are used with numeric values to perform common mathematical operations:</p>
            <table>
                <thead>
                  <tr>
                    <th></th>
                    <th>Operator</th>
                    <th>Name</th>
                    <th>Example</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>+</td>
                    <td>Addition</td>
                    <td>x + y</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>-</td>
                    <td>Subtraction</td>
                    <td>x - y</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>*</td>
                    <td>	Multiplication</td>
                    <td>	x * y</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>/</td>
                    <td>	Division</td>
                    <td>	x / y</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>%</td>
                    <td>	Modulus</td>
                    <td>	x % y</td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td>**</td>
                    <td>Exponentiation</td>
                    <td>	x ** y</td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td>//</td>
                    <td>	Floor division</td>
                    <td>	x // y</td>
                  </tr>
            </tbody>
          </table>  

          <h2>Python Comparison Operators</h2>
            <p>Comparison operators are used to compare two values:</p>
            <table>
                <thead>
                  <tr>
                    <th></th>
                    <th>Operator</th>
                    <th>Name</th>
                    <th>Example</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>==</td>
                    <td>Equal</td>
                    <td>x == y</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>!=</td>
                    <td>Not equal</td>
                    <td>x != y</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>></td>
                    <td>Greater than</td>
                    <td>x > y</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td><</td>
                    <td>Less than</td>
                    <td>x < y</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>>=</td>
                    <td>	Greater than or equal to</td>
                    <td>		x >= y</td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td><=</td>
                    <td>		Less than or equal to</td>
                    <td>		x <= y</td>
                  </tr>
            </tbody>
          </table>

          <h2>Python Logical Operators</h2>
            <p>Logical operators are used to combine conditional statements:</p>
            <table>
                <thead>
                  <tr>
                    <th></th>
                    <th>Operator</th>
                    <th>Description</th>
                    <th>Example</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>and </td>
                    <td>Returns True if both statements are true</td>
                    <td>x < 5 and  x < 10</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>or</td>
                    <td>Returns True if one of the statements is true</td>
                    <td>x < 5 or x < 4</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>not</td>
                    <td>Reverse the result, returns False if the result is true</td>
                    <td>not(x < 5 and x < 10)</td>
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
</body>
</html>