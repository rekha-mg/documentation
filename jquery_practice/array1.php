<html>
<head>
	<script type="text/javascript">

	/*function checkarr(arr){
    if(Array.isArray(arr)){
      document.write("is an array");
    }else{
      document.write("not an array");
    }

  }

  checkarr([2,1]);
  checkarr(["apple","banana"]);*/

/*var cloneArr = function(arr1){
    return arr1.splice(0);
};

document.write(cloneArr([1,2,[3]]));
document.write("<br>"+cloneArr(['p','o',['k']]));
console.log(cloneArr([1,2,[3,4]]));*/
//3. Write a JavaScript function to get the first element of an array. Passing a parameter 'n' will return the first 'n' elements of the array. Go to the editor
/*var getFirst= function(arr,n){
  document.write("<br>"+arr+"=>"+n);
  return arr.splice(0,n);
}

//console.log(getFirst([88,2,3,0]));
//console.log(getFirst([7, 9, 0, -2]));
console.log(getFirst([],3));
console.log(getFirst([7, 9, 0, -2],3));
console.log(getFirst([7, 9, 0, -2],6));
console.log(getFirst([7, 9, 0, -2],-3));
//console.log(getFirst(["aaa","msmsm",["psks"]]));*/

//4. Write a JavaScript function to get the last element of an array. Passing a parameter 'n' will return the last 'n' elements of the array. 
/*var last =  function(array, n) {
  if (array == null) 
    return void 0;
  if (n == null) 
     return array[array.length - 1];
  return array.slice(Math.max(array.length - n, 0));  
  };

console.log(last([7, 9, 0, -2]));
console.log(last([7, 9, 0, -2],3));
console.log(last([7, 9, 0, -2],6)); */

//5. Write a simple JavaScript program to join all elements of the following array into a string
/*var combine_ele=function(arr){
  console.log("<br>"+arr.join('+'));
}
combine_ele(["pink","green"]);*/


//6. Write a JavaScript program which accept a number as input and insert dashes (-) between each two even numbers. For example if you accept 025468 the output should be 0-254-6-8.
/*var res=[]; var sum; var res2=[];
var numberr = function(num){
   res[0]=num.toString();
  
   for(var i=0;i<1;i++){
    for(var j=0;j<res[0].length;j++){
    
      if(res[i][j]%2==0){
        res2.push(res[i][j]);
        res2.push('-');console.log(res2);
      }
        else{
        res2.push(res[i][j]);console.log(res2);
        }
      }
    }
    console.log("res2="+res2);
    var arrayOfNumbers = res2.map(Number);
    console.log("<br>"+"final value"+arrayOfNumbers);
   }
 
    numberr(312);
*/

  var num=window.prompt();
var str = num.toString();
var result = [str[0]];
  
for(var x=1; x<str.length; x++)
  {
    if((str[x-1]%2 === 0)&&(str[x]%2 === 0))
     {
      result.push('-', str[x]);
     }
    else
     {
      result.push(str[x]);
     }
  }
console.log(result.join(''));
//console.log(result);

</script>
</head>
<body>
	
</body>
</html>