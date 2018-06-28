<?php
include 'db.php';
?>
<?php
        $query="select * from myclouddata";
        //$query="select * from studentdata where course like '$courses'";
        $run=$con->query($query);
        $ints=0;
        if($run)
        {
        	echo "<table ><tr style='border:2px solid blue; background:black; color:white;'>";
        	echo "\n<b> <th>S.No.</td>  <th>Name</th>                               <th>Size</th>            <th>Date</th></b></tr><br>";
            while($row=$run->fetch_array())
            {
                $ints=$ints+1;
                $name=$row['name'];
         		$size=$row['size'];
                if($size<1024)
                {
                    $size=$size." Kb";
                }
                elseif($size>=1024 && $size<1048576)
                {
                    $size=$size/1024;
                    $size=$size." Mb";
                }
                elseif($size>=1048576)
                {
                    $size=$size/(1024*1024);
                    $size=$size." Gb";   
                }
         		$date=$row['date'];
         		$downloads="./upload/".$name;
         		$aaaa="aaaa";
                echo "\n<tr id='$aaaa' style='border:5px solid green;background:lightblue;' onmouseover='document.getElementById(aaaa).style.color=white;'><td>".$ints."</td><td>".$name. "</td>               <td style='color:red;'>" .$size." </td>        <td>". $date."</td>   <td> <a href='$downloads'>Download</a></td></tr>";                
            }
            echo "</table>";
        }
?>

<!DOCTYPE html>

<head>
<title></title>
</head>

<body>

<form action="upload_file.php" method="post" enctype="multipart/form-data">
<label for="file"><span>Filename:</span></label>
<input type="file" name="file" id="file" /> 
<br />
<input type="submit" name="submit" value="Submit" />
</form>

</body>
</html>