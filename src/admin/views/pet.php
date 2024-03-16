<div class="m-5 w-75 d-flex flex-column align-items-end">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary mb-2 w-25" data-bs-toggle="modal" data-bs-target="#add<?= $view ?>">
        Add <?= $view ?>
    </button>
    <div class="w-100 border border-1 border-black rounded-2 p-1 d-flex">
        <table class="table table-dark table-striped-columns text-center">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th class="col-1" scope="col">Category</th>
                    <th class="col-2" scope="col">Name</th>
                    <th class="col-1" scope="col">Color</th>
                    <th class="col-1" scope="col">Price</th>
                    <th class="col-1" scope="col">Age</th>
                    <th class="col-1" scope="col">Gender</th>
                    <th class="col-2" scope="col">Source</th>
                    <th class="col-1" scope="col">Vaccination</th>
                    <th class="col-3" scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($listPet as $key => $x) { ?>
                    <tr>
                        <td><?= $key + 1 ?></td>
                        <td><?= getPetCategoryById($x['category_id'])['name']  ?></td>
                        <td><?= $x['name'] ?></td>
                        <td><?= getColorById($x['color_id'])['name']  ?></td>
                        <td><?= $x['price'] ?></td>
                        <td><?= $x['age'] ?></td>
                        <td><?php if ($x['gender'] == 2) {
                                echo "Female";
                            } else {
                                echo "Male";
                            }     ?></td>
                        <td><?= getSourceById($x['source'])['name']  ?></td>
                        <td><?= $x['vaccination'] ?></td>
                        <td scope="row">
                            <button class="btn btn-warning mb-1">Edit</button>
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