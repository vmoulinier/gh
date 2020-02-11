<div class="d-flex justify-content-center">
    <div id="flashbag" class="w-50 center mt-2 alert alert-<?= $flashBag[1]; ?>">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <i class="material-icons">close</i>
        </button>
        <span><?= $flashBag[0]; ?></span>
    </div>
</div>

<script>
    $("#flashbag").delay(3000).fadeOut(1000);
</script>
