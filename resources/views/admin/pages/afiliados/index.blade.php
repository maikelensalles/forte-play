@extends('layouts.app')
@section('content') 
<div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">  
    <div class="container-fluid">
        <a type="button" class="btn btn-success" style="margin-bottom: 15px" href="/afiliados" >
            <i class="fa fa-refresh"></i>
                Recarregar
        </a>
        <div class="header-body">
            <div class="row">
                <div class="col">
                    <div class="card shadow">
                        <div class="card-header border-0">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h3 class="mb-0">Trabalhe Conosco</h3>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table align-items-center table-flush">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Nome</th>
                                        <th>Telefone</th>
                                        <th>Hora</th>
                                        <th>Data</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($afiliado as $a)
                                        <tr>
                                            <td>{{ $a->nome }}</td>
                                            <td><a href="https://api.whatsapp.com/send?phone=55{{ $a->telefone }}">{{ $a->telefone }}</a></td>
                                            <td>{{ date( 'H:i' , strtotime($a->created_at)) }}</td>
                                            <td>{{ date( 'd/m/Y' , strtotime($a->created_at)) }}</td>
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
</div>
@endsection