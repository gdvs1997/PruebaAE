@extends('layouts.admin')


@section('content-admin')

  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Crear Nueva Categoria</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{url('/')}}">Inicio</a></li>
            <li class="breadcrumb-item active">Categorias</li>
            <li class="breadcrumb-item active">Crear Nueva</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
   
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card card-default">

                    <div class="card-header">
                      <h3 class="card-title">Informacion de la Categoria</h3>
                      <div class="card-tools">
                        <a class="btn btn-secondary btn-sm" href="{{ route('categorias.index') }}">
                          <i class="fa fa-fw"><i class="bi bi-arrow-left"></i></i> Regresar
                        </a>
                      </div>
                    </div>

                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('categorias.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('categoria.form')

                            <br>
                            <div class="row">
                                <div class="col-2">
                                    <button type="submit" class="btn btn-primary btn-block">
                                        <i class="fa"><i class="bi bi-plus-circle"></i></i>
                                        &nbsp;Crear
                                    </button>
                                </div>
                            </div> 

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
