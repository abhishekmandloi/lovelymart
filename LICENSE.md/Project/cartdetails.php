<div class="my_cart">
            <div class="cart">
                <h1 style="font-size: 40px; color:blue;">My Cart</h1>
            </div>
            <table style="background: black; width: 100%;">
                <tr style="background: white; color:black; font-size: 30px;">
                    <th>
                        S.No.
                    </th>
                <th style="width: 100px;">
                Product Name</th>
                <th style="width: 70px;">
                Price</th>
                <th style="width: 70px;">
                Quantity</th>
                <th style="width: 80px;">
                    Total Price
                </th>
                <th style="width: 60%;">
                Image</th>
                </tr>
<?php
    include 'db.php';
        $username='';
        if(isset($_COOKIE['username']))
        {
            $username=$_COOKIE['username'];
        }
        
        $query="select distinct * from addtocart where username like '$username'";
        $run=$con->query($query);
        $ints=0;
        while($row=$run->fetch_array()):
    ?>
        <tr style="color:white; background: brown; padding:10px;">
            <td><?php $ints=$ints+1; echo $ints;?></td>
            <td style="padding: 10px;"><span id="Name<?php echo $ints;?>"><?php echo $row['prod_name'];?></span></td>
            <td style="padding: 10px;"><span id="Price<?php echo $ints;?>"><?php echo $row['price'];?></span></td>
            <td style="padding: 10px;"><span id="Quantity<?php echo $ints;?>"><?php echo $row['quantity'];?></span></td>
            <td style="padding: 10px;"><span id="Total<?php echo $ints;?>"><?php echo $row['totalprice'];?></span></td>
            <td style="text-align: center;padding:5px;"><img style="width:60%;text-align: center;" id="pic<?php echo $ints;?>" src="<?php echo $row['picdest'];?>"></td>
            <td><a href="lovely_payment.php"><button name="buynow" id="buynow" type="button" style="color:white;padding: 20px;background:lightgreen;font-weight: bold; font-size: 30px;cursor: pointer;" onclick="save('<?php echo "Name".$ints;?>','<?php echo "Price".$ints;?>','<?php echo "Quantity".$ints;?>','<?php echo "Total".$ints;?>','<?php echo "pic".$ints;?>');">Buy Now</button></a>
            </td>
            <td>
                <form action="dashboard.php" method="post">
                    <input type="text" name="prod_name" value="<?php echo $row['prod_name'];?>" hidden="">
                    <input type="text" name="quantity" value="<?php echo $row['quantity'];?>" hidden="">
                    
                    <button type="submit" name="removeproduct" style="background:red;color: white; cursor: pointer;">Remove Product</button>
                </form>
            </td>

        </tr>              
        
            <?php endwhile;?>  
        </table>
                    

<script>
function save(data1,data2,data3,data4,data5){
    alert(data1+" "+data2+" "+data3+" "+data4+" "+data5);
var Addname=document.getElementById(data1).innerHTML;
localStorage.setItem("Addname3", Addname); // save the item
var Addprice=document.getElementById(data2).innerHTML;
localStorage.setItem("Addprice3",Addprice);
var Addimage=document.getElementById(data5).src;
localStorage.setItem("Addimage3",Addimage);
var Addquantity=document.getElementById(data3).innerHTML;
localStorage.setItem("Addquantity3",Addquantity);
var Addtotal=document.getElementById(data4).innerHTML;
localStorage.setItem("Addtotal3",Addtotal);
}
</script>