<html>
<script type="text/javascript">
  
function uniteUnique(arr,arr1,arr2) {
 
 const array1 = [...arr];
 //document.write(array1);

 const array2 = arr1.concat(arr2);
// document.write(array2);

 const array3=array1.concat(array2);
  array3.sort();
document.write(array3 + "<br>");
const arrinx = [];
for(let i=1; i<=array3.length;i++){
   let j=i-1; 
        if(array3[i] === array3[j]){
          array3.splice(i,1);
        }
   
  }

document.write("<br>"+array3 + "<br>");

}
 


uniteUnique([1, 3, 2], [5, 2, 1, 4], [2, 1]);

</script>
</html>



