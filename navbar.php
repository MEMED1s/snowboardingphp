
<div class="header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="header-left">
                    <div class="logo">
                        <a href="index.php"><img src="images/logo.png" alt="" /></a>
                    </div>
                    <div class="menu">
                        <a class="toggleMenu" href="#"><img src="images/nav.png" alt="" /></a>
                        <ul class="nav" id="nav">
                            <li class="nav-btn <?php if($pageTitle=='Shop'){echo"current";} ?>"><a href="shop.php">Shop</a></li>
                            <li class="nav-btn <?php if($pageTitle=='Team'){echo"current";} ?>"><a href="team.php">Team</a></li>
                            <li class="nav-btn <?php if($pageTitle=='Events'){echo"current";} ?>"><a href="events.php">Events</a></li>
                            <li class="nav-btn <?php if($pageTitle=='Experiance'){echo"current";} ?>"><a href="experiance.php">Experiance</a></li>
                            <li class="nav-btn <?php if($pageTitle=='Contact'){echo"current";} ?>"><a href="contact.php">Contact</a></li>
							<?php if(!isset($_SESSION["emailuser"])){?>
                            <li class="nav-btn <?php if($pageTitle=='Login'){echo"current";} ?>"> <a href="login.php">Login</a></li>
							<?php }?>
                            <div></div>
                        </ul>
                        <script type="text/javascript" src="js/responsive-nav.js"></script>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="header_right" >
				<?php if(isset($_SESSION["emailuser"])){?>
				<a href="logout.php"><i class="fa-solid fa-right-from-bracket" style="color:white;margin-left:10px"></i></a><?php }?>
                    
                    <ul class="icon1 sub-icon1 profile_img">
                        <li><a class="active-icon c1" href="#"> </a>
                            <ul class="sub-icon1 list">
                                <div class="product_control_buttons">
                                    <a href="#"><img src="images/edit.png" alt="" /></a>
                                    <a href="#"><img src="images/close_edit.png" alt="" /></a>
                                </div>
                                <div class="clear"></div>
                                <li class="list_img"><img src="images/1.jpg" alt="" /></li>
                                <li class="list_desc">
                                    <h4><a href="#">velit esse molestie</a></h4><span class="actual">1 x $12.00</span>
                                </li>
                                <div class="login_buttons">
                                    <div class="check_button"><a href="checkout.php">Check out</a></div>
                                    <div class="login_button"><a href="login.php">Login</a></div>
                                    <div class="clear"></div>
                                </div>
                                <div class="clear"></div>
                            </ul>
                        </li>
                    </ul>
                    <!-- Logout Button -->
                
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </div>
</div>

