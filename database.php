<?php


// create mysql object
$db = new mysqli("localhost", "id18685227_music", "4GoA1+>Zzwd1\OZS", "id18685227_musickade");

if ($db->connect_error)
{
    echo $db->connect_error;
}
else
{
    $db->query("SET CHARACTER SET utf8");
}
