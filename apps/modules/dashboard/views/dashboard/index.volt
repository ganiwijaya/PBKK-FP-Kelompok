<!DOCTYPE html>
<html>
<head>
    <title>SMArt Lawu</title>

    {{ assets.outputCss() }}
    {{ assets.outputJs() }}
</head>
<body>
    {% include "dashboard/navbar.volt" %}

    <div class="wrapper">
        <div id="content">
            <img src="https://www.its.ac.id/wp-content/uploads/2019/06/IFl-1-768x340.jpg" class="sampul" alt="Responsive image"> 
            <center><h5 class="text-disabled mb-3 mt-3">Informasi KP</h5></center>
            <div class="row">
                {% for user in users %}
                <div class="col-4">
                    <div class="card border-0 mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm">
                                    <h5 class="card-title">{{ user.username }}</h5>
                                </div>
                                <div class="col-sm">
                                    {%if user.username == "Ghannie Wijaya" %}
                                    <span class="btn btn-danger btn-sm float-right ml-3">Sudah diambil</span>
                                    {% else %}
                                    <span class="btn btn-success btn-sm float-right ml-3">Tersedia</span>
                                    {% endif %}
                                </div>
                            </div>
                            <h6>{{ user.nun }}</h6>
                            <h6 class="text-muted">{{ user.sekolah }}</h6>
                        </div>
                    </div>
                </div>
                {% endfor %}
            </div>
        </div>
    </div>
 
</body>
</html>