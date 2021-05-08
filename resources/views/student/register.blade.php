<!DOCTYPE html>
<html>
<link rel="stylesheet" href="{{ asset('css/register.css') }}" type="text/css">
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
  <form method='post' action="{{$action}}">
    {{csrf_field()}}
    <label for="fname">Student Name</label>
    <?php
    if($name != '')
    {
    ?>
    <input type="hidden" id="ids" value="{{$student->id}}" name="ids">
    <?php
    }
    ?>
    <input type="text" id="name" value='{{$name}}' name="name" placeholder="Student Name..">

    <label for="lname">Age</label>
    <input type="text" id="age" value='{{$age}}' name="age" placeholder="Student Age..">

    <label for="country">Gender</label>
    <select id="gender" name="gender">
      <option value="">Select</option>
      <option value="M">Male</option>
      <option value="F">Female</option>
      <option value="O">Others</option>
    </select>
    <label for="lname">Reporting Teacher</label>
    <input type="text" id="teacher" value='{{$teacher}}' name="teacher" placeholder="Reporting Teacher...">
    <input type="submit" value="Save">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
  </form>
</div>

</body>
</html>

