@extends('admin.layout.layout')
@section('content')

    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <!-- <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Tables</li>
      </ol> -->
		<!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Liste des utilisateurs 
        </div>
        <div class="card-button-search"> <div class="card-button" > <a href=""><input type="button" value="Nouveau"></a></div>
         <div class="card-rearch"><input type="text" name="recherche" id="" placeholder="Recherche">
          </div></div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Position</th>
                  <th>Office</th>
                  <th>Age</th>
                  <th>Start date</th>
                  <th>Price</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Jenette Caldwell</td>
                  <td>Development Lead</td>
                  <td>New York</td>
                  <td>30</td>
                  <td>2011/09/03</td>
                  <td>$345,000</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <!-- <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div> -->
      </div>
	  <!-- /tables-->
	  </div>
	  <!-- /container-fluid-->

    <!-- /container-wrapper-->
    @endsection