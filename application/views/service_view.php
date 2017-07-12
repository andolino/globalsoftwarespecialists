<html lang="en">

<head>
    <?php include 'global_css.php'; ?>
    <?php include 'global_js.php'; ?>
</head>

<body>
    
    <?php include 'header_nav.php'; ?>
    <!--body start-->
    <div class="wrapper" style="margin-bottom: 40px;">
       
        <div class="row">
            <div class="col-sm-12">
                <h1><strong><?php echo $service_title; ?></strong></h1>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-12">
                <p> <?php echo $service_description; ?></p>
            </div>
        </div>
        
    </div>
    <!--body end-->
    
    <!-- footer start-->
    <?php include 'footer.php'; ?>
    <!-- footer end-->
</body>

</html>