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
                <img src="https://www.its.ac.id/wp-content/uploads/2019/06/IFl-1-768x340.jpg" class="sampul" alt="Responsive image"> 
                <h5 class="text-disabled mb-3 mt-3">Mungkin Anda minat</h5>
                <div class="row">
                    {% for kerja in pekerjaan %}
                    <div class="col-12">
                        <div class="card border-0 mb-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm">
                                        <h5 class="card-title">{{ kerja.judul }}</h5>
                                        <h6 class="card-title">{{ kerja.posisi }}</h6>
                                        <h6 class="card-title">{{ kerja.keterangan }}</h6>
                                    </div>
                                    <div class="col-sm">
                                        {%if kerja.status == "1" %}
                                        <span class="btn btn-danger btn-sm float-right ml-3">Sudah diambil</span>
                                        {% else %}
                                        <span class="btn btn-success btn-sm float-right ml-3">Tersedia</span>
                                        {% endif %}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {% endfor  %}
                </div>
            </div>
        </div>
    </div>
 
</body>
</html>