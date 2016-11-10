
<!DOCTYPE html>
<html lang="en">

	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="description" content="">
	    <meta name="author" content="">

	    <title>ScrApp</title>
			<link href="public/css/bootstrap.min.css" rel="stylesheet">
	    <link href="public/css/select2.min.css" rel="stylesheet">
			<link href="public/css/landing-page.css" rel="stylesheet">
	    <link href="public/css/style.css" rel="stylesheet">
	    <link href="public/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	</head>
	<body >
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
                   <?php if (Session::exists('user')): ?>
                        
                    <?php if (Session::get('user')['type']=='user'): ?>
                          <li>
                            <a href="<?=URL."post" ?>">Appoint Pick <i class="fa fa-calendar" aria-hidden="true"></i></a>
                        </li> 
                      <?php endif ?>  
                        <li>
                            <a href="<?=URL."logout" ?>">Logout <i class="fa fa-sign-out" aria-hidden="true"></i></a>
                        </li>
                    <?php else: ?>
                        <li>
                            <a href="<?=URL."login" ?>">Login <i class="fa fa-user" aria-hidden="true"></i></a>
                        </li>
                   <?php endif ?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
