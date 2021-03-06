<?php $__env->startSection('title','Dashboard Guru'); ?>
<?php $__env->startSection('content'); ?>

<?php $__currentLoopData = $teachers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $teacher): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php $book = $books->where('kelas_id',$teacher->kelas_id); ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <div class="mt-5">
            <div class="my-4 mx-3">
                <strong style="text-transform: capitalize; letter-spacing:1px; color:#535c68; font-size:16px;"> <i
                        class="fas fa-tachometer-alt" style="color:#f9ca24;"></i>&nbsp; <?php echo $__env->yieldContent('title'); ?></strong>
            </div>
        
            <div class="row mt-4 text-center m-auto">
                
                <div class="container">
                    <div class="row">
                        
                            <div class="col-sm card mx-1 my-1">
                                    <i class="fas fa-users my-4" style="color:#f9ca24; font-size: 2.8em;"></i>
                                    <div class="my-4">
                                        <h2> <?php echo e($book->count()); ?><h2>
                                    </div>
                                    <p class="title mt-2">Jumlah Siswa</p>
                                </div>      
                        
                        <div class="col-sm card mx-1 my-1">
                            <i class="fas fa-book my-4" style="color:#70a1ff; font-size: 2.8em;"></i>
                            <div class="my-4">
                                <h2> <?php echo e($book->count()); ?> <h2>
                            </div>
                            <p class="title mt-2">Total Buku</p>
                        </div>
                        
                        <div class="col-sm card mx-1 my-1">
                            <i class="fas fa-smile-wink my-4" style="color:#2ed573; font-size: 2.8em;"></i>
                            <div class="my-4">
                                <h2>
                                    <?php if($book->sum('status',1) < 1): ?> 0 <?php else: ?> <?php echo e($book->sum('status',1)); ?> <?php endif; ?>
                                </h2> </div> <p
                                        class="title mt-2">Total Finish</p>
                            </div>
                            
                            <div class="col-sm card mx-1 my-1">
                                <i class="fas fa-sad-cry my-4" style="color:#ff4757; font-size: 2.8em;"></i>
                                <div class="my-4">
                                    <h2>
                                        <?php echo e($book->count('judul_buku') - $book->sum('status',1)); ?>

                                    </h2>
                                </div>
                                <p class="title mt-2">Total Unfinish</p>
                            </div>
                        </div>
                    </div>   
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\devmufik\htdocs\omobv2\resources\views/dashboard/teacher.blade.php ENDPATH**/ ?>