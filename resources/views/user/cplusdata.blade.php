<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>C++ Data Types</title>
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
        <h2>C++ Data Types</h2>
        <p>In C++, data types are declarations for variables. This determines the type and size of data associated with variables. In C++, there are five basic data types: int, float, char, bool, and double</p>
        <h3>Example:</h3>
        <p>int myNum = 5;               // Integer (whole number)</p>
        <p>float myFloatNum = 5.99;     // Floating point number</p>
        <p>double myDoubleNum = 9.98;   // Floating point number</p>
        <p>char myLetter = 'D';         // Character</p>
        <p>bool myBoolean = true;       // Boolean</p>

        <h2>Basic Data Types</h2>
            <p>The data type specifies the size and type of information the variable will store. </p>

            <table>
                <thead>
                  <tr>
                    <th>Data Type</th>
                    <th>Size</th>
                    <th>Description</th>
                    <th>Example</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>int</td>
                    <td>2 or 4 bytes</td>
                    <td>Stores whole numbers, without decimals</td>
                    <td>1</td>
                  </tr>
                  <tr>
                    <td>float</td>
                    <td>4 bytes</td>
                    <td>Stores fractional numbers, containing one or more decimals. Sufficient for storing 6-7 decimal digits</td>
                    <td>1.99</td>
                </tr>
                  <tr>
                    <td>double</td>
                    <td>8 bytes</td>
                    <td>Stores fractional numbers, containing one or more decimals. Sufficient for storing 15 decimal digits</td>
                    <td>1.99</td>
                </tr>
                  <tr>
                    <td>char</td>
                    <td>1 byte</td>
                    <td>Stores a single character/letter/number, or ASCII values</td>
                    <td>'A'</td>
                  </tr>
                  <tr>
                    <td>boolean</td>
                    <td>1 byte</td>
                    <td>Stores true or false values</td>
                    <td>true or false</td>
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