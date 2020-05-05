<head>
	<link rel="icon" href="images/favicon.png" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<script src="https://kit.fontawesome.com/10a40eb87c.js" crossorigin="anonymous"></script> <!--les logos-->
</head>

<header id="header" class="header">
	<h1><a  href="index.php"><span class="titreMobile">CHILDREN'S HUT</span><img src="images/logoBlanc.png" class="logoMobile"></a></h1>
	<a id="icon_menu" href="#menuMobile" class="menuToggle"><img src="images/menu.svg" alt="menu"></a>
	<nav id="menu" class="menu">
		<ul id="navbar" class="navbar">
			<li><a href="buy.php">Buy</a></li><li><a href="rent.php" >Rent</a></li><li><a href="sale.php">Sale</a></li><li><a href="#contact" class="mediumScreen">Contact</a></li><li><a href="myaccount.php" class="account"><i class="fa fa-user-circle fa-2x"></i></a></li>
		</ul>
	</nav>
</header>
<nav id="menuMobile" class="menuMobile header without--sidebar">
	<a id="iconClose" href="#menuMobile" class="iconCLose"><i class="fas fa-times"></i></a>
	<ul id="navbarMobile" class="navbarMobile">
		<li><a href=".php">Buy</a></li><li><a href=".php" >Rent</a></li><li><a href=".php">Sale</a></li><li><a href="#contact">Contact us</a></li><li><a href="myaccount.php" class="account"><img src="images/account.png"></a></li><li><a href="logout.php"></a></li>
	</ul> 
</nav>
	<main id="site-content" class="site-content">
<img id="headimage" class="headimage" src="images/head.jpg" alt="Head image">
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
	
	const header = document.querySelector('header');
	const sectionOne = document.querySelector('#headimage');
	const sectionOneOptions = {
		rootMargin: "-40px 0px 0px 0px"
	};

	const sectionOneObserver = new IntersectionObserver(function(
	  entries,
	  sectionOneObserver
	) {
	  entries.forEach(entry => {
		if (!entry.isIntersecting) {
		  header.classList.add("nav-scrolled");
		} else {
		  header.classList.remove("nav-scrolled");
		}
	  });
	},
	sectionOneOptions);

	sectionOneObserver.observe(sectionOne);
</script>