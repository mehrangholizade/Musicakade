<?php
include "header.php";
include "database.php";
session_start();
$artists = $db->query("SELECT * FROM artists");
?>


<?php if($_SESSION["login_status"] != null && $_SESSION["login_status"] == true): ?>
    <div class="container">
        <div class="row justify-content-center">
            <h2 class="text-light">
                Add new artist
            </h2>
            <hr class="text-light">
            <div class="row">
                <div class="col-3">
                    <?php include "admin_side.php"; ?>
                </div>
                <div class="col-9">
                    <div class="card">
                        <div class="card-body">
                            <form method="post" action="admin_add_artist_process.php" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col">
                                        <input type="text" name="name" class="form-control" placeholder="Artist name" aria-label="First name">
                                    </div>
                                    <div class="col">
                                        <input type="file" name="image" class="form-control">
                                    </div>
                                </div>
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
