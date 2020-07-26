#### ES6: Create a Module Script
> <script type="module" src="filename.js"></script>
- A script that uses this module type can now use the import and export features you will learn about in the upcoming challenges.

#### ES6: Use export to Share a Code Block
>const add = (x, y) => {
>  return x + y;
>}

>export { add };
- You can export multiple things by repeating the first example for each thing you want to export, 
>export { add, subtract };
#### ES6: Reuse JavaScript Code Using import
- import allows you to choose which parts of a file or module to load. In the previous lesson, the examples exported add from the math_functions.js file. Here's how you can import it to use in another file:

> import { add } from './math_functions.js';
> 
#### ES6: Use * to Import Everything from a File

>import * as myMathModule from "./math_functions.js";

-The above import statement will create an object called myMathModule. This is just a variable name, you can name it anything. The object will contain all of the exports from math_functions.js in 

#### ES6: Create an Export Fallback with export default

-There is another export syntax you need to know, known as export default. Usually you will use this syntax if only one value is being exported from a file. It is also used to create a fallback value for a file or module.

* Below are examples using export default:
* // named function
>export default function add(x, y) {
 > return x + y;
>}

*// anonymous function
>export default function(x, y) {
>  return x + y;
>}

### ES6: Import a Default Export

>import add from "./math_functions.js";

#### ES6: Create a JavaScript Promise
- A promise in JavaScript is exactly what it sounds like - you use it to make a promise to do something, usually asynchronously. When the task completes, you either fulfill your promise or fail to do so. Promise is a constructor function, so you need to use the new keyword to create one. It takes a function, as its argument, with two parameters - resolve and reject. These are methods used to determine the outcome of the promise. The syntax looks like this:

>const myPromise = new Promise((resolve, reject) => {
>
>});

#### ES6: Complete a Promise with resolve and reject
- A promise has three states: pending, fulfilled, and rejected. The promise you created in the last challenge is forever stuck in the pending state because you did not add a way to complete the promise. The resolve and reject parameters given to the promise argument are used to do this. resolve is used when you want your promise to succeed, and reject is used when you want it to fail. These are methods that take an argument, as seen below.

>const myPromise = new Promise((resolve, reject) => {
>  if(condition here) {
>    resolve("Promise was fulfilled");
>  } else {
>    reject("Promise was rejected");
>  }
>});


#### ES6: Handle a Fulfilled Promise with then
- Promises are most useful when you have a process that takes an unknown amount of time in your code (i.e. something asynchronous), often a server request. When you make a server request it takes some amount of time, and after it completes you usually want to do something with the response from the server. 
- This can be achieved by using the then method. The then method is executed immediately after your promise is fulfilled with resolve.
-catch is the method used when your promise has been rejected. It is executed immediately after a promise's reject method is called. 
>const makeServerRequest = new Promise((resolve, reject) => {
>let responseFromServer = true;
> if(responseFromServer) {
>    resolve("We got the data");
> } 
> else {  
>    reject("Data not received");
> }
>});
>makeServerRequest.then(result => {
>  console.log(result);
>});

>makeServerRequest.catch(error => {
>  console.log(error);
>});