 <div class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Brand</a>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <li class="menu-item active"><a href="#">About </a></li>
                    <ul class="nav navbar-nav">
                        <li class="menu-item"><a href="#">Contact </a></li>
                        <ul class="nav navbar-nav">
                            <li class="menu-item"><a href="#">Support <i class="fa fa-support"></i></a></li>
                            <ul class="nav navbar-nav">
                                <li class="menu-item"><a href="#">Blog <i class="fa fa-comments-o"></i></a></li>
                                <li class="menu-item dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Settings <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li class="menu-item dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Notifications <i class="fa fa-wrench"></i></a>
                                        </li>
                                        <li class="menu-item dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Edit Account </a>
                                            <ul class="dropdown-menu">
                                                <li class="menu-item "><a href="#">Page with comments</a></li>
                                                <li class="menu-item "><a href="#">Page with comments disabled</a></li>
                                                <li class="menu-item dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">More</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="#">3rd level link more options</a></li>
                                                        <li><a href="#">3rd level link</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="divider"></li>
                                        <li class="menu-item dropdown"><i class="fa"></i><a href="#" class="dropdown-toggle" data-toggle="dropdown">Logout <i class="fa fa-power-off padding-left-ten-px red-text"></i></a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <li>
                                    <a href="http://www.twitter.com/" title="Twitter" rel="nofollow" target="_blank">
                                        <i class="fa fa-twitter-square fa-lg twitter-blue"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="http://www.facebook.com/" title="Facebook" rel="nofollow" target="_blank">
                                        <i class="fa fa-facebook-square fa-lg facebook-blue"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="http://www.linkedin.com/" title="LinkedIn" rel="nofollow" target="_blank">
                                        <i class="fa fa-linkedin-square fa-lg linkedin-blue"></i>
                                    </a>
                                </li>
                                <li>
                                    <form class="navbar-search navbar-form" method="get" action="">
                                        <input type="text" class="form-control" placeholder="Search" name="s">
                                    </form>
                                </li>
                            </ul>
                        </ul>
                    </ul>
                </ul>
                <!-- DROPDOWN LOGIN STARTS HERE  -->
                <ul id="signInDropdown" class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <button type="button" id="dropdownMenu1" data-toggle="dropdown" class="btn btn-info navbar-btn dropdown-toggle"><i class="glyphicon glyphicon-user"></i> Login <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                          <li style="width: 250px;">
                                <form class="navbar-form form" role="form">
                                    <div class="form-group">
                                      <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                                            <!--EMAIL ADDRESS-->
                                            <input id="emailInput" placeholder="email address" class="form-control" type="email" oninvalid="setCustomValidity('Please enter a valid email address!')" onchange="try{setCustomValidity('')}catch(e){}" required="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock color-blue"></i></span>
                                            <!--PASSWORD-->
                                            <input id="passwordInput" placeholder="password" class="form-control" type="password" oninvalid="setCustomValidity('Please enter a password!')" onchange="try{setCustomValidity('')}catch(e){}" required="">
                                        </div>
                                    </div>
                                    <!--  BASIC ERROR MESSAGE
                                    <div class="form-group">
                                    <label class="error-message color-red">*Email &amp; password don't match!</label>
                                    </div>
                                    -->
                                    <div class="form-group">
                                        <!--BUTTON-->
                                        <button type="submit" class="btn btn-primary form-control">Login</button>
                                    </div>
                                    <div class="form-group">
                                        <!--RESET PASSWORD LINK-->
                                        <span class="pull-right"><a href="#">Forgot Password?</a></span>
                                    </div>
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- DROPDOWN LOGIN ENDS HERE  -->
            </div>
        </div>
    </div>
