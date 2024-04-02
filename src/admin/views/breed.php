<div class="m-5 w-50 d-flex flex-column align-items-end">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary mb-2 w-25" data-bs-toggle="modal" data-bs-target="#add<?= $view ?>">
        Add Breed
    </button>
    <div class="w-100 border border-1 border-black rounded-2 p-2">
        <table class="table table-dark table-striped-columns text-center">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($listPetCategory as $key => $value) { ?>
                    <tr>
                        <th scope="row"><?= $key + 1 ?></th>
                        <td scope="row"><?= $value['name'] ?></td>
                        <td scope="row">
                            <button class="btn btn-danger disabled">Deactivate</button>
                            <button class="btn btn-warning">Edit</button>
                            <a class="btn btn-info disabled">Details</a>
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