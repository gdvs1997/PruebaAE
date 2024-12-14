@extends('layouts.admin')

@section('content-admin')

  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Editar Detalle de Categoria</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{url('/')}}">Inicio</a></li>
            <li class="breadcrumb-item active">Detalle de Categorias</li>
            <li class="breadcrumb-item active">Editar Detalle</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Informacion del Detalle</span>
                        <div class="card-tools">
                          <a class="btn btn-secondary btn-sm" href="{{ route('detalle-categorias.index') }}">
                            <i class="fa fa-fw"><i class="bi bi-arrow-left"></i></i> Regresar
                          </a>
                        </div>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('detalle-categorias.update', $detalleCategoria->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('detalle-categoria.form')

                            <br>
                            <div class="row">
                                <div class="col-2">
                                    <button type="submit" class="btn btn-success btn-block">
                                        <i class="fa"><i class="bi bi-floppy2-fill"></i></i>
                                        &nbsp;Guardar Cambios
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
