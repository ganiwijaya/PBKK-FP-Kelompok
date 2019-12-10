<!DOCTYPE html>
<html>
<head>
    <title>mySMArt</title>

    {{ assets.outputCss() }}
    {{ assets.outputJs() }}
</head>
<body>
    {% include "dashboard/navbarmhs.volt" %}
    <div class="wrapper">
        {% if session.has('auth')%}
        <nav id="sidebar" class="active">
            <ul class="list-unstyled components">
                <li class="active">
                    {{ link_to('/beranda', '<i class="fa fa-home"></i> Utama', 'class': 'nav-link') }}
                </li>
                <li>
                    {{ link_to('/profil', '<i class="fa fa-user"></i> Profil', 'class': 'nav-link') }}
                </li>
                <li>
                    {{ link_to('/ppdb', '<i class="fa fa-list"></i> PPDB', 'class': 'nav-link') }}
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
            <div class="card border-0">
                <div class="card-body">
                    <h4>Selamat Datang, <span>{{ session.get('auth')['username'] }}</span></h4>
                    NISN Anda adalah <strong>{{ session.get('auth')['nisn'] }}</strong>
                </div>
            </div>
            {% endif %}
            
        </div>
    </div>
 
</body>
</html>