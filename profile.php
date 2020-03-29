<html>
<head>
</head>
<body>
	<script>
		function myFun()
		{
			var correct_way= /^[0-9]+$/;
			var a = document.getElementById("User_Name").value;
			
			if(a=="")
			{
				document.getElementById("Message").innerHTML="Please set your id";
				return false;
			}
			
			if(a.match(correct_way))
				true;
			else
			{
				document.getElementById("Message").innerHTML="Please use Number";
				return false;
			}
		} 
</script>
<form onsubmit="return myFun()">
User Id:<br>
<input type="Id" id="User_Name" value="">
<span id="Message"></span><br>
Set Picture:<button><u><a href="profile.php">Browse</a></u></button><br>
<input type="submit"  value="Submit"></input>
</form>
</body>
</html>