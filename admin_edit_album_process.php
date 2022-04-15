<?php
include "database.php";

$name = $_POST["name"];
$id = $_POST["id"];

if($_FILES["image"]["name"] == "")
{
    // user just changed the name not the image
    {
        $db->query("UPDATE albums SET name = '$name' WHERE id = $id");
        header("location: admin_albums");
    }
}
else
    // the file also sent
{
    if($_FILES["image"]["size"] > 10000000)
    {
        echo "Sorry,your file is too large.";
        header("admin_add_album.php");
    }
    else
    {
        // part 1: Add info to database
        $image_name = "images/artists/" . $_FILES["image"]["name"];
        $db->query("UPDATE albums SET name = '$name', image = '$image_name' WHERE id = $id");

        // part 2: Move image file to folder
        move_uploaded_file($_FILES["image"]["tmp_name"],$image_name);
        header("location: admin_albums.php");
    }
}


?>


