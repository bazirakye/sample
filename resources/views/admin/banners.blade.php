@extends('admin.dashboard')
  
  @section('content')
    <div class="content-wrapper">
      <section class="content">
      
            <div class="card">
                 <div class="card-header">
                    <h3 class="card-title">Banners</h3>
                    <div>
                    <div class="float-right">
                        <span><a href="{{route('admin.addBanner')}}"><i class="nav-icon fa fa-plus-circle">New Banner</i></a></span>              
                    </div>
                    </div>
                </div>
            <!-- /.card-header -->
                <div class="card-body">
                      <table id="dataTable" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                          <th>ID</th>
                          <th>View</th>
                          <th>Banner Name</th>
                          <th>Banner Group</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                          <td>Trident</td>
                          <td>Internet
                            Explorer 4.0
                          </td>
                          <td>Win 95+</td>
                          <td> 4</td>
                          <td> 4</td>
                          <td>X</td>
                        </tr>
                        <tr>
                          <td>Trident</td>
                          <td>Internet
                            Explorer 5.0
                          </td>
                          <td>Win 95+</td>
                          <td>5</td>
                          <td>C</td>
                          <td> 4</td>
                        </tr>
                        <tr>
                          <td>Trident</td>
                          <td>Internet
                            Explorer 5.5
                          </td>
                          <td>Win 95+</td>
                          <td>5.5</td>
                          <td> 4</td>
                          <td>A</td>
                        </tr>
                        <tr>
                          <td>Trident</td>
                          <td> 4</td>
                          <td>Internet
                            Explorer 6
                          </td>
                          <td>Win 98+</td>
                          <td>6</td>
                          <td>A</td>
                        </tr>
                        <tr>
                          <td>Trident</td>
                          <td> 4</td>
                          <td>Internet Explorer 7</td>
                          <td>Win XP SP2+</td>
                          <td>7</td>
                          <td>A</td>
                        </tr>
                        <tr>
                          <td>Trident</td>
                          <td> 4</td>
                          <td>AOL browser (AOL desktop)</td>
                          <td>Win XP</td>
                          <td>6</td>
                          <td>A</td>
                        </tr>
                        <tr>
                          <td>Gecko</td>
                          <td> 4</td>
                          <td>Firefox 1.0</td>
                          <td>Win 98+ / OSX.2+</td>
                          <td>1.7</td>
                          <td>A</td>
                        </tr>
                        <tr>
                          <td>Gecko</td>
                          <td> 4</td>
                          <td>Firefox 1.5</td>
                          <td>Win 98+ / OSX.2+</td>
                          <td>1.8</td>
                          <td>A</td>
                        </tr>
                        <tr>
                          <td>Gecko</td>
                          <td> 4</td>
                          <td>Firefox 2.0</td>
                          <td>Win 98+ / OSX.2+</td>
                          <td>1.8</td>
                          <td>A</td>
                        </tr>
                        <tr>
                          <td>Gecko</td>
                          <td>Firefox 3.0</td>
                          <td>Win 2k+ / OSX.3+</td>
                          <td>1.9</td>
                          <td> 4</td>
                          <td>A</td>
                        </tr>
                        <tr>
                          <td>Gecko</td>
                          <td> 4</td>
                          <td>Camino 1.0</td>
                          <td>OSX.2+</td>
                          <td>1.8</td>
                          <td>A</td>
                        </tr>
                        <tr>
                          <td>Gecko</td>
                          <td> 4</td>
                          <td>Camino 1.5</td>
                          <td>OSX.3+</td>
                          <td>1.8</td>
                          <td>A</td>
                        </tr>
                        <tr>
                          <td>Gecko</td>
                          <td>Netscape 7.2</td>
                          <td> 4</td>
                          <td>Win 95+ / Mac OS 8.6-9.2</td>
                          <td>1.7</td>
                          <td>A</td>
                        </tr>
                        <tr>
                          <td>Gecko</td>
                          <td> 4</td>
                          <td>Netscape Browser 8</td>
                          <td>Win 98SE+</td>
                          <td>1.7</td>
                          <td>A</td>
                        </tr>
                        </tbody>
                        <tfoot>
                        <tr>
                          <th>ID</th>
                          <th>View</th>
                          <th>Banner Name</th>
                          <th>Banner Group</th>
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