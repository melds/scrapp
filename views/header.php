<?php Session::init(); ?>

<html>
    <head>
        <!-- <meta name="name" content="content" charset="utf-8"> -->
        <title>ALUMNI</title>
        <link rel="stylesheet" href="<?php echo URL;?>public/css/style.css"/>
        <link rel="stylesheet" href="<?php echo URL;?>public/css/materialize.min.css"/>
        <link rel="stylesheet" href="<?php echo URL;?>public/css/materialize.icon.css"/>
        <link rel="shortcut icon" href="<?php echo URL ?>/public/img/logo.png" media="screen" title="no title" charset="utf-8">
    </head>
    <body>
      <?php if (Session::get('loggedIn')==true): ?>
        <header>
        	<nav>
            <div class="nav-wrapper">
              <a href="<?=URL  ?>" class="brand-logo">
                <img src="<?=URL ?>public/img/evsu-logo.png" alt="" class="brand-logo" /> <span class="brand-title">COE Alumni Tracking System</span>
              </a>
              <ul class="right hide-on-med-and-down">
                <li><a href="#addModal" class="add-trigger tooltipped" data-position="bottom" data-delay="0" data-tooltip="Add"><i class="material-icons">add</i></a></li>
                <li><a href="<?=URL  ?>"><i class="material-icons tooltipped" data-position="bottom" data-delay="0" data-tooltip="Home">home</i></a></li>
                <li><a href="<?=URL  ?>logout" class="tooltipped" data-position="bottom" data-delay="0" data-tooltip="Logout"><i class="material-icons">power_settings_new</i></a></li>
              </ul>
            </div>
        	</nav>
        </header>
      <?php endif; ?>
