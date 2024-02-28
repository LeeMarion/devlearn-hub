<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>JavaScript For Loops</title>
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
        <h2>JavaScript For Loop</h2>
        <p>When you know exactly how many times you want to loop through a block of code, use the for loop instead of a while loop:</p>    
            <h3>Syntax:</h3>
            <p>for (statement 1; statement 2; statement 3) {</p>
            <p>  // code block to be executed</p>
            <p>}</p>
            <p>Statement 1 is executed (one time) before the execution of the code block.</p>
            <p>Statement 2 defines the condition for executing the code block.</p>
            <p>Statement 3 is executed (every time) after the code block has been executed.</p>
            <p>The example below will print the numbers 0 to 4:</p>
            <h3>Example:</h3>
            <p>for (int i = 0; i < 5; i++) {</p>
            <p> text += "The number is " + i + "<br>";</p>
            <p>}</p>
            <h3>Output:</h3>
            <p>The number is 0</p>    
            <p>The number is 1</p>
            <p>The number is 2</p>
            <p>The number is 3</p>
            <p>The number is 4</p>
            <p>Example explained</p>
            <p>Statement 1 sets a variable before the loop starts (let i = 0).</p>
            <p>Statement 2 defines the condition for the loop to run (i must be less than 5). If the condition is true, the loop will start over again, if it is false, the loop will end.</p>
            <p>Statement 3 increases a value (i++) each time the code block in the loop has been executed.</p>


        <h2>The For In Loop</h2>
            <p>The JavaScript for in statement loops through the properties of an Object:</p>
            <h3>Syntax:</h3>
            <p>for (key in object) {</p>
            <p>  // code block to be executed</p>
            <p>}</p>
            <h3>Example:</h3>
            <p>const person = {fname:"John", lname:"Doe", age:25};</p>
            <p>let text = "";</p>
            <p>for (let x in person) {</p>
            <p>text += person[x];</p>
            <p>}</p>
            <h3>Output:</h3>
            <p>John Doe 25</p>
            <h3>Example Explained</h3>
            <li>The for in loop iterates over a person object</li>
            <li>Each iteration returns a key (x)</li>
            <li>The key is used to access the value of the key</li>
            <li>The value of the key is person[x]</li>

            <h2>For In Over Arrays</h2>
            <p>The JavaScript for in statement can also loop over the properties of an Array:</p>
            <h3>Syntax:</h3>
            <p>for (variable in array) {</p>
            <p>code</p>
            <p>}</p>
            <h3>Example:</h3>
            <p>const numbers = [45, 4, 9, 16, 25];</p>
            <p>let txt = "";</p>
            <p>for (let x in numbers) {</p>
            <p> txt += numbers[x];</p>
            <p>}</p>
            <h3>Output:</h3>
            <p>45</p>
            <p>4</p>
            <p>9</p>
            <p>16</p>
            <p>25/<p>
            <p>Do not use for in over an Array if the index order is important.</p>
            <p>The index order is implementation-dependent, and array values may not be accessed in the order you expect.</p>
            <p>It is better to use a for loop, a for of loop, or Array.forEach() when the order is important.</p>

            <h2>Array.forEach()</h2>
            <p>The forEach() method calls a function (a callback function) once for each array element.</p>
            <h3>Example:</h3>
            <p>const numbers = [45, 4, 9, 16, 25];</p>
            <p>let txt = "";</p>
            <p>numbers.forEach(myFunction);</p>
            <p>function myFunction(value, index, array) {</p>
            <p> txt += value;</p>
            <p>}</p>
            <h3>Output:</h3>
            <p>45</p>
            <p>4</p>
            <p>9</p>
            <p>16</p>
            <p>25/<p>
            <p>Note that the function takes 3 arguments:</p>
            <li>The item value</li>
            <li>The item index</li>
            <li>The array itself</li>

            <h2>The For Of Loop</h2>
            <p>The JavaScript for of statement loops through the values of an iterable object.</p>
            <p>It lets you loop over iterable data structures such as Arrays, Strings, Maps, NodeLists, and more:</p>
            <h3>Syntax:</h3>
            <p>for (variable of iterable) {</p>
            <p> // code block to be executed</p>
            <p>}</p>
            <p>variable - For every iteration the value of the next property is assigned to the variable. Variable can be declared with const, let, or var.</p>
            <p> iterable - An object that has iterable properties.</p>

            <h2>Looping over an Array</h2>
            <h3>Example:</h3>
            <p>const cars = ["BMW", "Volvo", "Mini"];</p>
            <p>let text = "";</p>
            <p>for (let x of cars) {</p>
            <p>text += x;</p>
            <p>}</p>
            <h3>Output:</h3>
            <p>BMW</p>
            <p>Volvo</p>
            <p>Mini</p>

            <h2>Looping over a String</h2>
            <h3>Example:</h3>
            <p>let language = "JavaScript";</p>
            <p>let text = "";</p>
            <p>for (let x of language) {</p>
            <p>text += x;</p>
            <p>}</p>
            <h3>Output:</h3>
            <p>J</p>
            <p>a</p>
            <p>v</p>
            <p>a</p>
            <p>S</p>
            <p>c</p>
            <p>r</p>
            <p>i</p>
            <p>p</p>
            <p>t</p>

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