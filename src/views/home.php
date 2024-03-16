<div class="vh-100 container ">
    <div class="row row-cols-3 gap-2 justify-content-center mt-2">
        <?php foreach ($listPet as $x) { ?>
            <div class="card" style="width: 18rem;">
                <img src="../assets/banner1.png" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title"><?= $x['name'] ?></h5>
                    <h6 class="card-subtitle text-body-secondary">Category: <?= getPetCategoryById($x['category_id'])['name']  ?></h6>
                    <p class="card-text">
                        Source: <?= getSourceById($x['source'])['name']  ?></p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Price: <?= $x['price'] ?></li>
                </ul>
                <div class="card-body">
                    <a href="#" class="card-link">Buy</a>
                    <a href="/?view=detail&details=<?= $x['id']?>" class="card-link">Details</a>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
<?php require_once "./views/components/toasts.php"; ?>