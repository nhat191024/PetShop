<div class="container-fluid d-flex justify-content-center align-items-center gap-2 p-3">
    <form class="w-50" action="./controllers/manufacturer/update.php" method="POST">
        <input type="hidden" name="id" value="<?= $manufacturer['id'] ?>">
        <div class="mb-3">
            <label for="manufacturerName" class="form-label">Manufacturer Name</label>
            <input type="text" name="manufacturerName" class="form-control" id="manufacturerName" value="<?= $manufacturer['name'] ?>" required>
            </select>
        </div>
        <div class="float-end">
            <a href="/admin/?view=Manufacturers" class="btn btn-secondary">Close</a>
            <button type="submit" class="btn btn-primary" name="update<?= $view ?>">Update</button>
        </div>
    </form>
</div>