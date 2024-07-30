@extends('layouts.myLayout')

@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>Usuarios</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item active">
                    <strong>Clientes</strong>
                </li>
            </ol>
        </div>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox ">
                    <div class="ibox-title">
                        <a href="{{ route('usuarios.create') }}" class="btn btn-success">Nuevo Cliente</a>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="#" class="dropdown-item">Config option 1</a>
                                </li>
                                <li><a href="#" class="dropdown-item">Config option 2</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">

                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover dataTables-example">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>Nombre y Apellido</th>
                                        {{-- <th>Apellido</th> --}}
                                        <th>CI</th>
                                        <th>Email</th>
                                        <th>Telefono</th>
                                        <th>Rol</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($clientes as $cliente)
                                    <tr class="gradeX">
                                        <td>{{$cliente->id}}</td>
                                        <td>{{$cliente->nombre}}</td>
                                        {{-- <td>{{$cliente->apellido}}</td> --}}
                                        <td>{{$cliente->ci}}</td>
                                        <td>{{$cliente->email}}</td>
                                        <td>{{$cliente->telefono}}</td>
                                        <td>{{$cliente->rol}}</td>
                                        
                                        @if (Auth::user()->roles[0]->role->rol == 'Administrador')
                                                <form class="formulario-eliminar"
                                                    action="{{ route('clientes.destroy', $cliente->id) }}" method="POST">
                                                    @csrf
                                                    @method('delete')
                                                    <td>
                                                        <button type="submit" class="btn btn-danger btn-sm"><i
                                                                class="fa fa-trash-o"></i></button>
                                                    </td>
                                                </form>
                                            @endif
                                         
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
