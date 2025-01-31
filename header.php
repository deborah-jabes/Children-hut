<head>
	<script src="https://kit.fontawesome.com/10a40eb87c.js" crossorigin="anonymous"></script> <!--les logos-->
</head>

	<?php
		session_start();
	?>

<header id="header" class="header">
	<h1><a  href="index.php"><span class="titreMobile">CHILDREN'S HUT</span><img src="images/logoBlanc.png" class="logoMobile"></a></h1>
	<a id="icon_menu" href="#menuMobile" class="menuToggle"><img src="images/menu.svg" alt="menu"></a>
	<nav id="menu" class="menu">
		<ul id="navbar" class="navbar">
			<li><a href="buy.php">Buy</a></li><li><a href="rent.php" >Rent</a></li><li><a href="sale.php">Sale</a></li><li><a href="#contact" class="mediumScreen">Contact</a></li><li><a id="accountButton" href="#deroulant" class="account"><i class="fa fa-user-circle fa-2x"></i></a></li>
		</ul>
	</nav>
</header>

<div id="deroulant" class="deroulant deroulantHidden">
			<?php if(isset($_SESSION["Email_address"])){
					echo '<a href="myaccount.php"><li>My account</li></a>';
					echo '<a href="logout.php"><li>Log-out</li></a>';
				}else{
					echo '<a href="login.php"><li>Log-in</li></a>';
				}
			?>
	</div>

<nav id="menuMobile" class="menuMobile header without--sidebar">
	<a id="iconClose" href="#menuMobile" class="iconCLose"><i class="fas fa-times"></i></a>
	<ul id="navbarMobile" class="navbarMobile">
		<li><a href="buy.php">Buy</a></li><li><a href="rent.php" >Rent</a></li><li><a href="sale.php">Sale</a></li><li><a href="#contact">Contact us</a></li><li><a href="myaccount.php" class="account"><img src="images/account.png"></a></li>
		<?php if(isset($_SESSION["Email_address"])){
				echo '<li><a href="logout.php">Log-out</a></li>';
			}else{
				echo '<li><a href="login.php">Log-in</a></li>';
			}
		?>
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
		
<script>
	const deroulant = document.getElementById('deroulant'),
		accountButton = document.getElementById('accountButton');
	
	accountButton.addEventListener('click', function(e){
		e.preventDefault;
		deroulant.classList.toggle('deroulantHidden');
	});
	
	deroulant.addEventListener('mouseout', function(e){
		e.preventDefault;
		deroulant.classList.toggle('deroulantHidden');
	});
</script>