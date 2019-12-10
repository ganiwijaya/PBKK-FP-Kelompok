<!DOCTYPE html>
<html>
<head>
    {% include "dashboard/partials/head.volt" %}
</head>
<body>
    {% include "dashboard/partials/navbarmhs.volt" %}

    <div class="wrapper">
        {% if session.has('auth')%}
        <nav id="sidebar" class="active">
            <ul class="list-unstyled components">
                <li>
                    {{ link_to('/beranda', '<i class="fa fa-home"></i> Utama', 'class': 'nav-link') }}
                </li>
                <li class="active">
                    {{ link_to('/profil', '<i class="fa fa-user"></i> Profil', 'class': 'nav-link') }}
                </li>
                <li>
                    {{ link_to('/ppdb', '<i class="fa fa-list"></i> KP', 'class': 'nav-link') }}
                </li>
            </ul>
        </nav>
        {% endif %}

        <div id="content">
            {% if session.has('auth') == false %}
            <div class="card border-0 mb-3">
                <div class="card-body">
                    <h3><center>404 Not found</center></h3>
                </div>
            </div>
            {% endif %}
            {% if session.has('auth')%}
            {{ flashSession.output() }}
            <div class="card border-0 mb-3">
                <div class="card-body">
                    <h4>Profil</h4>
                    Rincian akun Anda.
                    <hr>
                    Nama<br>
                    <strong>{{ session.get('auth')['username'] }}</strong>
                    <hr>
                    Email<br>
                    <strong>{{ session.get('auth')['email'] }}</strong>
                    <hr>
                    Asal Kota<br>
                    <strong>{{ session.get('auth')['kota'] }}</strong>
                </div>
            </div>
            {% endif %}
        </div>
    </div>
 
</body>
</html>