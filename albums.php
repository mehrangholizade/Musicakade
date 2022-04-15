<?php
include "header.php";
include "database.php";

$artist_id = $_GET["artist"];
$albums = $db->query("SELECT * FROM albums WHERE artist_id = $artist_id");
?>

    <div class="container">
        <div class="row mt-5">
            <h2 class="text-light">Albums</h2>
            <hr class="text-light">
            <?php if($albums->num_rows == 0): ?>
                <div class="alert alert-primary" role="alert">
                    The albums of this singer have not been added to our website yet, please visit later.
                </div>
            <?php else: ?>
            <?php foreach ($albums as $album): ?>
                <div class="col-lg-2 col-md-4 col-sm-12">
                    <div class="card mt-4 bg-dark">
                        <a href="musics.php?album=<?php echo $album["id"];?>" class="text-decoration-none">
                            <img src="<?php echo $album["image"];?>" class="card-img-top"alt="<?php echo $album["name"]; ?>">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title text-center text-light"><?php echo $album["name"]; ?></h5>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>


<?php include "footer.php" ?>