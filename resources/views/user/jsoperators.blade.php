<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JavaScript Operators</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="icon" href="assets/images/lg.png">
</head>
<body>
    <div class="sidenav">
        <a href="coursemod"><h2>JavaScript</h2></a>
        <a href="jsintro">JavaScript Introduction</a>
        <a href="jsdata">JavaScript Data Types</a>
        <a href="jslist">JavaScript Arrays</a>
        <a href="jsvariables">JavaScript Variables</a>
        <a href="jssyntax">JavaScript Syntax</a>
        <a href="jsoperators">JavaScript Operators</a>
        <a href="jscondition">JavaScript Condition</a>
        <a href="jswhile">JavaScript While Loops</a>
        <a href="jsfor">JavaScript For Loops</a>
    </div>

    <div class="main">
        <h2>JavaScript Operators</h2>
        <p>Operators are used to perform operations on variables and values. </p>
        <p>In the example below, we use the + operator to add together two values:</p>
        <h3>Example:</h3>
            <p>let x = 5;</p>
            <p>let y = 2;</p>
            <p>let x = x + y;</p>
            <p>document.getElementById("demo").innerHTML = "The sum of x + y is: " + z;</p>
            <h3>Output:</h3>
            <p>The sum of x + y is: 7</p>

            <h2>JavaScript Arithmetic Operators</h2>
            <p>Arithmetic operators are used to perform common mathematical operations.</p>
            <table>
                <thead>
                  <tr>
                    <th></th>
                    <th>Operator</th>
                    <th>Name</th>
                    <th>Description</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>+</td>
                    <td>Addition</td>
                    <td>Adds together two values</td>
                    
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>-</td>
                    <td>Subtraction</td>
                    <td>Subtracts one value from another</td>
                    
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>*</td>
                    <td>	Multiplication</td>
                    <td>Multiplies two values</td>
                    
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>/</td>
                    <td>	Division</td>
                    <td>Divides one value by another</td>
                    
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>%</td>
                    <td>	Modulus</td>
                    <td>Returns the division remainder</td>
                    
                  </tr>
                  <tr>
                    <td>6</td>
                    <td>++</td>
                    <td>	Increment</td>
                    <td>Increases the value of a variable by 1</td>
                    
                  </tr>
                  <tr>
                    <td>7</td>
                    <td>--</td>
                    <td>	Decrement</td>
                    <td>Decreases the value of a variable by 1</td>
                    
                  </tr>
            </tbody>
          </table>  

          <h2>JavaScript Comparison Operators</h2>
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
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>==</td>
                    <td>Equal to</td>

                  </tr>
                  <tr>
                    <td>2</td>
                    <td>!=</td>
                    <td>Not equal</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>></td>
                    <td>Greater than</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td><</td>
                    <td>Less than</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>>=</td>
                    <td>	Greater than or equal to</td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td><=</td>
                    <td>		Less than or equal to</td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td>?</td>
                    <td>ternary operator</td>
                  </tr>
            </tbody>
          </table>

          <h2>Java Logical Operators</h2>
            <p>You can also test for true or false values with logical operators.</p>
            <p>Logical operators are used to determine the logic between variables or values:</p>
            <table>
                <thead>
                  <tr>
                    <th></th>
                    <th>Operator</th>
                    <th>Name</th>
                    <th>Description</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>&&  </td>
                    <td>Logical and</td>
                    <td>Returns True if both statements are true</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>|| </td>
                    <td>Logical or</td>
                    <td>Returns True if one of the statements is true</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>!</td>
                    <td>	Logical not</td>
                    <td>Reverse the result, returns false if the result is true</td>
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