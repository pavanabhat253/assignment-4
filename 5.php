<!DOCTYPE html>
<html>

<body>
    <h1>
        ARITHMETIC OPERATION
    </h1>
 
    <h3>1 : Addition</h3>
    <h3>2 : Subtraction</h3>
    <h3>3 : Multiplication</h3>
    <h3>4 : Division</h3>
     
   <form method="post">
        <table border="0">
            <tr>
                <td> <label>Enter Num1:</label><input type="text" name="num1"
                    value="" />
                </td>
            </tr>
 
            <tr>
            <td><label>Enter Num2:</label> <input type="text" name="num2" value=""/>
                </td>
            </tr>
 
            <tr>
                <td>
                   <label>Enter 1-4:</label> 
                <input type="text" name="option" value=""/>
                </td>
            </tr>
 
            <tr>
                <td> <input type="submit" name="submit"
                    value="Submit"/>
                </td>
            </tr>
        </table>
    </form></h2>
 
<?php
 

if(isset($_POST['submit'])) {
 $a = $_POST['num1'];
  $b = $_POST['num2'];
  $ch = $_POST['option'];
 
    switch($ch) {
        case 1:
 
            $r = $a + $b;
            echo " Addition of two numbers = " . $r ;
            break;
 
        case 2:
            $r = $a - $b;
            echo " Subtraction  of two numbers= " . $r ;
            break;
 
        case 3:
             $r = $a * $b;
            echo " Multiplication of two numbers = " . $r ;
            break;
 
        case 4:
             $r = $a / $b;
            echo " Division of two numbers = " . $r ;
            break;
 
        default:
            echo ("invalid option\n");
    }
     
    return 0;
}
?>
</body>
</html>