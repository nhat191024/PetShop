<div class="vh-100 container mt-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item"><a href="?view=petCategory&category=<?= $pet['category_id'] ?>"><?= getPetCategoryById($pet['category_id'])['name']  ?></a></li>
            <li class="breadcrumb-item active" aria-current="page"><?= $pet['name'] ?></li>
        </ol>
    </nav>
    <div class="w-100 h-50 p-4 bg-white d-flex justify-content-start gap-3 rounded-2">
        <div class="w-50 h-50">
            <img src="<?= $pet['img_path'] ?>" class="img-fluid rounded-2 ">
        </div>
        <div class="w-50">
            <h2 class="text-center"><?= $pet['name'] ?></h2>
            <div class="d-flex">
                <div class="d-flex flex-column align-items-start">
                    <button class="btn">
                        <h5>Category: </h5>
                    </button>
                    <button class="btn">
                        <h5>Age: </h5>
                    </button>
                    <button class="btn">
                        <h5>Gender: </h5>
                    </button>
                    <button class="btn">
                        <h5>Color: </h5>
                    </button>
                    <button class="btn">
                        <h5>Source: </h5>
                    </button>
                    <button class="btn">
                        <h5>Vaccination: </h5>
                    </button>
                </div>
                <div class="d-flex flex-column">
                    <h5><button class="btn border border-1 border-info text-info" disabled><?= getPetCategoryById($pet['category_id'])['name']  ?></button></h5>
                    <h5><button class="btn border border-1 border-info text-info" disabled> <?= $pet['age'] ?></button></h5>
                    <h5>
                        <button class="btn border border-1 border-info text-info" disabled>
                            <?php if ($pet['gender'] == 2) {
                                echo "Female";
                            } else {
                                echo "Male";
                            }     ?>
                        </button>
                    </h5>
                    <h5><button class="btn border border-1 border-info text-info" disabled><?= getColorById($pet['color_id'])['name']  ?></button></h5>
                    <h5><button class="btn border border-1 border-info text-info" disabled><?= getSourceById($pet['source_id'])['name']  ?></button></h5>
                    <h5><button class="btn border border-1 border-info text-info" disabled><?= $pet['vaccination'] ?></button></h5>
                </div>
            </div>
            <div class="fw-bold">
                <div class="d-flex gap-1 fw-medium mt-1">
                    <?php
                    $a = strrev($pet['price']);
                    $b = str_split($a, 3);
                    $c = implode(',', $b);
                    $d = strrev($c);
                    echo "<button class='btn text-info border border-2 border-info w-25' disabled > $d ₫</button>";
                    ?>
                    <button class="btn text-info border border-2 border-info w-75" data-bs-toggle="modal" data-bs-target="#meet" <?php if ($pet['stock'] == 0) echo 'disabled' ?>>Schedule a meet with pet</button>
                </div>
                <?php if ($pet['stock'] == 0) : ?>
                <button class="btn btn-info text-dark fw-medium w-100 mt-2" disabled>
                    <span>Out of stock</span>
                    <br>
                    <span>This Pet Has Found Their Family!!!</span>
                </button>
                <?php else : ?>
                <a class="btn btn-info text-dark fw-medium w-100 mt-2" href="/?view=payment&id=<?= $pet['id'] ?>&pet=true">
                    <span>Buy now</span>
                    <br>
                    <span>Delivery or receiving at the store</span>
                </a>
                <?php endif; ?>
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
        $comments = getAllCommentByPetId($pet['id']);
        $numberOfComments = count($comments);
        $numberOfComments == 0 ? print("<p>No comment</p>") : print("<p>$numberOfComments Comment</p>");
        foreach ($comments as $comment) { ?>
            <div class="d-flex gap-3 mt-3">
                <img src="<?= getAccountById($comment['user_id'])['avatar']  ?>" class="rounded-circle" width="50px" height="50px">
                <div class="w-100">
                    <h6><?= getAccountById($comment['user_id'])['username'] ?></h6>
                    <p><?= $comment['content'] ?></p>
                    <p class="text-muted">Comment At: <?= $comment['create_at'] ?></p>
                </div>
            </div>
        <?php } ?>

        <hr>
        <?php if (isset($_SESSION['loggedIn'])) : ?>
            <form action="../controllers/petComment/add.php" method="post">
                <input type="hidden" value="<?= $pet['id'] ?>" name="pet_id">
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

<!-- Modal -->
<div class="modal fade" id="meet" tabindex="-1" aria-labelledby="meetLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="meetLabel">Schedule a meet with pet</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <?php if (isset($_SESSION['user_id'])) : ?>
                <form action="/controllers/meet/add.php" method="POST">
                    <div class="modal-body">
                        <input type="hidden" value="<?= $pet['id'] ?>" name="petId">
                        <input type="hidden" value="<?= $_SESSION['user_id'] ?>" name="userId">
                        <label class="form-label">Date Time</label>
                        <div class="input-group mb-3">
                            <input type="time" aria-label="time" class="form-control" name="time">
                            <input type="date" aria-label="date" class="form-control" name="date">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" name="meet">Schedule</button>
                    </div>
                </form>
            <?php else : ?>
                <div class="modal-body">
                    <h5 class="text-center">Please login to schedule a meet with pet</h5>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <a type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#LoginModal">
                        SignIn
                    </a>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>