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
#### 26/7/2020
### Write Arrow Functions with Parameters
- Just like a regular function, you can pass arguments into an arrow function.

>// doubles input value and returns it
>const doubler = (item) => item * 2;
>If an arrow function has a single argument, the parentheses enclosing the argument may be omitted.
>
- the same function, without the argument parentheses
> const doubler = item => item * 2;
It is possible to pass more than one argument into an arrow function.
>
- multiplies the first input value by the second and returns it
>const multiplier = (item, multi) => item * multi;
>
### Use the Rest Parameter with Function Parameters
- In order to help us create more flexible functions, ES6 introduces the rest parameter for function parameters. With the rest parameter, you can create functions that take a variable number of arguments. These arguments are stored in an array that can be accessed later from inside the function.

-Check out this code:

>function howMany(...args) {
>  return "You have passed " + args.length + " arguments.";
>}
>console.log(howMany(0, 1, 2)); // You have passed 3 arguments.
>console.log(howMany("string", null, [1, 2, 3], { })); // You have passed 4 arguments.
>

-The rest parameter eliminates the need to check the args array and allows us to apply map(), filter() and reduce() on the parameters array.

>const sum = (...args) => {
>return args.reduce((a, b) => a + b, 0);
>}
>
### Use the Spread Operator to Evaluate Arrays In-Place
>const arr = [6, 89, 3, 45];
>const maximus = Math.max(...arr); // returns 89

- ...arr returns an unpacked array. In other words, it spreads the array. However, the spread operator only works in-place, like in an argument to a function or in an array literal. The following code will not work:

>const spreaded = ...arr;

#### Copy all contents of arr1 into another array arr2 using the spread operator.
>const arr1 = ['JAN', 'FEB', 'MAR', 'APR', 'MAY'];
>let arr2;

>arr2 = [...arr1];  // Change this line

> console.log(arr2);