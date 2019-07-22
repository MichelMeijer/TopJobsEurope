<?php $__env->startSection('content'); ?>
<h2>All jobs</h2>

<div>
<a href="/api/jobs/create">Post a job
</a>
</div>

    <ul>
            <?php $__currentLoopData = $jobs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $job): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>         
              <li>
              <a href="/jobs/ <?php echo e($job->id); ?>">              
              <?php echo e($job->title); ?>

              <!-- <?php echo e($job->id); ?> -->
              </a>            
              </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

  

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/michel/Documents/LaravelLab/TopJobsEuropeTest/resources/views/welcome.blade.php ENDPATH**/ ?>