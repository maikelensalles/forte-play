



            @extends('layouts.app')

            @section('content') 
            <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
            
                <div class="container-fluid">
                    <a type="button" class="btn btn-success" style="margin-bottom: 15px" href="/users" >
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
                                                <h3 class="mb-0">Gestão de Usuários</h3>
                                            </div>
                                            <div class="col text-right">
                                                <td>
                                                   
                                                   
                                                   {{-- <form action="{{ route('users.create') }}">
                                                       
                                                       <button type="submit" class="btn btn-success">Criar Usuário</button>
                                                   </form> --}}
                                               </td>
                                              
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table align-items-center table-flush">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th>Nome</th>
                                                    <th>ID Acesso</th>
                                                    <th>Telefone</th>
                                                    <th>Aplicativo Usado</th>
                                                    <th>Hora</th>
                                                    <th>Data</th>
                                                    {{-- <th>Ação</th> --}}
                                                </tr>
                                            </thead>
            
                                            <tbody>
                                                @foreach ($cliente as $c)
                                                <tr>
                                                    <td>{{ $c->nome }}</td>
                                                    <td>{{ $c->login }}</td>
                                                    <td><a href="https://api.whatsapp.com/send?phone=55{{ $c->telefone }}">{{ $c->telefone }}</a></td>
                                                    <td>{{ $c->aplicativo }}</td>
                                                    <td>{{ date( 'H:i' , strtotime($c->created_at)) }}</td>
                                                    <td>{{ date( 'd/m/Y' , strtotime($c->created_at)) }}</td>
                                                        {{-- <td>
                                                             <form action="{{ route('users.edit',$user->id) }}">
                                                                @csrf
                                                                
                                                                <button type="submit" class="btn btn-success">Editar</button>
                                                            </form>
                                                            <br>
                                                            <form action="{{ route('users.destroy', $c->id) }}" method="post">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-danger">Deletar</button>
                                                            </form>
                                                        </td> --}}
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