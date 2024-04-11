<div class="container-fluid d-flex justify-content-center align-items-center gap-2 p-3">
    <div class="w-25 text-center">
        <h1>Current Image Preview</h1>
        <img src="../<?= $pet['img_path'] ?>" alt="" width="95%" height="95%">
    </div>
    <form class="w-50" action="./controllers/pets/update.php" method="POST" enctype="multipart/form-data">
        <div class="row row-cols-2">
            <input type="hidden" name="id" value="<?= $pet['id'] ?>">
            <div class="mb-3 col-12">
                <label for="petName" class="form-label">Pet Name</label>
                <input type="text" name="petName" class="form-control" id="petName" value="<?= $pet['name'] ?>" required>
            </div>
            <div class="mb-3 col">
                <label for="petPrice" class="form-label">Pet Price</label>
                <input type="number" name="petPrice" class="form-control" id="petPrice" value="<?= $pet['price'] ?>" required>
            </div>
            <div class="mb-3 col">
                <label for="petAge" class="form-label">Pet Age</label>
                <input type="number" name="petAge" class="form-control" id="petAge" value="<?= $pet['age'] ?>" required>
            </div>
            <div class="mb-3 col">
                <label for="petBreed" class="form-label">Pet Breed</label>
                <select class="form-select" name="petBreed" id="petBreed" required>
                    <?php foreach (getAllBreed() as $x) { ?>
                        <option value="<?= $x['id'] ?>" <?php if ($x['id'] == $pet['breed_id']) echo 'selected'  ?>><?= $x['name'] ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="mb-3 col">
                <label for="petCategory" class="form-label">Pet Category</label>
                <select class="form-select" name="petCategory" id="petCategory" required>
                    <?php foreach (getPetCategory() as $x) { ?>
                        <option value="<?= $x['id'] ?>" <?php if ($x['id'] == $pet['category_id']) echo 'selected'  ?>><?= $x['name'] ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="mb-3 col">
                <label for="petColor" class="form-label">Pet Color</label>
                <select class="form-select" name="petColor" required>
                    <?php foreach (getAllColor() as $x) { ?>
                        <option value="<?= $x['id'] ?>" <?php if ($x['id'] == $pet['color_id']) echo 'selected'  ?>><?= $x['name'] ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="mb-3 col">
                <label for="petGender" class="form-label">Pet Gender</label>
                <select class="form-select" name="petGender" id="petGender" required>
                    <option value="1" <?php if ($pet['gender'] == 1) echo 'selected'  ?>>Male</option>
                    <option value="2" <?php if ($pet['gender'] == 2) echo 'selected'  ?>>Female</option>
                </select>
            </div>
            <div class="mb-3 col">
                <label for="petSource" class="form-label">Pet Source</label>
                <select class="form-select" name="petSource" id="petSource" required>
                    <?php foreach (getAllSource() as $x) { ?>
                        <option value="<?= $x['id'] ?>" <?php if ($x['id'] == $pet['source_id']) echo 'selected'  ?>><?= $x['name'] ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="mb-3 col">
                <label for="petVaccination" class="form-label">Pet Vaccination</label>
                <select class="form-select" name="petVaccination" id="petVaccination" required>
                    <option value="vaccinated" <?php if ($pet['vaccination'] == "vaccinated") echo 'selected'  ?>>Vaccinated</option>
                    <option value="not vaccinated" <?php if ($pet['vaccination'] == "not vaccinated") echo 'selected'  ?>>Not Vaccinated</option>
                </select>
            </div>
            <div class="mb-3 col-12">
                <label for="petImg" class="form-label">Pet image</label>
                <input class="form-control" type="file" name="petImg" id="petImg">
            </div>
        </div>
        <div class="float-end">
            <a href="/admin/?view=Pets" class="btn btn-secondary">Close</a>
            <button type="submit" class="btn btn-primary" name="update<?= $view ?>">Update</button>
        </div>
    </form>
</div>