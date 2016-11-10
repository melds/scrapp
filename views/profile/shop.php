<main>
	<div class="container">
  		<div class="col-xs-12 col-sm-8 col-sm-offset-2">
  			<div role="tabpanel">
  				<!-- Nav tabs -->
  				<ul class="nav nav-tabs" role="tablist" >
  					<li role="presentation" class="active" id="req_cat">
  						<a href="#request" aria-controls="request" role="tab" data-toggle="tab">
  						Pick Appointments <span class="badge bg-success" style="background-color: green"><?= sizeof($this->appointments) ?></span>
  						</a>
  					</li>

  				</ul>
  			
  				<!-- Tab panes -->
  				<div class="tab-content">
  					<div role="tabpanel" class="tab-pane active" id="request">
	  					<div class="panel panel-dafault" id="request_panel">
	  						<div class="panel-body">
	  							<div class="table-responsive">
		  							<table class="table table-striped">
		  								<thead>
		  									<tr>
		  										<th>Name</th>
		  										<th>Brgy</th>
		  										<th>Pick Up Date</th>
		  										<th>Action</th>
		  									</tr>
		  								</thead>
		  								<tbody>
		  								<?php foreach ($this->appointments as $appointment ): ?>
		  									<tr>
		  										<td><?= $appointment->firstname." ".$appointment->lastname ?></td>
		  										<td><?= $appointment->brgy_name  ?>, Tacloban City</td>
		  										<td><?= $appointment->pickup_date  ?></td>
		  										<td>
		  											<button type="button" class="btn btn-sm btn-default" onclick="return confirm('Confirm!');">Pickup</button>
		  											</td>
		  									</tr>
		  								<?php endforeach ?>
		  									
		  								</tbody>

		  							</table>
		  						</div>
	  						</div>
	  					</div>
  					</div>
  				</div>
  			</div>
  		</div>	
 	 </div>
 	 <div class="modal fade" id="modal-confirm">
          <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <button id="btn_close_span" type="button" class="close" data-dismiss="modal">
                  <span style="color:black">+</span>
                </button>
              <div class="modal-body">
              <div class="container-fluid">
                <div class="" id="modal_up_div">
                <h4 id="transact">TRANSACTION</h4>
                <form>
                <div class="row" id="trans_main_row">
                  <div class="form-group">
	                    <div class="input-group">
							<span class="input-group-addon" id="basic-addon1">&#8369;</span>
	                    	<input type="number" class="form-control" id="name" placeholder="Enter Total Cost">
	                    </div>
	               </div>
                    <div class="form-group">
                    	<button id="but_sub" type="submit" class="btn btn-primary btn-block">Submit</button>
                    </div>
                </div>
                </form>
                </div>
                </div>
              </div>
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
</main>