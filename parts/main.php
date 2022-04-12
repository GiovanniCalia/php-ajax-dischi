<main>
    <div class="container py-5">
        <div class="row justify-content-center"><?php
        foreach ($arr_dischi as $dischi){ ?>
            <div class="col-lg-2 col-md-4 col-sm-6 text-center mb-3 py-3 card_dark m-3">
                <img class="img-fluid mb-3" src="<?= $dischi["poster"]?>" alt="<?= $dischi["author"]?>">
                <h3 class="text-uppercase mb-3"><?= $dischi["title"]?></h3>
                <div><?= $dischi["author"]?></div>
                <div><?= $dischi["year"]?></div>
            </div><?php
        } ?>
        </div>
    </div>
</main>