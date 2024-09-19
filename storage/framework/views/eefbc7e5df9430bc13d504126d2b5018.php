<div class="modal fade" id="exampleModal-spoteLight<?php echo e($paidUser->user->id); ?>" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header d-flex justify-content-center">
                <h5 class="modal-title" id="exampleModalLabel">Spote Light</h5>
                <button type="button" class="close position-absolute" style="right: 1rem;" data-dismiss="modal"
                    aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo e(route('spotelights.store')); ?>" method="post" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="user_id" value="<?php echo e($paidUser->user->id); ?>">
                    <div class="form-group">
                        <label>Spote Light</label>
                        <input type="date" class="form-control" name="duration" id="duration">
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\premiumMangalMandap\resources\views\components\spote-light-modal-component.blade.php ENDPATH**/ ?>