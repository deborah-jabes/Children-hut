// JavaScript Document

	const header = document.querySelector('woodhut');
	const header2 = document.querySelector('header');
	const sectionOne = document.querySelector('#header');
	const sectionOneOptions = {
		rootMargin: "0px 0px 0px 0px"
	};

	const sectionOneObserver = new IntersectionObserver(function(
	  entries,
	  sectionOneObserver
	) {
	  entries.forEach(entry => {
		if (!entry.isIntersecting) {
		  header.classList.add("hiddenHut");
		} else {
		  header.classList.remove("hiddenHut");
		}
	  });
	},
	sectionOneOptions);

	sectionOneObserver.observe(sectionOne);