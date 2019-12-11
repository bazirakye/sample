@extends('admin.dashboard')
	
	@section('content')
		<div class="content-wrapper">
			<section class="content">
      
      			<div class="card">
           			 <div class="card-header">
              			<h3 class="card-title">Coupons available</h3>
            		</div>
            <!-- /.card-header -->
           		  <div class="card-body">
                      <table id="dataTable" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                          <th>ID</th>
                          <th>Coupon Name</th>
                          <th>Code</th>
                          <th>Discount</th>
                          <th>Start Date</th>
                          <th>End Date</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>                       
                        <tr>
                          <td>Gecko</td>
                          <td>Camino 1.5</td>
                          <td>OSX.3+</td>
                          <td>1.8</td>
                          <td>A</td>
                          <td>A</td>
                          <td>A</td>
                          <td>1.8</td>
                        </tr>
                        <tr>
                          <td>Gecko</td>
                          <td>Netscape 7.2</td>
                          <td>Win 95+ / Mac OS 8.6-9.2</td>
                          <td>1.7</td>
                          <td>A</td>
                          <td>A</td>
                          <td>A</td>
                          <td>1.8</td>
                        </tr>
                        <tr>
                          <td>Gecko</td>
                          <td>Netscape Browser 8</td>
                          <td>Win 98SE+</td>
                          <td>1.7</td>
                          <td>A</td>
                          <td>A</td>
                          <td>A</td>
                          <td>1.8</td>
                        </tr>
                        <tr>
                          <td>Gecko</td>
                          <td>Netscape Navigator 9</td>
                          <td>Win 98+ / OSX.2+</td>
                          <td>1.8</td>
                          <td>A</td>
                          <td>A</td>
                          <td>A</td>
                          <td>1.8</td>
                        </tr>
                        <tr>
                          <td>Gecko</td>
                          <td>Mozilla 1.0</td>
                          <td>Win 95+ / OSX.1+</td>
                          <td>1</td>
                          <td>A</td>
                          <td>A</td>
                          <td>A</td>
                          <td>1.8</td>
                        </tr>
                        <tr>
                          <td>Gecko</td>
                          <td>Mozilla 1.1</td>
                          <td>Win 95+ / OSX.1+</td>
                          <td>1.1</td>
                          <td>A</td>
                          <td>A</td>
                          <td>A</td>
                          <td>1.8</td>
                        </tr>
                        <tr>
                          <td>Gecko</td>
                          <td>Mozilla 1.2</td>
                          <td>Win 95+ / OSX.1+</td>
                          <td>1.2</td>
                          <td>A</td>
                          <td>A</td>
                          <td>A</td>
                          <td>1.8</td>
                        </tr>
                        <tr>
                          <td>Gecko</td>
                          <td>Mozilla 1.3</td>
                          <td>Win 95+ / OSX.1+</td>
                          <td>1.3</td>
                          <td>A</td>
                          <td>A</td>
                          <td>A</td>
                          <td>1.8</td>
                        </tr>
                        <tr>
                          <td>Gecko</td>
                          <td>Mozilla 1.4</td>
                          <td>Win 95+ / OSX.1+</td>
                          <td>1.4</td>
                          <td>A</td>
                          <td>A</td>
                          <td>A</td>
                          <td>1.8</td>
                        </tr>
                        <tr>
                          <td>Gecko</td>
                          <td>Mozilla 1.5</td>
                          <td>Win 95+ / OSX.1+</td>
                          <td>1.5</td>
                          <td>A</td>
                          <td>A</td>
                          <td>A</td>
                          <td>1.8</td>
                        </tr>
                        <tr>
                          <td>Gecko</td>
                          <td>Mozilla 1.6</td>
                          <td>Win 95+ / OSX.1+</td>
                          <td>1.6</td>
                          <td>1.8</td>
                          <td>A</td>
                          <td>A</td>
                          <td>A</td>
                        </tr>
                        <tr>
                          <td>Gecko</td>
                          <td>Mozilla 1.7</td>
                          <td>Win 98+ / OSX.1+</td>
                          <td>1.7</td>
                          <td>A</td>
                          <td>1.8</td>
                          <td>A</td>
                          <td>A</td>
                        </tr>
                        <tr>
                          <td>Gecko</td>
                          <td>Mozilla 1.8</td>
                          <td>Win 98+ / OSX.1+</td>
                          <td>1.8</td>
                          <td>1.8</td>
                          <td>A</td>
                          <td>A</td>
                          <td>A</td>
                        </tr>
                        <tr>
                          <td>Gecko</td>
                          <td>Seamonkey 1.1</td>
                          <td>Win 98+ / OSX.2+</td>
                          <td>1.8</td>
                          <td>1.8</td>
                          <td>A</td>
                          <td>A</td>
                          <td>A</td>
                        </tr>
                        <tr>
                          <td>Gecko</td>
                          <td>Epiphany 2.20</td>
                          <td>Gnome</td>
                          <td>1.8</td>
                          <td>1.8</td>
                          <td>A</td>
                          <td>A</td>
                          <td>A</td>
                        </tr>
                        <tr>
                          <td>Webkit</td>
                          <td>Safari 1.2</td>
                          <td>OSX.3</td>
                          <td>125.5</td>
                          <td>1.8</td>
                          <td>A</td>
                          <td>A</td>
                          <td>A</td>
                        </tr>
                        <tr>
                          <td>Webkit</td>
                          <td>1.8</td>
                          <td>Safari 1.3</td>
                          <td>OSX.3</td>
                          <td>312.8</td>
                          <td>A</td>
                          <td>A</td>
                          <td>A</td>
                        </tr>
                        <tr>
                          <td>Webkit</td>
                          <td>1.8</td>
                          <td>Safari 2.0</td>
                          <td>OSX.4+</td>
                          <td>419.3</td>
                          <td>A</td>
                          <td>A</td>
                          <td>A</td>
                        </tr>
                        <tr>
                          <td>Webkit</td>
                          <td>1.8</td>
                          <td>Safari 3.0</td>
                          <td>OSX.4+</td>
                          <td>522.1</td>
                          <td>A</td>
                          <td>A</td>
                          <td>A</td>
                        </tr>
                        <tr>
                          <td>Webkit</td>
                          <td>1.8</td>
                          <td>OmniWeb 5.5</td>
                          <td>OSX.4+</td>
                          <td>420</td>
                          <td>A</td>
                          <td>A</td>
                          <td>A</td>
                        </tr>
                      
                        </tbody>
                        <tfoot>
                        <tr>
                          <th>ID</th>
                          <th>Coupon Name</th>
                          <th>Code</th>
                          <th>Discount</th>
                          <th>Start Date</th>
                          <th>End Date</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                        </tfoot>
                      </table>
                </div>
            <!-- /.card-body -->
            	</div>
    		</section>
        </div>     
	@endsection