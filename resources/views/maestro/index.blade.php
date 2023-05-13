@extends('layouts.app')

@section('template_title')
    Maestro
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Maestro') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('maestros.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>

										<th>Nombre</th>
										<th>Grado</th>
										<th>Seccion</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($maestros as $maestro)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $maestro->nombre }}</td>
											<td>{{ $maestro->grado }}</td>
											<td>{{ $maestro->seccion }}</td>

                                            <td>
                                                <form action="{{ route('maestros.destroy',$maestro->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('maestros.show',$maestro->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('maestros.edit',$maestro->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <br><a class="btn btn-danger" href="home" role="button">Dashboard</a>
                        </div>
                    </div>
                </div>
                {!! $maestros->links() !!}
            </div>
        </div>
    </div>
@endsection
