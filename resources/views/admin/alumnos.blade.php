@extends('layouts.master')

@section('title')
Alumnos | Funda of web IT
@endsection


@section('content')

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">ADD Students</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/save-alumnos" method="POST">

                    {{csrf_field()}}


                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Nombre:</label>
                        <input type="text" class="form-control" name="Nombre_Alumno">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Matricula:</label>
                        <input type="text" class="form-control" name="matricula">
                    </div>

                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Edad:</label>
                        <input type="text" class="form-control" name="edad">
                    </div>

                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Grupo:</label>
                        <input type="text" class="form-control" name="grupo">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Email:</label>
                        <input type="email" class="form-control" name="email"></input>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">SAVE</button>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Alumnos
                    <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">ADD</button>
                </h4>
                <br>
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class=" text-primary">
                            <th> id </th>
                            <th> Alumnos </th>
                            <th> Matricula </th>
                            <th> edad </th>
                            <th> grupo </th>
                            <th> email </th>
                            <th> EDIT </th>
                            <th> DELETE </th>
                        </thead>

                        <tbody>
                            @foreach ($alumnos as $data)

                            <tr>
                                <td> {{$data->id}} </td>
                                <td> {{$data->Nombre_Alumno}} </td>
                                <td>{{$data->matricula}} </td>
                                <td> {{$data->edad}} </td>
                                <td> {{$data->grupo}} </td>
                                <td> {{$data->email}} </td>

                                <td>
                                    <a href="{{ url('alumnos-us/'.$data->id)}}" class="btn btn-success"> EDIT </a>
                                </td>

                                <td>
                                    <form action="{{url('alumnos-us-delete/'.$data->id)}}" method="POST">

                                        {{csrf_field()}}
                                        {{method_field('DELETE')}}
                                        <button type="submit" class="btn btn-danger"> DELETE </button>

                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>


@endsection

@section('scripts')

@endsection