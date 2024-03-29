<div class="mt-5 container-fluid d-flex flex-column justify-content-center align-items-center " style="height: 75vh">
    <div class="text-center">
        <h1>Welcome to PetShop</h1>
        <h3>Where you can explore the adorable world of pets</h3>
        <h3>Discover quality and unique products related to caring for and loving your four-legged family members 💖</h3>
    </div>
    <img src="../assets/banner3RemoveBg.png" alt="" class="w-50  h-75">
    </div>
<div class="vh-100 container ">
    <h2 class="text-center">Our Pets</h2>
    <div class="row row-cols-3 gap-2 justify-content-center mt-2">
        <?php foreach ($listPet as $x) { ?>
            <div class="card p-2 bg-body-tertiary" style="width: 18rem;">
                <a href="/?view=detail&details=<?= $x['id'] ?>" class="text-decoration-none">
                    <img src="../assets/banner1.png" class="card-img-top rounded-2 ">
                    <div class="card-body p-1 pt-2 p-0">
                        <h6 class="card-subtitle text-body-secondary"><?= getSourceById($x['source'])['name']  ?> <?= getPetCategoryById($x['category_id'])['name']  ?></h6>
                        <h5 class="card-title"><?= $x['name'] ?></h5>
                        <h6 class="mt-3 d-flex justify-content-between m-0">
                            <span class=" text-primary">$<?= $x['price'] ?></span>
                        </h6>
                    </div>
                </a>
            </div>
        <?php } ?>
    </div>
</div>
<?php require_once "./views/components/toasts.php"; ?>