<?php $__env->startSection('content'); ?>
<h2>create job</h2>

<form method="POST" action="/api/jobs">

        <?php echo csrf_field(); ?>

        <div class="field">
            <label class="label" for="title">Job Title</label>
            <div class="control">
                <input type="text" class="input" name="title" value="title">  
            </div>
        </div>

        <div class="field">
            <label class="label" for="title">City</label>
            <div class="control">
                <input type="text" class="input" name="city" value="city">  
            </div>
        </div>

        <div class="field">
            <label class="label" for="title">Country</label>
            <div class="control">
                <input type="text" class="input" name="country" value="country">  
            </div>
        </div>

        <div class="field">
            <label class="label" for="title">Short description</label>
            <div class="control">
                <input type="text" class="input" name="short description" value="short description">  
            </div>
        </div>

        <div class="field">
            <label class="label" for="title">Link to job</label>
            <div class="control">
                <input type="text" class="input" name="url" value="url">  
            </div>
        </div>

        <div class="field">
            <label class="label" for="title">Language</label>
            <div class="control">
                <input type="text" class="input" name="language" value="-">  
            </div>
        </div>

        <div class="field">
            <label class="label" for="title">Sector</label>
            <div class="control">
                <input type="text" class="input" name="sector" value="-">  
            </div>
        </div>

        <div class="field">
            <label class="label" for="title">Salary</label>
            <div class="control">
                <input type="number" class="input" name="salary" value="0">  
            </div>
        </div>

        <!-- Make later when the related table is created -->

        <!-- <div class="field">
            <label class="label" for="description">Job description</label>
            <div class="control">
                <textarea name="description" class="textarea">Description</textarea>
            </div>
        </div> -->

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Create Job</button>
            </div>
        </div>
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/michel/Documents/LaravelLab/TopJobsEuropeTest/resources/views/createJob.blade.php ENDPATH**/ ?>