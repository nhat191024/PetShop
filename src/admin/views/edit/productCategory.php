<div class="container-fluid d-flex justify-content-center align-items-center gap-2 p-3">
    <form class="w-50" action="./controllers/category/productCategory/update.php" method="POST">
        <input type="hidden" name="id" value="<?= $productCategory['id'] ?>">
        <div class="mb-3">
            <label for="productCategory" class="form-label">Product Category Name</label>
            <input type="text" name="productCategory" class="form-control" id="productCategory" value="<?= $productCategory['name'] ?>" required>
        </div>
        <div class="float-end">
            <a href="/admin/?view=Product_Categories" class="btn btn-secondary">Close</a>
            <button type="submit" class="btn btn-primary" name="update<?= $view ?>">Update</button>
        </div>
    </form>
</div>