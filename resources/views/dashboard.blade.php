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
                                                   
                                                   
                                    <form action="">
                                        
                                        <button type="submit" class="btn btn-success">Adcionar Novo</button>
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
                        
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>

                                    <td>
                                    
                                        </td>
                                        <td>
                                             <form action="">
                                               
                                                
                                                <button type="submit" class="btn btn-success">Editar</button>
                                            </form>
                                            <br>
                                            <form action="" >
                                               
                                               
                                                <button type="submit" class="btn btn-danger">Deletar</button>
                                            </form>
                                        </td>
                                    </tr> 
                                
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

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush
