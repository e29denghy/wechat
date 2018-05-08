<header>
	<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
		<a class="navbar-brand ml_40 mr_30" href="#">鹏 聚 文 化</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarCollapse">
			<ul class="nav nav-pills mr-auto">
			  <li class="nav-item">
			    <a class="nav-link" href="/" id="home">首 页</a>
			  </li>
			  <li class="nav-item dropdown">
			    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"  id="course">课程体系</a>
			    <div class="dropdown-menu">
			      <a class="dropdown-item" href="/course/com">高效沟通</a>
			      <a class="dropdown-item" href="/course/sun">阳光心态</a>
			      <div class="dropdown-divider"></div>
			      <a class="dropdown-item disabled" href="#">魅力口才 快乐沟通</a>
			    </div>
			  </li>
				<li class="nav-item">
					<a class="nav-link disabled" href="#"  id="academy">鹏聚商学院</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#"  id="news">新闻公告</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="/about"  id="about">关于我们</a>
				</li>
			</ul>
			<form class="form-inline mt-2 mt-md-0 mr_40">
				<input class="form-control mr-sm-2" type="text" placeholder="请输入文章标题" aria-label="Search">
				<button class="btn btn-outline-success my-2 my-sm-0" type="submit">搜索</button>
			</form>
		</div>
	</nav>
</header>
<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
<script>
 $("#{{$page_id}}").addClass("active");
</script>
