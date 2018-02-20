<html>
<head>
<title>User Register</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script>
function getXmlHttpObject(){debugger;
	var xmlHttpRequest;
	if(window.ActiveXObject){
		xmlHttpRequest = new ActiveXObject("Microsoft.XMLHTTP");
	}else{
		xmlHttpRequest = new XMLHttpRequest();
	}
	return xmlHttpRequest;
}

 var myXmlHttpRequest = "";
 
function checkName(){
	 myXmlHttpRequest=getXmlHttpObject();
	 if (myXmlHttpRequest){
	 	//window.alert("ok");
	 	var url = "registerProcess.php?time=" + new Date() + "&username=" + $("username1").value;
		//var url = "registerProcess.php?username=" + $("username1").value;
	 	//window.alert(url);
	 	myXmlHttpRequest.open("get", url, true);
	 	myXmlHttpRequest.onreadystatechange=chuli;
	 	myXmlHttpRequest.send(null);
	 } else {
	 	window.alert("fail");
	 }
}

function chuli(){
 	if(myXmlHttpRequest.readyState == 4){
 	$("myres").value = myXmlHttpRequest.responseText;
 	}
}

function $(id){
	return document.getElementById(id);
}
</script>
</head>
<body>
<form action="???" method="post">
User Name: <input type="text" name="username1" id="username1"><input type="button" value="check Name" onclick="checkName();">
<input style="border-width: 0; color: red" type="text" id = "myres">
<br/>
Password:<input type="password" name="password"><br>
Email:<input type="text" name="email"><br>
<input type="submit" value="Rgister" >
</form>

<form action="???" method="post">
User Name: <input type="text" name="username2">
<br/>
Password:<input type="password" name="password"><br>
Email:<input type="text" name="email"><br>
<input type="submit" value="Rgister">
</form>
</body>
</html>