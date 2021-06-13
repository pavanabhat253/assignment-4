<html>
<body>
<form method="post">
Enter a number:<input type="text" name="num"/>
<button type="submit"> check</button>
</form>
<?php
if($_POST)
{
$num=$_POST['num'];
$total=0;
$x=$num;
while($x!=0)
{
$rem=$x%10;
$total=$total+$rem*$rem*$rem;
$x=$x/10;
}
if($num==$total)
{
echo "yes it is armstrong number";
}
else
{
echo "no it is not an armstrong number";
}
}
?>
</body>
</html>