<!doctype html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <title>Power Jump</title>
    <base href="/">
    <link rel="stylesheet" href="css/all.css"/>
    <script src="js/all.js"></script>


</head>
<!-- declare our angular app and controller -->
<body class="container" ng-app="powerJump">

<div class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <a ui-sref="home" class="navbar-brand">Администраторски панел</a>
        </div>
        <div class="navbar-collapse collapse" id="navbar-main">
            <ul class="nav navbar-nav">
                <li>
                    <a ui-sref="project">Проекти</a>
                </li>
                <li>
                    <a ui-sref="event">Събития</a>
                </li>
            </ul>
            <ul class="nav navbar-nav pull-right">
                <li><a href="#" target="_blank">Изход</a></li>
            </ul>

        </div>
    </div>
</div>


<div ui-view></div>


</body>
</html>