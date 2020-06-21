<article class="content">
    <div class="card card-block">
        <div id="notify" class="alert alert-success" style="display:none;">
            <a href="#" class="close" data-dismiss="alert">&times;</a>

            <div class="message"></div>
        </div>
        <form method="post" id="product_action" class="form-horizontal">
            <div class="card-body">

                <h5>Acerca de nosotros</h5>
                <hr>


                <div class="form-group row">


                    <div class="col-sm-12 text-center">
                        <h3>Intel - POS (Sistema de Ventas)</h3><h5><?php $url = file_get_contents(FCPATH . '/version.json');
                            $version = json_decode($url, true);
                            echo 'V ' . $version['version'] . ' (b' . $version['build'] . ')'; ?></h5> <h6>
                            Copyright <?= date('Y') ?> <a
                                    href="http://www.enigmateam.org">EnigmaTeam - Soporte Técnico</a>
                        </h6>

                    </div>
                </div>


            </div>
        </form>
    </div>
</article>
<script type="text/javascript">
    $("#time_update").click(function (e) {
        e.preventDefault();
        var actionurl = baseurl + 'settings/dtformat';
        actionProduct(actionurl);
    });
</script>

