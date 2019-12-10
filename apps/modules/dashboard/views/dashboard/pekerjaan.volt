<!DOCTYPE html>
<html>
<head>
    {% include "dashboard/partials/head.volt" %}
</head>
<body>
    {% include "dashboard/partials/navbarper.volt" %}

    <div class="wrapper">
        {% if session.has('auth')%}
        <nav id="sidebar" class="active">
            <ul class="list-unstyled components">
                <li>
                    {{ link_to('/perusahaan', '<i class="fa fa-home"></i> Beranda', 'class': 'nav-link') }}
                </li>
                <li class="active">
                    {{ link_to('/perusahaan/pekerjaan', '<i class="fa fa-list"></i> Pekerjaan', 'class': 'nav-link') }}
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
            <div class="card mb-3 border-0">
                <div class="card-body">
                    <h4>Lowongan KP</h4>
                    Daftar kerja praktik yang Anda buat.
                    {{ link_to('/perusahaan/pekerjaan/tambah', 'Tambah', 'class': 'btn btn-success') }}
                </div>
            </div>
            {{ flashSession.output() }}
            <div class="card border-0">
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Judul</th>
                                <th>Posisi</th>
                                <th>Keterangan</th>
                                <th>Status</th>
                                <th>Atur</th>
                            </tr>
                        </thead>
                        <tbody>
                            {% for kerja in pekerjaan %}
                            <tr>
                                {%if session.get('auth')['id_per'] == kerja.id_per %}
                                <th>{{ kerja.judul }}</th>
                                <th>{{ kerja.posisi }}</th>
                                <th>{{ kerja.keterangan }}</th>
                                <th>
                                    {%if kerja.status == "1" %}
                                    <span class="btn btn-danger btn-sm">Sudah diambil</span>
                                    {% else %}
                                    <span class="btn btn-success btn-sm">Tersedia</span>
                                    {% endif %}
                                </th>
                                <th>
                                    <!-- <a href="{{ url('/perusahaan/pekerjaan/hapus/' ~ pekerjaan.id_pek) }}">Hapus</a> -->
                                    {{ link_to('/perusahaan/pekerjaan/hapus ~ kerja.id_pek', 'Hapus', 'class': 'btn btn-danger btn-sm') }}
                                </th>
                                {% endif %}
                            </tr>
                            {% endfor  %}
                        </tbody>
                    </table>
                </div>
            </div>
            {% endif %}
            
        </div>
    </div>
 
</body>
</html>