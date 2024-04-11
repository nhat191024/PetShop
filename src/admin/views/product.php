<div class="container-fluid d-flex gap-2 p-3">
    <div class="admin-side-container rounded-3">
        <ol class="list-group list-group-numbered">
            <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                    <div class="fw-bold">Product</div>
                    Total Products
                </div>
                <span class="badge text-bg-info text-white rounded-pill">
                    <?= count($listProduct); ?>
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
                    <th scope="col" class="table-bg rounded-start-3">Product Img</th>
                    <th scope="col" class="table-bg">Product Name</th>
                    <th scope="col" class="table-bg">Product ID</th>
                    <th scope="col" class="table-bg">Price</th>
                    <th scope="col" class="table-bg">Manufacturer</th>
                    <th scope="col" class="table-bg">Category</th>
                    <th scope="col" class="table-bg">Quantity</th>
                    <th scope="col" class="table-bg">Description</th>
                    <th scope="col" class="table-bg rounded-end-3">Action</th>
                </tr>
            </thead>
            <tbody class=" fw-medium">
                <?php
                foreach ($listProductPage as $key => $x) { ?>
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
                        <td><?= getManufacturerById($x['manufacturer_id'])['name'] ?></td>
                        <td>
                            <?= getProductCategoryById($x['category_id'])['name'] ?>
                        </td>
                        <td><?= $x['quantity'] ?></td>
                        <td class="text-truncate" style="max-width: 200px;"><?= $x['description'] ?></td>
                        <td style="width: 10%;" class="rounded-end-3">
                            <button class="btn"><i class="fa-solid fa-eye" style="color: #74C0FC;"></i></button>
                            <a href="/admin/?view=Products&edit=<?= $x['id'] ?>" class="btn"><i class="fa-solid fa-pen-to-square" style="color: #FFD43B;"></i></a>
                            <form action="./controllers/product/delete.php" method="post">
                                <input type="number" class="d-none" name="id" value="<?= $x['id'] ?>">
                                <button class="btn" type="submit" name="delete"><i class="fa-solid fa-trash" style="color: #ff0000;"></i></button>
                            </form>
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
                <li class="page-item <?php if ($currentPage == $totalPage || $totalPage == null) echo 'disabled' ?>">
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