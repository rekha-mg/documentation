<html>
<head>
	<script type="text/javascript">

   let add = function(a,b){
   	return a+b;
   };

   let multiply = function(a,b){
   	return a*b;
   };

   let calc=function(num1,num2, callback){
   	return callback(num1,num2);
   };


   document.write(calc(3,3,add));

   document.write("<br>"+calc(3,3,multiply));

   document.write("<br>"+calc(3,2,function(a,b) { 
   return a-b;
   })); // ananomus function

	</script>
</head>
<body>
	
</body>
</html>