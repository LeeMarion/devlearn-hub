<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Kotlin Variables</title>
    <link rel="icon" href="assets/images/lg.png">
</head>
<body>
    <div class="sidenav">
        <a href="coursemod"><h2>Kotlin</h2></a>
        <a href="kintro">Kotlin Introduction</a>
        <a href="kdata">Kotlin Data Types</a>
        <a href="klist">Kotlin Arrays</a>
        <a href="kvariables">Kotlin Variables</a>
        <a href="ksyntax">Kotlin Syntax</a>
        <a href="koperators">Kotlin Operators</a>
        <a href="kcondition">Kotlin Condition</a>
        <a href="kwhile">Kotlin While Loops</a>
        <a href="kfor">Kotlin For Loops</a>
    </div>

    <div class="main">
        <h2>Kotlin Variables</h2>
        <p>Variables are containers for storing data values.</p>
        <p>To create a variable, use var or val, and assign a value to it with the equal sign (=):</p>
        <h3>Syntax:</h3>
        <p>var variableName = value</p>
        <p>val variableName = value</p>
        <h3>Example:</h3>
        <p>var name = "John"</p>
        <p>val birthyear = 1975</p>
        <p>println(name)</p>
        <p>println(birthyear)</p>
        <h3>Output</h3>
        <p>John</p>
        <p>1975</p>
        <p>Note: The difference between var and val is that variables declared with the var keyword can be changed/modified, while val variables cannot.</p>

        <h2>Variable Type</h2>
            <p>Unlike many other programming languages, variables in Kotlin do not need to be declared with a specified type (like "String" for text or "Int" for numbers, if you are familiar with those).</p>
            <p>To create a variable in Kotlin that should store text and another that should store a number, look at the following example:</p>
            <h3>Example:</h3>
            <p>var name = "John"  </p>
            <p>val birthyear = 1975 </p>
            <p>println(name)  </p>
            <p>println(birthyear)</p>
            <h3>Output:</h3>
            <p>John</p>
            <p>1975</p>

            <h3>Notes on val</h3>
        <p>When you create a variable with the val keyword, the value cannot be changed/reassigned.</p>
        <p>The following example will generate an error:</p>
        <h3>Example:</h3>
        <p>val name = "John"</p>
        <p>name = "Robert"  // Error (Val cannot be reassigned)</p>
        <p>println(name)</p>
        <h3>Output:</h3>
        <p>Error</p>

            

            <p>When using var, you can change the value whenever you want:</p>
            <h3>Example:</h3>
            <p>var name = "John"</p>
            <p>name = "Robert"</p>
            <p>println(name)</p>
            <h3>Output:</h3>
            <p>Robert</p>

            <h2>Display Variables</h2>
            <p>Like you have seen with the examples above, the println() method is often used to display variables.</p>
            <p>To combine both text and a variable, use the + character:</p>
            <h3>Example:</h3>
            <p>val name = "John"</p>
            <p>println("Hello " + name)</p>
            <h3>Output:</h3>
            <p>Hello John</p>
            <p>You can also use the + character to add a variable to another variable:</p>
            <h3>Example:</h3>
            <p>val firstName = "John "</p>
            <p>val lastName = "Doe"</p>
            <p>val fullName = firstName + lastName</p>
            <p>println(fullName)</p>
            <h3>Output:</h3>
            <p>John Doe</p>
            <p>For numeric values, the + character works as a mathematical operator:</p>
            <h3>Example:</h3>
            <p>val x = 5</p>
            <p>val y = 6</p>
            <p>println(x + y) // Print the value of x + y </p>
            <h3>Output:</h3>
            <p>11</p>


        <h2>Variable Names</h2>
            <p>A variable can have a short name (like x and y) or more descriptive names (age, sum, totalVolume).</p>
            <p>The general rule for Kotlin variables are:</p>
            <li>Names can contain letters, digits, underscores, and dollar signs</li>
            <li>Names should start with a letter</li>
            <li>Names can also begin with $ and _ (but we will not use it in this tutorial)</li>
            <li>Names are case sensitive ("myVar" and "myvar" are different variables)</li>
            <li>Names should start with a lowercase letter and it cannot contain whitespace</li>
            <li>Reserved words (like Kotlin keywords, such as var or String) cannot be used as names</li>
            <h3>camelCase variables</h3>
            <p>You might notice that we used firstName and lastName as variable names in the example above, instead of firstname and lastname. This is called "camelCase", and it is considered as good practice as it makes it easier to read when you have a variable name with different words in it, for example "myFavoriteFood", "rateActionMovies" etc.</p>
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