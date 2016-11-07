@extends('layout.base') @section('content')
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Creación de servicio</h3>
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
                              <label class="control-label col-md-3 col-sm-3 col-xs-12">Personal</label>
                              <div class="checkbox">
                                <label>
                                  <input type="checkbox" class="flat" value="">
                                </label>
                              </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Evento <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>

                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12">Cliente</label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <select class="select2_single form-control" tabindex="-1">
                                  <option></option>
                                  <option value="1">Cliente A</option>
                                  <option value="1">Cliente B</option>
                                  <option value="1">Cliente C</option>
                                  <option value="1">Cliente D</option>
                                </select>
                              </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Fecha de entrega y término <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="input-prepend input-group">
                                      <span class="add-on input-group-addon"><i class="glyphicon glyphicon-calendar fa fa-calendar"></i></span>
                                      <input type="text" style="width: 200px" name="reservation" id="reservation" class="form-control" value="03/18/2013 - 03/23/2013" />
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12">Agregar equipo</label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <select class="select2_single form-control" tabindex="-1">
                                  <option></option>
                                  <option value="1">Equipo A</option>
                                  <option value="1">Equipo B</option>
                                  <option value="1">Equipo C</option>
                                  <option value="1">Equipo D</option>
                                </select>
                              </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Cantidad <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>

                            <div class="ln_solid"></div>

                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <div class="x_panel">
                                <div class="x_content">
                                  <table id="datatable-buttons" class="table table-striped table-bordered">
                                    <thead>
                                      <tr>
                                        <th>Folio</th>
                                        <th>Evento</th>
                                        <th>Fecha entrega</th>
                                        <th>Fecha término</th>
                                        <th>Contacto</th>
                                      </tr>
                                    </thead>


                                    <tbody>
                                      <tr>
                                        <td>001</td>
                                        <td>Boda</td>
                                        <td>12 Octubre 2016</td>
                                        <td>14 Octubre 2016</td>
                                        <td>Ernesto</td>
                                      </tr>
                                      <tr>
                                        <td>002</td>
                                        <td>Expo</td>
                                        <td>5 Noviembre 2016</td>
                                        <td>7 Noviembre 2016</td>
                                        <td>Luis</td>
                                      </tr>
                                      <tr>
                                        <td>003</td>
                                        <td>Concierto</td>
                                        <td>30 Octubre 2016</td>
                                        <td>31 Octubre 2016</td>
                                        <td>Corona</td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                            </div>

                            <div class="clearfix"></div>

                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                    <button type="submit" class="btn btn-primary">Cancelar</button>
                                    <button type="submit" class="btn btn-success">Generar orden</button>
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
