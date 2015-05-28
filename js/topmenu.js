
		 	function topbar(){
		  		if (window.pageYOffset != null) 
		   			odleglosc = window.pageYOffset;
		  		else if (document.body.scrollTop != null) 
		    		odleglosc = document.body.scrollTop;
		  		if(odleglosc >= 130){
					$("header#top").slideDown("normal");
		  		}
		  		else{
					$("header#top").slideUp("normal");
		  		}
			}
			setInterval(topbar, 100);
