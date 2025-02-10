<section class="container page-contents">
    <div class="floating-img-mobile">
        <img src="<?= base_url()?>assets/img/chibi_dashboard.png" alt="Floating Image">
    </div>
    <div class="d-flex flex-row justify-content-around main-dashboard">
        <div class="d-flex flex-column justify-content-center">
            <div class="wow fadeInUp text-left greets" data-wow-delay="1s">
                <p><span style="color: #000;">Greetings,</span><br> Esteemed Visitors!</p>
            </div>
            <div class="wow fadeInUp text-left" data-wow-delay="1s" style="font-family: 'Delius', serif;">
                <p class="fs-5">may your exploration here be as delightful as a warm summer's eve.</p>
            </div>
        </div>
        <div class="floating-img">
            <img src="<?= base_url()?>assets/img/chibi_dashboard.png" alt="Floating Image">
        </div>
    </div>

    <hr style="border: 8px solid rgb(203, 90, 167); border-radius: 20px;"> <!-- border -->

    <div class="mt-4">
        <h1 class="uni-title fs-1 mt-5 wow fadeInUp" data-wow-delay="1s">Get to know me better!</h1>
        <p class="fs-5 wow fadeInUp" data-wow-delay="1s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam feugiat, quam sit amet dapibus
            tristique, urna
            ipsum pellentesque felis, sagittis mollis nulla elit eu nibh. Integer ac turpis et ligula mattis convallis
            at vel nunc. Praesent lacinia arcu nisl, in ullamcorper purus suscipit ut. Vivamus et dui ex. Phasellus eget
            feugiat leo. Nam laoreet, justo id sollicitudin bibendum, leo diam scelerisque nulla, ut convallis dolor
            orci et elit. Sed erat elit, convallis ut ultricies ut, dapibus eu est. Integer at nibh ut nisl feugiat
            varius.</p>
        <div class="d-grid gap-2 justify-content-end btn-desktop wow fadeInUp" data-wow-delay="1s">
            <div class="btn btn-primary btn-lg my-2" onclick="window.location.href='<?= base_url('about-dzkyhzl')?>'">
                More about me <i class="ri-arrow-right-s-fill"></i>
                </div>
        </div>
        <div class="d-grid gap-2 justify-content-center btn-mobile wow fadeInUp" data-wow-delay="1s">
            <div class="btn btn-primary btn-lg my-2" onclick="window.location.href='<?= base_url('about-dzkyhzl')?>'">
                More about me <i class="ri-arrow-right-s-line"></i></div>
        </div>
    </div>

    <div class="mt-4">
        <h1 class="uni-title fs-1 mt-5 wow fadeInUp" data-wow-delay="1s">Sneak Peek</h1>
        <div class="container text-center">
            <div class="row">
                <div class="col-sm my-3 wow fadeInUp" data-wow-delay="1s">
                    <i class="ri-brush-line fs-1"></i>
                    <h4 class="uni-title light-purple">Creating Art <br> Since</h4>
                    <p class="fs-2">2019</p>
                </div>
                <div class="col-sm my-3 wow fadeInUp" data-wow-delay="1s">
                    <i class="ri-palette-line fs-1"></i>
                    <h4 class="uni-title light-purple">Artworks <br> Completed</h4>
                    <p class="fs-2">12345</p>
                </div>
            </div>
        </div>
        <div class="container text-center">
            <div class="row">
                <div class="col-sm my-3 wow fadeInUp" data-wow-delay="1s">
                    <i class="ri-sketching fs-1"></i>
                    <h4 class="uni-title light-purple">Fav <br> Artstyle</h4>
                    <p class="fs-2">Anime</p>
                </div>
                <div class="col-sm my-3 wow fadeInUp" data-wow-delay="1s">
                    <i class="ri-smartphone-line fs-1"></i>
                    <h4 class="uni-title light-purple">Tools <br>I use</h4>
                    <p class="fs-2">Ibis Paint X</p>
                </div>
                <div class="col-sm my-3 wow fadeInUp" data-wow-delay="1s">
                    <i class="ri-thumb-up-line fs-1"></i>
                    <h4 class="uni-title light-purple">Commission <br> Status</h4>
                    <?php
                        $commission = 1;
                        if ($commission == 1) { ?>
                    <a href="<?= base_url('dzkyhzl-commission')?>" style="text-decoration: none;">
                        <p class="fs-2 green">OPEN</p>
                    </a>
                    <?php 
                        } else { ?>
                    <p class="fs-2 red">CLOSED</p>
                    <?php } ?>
                </div>
            </div>
        </div>
        <h4 class="uni-title light-purple mb-3 mt-2 wow fadeInUp" data-wow-delay="1s">A glimpse into my favorite art pieces ~ ♡</h4>
    </div>

    <!-- carousel start -->
    <div class="carousel-fluid wow fadeInUp" data-wow-delay="1s">
        <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?= base_url() ?>assets/img/pixai.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="<?= base_url() ?>assets/img/dmn.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="<?= base_url() ?>assets/img/1731747737_45aed5e2b8601026439c.jpg" class="d-block w-100"
                        alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="d-grid gap-2 justify-content-end btn-desktop mt-3 wow fadeInUp" data-wow-delay="1s">
            <div class="btn btn-primary btn-lg my-2"
                onclick="window.location.href='<?= base_url('dzkyhzl-artworks')?>'">More Artworks <i class="ri-arrow-right-s-fill"></i></div>
        </div>
        <div class="d-grid gap-2 justify-content-center btn-mobile mt-3 wow fadeInUp" data-wow-delay="1s">
            <div class="btn btn-primary btn-lg my-2"
                onclick="window.location.href='<?= base_url('dzkyhzl-artworks')?>'">More Artworks <i class="ri-arrow-right-s-fill"></i></div>
        </div>
    </div>
    <!-- carousel end -->
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/odometer.js/0.4.5/odometer.min.js"
    integrity="sha512-W/5PVFcV7i2BF+W7oc1dkJk2J7HGEXCYyvPoVVUyM4QT9wJHqRQ60vG5TieVJlaxpqFPPwfGU7aXW+sKk4ufaA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!--odometer min js -->

<script>
new WOW().init();
</script>