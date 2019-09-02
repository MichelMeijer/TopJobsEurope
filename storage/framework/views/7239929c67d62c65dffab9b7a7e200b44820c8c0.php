<?php $__env->startSection('content'); ?>

  <!-- Jumbotron Header -->
  <header class="jumbotron my-4">
      <div class="column text-center">
      <h1 class="display-3">Welcome to TopJobsEurope!</h1>
      <p class="lead">
        <div class="text-lead">
          <li>We offer jobs in Amsterdam, Berlin and Prague.</li>
          <li>We offer the opportunity to create an online applicant profile for free!</li> 
          <li>We offer an platform where recruiters can post jobs and search profiles of applicants.</li> 
          <li>We offer premium recruiter services </li>
        </div>
      </p>
      <a href="#" class="btn btn-primary btn-lg">Get in touch</a>
    </div>
  </header>
  
    <div class="row text-center">
            <?php $__currentLoopData = $jobs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $job): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>         
                <div class="col-lg-3 col-md-6 mb-4">
                  <div class="card h-100">
                  <div class="card-img-top" style="background-image: url('<?php echo e($job->image); ?>')">
                  <h4><b><?php echo e($job->city); ?></b></h4>
                  </div>
                    <div class="card-body">
                      <p class="card-title"><b><?php echo e($job->title); ?></b></p>
                      <p class="card-text">Salary: <span><?php echo e($job->salary); ?></span></p>
                      <p class="card-text"><span><?php echo e($job->creation_date); ?></span></p>
                    </div>
                    <div class="card-footer">
                      <a href="/jobs/ <?php echo e($job->id); ?>" class="btn btn-primary">Find Out More</a>
                    </div>
                  </div>
                </div>                    
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

<div class= "column text-center">
  <div class="mypagination">
  <?php echo e($jobs->links()); ?>

  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/michel/Documents/LaravelLab/TopJobsEuropeTest/resources/views/welcome.blade.php ENDPATH**/ ?>