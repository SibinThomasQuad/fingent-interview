<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="<?php echo e(asset('css/table.css')); ?>" type="text/css">
</head>
<body>
<h2>Student Details</h2>
<a href='<?php echo e(url("/student/entry")); ?>'>New Student</a>
<table id="customers">
  <tr>
    <th>Id</th>
    <th>Name</th>
    <th>Age</th>
    <th>Gender</th>
    <th>Reporting Teacher</th>
    <th>Action</th>
  </tr>
  <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <tr>
    <td><?php echo e($student->id); ?></td>
    <td><?php echo e($student->name); ?></td>
    <td><?php echo e($student->age); ?></td>
    <td><?php echo e($student->gender); ?></td>
    <td><?php echo e($student->reporting_teacher); ?></td>
    <td><a href="<?php echo e(url('/student/delete')); ?>/<?php echo e($student->id); ?>">Delete</a>&nbsp;<a href="<?php echo e(url('/student/edit')); ?>/<?php echo e($student->id); ?>">Edit</a></td>
  </tr>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<?php echo e($students->render()); ?>


</body>
</html>

<?php /**PATH /home/dark/fingent/example-app/resources/views/student/list.blade.php ENDPATH**/ ?>