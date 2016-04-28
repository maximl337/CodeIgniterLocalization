<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title ?></title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body>


 <!-- Static navbar -->
<nav class="navbar navbar-default navbar-static-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">SAMETRICA</a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#"><?php echo lang('labels_home'); ?></a></li>
        <li><a href="#about"><?php echo lang('labels_about'); ?></a></li>
        <li><a href="#contact"><?php echo lang('labels_news'); ?></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo lang('labels_sectors'); ?> <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#"><?php echo lang('labels_public'); ?></a></li>
            <li><a href="#"><?php echo lang('labels_private'); ?></a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php echo $this->config->item('base_path') .'langswitch/switchLanguage/english'; ?>">English</a></li>
        <li><a href="<?php echo $this->config->item('base_path') . 'langswitch/switchLanguage/french'; ?>">French</a></li>
        
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>
<nav>
	<!-- <p>Language: 
	<a href="<?php echo $this->config->item('base_path') .'langswitch/switchLanguage/english'; ?>">English | </a>
	<a href="<?php echo $this->config->item('base_path') . 'langswitch/switchLanguage/french'; ?>">French</a>
	</p> -->
</nav>