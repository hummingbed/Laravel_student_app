@extends('studentapp.layout')

@section('content')

@include('session.success')

<div class="card">
  <div class="card-header">
    Add Student Record
  </div>
  <div class="row">
    <div class="col-sm-6">
          <div class="card-body" style="width: 400px;">
        <form method="POST" action="{{ route('student.store') }}">

        {{ csrf_field() }}
        <div class="form-group">
          <label>Student Name</label>
        <input type="text" class="form-control" name="student_name"  placeholder="Student Name" value="{{ old('student_name') }} ">
        </div>

        <div class="form-group">
          <label>Student Email</label>
          <input type="text" class="form-control" name="student_email" value="{{ old('student_email') }} " placeholder="Student Email">
        </div>

        <div class="form-group">
          <label>Admission Number</label>
          <input type="text" class="form-control" name="student_roll" value="{{ old('student_roll') }} " placeholder="Student Roll">
        </div>
      
        <div class="form-group">
          <label>Student Address</label>
          <textarea name="student_address" class="form-control" value="{{ old('student_address') }}" placeholder="Student Address"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
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

