<div class="main-header">
    <nav class="navbar navbar-inverse">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar3"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                <a class="navbar-brand" href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>image/logo.png" alt="LOGO" style="padding: 5px 0px 10px 5%;"></a>
            </div>
            <div id="navbar3" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="<?php if($this->uri->segment(1)=="home" || $this->uri->segment(1)==""){echo "active ";}?>"><a href="<?php echo base_url(); ?>home">Homes</a></li>
                    <li class="dropdown"><a href="<?php echo base_url(); ?>#services">Services <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-header">Services Offered</li>
                            <li><a href="<?php echo base_url(); ?>services/web_brochure">Brochure Website</a></li>
                            <li><a href="<?php echo base_url(); ?>services/web_migration">Website Migration</a></li>
                            <li><a href="<?php echo base_url(); ?>services/eewa">E-Commerce & Enterprise Web Applications</a></li>
                        </ul>
                    </li>
                    <li class="<?php if($this->uri->segment(1)=="about_us"){echo "active ";}?>"><a href="<?php echo base_url(); ?>about_us">About Us</a></li>
                    <li class="<?php if($this->uri->segment(1)=="contact_us"){echo "active ";}?>"><a href="<?php echo base_url(); ?>contact_us">Contact</a></li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
        <!--/.container-fluid -->
    </nav>
</div>
<!--<div style="width: 100%; height: 81px; display: block;" data-spy="affix-top"></div>-->
<script>
    $('ul.nav li.dropdown').hover(function () {
        $(this).find('.dropdown-menu').stop(true, true).delay(0).fadeIn(500);
    }, function () {
        $(this).find('.dropdown-menu').stop(true, true).delay(0).fadeOut(500);
    });
</script>