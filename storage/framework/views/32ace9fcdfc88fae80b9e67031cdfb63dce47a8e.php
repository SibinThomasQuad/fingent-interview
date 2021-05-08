<!DOCTYPE html>
<html>
<link rel="stylesheet" href="<?php echo e(asset('css/register.css')); ?>" type="text/css">
<body>

<h3>Register Student Details</h3>
<?php
if(isset($student))
{
	$name=$student->name;
	$age=$student->age;
	$gender=$student->gender;
	$teacher=$student->reporting_teacher;
	$action="/student/update";
}
else
{
	$name='';
	$age='';
	$gender='';
	$teacher='';
	$action="/student/insert";
}
?>
<div>
  <form method='post' action="<?php echo e($action); ?>">
    <?php echo e(csrf_field()); ?>

    <label for="fname">Student Name</label>
    <?php
    if($name != '')
    {
    ?>
    <input type="hidden" id="ids" value="<?php echo e($student->id); ?>" name="ids">
    <?php
    }
    ?>
    <input type="text" id="name" value='<?php echo e($name); ?>' name="name" placeholder="Student Name..">

    <label for="lname">Age</label>
    <input type="text" id="age" value='<?php echo e($age); ?>' name="age" placeholder="Student Age..">

    <label for="country">Gender</label>
    <select id="gender" name="gender">
      <option value="">Select</option>
      <option value="M">Male</option>
      <option value="F">Female</option>
      <option value="O">Others</option>
    </select>
    <label for="lname">Reporting Teacher</label>
    <input type="text" id="teacher" value='<?php echo e($teacher); ?>' name="teacher" placeholder="Reporting Teacher...">
    <input type="submit" value="Save">
    <?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>
  </form>
</div>

</body>
</html>

<?php /**PATH /home/dark/fingent/example-app/resources/views/student/register.blade.php ENDPATH**/ ?>