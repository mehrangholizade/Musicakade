<?php include "header.php";
include "database.php";

$album_id = $_GET["album"];
$album = $db->query("SELECT * FROM albums WHERE id = $album_id")->fetch_assoc();
$artist_id = $album["artist_id"];
$artist = $db->query("SELECT * FROM artists WHERE id = $artist_id")->fetch_assoc();
$musics = $db->query("SELECT * FROM musics WHERE album_id = $album_id");

?>

<div class="container">
    <div class="row mt-5">
        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="list-group">
                <h2 class="text-light">Songs</h2>
                <hr class="text-light">
                <?php if($musics->num_rows == 0): ?>
                    <div class="alert alert-primary" role="alert">
                        The musics of this singer have not been added to our website yet, please visit later.
                    </div>
                <?php else: ?>
                <?php foreach ($musics as $music): ?>
                <button class="list-group-item list-group-item-action" onclick="play_music('<?php echo $music["mp3"]; ?>')">
                <div class="row">
                    <div class="col-8">
                        <h6>
                            <?php echo $artist["name"];?>
                        </h6>
                        <p>
                            <?php echo $music["name"]?>
                        </p>
                    </div>
                    <div class="col-4">
                        <img class="img-fluid" src="<?php echo $music["image"];?>"
                    </div>
                </div>
                </button>
            <?php endforeach; ?>
            <?php endif; ?>
            </div>
    </div>
        <div class="col-lg-9 col-md-6 col-sm-12 mt-5">
            <center>
            <img src="<?php echo $album["image"] ?>" class="img-fluid rounded-3" width="300px" alt="...">
            <br>
            <audio id="music-player" class="mt-5" src="" controls></audio>
            </center>
        </div>
    </div>
</div>

<script>
    function play_music(music_path)
    {
        var music_player = document.getElementById("music-player");
        music_player.setAttribute("src", music_path);
        music_player.play();
    }
</script>

<?php include "footer.php" ?>
