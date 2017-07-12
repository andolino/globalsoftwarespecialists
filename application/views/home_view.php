<html lang="en">
<head>
    <?php include 'global_css.php'; ?>
    <?php include 'global_js.php'; ?>
</head>
<body>
<script type="text/javascript">
    $('body').scrollspy({
        target: '.navbar',
        offset: 200
    });
    $(window).load(function () {
        $("#navbar3 ul li a").click(function () {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
</script>
    <?php include 'header_nav.php'; ?>
    
    <!--slider start -->
    <div id="carousel-example" class="carousel slide" data-ride="carousel" style="margin-bottom: 10px;">
        <ol class="carousel-indicators">
            <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example" data-slide-to="1"></li>
            <li data-target="#carousel-example" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="item active">
                <img src="<?php echo base_url(); ?>image/slides/1.jpg" />
                <!--
                <div class="carousel-caption" style="left: 11%;">
                    <h3>Brochure Website</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>
                </div>
                -->
            </div>
            <div class="item">
                <img src="<?php echo base_url(); ?>image/slides/2.jpg" />
                <!--
                <div class="carousel-caption" style="left: 54%;">
                    <h3>Website Migration</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>
                </div>
                -->
            </div>
            <div class="item">
                <img src="<?php echo base_url(); ?>image/slides/3.jpg" />
                <!--
                <div class="carousel-caption">
                    <h3>TITLE</h3>
                    <p>Description</p>
                </div>
                -->
            </div>
        </div>
        <a class="left carousel-control" href="#carousel-example" data-slide="prev"></a>
        <a class="right carousel-control" href="#carousel-example" data-slide="next"></a>
    </div>
    <!--slider end -->
    <!--body start-->
    <div id="services" class="wrapper" style="">
       
        <div class="row" style="padding: 0px 3% 0px 3%;">
            <div class="col-sm-12" style="margin-bottom: 20px; text-align: center;">
                <h2><strong>SERVICES</strong></h2>
            </div>
            
            <div class="col-sm-4">
               <a href="<?php echo base_url(); ?>services/web_brochure">
                   <img src="<?php echo base_url(); ?>image/service1.png" class="figure-img img-fluid rounded home" alt="Brochure Website">
               </a>
               <h4 style="text-align: center;">Brochure Website</h4> 
            </div>
            <div class="col-sm-4">
               <a href="<?php echo base_url(); ?>services/web_migration">
                   <img src="<?php echo base_url(); ?>image/service2.png" class="figure-img img-fluid rounded home" alt="Website Migration">
                </a>
                <h4 style="text-align: center;">Website Migration</h4>
            </div>
            <div class="col-sm-4">
               <a href="<?php echo base_url(); ?>services/web_design">
                   <img src="<?php echo base_url(); ?>image/service3.png" class="figure-img img-fluid rounded home" alt="Website Migration">
                </a>
                <h4 style="text-align: center;">E-Commerce & Enterprise Web Applications</h4>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-12">
                <h4>Brochure Website</h4>
                <p> Global Software Solutions offers top quality service when it comes to website design and development. Brochure Websites are our cheapest service that even small-to-medium enterprises can easily afford. </p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <h4>Website Migration</h4>
                <p> We are experts in migrating data and application to another platform. The pricing depends on how large the target is. Email us now at info@globalsoftwarespecialists.com to get a rough estimate. </p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <h4>E-Commerce & Enterprise Web Applications</h4>
                <p> GSS offers an unmatched quality service when it comes to website design and development. We are experts in developing a wide range of websites: from the basic and very affordable brochure website to dynamic and interactive web solutions for e-commerce and enterprise web applications serving different purposes via Internet or Intranet. Email us now at info@globalsoftwarespecialists.com to get a rough estimate. </p>
            </div>
        </div>
    </div>


    <div id="services" class="wrapper" style="margin-bottom: 40px;">
       
        <div class="row" style="padding: 0px 3% 0px 3%;">
            <div class="col-sm-12" style="margin-bottom: 20px; text-align: center;">
                <h2><strong>Clients That Gave Their Trusts</strong></h2>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-5">
                <h3>Seaman OnLine</h3>
                <p>In 2010, the Founders became mindful with the presence of the real touch of a blissful and momentous living for Filipino seafarers and their families here and abroad. So www.seamanonline.com.ph was born.
                SeamanOnLine is a connection of lifestyle in every walk of genuineness. Your family across the seas, wherever, whenever.</p>
            </div>
            <div class="col-sm-7">
                <img src="<?php echo base_url() . 'image/clinet-one.PNG'; ?>" class="thumbnail" width="100%">
                <button type="button" class="btn btn-primary" style="float: right"><i class="fa fa-users" aria-hidden="true"></i> More Clients</button>
            </div>
        </div>
        
    </div>
    <!--body end-->
    
    <!-- footer start-->
    <?php include 'footer.php'; ?>
    <!-- footer end-->
</body>

</html>