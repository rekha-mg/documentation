- JavaScript has multiple ways to use regexes. One way to test a regex is using the .test() method. The .test() method takes the regex, applies it to a string (which is placed inside the parentheses), and returns true or false if your pattern finds something or not.

- let testStr = "freeCodeCamp";
- let testRegex = /Code/;
- testRegex.test(testStr);
- // Returns true

#### Regular Expressions: Match a Literal String with Different Possibilities
- let petString = "James has a pet cat.";
- let petRegex = /dog|cat|bird|fish/; // Change this line
- let result = petRegex.test(petString);

#### 28/7/2020

#### To search or extract a pattern more than once, you can use the g flag.
- let repeatRegex = /Repeat/g;
- testStr.match(repeatRegex);
- Returns ["Repeat", "Repeat", "Repeat"]

- let twinkleStar = "Twinkle, twinkle, little star";
- let starRegex = /Twinkle/gi; 
- let result = twinkleStar.match(starRegex);

#### Regular Expressions: Match Numbers and Letters of the Alphabet
- Create a single regex that matches a range of letters between h and s, and a range of numbers between 2 and 6. Remember to include the appropriate flags in the regex.
-let quoteSample = "Blueberry 3.141592653s are delicious.";
-let myRegex = /[h-s2-6]/ig; 
-let result = quoateSample.match(myRegex);

#### create a set of characters that you do not want to match. These types of character sets are called negated character sets. (^)
- Create a single regex that matches all characters that are **not a number or a vowel**. Remember to include the appropriate flags in the regex.
- let quoteSample = "3 blind mice.";
- let myRegex = /[^aeiou^0-9]/gi; 
- let result = quoteSample.match(myRegex); 

- Fix the regex /<.*>/ to return the HTML tag <h1> and not the text "<h1>Winter is coming</h1>". Remember the wildcard . in a regular expression matches any character.

- let text = "<h1>Winter is coming</h1>";
- let myRegex = /<.*?>/; // Change this line
- let result = text.match(myRegex);

- let regexp = /E+/; // returns E, EE, EEE patterns

#### Match Beginning String Patterns
-let firstString = "Ricky is first and can be found.";
-let firstRegex = /^Ricky/;
-firstRegex.test(firstString);
// Returns true
-let notFirst = "You can't find Ricky now.";
-firstRegex.test(notFirst);
// Returns false

#### Match Ending String Patterns

>let theEnding = "This is a never ending story";
let storyRegex = /story$/;
storyRegex.test(theEnding);
// Returns true
let noEnding = "Sometimes a story will have to end";
storyRegex.test(noEnding);
// Returns false

#### Match All Letters and Numbers
- The closest character class in JavaScript to match the alphabet is \w. This shortcut is equal to [A-Za-z0-9_]. This character class matches upper and lowercase letters plus numbers. Note, this character class also includes the underscore character (_).

>let longHand = /[A-Za-z0-9_]+/;
>let shortHand = /\w+/;
>let numbers = "42";
let varNames = "important_var";
longHand.test(numbers); // Returns true
shortHand.test(numbers); // Returns true
longHand.test(varNames); // Returns true
shortHand.test(varNames); // Returns true

