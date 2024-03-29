<!-- Modal -->
<div class="modal fade show " id="PetScheduleModal" tabindex="-1" aria-labelledby="PetSchedule" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="PetScheduleModal">Schedule a meet with adorable pet</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/controllers/schedule/create.php" method="POST">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="petName" class="form-label" >Pet Name</label>
                        <input type="text" name="logUsername" class="form-control" id="petName" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="logPassword" class="form-control" id="password" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" name="loginBtn">Login</button>
                </div>
            </form>
        </div>
    </div>
</div>