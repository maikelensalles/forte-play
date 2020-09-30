@extends('layouts.app', ['title' => __('Cadastrar Produto')])

@section('content')
<div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
    <div class="container-fluid"> 
        <div class="header-body">
            <div class="card shadow">
                <div class="card-header border-0">
                    <div class="p-4 bg-secondary">
                        <h1>Cadastrar Novo Aplicativo</h1> 
                        <form action="{{ route('aplicativos.store') }}" method="post" enctype="multipart/form-data" class="form">
                            @include('admin.pages.aplicativos.reuses.form')   
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection