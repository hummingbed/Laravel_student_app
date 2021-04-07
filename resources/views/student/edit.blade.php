@extends('studentapp.layout')

@section('content')

@include('session.success')

<div class="card">
  <div class="card-header">
    Update Student Record
  </div>
  <div class="row">
    <div class="col-sm-6">
          <div class="card-body" style="width: 400px;">
        <form method="post" action="{{ route('student.update', $student->id) }}">

            <input type="hidden" name="_method" value="PUT">
        {{ csrf_field() }}
        <div class="form-group">
          <label>Student Name</label>
        <input type="text" class="form-control" name="student_name"  placeholder="Student Name" value="{{ $student->student_name }} ">
        </div>

        <div class="form-group">
          <label>Student Email</label>
          <input type="text" class="form-control" name="student_email" value=" {{ $student->email }} " placeholder="Student Email">
        </div>

        <div class="form-group">
          <label>Student Roll</label>
          <input type="text" class="form-control" name="student_roll" value="{{ $student->student_roll }} " placeholder="Student Roll">
        </div>
      
        <div class="form-group">
          <label>Student Address</label>
          <textarea name="student_address" class="form-control" placeholder="Student Address">{{ $student->student_address }}</textarea>
        </div>

        <button type="submit" class="btn btn-success">Update</button>
      </form>

      
          
        </div>
    </div>
    <div class="col-sm-6">
    @if($errors->any())

    @foreach($errors->all() as $error)
    
     <li class="text-danger">
     {{ $error }}
    </li>
    @endforeach

    @endif
    </div>
  </div>
  
</div>

@endsection

