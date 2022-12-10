@extends('layouts.master')

@section('title')
Alumnos us Edit
@endsection


@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="cart-title"> Alumnos us Edit </h4>

                <form action="{{url('alumnos-update/'.$alumnos->id)}}" method="POST">

                    {{csrf_field()}}
                    {{method_field('PUT')}}

                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Nombre:</label>
                        <input type="text" class="form-control" name="Nombre_Alumno" value="{{ $alumnos->Nombre_Alumno }}">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Matricula:</label>
                        <input type="text" class="form-control" name="matricula" value="{{ $alumnos -> matricula}}">
                    </div>

                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Edad:</label>
                        <input type="text" class="form-control" name="edad" value="{{ $alumnos -> edad}}">
                    </div>

                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Grupo:</label>
                        <input type="text" class="form-control" name="grupo" value="{{ $alumnos -> grupo}}">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Email:</label>
                        <input type="email" class="form-control" name="email" value="{{ $alumnos -> email }}"></input>
                    </div>
                    <div class="modal-footer">
                        <a href="{{url('alumnos')}}" class="btn btn-secondary" data-dismiss="modal">BACK</a>
                        <button type="submit" class="btn btn-primary">UPDATE</button>
                    </div>

                </form>

            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')

@endsection