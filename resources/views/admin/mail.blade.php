@extends('admin.dashboard')
  
  @section('content')
    <div class="content-wrapper">
      <section class="content">
      
            <div class="card">
                 <div class="card-header">
                    <h3 class="card-title">Customers</h3>
                    <div>
                    </div>
                </div>
            <!-- /.card-header -->
                <div class="card-body">
                      <div class="card-header">
                        <h5 class="card-title">Send Mail</h5>
                      </div>
                      <div class="row">
                        <div class="col-lg-2">
                          <div class="card">
                            <div class="card-body">
                              <button class="btn btn-primary badge-pill m-2">Compose New Mail</button>
                              <br>
                              <div class="list-group list-group-flush">
                                <a href="#" class="list-group-item">Sent Mails</a>
                                <a href="#" class="list-group-item">Saved Mails</a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-10">
                          <div class="card-body">
                        <div>
                          <form>
                            <div class="form-group">
                              <div class="row">
                                <label for="from" class="col-lg-3">From</label>
                                <input type="text" name="mail_sender" disabled class="col-lg-9 form-control" placeholder="Mianzi">
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="row">
                                <label for="to" class="col-lg-3">To</label>
                                <select class="form-control col-lg-9" name="mail_receiver">
                                  <option>All customers</option>
                                  <option>New Customers</option>
                                  <option>Selected Customers</option>
                                </select>
                              </div>
                            </div>
                            <div class="form-group">
                             <div class="row">
                                {{Form::label('specific_receiver', 'Select Customer', ['class'=>'col-lg-3'])}}
                              <div class="col-lg-9 ">
                                <select class="form-control select2 m-0" style="width: 100%;">
                                <option selected="selected">Select Customer</option>
                                <option>Customer One</option>
                                <option>Customer two</option>
                                <option>Customer three</option>
                                <option>Customer four</option>
                                <option>Customer five</option>
                                <option>Customer six</option>
                                <option>Customer seven</option>
                              </select>
                              </div>
                             </div>
                            </div>

                            <div class="form-group">
                              <div class="row">
                                <label for="subject" class="col-lg-3">Subject</label>
                                <input type="text" name="subject" class="col-lg-9 form-control">
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="row">
                                <label for="from" class="col-lg-3">Body</label>
                                <textarea class="form-control col-lg-9" name="mail_body">
                                  
                                </textarea>
                              </div>
                            </div>
                            <div class="card-footer float-right">
                              <button class="btn btn-outline-primary">Send now</button>
                              <button class="btn btn-outline-secondary">Send Later</button>
                            </div>
                          </form>
                        </div>
                      </div>
                        </div>
                      </div>
                      
                </div>
            <!-- /.card-body -->
              </div>
          </section>
        </div>     

  @endsection