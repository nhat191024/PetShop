<div class="vh-100 container mt-3">
    <div class=" d-flex gap-2">
        <div style="width: 40rem; height: 20rem;">
            <img src="../assets/banner1.png" class=" img-thumbnail w-100 h-100">
        </div>
        <div class="w-50 border border-1 border-black rounded-2 p-4">
            <h1><strong><?= $pet['name'] ?></strong></h1>
            <h4>Category: <?= getPetCategoryById($pet['category_id'])['name']  ?></h4>
            <h4>Color: <?= getColorById($pet['color_id'])['name']  ?></h4>
            <h4>Price: <?= $pet['price'] ?></h4>
            <h4>Age: <?= $pet['age'] ?></h4>
            <h4>Gender: <?php if ($pet['gender'] == 2) {
                            echo "Female";
                        } else {
                            echo "Male";
                        }     ?></h4>
            <h4>Source: <?= getSourceById($pet['source'])['name']  ?></h4>
            <h4>Vaccination: <?= $pet['vaccination'] ?></h4>
            <button class="btn btn-primary">Buy</button>

        </div>
    </div>
</div>