<?php
    include "database.php";

    $name = $_POST["name"];

    if($_FILES["image"]["size"] > 10000000)
    {
        echo "Sorry,your file is too large.";
        header("admin_add_artist.php");
    }
    else
    {
        // part 1: Add info to database
        $image_name = "images/artists/" . $_FILES["image"]["name"];
        $db->query("INSERT INTO artists(name,image) VALUES('$name','$image_name')");

        // part 2: Move image file to folder
        move_uploaded_file($_FILES["image"]["tmp_name"],$image_name);
        header("location: admin_artists.php");
    }

?>


