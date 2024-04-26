<div class="container-fluid d-flex gap-2 p-3">
    <div class="admin-side-container rounded-3">
        <ol class="list-group list-group-numbered">
            <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                    <div class="fw-bold">Account</div>
                    Total Accounts
                </div>
                <span class="badge text-bg-info text-white rounded-pill">
                    <?= count($listAccount); ?>
                </span>
            </li>
        </ol>
    </div>
    <div class="admin-main-container h-50 bg-white p-2 rounded-3">
        <div class="d-flex  justify-content-between px-5 pb-3">
            <form class="d-flex w-25" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-info" type="submit">Search</button>
            </form>
        </div>
        <table class="table table-hover caption-top table-borderless table-striped table-hover text-center align-middle">
            <thead>
                <tr>
                    <th scope="col" class="table-bg rounded-start-3">Avatar</th>
                    <th scope="col" class="table-bg">Username</th>
                    <th scope="col" class="table-bg">Email</th>
                    <th scope="col" class="table-bg">Role</th>
                    <th scope="col" class="table-bg">Create At</th>
                    <th scope="col" class="table-bg">Status</th>
                    <th scope="col" class="table-bg rounded-end-3">Action</th>
                </tr>
            </thead>
            <tbody class=" fw-medium">
                <?php
                foreach ($listAccountPage as $key => $x) { ?>
                    <tr>
                        <td style="width: 8%;" class="rounded-start-3"><img src="../<?= $x['avatar'] ?>" alt="" width="100%" class="avatar"></td>
                        <td><?= $x['username'] ?></td>
                        <td><?= $x['email'] ?></td>
                        <td>
                            <?php
                            if ($x['role'] == 1) {
                                echo "Admin";
                            } else {
                                echo "User";
                            }
                            ?>
                        </td>
                        <td><?= $x['create_at'] ?></td>
                        <td>
                            <?php
                            if ($x['status'] == 1) {
                                echo "Active";
                            } else {
                                echo "Inactive";
                            }
                            ?>
                        </td>
                        <td style="width: 10%;" class="rounded-end-3">
                            <a href="/admin/?view=Accounts&edit=<?= $x['id'] ?>" class="btn"><i class="fa-solid fa-pen-to-square" style="color: #FFD43B;"></i></a>
                            <a href="./controllers/account/activate.php/?id=<?= $x['id'] ?>" class="btn"><i class="fa-solid fa-lock-open" style="color: #04ff00;"></i></a>
                            <a href="./controllers/account/deactivate.php/?id=<?= $x['id'] ?>" class="btn"><i class="fa-solid fa-lock" style="color: #ff0000;"></i></a>
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