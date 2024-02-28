<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>C Syntax</title>
    <link rel="icon" href="assets/images/lg.png">
</head>
<body>
    <div class="sidenav">
        <a href="coursemod"><h2>C</h2></a>
        <a href="cpintro">C Introduction</a>
        <a href="cpdata">C Data Types</a>
        <a href="cplist">C Arrays</a>
        <a href="cpvariables">C Variables</a>
        <a href="cpsyntax">C Syntax</a>
        <a href="cpoperators">C Operators</a>
        <a href="cpcondition">C Condition</a>
        <a href="cpwhile">C While Loops</a>
        <a href="cpfor">C For Loops</a> 
    </div>

    <div class="main">
        <h2>C Syntax</h2>
        <p>You have already seen the following code a couple of times in the first chapters. Let's break it down to understand it better:</p>
        <h3>Example:</h3>
        <p>#include < stdio.h ></p>
        <p>int main() {</p>
        <p>  printf("Hello World!");</p>
        <p>  return 0;</p>
        <p>}</p>
        <h3>Example explained</h3>
        <p>Line 1: #include <stdio.h> is a header file library that lets us work with input and output functions, such as printf() (used in line 4). Header files add functionality to C programs.</p>
        <p>Line 2: A blank line. C ignores white space. But we use it to make the code more readable.</p>
        <p>Line 3: Another thing that always appear in a C program is main(). This is called a function. Any code inside its curly brackets {} will be executed.</p>
        <p>Line 4: printf() is a function used to output/print text to the screen. In our example, it will output "Hello World!".</p>
        <p>Note that: Every C statement ends with a semicolon ;</p>
        <p>Note: The body of int main() could also been written as:
            int main(){printf("Hello World!");return 0;}</p>
        <p>Remember: The compiler ignores white spaces. However, multiple lines makes the code more readable.</p>
        <p>Line 5: return 0 ends the main() function.</p>
        <p>Line 6: Do not forget to add the closing curly bracket } to actually end the main function.</p>

        <h2>C Statements</h2>
            <p>A computer program is a list of "instructions" to be "executed" by a computer. In a programming language, these programming instructions are called statements.</p>
            <p>The following statement "instructs" the compiler to print the text "Hello World" to the screen:</p>
            <h3>Example:</h3>
            <p>printf("Hello World!");</p>
            <h3>Output:</h3>
            <p>Hello World!</p>
            <p>It is important that you end the statement with a semicolon ;</p>
            <p>If you forget the semicolon (;), an error will occur and the program will not run:   </p>

         <h2>Many Statements</h2>
            <p>Most C programs contain many statements. The statements are executed, one by one, in the same order as they are written:</p>
            <h3>Example:</h3>
            <p>printf("Hello World!");</p>
            <p>printf("Have a good day!");</p>
            <p>return 0;</p>
            <h3>Output:</h3>
            <p>Hello World!Have a good day!</p>
            <h3>Example explained</h3>
            <p>From the example above, we have three statements:</p>
            <li>printf("Hello World!");</li>
            <li>printf("Have a good day!");</li>
            <li>return 0;</li>
            <p>The first statement is executed first (print "Hello World!" to the screen).</p>
            <p>Then the second statement is executed (print "Have a good day!" to the screen).</p>
            <p>And at last, the third statement is executed (end the C program successfully).</p>


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