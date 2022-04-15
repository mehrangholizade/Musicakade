<?php
include "header.php";
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
