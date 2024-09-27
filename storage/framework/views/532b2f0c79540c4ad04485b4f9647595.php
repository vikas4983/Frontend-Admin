<?php $__currentLoopData = $fields; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $field): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    

    <?php switch($field['type']):
        case ('email'): ?>
            <?php if (isset($component)) { $__componentOriginald69afe920a3c2ac1f07889a3f5b5f303 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald69afe920a3c2ac1f07889a3f5b5f303 = $attributes; } ?>
<?php $component = App\View\Components\InputComponent::resolve(['name' => $field['name'],'label' => $field['label'],'type' => 'email'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('input-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\InputComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['rules' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($field['rules'])]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald69afe920a3c2ac1f07889a3f5b5f303)): ?>
<?php $attributes = $__attributesOriginald69afe920a3c2ac1f07889a3f5b5f303; ?>
<?php unset($__attributesOriginald69afe920a3c2ac1f07889a3f5b5f303); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald69afe920a3c2ac1f07889a3f5b5f303)): ?>
<?php $component = $__componentOriginald69afe920a3c2ac1f07889a3f5b5f303; ?>
<?php unset($__componentOriginald69afe920a3c2ac1f07889a3f5b5f303); ?>
<?php endif; ?>
        <?php break; ?>

        <?php case ('password'): ?>
            <?php if (isset($component)) { $__componentOriginald69afe920a3c2ac1f07889a3f5b5f303 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald69afe920a3c2ac1f07889a3f5b5f303 = $attributes; } ?>
<?php $component = App\View\Components\InputComponent::resolve(['name' => $field['name'],'label' => $field['label'],'type' => 'password'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('input-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\InputComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['rules' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($field['rules'])]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald69afe920a3c2ac1f07889a3f5b5f303)): ?>
<?php $attributes = $__attributesOriginald69afe920a3c2ac1f07889a3f5b5f303; ?>
<?php unset($__attributesOriginald69afe920a3c2ac1f07889a3f5b5f303); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald69afe920a3c2ac1f07889a3f5b5f303)): ?>
<?php $component = $__componentOriginald69afe920a3c2ac1f07889a3f5b5f303; ?>
<?php unset($__componentOriginald69afe920a3c2ac1f07889a3f5b5f303); ?>
<?php endif; ?>
        <?php break; ?>

        <?php case ('select'): ?>
            <?php if (isset($component)) { $__componentOriginald16f00e9419bbb69d594ab2232223be9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald16f00e9419bbb69d594ab2232223be9 = $attributes; } ?>
<?php $component = App\View\Components\SelectComponent::resolve(['name' => $field['name'],'label' => $field['label'],'options' => $field['options']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('select-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\SelectComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['rules' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($field['rules'])]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald16f00e9419bbb69d594ab2232223be9)): ?>
<?php $attributes = $__attributesOriginald16f00e9419bbb69d594ab2232223be9; ?>
<?php unset($__attributesOriginald16f00e9419bbb69d594ab2232223be9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald16f00e9419bbb69d594ab2232223be9)): ?>
<?php $component = $__componentOriginald16f00e9419bbb69d594ab2232223be9; ?>
<?php unset($__componentOriginald16f00e9419bbb69d594ab2232223be9); ?>
<?php endif; ?>
        <?php break; ?>

        <?php case ('file'): ?>
            <?php if (isset($component)) { $__componentOriginalf82a045ca5e11a6892e6cb780d2dda6e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf82a045ca5e11a6892e6cb780d2dda6e = $attributes; } ?>
<?php $component = App\View\Components\FileComponent::resolve(['name' => $field['name'],'label' => $field['label']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('file-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\FileComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['rules' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($field['rules'])]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf82a045ca5e11a6892e6cb780d2dda6e)): ?>
<?php $attributes = $__attributesOriginalf82a045ca5e11a6892e6cb780d2dda6e; ?>
<?php unset($__attributesOriginalf82a045ca5e11a6892e6cb780d2dda6e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf82a045ca5e11a6892e6cb780d2dda6e)): ?>
<?php $component = $__componentOriginalf82a045ca5e11a6892e6cb780d2dda6e; ?>
<?php unset($__componentOriginalf82a045ca5e11a6892e6cb780d2dda6e); ?>
<?php endif; ?>
        <?php break; ?>

        <?php default: ?>
            <?php if (isset($component)) { $__componentOriginald69afe920a3c2ac1f07889a3f5b5f303 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald69afe920a3c2ac1f07889a3f5b5f303 = $attributes; } ?>
<?php $component = App\View\Components\InputComponent::resolve(['name' => $field['name'],'label' => $field['label'],'type' => 'text'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('input-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\InputComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['rules' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($field['rules'])]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald69afe920a3c2ac1f07889a3f5b5f303)): ?>
<?php $attributes = $__attributesOriginald69afe920a3c2ac1f07889a3f5b5f303; ?>
<?php unset($__attributesOriginald69afe920a3c2ac1f07889a3f5b5f303); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald69afe920a3c2ac1f07889a3f5b5f303)): ?>
<?php $component = $__componentOriginald69afe920a3c2ac1f07889a3f5b5f303; ?>
<?php unset($__componentOriginald69afe920a3c2ac1f07889a3f5b5f303); ?>
<?php endif; ?>
    <?php endswitch; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>






































<?php /**PATH C:\xampp\htdocs\premiumMangalMandap\resources\views/components/form-fields-component.blade.php ENDPATH**/ ?>