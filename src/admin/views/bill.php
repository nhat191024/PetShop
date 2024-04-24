<div class="container-fluid d-flex gap-2 p-3">
    <div class="admin-side-container rounded-3">
        <ol class="list-group list-group-numbered">
            <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                    <div class="fw-bold">Bills</div>
                    Total Bills
                </div>
                <span class="badge text-bg-info text-white rounded-pill">
                    <?= count($listBill); ?>
                </span>
            </li>
        </ol>
    </div>
    <div class="admin-main-container bg-white p-2 rounded-3">
        <table class="table table-hover caption-top table-borderless table-striped table-hover text-center align-middle">
            <caption class="fw-bold">List of bill</caption>
            <thead>
                <tr>
                    <th scope="col" class="table-bg rounded-start-3">#</th>
                    <th scope="col" class="table-bg">User</th>
                    <th scope="col" class="table-bg">Name</th>
                    <th scope="col" class="table-bg">Email</th>
                    <th scope="col" class="table-bg">Phone Number</th>
                    <th scope="col" class="table-bg">Address</th>
                    <th scope="col" class="table-bg">Total</th>
                    <th scope="col" class="table-bg">Payment Method</th>
                    <th scope="col" class="table-bg">Payment Status</th>
                    <th scope="col" class="table-bg">Shipment Method</th>
                    <th scope="col" class="table-bg">Bill Status</th>
                    <th scope="col" class="table-bg rounded-end-3">Action</th>
                </tr>
            </thead>
            <tbody class=" fw-medium">
                <?php
                foreach ($listBill as $key => $x) { ?>
                    <tr>
                        <td><?= $key + 1 ?></td>
                        <td><?= getAccountById($x['user_id'])['username'] ?></td>
                        <td><?= $x['name'] ?></td>
                        <td><?= $x['email'] ?></td>
                        <td><?= $x['phone_number'] ?></td>
                        <td><?= $x['address'] ?></td>
                        <td>
                            <?php
                            $a = strrev($x['total']);
                            $b = str_split($a, 3);
                            $c = implode(',', $b);
                            $d = strrev($c);
                            echo $d;
                            ?>₫
                        </td>
                        <td>
                            <?php
                            if ($x['payment_method'] == 1) {
                                echo "Cash";
                            } else if ($x['payment_method'] == 2) {
                                echo "Credit Card";
                            } else {
                                echo "Bank Transfer";
                            }
                            ?>
                        </td>
                        <td>Paid</td>
                        <td>
                            <?php
                            if ($x['shipment_method'] == 1) {
                                echo "Fast";
                            } else if ($x['shipment_method'] == 2) {
                                echo "Normal";
                            } else {
                                echo "Slow";
                            }
                            ?>
                        </td>
                        <td>
                            <?php
                            if ($x['status'] == 1) {
                                echo "Processing";
                            } else if ($x['status'] == 2) {
                                echo "Shipping";
                            } else {
                                echo "Done";
                            }
                            ?>
                        </td>
                        <td style="width: 10%;" class="rounded-end-3">
                            <form action="./controllers/bill/update.php" method="post">
                                <input type="number" class="d-none" name="id" value="<?= $x['id'] ?>">
                                <button class="btn" type="submit" name="shipping"><i class="fa-solid fa-truck-fast"></i></button>
                            </form>
                            <form action="./controllers/bill/update.php" method="post">
                                <input type="number" class="d-none" name="id" value="<?= $x['id'] ?>">
                                <button class="btn" type="submit" name="complete"><i class="fa-solid fa-check" style="color: #00ff1e;"></i></button>
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