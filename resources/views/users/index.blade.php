



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
                                                <h3 class="mb-0">Gestão de Usuários</h3>
                                            </div>
                                            <div class="col text-right">
                                                <td>
                                                   
                                                   
                                                   <form action="{{ route('users.create') }}">
                                                       
                                                       <button type="submit" class="btn btn-success">Criar Usuário</button>
                                                   </form>
                                               </td>
                                              
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table align-items-center table-flush">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th>Nome</th>
                                                    <th>Email</th>
                                                    <th>Função</th>
                                                    <th>Ação</th>
                                                </tr>
                                            </thead>
            
                                            <tbody>
                                                @foreach ($data as $key => $user)
                                                <tr>
                                                    <td>{{ $user->name }}</td>
                                                    <td>{{ $user->email }}</td>
                                                    <td>
                                                        @if(!empty($user->getRoleNames()))
                                                        @foreach($user->getRoleNames() as $v)
                                                        <label class="badge badge-success">{{ $v }}</label>
                                                        @endforeach
                                                        @endif
                                                        </td>
                                                        <td>
                                                             <form action="{{ route('users.edit',$user->id) }}">
                                                                @csrf
                                                                
                                                                <button type="submit" class="btn btn-success">Editar</button>
                                                            </form>
                                                            <br>
                                                            <form action="{{ route('users.destroy', $user->id) }}" method="post">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-danger">Deletar</button>
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