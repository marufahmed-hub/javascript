<html>
<head>
		<script>
    function myFun(form) {
        var a = document.getElementById("a1").value;
        
        if ( a=="") {
           document.getElementById("Message").innerHTML="Enter The  date";
				return false;
        }
        return true;
        header("location:date.php");
    }
</script>
</head>


<body>
Select Date :<br>
						
							<input id="a1" type="Date" name="rdate">
							<!-- <input type="text" size="2" name="date">/
							<input type="text" size="2" name="month">/
							<input type="text" size="2" name="year"> -->
							<br>
<button onclick="myFun()" id="btn1">Submit</button>
<span id="Message"></span><br>
</body>
</html>