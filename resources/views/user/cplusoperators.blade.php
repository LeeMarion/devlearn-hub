<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>C++ Operators</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="icon" href="assets/images/lg.png">
</head>
<body>
    <div class="sidenav">
        <a href="coursemod"><h2>C++</h2></a>
        <a href="cplusintro">C++ Introduction</a>
        <a href="cplusdata">C++ Data Types</a>
        <a href="cpluslist">C++ Arrays</a>
        <a href="cplusvariables">C++ Variables</a>
        <a href="cplussyntax">C++ Syntax</a>
        <a href="cplusoperators">C++ Operators</a>
        <a href="cpluscondition">C++ Condition</a>
        <a href="cpluswhile">C++ While Loops</a>
        <a href="cplusfor">C++ For Loops</a> 
    </div>

    <div class="main">
        <h2>C++ Operators</h2>
        <p>Operators are used to perform operations on variables and values. </p>
        <p>In the example below, we use the + operator to add together two values:</p>
        <h3>Example:</h3>
            <p>int x = 100 + 50;</p>
            <h3>Output:</h3>
            <p>150</p>
            <p>Although the + operator is often used to add together two values, like in the example above, it can also be used to add together a variable and a value, or a variable and another variable:</p>
            <h3>Example:</h3>
            <p>int sum1 = 100 + 50;        // 150 (100 + 50)</p>
            <p>int sum2 = sum1 + 250;      // 400 (150 + 250)</p>
            <p>int sum3 = sum2 + sum2;     // 800 (400 + 400)</p>
            <h3>Output:</h3>
            <p>150</p>
            <p>400</p>
            <p>800</p>

            <h2>Arithmetic Operators</h2>
            <p>Arithmetic operators are used to perform common mathematical operations.</p>
            <table>
                <thead>
                  <tr>
                    <th></th>
                    <th>Operator</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Example</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>+</td>
                    <td>Addition</td>
                    <td>Adds together two values</td>
                    <td>x + y</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>-</td>
                    <td>Subtraction</td>
                    <td>Subtracts one value from another</td>
                    <td>x - y</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>*</td>
                    <td>	Multiplication</td>
                    <td>Multiplies two values</td>
                    <td>	x * y</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>/</td>
                    <td>	Division</td>
                    <td>Divides one value by another</td>
                    <td>	x / y</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>%</td>
                    <td>	Modulus</td>
                    <td>Returns the division remainder</td>
                    <td>	x % y</td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td>++</td>
                    <td>	Increment</td>
                    <td>Increases the value of a variable by 1</td>
                    <td>	++x</td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td>--</td>
                    <td>	Decrement</td>
                    <td>Decreases the value of a variable by 1</td>
                    <td>	--x</td>
                  </tr>
            </tbody>
          </table>  

          <h2>C++ Comparison Operators</h2>
            <p>Comparison operators are used to compare two values (or variables). This is important in programming, because it helps us to find answers and make decisions.</p>
            <p>A list of all comparison operators:</p>
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
                    <td>Equal to</td>
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

          <h2>C++ Logical Operators</h2>
            <p>You can also test for true or false values with logical operators.</p>
            <p>Logical operators are used to determine the logic between variables or values:</p>
            <table>
                <thead>
                  <tr>
                    <th></th>
                    <th>Operator</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Example</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>&&  </td>
                    <td>Logical and</td>
                    <td>Returns True if both statements are true</td>
                    <td>x < 5 &&  x < 10</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>|| </td>
                    <td>Logical or</td>
                    <td>Returns True if one of the statements is true</td>
                    <td>x < 5 || x < 4</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>!</td>
                    <td>	Logical not</td>
                    <td>Reverse the result, returns false if the result is true</td>
                    <td>!(x < 5 && x < 10)</td>
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