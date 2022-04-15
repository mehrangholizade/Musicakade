<?php
include "header.php";
include "database.php";

$artist_id = $_GET["artist_id"];

$album = $db->query("SELECT * FROM albums WHERE id = $artist_id")->fetch_assoc();
?>


<?php if($_SESSION["login_status"] != null && $_SESSION["login_status"] == true): ?>
    <div class="container">
        <div class="row justify-content-center">
            <h2 class="text-light">
                Edit album
            </h2>
            <hr class="text-light">
            <div class="row">
                <div class="col-3">
                    <?php include "admin_side.php"; ?>
                </div>
                <div class="col-9">
                    <div class="card">
                        <div class="card-body">
                            <form method="post" action="admin_edit_album_process.php" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col">
                                        <input type="text" value="<?php echo $album["name"];?>" name="name" class="form-control" placeholder="Album name">
                                    </div>
                                    <div class="col">
                                        <input type="file" name="image" class="form-control">
                                    </div>
                                </div>
                                <input type="hidden" value="<?php echo $album["id"];?>" name="id">
                                <button type="submit" class="btn btn-primary mt-3">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
else:
    header("location: index.php");
endif;
?>


<?php include "footer.php" ?>
