<html>
<head>
	<style>
	html,body{
		background:url(https://images.unsplash.com/photo-1562774053-701939374585?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1364&q=80);
		background-size: cover;
	}
</style>
<SCRIPT language="JavaScript1.2">
function openwindow()
{
	window.open("password.php","mywindow","menubar=1,resizable=1,width=730,height=550");
}
</script>
<script language="javascript">
function setstyle(x)
{
document.getElementById(x).style.background="#33FF33";
}
function setstyle1(z)
{
document.getElementById(z).style.background="white";
}
</script>
</head>
<body>
<link rel="stylesheet" href="st00.css">
<link rel="stylesheet" href="button.css">
<link rel="stylesheet" href="gmail.css">
<form name="f00001" action="w1.php"  method="POST" >
<table width="100" height="10" border="2" bordercolor="black" class="midle" aligin="left">
<tr>
<td>
<p class="mn">Rollno:</p>
</td>
<td>
<input type="text" name="s1"  id="roll" value="" onfocus="setstyle(this.id)" onblur="setstyle1(this.id)"  placeholder="enter user Roll no" required>
</td>
</tr>
<tr>
<td>
<p class="mn">Password:</p>
</td>
<td>
<input type="password" name="s2" id="pass" value="" onfocus="setstyle(this.id)" onblur="setstyle1(this.id)" placeholder="enter user password" required>
</td>
</tr>
<tr height="10px">
<td>
<input type="submit" name="ee" size="1" class="rc-button-submit"  value="Submit">
</td>
<td align="center">
<input type="reset" name="ee" size="1" class="rc-button-submit"  value="Refresh">
</td>
</tr>
</table>
</form>
</center>
</body>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="forgot">Forgot password?</span><a href="javascript: openwindow()"><span>click</span></a>
</html>


