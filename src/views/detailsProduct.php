<div class=" container mt-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item"><a href="?view=productCategory&category=<?= $product['category_id'] ?>"><?= getProductCategoryById($product['category_id'])['name']  ?></a></li>
            <li class="breadcrumb-item active" aria-current="page"><?= $product['name'] ?></li>
        </ol>
    </nav>
    <div class="w-100 h-50 p-4 bg-white d-flex justify-content-start gap-3 rounded-2">
        <div class="w-50 h-100 d-flex justify-content-center ">
            <img src="<?= $product['img_path'] ?>" class="img-fluid rounded-2 " width="60%">
        </div>
        <div class="w-50">
            <h2 class="text-center"><?= $product['name'] ?></h2>
            <div class="d-flex">
                <div class="d-flex flex-column align-items-start">
                    <button class="btn">
                        <h5>Category: </h5>
                    </button>
                    <button class="btn">
                        <h5>Manufacturer: </h5>
                    </button>
                    <button class="btn">
                        <h5>Quantity: </h5>
                    </button>
                    <button class="btn">
                        <h5>Description: </h5>
                    </button>
                </div>
                <div class="d-flex flex-column">
                    <h5><button class="btn border border-1 border-info text-info" disabled><?= getProductCategoryById($product['category_id'])['name']  ?></button></h5>
                    <h5><button class="btn border border-1 border-info text-info" disabled> <?= getManufacturerById($product['manufacturer_id'])['name'] ?></button></h5>
                    <h5><button class="btn border border-1 border-info text-info" disabled> <?= $product['quantity'] ?></button></h5>
                    <h5><?= $product['description'] ?></h5>
                </div>
            </div>
            <div class="fw-bold">
                <div class="d-flex gap-1 fw-medium mt-1">
                    <?php
                    $a = strrev($product['price']);
                    $b = str_split($a, 3);
                    $c = implode(',', $b);
                    $d = strrev($c);
                    echo "<button class='btn text-info border border-2 border-info w-25' disabled > $d ₫</button>";
                    ?>
                    <form class="input-group" action="../controllers/cart/add.php" method="post">
                        <input type="hidden" value="<?= $product['id'] ?>" name="id">
                        <input type="number" class="form-control border border-2 border-info rounded-start-2 " value="1" name="quantity" min="1" max="<?= $product['quantity'] ?>" onKeyDown="return false">
                        <button type="submit" name="add-btn" class="btn text-info btn-outline-info border border-2 border-info">Add To Cart</button>
                    </form>
                </div>
            </div>
            <a class="btn btn-info text-dark fw-medium w-100 mt-2" href="/?view=payment&id=<?= $product['id'] ?>">
                <span>Buy now</span>
                <br>
                <span>Delivery or receiving at the store</span>
            </a>
            <div class="text-center">
                <span>Call to buy</span>
                <span class="text-info">090xxxxxx</span>
                <span>(8am - 10pm)</span>
            </div>
        </div>
    </div>
</div>
<div class="container h-50 p-4 mt-4 bg-white rounded-2">
    <h5>Comment</h5>
    <?php
    $comments = getAllProductComment($product['id']);
    $numberOfComments = count($comments);
    $numberOfComments == 0 ? print("<p>No comment</p>") : print("<p>$numberOfComments Comment</p>");
    foreach ($comments as $comment) { ?>
        <div class="d-flex gap-3 mt-3">
            <img src="../assets/avatar.png" class="rounded-circle" width="50px" height="50px">
            <div class="w-100">
                <h6><?= getAccountById($comment['user_id'])['username'] ?></h6>
                <p><?= $comment['content'] ?></p>
                <p class="text-muted">Comment At: <?= $comment['created_at'] ?></p>
            </div>
        </div>
    <?php } ?>

    <hr>
    <?php if (isset($_SESSION['loggedIn'])) : ?>
        <form action="../controllers/comment/add.php" method="post">
            <input type="hidden" value="<?= $product['id'] ?>" name="product_id">
            <div class="form-group">
                <label for="comment">Comment</label>
                <textarea class="form-control" id="comment" rows="3" name="comment-content"></textarea>
            </div>
            <button type="submit" class="btn btn-info mt-2" name="comment-btn">Submit</button>
        </form>
    <?php else : ?>
        <p class="text-danger">Please login to comment</p>
    <?php endif; ?>
</div>
</div>