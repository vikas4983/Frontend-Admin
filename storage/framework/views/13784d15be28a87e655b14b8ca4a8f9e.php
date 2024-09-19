<?php if($users ?? ''): ?>
    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-lg-4 col-xl-4 col-xxl-4">
            <div class="card card-default mt-7">
                <div class="card-body"
                    <?php
$currentDate = \Carbon\Carbon::now();
    $spotLight = $user->spotelights->last(); ?>
                    <?php if($spotLight && $spotLight->is_spote_light == 'Active'): ?> style="background-color:#E8DAEF ; border-radius: 10px;"
    <?php else: ?>
        style="background-color: transparent;" <?php endif; ?>>
                    <a class="d-block mb-2" href="javascript:void(0)" data-toggle="modal"
                        data-target="#modal-contact-<?php echo e($user->id); ?>">
                        <div class="image mb-3 d-inline-flex mt-n8">
                            <img src="<?php echo e(asset('storage/admin/user-images/' . ($user->image ?? 'male-default.jpg'))); ?>"
                            class="img-fluid rounded-circle d-inline-block" alt="Avatar Image" width="100px"
                            height="100px"
                            style="border: 2px solid #22ff00; padding: 2px; border-radius: 50%; box-sizing: border-box;">
                        </div>
                        <h5 class="card-title"><?php echo e($user->name ?? ''); ?> (<?php echo e($user->id); ?>) <i
                                class="mdi mdi-security"> </i>
                            <?php if($user->status == 'Active'): ?>
                                <i class="mdi mdi-eye" style="color:rgb(13, 227, 6)"></i>
                            <?php endif; ?>
                            <?php if($user->payments()->where('is_paid', '1')->exists()): ?>
                                <i class="mdi mdi-chess-queen" style="color:#FD5190"></i>
                            <?php endif; ?>
                        </h5>
                    </a>
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <ul class="list-unstyled d-inline-block mb-5">
                                    <li class="d-flex mb-1">
                                        <i class="mdi mdi-gmail mr-1"></i>
                                        <span><?php echo e(Str::limit($user->email ?? '', 20)); ?></span>
                                    </li>
                                    <li class="d-flex">
                                        <i class="mdi mdi-phone mr-1"></i>
                                        <span>7896541230</span>
                                    </li>
                                    <li class="d-flex mb-1">
                                        <i class="mdi mdi-led-strip mr-1"></i>
                                        <span>5'10"</span>
                                    </li>
                                    <li class="d-flex">
                                        <i class="mdi mdi-heart-half-full mr-1"></i>
                                        <span>Never Married</span>
                                    </li>
                                    <?php if($spotLight && $spotLight->is_spote_light == 'Active'): ?>
                                        <li class="d-flex ">
                                            <i class="mdi mdi-eye-plus mr-1"></i>
                                            <span>
                                                <h6><?php echo e(\Carbon\Carbon::parse($spotLight->duration)->format('d-M-Y') ?? ''); ?>

                                                </h6>
                                            </span>
                                        </li>
                                    <?php endif; ?>
                                </ul>
                            </div>
                            <div class="col">
                                <ul class="list-unstyled d-inline-block mb-5">
                                    <li class="d-flex mb-1">
                                        <i class="mdi mdi-human-male mr-1"></i>
                                        <span>Male</span>
                                    </li>
                                    <li class="d-flex">
                                        <i class="mdi mdi-calendar mr-1"></i>
                                        
                                        <span>26 apr 2000 Years</span>
                                    </li>
                                    <li class="d-flex mb-1">
                                        <i class="mdi mdi-hinduism mr-1"></i>
                                        <span>Hindu</span>
                                    </li>
                                    <li class="d-flex">
                                        <i class="mdi mdi-star-box mr-1"></i>
                                        <span>Khatri</span>
                                    </li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact Modal for this user -->
        <div class="modal fade" id="modal-contact-<?php echo e($user->id); ?>" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header justify-content-end border-bottom-0">
                        <button type="button" class="btn-edit-icon" data-dismiss="modal" aria-label="Close">
                            <i class="mdi mdi-pencil"></i>
                        </button>
                        <div class="dropdown">
                            <button class="btn-dots-icon" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="mdi mdi-dots-vertical"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">

                                <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                            </div>
                        </div>
                        <button type="button" class="btn-close-icon" data-dismiss="modal" aria-label="Close">
                            <i class="mdi mdi-close"></i>
                        </button>
                    </div>

                    <div class="modal-body pt-0">
                        <div class="row no-gutters">
                            <div class="col-md-6">
                                <div class="profile-content-left px-4">
                                    <div class="card text-center px-0 border-0">
                                        <div class="card-img mx-auto">
                                            <img class="rounded-circle"
                                                src="<?php echo e(asset('storage/admin/user-images/' . ($user->image ?? 'male-default.jpg'))); ?>"
                                                alt="user image">
                                        </div>
                                        <div class="card-body">
                                            <h4 class="py-2"><?php echo e($user->name ?? ''); ?></h4>
                                            <p><?php echo e($user->email ?? 'N/A'); ?></p>
                                            <p>7896541320</p>
                                            <a class="btn btn-primary btn-pill btn-lg my-4"
                                                href="javascript:void(0)">Follow</a>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <div class="text-center pb-4">
                                            <h6 class="pb-2"><?php echo e($user->friends_count ?? '120'); ?></h6>
                                            <p>Request</p>
                                        </div>
                                        <div class="text-center pb-4">
                                            <h6 class="pb-2"><?php echo e($user->followers_count ?? '20'); ?></h6>
                                            <p>Accepted</p>
                                        </div>
                                        <div class="text-center pb-4">
                                            <h6 class="pb-2"><?php echo e($user->following_count ?? '50'); ?></h6>
                                            <p>Sent</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="contact-info px-4">
                                    <h4 class="mb-1">Basic Details</h4>
                                    <div class="row">
                                        <div class="col mt-3">
                                            <ul class="list-unstyled d-inline-block mb-5">

                                                <li class="d-flex mb-1">
                                                    <i class="mdi mdi-account-clock mr-1"></i>
                                                    <span>
                                                        <h6>
                                                            <?php echo e(isset($user->created_at) ? \Carbon\Carbon::parse($user->created_at)->isoFormat('DD-MMM-YYYY hh:mma') : ''); ?>

                                                        </h6>
                                                    </span>
                                                </li>
                                                <li class="d-flex mt-2">
                                                    <i class="mdi mdi-heart-half mr-1"></i>
                                                    <span>
                                                        <h6>Never Married</h6>
                                                    </span>
                                                </li>
                                                <li class="d-flex mt-2">
                                                    <i class="mdi mdi-calendar mr-1"></i>
                                                    <span>
                                                        <h6>26 apr 1994</h6>
                                                    </span>
                                                </li>
                                                <li class="d-flex mt-2">
                                                    <i class="mdi mdi-ruler mr-1"></i>
                                                    <h6><span>4ft 10in - 147cm</span></h6>
                                                </li>
                                                <li class="d-flex mt-2">
                                                    <i class="mdi mdi-book mr-1"></i>
                                                    <span>
                                                        <h6>BA</h6>
                                                    </span>
                                                </li>
                                                
                                            </ul>

                                        </div>

                                        <div class="col mt-3">
                                            <ul class="list-unstyled d-inline-block mb-5">
                                                <li class="d-flex mb-1">
                                                    <i class="mdi mdi-human-male mr-1 "></i>
                                                    <span>
                                                        <h6>Male</h6>
                                                    </span>
                                                </li>
                                                <li class="d-flex mt-2">
                                                    <i class="mdi mdi-earth mr-1"></i>
                                                    <span>
                                                        <h6>India</h6>
                                                    </span>
                                                </li>
                                                <li class="d-flex mt-2">
                                                    <i class="mdi mdi-city mr-1"></i>
                                                    <span>
                                                        <h6>Delhi</h6>
                                                    </span>
                                                </li>
                                                <li class="d-flex mt-2">
                                                    <i class="mdi mdi-hinduism mr-1"></i>
                                                    <span>
                                                        <h6>Hindu</h6>
                                                    </span>
                                                </li>
                                                <li class="d-flex mt-2">
                                                    <i class="mdi mdi-star-box mr-1"></i>
                                                    <span>
                                                        <h6>Agrawal</h6>
                                                    </span>
                                                </li>

                                            </ul>
                                        </div>

                                    </div>
                                </div>
                                <div class="contact-info px-4">
                                    <?php if($user->payments->isNotEmpty() && $user->payments->first()->is_paid == 'True'): ?>
                                        <h4 class="mb-1">Current Plan</h4>
                                        <div class="row">

                                            <div class="col mt-3">
                                                <ul class="list-unstyled d-inline-block mb-5">

                                                    <li class="d-flex mb-1">
                                                        <i class="mdi mdi-chess-queen mr-1"></i>
                                                        <span>
                                                            <h6>Name</h6>
                                                        </span>
                                                    </li>
                                                    <li class="d-flex mt-2">
                                                        <i class="mdi mdi-contacts mr-1"></i>
                                                        <span>
                                                            <h6>Left Contact</h6>
                                                        </span>
                                                    </li>
                                                    <li class="d-flex mt-2">
                                                        <i class="mdi mdi-calendar-clock mr-1"></i>
                                                        <span>
                                                            <h6>Expiry Date</h6>
                                                        </span>
                                                    </li>

                                                </ul>

                                            </div>

                                            <div class="col mt-3">
                                                <ul class="list-unstyled d-inline-block mb-5">

                                                    <li class="d-flex mb-1">
                                                        <span>

                                                            <h6><?php echo e($user->payments->last()->plan->name); ?></h6>



                                                        </span>
                                                    </li>


                                                    <li class="d-flex mt-2">
                                                        <span>
                                                            <h6><?php echo e($user->payments->last()->contact ?? 'No Contact Available'); ?>

                                                            </h6>
                                                        </span>
                                                    </li>

                                                    <li class="d-flex mt-2">
                                                        <span>
                                                            <h6>
                                                                <?php echo e(isset($user->payments->last()->expiry_date) ? \Carbon\Carbon::parse($user->payments->first()->expiry_date)->format('d-M-Y') : 'No Expiry Date'); ?>

                                                            </h6>
                                                        </span>
                                                    </li>

                                                </ul>

                                            </div>


                                        </div>
                                    <?php else: ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\premiumMangalMandap\resources\views\components\users-component.blade.php ENDPATH**/ ?>