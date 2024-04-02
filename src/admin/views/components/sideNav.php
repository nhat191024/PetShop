<!-- //TODO: Change font when complete other things! (maybe if i remember about this shit) -->
<div class="offcanvas offcanvas-start w-25" tabindex="-1" id="offcanvas" data-bs-keyboard="true" data-bs-backdrop="true">
    <div class="offcanvas-header">
        <h3 class="offcanvas-title d-none d-sm-block fw-medium" id="offcanvas">Menu</h3>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body ">
        <div class="accordion accordion-flush list-group list-group-flush" id="adminSideBarAccordion">
            <div class="accordion-item list-group-item list-group-item-action pb-4">
                <a href="/admin/" class="accordion-header text-decoration-none text-dark fs-5">Dashboard</a>
            </div>
            <div class="accordion-item list-group-item list-group-item-action py-4">
                <a href="/admin/?view=Pets" class="accordion-header text-decoration-none text-dark fs-5">Pets</a>
            </div>
            <div class="accordion-item list-group-item list-group-item-action py-4">
                <a href="/admin/?view=Pets" class="accordion-header text-decoration-none text-dark fs-5">Product</a>
            </div>
            <div class="accordion-item py-2">
                <button class="accordion-header accordion-button collapsed text-dark fs-5" type="button" data-bs-toggle="collapse" data-bs-target="#categoriesCollapse" aria-expanded="false" aria-controls="categoriesCollapse">
                    Categories
                </button>
                <div id="categoriesCollapse" class="accordion-collapse collapse" data-bs-parent="#adminSideBarAccordion">
                    <div class="accordion-body">
                        <div class="list-group list-group-flush">
                            <a href="/admin/?view=Pet_Categories" class="list-group-item list-group-item-action">
                                Pet Categories
                            </a>
                            <a href="/admin/?view=Product_Categories" class="list-group-item list-group-item-action">
                                Product Categories
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item py-2">
                <button class="accordion-header accordion-button collapsed text-dark fs-5" type="button" data-bs-toggle="collapse" data-bs-target="#petDetailCollapse" aria-expanded="false" aria-controls="petDetailCollapse">
                    Pet Details
                </button>
                <div id="petDetailCollapse" class="accordion-collapse collapse" data-bs-parent="#adminSideBarAccordion">
                    <div class="accordion-body">
                        <div class="list-group list-group-flush">
                            <a href="/admin/?view=Colors" class="list-group-item list-group-item-action">
                                Pet Colors
                            </a>
                            <a href="/admin/?view=Sources" class="list-group-item list-group-item-action">
                                Pet Source
                            </a>
                            <a href="/admin/?view=Breeds" class="list-group-item list-group-item-action">
                                Pet Breeds
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item pt-2">
                <button class="accordion-header accordion-button collapsed text-dark fs-5" type="button" data-bs-toggle="collapse" data-bs-target="#userCollapse" aria-expanded="false" aria-controls="userCollapse">
                    User
                </button>
                <div id="userCollapse" class="accordion-collapse collapse" data-bs-parent="#adminSideBarAccordion">
                    <div class="accordion-body">
                        <div class="list-group list-group-flush">
                            <a href="" class="list-group-item list-group-item-action">
                                User Item
                            </a>
                            <a href="" class="list-group-item list-group-item-action">
                                User Item
                            </a>
                            <a href="" class="list-group-item list-group-item-action">
                                User Item
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="offcanvas-bottom">
        <p class="mx-4">Stm here i dunno</p>
    </div>
</div>
<button class="btn btn-info position-absolute end-0 bottom-0 m-4" tabindex="-1" data-bs-toggle="offcanvas" data-bs-target="#offcanvas" role="button">
    <i class="fa-solid fa-bars" style="color: #ffffffff"></i>
</button>