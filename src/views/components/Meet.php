<!-- Modal -->
<div class="modal modal-lg fade" id="meetModal" tabindex="-1" aria-labelledby="meetModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="meetModalLabel">Meet schedule</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <?php if (!isset($_SESSION['loggedIn'])) : ?>
                    <h4 class="text-center my-3">Please login to view your pet meeting schedule</h1>
                    <?php elseif (empty($listMeet)) : ?>
                        <h4 class="text-center my-3">You have no pet meeting schedule</h1>
                        <?php else : ?>
                            <table class="table table-borderless text-center align-middle">
                                <thead>
                                    <tr>
                                        <th scope="col">Pet</th>
                                        <th scope="col">Datetime</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($listMeet as $x) :
                                        $pet = getPetById($x['pet_id']);
                                    ?>
                                        <tr>
                                            <td><?= $pet['name']; ?></td>
                                            <td><?= $x['datetime']; ?></td>
                                            <td>
                                                <?php
                                                if ($x['status'] == 1) {
                                                    echo 'Pending';
                                                } elseif ($x['status'] == 2) {
                                                    echo 'Confirmed';
                                                } else {
                                                    echo 'Cancelled';
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <?php if ($x['status'] == 2 || $x['status'] == 3) : ?>
                                                    <button disabled class="btn">Not available</button>
                                                <?php else : ?>
                                                    <a class="btn" href="../../controllers/meet/delete.php?id=<?= $x['id'] ?>"><i class="fa-solid fa-trash" style="color: #ff0000;"></i></a>
                                                <?php endif; ?>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        <?php endif; ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>