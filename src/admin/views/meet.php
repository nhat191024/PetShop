<div class="container-fluid d-flex gap-2 p-3">
    <div class="admin-side-container rounded-3">
        <ol class="list-group list-group-numbered">
            <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                    <div class="fw-bold">Meets Schedules</div>
                    Total Meets
                </div>
                <span class="badge text-bg-info text-white rounded-pill">
                    <?= count($listMeet); ?>
                </span>
            </li>
        </ol>
    </div>
    <div class="admin-main-container bg-white p-2 rounded-3">
        <table class="table table-hover caption-top table-borderless table-striped table-hover text-center align-middle">
            <caption class="fw-bold">List of Meets</caption>
            <thead>
                <tr>
                    <th scope="col" class="table-bg rounded-start-3">#</th>
                    <th scope="col" class="table-bg">User</th>
                    <th scope="col" class="table-bg">Pet</th>
                    <th scope="col" class="table-bg">Datetime</th>
                    <th scope="col" class="table-bg">Meet Status</th>
                    <th scope="col" class="table-bg rounded-end-3">Action</th>
                </tr>
            </thead>
            <tbody class=" fw-medium">
                <?php
                foreach ($listMeetPage as $key => $x) { ?>
                    <tr>
                        <td><?= $key + 1 ?></td>
                        <td><?= getAccountById($x['user_id'])['username'] ?></td>
                        <td><?= getPetById($x['pet_id'])['name'] ?></td>
                        <td><?= $x['datetime'] ?></td>
                        </td>
                        <td>
                            <?php
                            if ($x['status'] == 1) {
                                echo "Processing";
                            } else if ($x['status'] == 2) {
                                echo "Approved";
                            } else if ($x['status'] == 3) {
                                echo "Done";
                            } else {
                                echo "Cancel";
                            }
                            ?>
                        </td>
                        <td style="width: 10%;" class="rounded-end-3">
                            <?php if ($x['status'] == 1) : ?>
                                <a href="./controllers/meet/update.php/?id=<?= $x['id'] ?>&status=2" class="btn"><i class="fa-solid fa-calendar-days"></i></a>
                            <?php else : ?>
                                <button class="btn btn-dark mb-2" disabled>Not Available</button>
                            <?php endif; ?>
                            <?php if ($x['status'] == 1 || $x['status'] == 2) : ?>
                                <a href="./controllers/meet/update.php/?id=<?= $x['id'] ?>&status=3" class="btn"><i class="fa-solid fa-check" style="color: #00ff1e;"></i></a>
                            <?php else : ?>
                                <button class="btn btn-success mb-2" disabled>Not Available</button>
                            <?php endif; ?>
                            <?php if ($x['status'] == 1) : ?>
                                <a href="./controllers/meet/update.php/?id=<?= $x['id'] ?>&status=4" class="btn"><i class="fa-solid fa-trash" style="color: #ff0000;"></i></a>
                            <?php else : ?>
                                <button class="btn btn-danger" disabled>Not Available</button>
                            <?php endif; ?>
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