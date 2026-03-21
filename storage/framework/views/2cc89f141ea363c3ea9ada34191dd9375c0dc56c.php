<!--Ucapan dari mereka-->
<div class="card pb-5 m-0 bg-grid-light2" style="z-index: 3;">
    <div class="card-body">
        <div class="row pt-5" style="text-align: center;">
            <div class="col-md-8 offset-md-2 col-lg-8 offset-lg-2 mt-5">
                <h2 data-aos="fade-up" data-aos-duration="1500" class="font-utama" style="font-weight: normal">
                    Ucapan dari mereka</h2>
                <div class="map-container p-2" data-aos="zoom-in" data-aos-duration="1500">
                    <div id="messagebox" class="message-container"
                        style="max-height: 500px; overflow-y: auto; overflow-x: hidden; padding-right: 5px;">

                        <?php $__currentLoopData = $ucapan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="card p-3 m-2" style="border-radius: 16px">
                                <li class="media p-0">
                                    <figure class="avatar mr-2 text-white" data-initial="<?php echo e($item->nama[0]); ?>"
                                        style="background-color: #b1a59e"></figure>
                                    <div class="media-body text-left">
                                        <h6 class="media-title"><?php echo e($item->nama); ?></h6>
                                        <div class="text-small"><?php echo e($item->ucapan); ?></div>
                                        <i class="far fa-clock text-small text-muted"></i><text
                                            class="text-small text-muted" style="font-size: 12px">
                                            <?php echo e($item->tanggal); ?></text>
                                    </div>
                                </li>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\wamp64\www\kenikahanku\resources\views/invitation-fullpic/ucapan_mereka.blade.php ENDPATH**/ ?>