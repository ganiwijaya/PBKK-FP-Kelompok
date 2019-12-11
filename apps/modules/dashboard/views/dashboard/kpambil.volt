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
                <li>
                    {{ link_to('/kp', '<i class="fa fa-list"></i> KP', 'class': 'nav-link') }}
                </li>
            </ul>
        </nav>
        {% endif %}

        <div id="content">
            <h6>{{ link_to('/kp', '<i class="fa fa-arrow-left"></i>', 'class': 'mb-3') }} &nbsp&nbsp&nbsp Kembali</h6>
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
                    <h4>Ambil KP</h4>
                    Apakah Anda yakin ingin mengambil KP ini?
                    <hr>
                    {% for kerja in pekerjaan %}
                    {% if kerja.id_pek == id_pek %}
                    <form action="{{ url('/kp/ambilya') }}" method="POST">
                        <div class="form-group">
                            <label for="judul">Judul Pekerjaan</label>
                            <input type="text" class="form-control" id="judul" name="judul" value="{{ kerja.judul }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="posisi">Posisi</label>
                            <input type="text" class="form-control" id="posisi" name="posisi" value="{{ kerja.posisi }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="keterangan">Keterangan</label>
                            <input type="text" class="form-control" id="keterangan" name="keterangan" rows="3" value="{{ kerja.keterangan }}" readonly></textarea>
                        </div>
                        <input type="hidden" id="id_mhs" name="id_mhs" value="{{ session.get('auth')['id_mhs'] }}">
                        <input type="hidden" id="sudahambil" name="sudahambil" value="1">
                        <input type="hidden" id="status" name="status" value="1">
                        <button type="submit" class="btn btn-success"><i class="fa fa-plus"></i> Ambil</button>
                    </form>
                    {% endif %}
                    {% endfor %}
                </div>
            </div>
            {% endif %}
            
        </div>
    </div>
 
</body>
</html>