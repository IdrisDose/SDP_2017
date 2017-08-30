<?php require_once("Assets/php/auth.php"); ?>
<nav class="navbar navbar-default">
    <div class="container">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">SDP Journal</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <div class="btn-group pull-right ">
                    <ul class="nav navbar-nav">
                        <?php if (isLog()) { ?>
                            <li role="presentation" class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                    <?php echo getName(); ?> <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Manage</a></li>
                                    <li><a href="Assets/php/user_logout.php">Logout</a></li>
                                </ul>
                            </li> 		
                        <?php } else { ?>
                            <li><a href="login.php">Login</a></li>
                        <?php } ?>
                    </ul>
                </div>
                <ul class="nav navbar-nav">
                    <li><a href="home.php">Home</a></li>
                    <?php if (isLog()) { ?>
                        <li><a href="#">My Journals</a></li>
                        <li><a href="#">Discovery</a></li>
                    <?php } ?>
                </ul>
                <?php if (isLog()) { ?>
                    <form class="form-inline">
                        <div class="input-group pull-right" style="margin-top: 7px;">
                            <span class="input-group">

                            </span>
                            <input type="text"class="form-control col-md-5" placeholder="Search">
                            <span class="input-group-btn">
                                <select class="form-control selectpicker col-xs-0">
                                    <option>Word</option>
                                    <option>Date</option>
                                </select>
                                <button class="btn btn-default" type="button"> <span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                            </span>
                        </div><!-- /input-group -->
                    </form>
                <?php } ?>
            </div>
        </div>
    </div>
</nav>
