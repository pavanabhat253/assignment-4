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
$ori_num=$num;
$revnum=0;
$sum=0;$rem=0;
while($num>1)
{
$rem=$num%10;
$sum=$sum+$rem;
$revnum=($revnum*10)+$rem;
$num=($num/10);
}
echo "Reverse number of $ori_num is:$revnum";
echo "<br>";
echo "sum of digits of $ori_num is:$sum";
echo "<br>";
if($ori_num==$revnum){
echo "the number $ori_num  is palindrome";
}
else{
echo"the number $ori_num is not a palindrome";
}
}
?>
</body>
</html>