<div class="container-fluid d-flex justify-content-center align-items-center gap-2 p-3">
    <form class="w-50" action="./controllers/color/update.php" method="POST">
        <input type="hidden" name="id" value="<?= $color['id'] ?>">
        <div class="mb-3">
            <label for="petColor" class="form-label">Pet Color</label>
            <input type="text" name="petColor" class="form-control" id="petColor" value="<?= $color['name'] ?>" required>
        </div>
        <div class="float-end">
            <a href="/admin/?view=Colors" class="btn btn-secondary">Close</a>
            <button type="submit" class="btn btn-primary" name="update<?= $view ?>">Update</button>
        </div>
    </form>
</div>