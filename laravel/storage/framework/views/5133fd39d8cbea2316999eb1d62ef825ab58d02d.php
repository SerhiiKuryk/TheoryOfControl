<?php if($messages): ?>
    <div class="alert alert-info alert-message">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>

        <?php echo $messages; ?>

    </div>
<?php endif; ?>
