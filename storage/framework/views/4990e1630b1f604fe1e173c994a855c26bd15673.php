<!DOCTYPE html>
<html>
<link rel="stylesheet" href="<?php echo e(asset('css/register.css')); ?>" type="text/css">
<body>
<h3>Insert Marks</h3>
<div>
  <?php
  if(isset($mark))
  {
  $student_mark=$mark->student;
  $maths=$mark->maths;
  $science=$mark->science;
  $history=$mark->history;
  $action=url('/mark/update');
  }
  else
  {
  $student_mark='';
  $maths='';
  $science='';
  $history='';
  $action=url('/marks/insert');
  }
  ?>
  <form method='post' action="<?php echo e($action); ?>">
    <?php echo e(csrf_field()); ?>

    <?php
    if(isset($mark))
    {
    ?>
    <input type='hidden' id='ids' name='ids' value='<?php echo e($mark->id); ?>'>
    <?php
    }
    ?>
    <label for="fname">Student</label>
    <select id="student" name="student">
      <option value="">Select</option>
      <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <option
      <?php
      if($student_mark !='' && $student_mark==$student->id)
      {
      	$selected='selected';
      }
      else
      {
         $selected='';
      }
      ?>
      <?php echo e($selected); ?>

      value="<?php echo e($student->id); ?>"><?php echo e($student->name); ?></option>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
    <label for="fname">Term</label>
    <select id="term" name="term">
      <option value="">Select</option>
      <option value="1">ONE</option>
      <option value="2">TWO</option>
    </select>
    <center><u>Marks</u></center><br>
    <label for="lname">Maths</label>
    <input type="text" value="<?php echo e($maths); ?>" id="maths" name="maths" placeholder="Maths Mark..">
    <label for="lname">Science</label>
    <input type="text" value='<?php echo e($science); ?>' id="science" name="science" placeholder="Science Mark..">
    <label for="lname">History</label>
    <input type="text" value='<?php echo e($history); ?>' id="history" name="history" placeholder="History Mark..">
  
    <input type="submit" value="Submit">
  </form>
  <?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>
</div>

</body>
</html>

<?php /**PATH /home/dark/fingent/example-app/resources/views/mark/register.blade.php ENDPATH**/ ?>