<html>
<script type="text/javascript">
  function sumFibs(num) {
  	var f1=0;
  	var f2=1;
  	var f3;
  	f3=f1+f2;
  	var arr= [];
  	arr.push(f1);
  	arr.push(f2);
  	var sum=0;

  	for(let i=2;i<=num;i++){
  	   f3=f1+f2;
  	   arr.push(f3);
  	   f1=f2;
  	   f2=f3;
  	}
  	document.write("<br>"+"array is now "+arr);
  	for(let i=1;i<arr.length;i++){
  		if(arr[i]%2 !== 0){
  			sum=sum+arr[i];
  		}

  	}
  	document.write("<br>"+"sum is now "+sum);
}

sumFibs(1000);

</script>
</html>
