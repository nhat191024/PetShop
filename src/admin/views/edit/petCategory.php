<div class="container-fluid d-flex justify-content-center align-items-center gap-2 p-3">
    <form class="w-50" action="./controllers/category/petCategory/update.php" method="POST">
        <input type="hidden" name="id" value="<?= $petCategory['id'] ?>">
        <div class="mb-3">
            <label for="petCategory" class="form-label">Pet Category Name</label>
            <input type="text" name="petCategory" class="form-control" id="petCategory" value="<?= $petCategory['name'] ?>" required>
        </div>
        <div class="float-end">
            <a href="/admin/?view=Pet_Categories" class="btn btn-secondary">Close</a>
            <button type="submit" class="btn btn-primary" name="update<?= $view ?>">Update</button>
        </div>
    </form>
</div>