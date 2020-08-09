

<html>
<head>
	<script type="text/javascript">

	function dropElements(arr, func) {
  // drop them elements.
  var times = arr.length;
  for (var i = 0; i < times; i++) {
    if (func(arr[0])) {
      break;
    } else {
      arr.shift();
    }
  }
  document.write(arr);
}

// test here
dropElements([1, 2, 3, 4], function(n) {
  return n >= 3;
});


	</script>
</head>
<body>
	
</body>
</html>