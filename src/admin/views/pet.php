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
        <div class="d-flex  justify-content-between px-5 pb-3">
            <form class="d-flex w-25" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-info" type="submit">Search</button>
            </form>
            <button type="button" class="btn btn-outline-info fw-bold m-1 float-end" data-bs-toggle="modal" data-bs-target="#add<?= $view ?>">
                + Add <?= $view ?>
            </button>
        </div>
        <table class="table table-hover caption-top table-borderless table-striped table-hover text-center align-middle">
            <thead>
                <tr>
                    <th scope="col" class="table-bg rounded-start-3">Pet Img</th>
                    <th scope="col" class="table-bg">Pet Name</th>
                    <th scope="col" class="table-bg">Pet ID</th>
                    <th scope="col" class="table-bg">Price</th>
                    <th scope="col" class="table-bg">Age</th>
                    <th scope="col" class="table-bg">Gender</th>
                    <th scope="col" class="table-bg">Breed</th>
                    <th scope="col" class="table-bg">Source</th>
                    <th scope="col" class="table-bg">Category</th>
                    <th scope="col" class="table-bg">Color</th>
                    <th scope="col" class="table-bg">Vaccination</th>
                    <th scope="col" class="table-bg rounded-end-3">Action</th>
                </tr>
            </thead>
            <tbody class=" fw-medium">
                <?php
                foreach ($listPetPage as $key => $x) { ?>
                    <tr>
                        <th style="width: 8%;" class="rounded-start-3"><img src="../<?= $x['img_path'] ?>" alt="" width="100%"></th>
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
                        <td><?= getBreedById($x['breed_id'])['name'] ?></td>
                        <td><?= getSourceById($x['source_id'])['name']  ?></td>
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
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item <?php if ($currentPage <= 1) echo 'disabled' ?>">
                    <a class="page-link" href="/admin/?view=<?= $view . "&page=" . $currentPage - 1 ?>">
                        Previous
                    </a>
                </li>
                <?php for ($i = 1; $i <= $totalPage; $i++) : ?>
                    <li class="page-item"><a class="page-link" href="/admin/?view=<?= $view . "&page=" . $i ?>"><?= $i ?></a></li>
                <?php endfor; ?>
                <li class="page-item <?php if ($currentPage == $totalPage) echo 'disabled' ?>">
                    <a class="page-link" href="/admin/?view=<?= $view . "&page=" . $currentPage + 1 ?>">
                        Next
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>

<?php
require_once "./views/components/addModal.php";
?>