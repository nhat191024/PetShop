<!-- Modal -->
<div class="modal fade" id="add<?= $view ?>" tabindex="-1" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel"><?= $view ?></h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <?php
            switch ($view) {
                case "Pet_Categories": ?>
                    <form action="./controllers/category/petCategory/add.php" method="POST">
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="petCategory" class="form-label">Pet Category Name</label>
                                <input type="text" name="petCategory" class="form-control" id="petCategory" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" name="create<?= $view ?>">Create</button>
                        </div>
                    </form>
                <?php break;
                case "Product_Categories": ?>
                    <form action="./controllers/category/productCategory/add.php" method="POST">
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="productCategory" class="form-label">Product Category Name</label>
                                <input type="text" name="productCategory" class="form-control" id="productCategory" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" name="create<?= $view ?>">Create</button>
                        </div>
                    </form>
                <?php break;
                case "Pets": ?>
                    <form action="./controllers/pets/add.php" method="POST" enctype="multipart/form-data">
                        <div class="modal-body row row-cols-2">
                            <div class="mb-3 col-12">
                                <label for="petName" class="form-label">Pet Name</label>
                                <input type="text" name="petName" class="form-control" id="petName" required>
                            </div>
                            <div class="mb-3 col">
                                <label for="petPrice" class="form-label">Pet Price</label>
                                <input type="number" name="petPrice" class="form-control" id="petPrice" required>
                            </div>
                            <div class="mb-3 col">
                                <label for="petAge" class="form-label">Pet Age</label>
                                <input type="number" name="petAge" class="form-control" id="petAge" required>
                            </div>
                            <div class="mb-3 col">
                                <label for="petCategory" class="form-label">Pet Category</label>
                                <select class="form-select" name="petCategory" id="petCategory" required>
                                    <?php foreach ($listPetCategory as $x) { ?>
                                        <option value="<?= $x['id'] ?>"><?= $x['name'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="mb-3 col">
                                <label for="petColor" class="form-label">Pet Color</label>
                                <select class="form-select" name="petColor" required>
                                    <?php foreach ($listColor as $x) { ?>
                                        <option value="<?= $x['id'] ?>"><?= $x['name'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="mb-3 col">
                                <label for="petGender" class="form-label">Pet Gender</label>
                                <select class="form-select" name="petGender" id="petGender" required>
                                    <option value="1">Male</option>
                                    <option value="2">Female</option>
                                </select>
                            </div>
                            <div class="mb-3 col">
                                <label for="petSource" class="form-label">Pet Source</label>
                                <select class="form-select" name="petSource" id="petSource" required>
                                    <?php foreach ($listSource as $x) { ?>
                                        <option value="<?= $x['id'] ?>"><?= $x['name'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="mb-3 col">
                                <label for="petVaccination" class="form-label">Pet Vaccination</label>
                                <select class="form-select" name="petVaccination" id="petVaccination" required>
                                    <option value="vaccinated">Vaccinated</option>
                                    <option value="not vaccinated">Not Vaccinated</option>
                                </select>
                            </div>
                            <div class="mb-3 col-12">
                                <label for="petImg" class="form-label">Pet image</label>
                                <input class="form-control" type="file" name="petImg" id="petImg" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" name="create<?= $view ?>">Create</button>
                        </div>
                    </form>
                <?php break;
                case "Sources": ?>
                    <form action="./controllers/source/add.php" method="POST">
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="petSource" class="form-label">Pet Source</label>
                                <input type="text" name="petSource" class="form-control" id="petSource" required>
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" name="create<?= $view ?>">Create</button>
                        </div>
                    </form>
                <?php break;
                case "Colors": ?>
                    <form action="./controllers/color/add.php" method="POST">
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="petColor" class="form-label">Pet Color</label>
                                <input type="text" name="petColor" class="form-control" id="petColor" required>
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" name="create<?= $view ?>">Create</button>
                        </div>
                    </form>
                <?php break;
                case "": ?>
            <?php } ?>

        </div>
    </div>
</div>