<?php
include "header.php";
include "database.php";
session_start();
$albums = $db->query("SELECT * FROM albums");
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
                    <a href="admin_add_album.php" class="btn btn-success">
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
                        <?php foreach ($albums as $album): ?>
                            <tr>
                                <th scope="row">
                                    <?php echo $album["id"];?>
                                </th>
                                <td>
                                    <img src="<?php echo  $album["image"];?>" class="img-fluid" width="100px">
                                </td>
                                <td>
                                    <?php echo  $album["name"];?>
                                </td>
                                <td>
                                    <a class="btn btn-sm btn-info" href="admin_edit_album.php?artist_id=<?php echo $album["id"];?>">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a class="btn btn-sm btn-danger" href="admin_remove_album.php?artist_id=<?php echo $album["id"];?>">
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
