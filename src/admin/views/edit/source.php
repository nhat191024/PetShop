<div class="container-fluid d-flex justify-content-center align-items-center gap-2 p-3">
    <form class="w-50" action="./controllers/source/update.php" method="POST">
        <input type="hidden" name="id" value="<?= $source['id'] ?>">
        <div class="mb-3">
            <label for="petSource" class="form-label">Pet Source</label>
            <input type="text" name="petSource" class="form-control" id="petSource" value="<?= $source['name'] ?>" required>
        </div>
        <div class="float-end">
            <a href="/admin/?view=Sources" class="btn btn-secondary">Close</a>
            <button type="submit" class="btn btn-primary" name="update<?= $view ?>">Update</button>
        </div>
    </form>
</div>