<div class="container-fluid p-4 mx-5 bg-white rounded-2 ">
    <a href="/admin/?view=Products" class="btn btn-info mb-3">back</a>
    <table class="table table-borderless table-striped text-center align-middle">
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
                <th scope="col" class="table-bg">Comment</th>
                <th scope="col" class="table-bg rounded-end-3">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="width: 8%;" class="rounded-start-3"><img src="../<?= $product['img_path'] ?>" alt="" width="100%"></td>
                <td><?= $product['name'] ?></td>
                <td><?= $product['id'] ?></td>
                <td>
                    <?php
                    $a = strrev($product['price']);
                    $b = str_split($a, 3);
                    $c = implode(',', $b);
                    $d = strrev($c);
                    echo $d;
                    ?>₫
                </td>
                <td><?= getManufacturerById($product['manufacturer_id'])['name'] ?></td>
                <td><?= getProductCategoryById($product['category_id'])['name'] ?></td>
                <td><?= $product['quantity'] ?></td>
                <td><?= $product['description'] ?></td>
                <td><?= count(getCommentBuyProductId($product['id'])) ?></td>
                <td style="width: 10%;" class="rounded-end-3">
                    <a href="/admin/?view=Products&edit=<?= $product['id'] ?>" class="btn"><i class="fa-solid fa-pen-to-square" style="color: #FFD43B;"></i></a>
                </td>
            </tr>
        </tbody>
    </table>

    <table class="table table-borderless table-striped text-center align-middle">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">User</th>
                <th scope="col">Comment</th>
                <th scope="col">Comment At</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($listCommentPage as $key => $x) : ?>
                <tr>
                    <td><?= $x['id'] ?></td>
                    <td><?= getAccountById($x['user_id'])['username'] ?></td>
                    <td><?= $x['content'] ?></td>
                    <td><?= $x['create_at'] ?></td>
                    <td>
                        <a class="btn" href="../../../admin/controllers/deleteComment.php/?id=<?= $x['id'] ?>&product=<?= $product['id'] ?>"><i class="fa-solid fa-trash" style="color: #ff0000;"></i></a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <nav aria-label="Page navigation example">
        <ul class="pagination">
            <li class="page-item <?php if ($currentPage <= 1) echo 'disabled' ?>">
                <a class="page-link" href="/admin/?view=<?= $view . "&comment=" . $product['id'] . "&page=" . $currentPage - 1 ?>">
                    Previous
                </a>
            </li>
            <?php for ($i = 1; $i <= $totalPage; $i++) : ?>
                <li class="page-item"><a class="page-link" href="/admin/?view=<?= $view . "&comment=" . $product['id'] . "&page=" . $i ?>"><?= $i ?></a></li>
            <?php endfor; ?>
            <li class="page-item <?php if ($currentPage == $totalPage || $totalPage == null) echo 'disabled' ?>">
                <a class="page-link" href="/admin/?view=<?= $view . "&comment=" . $product['id'] . "&page=" . $currentPage + 1 ?>">
                    Next
                </a>
            </li>
        </ul>
    </nav>
</div>