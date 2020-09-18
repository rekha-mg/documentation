### ES6: Create Strings using Template Literals
- A new feature of ES6 is the template literal. This is a special type of string that makes creating complex strings easier.

- Template literals allow you to create multi-line strings and to use string interpolation features to create strings.

- Consider the code below:

>const person = {
> name: "Zodiac Hasbro",
>  age: 56
>};

- Template literal with multi-line and string interpolation
> const greeting = `Hello, my name is ${person.name}!
> I am ${person.age} years old.`;

>console.log(greeting); // prints
// Hello, my name is Zodiac Hasbro!
// I am 56 years old.

#### ES6: Write Concise Object Literal Declarations Using Object Property Shorthand

>const getMousePosition = (x, y) => ({
>  x: x,
>  y: y
>});

- Here is the same function from above rewritten to use this new syntax:

>const getMousePosition = (x, y) => ({ x, y });

- Use object property shorthand with object literals to create and return an object with name, age and gender properties.
>const createPerson = (name, age, gender) =>({name, age, gender });

### ES6: Write Concise Declarative Functions with ES6
>const person = {
>  name: "Taylor",
>  sayHello: function() {
>    return `Hello! My name is ${this.name}.`;
>  }
>};

- With ES6, You can remove the function keyword and colon altogether when defining functions in objects. Here's an example of this syntax:

>const person = {
>  name: "Taylor",
>  sayHello() {
>   return `Hello! My name is ${this.name}.`;
>  }
>};

-Refactor the function setGear inside the object bicycle to use the shorthand syntax described above.

>// Only change code below this line
>const bicycle = {
>  gear: 2,
>  setGear(newGear) {
>   this.gear = newGear;
>  }
>};
>// Only change code above this line
>bicycle.setGear(3);
>console.log(bicycle.gear);
#### ES6: Use class Syntax to Define a Constructor Function
>class Vegetable {
>  constructor(name){
>    this.name=name;
>  }
>}

>const carrot = new Vegetable('carrot');
>console.log(carrot.name); // Should display 'carrot'

#### ES6: Use getters and setters to Control Access to an Object
- You can obtain values from an object and set the value of a property within an object.

- These are classically called getters and setters.

- Getter functions are meant to simply return (get) the value of an object's private variable to the user without the user directly accessing the private variable.

- Setter functions are meant to modify (set) the value of an object's private variable based on the value passed into the setter function. This change could involve calculations, or even overwriting the previous value completely.
>class Thermostat {
 > constructor(fahrenheit) {
    this.fahrenheit = fahrenheit;
  }
  >
  get temperature() {
    return (5 / 9) * (this.fahrenheit - 32);
  }
  
  set temperature(celsius) {
    this.fahrenheit = (celsius * 9.0) / 5 + 32;
  }
}