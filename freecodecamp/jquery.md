### Jquery
- jQuery is a fast, small, and feature-rich JavaScript library. It makes things like HTML document traversal and manipulation, event handling, animation.
-  Ajax much simpler with an easy-to-use API that works across a multitude of browsers. With a combination of versatility and extensibility, jQuery has changed the way that millions of people write JavaScript.
-One important thing to know is that jQuery is just a JavaScript library. All the power of jQuery is accessed via JavaScript, so having a strong grasp of JavaScript is essential for understanding, structuring, and debugging your code

>Note: The jQuery library exposes its methods and properties via two properties of the window object called jQuery and $. $ is simply an alias for jQuery and it's often employed because it's shorter and faster to write.

>For click and most other events, you can prevent the default behavior by calling event.preventDefault() in the event handler:
$( document ).ready(function() {
 
    $( "a" ).click(function( event ) {
         alert( "As you can see, the link no longer took you to jquery.com" );
         event.preventDefault();
     });
>});


>Important: You must place the remaining jQuery examples inside the ready event so that your code executes when the document is ready to be worked on.
-The addClass() method, which is one of the methods used to manage jQueryUI visual effects. addClass() method allow animating the changes to the CSS properties.

- addClass() method add specified classes to the matched elements while animating all style changes.

- Syntax
- Added In Version 1.0 of jQueryUI
- The addClass() method has its basic syntax as follows −

>.addClass( className [, duration ] [, easing ] [, complete ] )

#### jQuery Callback Functions
- JavaScript statements are executed line by line. However, with effects, the next line of code can be run even though the effect is not finished. This can create errors.
- JavaScript statements are always executed line by line. However, since JQuery effects require some time to finish, the following lines of code may get executed while the previous effects are still being executed. This is bound to create errors and overlapping of effects and animations.
To prevent this from occurring JQuery provides a callback function for each effects.
- A Callback() function is executed once the **effect is complete.** It is always written at as the last argument of the method.


> Typical 
> syntax: $(selector).hide(speed,callback);
>  >       $(selector).effect_function(speed, callback);
#### Events
- jQuery provides simple methods for attaching event handlers to selections. When an event occurs, the provided function is executed. Inside the function, this refers to the DOM element that initiated the event.
- The event handling function can receive an event object. This object can be used to determine the nature of the event, and to prevent the event’s default behavior.
* Setting Up Event Responses on DOM Elements
- jQuery makes it straightforward to set up event-driven responses on page elements. These events are often **triggered by the end user's interaction with the page**, such as when text is entered into a form element or the mouse pointer is moved. In some cases, such as the page load and unload events, the browser itself will trigger the event.

jQuery offers convenience methods for most native browser events. These methods — including .click(), .focus(), .blur(), .change(), etc. — are shorthand for jQuery's .on() method. **The on method is useful for binding the same handler function to multiple events**, when you want to provide data to the event handler, when you are working with custom events, or when you want to pass an object of multiple events and handlers.


#### Event setup using a convenience method
>$( "p" ).click(function() {
    console.log( "You clicked a paragraph!" );
>});

#### Equivalent event setup using the `.on()` method
>$( "p" ).on( "click", function() {
    console.log( "click" );
>});
- When each event has its own handler, you can pass an object into .on() with one or more key/value pairs, with the key being the event name and the value being the function to handle the event.
>$( "p" ).on({
    "click": function() { console.log( "clicked!" ); },
    "mouseover": function() { console.log( "hovered!" ); }
>});

#### Namespacing Events
- For complex applications and for plugins you share with others, it can be useful to namespace your events so you don't unintentionally disconnect events that you didn't or couldn't know about.

> Namespacing events
$( "p" ).on( "click.myNamespace", function() { /* ... */ } );
$( "p" ).off( "click.myNamespace" );
$( "p" ).off( ".myNamespace" ); // Unbind all events in the name
>

#### Tearing Down Event Listeners
- To remove an event listener, you use the .off() method and pass in the event type to off. If you attached a named function to the event, then you can isolate the event tear down to just that named function by passing it as the second argument.