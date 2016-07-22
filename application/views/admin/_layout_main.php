<?php $this->load->view('admin/components/page_head');  ?>
<body>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo site_url('admin/dashboard'); ?>"><?php echo $meta_title ?></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="<?php echo site_url('admin/dashboard');?>">Dashboard <span class="sr-only">(current)</span></a></li>
                <li><a href="<?php anchor('admin/page','pages');?>">Link</a></li>
                <li><a href="<?php anchor('admin/user','users');?>">Link</a></li>

            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<div class="container">
    <div class="row">
            <div class="col-md-9">
                <section>
                    <h2>Page Name</h2>
                </section>
            </div>
            <div class="col-md-3">
                <section>
                    <?php echo mailto('rajiththennakoonshady@gmail.com','<span class="glyphicon glyphicon-user" aria-hidden="true"></span>  rajiththennakoonshady@gmail.com'); ?> <br>
                    <?php echo anchor('admin/user/logot','<span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>  Logout'); ?>
                </section>
            </div>
    </div>
</div>

<?php $this->load->view('admin/components/page_tail');?>