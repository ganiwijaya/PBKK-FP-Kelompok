<!DOCTYPE html>
<html>
<head>
    {% include "dashboard/partials/head.volt" %}
</head>
<body>
    {% include "dashboard/partials/navbar.volt" %}
    <div class="wrapper">
        <div class="container">
            <div id="content">
                <h6>{{ link_to('/akun', '<i class="fa fa-arrow-left"></i>', 'class': 'mb-3') }} &nbsp&nbsp&nbsp Kembali</h6>
                <div class="card border-0 mb-3 bg-success text-light">
                    <div class="card-body">
                        <h4>Daftar sebagai Mahasiswa</h4>
                        Sudah mendaftar? {{ link_to('/akun/masuk/mahasiswa', 'Masuk', 'class': 'font-weight-bold') }} sekarang.
                    </div>
                </div>
                <div class="card border-0">
                    <div class="card-body">
                        {{ flashSession.output() }}
                        {% if session.has('auth')%}
                        <div class="alert alert-success" role="alert">
                            Anda berhasil masuk.
                        </div>
                        {% endif %}
                        {% if session.has('auth') == false %}
                        <form action="{{ url('/post_mhs') }}" method="POST">
                            <h5>Akun</h5>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="sekolah@contoh.com" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                            </div>
                            <div class="form-group">
                                <label for="username">Nama Lengkap</label>
                                <input type="text" class="form-control" id="username" name="username" placeholder="Nama Lengkap" required>
                            </div>
                            <div class="form-group">
                                <label for="nrp">NRP</label>
                                <input type="text" class="form-control" id="nrp" name="nrp" placeholder="NRP Baru" required>
                            </div>
                            <input type="hidden" id="id_pek" name="id_pek" value="0">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                        {% endif %}
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>