@extends('layouts.layout')
@section('content')
<div class="row">
  <section class="content">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="pull-left"><h3> USUARIOS </h3> </div>
          <div class="pull-right">
            <div class="btn-group">
              <a href="{{ url('verUsuario') }}" class="btn btn-info" > Añadir usuario </a>              
            </div>
          </div>
          <div class="table-container">
            <table id="mytable" class="table table-bordred table-striped">
             <thead>
               <th>Nombre</th>
               <th>Apellido Paterno</th>
               <th>Apellido Materno</th>
               <th>Edad </th> 
             </thead>
             <tbody>
              @foreach($usuario as $usu)  
              <tr>
                <td>{{$usu->nombre}}</td>
                <td>{{$usu->ape_paterno}}</td>
                <td>{{$usu->ape_materno}}</td>
                <td>{{$usu->edad}}</td>
                <td>
                    <a class="btn btn-primary btn-xs" href="{{action('usuarioController@edit', $usu->id)}}" ><span class="glyphicon glyphicon-pencil"></span>  </a> 
                </td>

                <td>
                  <form action="{{action('usuarioController@destroy', $usu->id)}}" method="post">
                   {{csrf_field()}}
                   <input name="_method" type="hidden" value="DELETE"> 
 
                   <button class="btn btn-danger btn-xs" type="submit"><span class="glyphicon glyphicon-trash"></span></button>
                 </td>
               </tr>
               <tr> 
                   
                </tr>
               @endforeach 

            </tbody>
 
          </table>
        </div>
      </div>
      
    </div>
  </div>
</section>
@endsection

  