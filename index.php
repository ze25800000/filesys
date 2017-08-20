<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>WEB在线文件管理系统</title>
</head>
<link rel="stylesheet" href="css/bootstrap.css">
<script src="js/bootstrap.js"></script>
<body>
<div class="container">
    <div class="row clearfix">
        <div class="col-md-12 column">
            <nav class="navbar navbar-default" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1"><span class="sr-only">切换导航</span><span
                                class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><span class="glyphicon glyphicon-home"
                                                                   aria-hidden="true"></span>首页</a>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active">
                            <a href="#"><span class="glyphicon glyphicon-folder-open"></span>新建目录</a>
                        </li>
                        <li>
                            <a href="#"><span class="glyphicon glyphicon-file"></span>新建文件</a>
                        </li>
                        <li>
                            <a href="#"><span class="glyphicon glyphicon-upload"></span>上传文件</a>
                        </li>
                        <li>
                            <a href="#"><span class="glyphicon glyphicon-info-sign">系统信息</a>
                        </li>
                    </ul>
                    <form class="navbar-form navbar-left" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control"/>
                        </div>
                        <button type="submit" class="btn btn-default">搜索</button>
                    </form>
                </div>

            </nav>
            <div class="jumbotron">
                <h3>
                    WEB在线文件管理系统
                </h3>
            </div>
            <table class="table nofollow table-bordered table-hover table-condensed">
                <thead>
                <tr>
                    <th>
                        类型
                    </th>
                    <th>
                        名称
                    </th>
                    <th>
                        大小
                    </th>
                    <th>
                        读/写/执行
                    </th>
                    <th>
                        访问时间
                    </th>
                    <th>
                        操作
                    </th>
                </tr>
                </thead>
                <tbody>

                </tbody>
            </table>


        </div>
    </div>
</div>
</body>

</html>