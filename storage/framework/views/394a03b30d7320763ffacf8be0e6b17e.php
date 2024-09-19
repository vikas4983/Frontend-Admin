<div class="form-group">
    <label for="<?php echo e($name); ?>"><?php echo e($label); ?></label>
    <input type="<?php echo e($name === 'password' ? 'password' : ($name === 'email' ? 'email' : ($name === 'password_confirmation' ? 'password' : ($name === 'mobile' ? 'mobile' : 'text')))); ?>" name="<?php echo e($name); ?>" id="<?php echo e($name); ?>" value="<?php echo e(old($name, $value)); ?>" class="form-control <?php $__errorArgs = [$name];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
    <?php $__errorArgs = [$name];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <span class="invalid-feedback" role="alert">
            <strong><?php echo e($message); ?></strong>
        </span>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
</div>
<?php /**PATH C:\xampp\htdocs\premiumMangalMandap\resources\views\components\input-component.blade.php ENDPATH**/ ?>