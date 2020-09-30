@extends('layouts.app')

@section('content')
<div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
    <div class="container-fluid">
        <div class="header-body">
            <!-- Card stats -->
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="card card-stats mb-4 mb-xl-0">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">Aplicativos</h5>
                                <span class="h2 font-weight-bold mb-0">0</span>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                                        <i class="ni ni-app"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="card card-stats mb-4 mb-xl-0">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">Usuários</h5>
                                <span class="h2 font-weight-bold mb-0">0</span>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-info  text-white rounded-circle shadow">
                                        <i class="ni ni-circle-08"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
<div class="container-fluid mt--7">
    <div class="header-body">
        <div class="row">
            <div class="col">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">Gerenciar Aplicativos</h3>
                            </div>
                            <div class="col text-right">
                                <td>
                                                   
                                              
                                    <form action="{{ route('aplicativos.create') }}">
                                        
                                        <button type="submit" class="btn btn-success">Cadastrar Novo</button>
                                    </form>
                                </td>
                              
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col" width="100">Imagem</th>
                                    <th scope="col">Nome</th>
                                    <th scope="col">Pacote</th>
                                    <th scope="col">Link</th>
                                    <th scope="col" width="100">Ações</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($aplicativos as $aplicativo)

                                <tr>
                                    <td>
                                        @if ($aplicativo->image)
                                            <img src="{{ url("storage/{$aplicativo->image}") }}" alt="{{ $aplicativo->nome }}" style="max-width: 100px;">
                                        @endif 
                                    </td>
                                    <td>{{ $aplicativo->nome }}</td>
                                    <td>{{ $aplicativo->package }}</td>
                                    <td>{{ $aplicativo->link }}</td>

                                    <td>
                                        <form action="{{ route('aplicativos.edit', $aplicativo->id) }}">
                                           @csrf
                                           
                                           <button type="submit" class="btn btn-success btn-sm">Editar</button>
                                       </form>
                                       <br>
                                       <form action="{{ route('aplicativos.destroy', $aplicativo->id) }}" method="post">
                                           @csrf
                                           @method('DELETE')
                                           <button type="submit" class="btn btn-danger btn-sm">Deletar</button>
                                       </form>
                                   </td>
                                @endforeach
                            </tbody>
                        </table>    
                    </div> 
                </div>
            </div>
        </div>
    </div>
</div>
<br>
@endsection

