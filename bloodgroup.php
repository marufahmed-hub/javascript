<!DOCTYPE html>
<html>
<head>
	<title>Blood Group</title>
	<script>
    function myFun(form) {
        var radio1 = document.getElementById("a1").checked;
        var radio2 = document.getElementById("a2").checked;
        var radio3 = document.getElementById("a3").checked;
        var radio4 = document.getElementById("a4").checked;
        var radio5 = document.getElementById("a5").checked;
        var radio6 = document.getElementById("a6").checked;
        if ((radio1=="") && (radio2=="") && (radio3=="") && (radio4=="") && (radio5=="") && (radio6=="")  ) {
            alert('You must select one !!');
            return false;
        }
        return true;
    }
</script>
</head>
<body>
	<form name="form1" onsubmit="return myFun()">
		Select Your Blood Group:<br>
	
							<input type="radio" id="a1" name="grp1" value="A+">A+<br>
							<input type="radio" id="a2" name="grp1" value="A-">A-<br>
							<input type="radio" id="a3" name="grp1" value="B+">B-<br>
							<input type="radio" id="a4" name="grp1" value="B-">B+<br>
							<input type="radio" id="a5" name="grp1" value="O+">O+<br>
							<input type="radio" id="a6" name="grp1" value="O-">O-<br>
							<button onclick="myFun()" id="btn1">Submit</button></form>
</body>
</html>