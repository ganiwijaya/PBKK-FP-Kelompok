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
                <li>
                    {{ link_to('/perusahaan/pekerjaan', '<i class="fa fa-list"></i> Pekerjaan', 'class': 'nav-link') }}
                </li>
            </ul>
        </nav>
        {% endif %}

        <div id="content">
            <h6>{{ link_to('/perusahaan/pekerjaan', '<i class="fa fa-arrow-left"></i>', 'class': 'mb-3') }} &nbsp&nbsp&nbsp Kembali</h6>
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
                    <h4>Buat Lowongan KP</h4>
                    Isi secara detail.
                </div>
            </div>
            {{ flashSession.output() }}
            <div class="card border-0">
                <div class="card-body">
                    <form action="{{ url('/post_pek') }}" method="POST">
                        <div class="form-group">
                            <label for="judul">Judul Pekerjaan</label>
                            <input type="text" class="form-control" id="judul" name="judul" placeholder="Jelaskan secara singkat" required>
                        </div>
                        <div class="form-group">
                            <label for="posisi">Posisi</label>
                            <input type="text" class="form-control" id="posisi" name="posisi" placeholder="Posisi yang bisa diambil" required>
                        </div>
                        <div class="form-group">
                            <label for="keterangan">Keterangan</label>
                            <textarea class="form-control" id="keterangan" name="keterangan" rows="3" placeholder="Keterangan seputar lowongan pekerjaan" required></textarea>
                        </div>
                        <input type="hidden" id="status" name="status" value="0">
                        <input type="hidden" id="id_per" name="id_per" value="{{ session.get('auth')['id_per'] }}">
                        <input type="hidden" id="id_mhs" name="id_mhs" value="1">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
            {% endif %}
            
        </div>
    </div>
 
</body>
</html>