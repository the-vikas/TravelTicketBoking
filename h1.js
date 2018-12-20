<html>
<head>
<script type="text/javascript">
function validateform()
{ 
var x=document.getElementsByName("fname").value;
if(x==" ")
{
alert("name must be filled out");
x.focus();
}
else return false;
}
</script>
</head>
</html>

