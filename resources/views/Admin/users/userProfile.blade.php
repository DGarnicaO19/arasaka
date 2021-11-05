@extends('Admin.layout')
@section('currentPage','Profile')
@section('content')
<div class="content-right user-profile">
    <h2>Perfil</h2>
    <div class="content">
        <div class="flex-item">
            <span>Nombre</span>
            <p>{{auth()->user()->name}}</p>
        </div>
        <div class="flex-item">
            <span>Email</span>
            <p>{{auth()->user()->email}}</p>
        </div>
        <div class="flex-item">
            <span>Empresas agregadas</span>
            <p>{{auth()->user()->products->count()}}</p>
        </div>
    </div>
</div>
@endsection
