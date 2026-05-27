<?php include('components/toasts.php'); ?>

<nav class="d-flex d-md-none navbar text-bg-dark border-top border-secondary position-fixed bottom-0 vw-100 p-4 z-2" style="height: var(--navbar_height);">
    <a class="btn text-bg-dark" href="#">Cars 2017</a>
    <div class="inline">
        <button type="button" class="btn bg-warning text-dark" onclick="showToast('toastEpic')">epic</button>
        <button type="button" class="btn text-bg-dark" onclick="showToast('toastEvil')">evil</button>
    </div>
</nav>

<nav class="d-none d-md-flex flex-column bg-dark border-end border-secondary position-fixed vh-100 p-2" style="width: var(--sidebar_width);">
    <a class="btn text-bg-dark mb-auto" href="#">Cars 2017</a>
    <div class="d-flex flex-column gap-2">
        <button type="button" class="btn bg-warning text-dark" onclick="showToast('toastEpic')">epic</button>
        <button type="button" class="btn text-bg-dark" onclick="showToast('toastEvil')">evil</button>
    </div>
</nav>
