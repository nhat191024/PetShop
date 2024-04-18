<!-- Modal -->
<div class="modal modal-dialog-scrollable modal-lg fade" id="CartModal" tabindex="-1" aria-labelledby="CartModal" aria-hidden="true">
    <div class="modal-dialog">
        <form class="modal-content" action="../../controllers/cart/update.php" method="post">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="CartModal">Your Cart</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <?php if (!isset($_SESSION['loggedIn'])) : ?>
                    <h4 class="text-center my-3">Please login to view your cart</h1>
                    <?php elseif (empty($cart)) : ?>
                        <h4 class="text-center my-3">Your cart is empty</h1>
                        <?php else : ?>
                            <table class="table table-borderless text-center align-middle">
                                <thead>
                                    <tr>
                                        <th scope="col">Img</th>
                                        <th scope="col">Product</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <div>
                                        <input type="hidden" name="cartTotal" value="<?= count($cart) ?>">
                                        <?php foreach ($cart as $item => $items) :
                                            $product = getProductById($items['product_id']);
                                        ?>
                                            <tr>
                                                <td style="width: 20%;"><img src="<?= $product['img_path'] ?>" alt="product" width="100%"></td>
                                                <td><?= $product['name']; ?></td>
                                                <td class="d-flex flex-column  justify-content-center align-items-center mt-5 ">
                                                    <input type="hidden" name="id-<?= $item + 1 ?>" value="<?= $items['id'] ?>">
                                                    <input type="number" class="form-control text-center w-50" value="<?= $items['quantity'] ?>" name="cartQuantity-<?= $item + 1 ?>" min="1" max="<?= $product['quantity'] ?>" onKeyDown="return false">
                                                </td>
                                                <td>
                                                    <?php
                                                    $a = strrev($product['price']);
                                                    $b = str_split($a, 3);
                                                    $c = implode(',', $b);
                                                    $d = strrev($c);
                                                    echo $d;
                                                    ?>₫
                                                </td>
                                                <td style="width: 20%;">
                                                    <a class="btn" href="http://petshop.com/controllers/cart/delete.php?id=<?= $items['id'] ?>"><i class="fa-solid fa-trash" style="color: #ff0000;"></i></a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </div>
                                </tbody>
                            </table>
                        <?php endif; ?>
            </div>
            <div class="modal-footer">
                <button type="submit" name="cartChange" class="btn btn-primary" <?php if (empty($cart)) echo 'disabled' ?>>Save changes</button>
                <a href="/?view=payment" type="button" class="btn btn-success <?php if (empty($cart)) echo 'disabled' ?>" >confirmation and payment</a>
            </div>
        </form>
    </div>
</div>