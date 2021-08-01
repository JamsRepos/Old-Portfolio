<div class="hero-banner my-5 py-5 position-relative">
    <div class="container">
        <div class="row">
            <div class="col-12 col-xl-6">
                <div class="hero-banner-image position-relative overflow-hidden rounded shadow"></div>
            </div>
            <div class="col-12 col-xl-6 mt-5 pt-5 mt-xl-0 pt-xl-0">
                <h2 class="text-uppercase"><?= $full_name ?></h2>

                <p class="font-weight-bold"><?= $meta_description ?></p>

                <p class="my-4">A <?= calculateAge("28/02/1998") ?> year old Developer from the United Kingdom, who has a passion for creating online communites and business which thrive and possess a one of a kind experience for the end user.</p>

                <div class="hero-banner-buttons d-flex text-uppercase">
                    <a href="#" class="hero-banner-buttons-primary btn btn-lg shadow mr-3 font-weight-bold">Enquire</a>
                    <a href="#" class="btn-outline-light btn btn-lg shadow font-weight-bold">Resume</a>
                </div>
            </div>
        </div>
    </div>

    <div class="hero-banner-socials position-absolute text-uppercase font-weight-bold d-none d-md-flex">
        <?php include "includes/socials.php"; ?>
    </div>
</div>