<?php
include "header.php";
include "database.php";
$artists = $db->query("SELECT * FROM artists")
?>

<div class="container">
    <div class="row mt-5">
            <h2 class="text-light">Artists</h2>
            <hr class="text-light">
            <?php foreach ($artists as $artist): ?>
                <div class="col-lg-2 col-md-4 col-sm-12">
                    <a href="albums.php?artist=<?php echo $artist["id"];?>" class="text-decoration-none">
                        <div class="card mt-4 bg-dark">
                            <img src="<?php echo $artist["image"];?>" class="card-img-top w-100 alt="<?php echo $artist["name"]; ?>">
                            <div class="card-body">
                                <h5 class="card-title text-light text-center"><?php echo $artist["name"]; ?></h5>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
    </div>
</div>

<?php include "footer.php" ?>