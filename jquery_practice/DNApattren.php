<?php


?>

<html>
<head>
	<script type="text/javascript">
		function getPattren(str) {
			  //alert(str);
  		 var arr = [];
          var search = function(char){
          	switch(char){
          		case 'A':
          		   arr.push(["A","T"]);
          		   break;
          		case "T":
          		   arr.push(["T","A"]);
          		   break;
          		case "G":
          		   arr.push(["G","C"]);
          		   break;
          		case "C":
          		   arr.push(["C","G"]);
          		   break;         
          	}
          }

  		for(let i=0;i<str.lenght;i++){
  		 search(str[i]);
  		 //alert(str[i]);
  		}
      
 		alert(arr[0][0]); 
  	}
       

		
	</script>
</head>
<body>
	<input type="button" value ="click me"  onclick="getPattren('AAT');">
</body>
</html>