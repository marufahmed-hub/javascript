<html>
<head>
</head>
<body>
	<script>
		function myFun()
		{
			var correct_way= /^[A-Za-z]+$/;
			var a = document.getElementById("User_Name").value;
			if(a=="")
			{
				document.getElementById("Message").innerHTML="Enter a Valid email address";
				return false;
			}
			
			if(a.match(correct_way))
				true;
			else
			{
				document.getElementById("Message").innerHTML="use alphabets";
				return false;
			}
		} 
</script>
<form onsubmit="return myFun()">
Name:<br>
<input type="text" id="User_Name" value=""> example@gmail.com
<span id="Message"></span><br>
<input type="submit"  value="Submit"></input>
</form>
</body>
</html>