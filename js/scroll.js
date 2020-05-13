const 	ad = document.getElementById('ad'),
		woodhut = document.getElementById('woodhut'),
		woodhutChild = document.getElementById('woodhutChild'),
	  	x = 1;
	
		do{
				ad.addEventListener('mouseover', function(){
				woodhut.classList.toggle('hiddenHut');
				woodhutChild.classList.toggle('hiddenHut');
			});
			x = x+1;
		}while(x !== 2);
