<?php


include "connect.php";


echo("<html><head>");
include "head.php";

echo("</head><body>");


echo('    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/fixme">FixMe</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="?site=guestbook">Guestbook</a>
                    </li>
                    <li>
                        <a href="?site=login">Private</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>');

$allowed_pages = [
    'guestbook',
    'login',
    'logout'
];

if (isset($_GET['site']) && $_GET['site'] != "" && in_array( $_GET['site'], $allowed_pages) ) {
        require $_GET['site'] . '.php';
} else {
    $description = nl2br(file_get_contents("README.md"));
    echo('    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12 text-center">
                <h1>FixMe</h1>
                ' . $description . '
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->');
}

echo("</body></html>");

?>