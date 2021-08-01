
<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow py-4 mr-auto">
    <div class="container">
        <div class="mr-auto">
            <a class="navbar-brand" href="#">
                <h1 class="text-uppercase font-weight-bold"><?= $full_name ?></h1>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <?php include "includes/links.php" ?>
            </ul>
        </div>
    </div>
</nav>