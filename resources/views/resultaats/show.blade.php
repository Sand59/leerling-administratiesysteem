@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-end pt-5 pb-3">
         <h2 class="mb-0">Student {{ $resultaat->resultaat }}</h2>
         <div>
            <a class="btn btn-primary" href="{{ route('students.show', $resultaat->student_id) }}" title="Go back"> <i class="fa fa-backward"></i> </a>
         </div>
    </div>

    <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Resultaat:</strong>
            {{ $resultaat->resultaat }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Vak:</strong>
            {{ $resultaat->vak }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Cursusjaar:</strong>
            {{ $resultaat->cursusjaar }}
        </div>
    </div>
   <br><br>

</div>
@endsection

