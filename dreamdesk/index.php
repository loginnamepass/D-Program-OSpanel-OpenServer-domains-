<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Dream Desk</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
</head>
<body>
	
	<?php
		if($_COOKIE['user'] == ''):
	?>
	<div class="wrapper">
		<div class="header">
			<div class="hm">
				<nav class="menu">
					<ul>
						<li><a href="http://dreamdesk/" class="menu1"> Головна</a></li>
						<li><a href="#" class="menu1"> Новини</a></li>
						<li><a href="#" class="menu1"> Контакти</a>
							<ul>
								<li><a href="https://t.me/ShpyrnaAndrij">Telegram</a></li>
								<li><a href="https://www.instagram.com/andrij_shpyrna/">Instagram</a></li>
								<li><a href="">E-mail</a></li>
							</ul>
						</li>
						<li><a href="#" class="menu1"> Мова</a>
							<ul>
								<li><a href="http://dreamdesk/ru/" class="mova">ru  </a></li>
								<li><a href="" class="mova">en  </a></li>
								<li><a href="http://dreamdesk/ua/" class="mova">ua  </a></li>
							</ul>
						</li>
					</ul>
						<a href="http://g977619u.beget.tech/new/dreamdesk/"><img class="img" src="./img/dreamdesklogo.png" alt="logo"></a>
							<div class="signup">
								<a class="sign" href="signup/index.html">увійти</a>
								<a href="" class="none">|</a>
								<a class="reg" href="registrator/index.html">зареєструватися</a>
							</div>			
				</nav>	
			</div>
		</div>
			<div class="content"><p class="textcontent">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque facilis unde adipisci quidem, culpa placeat et maxime fugiat alias minima possimus odit maiores omnis dignissimos iusto in ipsa, earum provident modi, pariatur aspernatur accusantium quos nisi. Minus quo harum iure soluta est quam sapiente sunt, a eius doloribus, maiores dolorem et, voluptate porro quae! Blanditiis mollitia officia, ipsam, debitis sit voluptatum quae distinctio recusandae adipisci aut eius similique aliquid iste reiciendis, cumque et dignissimos culpa possimus iusto expedita temporibus nostrum?</p></div>
			<div class="content"><p class="textcontent">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque facilis unde adipisci quidem, culpa placeat et maxime fugiat alias minima possimus odit maiores omnis dignissimos iusto in ipsa, earum provident modi, pariatur aspernatur accusantium quos nisi. Minus quo harum iure soluta est quam sapiente sunt, a eius doloribus, maiores dolorem et, voluptate porro quae! Blanditiis mollitia officia, ipsam, debitis sit voluptatum quae distinctio recusandae adipisci aut eius similique aliquid iste reiciendis, cumque et dignissimos culpa possimus iusto expedita temporibus nostrum?</p></div>
		<div class="footer">Footer</div>
	</div>
	<?php else: ?>
		<p>Привіт <?=$_COOKIE['user']?>.Щоб вийти, натисніть <a href="/php/exit.php">тут</a>!</p>
	<?php endif;?>
</body>
</html>