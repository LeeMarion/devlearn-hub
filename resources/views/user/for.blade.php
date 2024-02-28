<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Python For Loops</title>
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
        <h2>Python For Loops</h2>
        <p>A for loop is used for iterating over a sequence (that is either a list, a tuple, a dictionary, a set, or a string).</p>
        <p>This is less like the for keyword in other programming languages, and works more like an iterator method as found in other object-orientated programming languages.</p>
        <p>With the for loop we can execute a set of statements, once for each item in a list, tuple, set etc.</p>    
            <h3>Example:</h3>
            <p>Print each fruit in a fruit list:</p>
            <p>fruits = ["apple", "banana", "cherry"]</p>
            <p>for x in fruits:</p>
            <p>>>>print(x)</p>
            <h3>Output:</h3>
            <p>apple</p>
            <p>banana</p>
            <p>cherry</p>

        <h2>Looping Through a String</h2>
            <p>Even strings are iterable objects, they contain a sequence of characters:</p>
            <h3>Example:</h3>
            <p>Loop through the letters in the word "banana":</p>
            <p>for x in "banana":</p>
            <p>>>>print(x)</p>
            <h3>Output:</h3>
            <p>b</p>
            <p>a</p>
            <p>n</p>
            <p>a</p>
            <p>n</p>
            <p>a</p>

            <h2>The break Statement</h2>
            <p>With the break statement we can stop the loop before it has looped through all the items:</p>
            <h3>Example:</h3>
            <p>Exit the loop when x is "banana":</p>
            <p>fruits = ["apple", "banana", "cherry"]</p>
            <p>for x in fruits:</p>
            <p>>>>print(x)</p>
            <p>>>>if x == "banana":</p>
            <p>>>>>break</p>
            <h3>Output:</h3>
            <p>apple</p>
            <p>banana</p>

            <h2>The continue Statement</h2>
            <p>With the continue statement we can stop the current iteration of the loop, and continue with the next:</p>
            <h3>Example:</h3>
            <p>Do not print banana:</p>
            <p>fruits = ["apple", "banana", "cherry"]</p>
            <p>for x in fruits:</p>
            <p>>>>if x == "banana":</p>
            <p>>>>>continue</p>
            <p>>>>print(x)</p>
            <h3>Output:</h3>
            <p>apple</p>
            <p>cherry</p>

            <h2>The range() Function</h2>
            <p>To loop through a set of code a specified number of times, we can use the range() function,</p>
            <p>The range() function returns a sequence of numbers, starting from 0 by default, and increments by 1 (by default), and ends at a specified number.</p>
            <h3>Example:</h3>
            <p>Using the range() function:</p>
            <p>>>>print(x)</p>
            <h3>Output:</h3>
            <p>0</p>
            <p>1</p>
            <p>2</p>
            <p>3</p>
            <p>4</p>
            <p>5</p>
            <p>Note that range(6) is not the values of 0 to 6, but the values 0 to 5.</p>
            <p>The range() function defaults to 0 as a starting value, however it is possible to specify the starting value by adding a parameter: range(2, 6), which means values from 2 to 6 (but not including 6):</p>
            <h3>Example:</h3>
            <p>Using the start parameter:</p>
            <p>for x in range(2, 6):</p>
            <p>>>>print(x)</p>
            <h3>Output:</h3>
            <p>2</p>
            <p>3</p>
            <p>4</p>
            <p>5</p>
            <p>The range() function defaults to increment the sequence by 1, however it is possible to specify the increment value by adding a third parameter: range(2, 30, 3):</p>
            <h3>Example</h3>
            <p>Increment the sequence with 3 (default is 1):</p>
            <p>for x in range(2, 30, 3):</p>
            <p>>>>print(x)</p>
            <h3>Output:</h3>
            <p>2</p>
            <p>5</p>
            <p>8</p>
            <p>11</p>
            <p>14</p>
            <p>17</p>
            <p>20</p>
            <p>23</p>
            <p>26</p>
            <p>29</p>

            <h2>Else in For Loop</h2>
            <p>The else keyword in a for loop specifies a block of code to be executed when the loop is finished:</p>
            <h3>Example:</h3>
            <p>Print all numbers from 0 to 5, and print a message when the loop has ended:</p>
            <p>for x in range(6):</p>
            <p>>>>print(x)</p>
            <p>else:</p>
            <p>print("Finally finished!")</p>
            <h3>Output:</h3>
            <p>0</p>
            <p>1</p>
            <p>2</p>
            <p>3</p>
            <p>4</p>
            <p>5</p>
            <p>Finally finished!</p>
            <p>Note: The else block will NOT be executed if the loop is stopped by a break statement.</p>
            <h3>Example</h3>
            <p>Break the loop when x is 3, and see what happens with the else block:</p>
            <p>for x in range(6):</p>
            <p>>>>if x == 3: break</p>
            <p>>>>print(x)</p>
            <p>else:</p>
            <p>>>>print("Finally finished!")</p>
            <h3>Output:</h3>
            <p>0</p>
            <p>1</p>
            <p>2</p>

            <h2>Nested Loops</h2>
            <p>A nested loop is a loop inside a loop.</p>
            <p>The "inner loop" will be executed one time for each iteration of the "outer loop":</p>
            <h3>Example:</h3>
            <p>Print each adjective for every fruit:</p>
            <p>x = 41</p>
            <p>adj = ["red", "big", "tasty"]</p>
            <p>fruits = ["apple", "banana", "cherry"]</p>
            <p>for x in adj:</p>
            <p>>>>for y in fruits:</p>
            <p>>>>>print(x, y)</p>
            <h3>Output:</h3>
            <p>red apple</p>
            <p>red banana</p>
            <p>red cherry</p>
            <p>big apple</p>
            <p>big banana</p>
            <p>big cherry</p>
            <p>tasty apple</p>
            <p>tasty banana</p>
            <p>tasty cherry</p>

            <h2>The pass Statement</h2>
            <p>for loops cannot be empty, but if you for some reason have a for loop with no content, put in the pass statement to avoid getting an error.</p>
            <h3>Example:</h3>
            <p>for x in [0, 1, 2]:</p>
            <p>>>>pass</p>
            <h3>Output:</h3>
            <p># having an empty if statement like this, would raise an error without the pass statement</p>
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