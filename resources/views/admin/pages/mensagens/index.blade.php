@extends('layouts.app')

@section('content') 
<div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">

    <div class="container-fluid">
        <div class="header-body">
            <div class="row">
                <div class="col">
                    <div class="card shadow">
                        <div class="card-header border-0">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h3 class="mb-0">Listagem De Mensagens</h3> 
                                </div>
                                <form action="{{ route('mensagens.create') }}">
                                        
                                    <button type="submit" class="btn btn-success">Criar Mensagem</button>
                                </form>
                                
                            </div>
                        </div> 
                        <div class="table-responsive">
                            <table class="table align-items-center table-flush">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col">Título</th>
                                        <th scope="col">Mensagem</th>
                                        <th scope="col" width="100">Ações</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($mensagens as $mensagem)
                                        <tr>
                                            <td>{{ $mensagem->titulo }}</td>
                                            <td>{{ $mensagem->alerta }}</td>
                                            <td>
                                                 <form action="{{ route('mensagens.edit', $mensagem->id) }}">
                                                    @csrf
                                                    
                                                    <button type="submit" class="btn btn-success btn-sm">Editar</button>
                                                </form>
                                                <br>
                                                <form action="{{ route('mensagens.destroy', $mensagem->id) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm">Deletar</button>
                                                </form>
                                            </td>
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