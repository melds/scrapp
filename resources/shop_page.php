<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Landing Page - Start Bootstrap Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/landing-page.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<!-- Navigation -->
    <nav class="navbar navbar-default navbar topnav" role="navigation">
        <div class="container topnav">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand topnav" href="#">ScrApp  </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
  
                    <li>
                        <a >Notification <i class="fa fa-user fa-fw"></i>
                        <span id="badge_shop" class="badge">2</span></a>
                    </li>
                    <li>
                        <a href="#contact">Logout <i class="fa fa-sign-out" aria-hidden="true"></i></a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

<div class="container">
  		<div class="col-xs-8 col-xs-offset-2">
  			<div role="tabpanel">
  				<!-- Nav tabs -->
  				<ul class="nav nav-tabs" role="tablist" >
  					<li role="presentation" class="active" id="req_cat">
  						<a href="#request" aria-controls="request" role="tab" data-toggle="tab">Requests</a>
  					</li>
  					<li role="presentation">
  						<a href="#onprocess" aria-controls="tab" role="tab" data-toggle="tab">On Process</a>
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
		  										<th>NAME</th>
		  										<th>ADDRESS</th>
		  										<th>ACTION</th>
		  										<th>DATE REQUESTED</th>
		  									</tr>
		  								</thead>
		  								<tbody>
		  									<tr>
		  										<td>Juan Dela Cruz</td>
		  										<td>Marasbaras Tacloban City</td>
		  										<td>Dec 25, 2016</td>
		  										<td><button type="button" class="btn btn-sm btn-default" onclick="return confirm('Confirm!');">Process</button></td>
		  									</tr>
		  								</tbody>

		  							</table>
		  						</div>
	  						</div>
	  					</div>
  					</div>
  					<div role="tabpanel" class="tab-pane" id="onprocess">
  						<div class="panel panel-default">
	  						<div class="panel-body">
	  							<div class="table-responsive">
		  							<table class="table table-striped">
		  								<thead>
		  									<tr>
		  										<th>NAME</th>
		  										<th>ADDRESS</th>
		  										<th>ACTION</th>
		  										<th>DATE REQUESTED</th>
		  									</tr>
		  								</thead>
		  								<tbody>
		  									<tr>
		  										<td>Juan Dela Cruz</td>
		  										<td>Marasbaras Tacloban City</td>
		  										<td>Dec 25, 2016</td>
		  										<td><a class="btn btn-sm btn-primary" data-toggle="modal" href='#modal-confirm'>Confirm</a></td>
		  									</tr>
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
<footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="list-inline">
                        <li>
                            <a href="#">Home</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#about">About</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#services">Services</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#contact">Contact</a>
                        </li>
                    </ul>
                    <p class="copyright text-muted small">Copyright &copy; Your Company 2014. All Rights Reserved</p>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>

<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="http://getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>

<script type="text/javascript">
function _(id) {
    return document.getElementById('id');
}
/*(function (){
	var tab_cat = $('#req_cat').children('a');
        $(tab_cat).css('backgroundColor','teal');
        $(tab_cat).css('color','white');
        $(tab_cat).css('border','3px solid #ccc');
        $(tab_cat).css('borderBottom','transparent');
        $(tab_cat).css('marginBottom','-3px');
}())
$(document).ready(function(){
    $("#req_cat").onblur(function(){
    	alert('dsad')
    });
    $("#avatar_div").mouseleave(function(){
        $("#upload_profile").fadeOut('slow');
        $('#usericon').css('color','#ccc');
    });
});*/
</script>