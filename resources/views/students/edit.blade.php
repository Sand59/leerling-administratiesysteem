@extends('layouts.app')

@section('content')
<div class="row">
<div class="d-flex justify-content-between align-items-end pt-5 pb-3">
         <h2 class="mb-0">Studenten</h2>
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
<form action="{{ route('students.update', $student->id) }}" method="POST" >
    @csrf
    @method('PUT')

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Roepnaam:</strong>
                <input type="text" name="roepnaam" class="form-control" value="{{ $student->roepnaam }}">
            </div>
        </div><br><br><br>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Voorvoegsel:</strong>
                <input type="text" name="voorvoegsel" class="form-control" value="{{ $student->voorvoegsel }}">
            </div>
         </div><br><br><br>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Achternaam:</strong>
                <input type="text" name="achternaam" class="form-control" value="{{ $student->achternaam }}">
            </div>
        </div><br><br><br>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Voorletters:</strong>
                <input type="text" name="voorletters" class="form-control" value="{{ $student->voorletters }}">
            </div>
        </div><br><br><br>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Officielenaam:</strong>
                <input type="text" name="officielenaam" class="form-control" value="{{ $student->officielenaam }}">
            </div>
        </div><br><br><br>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Postcode:</strong>
                <input type="text" name="postcode" class="form-control" value="{{ $student->postcode }}">
            </div>
        </div><br><br><br>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Straat:</strong>
                <input type="text" name="straat" class="form-control" value="{{ $student->straat }}">
            </div>
        </div><br><br><br>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Huisnummer:</strong>
                <input type="text" name="huisnummer" class="form-control" value="{{ $student->huisnummer }}">
            </div>
        </div><br><br><br>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Toevoeging:</strong>
                <input type="text" name="toevoeging" class="form-control" value="{{ $student->toevoeging }}">
            </div>
        </div><br><br><br>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Woonplaats:</strong>
                <input type="text" name="woonplaats" class="form-control" value="{{ $student->woonplaats }}">
            </div>
        </div><br><br><br>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Klas:</strong>
                <input type="text" name="klas" class="form-control" value="{{ $student->klas }}">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <input type="hidden" name="project_id" class="form-control" value="{{ $student->student_id }}">
            </div>
        </div>
        <br>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
@endsection
