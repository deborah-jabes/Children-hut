<head>
	<link rel="icon" href="images/favicon.png" />
	<script src="https://kit.fontawesome.com/10a40eb87c.js" crossorigin="anonymous"></script> <!--les logos-->
</head>

<header id="header" class="header nav-scrolled">
	<h1><a  href="index.php"><span class="titreMobile">CHILDREN'S HUT</span><img src="images/logoBlanc.png" class="logoMobile"></a></h1>
	<a id="icon_menu" href="#menuMobile" class="menuToggle"><img src="images/menu.svg" alt="menu"></a>
	<nav id="menu" class="menu">
		<ul id="navbar" class="navbar">
			<li><a href=".php">Buy</a></li><li><a href=".php" >Rent</a></li><li><a href=".php">Sale</a></li><li><a href="#contact">Contact us</a></li><li><a href="login.php" class="account"><i class="fa fa-user-circle fa-2x"></i></a></li>
		</ul>
	</nav>
</header>
<nav id="menuMobile" class="menuMobile header without--sidebar">
	<a id="iconClose" href="#menuMobile" class="iconCLose"><i class="fas fa-times"></i></a>
	<ul id="navbarMobile" class="navbarMobile">
		<li><a href=".php">Buy</a></li><li><a href=".php" >Rent</a></li><li><a href=".php">Sale</a></li><li><a href="#contact">Contact us</a></li><li><a href="login.php" class="account"><img src="images/account.png"></a></li>
	</ul> 
</nav>

<script>
	const button = document.getElementById('icon_menu'),
		menuMobile = document.getElementById('menuMobile'),
		iconClose = document.getElementById('iconClose');
	
	button.addEventListener('click', function(e){
		e.preventDefault;
		menuMobile.classList.toggle('with--sidebar');
		
	});
	
	iconClose.addEventListener('click', function(e){
		e.preventDefault;
		menuMobile.classList.toggle('with--sidebar');
	});
	
	/*--------------------------------------------*/
	
	const header = document.querySelector('.header'),
		  sectionOne = document.querySelector('.headimage');
	const sectionOneOptions = { };
	const sectionOneObserver = new IntersectionObserver(function(
														entries,
														sectionOneObserver
														) {
		entries.forEach(entry => {
			if(!entry.isIntersecting){
				header.classList.add('nav-scrolled');
			}
		})
	}, sectionOneOptions);

	sectionOneObserver.observe(sectionOne);
</script>