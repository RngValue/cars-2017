<div class="toast-container translate-middle-x position-fixed start-50 p-6" style="top: 10px;">
    <div class="toast text-bg-success" id="toastEpic" role="alert">
        <div class="toast-body">
            <div class="d-flex gap-4">
                <div class="d-flex flex-grow-1 align-items-center">
                    <span class="fw-semibold">So sigma</span>
                </div>
                <button type="button" class="btn bg-dark text-light ms-auto" data-bs-dismiss="toast" aria-label="Close">Ok</button>
            </div>
        </div>
    </div>

    <div class="toast text-bg-danger" id="toastEvil" role="alert">
        <div class="toast-body">
            <div class="d-flex gap-4">
                <div class="d-flex flex-grow-1 align-items-center">
                    <span class="fw-semibold">So sigman't</span>
                </div>
                <button type="button" class="btn bg-dark text-light ms-auto" data-bs-dismiss="toast" aria-label="Close">NOT Ok</button>
            </div>
        </div>
    </div>
</div>

<script>
    function showToast(toastId) {
        const toastLive = document.getElementById(toastId);
        const toast = new bootstrap.Toast(toastLive);
        toast.show();
    }
</script>