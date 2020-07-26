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

>arr2 = [...arr1]; 

> console.log(arr2);

#### Use Destructuring Assignment to Extract Values from Objects
>const HIGH_TEMPERATURES = {
>  yesterday: 75,
>  today: 77,
>  tomorrow: 80
>};
>const {today, tomorrow} = HIGH_TEMPERATURES;
- today is equal to 77 and tomorrow is equal to 80.

#### ES6: Use Destructuring Assignment to Assign Variables from Nested Objects
>const {today,tomorrow} = HIGH_TEMPERATURES;
> result will be ==> today is equal to 77 and tomorrow is equal to 80.

> const LOCAL_FORECAST = {
>  yesterday: { low: 61, high: 75 },
>  today: { low: 64, high: 77 },
>  tomorrow: { low: 68, high: 80 }
>};

> const { today: { low: lowToday, high: highToday } } = LOCAL_FORECAST;
- lowToday is equal to 64 and highToday is equal to 77.
- 
### ES6: Use Destructuring Assignment to Assign Variables from Arrays.

- One key difference between the spread operator and array destructuring is that the spread operator unpacks all contents of an array into a comma-separated list. Consequently, you cannot pick or choose which elements you want to assign to variables.

#### Destructuring an array lets us do exactly that:

>const [a, b] = [1, 2, 3, 4, 5, 6];
> console.log(a, b); // 1, 2
- The variable a is assigned the first value of the array, and b is assigned the second value of the array. We can also access the value at any index in an array with destructuring by using commas to reach the desired index:

> const [a, b,,, c] = [1, 2, 3, 4, 5, 6];
> console.log(a, b, c); // 1, 2, 5
- Use destructuring assignment to swap the values of a and b so that a receives the value stored in b, and b receives the value stored in a.
> let a = 8, b = 6;
> [a ,b ]=[b, a];

### ES6: Use Destructuring Assignment with the Rest Parameter to Reassign Array Elements
- In some situations involving array destructuring, we might want to collect the rest of the elements into a separate array.

- The result is similar to Array.prototype.slice(), as shown below:

> const [a, b, ...arr] = [1, 2, 3, 4, 5, 7];
> console.log(a, b); // 1, 2
> console.log(arr); // [3, 4, 5, 7]
- Use destructuring assignment with the rest parameter to perform an effective Array.prototype.slice() so that arr is a sub-array of the original array source with the first two elements omitted.
>const source = [1,2,3,4,5,6,7,8,9,10];
function removeFirstTwo(list) {
  "use strict";
  // Only change code below this line
 const [a, b,...arr] = list;
  // change code above this line
  return arr;
}
const arr = removeFirstTwo(source);
console.log(arr); 
>console.log(source);

