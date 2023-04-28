<!DOCTYPE html>
<html>
<head>

    <?php echo $this->Html->charset(); ?>
    <meta name="description" content="JobsIn - Search For Available Jobs">
    <meta name="author" content="Andrea Njegovan">

    <title>
        <?php echo $this->fetch('title'); ?>
    </title>
    <?php
		echo $this->Html->meta('icon');

        echo $this->Html->css('kickstart');
        echo $this->Html->css('style');

        echo $this->Html->script('jquery');
        echo $this->Html->script('kickstart');

        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
    ?>
</head>
<body>
<div id="container" class="grid">
    <header>
        <div class="col_4 column">
            <h1><a href="<?php echo $this->webroot; ?>"><strong>JobsIn</strong> Artificer</a></h1>
        </div>

        <div class="col_6 column right welcome">
            <?php if (AuthComponent::user('id')): ?>
            <h6>Welcome <strong><?php echo $userData['username']; ?></strong></h6>
            <a href="<?php echo $this->webroot; ?>users/logout">Logout</a>
            <?php endif; ?>
        </div>

        <div class="col_2 column right">
            <form id="add_job_link" action="<?php echo $this->webroot; ?>jobs/add">
                <button class="large blue"><i class="fa fa-plus"></i> Add Job</button>
            </form>
        </div>
    </header>

    <div class="col_12 column">
        <!-- Menu Horizontal -->
        <ul class="menu">
            <li <?php echo ($this->here == '/jobsin/' || $this->here == 'jobsin/jobs') ? 'class="current"' : '' ?>><a href="<?php echo $this->webroot; ?>"><i class="fa fa-home"></i> Home</a></li>
            <li <?php echo ($this->here == '/jobsin/jobs/browse') ? 'class="current"' : '' ?>><a href="<?php echo $this->webroot; ?>jobs/browse"><i class="fa fa-desktop"></i> Browse Jobs</a></li>
            <li <?php echo ($this->here == '/jobsin/users/register') ? 'class="current"' : '' ?>><a href="<?php echo $this->webroot; ?>users/register"><i class="fa fa-user"></i> Register</a></li>
            <li <?php echo ($this->here == '/jobsin/users/login') ? 'class="current"' : '' ?>><a href="<?php echo $this->webroot; ?>users/login"><i class="fa fa-key"></i> Login</a></li>
            <li style="float: right;" <?php echo ($this->here == '/faqs') ? 'class="current"' : '' ?>><a href="<?php echo $this->webroot; ?>faqs"><i class="fa fa-question"></i> FAQ's</a></li>
        </ul>
    </div>

    <div class="col_12 column">

        <!--Display Messages-->
        <?php echo $this->Session->flash(); ?>
        <!--Include Main Area-->
        <?php echo $this->fetch('content'); ?>

    </div>

    <div class="clearfix"></div>
    <?php echo $this->element('footer'); ?>
</div> <!-- End Grid -->
</body>
</html>
