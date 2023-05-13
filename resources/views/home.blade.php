@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Ya te has logeado, ya puedes acceder a los panales de administracion de "alumnos y maestros"') }}
                    <br><br><a class="btn btn-primary" href="alumnos" role="button">Alumnos</a>
                    <br><br><a class="btn btn-primary" href="maestros" role="button">Maestros</a>
                 </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
