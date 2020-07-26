#### 21/7/2020
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
>            let myVariable = 'Bob';
- Number  This is a number. Numbers don't have quotes around them.  
>    let myVariable = 10;
- Boolean This is a True/False value.
-  The words true and false are special keywords that don't need quote marks.  
>  let myVariable = true;
- Array   This is a structure that allows you to store multiple values in a single reference.
>   let myVariable = [1,'Bob','Steve',10];
- Refer to each member of the array like this:
- >  myVariable[0], myVariable[1], etc.
- Object  This can be anything. **Everything in JavaScript is an object**, and can be stored in a variable. Keep this in mind as you learn.
>    let myVariable = document.querySelector('h1');
#### Functions
- Functions are a way of packaging functionality that you wish to reuse. It's possible to define a body of code as a function that executes when you call the function name in your code. This is a good alternative to repeatedly writing the same code. You have already seen some uses of functions previously. For example:

> let myVariable = document.querySelector('h1');
> alert('hello!');

#### Events
- Real interactivity on a website requires events handlers. These are code structures that **listen for activity in the browser**, and run code in response. The most obvious example is handling the click event, which is fired by the browser when you click on something with your mouse.
-  To demonstrate this, enter the following into your console, then click on the current webpage:

>document.querySelector('html').onclick = function() {
    alert('Ouch! Stop poking me!');
>}
#### Comparison with the Strict Equality Operator
- Strict equality (===) is the counterpart to the equality operator (==). However, unlike the equality operator, which attempts to convert both values being compared to a common type, the strict equality operator does not perform a type conversion.

- If the values being compared have different types, they are considered unequal, and the strict equality operator will return false.

> Examples
3 ===  3   // true
3 === '3'  // false

#### Comparison with the Strict Inequality Operator
- The strict inequality operator (!==) is the logical opposite of the strict equality operator. It means "Strictly Not Equal" and returns false where strict equality would return true and vice versa. Strict inequality will not convert data types.

> Examples
3 !==  3   // false
3 !== '3'  // true
4 !==  3   // true
>

#### Build JavaScript ObjectsPassed
- You may have heard the term object before.

- Objects are similar to arrays, except that instead of using indexes to access and modify their data, you access the data in objects through what are called properties.

- Objects are useful for storing data in a structured way, and can represent real world objects, like a cat.
> var cat = {
  "name": "Whiskers",
  "legs": 4,
  "tails": 1,
  "enemies": ["Water", "Dogs"]
};
>

#### Accessing Object Properties with VariablesPassed
- Another use of bracket notation on objects is to access a property which is stored as the value of a variable. This can be very useful for iterating through an object's properties or when accessing a lookup table.

- Here is an example of using a variable to access a property:

> var dogs = {
>  Fido: "Mutt",  Hunter: "Doberman",  Snoopie: "Beagle"
>};
>var myDog = "Hunter";
>var myBreed = dogs[myDog];
>console.log(myBreed); // "Doberman"

#### Delete Properties from a JavaScript ObjectPassed
- We can also delete properties from objects like this:

> delete ourDog.bark;

-Example:

> var ourDog = {
  "name": "Camper",
  "legs": 4,
  "tails": 1,
  "friends": ["everything!"],
  "bark": "bow-wow"
};
> 
delete ourDog.bark;
> 
#### Testing Objects for PropertiesPassed
- Sometimes it is useful to check if the property of a given object exists or not. We can use the .hasOwnProperty(propname) method of objects to determine if that object has the given property name. .hasOwnProperty() returns true or false if the property is found or not.

- Example

>var myObj = {
  top: "hat",
  bottom: "pants"
};
myObj.hasOwnProperty("top");    // true
myObj.hasOwnProperty("middle"); // false
>

#### Accessing Nested ObjectsPassed
- The sub-properties of objects can be accessed by chaining together the dot or bracket notation.

- Here is a nested object:

>var ourStorage = {
  "desk": {
    "drawer": "stapler"
  },
  "cabinet": {
    "top drawer": { 
      "folder1": "a file",
      "folder2": "secrets"
    },
    "bottom drawer": "soda"
  }
};
ourStorage.cabinet["top drawer"].folder2;  // "secrets"
ourStorage.desk.drawer; // "stapler"
>
### Explore Differences Between the var and let Keywords
- One of the biggest problems with declaring variables with the var keyword is that you can overwrite variable declarations without an error.

>
var camper = 'James';
var camper = 'David';
console.log(camper);
// logs 'David'
>
- A new keyword called let was introduced in ES6 to solve this potential issue with the var keyword. If you were to replace var with let in the variable declarations of the code above, the result would be an error.

> let camper = 'James';
>let camper = 'David'; // throws an error

### Declare a Read-Only Variable with the const Keyword
- A common practice when naming constants is to use all uppercase letters, with words separated by an underscore.
- **Note:** It is common for developers to use uppercase variable identifiers for immutable values and lowercase or camelCase for mutable values (objects and arrays)

### Use Arrow Functions to Write Concise Anonymous Functions
In JavaScript, we often don't need to name our functions, especially when passing a function as an argument to another function. Instead, we create inline functions. We don't need to name these functions because we do not reuse them anywhere else.

- To achieve this, we often use the following syntax:

>const myFunc = function() {
  const myVar = "value";
  return myVar;
}
>
- ES6 provides us with the syntactic sugar to not have to write anonymous functions this way. Instead, you can use arrow function syntax:

> const myFunc = () => {
  const myVar = "value";
  return myVar;
}
>
- When there is no function body, and only a return value, arrow function syntax allows you to omit the keyword return as well as the brackets surrounding the code. This helps simplify smaller functions into one-line statements:

> const myFunc = () => "value";
This code will still return value by default.

### Write Arrow Functions with Parameters
- Just like a regular function, you can pass arguments into an arrow function.

>// doubles input value and returns it
const doubler = (item) => item * 2;
If an arrow function has a single argument, the parentheses enclosing the argument may be omitted.
>
// the same function, without the argument parentheses
const doubler = item => item * 2;
It is possible to pass more than one argument into an arrow function.
>
// multiplies the first input value by the second and returns it
const multiplier = (item, multi) => item * multi;
>
### Use the Rest Parameter with Function Parameters
- In order to help us create more flexible functions, ES6 introduces the rest parameter for function parameters. With the rest parameter, you can create functions that take a variable number of arguments. These arguments are stored in an array that can be accessed later from inside the function.

-Check out this code:

>function howMany(...args) {
  return "You have passed " + args.length + " arguments.";
}
console.log(howMany(0, 1, 2)); // You have passed 3 arguments.
console.log(howMany("string", null, [1, 2, 3], { })); // You have passed 4 arguments.
>

-The rest parameter eliminates the need to check the args array and allows us to apply map(), filter() and reduce() on the parameters array.

>const sum = (...args) => {
  return args.reduce((a, b) => a + b, 0);
}
>

