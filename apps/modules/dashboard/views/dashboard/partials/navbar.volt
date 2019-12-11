<nav class="navbar navbar-dark bg-dark fixed-top">
    <div class="container">
        {{ link_to('/', 'myKP', 'class': 'btn btn-dark border-0') }}
        <div class="collapse navbar-collapse" id="navbarSupportedContent"></div>
            {% if session.has('auth')%}
                <div class="dropdown">
                    <button type="button" class="btn btn-dark" data-toggle="dropdown">
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
                        {{ link_to('/akun', '<i class="fa fa-user"></i> &nbsp Akun', 'class': 'btn btn-dark') }}
                    </li>
                </ul>
            {% endif %}
        </div>
    </div>
</nav>