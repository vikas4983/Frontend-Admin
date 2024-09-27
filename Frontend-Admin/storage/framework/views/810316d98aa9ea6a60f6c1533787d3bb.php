<div class="form-group">
    <label for="<?php echo e($name); ?>"><?php echo e($label); ?></label>
    <select id="<?php echo e($name); ?>" name="<?php echo e($name); ?>" class="form-control"  >
        <option value="">Select <?php echo e($label); ?></option>
        <?php $__currentLoopData = $options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($option); ?>"><?php echo e($option); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
</div>
<?php /**PATH C:\xampp\htdocs\premiumMangalMandap\resources\views\components\select-component.blade.php ENDPATH**/ ?>