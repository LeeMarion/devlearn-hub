<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>C++ Syntax</title>
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
        <h2>C++ Syntax</h2>
        <p>Let's break up the following code to understand it better:</p>
        <h3>Example:</h3>
        <p>#include < iostream ></p>
        <p>using namespace std;</p>
        <p>int main() {</p>
        <p>  cout << "Hello World!";</p>
        <p>  return 0;</p>
        <p>}</p>
        <h3>Example explained</h3>
        <p>Line 1: #include <iostream> is a header file library that lets us work with input and output objects, such as cout (used in line 5). Header files add functionality to C++ programs.</p>
        <p>Line 2: using namespace std means that we can use names for objects and variables from the standard library.</p>
        <p>Line 3: A blank line. C++ ignores white space. But we use it to make the code more readable.</p>
        <p>Line 4: Another thing that always appear in a C++ program is int main(). This is called a function. Any code inside its curly brackets {} will be executed.</p>
        <p>Line 5: cout (pronounced "see-out") is an object used together with the insertion operator (<<) to output/print text. In our example, it will output "Hello World!".</p>
        <p>Note that: Every C++ statement ends with a semicolon ;</p>
        <p>Note: The body of int main() could also been written as:
            int main () { cout << "Hello World! "; return 0; }</p>
        <p>Remember: The compiler ignores white spaces. However, multiple lines makes the code more readable.</p>
        <p>Line 6: return 0 ends the main function.</p>
        <p>Line 7: Do not forget to add the closing curly bracket } to actually end the main function.</p>

        <h2>Omitting Namespace</h2>
            <p>A computer program is a list of "instructions" to be "executed" by a computer. In a programming language, these programming instructions are called statements.</p>
            <p>The following statement "instructs" the compiler to print the text "Hello World" to the screen:</p>
            <h3>Example:</h3>
            <p>#include < iostream ></p>
            <p>int main() {</p>
            <p>  std::cout << "Hello World!";</p>
            <p>  return 0;</p>
            <p>}</p>
            <h3>Output:</h3>
            <p>Hello World!</p>


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