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
                <h6>{{ link_to('/akun', '<i class="fa fa-arrow-left"></i>', 'class': 'mb-3') }} &nbsp&nbsp&nbsp Kembali</h6>
                <div class="card border-0 mb-3">
                    <div class="card-body">
                        <h4>Masuk sebagai Perusahaan</h4>
                        Belum punya akun? {{ link_to('/akun/daftar/perusahaan', 'Daftar', 'class': 'font-weight-bold') }} sekarang.
                    </div>
                </div>
                {{ flashSession.output() }}
                <div class="card border-0">
                    <div class="card-body">
                        {% if session.has('auth')%}
                        <div class="alert alert-success" role="alert">
                            Anda berhasil masuk.
                        </div>
                        {% endif %}
                        {% if session.has('auth') == false %}
                        <form action="{{url('/loginPerusahaan')}}" method="post">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="em" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="pw" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary">Masuk</button>
                        </form>
                        {% endif %}
                    </div>
                </div>   
            </div>
        </div>
    </div>
 
</body>
</html>