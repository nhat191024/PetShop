<div class="container mt-5">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item">Pet Category </li>
            <li class="breadcrumb-item active" aria-current="page"><?= getPetCategoryById($category)['name'] ?></li>
        </ol>
    </nav>
    <div class="row row-cols-4 gap-3 justify-content-center">
        <?php foreach ($listPet as $x) { ?>
            <div class="card p-2 bg-white" style="width: 18rem;">
                <a href="/?view=detailPet&details=<?= $x['id'] ?>" class="text-decoration-none">
                    <div class="card-img-top rounded-2 text-center d-flex flex-column justify-content-center align-items-center " style="height: 250px">
                        <img src="<?= $x['img_path'] ?>" class="" style="width: 200px">
                    </div>
                    <div class="card-body">
                        <h6 class="card-subtitle text-body-secondary"><?= getSourceById($x['source_id'])['name']  ?> <?= getPetCategoryById($x['category_id'])['name']  ?></h6>
                        <h5 class="card-title text-info"><?= $x['name'] ?></h5>
                        <h6 class="mt-3 d-flex justify-content-between m-0">
                            <span class=" text-info">
                                <?php
                                $a = strrev($x['price']);
                                $b = str_split($a, 3);
                                $c = implode(',', $b);
                                $d = strrev($c);
                                echo $d;
                                ?>₫
                            </span>
                        </h6>
                    </div>
                </a>
            </div>
        <?php } ?>
    </div>
</div>