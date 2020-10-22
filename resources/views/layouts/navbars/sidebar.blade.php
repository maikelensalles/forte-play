<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Brand -->
        <a class="navbar-brand pt-0" href="{{ route('home') }}">
            <img src="{{ asset('argon') }}/img/fortplay.png" class="navbar-brand-img" alt="...">
        </a>
        <a href="https://homecompany.site" style="font-size: 13px; text-align: center; color: #FA0E10">Por Home Company</a>
        <!-- User -->
        
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
            <!-- Collapse header -->
            <div class="navbar-collapse-header d-md-none">
                <div class="row">
                    <div class="col-6 collapse-brand">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('argon') }}/img/fortplay.png">
                        </a>
                    </div>
                    <div class="col-6 collapse-close">
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Form -->
           
            <!-- Navigation -->
            <ul class="navbar-nav">
                <li class="nav-item">

                    <a class="nav-link" href="{{ route('home') }}">
                        <i class="ni ni-tv-2 text-danger"></i> {{ __('Aplicativos') }}
                    </a>

                    <a class="nav-link" href="{{ route('mensagens.index') }}">
                        <i class="ni ni-chat-round text-danger"></i> {{ __('Mensagens') }}
                    </a>

                    <a class="nav-link" href="{{ route('users.index') }}">
                        <i class="ni ni-support-16 text-danger"></i> {{ __('Suporte Técnico') }}
                    </a>

                    <a class="nav-link" href="{{ route('afiliados.index') }}">
                        <i class="ni ni-building text-danger"></i> {{ __('Trabalhe Conosco') }}
                    </a>

                    <a class="nav-link" href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <i class="ni ni-button-power text-danger"></i> {{ __('Sair') }}
                    </a>
                </li>
            </ul>
            <!-- Divider -->
            <hr class="my-3">

        </div>
    </div>
</nav>
