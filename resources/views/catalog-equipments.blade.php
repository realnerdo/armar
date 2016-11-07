@extends('layout.base') @section('content')
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Catálogo de equipos</h3>
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
                    <th>Descripción</th>
                    <th>Grupo</th>
                    <th>Cantidad</th>
                    <th>Almacén</th>
                    <th>Edición</th>
                  </tr>
                </thead>


                <tbody>
                  <tr>
                    <td>001-SHU-001</td>
                    <td>Micrófono shure, mono</td>
                    <td>Audio</td>
                    <td>10</td>
                    <td>1</td>
                    <td><a href="#">Ver más</a></td>
                  </tr>
                  <tr>
                    <td>002-MAR-002</td>
                    <td>Amplificador Marshall 1000W</td>
                    <td>Audio</td>
                    <td>4</td>
                    <td>2</td>
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
