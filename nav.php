<?php
if (isset($_COOKIE["login"])) {
    $emails = $_COOKIE["login"];

?>
    <div class="navbar navbar-inverse-blue navbar">
        <!--<div class="navbar navbar-inverse-blue navbar-fixed-top">-->
        <div class="navbar-inner navbar-inner_1">
            <div class="container">
                <a class="brand" href="profile.php"><img src="images/logo.png" alt="logo"></a>
                <div class="pull-right">
                    <nav class="navbar nav_bottom" role="navigation">

                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header nav_2">
                            <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">Menu
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#"></a>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                            <ul class="nav navbar-nav nav_1">
                                <li><a href="profile.php">Home</a></li>
                                <li><a href="search.php">Search</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Matches<span class="caret"></span></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="liked_profiles.php">Liked Profiles</a></li>
                                        <li><a href="recently_view.php">Recently Viewed Profiles</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Messages<span class="caret"></span></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="inbox.php">Inbox</a></li>
                                        <li><a href="sent_message.php">Sent</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?= $emails ?><span class="caret"></span></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="more_info.php">Enter More Information</a></li>
                                        <li><a href="edit_profile.php">Edit Profile</a></li>
                                        <li><a href="change_pass_page.php">Change Password</a></li>
                                        <li><a href="delete.php">Delete Profile</a></li>
                                        <li><a href="logout.php">Logout</a></li>

                                    </ul>
                                </li>
                                <li class="last"><a href="contact.php">Contact us</a></li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </nav>
                </div> <!-- end pull-right -->
                <div class="clearfix"> </div>
            </div> <!-- end container -->
        </div> <!-- end navbar-inner -->
    </div> <!-- end navbar-inverse-blue -->
<?php
} else {
    header("location:index.php?again=1");
}
?>