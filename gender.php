<html>
<head>
			
		
	<script>
    function myFun(form) {
        var radio1 = document.getElementById("a1").checked;
        var radio2 = document.getElementById("a2").checked;
        var radio3 = document.getElementById("a3").checked;
        if ((radio1=="") && (radio2=="") && (radio3=="")  ) {
            alert('You must select one !!');
            return false;
        }
        return true;
    }
</script>
</head>
<body>
<form name="form1" onsubmit="return myFun()">

	Gender:<br>
	<input type="radio" id="a1" name="grp1" value="Male">Male
							<input type="radio" id="a2" name="grp1" value="Female">Female
							<input type="radio" id="a3" name="grp1" value="Others">Others<br>
<button onclick="myFun()" id="btn1">Submit</button>
</body>
</html>