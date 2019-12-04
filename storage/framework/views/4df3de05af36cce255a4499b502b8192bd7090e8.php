<?php $__env->startSection('content'); ?>
    <!-- <?php echo e($job); ?> -->
    <div class="jobinfo">
    <h1 class="jobtitle"><?php echo e($job->title); ?></h1> 
    <hr>
    <div class="row justify-content-center">
    <div class="col-sm-6">
    <h2><b>City: </b><?php echo e($job->city); ?></h2>
</div>
    <div class="col-sm-6">
    <h2><b>Country: </b><?php echo e($job->country); ?></h2>
</div>
    <div class="col-sm-6">
    <h2><b>Language: </b><?php echo e($job->language); ?></h2>
</div>
<div class="col-sm-6">
        <h2><b>Salary: </b><?php echo e($job->salary); ?></h2>
    </div>
    </div>
 <div class="column justify-content-center">
        <h2><b>Date posted: </b><?php echo e($job->creation_date); ?></h2>
    </div><hr>
    <div><h3><b>Full Description: </b><?php echo $job->description; ?></h3></div>
    <div class="row justify-content-center">
    <a href="<?php echo e($job->url); ?>" class="btn btn-primary1">Apply!</a></div><br><br><br><br><br><br><br><br>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/michel/Documents/LaravelLab/TopJobsEuropeTest/resources/views/job.blade.php ENDPATH**/ ?>