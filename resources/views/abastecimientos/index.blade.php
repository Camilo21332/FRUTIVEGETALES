@extends('layouts.plantilla')

@section('content')

<table>
    <thead>
        <tr>
            <th> nombre <span class=""></span></th>
            
     
        </tr>
    </thead>
    @foreach ($abastecimiento as $abastecimiento)
    <tbody>
        <tr>
            <td>{{$abastecimiento->id}} </td>
            <td>{{$abastecimiento->PUNTnombre}}</td>
            
         
            <td>
             <a href="{{route('abastecimientos.create')}}"><p class="status delivered">Agregar </p></a>
            </td>

    </tbody>
    @endforeach</td>
</table>




@endsection