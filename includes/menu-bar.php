<div class="header-nav animate-dropdown">
    <div class="container">
        <div class="yamm navbar navbar-default" role="navigation">
            <div class="navbar-header">
                <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="nav-bg-class">
                <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
	<div class="nav-outer">
		<ul class="nav navbar-nav">
			<li class="dropdown yamm-fw">
				<a href="index.php" data-hover="dropdown" class="dropdown-toggle" style="color:#ffffff !important;">Home</a>

				
			</li>
            <li class="dropdown yamm-fw">
				<a href="about_us.php" data-hover="dropdown" class="dropdown-toggle" style="color:#ffffff !important;">About Us</a>
            </li>
              <?php $sql=mysqli_query($con,"select id,categoryName  from category limit 6");
while($row=mysqli_fetch_array($sql))
{
    ?>

			<li class="dropdown yamm" >
				<a href="category.php?cid=<?php echo $row['id'];?>" style="color:#ffffff !important;"> <?php echo $row['categoryName'];?></a>
			
			</li>
			<?php } ?>

            <li class="dropdown yamm-fw">
				<a href="contact_us.php" data-hover="dropdown" class="dropdown-toggle" style="color:#ffffff !important;">Contact Us</a>
            </li>
		</ul><!-- /.navbar-nav -->
		<div class="clearfix"></div>				
	</div>
</div>


            </div>
        </div>
    </div>
</div>