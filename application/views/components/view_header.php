<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?=config_item('site_name').' | '.$title?></title>

    <!-- Bootstrap -->
    <link href="<?=base_url().'assets/css/bootstrap.min.css'?>" rel="stylesheet">
    <!-- My Style -->
    <link href="<?=base_url().'assets/css/style.css'?>" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?=base_url()?>"><?=config_item('site_name')?></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
                <li><a href="#">Link</a></li>
                <?php $this->load->view(strtolower($user->role->name).'/view_menu'); ?>
            </ul>
            <?=form_open('search/find', ['class' => 'navbar-form navbar-left', 'role' => 'search']) ?>
            <div class="form-group">
                <input type="text" class="form-control" name="search-request" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
            <?=form_close()?>
            <ul class="nav navbar-nav navbar-right">
                <?php if( $auth ) { ?>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Welcome, <?=$user->login?> <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <?php if( $user->role->access_lvl > 5) { ?>
                                <li><a href="#"><?=$user->role->name?> Menu</a></li>
                            <?php } ?>
                            <li role="separator" class="divider"></li>
                            <li><a href="<?=base_url('index.php/auth/logout')?>">Log Out</a></li>
                        </ul>
                    </li>
                <?php } else { ?>
                    <li><a href="<?=base_url('index.php/auth/login')?>">Log In</a></li>
                    <li><a href="<?=base_url('index.php/auth/sign_up')?>">Sing Up</a></li>
                <?php } ?>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
