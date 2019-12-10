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
                <div class="card border-0 mb-3">
                    <div class="card-body">
                        <h4>Akses ke myKP</h4>
                        Masuk atau daftar akun Anda.
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="card border-0 mb-3 bg-success text-light">
                            <img class="card-img-top" src="https://scontent-sin2-1.xx.fbcdn.net/v/t1.0-0/p180x540/78621694_2889530864411927_1678619475798130688_o.jpg?_nc_cat=110&_nc_eui2=AeFk6B8w2L-KhddVCURS3SmWazZfwDTXyWJv4Bn_yj17yvBByknx-tVFm_m_M5SVHaT-hCsVB14Rp_Zfvy_4_ElPsRyheACSebtuSZAThnEKQQ&_nc_ohc=8PWh-67s4_IAQnhW6N5FlDM7wDXAQYQjFRAfM1Q9lpflAeAh5daOWmuXg&_nc_ht=scontent-sin2-1.xx&oh=73c78399098ed09ed7ee1b7038147ad5&oe=5E79C308" alt="Card image">
                            <div class="card-body">
                                <h4>Mahasiswa</h4>
                                Tentukan ingin magang di mana.
                            </div>
                            <div class="card-footer border-0">
                                {{ link_to('/akun/masuk/mahasiswa', 'Masuk', 'class': 'btn btn-light') }}
                                {{ link_to('/akun/daftar/mahasiswa', 'Daftar', 'class': 'btn btn-outline-light') }}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="card border-0 mb-3 bg-primary text-light">
                            <img class="card-img-top" src="https://scontent-sin2-1.xx.fbcdn.net/v/t1.0-0/p180x540/79704380_2889530857745261_3613487360584450048_o.jpg?_nc_cat=109&_nc_eui2=AeGMFECSbESB11kTQsp3u_dFMDEIB9eMIdzbfEOHNIntMFBIS2J660c2hD-gySXPlm3xO4ddMy0prlJt4iFSIq614BzKBLDUddPy6dUiCEPlBg&_nc_ohc=wlPoSNxtsDEAQljUe_fuCGoAsT1csS0bnTq-_S1wSG_-idIPuLomSSm3w&_nc_ht=scontent-sin2-1.xx&oh=fd4a8894fbdc9a7d65b7b4cf8684a372&oe=5E79D943" alt="Card image">
                            <div class="card-body">
                                <h4>Perusahaan</h4>
                                Kenalkan perusahaan Anda.
                            </div>
                            <div class="card-footer border-0">
                                {{ link_to('/akun/masuk/perusahaan', 'Masuk', 'class': 'btn btn-light btn') }}
                                {{ link_to('/akun/daftar/perusahaan', 'Daftar', 'class': 'btn btn-outline-light') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>