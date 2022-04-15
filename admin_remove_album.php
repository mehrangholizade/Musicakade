<?php
include "database.php";

$artist_id = $_GET["artist_id"];

$db->query("DELETE FROM albums WHERE id = $artist_id");

header("location: admin_albums.php");

?>