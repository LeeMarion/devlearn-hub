<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Operators</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="icon" href="assets/images/lg.png">
</head>
<body>
    <div class="sidenav">
        <a href="coursemod"><h2>PHP</h2></a>
        <a href="pintro">PHP Introduction</a>
        <a href="pdata">PHP Data Types</a>
        <a href="plist">PHP Arrays</a>
        <a href="pvariables">PHP Variables</a>
        <a href="psyntax">PHP Syntax</a>
        <a href="poperators">PHP Operators</a>
        <a href="pcondition">PHP Condition</a>
        <a href="pwhile">PHP While Loops</a>
        <a href="pfor">PHP For Loops</a>
    </div>

    <div class="main">
        <h2>PHP Operators</h2>
        <p>Operators are used to perform operations on variables and values. </p>

            <h2>PHP Arithmetic Operators</h2>
            <p>Arithmetic operators are used to perform common mathematical operations.</p>
            <table>
                <thead>
                  <tr>
                    <th></th>
                    <th>Operator</th>
                    <th>Name</th>
                    <th>Result</th>
                    <th>Example</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>+</td>
                    <td>Addition</td>
                    <td>Sum of $x and $y</td>
                    <td>$x + $y</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>-</td>
                    <td>Subtraction</td>
                    <td>Difference of $x and $y</td>
                    <td>$x - $y</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>*</td>
                    <td>	Multiplication</td>
                    <td>Product of $x and $y</td>
                    <td>$x * $y</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>/</td>
                    <td>	Division</td>
                    <td>Quotient of $x and $y</td>
                    <td>	$x / $y</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>%</td>
                    <td>	Modulus</td>
                    <td>Remainder of $x divided by $y</td>
                    <td>	$x % $y</td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td>**</td>
                    <td>Exponentiation</td>
                    <td>Result of raising $x to the $y'th power</td>
                    <td>$x ** $y</td>
                  </tr>
            </tbody>
          </table>  

          <h2>PHP Comparison Operators</h2>
            <p>Comparison operators are used to compare two values (or variables). This is important in programming, because it helps us to find answers and make decisions.</p>
            <p>In the following example, we use the greater than operator (>) to find out if 5 is greater than 3:</p>
            <h3>Example:</h3>
            <p>int x = 5;</p>
            <p>int y = 3;</p>
            <p>System.out.println(x > y); // returns true, because 5 is higher than 3</p>
            <h3>Output:</h3>
            <p>true</p>

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
                    <td>Equal </td>
                    <td>	$x == $y</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>!=</td>
                    <td>Not equal</td>
                    <td>$x != $y</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>></td>
                    <td>	$x > $y</td>
                    <td>x > y</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td><</td>
                    <td>Less than</td>
                    <td>$x < $y</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>>=</td>
                    <td>	Greater than or equal to</td>
                    <td>		$x >= $y</td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td><=</td>
                    <td>		Less than or equal to</td>
                    <td>		$x <= $y</td>
                  </tr>
            </tbody>
          </table>

          <h2>PHP Logical Operators</h2>
            <p>You can also test for true or false values with logical operators.</p>
            <p>Logical operators are used to determine the logic between variables or values:</p>
            <table>
                <thead>
                  <tr>
                    <th></th>
                    <th>Operator</th>
                    <th>Name</th>
                    <th>Result</th>
                    <th>Example</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>&&  </td>
                    <td>And</td>
                    <td>True if both $x and $y are true</td>
                    <td>$x && $y</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>|| </td>
                    <td>Or</td>
                    <td>True if either $x or $y is true</td>
                    <td>$x || $y</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>!</td>
                    <td>	Not</td>
                    <td>True if $x is not true</td>
                    <td>!$x</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>and</td>
                    <td>	And</td>
                    <td>True if both $x and $y are true</td>
                    <td>$x and $y</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>or</td>
                    <td>Or</td>
                    <td>$x or $y</td>
                    <td>True if either $x or $y is true</td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td>xor</td>
                    <td>Xor</td>
                    <td>True if either $x or $y is true, but not both</td>
                    <td>$x xor $y</td>
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