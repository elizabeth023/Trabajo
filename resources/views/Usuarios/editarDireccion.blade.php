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
					<h3 class="panel-title">Editar Direccion </h3>
				</div>
				<div class="panel-body">					
					<div class="table-container">
						<form method="POST" action="{{ route('updateAdress' ,$direccion ) }}"  role="form">
						{{ method_field('POST') }}
							{{ csrf_field() }}
							<input name="_method" type="hidden" value="PATCH">
							<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12">
									Calle
								</div>	
								<div class="col-xs-12 col-sm-12 col-md-12">
									<div class="form-group">
										<input type="text" name="calle" id="calle" class="form-control input-sm" value="{{$direccion->calle}}">
									</div>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-12">
									Colonia
								</div>	
								<div class="col-xs-12 col-sm-12 col-md-12">
									<div class="form-group">
										<input type="text" name="colonia" id="colonia" class="form-control input-sm" value="{{$direccion->colonia}}">
									</div>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-12">
									Delegacion
								</div>	
                                <div class="col-xs-12 col-sm-12 col-md-12">
									<div class="form-group">
										<input type="text" name="delegacion" id="delegacion" class="form-control input-sm" value="{{$direccion->delegacion}}">
									</div>
								</div>
							</div>

							<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12">
									Numero
								</div>	
								<div class="col-xs-12 col-sm-12 col-md-12">
									<div class="form-group">
										<input type="text" name="numero" id="numero" class="form-control input-sm" value="{{$direccion->numero}}">
									</div>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-12">
									Usuario
								</div>	
                                <div class="col-xs-12 col-sm-12 col-md-12">
									<div class="form-group">
										<input type="text" name="usuario" id="usuario" class="form-control input-sm" value="{{$direccion->usuario}}">
									</div>
								</div>
								
							</div>
							<br> <br>
							<div class="row">

								<div class="col-xs-12 col-sm-12 col-md-12">
									<input type="submit"  value="Actualizar" class="btn btn-success btn-block">
									<a href="{{ route('showAdress') }}" class="btn btn-info btn-block" >Atrás</a>
								</div>	

							</div>
						</form>
					</div>
				</div>

			</div>
		</div>
	</section>
	@endsection