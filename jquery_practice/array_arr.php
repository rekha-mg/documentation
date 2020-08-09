<html>
<head>
	<script type="text/javascript">


function steamrollArray(arr) {
  var flattenedArray = [];

  // Create function that adds an element if it is not an array.
  // If it is an array, then loops through it and uses recursion on that array.
  var flatten = function(arg) {
    if (!Array.isArray(arg)) {
    	document.write(arg);
      flattenedArray.push(arg);
    } else {
      for (var a in arg) {
        flatten(arg[a]);
        document.write("<br>"+"--"+arg[a]);
      }
    }
  };

  // Call the function for each element in the array
  arr.forEach(flatten);
  document.write(flattenedArray);
}

steamrollArray([1, [2], [3, [[4]]]]);

</script>
</head>
<body>
	
</body>
</html>