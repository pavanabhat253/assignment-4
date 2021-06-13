<html>
<body>     

<h2>
        Bill
    </h2>
     
    <form method="post">
        Enter the item names:<input type="text" name="names" placeholder="Enter the item names" required /><br><br>
        Enter the item price:<input type="text" name="price" placeholder="Enter the item price" required />
        <br><br>
        <input type="submit" name="submit" value="Store"/>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="reset" name="reset" value="Reset"/>
       
    </form>
<?php
     if($_POST)  
    {   
        $names = $_POST['names']; 
        $price = $_POST['price'];

        $nme = explode(',',$names);
        $x = count($nme);

        $prc = explode(',',$price);

       echo '<body style="background-color:black;color:yellow;"<table>
            <tr>
                <th>Item Name</th><th>Item Price</th>
            </tr>';
            for($i=0;$i<$x;$i++){
    echo "<tr>";
        echo "<td>{$nme[$i]}</td><td>{$prc[$i]}</td>";
    }
    echo "<tr>";
echo "</table>";

        echo '<br>';
        $total = 0;
        for($i=0; $i<$x;$i++)
        {
            $total = $total + $prc[$i];
        }

        echo 'Total Amount Is: '.$total;

        $mx= max($prc);
        $ky = array_search($mx, $prc);
        echo '<br>';
        echo 'Costliest item Is: '.$nme[$ky];

        $mn= min($prc);
        $key = array_search($mn, $prc);
        echo '<br>';
        echo 'Cheapest item Is: '.$nme[$key];
}     
?>
</body>
</html>