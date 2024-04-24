<form action="../controllers/bill/add.php" method="post" class="w-100 h-100 d-flex">
    <div class="container bg-white vh-100 ps-5 border-end border-1 border-secondary pt-4 ">
        <h2 class="fw-medium mb-2">PetShop</h2>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item">Cart</li>
                <li class="breadcrumb-item active" aria-current="page">Payment</li>
            </ol>
        </nav>
        <p>Information receiving goods</p>
        <div class="row row-cols-3 w-75">
            <input type="hidden" value="<?= $_SESSION['user_id'] ?>" name="userId">
            <div class="mb-3 col-12">
                <label for="Address" class="form-label">Address</label>
                <input type="text" class="form-control" id="Address" placeholder="Your Address" name="address">
            </div>
            <div class="mb-3 col">
                <label for="Name" class="form-label">Name</label>
                <input type="text" class="form-control" id="Name" placeholder="Your Name" name="name">
            </div>
            <div class="mb-3 col">
                <label for="Email" class="form-label">Email</label>
                <input type="email" class="form-control" id="Email" placeholder="Your Email Address" name="email">
            </div>
            <div class="mb-3 col">
                <label for="PhoneNumber" class="form-label">Phone Number</label>
                <input type="number" class="form-control" id="PhoneNumber" placeholder="Your PhoneNumber" name="phone">
            </div>
            <div class="mb-3 col">
                <label for="City" class="form-label">Your City</label>
                <select class="form-select city" id="City" name="city">
                    <option selected>Open this select menu</option>
                    <option value="1">HaiPhong</option>
                    <option value="2">HaNoi</option>
                    <option value="3">HoChiMinh</option>
                </select>
            </div>
            <div class="mb-3 col">
                <label for="District" class="form-label">Your District</label>
                <select class="form-select" id="District" name="district">
                    <option selected>Open this select menu</option>
                    <option value="1">Example</option>
                </select>
            </div>
            <div class="mb-3 col">
                <label for="Wards" class="form-label">Your Wards</label>
                <select class="form-select" id="Wards" name="ward">
                    <option selected>Open this select menu</option>
                    <option value=" 1">Example</option>
                </select>
            </div>
            <div class="mb-3 col-12">
                <label for="Note" class="form-label">Note</label>
                <textarea name="note" id="Note" class="form-control"></textarea>
            </div>
            <div class="mb-3 col-8">
                <label for="Payment" class="form-label">Payment Method</label>
                <select class="form-select" id="Payment" name="payment">
                    <option selected>Open this select menu</option>
                    <option value="1">Cash</option>
                    <option value="2">Credit Card</option>
                    <option value="3">Bank Transfer</option>
                </select>
            </div>
            <div class="mb-3 col">
                <label for="Shipment" class="form-label">Shipment Method</label>
                <select class="form-select" id="Shipment" name="shipment">
                    <option selected>Open this select menu</option>
                    <option value="1">Fast</option>
                    <option value="2">Normal</option>
                    <option value="3">Slow</option>
                </select>
            </div>
            <div class="d-flex gap-3">
                <a href="/" class="btn btn-outline-secondary">Back</a>
                <button type="submit" name="bill" class="btn btn-primary">Confirm</button>
            </div>
        </div>
        <hr>
        <p>Thank you for purchasing at PetShop. If you have any questions, please contact Page for support! Thank you!</p>
    </div>
    <?php if (isset($_GET['id'])) : ?>
        <div class="container vh-100 w-50 pe-5 mt-2">
            <h2 class="fw-medium mb-2">Your Cart (1 Product)</h2>
            <hr>
            <div class="mt-3">
                <div class="d-flex w-100">
                    <img width="14%" src="<?= $product['img_path'] ?>" class="mx-4">
                    <div class="d-flex flex-column justify-content-center ">
                        <span class="fw-bold"><?= $product['name'] ?></span>
                        <span class="fw-bold">Quantity: 1</span>
                        <div class="d-flex gap-5 ">
                            <p class="text-muted"><?= getProductCategoryById($product['category_id'])['name'] . "/" . getManufacturerById($product['manufacturer_id'])['name'] ?></p>
                            <p class="text-muted">
                                <?php
                                $a = strrev($product['price']);
                                $b = str_split($a, 3);
                                $c = implode(',', $b);
                                $d = strrev($c);
                                echo $d;
                                ?>₫
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="ms-3 fs-3">
                <p class="text-muted">Total:
                    <?php
                    $a = strrev($product['price']);
                    $b = str_split($a, 3);
                    $c = implode(',', $b);
                    $d = strrev($c);
                    echo $d;
                    ?>₫
                    <input type="hidden" name="total" id="total" value="<?= $product['price'] ?>">
                </p>ad
            </div>
            </button>
        </div>
    <?php else : ?>
        <div class="container vh-100 w-50 pe-5 mt-2">
            <h2 class="fw-medium mb-2">Your Cart (<?= count($cart) ?> Product)</h2>
            <hr>
            <div class="mt-3">
                <?php foreach ($cart as $item) :
                    $product = getProductById($item['product_id']);
                ?>
                    <div class="d-flex w-100">
                        <img width="14%" src="<?= $product['img_path'] ?>" class="mx-4">
                        <div class="d-flex flex-column justify-content-center ">
                            <span class="fw-bold"><?= $product['name'] ?></span>
                            <span class="fw-bold">Quantity: <?= $item['quantity'] ?></span>
                            <div class="d-flex gap-5 ">
                                <p class="text-muted"><?= getProductCategoryById($product['category_id'])['name'] . "/" . getManufacturerById($product['manufacturer_id'])['name'] ?></p>
                                <p class="text-muted">
                                    <?php
                                    $a = strrev($product['price']);
                                    $b = str_split($a, 3);
                                    $c = implode(',', $b);
                                    $d = strrev($c);
                                    echo $d;
                                    ?>₫
                                </p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <hr>
            <div class="ms-3 fs-3">
                <?php
                $finalTotal = 0;
                foreach ($cart as $item) {
                    $product = getProductById($item['product_id']);
                    $totalPrice = $product['price'] * $item['quantity'];
                    $finalTotal += $totalPrice;
                } ?>
                <p class="text-muted">Total:
                    <?php
                    $a = strrev($finalTotal);
                    $b = str_split($a, 3);
                    $c = implode(',', $b);
                    $d = strrev($c);
                    echo $d;
                    ?>₫
                    <input type="hidden" name="total" id="total" value="<?= $finalTotal ?>">
                </p>
            </div>
            </button>
        </div>
    <?php endif; ?>
    </div>