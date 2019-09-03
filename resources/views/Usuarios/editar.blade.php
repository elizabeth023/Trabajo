@extends('layouts.layout')
@section('content')
@method('PATCH')
<div class="row">
	<section class="content">
		<div class="col-md-8 col-md-offset-2">
			@if (count($errors) > 0)
			<div class="alert alert-danger">
				<strong>Error!</strong> Revise los campos obligatorios.<br><br>
				<ul>
					@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
			@endif
			@if(Session::has('success'))
			<div class="alert alert-info">
				{{Session::get('success')}}
			</div>
			@endif

			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Editar Usuario </h3>
				</div>
				<div class="panel-body">					
					<div class="table-container">
						<form method="POST" action="{{ route('edit2Users',$usuario ) }}"  role="form">
						{{ method_field('POST') }}
							{{ csrf_field() }}
							<input name="_method" type="hidden" value="PATCH">
							<div class="row">
								<div class="col-xs-12 col-sm-12 col-md-12">
									Nombre
								</div>	
			
							<div class="col-xs-12 col-sm-12 col-md-12">
									<div class="form-group">
										<input type="text" name="nombre" id="nombre" class="form-control input-sm" value="{{$usuario->nombre}}">
									</div>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-12">
									Apellido Paterno
								</div>	
								<div class="col-xs-12 col-sm-12 col-md-12">
									<div class="form-group">
										<input type="text" name="ape_paterno" id="ape_paterno" class="form-control input-sm" value="{{$usuario->ape_paterno}}">
									</div>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-12">
									Apellido Materno
								</div>	
                                <div class="col-xs-12 col-sm-12 col-md-12">
									<div class="form-group">
										<input type="text" name="ape_materno" id="ape_materno" class="form-control input-sm" value="{{$usuario->ape_materno}}">
									</div>
								</div>
							</div>

							<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12">
									Edad
								</div>	
								<div class="col-xs-4 col-sm-4 col-md-4">
									<div class="form-group">
										<input type="text" name="edad" id="edad" class="form-control input-sm" value="{{$usuario->edad}}">
									</div>
								</div>
								
							</div>
							<br> <br>
							<div class="row">

								<div class="col-xs-12 col-sm-12 col-md-12">
									<input type="submit"  value="Actualizar" class="btn btn-success btn-block">
									<a href="{{ route('showUsers') }}" class="btn btn-info btn-block" >Atrás</a>
								</div>	

							</div>
						</form>
					</div>
				</div>

			</div>
		</div>
	</section>
	@endsection