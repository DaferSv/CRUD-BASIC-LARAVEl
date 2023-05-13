@extends('layouts.app')

@section('template_title')
    {{ $maestro->name ?? "{{ __('Show') Maestro" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Maestro</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('maestros.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $maestro->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Grado:</strong>
                            {{ $maestro->grado }}
                        </div>
                        <div class="form-group">
                            <strong>Seccion:</strong>
                            {{ $maestro->seccion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
