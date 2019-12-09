<!DOCTYPE html>
<html>
<head>
    <title>SMArt Lawu</title>

    {{ assets.outputCss() }}
    {{ assets.outputJs() }}
</head>
<body>
    <nav class="navbar navbar-dark bg-dark fixed-top">
        {{ link_to('/', 'myKP', 'class': 'btn btn-dark border-0') }}
        <div class="collapse navbar-collapse" id="navbarSupportedContent"></div>
            {% if session.has('auth')%}
                <div class="dropdown">
                    <button type="button" class="btn btn-dark" data-toggle="dropdown">
                        {{ session.get('auth')['username'] }}
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
                        {{ link_to('/masuk', '<i class="fa fa-user"></i> Masuk/Daftar', 'class': 'btn btn-dark') }}
                    </li>
                </ul>
            {% endif %}
        </div>
    </nav>

    <div class="wrapper">

        <div id="content">
            <img src="https://www.its.ac.id/wp-content/uploads/2019/06/IFl-1-768x340.jpg" class="sampul" alt="Responsive image"> 
            <center><h5 class="text-disabled mb-3 mt-3">Informasi KP</h5></center>
            <div class="row">
                {% for user in users %}
                <div class="col-4">
                    <div class="card border-0 mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm">
                                    <h5 class="card-title">{{ user.username }}</h5>
                                </div>
                                <div class="col-sm">
                                    {%if user.username == "Ghannie Wijaya" %}
                                    <!-- <span class="btn btn-primary btn-sm float-right ml-3">Tersedia</span> -->
                                    <span class="btn btn-danger btn-sm float-right ml-3">Sudah diambil</span>
                                    {% endif %}
                                </div>
                            </div>
                            <h6>{{ user.nun }}</h6>
                            <p>{{ user.sekolah }}</p>
                        </div>
                    </div>
                </div>
                {% endfor %}
            </div>
        </div>
    </div>
 
</body>
</html>