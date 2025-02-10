<section class="container page-contents">
    <div class="mt-4">
        <h1 class="uni-title fs-1 mt-5 wow fadeInUp" data-wow-delay="1s"><i class="ri-sparkling-2-line"></i> Recent
            Artworks</h1>
        <div class="container mt-4">
            <div class="row mt-2">
                <?php
        foreach ($recent as $r) {
            if (!empty($r)) { ?>

                <div class="col-md-3 mb-4 wow fadeInUp" data-wow-delay="1s">
                    <a href="<?= base_url().$r->url ?>" data-lightbox="models"
                        data-title="<?= $r->name ?> (<?= date("d F Y", strtotime($r->created_at))?>)">
                        <img src="<?= base_url().$r->url ?>" class="img-thumbnail">
                    </a>
                    <div class="mt-2">
                        <label for="">&nbsp;<?= $r->name ?></label>
                    </div>
                </div>

                <?php
                } else { 
            ?>
                No recent artworks found.
                <?php
            }  
        }
        ?>
            </div>
        </div>
    </div>

    <hr style="border: 8px solid rgb(203, 90, 167); border-radius: 20px;"> <!-- border -->

    <div class="mt-4">
        <h1 class="uni-title fs-1 mt-5 wow fadeInUp" data-wow-delay="1s">All Artworks</h1>

        <p class="fs-5 wow fadeInUp" data-wow-delay="1s">Sort By Year</p>
        <div class="d-flex  flex-wrap justify-content-start gap-2">
            <?php 
            if (!empty($artworks)) { 
                $yr = ['2025', '2024', '2023', '2022', '2021','2020'];    
            ?>

            <button class="wow fadeInUp btn <?= is_null($active_year) ? 'btn-primary' : 'btn-outline-primary' ?> px-5" data-wow-delay="1s"
                onclick="sortByYear(null)">
                All
            </button>
            <button class="wow fadeInUp btn <?= ($yr[0] == $active_year) ? 'btn-primary' : 'btn-outline-primary' ?> px-4" data-wow-delay="1s"
                onclick="sortByYear(2025)"> 2025 </button>
            <button class="wow fadeInUp btn <?= ($yr[1] == $active_year) ? 'btn-primary' : 'btn-outline-primary' ?> px-4" data-wow-delay="1s"
                onclick="sortByYear(2024)"> 2024 </button>
            <button class="wow fadeInUp btn <?= ($yr[2] == $active_year) ? 'btn-primary' : 'btn-outline-primary' ?> px-4" data-wow-delay="1s"
                onclick="sortByYear(2023)"> 2023 </button>
            <button class="wow fadeInUp btn <?= ($yr[3] == $active_year) ? 'btn-primary' : 'btn-outline-primary' ?> px-4" data-wow-delay="1s"
                onclick="sortByYear(2022)"> 2022 </button>
            <button class="wow fadeInUp btn <?= ($yr[4] == $active_year) ? 'btn-primary' : 'btn-outline-primary' ?> px-4" data-wow-delay="1s"
                onclick="sortByYear(2021)"> 2021 </button>
            <button class="wow fadeInUp btn <?= ($yr[5] == $active_year) ? 'btn-primary' : 'btn-outline-primary' ?> px-4" data-wow-delay="1s"
                onclick="sortByYear(2020)"> 2020 </button>

            <?php } else { ?>
                <p>Whoops! A damn error occur.</p>
            <?php } ?>
        </div>

        <!-- art filter 2025 -->
        <?php if ($filter_res == null) : ?>
        <div class="container mt-4">
            <h4 class="uni-title light-purple wow fadeInUp" data-wow-delay="1s">2025</h4>
            <div class="row mt-4">
                <?php 
            $filter = array_filter($artworks, function ($art) {
                return $art->year == "2025";
            });
            if (!empty($filter)) {
                foreach ($filter as $art) { ?>
                <div class="col-md-3 mb-4 wow fadeInUp" data-wow-delay="1s">
                    <a href="<?= base_url().$art->url ?>" data-lightbox="models"
                        data-title="<?= $art->name ?> (<?= date("d F Y", strtotime($art->created_at))?>)">
                        <img src="<?= base_url().$art->url ?>" class="img-thumbnail">
                    </a>
                    <div class="mt-2">
                        <label for="">&nbsp;<?= $art->name ?></label>
                    </div>
                </div>
                <?php }
            } else { ?>
                <div class="col-12">
                    <p>No artworks found in 2025.</p>
                </div>
                <?php } ?>
            </div>
        </div>

        <!-- art filter 2024 -->
        <div class="container mt-4">
            <h4 class="uni-title light-purple wow fadeInUp" data-wow-delay="1s">2024</h4>
            <div class="row mt-4">
                <?php 
            $filter = array_filter($artworks, function ($art) {
                return $art->year == "2024";
            });
            if (!empty($filter)) {
                foreach ($filter as $art) { ?>
                <div class="col-md-3 mb-4 wow fadeInUp" data-wow-delay="1s">
                    <a href="<?= base_url().$art->url ?>" data-lightbox="models"
                        data-title="<?= $art->name ?> (<?= date("d F Y", strtotime($art->created_at))?>)">
                        <img src="<?= base_url().$art->url ?>" class="img-thumbnail">
                    </a>
                    <div class="mt-2">
                        <label for="">&nbsp;<?= $art->name ?></label>
                    </div>
                </div>
                <?php }
            } else { ?>
                <div class="col-12">
                    <p>No artworks found in 2024.</p>
                </div>
                <?php } ?>
            </div>
        </div>

        <!-- art filter 2023 -->
        <div class="container mt-4">
            <h4 class="uni-title light-purple wow fadeInUp" data-wow-delay="1s">2023</h4>
            <div class="row mt-4">
                <?php 
            $filter = array_filter($artworks, function ($art) {
                return $art->year == "2023";
            });
            if (!empty($filter)) {
                foreach ($filter as $art) { ?>
                <div class="col-md-3 mb-4 wow fadeInUp" data-wow-delay="1s">
                    <a href="<?= base_url().$art->url ?>" data-lightbox="models"
                        data-title="<?= $art->name ?> (<?= date("d F Y", strtotime($art->created_at))?>)">
                        <img src="<?= base_url().$art->url ?>" class="img-thumbnail">
                    </a>
                    <div class="mt-2">
                        <label for="">&nbsp;<?= $art->name ?></label>
                    </div>
                </div>
                <?php }
            } else { ?>
                <div class="col-12">
                    <p>No artworks found in 2023.</p>
                </div>
                <?php } ?>
            </div>
        </div>

        <!-- art filter 2022 -->
        <div class="container mt-4">
            <h4 class="uni-title light-purple wow fadeInUp" data-wow-delay="1s">2022</h4>
            <div class="row mt-4">
                <?php 
            $filter = array_filter($artworks, function ($art) {
                return $art->year == "2022";
            });
            if (!empty($filter)) {
                foreach ($filter as $art) { ?>
                <div class="col-md-3 mb-4 wow fadeInUp" data-wow-delay="1s">
                    <a href="<?= base_url().$art->url ?>" data-lightbox="models"
                        data-title="<?= $art->name ?> (<?= date("d F Y", strtotime($art->created_at))?>)">
                        <img src="<?= base_url().$art->url ?>" class="img-thumbnail">
                    </a>
                    <div class="mt-2">
                        <label for="">&nbsp;<?= $art->name ?></label>
                    </div>
                </div>
                <?php }
            } else { ?>
                <div class="col-12">
                    <p>No artworks found in 2022.</p>
                </div>
                <?php } ?>
            </div>
        </div>

        <!-- art filter 2021 -->
        <div class="container mt-4">
            <h4 class="uni-title light-purple wow fadeInUp" data-wow-delay="1s">2021</h4>
            <div class="row mt-4">
                <?php 
            $filter = array_filter($artworks, function ($art) {
                return $art->year == "2021";
            });
            if (!empty($filter)) {
                foreach ($filter as $art) { ?>
                <div class="col-md-3 mb-4 wow fadeInUp" data-wow-delay="1s">
                    <a href="<?= base_url().$art->url ?>" data-lightbox="models"
                        data-title="<?= $art->name ?> (<?= date("d F Y", strtotime($art->created_at))?>)">
                        <img src="<?= base_url().$art->url ?>" class="img-thumbnail">
                    </a>
                    <div class="mt-2">
                        <label for="">&nbsp;<?= $art->name ?></label>
                    </div>
                </div>
                <?php }
            } else { ?>
                <div class="col-12">
                    <p>No artworks found in 2021.</p>
                </div>
                <?php } ?>
            </div>
        </div>

        <!-- art filter 2020 -->
        <div class="container mt-4">
            <h4 class="uni-title light-purple wow fadeInUp" data-wow-delay="1s">2020</h4>
            <div class="row mt-4">
                <?php 
            $filter = array_filter($artworks, function ($art) {
                return $art->year == "2020";
            });
            if (!empty($filter)) {
                foreach ($filter as $art) { ?>
                <div class="col-md-3 mb-4 wow fadeInUp" data-wow-delay="1s">
                    <a href="<?= base_url().$art->url ?>" data-lightbox="models"
                        data-title="<?= $art->name ?> (<?= date("d F Y", strtotime($art->created_at))?>)">
                        <img src="<?= base_url().$art->url ?>" class="img-thumbnail">
                    </a>
                    <div class="mt-2">
                        <label for="">&nbsp;<?= $art->name ?></label>
                    </div>
                </div>
                <?php }
            } else { ?>
                <div class="col-12">
                    <p>No artworks found in 2020.</p>
                </div>
                <?php } ?>
            </div>
        </div>
        <?php else : ?>
        <div class="container mt-4">
            <div class="d-flex flex-row justify-content-center">
                <h4 class="uni-title light-purple wow fadeInUp" data-wow-delay="1s"><?= $active_year ?> </h4>&nbsp; <p class="wow fadeInUp" data-wow-delay="1s">- Showing total of <?= $count_art ?> data.</p>
            </div>
            <div class="row mt-2">
                <?php 
            $filter = array_filter($filter_res, function ($rs) {
                return $rs->year;
            });
            if (!empty($filter)) {
                foreach ($filter as $art) { ?>
                <div class="col-md-3 mb-4 wow fadeInUp" data-wow-delay="1s">
                    <a href="<?= base_url().$art->url ?>" data-lightbox="models"
                        data-title="<?= $art->name ?> (<?= date("d F Y", strtotime($art->created_at))?>)">
                        <img src="<?= base_url().$art->url ?>" class="img-thumbnail">
                    </a>
                    <div class="mt-2">
                        <label for="">&nbsp;<?= $art->name ?></label>
                    </div>
                </div>
                <?php }
            } else { ?>
                <div class="col-12">
                    <p>No artworks found in <?= $active_year?>.</p>
                </div>
                <?php } ?>
            </div>
        </div>
        <?php endif ; ?>
    </div>
</section>

<form id="frm_sort_year" name="frm_sort_year" method="post" action="<?= base_url('dzkyhzl-artworks')?>">
    <input type="hidden" name="filter_by_year" id="filter_by_year">
</form>

<script>
new WOW().init();

function sortByYear(year) {
    document.frm_sort_year.filter_by_year.value = year;

    console.log(year);

    document.frm_sort_year.submit();
}
</script>