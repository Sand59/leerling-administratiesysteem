@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-end pt-5 pb-3">
         <h2 class="mb-0">Studenten</h2>
         <a class="btn btn-success" href="{{ route('students.create') }}" title="Create a student"> <i class="fas fa-plus-circle"></i></a>
    </div>
    <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>Naam</th>
            <th>Straat</th>
            <th>Nummer</th>
            <th>Postcode</th>
            <th>Klas</th>
            <th width="120px">Action</th>
        </tr>
    @foreach($students as $student)
        <tr>
            <td>{{ $student->roepnaam }}</td>
            <td>{{ $student->straat }}</td>
            <td>{{ $student->huisnummer }}</td>
            <td>{{ $student->postcode }}</td>
            <td>{{ $student->klas }}</td>
            <td>
                <form action="{{ route('students.destroy', $student->id) }}" method="POST">
                    <a class="text-decoration-none" href="{{ route('students.show', $student->id) }}" title="show">
                        <i class="fas fa-eye text-success fa-lg"></i>
                    </a>
                    <a class="text-decoration-none" href="{{ route('students.edit', $student->id) }}" title="edit">
                        <i class="fas fa-edit fa-lg"></i>
                    </a>

                    @csrf
                    @method('DELETE')

                    <button class="p-0" type="submit" title="delete student {{ $student->id }}" style="border: none; background-color:transparent;">
                        <i class="fas fa-trash fa-lg text-danger"></i>
                    </button>
                </form>
            </td>
        </tr>
    @endforeach

    </table>
@endsection

