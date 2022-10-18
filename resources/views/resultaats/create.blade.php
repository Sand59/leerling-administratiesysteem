@extends('layouts.app')

@section('content')
<div class="row">
   <div class="d-flex justify-content-between align-items-end pt-5 pb-3">
         <h2 class="mb-0">Student_id = {{ $student_id }}</h2>
         <a class="btn btn-primary" href="{{ route('students.index') }}" title="Ga terug"> <i class="fas fa-backward "></i> </a>
    </div>
</div>
<!-- errors afvangen -->
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<!-- FORM.... -->
<form action="{{ route('resultaats.store') }}" method="POST" >
    @csrf 

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Resultaat:</strong>
                <input type="text" name="resultaat" class="form-control" placeholder="Resultaat">
            </div>
        </div><br><br><br>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Vak:</strong>
                <input type="text" name="vak" class="form-control" placeholder="Vak">
            </div>
         </div><br><br><br>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Cursusjaar:</strong>
                <input type="text" name="cursusjaar" class="form-control" placeholder="Cursusjaar">
            </div>
        </div><br><br><br>
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <input type="hidden" name="student_id" class="form-control" value="{{ $student_id }}">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
@endsection