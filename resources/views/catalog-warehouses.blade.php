@extends('layout.base') @section('content')
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Catálogo de almacenes</h3>
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
                    <th>Nombre</th>
                    <th>Edición</th>
                  </tr>
                </thead>


                <tbody>
                  <tr>
                    <td>001</td>
                    <td>Almacén 1</td>
                    <td><a href="#">Ver más</a></td>
                  </tr>
                  <tr>
                    <td>002</td>
                    <td>Almacén 2</td>
                    <td><a href="#">Ver más</a></td>
                  </tr>
                  <tr>
                    <td>003</td>
                    <td>Almacén 3</td>
                    <td><a href="#">Ver más</a></td>
                  </tr>
                  <tr>
                    <td>004</td>
                    <td>Almacén 4</td>
                    <td><a href="#">Ver más</a></td>
                  </tr>
                  <tr>
                    <td>005</td>
                    <td>Almacén 5</td>
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
