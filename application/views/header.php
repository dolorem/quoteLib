<html>
<head>
<meta charset="UTF-8">
<title><?=$title?></title>
<link rel="stylesheet" href="/resources/bootstrap/css/bootstrap.css" />
<link rel="stylesheet" href="/resources/style.css" />
</head>
<body>
<nav class="navbar navbar-inverse" role="navigation">
<div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Wyszukiwarka cytatów</a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Szukaj">
        </div>
        <button type="submit" class="btn btn-default">Szukaj</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <!--<li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>-->
	<?php include 'loginNav.php' ?>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
