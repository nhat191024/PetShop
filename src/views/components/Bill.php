<!-- Modal -->
<div class="modal modal-lg fade" id="bill" tabindex="-1" aria-labelledby="bill" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="billLabel">Your Bill</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body ">
                <?php if (empty($listBill)) : ?>
                    <h4 class="text-center my-3">You have no bill</h1>
                    <?php else : ?>
                        <table class="table table-borderless text-center align-middle">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Type</th>
                                    <th>Create Date</th>
                                    <th>Total</th>
                                    <th>Address</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($listBill as $item) : ?>
                                    <tr>
                                        <td><?= $item['id'] ?></td>
                                        <td><?= $item['type'] ?></td>
                                        <td><?= $item['create_at'] ?></td>
                                        <td>
                                            <?php
                                            $a = strrev($item['total']);
                                            $b = str_split($a, 3);
                                            $c = implode(',', $b);
                                            $d = strrev($c);
                                            echo $d;
                                            ?>₫
                                        </td>
                                        <td><?= $item['address'] ?></td>
                                        <td>
                                            <?php
                                            if ($item['status'] == 1) {
                                                echo "Pending";
                                            } else if ($item['status'] == 2) {
                                                echo "Shipping";
                                            } else if ($item['status'] == 3) {
                                                echo "Done";
                                            } else {
                                                echo "Canceled";
                                            }
                                            ?>
                                        </td>
                                        <td>
                                            <?php if ($item['status'] == 2 || $item['status'] == 3 || $item['status'] == 4) : ?>
                                                <button disabled class="btn">Not available</button>
                                            <?php else : ?>
                                                <a class="btn" href="../../controllers/bill/delete.php?id=<?= $item['id'] ?>"><i class="fa-solid fa-trash" style="color: #ff0000;"></i></a>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    <?php endif; ?>
            </div>
        </div>
    </div>
</div>