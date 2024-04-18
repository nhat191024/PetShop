<div class="toast-container position-fixed bottom-0 end-0 p-3">
    <div id="liveToast" class="toast text-bg-danger <?= $loginFailed ?>" role="alert" aria-live="assertive" aria-atomic="true" data-bs-delay="100" data-bs-autohide="true" data-bs-animation="true">
        <div class="toast-header">
            <img src="../../assets/PetShop.svg" width="20px" class="rounded me-2" alt="...">
            <strong class="me-auto">Petshop</strong>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
            Wrong Password or Username!!
        </div>
    </div>
</div>
<div class="toast-container position-fixed bottom-0 end-0 p-3">
    <div id="liveToast" class="toast text-bg-danger <?= $notLogin ?>" role="alert" aria-live="assertive" aria-atomic="true" data-bs-delay="100" data-bs-autohide="true" data-bs-animation="true">
        <div class="toast-header">
            <img src="../../assets/PetShop.svg" width="20px" class="rounded me-2" alt="...">
            <strong class="me-auto">Petshop</strong>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
            You must login to add this product to cart!!
        </div>
    </div>
</div>
<div class="toast-container position-fixed bottom-0 end-0 p-3">
    <div id="liveToast" class="toast text-bg-success <?= $addSuccess ?>" role="alert" aria-live="assertive" aria-atomic="true" data-bs-delay="100" data-bs-autohide="true" data-bs-animation="true">
        <div class="toast-header">
            <img src="../../assets/PetShop.svg" width="20px" class="rounded me-2" alt="...">
            <strong class="me-auto">Petshop</strong>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
            Add product to cart successfully!!
        </div>
    </div>
</div>