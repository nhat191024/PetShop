<div class="mt-5 container-fluid d-flex flex-column justify-content-center align-items-center " style="height: 75vh">
    <div class="text-center">
        <h1>Welcome to PetShop</h1>
        <h3>Where you can explore the adorable world of pets</h3>
        <h3>Discover quality and unique products related to caring for and loving your four-legged family members 💖</h3>
    </div>
    <img src="../assets/banner3RemoveBg.png" alt="" class="w-50  h-75">
</div>
<div class="vh-100 container">
    <h2 class="text-center text-info fw-bold">OUR PETS</h2>
    <div class="d-flex gap-3 py-2  justify-content-center ">
        <?php foreach($listPetCategory as $x) : ?>
            <a href="" class="btn btn-outline-info"><?= $x['name'] ?></a>
        <?php endforeach; ?>
    </div>
    <div class="row row-cols-4 gap-3 justify-content-center">
        <?php foreach ($listPet as $x) { ?>
            <div class="card p-2 bg-white" style="width: 18rem;">
                <a href="/?view=detail&details=<?= $x['id'] ?>" class="text-decoration-none">
                    <img src="../assets/banner1.png" class="card-img-top rounded-2">
                    <div class="card-body =">
                        <h6 class="card-subtitle text-body-secondary"><?= getSourceById($x['source'])['name']  ?> <?= getPetCategoryById($x['category_id'])['name']  ?></h6>
                        <h5 class="card-title text-info"><?= $x['name'] ?></h5>
                        <h6 class="mt-3 d-flex justify-content-between m-0">
                            <span class=" text-info">
                                <?php
                                $a = strrev($x['price']);
                                $b = str_split($a, 3);
                                $c = implode(',', $b);
                                $d = strrev($c);
                                echo $d;
                                ?>
                            </span>
                        </h6>
                    </div>
                </a>
            </div>
        <?php } ?>
    </div>
</div>
<?php require_once "./views/components/toasts.php"; ?>