<?php
include "header.php";
include "database.php";


$artist_id = $_GET["artist_id"];

$artist = $db->query("SELECT * FROM artists WHERE id = $artist_id")->fetch_assoc();
?>

<?php if($_SESSION["login_status"] != null && $_SESSION["login_status"] == true): ?>
    <div class="container">
        <div class="row justify-content-center">
            <h2 class="text-light">
                Edit Artist
            </h2>
            <hr class="text-light">
            <div class="row">
                <div class="col-3">
                    <?php include "admin_side.php"; ?>
                </div>
                <div class="col-9">
                    <div class="card">
                        <div class="card-body">
                            <form method="post" action="admin_edit_artist_process.php" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col">
                                        <input type="text" value="<?php echo $artist["name"];?>" name="name" class="form-control" placeholder="Artist name" aria-label="First name">
                                    </div>
                                    <div class="col">
                                        <input type="file" name="image" class="form-control">
                                    </div>
                                </div>
                                <input type="hidden" value="<?php echo $artist["id"];?>" name="id">
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
