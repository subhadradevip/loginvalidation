<html>
<head>
<title>login</title>
<script src="http://code.jquery.com/jquery-1.9.1.js">
</script>
<script>
function validate()
{ 
var name=document.getElementById('name').value;
var password=document.getElementById('password').value;
var dataString='name +'+ name + '&password ='+password;
$.ajax({
         type:"post",
          url:"hello.php",
          data:dataString,
          cache:false,
          success:function(html)
{
         $('#msg').html(html);

}
});

   return false;
}
</script>
</head>
<body>
<form>
<center>
<table>
<tr>
<td>username:<input type="text" id="name"></td>
</tr>
<br/>
<tr>
<td>password:<input type="password" id="pwd"></td>
</tr>
</table>
</center>
<input type="button" value="submit" onclick=" return validate()"></br>
</form>
<p id="msg"></p>
</body>
</html>

