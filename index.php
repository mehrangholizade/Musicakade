<?php include "header.php";
include "database.php";
$albums = $db-> query("SELECT * FROM albums ORDER BY time DESC LIMIT 6");
 ?>
    <div class="container" style="position: relative; width: 700px">
        <div class="row mt-5">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="images/sliders/1.jpg" class="d-block w-100" alt="1">
                        </div>
                        <div class="carousel-item">
                            <img src="images/sliders/2.jpg" class="d-block w-100" alt="2">
                        </div>
                        <div class="carousel-item">
                            <img src="images/sliders/3.jpg" class="d-block w-100" alt="3">
                        </div>
                        <div class="carousel-item">
                            <img src="images/sliders/4.jpg" class="d-block w-100" alt="4">
                        </div>
                        <div class="carousel-item">
                            <img src="images/sliders/5.jpg" class="d-block w-100" alt="5">
                        </div>
                        <div class="carousel-item">
                            <img src="images/sliders/6.jpg" class="d-block w-100" alt="6">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
     <h3 class="text-light text-center mt-3">Playlists</h3>
    <hr class="text-light">
    <div class="container">
        <div class="row mt-4">
            <div class="col-lg-2 col-md-4 col-sm-6 mt-3">
                <a href="#">
                    <img src="images/playlists/1.jpg" class="rounded-3" alt="1">
                </a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 mt-3">
                <a href="#">
                    <img src="images/playlists/2.jpg" class="rounded-3" alt="2">
                </a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 mt-3">
                <a href="#">
                    <img src="images/playlists/3.jpg" class=" rounded-3" alt="3">
                </a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 mt-3">
                <a href="#">
                <img src="images/playlists/4.jpg" class=" rounded-3" alt="4">
                </a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 mt-3">
                <a href="#" >
                <img src="images/playlists/5.jpg" class="rounded-3" alt="5">
                </a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 mt-3">
                <a href="#" >
                <img src="images/playlists/6.jpg" class="rounded-3" alt="6" >
                </a>
            </div>
        </div>
    </div>
    <h3 class="text-light text-center mt-3">New Albums</h3>
    <hr class="text-light">
    <div class="container">
        <div class="row">
            <?php foreach ($albums as $album) : ?>
            <div class="col-lg-2 col-md-4 col-sm-12">
                <div class="card mt-4 bg-dark">
                    <a href="musics.php?album=<?php echo $album["id"];?>" class="text-decoration-none">
                    <img src="<?php echo $album["image"];?>" class="card-img-top"alt="<?php echo $album["name"]; ?>">
                    </a>
                 </div>
                 <div class="card-body">
                     <h5 class="card-title text-center text-light"><?php echo $album["name"]; ?></h5>
                 </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
<?php include "footer.php" ?>