@extends('layout.base') @section('content')
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Creación de usuario</h3>
            </div>
        </div>
        <!-- end page-title -->

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_content">
                        <br />
                        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nombre(s) <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Apellido(s) <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="last-name" name="last-name" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Correo electrónico <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="last-name" name="last-name" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Contraseña <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="password" id="last-name" name="last-name" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Confirmar contraseña <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="password" id="last-name" name="last-name" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>

                            <div class="ln_solid"></div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Permisos</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <div class="">
                                        <label>
                                            <input type="checkbox" class="js-switch"> Administrador (Todos los permisos)
                                        </label>
                                    </div>
                                    <div class="">
                                        <label>
                                            <input type="checkbox" class="js-switch"> Manejo de inventario (entradas)
                                        </label>
                                    </div>
                                    <div class="">
                                        <label>
                                            <input type="checkbox" class="js-switch"> Manejo de inventario (salidas)
                                        </label>
                                    </div>
                                    <div class="">
                                        <label>
                                            <input type="checkbox" class="js-switch"> Manejo de inventario (actualizaciones)
                                        </label>
                                    </div>
                                    <div class="">
                                        <label>
                                            <input type="checkbox" class="js-switch"> Generación de órdenes de servicio (salidas de almacén)
                                        </label>
                                    </div>
                                    <div class="">
                                        <label>
                                            <input type="checkbox" class="js-switch"> Terminaciones o devoluciones de órdenes de servicio
                                        </label>
                                    </div>
                                    <div class="">
                                        <label>
                                            <input type="checkbox" class="js-switch"> Actualizaciones de órdenes de servicio
                                        </label>
                                    </div>
                                    <div class="">
                                        <label>
                                            <input type="checkbox" class="js-switch"> Visualización de alamacén(es)
                                        </label>
                                    </div>
                                    <div class="">
                                        <label>
                                            <input type="checkbox" class="js-switch"> Visualización de inventario
                                        </label>
                                    </div>
                                    <div class="">
                                        <label>
                                            <input type="checkbox" class="js-switch" /> Visualización de órdenes de servicio
                                        </label>
                                    </div>
                                    <div class="">
                                        <label>
                                            <input type="checkbox" class="js-switch" /> Actualización de permisos de usuario
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                    <button type="submit" class="btn btn-primary">Cancelar</button>
                                    <button type="submit" class="btn btn-success">Crear usuario</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
