@extends('layout.base') @section('content')
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Catálogo de clientes</h3>
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
                    <th>Empresa</th>
                    <th>Contacto</th>
                    <th>E-mail</th>
                    <th>Edición</th>
                  </tr>
                </thead>


                <tbody>
                  <tr>
                    <td>001</td>
                    <td>Corona</td>
                    <td>Rolando</td>
                    <td>rolando@gmail.com</td>
                    <td><a href="#">Ver más</a></td>
                  </tr>
                  <tr>
                    <td>002</td>
                    <td>Vangard</td>
                    <td>Luis</td>
                    <td>luis@gmail.com</td>
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
