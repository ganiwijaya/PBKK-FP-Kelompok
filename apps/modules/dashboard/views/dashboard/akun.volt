<!DOCTYPE html>
<html>
<head>
    {% include "dashboard/head.volt" %}
</head>
<body>
    {% include "dashboard/navbar.volt" %}
    <div class="wrapper">
        <div class="container">
            <div id="content">
                <div class="card border-0 mb-3">
                    <div class="card-body">
                        <h4>Akses ke myKP</h4>
                        Masuk atau daftar akun Anda.
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="card border-0 mb-3">
                            <img class="card-img-top" src="https://asset.kompas.com/crops/ITtUKMBRmQpU9MJ-2gOq0EWTrNE=/439x194:1080x514/750x500/data/photo/2019/10/26/5db3ffcc9bbe9.png" alt="Card image">
                            <div class="card-body">
                                <h4>Mahasiswa</h4>
                                Tentukan ingin magang di mana.
                            </div>
                            <div class="card-footer border-0">
                                {{ link_to('/akun/masuk/mahasiswa', 'Masuk', 'class': 'btn btn-success') }}
                                {{ link_to('/akun/daftar/mahasiswa', 'Daftar', 'class': 'btn btn-light') }}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="card border-0 mb-3">
                            <img class="card-img-top" src="https://i0.wp.com/www.maxmanroe.com/vid/wp-content/uploads/2017/12/Pengertian-Perusahaan.jpg?resize=640%2C375&ssl=1" alt="Card image">
                            <div class="card-body">
                                <h4>Perusahaan</h4>
                                Kenalkan perusahaan Anda.
                            </div>
                            <div class="card-footer border-0">
                                {{ link_to('/akun/masuk/perusahaan', 'Masuk', 'class': 'btn btn-primary') }}
                                {{ link_to('/akun/daftar/perusahaan', 'Daftar', 'class': 'btn btn-light') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>