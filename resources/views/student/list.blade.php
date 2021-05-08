<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="{{ asset('css/table.css') }}" type="text/css">
</head>
<body>
<h2>Student Details</h2>
<a href='{{url("/student/entry")}}'>New Student</a>
<table id="customers">
  <tr>
    <th>Id</th>
    <th>Name</th>
    <th>Age</th>
    <th>Gender</th>
    <th>Reporting Teacher</th>
    <th>Action</th>
  </tr>
  @foreach($students as $student)
  <tr>
    <td>{{$student->id}}</td>
    <td>{{$student->name}}</td>
    <td>{{$student->age}}</td>
    <td>{{$student->gender}}</td>
    <td>{{$student->reporting_teacher}}</td>
    <td><a href="{{url('/student/delete')}}/{{$student->id}}">Delete</a>&nbsp;<a href="{{url('/student/edit')}}/{{$student->id}}">Edit</a></td>
  </tr>
  @endforeach
</table>
{{$students->render()}}

</body>
</html>

