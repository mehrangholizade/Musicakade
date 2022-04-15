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
                Dashboard
            </h2>
            <hr class="text-light">
            <div class="row">
                <div class="col-3">
                    <?php include "admin_side.php"; ?>
                </div>
                <div class="col-9">
                    <a href="admin_add_artist.php" class="btn btn-success">
                        <i class="fas fa-plus"></i>
                    </a>
                    <br>
                    <table class="table table-dark table-striped">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Image</th>
                            <th scope="col">Name</th>
                            <th scope="col"></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($artists as $artist): ?>
                        <tr>
                            <th scope="row">
                                <?php echo $artist["id"];?>
                            </th>
                            <td>
                                <img src="<?php echo $artist["image"];?>" class="img-fluid" width="100px">
                            </td>
                            <td>
                                <?php echo $artist["name"];?>
                            </td>
                            <td>
                                <a class="btn btn-sm btn-info" href="admin_edit_artist.php?artist_id=<?php echo $artist["id"];?>">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a class="btn btn-sm btn-danger" href="admin_remove_artist.php?artist_id=<?php echo $artist["id"];?>">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                       <?php endforeach; ?>
                        </tbody>
                    </table>
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
