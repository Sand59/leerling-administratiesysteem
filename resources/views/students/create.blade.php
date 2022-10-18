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
<form action="{{ route('students.store') }}" method="POST" >
    @csrf 

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Roepnaam:</strong>
                <input type="text" name="roepnaam" class="form-control" placeholder="Roepnaam">
            </div>
        </div><br><br><br>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Voorvoegsel:</strong>
                <input type="text" name="voorvoegsel" class="form-control" placeholder="Voorvoegsel">
            </div>
         </div><br><br><br>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Achternaam:</strong>
                <input type="text" name="achternaam" class="form-control" placeholder="Achternaam">
            </div>
        </div><br><br><br>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Voorletters:</strong>
                <input type="text" name="voorletters" class="form-control" placeholder="Voorletters">
            </div>
        </div><br><br><br>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Officielenaam:</strong>
                <input type="text" name="officielenaam" class="form-control" placeholder="Officielenaam">
            </div>
        </div><br><br><br>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Postcode:</strong>
                <input type="text" name="postcode" class="form-control" placeholder="Postcode">
            </div>
        </div><br><br><br>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Straat:</strong>
                <input type="text" name="straat" class="form-control" placeholder="Straat">
            </div>
        </div><br><br><br>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Huisnummer:</strong>
                <input type="text" name="huisnummer" class="form-control" placeholder="Huisnummer">
            </div>
        </div><br><br><br>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Toevoeging:</strong>
                <input type="text" name="toevoeging" class="form-control" placeholder="Toevoeging">
            </div>
        </div><br><br><br>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Woonplaats:</strong>
                <input type="text" name="woonplaats" class="form-control" placeholder="Woonplaats">
            </div>
        </div><br><br><br>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Klas:</strong>
                <input type="text" name="klas" class="form-control" placeholder="Klas">
            </div>
        </div>
        <br><br><br>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
@endsection