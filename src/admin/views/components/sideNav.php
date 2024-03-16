<!-- //TODO: Change font when complete other things! (maybe if i remember about this shit) -->
<div class="offcanvas offcanvas-start w-25" tabindex="-1" id="offcanvas" data-bs-keyboard="true" data-bs-backdrop="true">
    <div class="offcanvas-header">
        <h6 class="offcanvas-title d-none d-sm-block" id="offcanvas">Menu</h6>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body ">
        <div class="list-group list-group-flush py-2 d-flex flex-column gap-3 w-100">
            <a href="/admin/" class="list-group-item list-group-item-action rounded-2">Dashboard</a>
            <button class="dropdown dropdown-toggle list-group-item list-group-item-action" id="dropdown" data-bs-toggle="dropdown" aria-expanded="false">Categories</button>
            <ul class="dropdown-menu w-75 py-0" aria-labelledby="dropdown">
                <li> <a href="/admin/?view=Pet_Categories" class="list-group-item list-group-item-action rounded-2">Pet Categories</a></li>
                <li><a href="/admin/?view=Product_Categories" class="list-group-item list-group-item-action rounded-2">Product Categories</a></li>
            </ul>
            <button class="dropdown dropdown-toggle list-group-item list-group-item-action" id="dropdown" data-bs-toggle="dropdown" aria-expanded="false">Pet Details</button>
            <ul class="dropdown-menu w-75 py-0" aria-labelledby="dropdown">
                <li> <a href="/admin/?view=Colors" class="list-group-item list-group-item-action rounded-2">Pet Colors</a></li>
                <li><a href="/admin/?view=Sources" class="list-group-item list-group-item-action rounded-2">Pet Source</a></li>
            </ul>
            <a href="/admin/?view=Pets" class="list-group-item list-group-item-action rounded-2">Pets</a>
            <a href="/" class="list-group-item list-group-item-action rounded-2">Home Page</a>
            <button class="dropdown list-group-item list-group-item-action" id="dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                User
            </button>
            <ul class="dropdown-menu w-75" aria-labelledby="dropdown">
                <li><a class="dropdown-item" href="#">User Item</a></li>
                <li><a class="dropdown-item" href="#">User Item</a></li>
                <li><a class="dropdown-item" href="#">User Item</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Sign out</a></li>
            </ul>
        </div>
    </div>
    <div class="offcanvas-bottom">
        <p class="mx-4">Stm here i dunno</p>
    </div>
</div>

<button class="btn btn-dark position-absolute end-0 bottom-0 m-4" tabindex="-1" data-bs-toggle="offcanvas" data-bs-target="#offcanvas" role="button">
    <i class="fa-solid fa-bars"></i>
</button>