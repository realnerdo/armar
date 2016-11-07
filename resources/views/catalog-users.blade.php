@extends('layout.base') @section('content')
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Catálogo de usuarios</h3>
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
                    <th>ID</th>
                    <th>Usuario</th>
                    <th>Nombre</th>
                    <th>E-mail</th>
                    <th>Edición</th>
                  </tr>
                </thead>


                <tbody>
                  <tr>
                    <td>001</td>
                    <td>rodrigo</td>
                    <td>Rodrigo</td>
                    <td>rodrigo@grupoarmar.com</td>
                    <td><a href="#">Ver más</a></td>
                  </tr>
                  <tr>
                    <td>002</td>
                    <td>adrian</td>
                    <td>Adrián</td>
                    <td>adrian@grupoarmar.com</td>
                    <td><a href="#">Ver más</a></td>
                  </tr>
                  <tr>
                    <td>003</td>
                    <td>asaelx</td>
                    <td>Asael</td>
                    <td>asaelx@grupoarmar.com</td>
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
