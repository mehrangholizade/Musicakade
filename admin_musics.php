<?php
include "header.php";
include "database.php";

$musics = $db->query("SELECT * FROM musics");
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
                    <a href="admin_add_music.php" class="btn btn-success">
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
                        <?php foreach ($musics as $music): ?>
                            <tr>
                                <th scope="row">
                                    <?php echo $music["id"];?>
                                </th>
                                <td>
                                    <img src="<?php echo $music["image"];?>" class="img-fluid" width="100px">
                                </td>
                                <td>
                                    <?php echo $music["name"];?>
                                </td>
                                <td>
                                    <a class="btn btn-sm btn-info" href="admin_edit_music.php?album_id=<?php echo $music["id"];?>">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a class="btn btn-sm btn-danger" href="admin_remove_music.php?album_id=<?php echo $music["id"];?>">
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
