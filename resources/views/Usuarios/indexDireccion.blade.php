@extends('layouts.layout')
@section('content')
<div class="row">
  <section class="content">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="pull-left"><h3> DIRECCIONES </h3> </div>
          <div class="pull-right">
            <div class="btn-group">
              <a href="{{ route('openAdress') }}" class="btn btn-info" > Añadir Direccion </a>
              
            </div>
          </div>
          <div class="table-container">
            <table id="mytable" class="table table-bordred table-striped">
             <thead>
               <th>Calle</th>
               <th>Colonia</th>
               <th>Delegacion</th>
               <th>Numero </th> 
               <th>Usuario </th> 
             </thead>
             <tbody>
              @foreach($direccion as $dire)  
              <tr>
                <td>{{$dire->calle}}</td>
                <td>{{$dire->colonia}}</td>
                <td>{{$dire->delegacion}}</td>
                <td>{{$dire->numero}}</td>
                <td>{{$dire->usuario}}</td>
                <td>
                    <a class="btn btn-primary btn-xs" href="{{action('direccionController@edit', $dire->id)}}" ><span class="glyphicon glyphicon-pencil"></span>  </a> 
                </td>

                <td>
                  <form action="{{action('direccionController@destroy', $dire->id)}}" method="post">
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
  