<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="<?php echo e(asset('css/table.css')); ?>" type="text/css">
</head>
<body>
<h2>Student Marks</h2>
<a href='<?php echo e(url("/marks/entry")); ?>'>New Marks</a>
<table id="customers">
  <tr>
    <th>Id</th>
    <th>Name</th>
    <th>Maths</th>
    <th>Science</th>
    <th>History</th>
    <th>Terms</th>
    <th>Total Marks</th>
    <th>Created On</th>
    <th>Action</th>
  </tr>
  <?php $__currentLoopData = $marks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mark): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <tr>
    <td><?php echo e($mark->id); ?></td>
    <td><?php echo e($mark->student_mark->name); ?></td>
    <td><?php echo e($mark->maths); ?></td>
    <td><?php echo e($mark->science); ?></td>
    <td><?php echo e($mark->history); ?></td>
    <td><?php echo e($mark->terms); ?></td>
    <td><?php echo e($mark->total); ?></td>
    <td><?php echo e($mark->created_at); ?></td>
    <td><a href="<?php echo e(url('/mark/delete')); ?>/<?php echo e($mark->id); ?>">Delete</a>&nbsp;<a href="<?php echo e(url('/mark/edit')); ?>/<?php echo e($mark->id); ?>">Edit</a></td>
  </tr>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<?php echo e($marks->render()); ?>


</body>
</html>

<?php /**PATH /home/dark/fingent/example-app/resources/views/mark/list.blade.php ENDPATH**/ ?>