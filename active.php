<article class="content-body">
    <div class="card card-block">
        <div id="notify" class="alert alert-success" style="display:true;">
            <a href="#" class="close" data-dismiss="alert">&times;</a>

            <div class="message"></div>
        </div>
        <form method="post" id="activ" class="form-horizontal">
            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>"
                   value="<?php echo $this->security->get_csrf_hash(); ?>">
            <input type="hidden" id="core"
                   value="settings/activate">
            <div class="card-body">

                <h5>Solicitar Soporte Técnico</h5>
                <hr>


                <div class="form-group row">

                    <label class="col-sm-2 col-form-label" for="invoiceprefix">Email</label>

                    <div class="col-sm-6">
                        <input type="text"
                               class="form-control margin-bottom  required" name="email"
                               placeholder="Su dirección de Email">
                    </div>
                </div>

                <div class="form-group row">

                    <label class="col-sm-2 col-form-label" for="currency">Comentario</label>

                    <div class="col-sm-6">
                        <input type="text" placeholder="Ingrese el inconveniente o sugerencia"
                               class="form-control margin-bottom  required" name="code"
                        >
                    </div>
                </div>

                <div class="form-group row">

                    <label class="col-sm-2 col-form-label" for="currency">License</label>

                    <div class="col-sm-6">
                        <p>Documentación Técnica que puede leer en <a
                                    href="https://www.enigmateam.org/foro"> Foro de Soporte Técnico</a>.
                            Este sistema esta protegido, no se permite exportar o clonar.
                        </p>
                    </div>
                </div>


                <div class="form-group row">

                    <label class="col-sm-2 col-form-label"></label>

                    <div class="col-sm-4">
                        <input type="submit" id="upda" class="btn btn-success margin-bottom"
                               value="Enviar" data-loading-text="Actualizando...">
                    </div>
                </div>

            </div>
        </form>
    </div>
</article>

