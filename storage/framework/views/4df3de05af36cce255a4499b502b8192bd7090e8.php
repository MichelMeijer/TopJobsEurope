<?php $__env->startSection('content'); ?>
    <!-- <?php echo e($job); ?> -->
    <h1><?php echo e($job->title); ?></h1>
    <p><b>City: </b><?php echo e($job->city); ?></p>
    <p><b>Country: </b><?php echo e($job->country); ?></p>
    <p><b>Salary: </b><?php echo e($job->salary); ?></p>
    <p><b>Language: </b><?php echo e($job->language); ?></p>
    <p><b>Date posted: </b><?php echo e($job->creation_date); ?></p>
    <div><b>Full Description: </b><?php echo $job->description; ?></div>
    <a href="<?php echo e($job->url); ?>" class="btn btn-primary">Apply!</a>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/michel/Documents/LaravelLab/TopJobsEuropeTest/resources/views/job.blade.php ENDPATH**/ ?>