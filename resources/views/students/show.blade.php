@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-end pt-5 pb-3">
         <h2 class="mb-0">Student {{ $student->officielenaam }}</h2>
         <div>
            <a class="btn btn-success" href="{{ route('resultaats.create', $student->id ) }}" title="Create a resultaat"> <i class="fas fa-plus-circle"></i></a>
            <a class="btn btn-primary" href="{{ route('students.index') }}" title="Go back"> <i class="fa fa-backward"></i> </a>
         </div>
    </div>

    <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>ID:</strong>
            {{ $student->id }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Naam:</strong>
            {{ $student->officielenaam }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Straat:</strong>
            {{ $student->straat }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Huisnummer:</strong>
            {{ $student->huisnummer }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Postcode:</strong>
            {{ $student->postcode }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Klas:</strong>
            {{ $student->klas }}
        </div>
    </div>
   <br><br>

	<!--Resultaaten-->
	<div class="container">
    <table class="table table-bordered table-responsive-lg">
        <tr>
        <th>Resultaat</th>
        <th>Cursusjaar</th>
        <th>Vak</th>
            <th width="280px">Action</th>
        </tr>
    @foreach ($student->resultaats as $resultaat)

        <tr>
         <td>{{ $resultaat->resultaat }}</td>
         <td>{{ $resultaat->cursusjaar }}</td>
         <td>{{ $resultaat->vak }}</td>
            <td>
               <a class="text-decoration-none" href="{{ route('resultaats.show', $resultaat->id) }}" title="show">
                  <i class="fas fa-eye text-success  fa-lg"></i>
               </a>

               <a class="text-decoration-none" href="{{ route('resultaats.edit', $resultaat->id) }}" title="edit">
                  <i class="fas fa-edit  fa-lg"></i>
               </a>
                  <form class="d-inline" action="{{ route('resultaats.destroy', $resultaat->id) }}" method="POST">
                     @csrf
                     @method('DELETE')

                     <button type="submit" title="delete project {{ $resultaat->name }}" style="border: none; background-color:transparent;">
                        <i class="fas fa-trash fa-lg text-danger"></i>
                     </button>
                  </form>
            </td>
        </tr>
    @endforeach
    </table>
</div>

</div>
@endsection

