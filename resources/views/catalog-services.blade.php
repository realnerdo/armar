@extends('layout.base') @section('content')
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Órdenes de servicios</h3>
            </div>
        </div>
        <!-- end page-title -->

        <div class="clearfix"></div>

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
                    <th>Status</th>
                    <th>Edición</th>
                  </tr>
                </thead>


                <tbody>
                  <tr>
                    <td>001</td>
                    <td>Boda</td>
                    <td>12 Octubre 2016</td>
                    <td>14 Octubre 2016</td>
                    <td>Ernesto</td>
                    <td>Vencido</td>
                    <td><a href="#">Ver más</a></td>
                  </tr>
                  <tr>
                    <td>002</td>
                    <td>Expo</td>
                    <td>5 Noviembre 2016</td>
                    <td>7 Noviembre 2016</td>
                    <td>Luis</td>
                    <td>Vigente</td>
                    <td><a href="#">Ver más</a></td>
                  </tr>
                  <tr>
                    <td>003</td>
                    <td>Concierto</td>
                    <td>30 Octubre 2016</td>
                    <td>31 Octubre 2016</td>
                    <td>Corona</td>
                    <td>Terminada</td>
                    <td><a href="#">Ver más</a></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>

    </div>
</div>
@endsection
