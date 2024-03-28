<div class="vh-100 container ">
    <div class="row row-cols-3 gap-2 justify-content-center mt-2">
        <?php foreach ($listPet as $x) { ?>
            <div class="card p-2 bg-body-tertiary" style="width: 18rem;">
                <a href="" class="text-decoration-none">
                    <img src="../assets/banner1.png" class="card-img-top rounded-2 ">
                    <div class="card-body p-1 pt-2 p-0">
                        <h6 class="card-subtitle text-body-secondary"><?= getSourceById($x['source'])['name']  ?> <?= getPetCategoryById($x['category_id'])['name']  ?></h6>
                        <h5 class="card-title"><?= $x['name'] ?></h5>
                        <h6 class="mt-3 d-flex justify-content-between m-0">
                            <span class=" text-primary">$<?= $x['price'] ?></span>
                            <a href="#" class="rounded-circle p-2 bg-primary text-center" style="width: 13%" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="schedule a meet with pet">
                                <i class="fa-solid fa-calendar-days" style="color: #002e52;"></i>
                            </a>
                        </h6>
                    </div>
                </a>
            </div>
        <?php } ?>
    </div>
</div>
<?php require_once "./views/components/toasts.php"; ?>