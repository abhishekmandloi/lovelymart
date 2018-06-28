<?php
include 'db.php';
?>
<?php

$allowedExts = array("jpg", "jpeg", "gif", "png", "mp3", "mp4", "wma","pdf","txt","ppt","html","php","py","cpp","c");
//$extension = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);

if (1)

  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
    }
  else
    {
    echo "Upload: " . $_FILES["file"]["name"] . "<br />";
    echo "Type: " . $_FILES["file"]["type"] . "<br />";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";

    if (file_exists("upload/" . $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "upload/" . $_FILES["file"]["name"]);
      echo "Stored in: " . "upload/" . $_FILES["file"]["name"];
      $names=$_FILES["file"]["name"];
      $size=$_FILES["file"]["size"]/1024;
      $query="insert into myclouddata(name,size) values('$names','$size')";
        //$query="select * from studentdata where course like '$courses'";
        $run=$con->query($query);
        if(1)
        {
          header('index.php');
        }
      }
    }
  }
else
  {
  echo "Invalid file";
  }
?>