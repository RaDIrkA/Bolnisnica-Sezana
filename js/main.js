   /*Slide-show galerija in besedilo home page */
$(function() {
        $("#desSlideshow1").desSlideshow({
            autoplay: 'enable',//option:enable,disable
            slideshow_width: '800',//slideshow window width
            slideshow_height: '249',//slideshow window height
            thumbnail_width: '200',//thumbnail width
            time_Interval: '5000',//Milliseconds
            directory: 'images/'// flash-on.gif and flashtext-bg.jpg directory
        }); 
});		

	/*Konec Slide-show galerija in besedilo home page */



  /*potujoce obvestila in novice*/ 
$(function() {
	  
		//cache the ticker
		var ticker = $("#ticker");
		  
		//wrap dt:dd pairs in divs
		ticker.children().filter("dt").each(function() {
		  
		  var dt = $(this),
		    container = $("<div>");
		  
		  dt.next().appendTo(container);
		  dt.prependTo(container);
		  
		  container.appendTo(ticker);
		});
				
		//hide the scrollbar
		ticker.css("overflow", "hidden");
		
		//animator function
		function animator(currentItem) {
		    
		  //work out new anim duration
		  var distance = currentItem.height();
			duration = (distance + parseInt(currentItem.css("marginTop"))) / 0.015;

		  //animate the first child of the ticker
		  currentItem.animate({ marginTop: -distance }, duration, "linear", function() {
		    
			//move current item to the bottom
			currentItem.appendTo(currentItem.parent()).css("marginTop", 0);

			//recurse
			animator(currentItem.parent().children(":first"));
		  }); 
		};
		
		//start the ticker
		animator(ticker.children(":first"));
				
		//set mouseenter
		ticker.mouseenter(function() {
		  
		  //stop current animation
		  ticker.children().stop();
		  
		});
		
		//set mouseleave
		ticker.mouseleave(function() {
		          
          //resume animation
		  animator(ticker.children(":first"));
		  
		});
	  });  
	   /*Konec potujoce obvestila in novice*/ 
	   
	