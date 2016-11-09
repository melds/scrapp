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
                        <a  data-toggle="modal" href='#modal-login'><i class="fa fa-user fa-fw"></i> Request for pick-up</a>

                    </li>
                    <li>
                        <a href="#contact">Logout</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
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

    <!-- Footer -->
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

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
<script type="text/javascript">
function _(id) {
    return document.getElementById('id');
}
$(document).ready(function(){
    $("#avatar_div").mouseenter(function(){
        $("#upload_profile").fadeIn('slow');
        $('#usericon').css('color','#333');
    });
    $("#avatar_div").mouseleave(function(){
        $("#upload_profile").fadeOut('slow');
        $('#usericon').css('color','#ccc');
    });
});
</script>
