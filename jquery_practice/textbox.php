<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#lgn").click(function(){
       $("#div2").addClass("magic display");

     
  });
});
$(document).ready(function(){
$("#new").click(function(){
     $("#login").addClass("magic display"); 
      });
});



</script>
<style>
.display{
	width: 100%;
}
.magic{
	visibility: hidden;
	
}
</style>
</head>
<body>
<section id="login">
<div id="div1">
	<table>
						<tr>
							<td> <label> Username :</label> </td>
							<td> <input type="text" name="username" required="enter username"> </td>
						</tr>
						<tr>
							<td> <label> Password :</label></td>
							<td> <input type="text" name="pswd" required="enter password "> </td>
						</tr>
						<tr>
							<td> </td>
							<td> <input type="submit"> </td>
						</tr>
					</table>
</div>
</section>
<section>
<div id="div2">This is some text.
<table>
						<tr>
							<td> <label> Username :</label> </td>
							<td> <input type="text" name="username" required="enter username"> </td>
						</tr>
						<tr>
							<td> <label> email id :</label> </td>
							<td> <input type="text" name="email" required="enter email id"> </td>
						</tr>
						<tr>
							<td> <label> Password :</label></td>
							<td> <input type="text" name="pswd" required="enter password "> </td>
						</tr>
						<tr>
							<td> </td>
							<td> <input type="submit"> </td>
						</tr>
					</table>	

</div>
<br>
</section>
<button id="new">New User</button>
<button id="lgn">Login </button>

</body>
</html>
