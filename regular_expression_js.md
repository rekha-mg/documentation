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

-let theEnding = "This is a never ending story";
-let storyRegex = /story$/;
-storyRegex.test(theEnding);
// Returns true
-let noEnding = "Sometimes a story will have to end";
-storyRegex.test(noEnding);
// Returns false

#### Match All Letters and Numbers
- The closest character class in JavaScript to match the alphabet is **\w**. This shortcut is **equal to [A-Za-z0-9_]**. This character class matches upper and lowercase letters plus numbers. Note, this character class also includes the underscore character (_).

-let longHand = /[A-Za-z0-9_]+/;
-let shortHand = /\w+/;
-let numbers = "42";
-let varNames = "important_var";
-longHand.test(numbers); // Returns true
-shortHand.test(numbers); // Returns true
-longHand.test(varNames); // Returns true
-shortHand.test(varNames); // Returns true

#### Match Everything But Letters and Numbers
- You can search for the opposite of the \w with \W. Note, the opposite pattern uses a capital letter. This shortcut is the same as [^A-Za-z0-9_].

- let shortHand = /\W/;
- let numbers = "42%";
- let sentence = "Coding!";
- numbers.match(shortHand); // Returns ["%"]
- sentence.match(shortHand); // Returns ["!"]

#### Match All Numbers
- The shortcut to look for digit characters is \d, with a lowercase d. This is equal to the character class [0-9], which looks for a single character of any number between zero and nine.

- Use the shorthand character class \d to count how many digits are in movie titles. Written out numbers ("six" instead of 6) do not count.
- let movieName = "2001: A Space Odyssey";
- let numRegex = /\d/g; // Change this line
- let result = movieName.match(numRegex).length;
Match All Non-Numbers
The last challenge showed how to search for digits using the shortcut \d with a lowercase d. You can also search for non-digits using a similar shortcut that uses an uppercase D instead.

The shortcut to look for **non-digit characters is \D**. This is equal to the character class [^0-9], which looks for a single character that is not a number between zero and nine.

Use the shorthand character class for non-digits \D to count how many non-digits are in movie titles.
let movieName = "2001: A Space Odyssey";
let noNumRegex = /\D/g; // Change this line
let result = movieName.match(noNumRegex).length;


Restrict Possible Usernames
Usernames are used everywhere on the internet. They are what give users a unique identity on their favorite sites.

You need to check all the usernames in a database. Here are some simple rules that users have to follow when creating their username.

- 1) Usernames can only use alpha-numeric characters.

- 2) The only numbers in the username have to be at the end. There can be zero or more of them at the end. Username cannot start with the number.

- 3) Username letters can be lowercase and uppercase.

4) Usernames have to be at least two characters long. A two-character username can only use alphabet letters as characters.

#### Change the regex userCheck to fit the constraints listed above.

let username = "JackOfAllTrades";
**let userCheck = /^[a-z]([0-9][0-9]+|[a-z]+\d*)$/i;**
let result = userCheck.test(username);



let username = "JackOfAllTrades";
let userCheck = /^[a-z]([0-9][0-9]+|[a-z]+\d*)$/i;
let result = userCheck.test(username);
Code Explanation
^ - start of input
[a-z] - first character is a letter
[0-9][0-9]+ - ends with two or more numbers
| - or
[a-z]+ - has one or more letters next
\d* - and ends with zero or more numbers
$ - end of input
i - ignore case of input

#### 29/7/20
#### Debugging: Catch Unclosed Parentheses, Brackets, Braces and Quotes
- let myArray = [1, 2, 3];
- let arraySum = myArray.reduce((previous, current )=>  previous + current);
- console.log(`Sum of array values is: ${arraySum}`);
"Sum of array values is: 6".