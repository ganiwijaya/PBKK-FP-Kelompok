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
                <div class="card border-0 mb-3 bg-primary text-light">
                    <div class="card-body">
                        <h4>Daftar sebagai Perusahaan</h4>
                        Sudah mendaftar? {{ link_to('/akun/masuk/perusahaan', 'Masuk', 'class': 'font-weight-bold') }} sekarang.
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
                        <form action="{{ url('/post_register') }}" method="POST">
                            <h5>Akun</h5>
                            <div class="form-group">
                                <label for="username">Nama Lengkap</label>
                                <input type="text" class="form-control" id="username" name="username" placeholder="Nama Lengkap" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="sekolah@contoh.com" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                            </div>
                            <hr>
                            <h5>Data Diri</h5>
                            <div class="form-group">
                                <label for="nisn">NISN</label>
                                <input type="text" class="form-control" id="nisn" name="nisn" placeholder="NISN" required>
                            </div>
                            <div class="form-group">
                                <label for="sekolah">Asal SMP Sederajat</label>
                                <input type="text" class="form-control" id="sekolah" name="sekolah" placeholder="SMP x Karanganyar" required>
                            </div>
                            <div class="form-group">
                                <label for="kota">Asal Kota</label>
                                <input type="text" class="form-control" id="kota" name="kota" placeholder="Kota/Kabupaten" required>
                            </div>
                            <div class="form-group">
                                <label for="hp">No. HP</label>
                                <input type="text" class="form-control" id="hp" name="hp" placeholder="Nomor Handphone" required>
                            </div>
                            <hr>
                            <h5>PPDB</h5>
                            <div class="form-group">
                                <label for="skhun">Nomor SKHUN</label>
                                <input type="text" class="form-control" id="skhun" name="skhun" placeholder="Nomor SKHUN SMP" required>
                            </div>
                            <div class="form-group">
                                <label for="nun">Nilai Ujian Nasional</label>
                                <input type="text" class="form-control" id="nun" name="nun" placeholder="Nilai UN SMP" required>
                            </div>
                            <div class="row">
                                <div class="col form-group">
                                    <label for="ipa">IPA</label>
                                    <input type="text" class="form-control" id="ipa" name="ipa" placeholder="Nilai IPA" required>
                                </div>
                                <div class="col form-group">
                                    <label for="ind">B. Indonesia</label>
                                    <input type="text" class="form-control" id="ind" name="ind" placeholder="Nilai B. Indo" required>
                                </div>
                                <div class="col form-group">
                                    <label for="mtk">Matematika</label>
                                    <input type="text" class="form-control" id="mtk" name="mtk" placeholder="Nilai Matematika" required>
                                </div>
                                <div class="col form-group">
                                    <label for="eng">B. Inggris</label>
                                    <input type="text" class="form-control" id="eng" name="eng" placeholder="Nilai B. Inggris" required>
                                </div>
                            </div>
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