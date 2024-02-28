<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Python List</title>
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
        <h2>List</h2>
        <p>Lists are used to store multiple items in a single variable.</p>
        <p>Lists are one of 4 built-in data types in Python used to store collections of data, the other 3 are Tuple, Set, and Dictionary, all with different qualities and usage.</p>
        <p>Lists are created using square brackets:</p>
        <h3>Example:</h3>
            <p>Create a List:</p>
            <p>thislist = ["apple", "banana", "cherry"]</p>
            <p>print(thislist)</p>
            <h3>Output:</h3>
            <p>['apple', 'banana', 'cherry']</p>
        <h2>List Items</h2>
            <p>List items are ordered, changeable, and allow duplicate values.</p>
            <p>List items are indexed, the first item has index [0], the second item has index [1] etc.</p>
         <h2>Ordered</h2>
            <p>When we say that lists are ordered, it means that the items have a defined order, and that order will not change.</p>
            <p>If you add new items to a list, the new items will be placed at the end of the list.</p>
            <p>Note: There are some list methods that will change the order, but in general: the order of the items will not change.</p>
         <h2>Python Collections (Arrays)</h2>
            <p>There are four collection data types in the Python programming language:</p>
            <li>List is a collection which is ordered and changeable. Allows duplicate members.</li>
            <li>Tuple is a collection which is ordered and unchangeable. Allows duplicate members.</li>
            <li>Set is a collection which is unordered, unchangeable*, and unindexed. No duplicate members.</li>
            <li>Dictionary is a collection which is ordered** and changeable. No duplicate members.</li>
            <p>*Set items are unchangeable, but you can remove and/or add items whenever you like.</p>
            <p>When choosing a collection type, it is useful to understand the properties of that type. Choosing the right type for a particular data set could mean retention of meaning, and, it could mean an increase in efficiency or security.</p>
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