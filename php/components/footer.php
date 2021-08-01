<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@15/dist/smooth-scroll.polyfills.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>
<script type="module" src="<?= $base_url ?>assets/js/base.js"></script>

<footer class="footer bg-dark shadow py-4 mt-5">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-4 footer-socials text-uppercase font-weight-bold d-none d-xl-block">
                <?php include "includes/socials.php"; ?>
            </div>

            <div class="col-12 col-xl-4">
                <a data-scroll href="#" class="text-decoration-none">
                    <h5 class="text-uppercase font-weight-bold mb-0 text-center"><?= $full_name ?></h5>
                </a>
            </div>

            <div class="col-4 footer-links flex-row list-unstyled d-none d-xl-flex">
                <?php include "includes/links.php" ?>
            </div>
        </div>
    </div>
</footer>