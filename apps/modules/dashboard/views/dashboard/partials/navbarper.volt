<nav class="navbar navbar-primary bg-primary fixed-top">
    <button type="button" id="sidebarCollapse" class="btn btn-primary border-0" >
            <i class="fas fa-bars"></i>&nbsp&nbsp&nbsp myKP
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent"></div>
        {% if session.has('auth')%}
            <div class="dropdown">
                <button type="button" class="btn btn-primary" data-toggle="dropdown">
                    <i class="fa fa-user"></i> &nbsp {{ session.get('auth')['nama'] }}
                </button>
                <div class="dropdown-menu dropdown-menu-right">
                    <form action="{{url('/logout')}}" method="post">
                        <button type="submit" class="dropdown-item">Keluar</button>
                    </form>
                </div>
            </div>
        {% endif %}
        {% if session.has('auth') == false %}
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item">
                    {{ link_to('/akun', '<i class="fa fa-user"></i> &nbsp Akun', 'class': 'btn btn-primary') }}
                </li>
            </ul>
        {% endif %}
    </div>
</nav>