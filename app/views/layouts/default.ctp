<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=7" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>SisGest &#9679; Index</title>
		<?php echo $this->Html->css(array('style','jquery.wysiwyg','facebox', 'visualize')) ?>
		<?php echo $scripts_for_layout; ?>
		<!--[if lt IE 8]><style type="text/css" media="all">@import url("/adminus/css/ie.css");</style><![endif]-->
		<?php //echo $this->Html->script("adminus/jquery") ?>
</head>
<body>
	<div id="hld">
		<div class="wrapper">		<!-- wrapper begins -->
			<div id="header">
				<div class="hdrl"></div>
				<div class="hdrr"></div>
				
				<h1><a href="#">sisgest</a></h1>
				
				<ul id="nav">
					<li class="active"><a href="#">Dashboard</a></li>
					<li><a href="#">Turmas</a>
						<ul>
							<li><a href="<?php echo Dispatcher::baseUrl();?>/turmas/index/">Mostrar</a></li>
							<li><a href="<?php echo Dispatcher::baseUrl();?>/turmas/add/">Adicionar</a></li>
							</li>
						</ul>
					</li>
					<li><a href="#">Disciplinas</a>
						<ul>
							<li><a href="<?php echo Dispatcher::baseUrl();?>/disciplinas/index/">Mostrar</a></li>
							<li><a href="<?php echo Dispatcher::baseUrl();?>/disciplinas/add/">Adicionar</a></li>
							</li>
						</ul>
					</li>
					<li><a href="#">Calendários</a>
						<ul>
							<li><a href="<?php echo Dispatcher::baseUrl();?>/calendarios/index/">Mostrar</a></li>
							<li><a href="<?php echo Dispatcher::baseUrl();?>/disciplinas/add/">Adicionar</a></li>
							</li>
						</ul>
					</li>
				</ul>
				
				<p class="user">Hello, <?php echo $this->Session->read('Auth.User.username'); ?>| <?php echo $this->Html->link("Logout", array("controller" => "users", "action" => "logout")) ?></p>
			</div>		<!-- #header ends -->
			

			<?php echo $content_for_layout; ?>

			
			<div id="footer">
			
				<p class="left"><a href="#">YourWebsite.com</a></p>
				<p class="right">powered by <a href="#">Adminus</a> v1.4</p>
				
			</div>
		
		
		</div>						<!-- wrapper ends -->
		
	</div>		<!-- #hld ends -->
	
	
	<!--[if IE]><script type="text/javascript" src="<?php echo Dispatcher::baseUrl();?>/js/adminus/excanvas.js"></script><![endif]-->	
	
	
	<?php 
		// echo $this->Html->script(array("adminus/jquery.img.preloads",
		// 																	 "adminus/jquery.wysiwyg",
		// 																	 "adminus/jquery.date_input.pack2",
		// 																	 "adminus/faceboxs",
		// 																	 "adminus/jquery.select_skins",
		// 																	 "adminus/jquery.tablesorter.mins",
		// 																	 "adminus/custom")); 
	?>
	

	
</body>
</html>