<main>
  <div class="container">
      <div class="col-sm-6">
      <div class="col-sm-12" id="avatar_main_div">
          <div id="avatar_div" class="col-sm-6" align="center">
              <i id="usericon" class="fa fa-user" aria-hidden="true"></i>
              <button id="upload_profile" class="btn btn-sm">upload avatar</button>
          </div>
          <div class="col-sm-6" id="avatar_info">
              <h5 align="center"><b>PERSONAL INFORMATION</b></h5>
              <p>Juan Dela Cruz</p>
              <p>Tacloban City</p>
              <p>Brgy 95, Marasbaras</p>
              <p>juandelacruz@gmail.com</p>
              <p>09469999999</p>
              <div align="center">
                  <button class="btn btn-sm btn-danger"  data-toggle="modal" href='#modal-update'>UPDATE INFO</button>
              </div>
          </div>
      </div>
      </div>
      <div class="col-sm-6">
          <div class="col-sm-12" id="history">
              <div class="col-sm-12">
                  <h5><i class="fa fa-book" aria-hidden="true"></i> TRANSACTION HISTORY</h5>
                  <div class="table-responsive">
                      <table class="table">
                          <thead>
                          <tr>
                              <th>TRANSACTION DATE</th>
                              <th>TYPE</th>
                              <th>JUNKSHOP</th>
                          </tr>
                          </thead>
                          <tbody>
                          <tr>
                              <td>DEC 25,2016</td>
                              <td>BOTE</td>
                              <td>Scrapper Junk</td>
                          </tr>
                          <tr>
                              <td>DEC 25,2016</td>
                              <td>BOTE</td>
                              <td>Scrapper Junk</td>
                          </tr>
                              <td>DEC 25,2016</td>
                              <td>BOTE</td>
                              <td>Scrapper Junk</td>
                          </tr>
                          </tbody>
                      </table>
                  </div>
                  </div>
              </div>
          </div>
  </div>
  <div class="container">
      <div class="modal fade" id="modal-login">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-body">
                      <div class="container">
                          <div class="row centered-form">
                           <div class="col-xs-12 col-sm-4 col-md-6 col-sm-offset-0 col-md-offset-0">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Please provide a pick-up Date</h3>
                                 </div>
                                <div class="panel-body">
                                   <form role="form">
                                      <div class="row">
                                          <div class="col-xs-8">
                                                <div class="form-group">
                                                     <input type="date" name="date" id="date" class="date form-control input-sm" placeholder="Username">
                                              </div>
                                              <div class="formn-group">
                                                  <select name="type" id="input" class="form-control" required="required">
                                                      <option value="">-Type-</option>
                                                      <option value="">Diaryo</option>
                                                      <option value="">Bote</option>
                                                      <option value="">Bakal</option>
                                                  </select>
                                              </div>
                                          </div>
                                          <div class="col-xs-4">
                                              <input type="submit" value="Send request" class="btn btn-info btn-block">
                                          </div>
                                      </div>
                                   </form>
                                   </div>
                               </div>
                          </div>
                       </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  </div>
  <div class="modal fade" id="modal-update">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
          <button id="btn_close_span" type="button" class="close" data-dismiss="modal">
            <span style="color:black">+</span>
          </button>
        <div class="modal-body">
        <div class="container-fluid">
          <div class="col-sm-10 col-sm-offset-1" id="modal_up_div">
          <h4>UPDATE USER INFO</h4>
          <form>
            <div class="form-group">
              <label for="name">NAME</label>
              <input type="text" class="form-control" id="name" placeholder="Enter Name">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">ADDRESS</label>
              <input type="text" class="form-control" id="address" placeholder="Address">
            </div>
            <div class="form-group">
              <label for="email">EMAIL</label>
              <input type="email" class="form-control" id="email" placeholder="Email">
            </div>
            <div class="form-group">
              <label for="exampleInputFile">PHONE</label>
              <input type="text" class="form-control" id="phone" placeholder="Phone">
            </div>
            <button id="but_sub" type="submit" class="btn btn-primary btn-block">Submit</button>
          </form>
          </div>
          </div>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
</main>
