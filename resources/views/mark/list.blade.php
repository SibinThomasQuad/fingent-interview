<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="{{ asset('css/table.css') }}" type="text/css">
</head>
<body>
<h2>Student Marks</h2>
<a href='{{url("/marks/entry")}}'>New Marks</a>
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
  @foreach($marks as $mark)
  <tr>
    <td>{{$mark->id}}</td>
    <td>{{$mark->student_mark->name}}</td>
    <td>{{$mark->maths}}</td>
    <td>{{$mark->science}}</td>
    <td>{{$mark->history}}</td>
    <td>{{$mark->terms}}</td>
    <td>{{$mark->total}}</td>
    <td>{{$mark->created_at}}</td>
    <td><a href="{{url('/mark/delete')}}/{{$mark->id}}">Delete</a>&nbsp;<a href="{{url('/mark/edit')}}/{{$mark->id}}">Edit</a></td>
  </tr>
  @endforeach
</table>
{{$marks->render()}}

</body>
</html>

