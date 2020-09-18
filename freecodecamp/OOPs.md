###cObject Oriented Programming:
-  Create a Method on an Object Objects can have a special type of property, called a method.

- Methods are properties that are functions. This adds different behavior to an object. Here is the duck example with a method:
```
let duck = {
  name: "Aflac",
  numLegs: 2,
  sayName: function() {return "The name of this duck is " + duck.name + ".";}
};
duck.sayName();
// Returns "The name of this duck is Aflac."
```


- A way to avoid these issues is with the this keyword:
```
let duck = {
  name: "Aflac",
  numLegs: 2,
  sayName: function() {return "The name of this duck is " + this.name + ".";}
};
```

#### Object Oriented Programming: Define a Constructor Function
- Constructors are functions that create new objects. They define properties and behaviors that will belong to the new object. Think of them as a blueprint for the creation of new objects.

- Here is an example of a constructor:
```
function Bird() {
  this.name = "Albert";
  this.color = "blue";
  this.numLegs = 2;
}
```

- Constructors are defined with a capitalized name to distinguish them from other functions that are not constructors.
- Constructors use the keyword this to set properties of the object they will create. Inside the constructor, this refers to the new object it will create.
- Constructors define properties and behaviors instead of returning a value as other functions might.


- Use a Constructor to Create Objects
```
let blueBird = new Bird();
blueBird.name; // => Albert
blueBird.color; // => blue
blueBird.numLegs; // => 2
```

#### Extend Constructors to Receive Arguments
```
function Bird(name, color) {
  this.name = name;
  this.color = color;
  this.numLegs = 2;
}
```
#### Verify an Object's Constructor with instanceof
```
let Bird = function(name, color) {
  this.name = name;
  this.color = color;
  this.numLegs = 2;
}

let crow = new Bird("Alexis", "black");

crow instanceof Bird; // => true
```

#### Use Prototype Properties to Reduce Duplicate Code

- Properties in the prototype are shared among ALL instances of Bird. Here's how to add numLegs to the Bird prototype:
```
Bird.prototype.numLegs = 2;
Now all instances of Bird have the numLegs property.

console.log(duck.numLegs);  // prints 2
console.log(canary.numLegs);  // prints 2
```

#### Change the Prototype to a New Object
- A more efficient way is to set the prototype to a new object that already contains the properties. This way, the properties are added all at once:
```
Bird.prototype = {
  numLegs: 2, 
  eat: function() {
    console.log("nom nom nom");
  },
  describe: function() {
    console.log("My name is " + this.name);
  }
};
```

