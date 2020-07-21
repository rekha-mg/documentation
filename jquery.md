###Jquery
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