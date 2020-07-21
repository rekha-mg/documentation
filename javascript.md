#### JavaScript
- JavaScript ("JS" for short) is a full-fledged dynamic programming language that can add interactivity to a website. It was invented by Brendan Eich (co-founder of the Mozilla project), the Mozilla Foundation, and the Mozilla Corporation.
- Variables are containers that store values. You start by declaring a variable with the var (less recommended, dive deeper for the explanation) or the let keyword, followed by the name you give to the variable:
- After declaring a variable, you can give it a value:
        myVariable = 'Bob';
- Also, you can do both these operations on the same line:
        let myVariable = 'Bob';
- You retrieve the value by calling the variable name:
        myVariable;
- After assigning a value to a variable, you can change it later in the code:
        let myVariable = 'Bob';
        myVariable = 'Steve';
Variable    Explanation Example
- String: This is a sequence of text known as a string.
-  To signify that the value is a string, enclose it in single quote marks. 
         let myVariable = 'Bob';
Number  This is a number. Numbers don't have quotes around them.    let myVariable = 10;
Boolean This is a True/False value. The words true and false are special keywords that don't need quote marks.  let myVariable = true;
Array   This is a structure that allows you to store multiple values in a single reference. let myVariable = [1,'Bob','Steve',10];
Refer to each member of the array like this:
myVariable[0], myVariable[1], etc.
Object  This can be anything. Everything in JavaScript is an object, and can be stored in a variable. Keep this in mind as you learn.   let myVariable = document.querySelector('h1');
All of the above examples too.