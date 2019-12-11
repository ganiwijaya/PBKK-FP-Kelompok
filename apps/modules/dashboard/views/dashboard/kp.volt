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
                <li>
                    {{ link_to('/profil', '<i class="fa fa-user"></i> Profil', 'class': 'nav-link') }}
                </li>
                <li class="active">
                    {{ link_to('/kp', '<i class="fa fa-list"></i> KP', 'class': 'nav-link') }}
                </li>
            </ul>
        </nav>
        {% endif %}

        <div id="content">
            {% if session.has('auth') == false %}
            <div class="card mb-3 border-0">
                <div class="card-body">
                    <h3><center>404 Not found</center></h3>
                </div>
            </div>
            {% endif %}
            {% if session.has('auth')%}
            {{ flashSession.output() }}
            <div class="card mb-3 border-0">
                <div class="card-body">
                    <h4>Daftar KP</h4>
                    Lowongan KP yang tersedia.
                    <table class="table table-hover mt-3">
                        <thead class="thead-light">
                            <tr>
                                <th>Judul</th>
                                <th>Posisi</th>
                                <th>Keterangan</th>
                                <th>Atur</th>
                            </tr>
                        </thead>

                        {% if session.get('auth')['sudahambil'] == 0 %}
                        <tbody>
                            {{ session.get('auth')['sudahambil'] }}
                            {% for kerja in pekerjaan %}
                            <tr>
                                <th>{{ kerja.judul }}</th>
                                <th>{{ kerja.posisi }}</th>
                                <th>{{ kerja.keterangan }}</th>
                                <th>
                                    <!-- {{ link_to('/kp/ambil', '<i class="fa fa-plus"></i> Ambil', 'class': 'btn btn-success btn-sm') }} -->
                                    <a href="{{ url('/kp/ambil/' ~ kerja.id_pek) }}" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> Ambil</a>
                                </th>
                            </tr>
                            {% endfor  %}
                        </tbody>

                        {% else %}
                        <tbody>
                            {{ session.get('auth')['sudahambil'] }}
                            {% for kerja in pekerjaan %}
                            {%if kerja.status == 1 %}
                            <tr>
                                <th>{{ kerja.judul }}</th>
                                <th>{{ kerja.posisi }}</th>
                                <th>{{ kerja.keterangan }}</th>
                                <th>
                                    {{ link_to('/perusahaan/pekerjaan/hapus ~ pekerjaan.id_pek', '<i class="fa fa-times"></i> Batalkan', 'class': 'btn btn-warning btn-sm') }}
                                </th>
                            </tr>
                            {% endif %}
                            {% endfor  %}
                        </tbody>

                        {% endif %}
                    </table>
                </div>
            </div>
            {% endif %}
            
        </div>
    </div>
 
</body>
</html>