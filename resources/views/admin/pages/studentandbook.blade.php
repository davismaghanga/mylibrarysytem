@extends('admin.layout')
@section('content')
    <div class="widget-content nopadding">
        <table class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>Reg No</th>
                <th>Student Name</th>
                <th>Book Name</th>
            </tr>
            </thead>
            <tbody>
            @foreach($studentsbooks as $studentbook)
                    <tr>
                        <td> {{$studentbook->student->regno}}</td>
                        <td> {{$studentbook->student -> name}}</td>
                        <td>{{$studentbook ->book-> book_name}} </td>
                    </tr>
            @endforeach


            </tbody>
        </table>

    </div>

@endsection