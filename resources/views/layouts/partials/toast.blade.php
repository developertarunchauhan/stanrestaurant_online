<!-- Toast Begin-->
<div aria-live="polite" aria-atomic="true" class="position-relative">
    <!-- Position it: -->
    <!-- - `.toast-container` for spacing between toasts -->
    <!-- - `.position-absolute`, `top-0` & `end-0` to position the toasts in the upper right corner -->
    <!-- - `.p-3` to prevent the toasts from sticking to the edge of the container  -->
    <div class="toast-container position-absolute top-0 end-0 p-3">

        <div id="success-toast" class="toast hide" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header bg-success text-light">
                <i class="fa-solid fa-circle-check"></i>
                <strong class="me-auto"> Success</strong>
                <small>11 mins ago</small>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                New Data Added
            </div>
        </div>


        <div id="danger-toast" class="toast hide" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header bg-danger text-light">
                <img src="..." class="rounded me-2" alt="...">
                <strong class="me-auto">Bootstrap</strong>
                <small>11 mins ago</small>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                Hello, world! This is a toast message.
            </div>
        </div>

        <div id="info-toast" class="toast hide" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header bg-primary text-light">
                <img src="..." class="rounded me-2" alt="...">
                <strong class="me-auto">Bootstrap</strong>
                <small>11 mins ago</small>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                Hello, world! This is a toast message.
            </div>
        </div>
    </div>
</div>
<script>
    var successToast = new bootstrap.Toast($('#success-toast'));
    var dangerToast = new bootstrap.Toast($('#danger-toast'));
    var infoToast = new bootstrap.Toast($('#info-toast'));

    // successToast.show();
    // dangerToast.show();
    // infoToast.show();
</script>

<!-- Toast Ends-->