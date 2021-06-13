<html>
<body>
<h2><p>random number is
<?php
$choice=rand(1,100);
echo $choice;
?>
</p>
<p>Square root is
<?php
echo round(sqrt($choice),5);
?></p></h2>
</body>
</html>