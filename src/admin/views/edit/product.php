<div class="container-fluid d-flex justify-content-center align-items-center gap-2 p-3">
    <div class="w-25 text-center">
        <h1>Current Image Preview</h1>
        <img src="../<?= $product['img_path'] ?>" alt="" width="95%" height="95%">
    </div>
    <form class="w-50" action="./controllers/product/update.php" method="POST" enctype="multipart/form-data">
        <div class="row row-cols-2">
            <input type="hidden" name="id" value="<?= $product['id'] ?>">
            <div class="mb-3 col-12">
                <label for="productName" class="form-label">Product Name</label>
                <input type="text" name="productName" class="form-control" id="productName" value="<?= $product['name'] ?>" required>
            </div>
            <div class="mb-3 col">
                <label for="productPrice" class="form-label">Product Price</label>
                <input type="number" name="productPrice" class="form-control" id="productPrice" value="<?= $product['price'] ?>" required>
            </div>
            <div class="mb-3 col">
                <label for="productManufacturer" class="form-label">Product Manufacturer</label>
                <select class="form-select" name="productManufacturer" id="productManufacturer" required>
                    <?php foreach (getAllManufacturers() as $x) { ?>
                        <option value=" <?= $x['id'] ?>" value="<?= $x['id'] ?>" <?php if ($x['id'] == $product['manufacturer_id']) echo 'selected'  ?>><?= $x['name'] ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="mb-3 col">
                <label for="productCategory" class="form-label">Product Category</label>
                <select class="form-select" name="productCategory" id="productCategory" required>
                    <?php foreach (getProductCategory() as $x) { ?>
                        <option value=" <?= $x['id'] ?>" value=" <?= $x['id'] ?>" value="<?= $x['id'] ?>" <?php if ($x['id'] == $product['category_id']) echo 'selected'  ?>><?= $x['name'] ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="mb-3 col">
                <label for="productQuantity" class="form-label">Product Quantity</label>
                <input type="number" name="productQuantity" class="form-control" id="productQuantity" value="<?= $product['quantity'] ?>" required>
            </div>
            <div class="mb-3 col-12">
                <label for="productDescription" class="form-label">Product Description</label>
                <textarea class="form-control" type="text" name="productDescription" id="productDescription" style="height: 100px" required><?= $product['description'] ?></textarea>
            </div>
            <div class="mb-3 col-12">
                <label for="productImg" class="form-label">Product image</label>
                <input class="form-control" type="file" name="productImg" id="productImg">
            </div>
        </div>
        <div class="float-end">
            <a href="/admin/?view=Products" class="btn btn-secondary">Close</a>
            <button type="submit" class="btn btn-primary" name="update<?= $view ?>">Update</button>
        </div>
    </form>
</div>