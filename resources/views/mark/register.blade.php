<!DOCTYPE html>
<html>
<link rel="stylesheet" href="{{ asset('css/register.css') }}" type="text/css">
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
  <form method='post' action="{{$action}}">
    {{csrf_field()}}
    <?php
    if(isset($mark))
    {
    ?>
    <input type='hidden' id='ids' name='ids' value='{{$mark->id}}'>
    <?php
    }
    ?>
    <label for="fname">Student</label>
    <select id="student" name="student">
      <option value="">Select</option>
      @foreach($students as $student)
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
      {{$selected}}
      value="{{$student->id}}">{{$student->name}}</option>
      @endforeach
    </select>
    <label for="fname">Term</label>
    <select id="term" name="term">
      <option value="">Select</option>
      <option value="1">ONE</option>
      <option value="2">TWO</option>
    </select>
    <center><u>Marks</u></center><br>
    <label for="lname">Maths</label>
    <input type="text" value="{{$maths}}" id="maths" name="maths" placeholder="Maths Mark..">
    <label for="lname">Science</label>
    <input type="text" value='{{$science}}' id="science" name="science" placeholder="Science Mark..">
    <label for="lname">History</label>
    <input type="text" value='{{$history}}' id="history" name="history" placeholder="History Mark..">
  
    <input type="submit" value="Submit">
  </form>
  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
</div>

</body>
</html>

