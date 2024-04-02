<div class="container-fluid d-flex gap-2 p-3">
    <div class="admin-side-container rounded-3">
        <ol class="list-group list-group-numbered">
            <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                    <div class="fw-bold">Pet</div>
                    Total Pets
                </div>
                <span class="badge text-bg-info text-white rounded-pill">
                    <?= count($listPet); ?>
                </span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                    <div class="fw-bold">Pet OutOfStock</div>
                    Total Pets OutOfStock
                </div>
                <span class="badge text-bg-primary rounded-pill">14</span>
            </li>
        </ol>
    </div>
    <div class="admin-main-container h-50 bg-white p-2 rounded-3">
        <button type="button" class="btn btn-outline-info fw-bold m-1 float-end" data-bs-toggle="modal" data-bs-target="#add<?= $view ?>">
            + Add <?= $view ?>
        </button>
        <table class="table table-hover caption-top table-borderless table-striped table-hover text-center align-middle">
            <caption class="fw-bold">List of Pets</caption>
            <thead>
                <tr>
                    <th scope="col">Pet Img</th>
                    <th scope="col">Pet Name</th>
                    <th scope="col">Pet ID</th>
                    <th scope="col">Price</th>
                    <th scope="col">Age</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Source</th>
                    <th scope="col">Category</th>
                    <th scope="col">Color</th>
                    <th scope="col">Vaccination</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody class=" fw-medium">
                <?php
                foreach ($listPet as $key => $x) { ?>
                    <tr>
                        <th style="width: 10%;" class="rounded-start-3"><img src="../<?= $x['img_path'] ?>" alt="" width="100%"></th>
                        <td><?= $x['name'] ?></td>
                        <td><?= $x['id'] ?></td>
                        <td>
                            <?php
                            $a = strrev($x['price']);
                            $b = str_split($a, 3);
                            $c = implode(',', $b);
                            $d = strrev($c);
                            echo $d;
                            ?>₫
                        </td>
                        <td><?= $x['age'] ?></td>
                        <td>
                            <?php if ($x['gender'] == 2) {
                                echo "Female";
                            } else {
                                echo "Male";
                            }     ?>
                        </td>
                        <td><?= getSourceById($x['source'])['name']  ?></td>
                        <td><?= getPetCategoryById($x['category_id'])['name']  ?></td>
                        <td><?= getColorById($x['color_id'])['name']  ?></td>
                        <td><?= $x['vaccination'] ?></td>
                        <td style="width: 10%;" class="rounded-end-3">
                            <button class="btn"><i class="fa-solid fa-eye" style="color: #74C0FC;"></i></button>
                            <button class="btn"><i class="fa-solid fa-pen-to-square" style="color: #FFD43B;"></i></button>
                            <button class="btn"><i class="fa-solid fa-trash" style="color: #ff0000;"></i></button>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>

<?php
require_once "./views/components/addModal.php";
?>