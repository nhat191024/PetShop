<div class="container-fluid d-flex gap-2 p-3">
    <div class="admin-side-container rounded-3">
        <ol class="list-group list-group-numbered">
            <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                    <div class="fw-bold">Color</div>
                    Total Pet Category
                </div>
                <span class="badge text-bg-info text-white rounded-pill">
                    <?= count($listPetCategory); ?>
                </span>
            </li>
        </ol>
    </div>
    <div class="admin-main-container bg-white p-2 rounded-3">
        <div class="d-flex  justify-content-between px-5 pb-3">
            <form class="d-flex w-25" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-info" type="submit">Search</button>
            </form>
            <button type="button" class="btn btn-outline-info fw-bold m-1 float-end" data-bs-toggle="modal" data-bs-target="#add<?= $view ?>">
                + Add Category
            </button>
        </div>
        <table class="table table-hover caption-top table-borderless table-striped table-hover text-center align-middle">
            <caption class="fw-bold">List of breed</caption>
            <thead>
                <tr>
                    <th scope="col" class="table-bg rounded-start-3">#</th>
                    <th scope="col" class="table-bg">Category</th>
                    <th scope="col" class="table-bg">Category ID</th>
                    <th scope="col" class="table-bg rounded-end-3">Action</th>
                </tr>
            </thead>
            <tbody class=" fw-medium">
                <?php
                foreach ($listPetCategoryPage as $key => $x) { ?>
                    <tr>
                        <td><?= $key + 1 ?></td>
                        <td><?= $x['name'] ?></td>
                        <td><?= $x['id'] ?></td>
                        <td style="width: 10%;" class="rounded-end-3">
                            <button class="btn"><i class="fa-solid fa-eye" style="color: #74C0FC;"></i></button>
                            <button class="btn"><i class="fa-solid fa-pen-to-square" style="color: #FFD43B;"></i></button>
                            <form action="./controllers/category/petCategory/delete.php" method="post">
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