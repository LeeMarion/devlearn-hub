<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Python Data Types</title>
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
        <h2>Built-in Data Types</h2>
        <p>In programming, data type is an important concept.

            Variables can store data of different types, and different types can do different things.
            
            Python has the following data types built-in by default, in these categories:</p>
        <h3>It is used for:</h3>
            <li>Text Type:	str</li>
            <li>Numeric Types:	int, float, complex</li>
            <li>Sequence Types:	list, tuple, range</li>
            <li>Mapping Type:	dict</li>
            <li>Set Types:	set, frozenset</li>
            <li>Boolean Type:	bool</li>
            <li>Binary Types:	bytes, bytearray, memoryview</li>
            <li>None Type:	NoneType</li>

        <h2>Getting the Data Type</h2>
            <p>You can get the data type of any object by using the type() function:</p>
            <h3>Example:</h3>
            <p>Print the data type of the variable x:</p>
            <p>x = 5</p>
            <p>print(type(x))</p>
            <h3>Output:</h3>
            <p>class 'int'</p>

        <h2>Setting the Data Type</h2>
            <p><p>You can get the data type of any object by using the type() function:</p>
            <h3>Example:</h3>
            <p>Print the data type of the variable x:</p>
            <table>
                <thead>
                  <tr>
                    <th></th>
                    <th>Example</th>
                    <th>Data Type</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>x = "Hello World"</td>
                    <td>str</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>x = 20</td>
                    <td>	int</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>x = 20.5</td>
                    <td>	float</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>x = 1j</td>
                    <td>	complex</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>x = ["apple", "banana", "cherry"]</td>
                    <td>	list</td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td>x = ("apple", "banana", "cherry")</td>
                    <td>	tuple</td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td>x = range(6)</td>
                    <td>	range</td>
                  </tr>
                  <tr>
                    <td>8</td>
                    <td>x = {"name" : "John", "age" : 36}</td>
                    <td>	dict</td>
                  </tr>
                  <tr>
                    <td>9</td>
                    <td>x = {"apple", "banana", "cherry"}</td>
                    <td>	set</td>
                  </tr>
                  <tr>
                    <td>10</td>
                    <td>x = frozenset({"apple", "banana", "cherry"})</td>
                    <td>	frozenset</td>
                  </tr>
                  <tr>
                    <td>11</td>
                    <td>x = True</td>
                    <td>		bool</td>
                  </tr>
                  <tr>
                    <td>12</td>
                    <td>x = b"Hello"</td>
                    <td>		bytes</td>
                  </tr>
                  <tr>
                    <td>13</td>
                    <td>x = bytearray(5)</td>
                    <td>		bytearray</td>
                  </tr>
                  <tr>
                    <td>14</td>
                    <td>x = memoryview(bytes(5))</td>
                    <td>		memoryview</td>
                  </tr>
                  <tr>
                    <td>15</td>
                    <td>x = None</td>
                    <td>		NoneType</td>
                  </tr>
                </tbody>
              </table>


              <h2>Setting the Specific Data Type</h2>
              <p><p>If you want to specify the data type, you can use the following constructor functions:</p>
              <table>
                  <thead>
                    <tr>
                      <th></th>
                      <th>Example</th>
                      <th>Data Type</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>x = str("Hello World")</td>
                      <td>str</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>x = int(20)</td>
                      <td>	int</td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>x = float(20.5)</td>
                      <td>	float</td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td>x = complex(1j)</td>
                      <td>	complex</td>
                    </tr>
                    <tr>
                      <td>5</td>
                      <td>x = list(("apple", "banana", "cherry"))</td>
                      <td>	list</td>
                    </tr>
                    <tr>
                      <td>6</td>
                      <td>x = tuple(("apple", "banana", "cherry"))</td>
                      <td>	tuple</td>
                    </tr>
                    <tr>
                      <td>7</td>
                      <td>x = range(6)</td>
                      <td>	range</td>
                    </tr>
                    <tr>
                      <td>8</td>
                      <td>x = dict(name="John", age=36)</td>
                      <td>	dict</td>
                    </tr>
                    <tr>
                      <td>9</td>
                      <td>x = set(("apple", "banana", "cherry"))</td>
                      <td>	set</td>
                    </tr>
                    <tr>
                      <td>10</td>
                      <td>x = frozenset(("apple", "banana", "cherry"))</td>
                      <td>	frozenset</td>
                    </tr>
                    <tr>
                      <td>11</td>
                      <td>x = bool(5)</td>
                      <td>		bool</td>
                    </tr>
                    <tr>
                      <td>12</td>
                      <td>x = bytes(5)</td>
                      <td>		bytes</td>
                    </tr>
                    <tr>
                      <td>13</td>
                      <td>x = bytearray(5)</td>
                      <td>		bytearray</td>
                    </tr>
                    <tr>
                      <td>14</td>
                      <td>x = memoryview(bytes(5))</td>
                      <td>		memoryview</td>
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