<html>
<head>
	<script type="text/javascript">

function sumPrimes(num) {
	var n=2; var sum=0; var n1;
 	while(n<=num){
 		n1=2;
 		document.write("<br>"+"n="+n);
 		while(n1<=n){
 			document.write("<br>"+"n1="+n1);
 			if(n%n1 !==0){
 				document.write("<br>"+"prime number"+n);
 				document.write("<br>"+"---------------");
 			}
  	  		
  	  	n1++;
  	  }
  	  		
  	  	n++;
  	}
  	document.write("<br>"+"final sum "+sum);
}

sumPrimes(10);



	</script>
</head>
<body>
	
</body>
</html>