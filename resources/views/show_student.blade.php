@extends('studentapp.layout')

@section('content')


    
    <h1>Student Record</h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Students Name</th>
            <th scope="col">Students Email</th>
            <th scope="col">Admission Number</th>
            <th scope="col">Students Address</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            <?php $x=1; ?>
          @foreach($students as $student)
            <tr>
                <td>{{ $x++ }}</td>
                <td> {{ $student->student_name }} </td>
                <td> {{ $student->email }} </td>
                <td> {{ $student->student_roll }} </td>
                <td> {{ $student->student_address }} </td>
                <td colspan="2">
                
                <form method="POST" action=" {{ route('student.destroy', $student->id) }} ">
                    {{ csrf_field() }}
                    <a href=" {{ route('student.edit', $student->id) }}" class="btn btn-success">Edit</a>
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit" class="btn btn-info">Delete</button>
                </form>  
                </td>
            </tr>
            @endforeach
        </tbody>
      </table>
@endsection