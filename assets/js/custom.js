/* this prevents dom flickering, needs to be outside of dom.ready event: */
document.documentElement.className += 'js_active';
/*end dom flickering =) */

jQuery.noConflict();

jQuery(document).ready(function(){

// -------------------------------------------------------------------------------------------
// START EDITING HERE
// -------------------------------------------------------------------------------------------
	
	var portfolioSorter = jQuery('.portfolio'); // selects the portfolio container
	portfolioSorter.kriesi_portfolio_sort({items:'.one_fourth'});	// activates portfolio sorting
	
	//on sites without portfolio activate basic image preloading
	if(portfolioSorter.length == 0) jQuery('.preloading').kriesi_image_preloader({delay:100});


	// activates the lightbox page
	my_lightbox("a[rel^='prettyPhoto'], a[rel^='lightbox']",true);
	
	// font replacement, remove this line if you want to use a different font defined in css, 
	// or if the current font doesnt support some of your language specific characters
	// cufont_replacement();
	
	k_menu(); // controls the dropdown menu

	k_smoothscroll(); //smooth scrolling
	
	jQuery('#nav').k_nav_pointer({ fx: "easeOutQuint", speed: 700 });

	// block slider
	jQuery(".blockslider").kriesi_block_slider({
			slides: '.featured',				// wich element inside the container should serve as slide
			animationSpeed:700,					// animation duration
			autorotation: true,					// autorotation true or false?
			autorotationSpeed:3,				// duration between autorotation switch in Seconds
			slideControlls: 'items',			// which controlls should the be displayed for the user: none, items
			appendControlls: '.feature_wrap',	//element to append the controlls to
			blockSize: {height: 130, width:130},//heigth and width of the blocks in number or the word 'full'
			betweenBlockDelay:80,				// delay between each block change
			showText: false,					// wether description text should be shown or not 
			display: 'all', 					// showing up blocks: random, topleft, bottomright, diagonaltop, diagonalbottom, all
			switchMovement: true				// if display is set "topleft" it will switch to "br" every 2nd transition, same for diagonal settings
			});
	
	
	// accordion slider
	jQuery(".accordion").kricordion({
			slides: '.featured',		// wich element inside the container should serve as slide
			animationSpeed: 900,		// animation duration in milliseconds
			autorotation: true,			// autorotation true or false?
			autorotationSpeed:5,		// duration between autorotation switch in Seconds
			event: 'mouseover',			// event to focus a slide: mouseover or click
			imageShadow:false			
	});
	
	
	// fading slider
	jQuery('.fadeslider').kriesi_block_slider({
			slides: '.featured',					// wich element inside the container should serve as slide
			animationSpeed: 1500,					// animation duration
			autorotation: true,						// autorotation true or false?
			autorotationSpeed:3,					// duration between autorotation switch in Seconds
			slideControlls: 'items',				// which controlls should the be displayed for the user: none, items
			appendControlls: '.feature_wrap',		//element to append the controlls to
			showText: true,							// wether description text should be shown or not
			transition: 'fade'						//slide or fade
			});
	
	
	// news slider
	jQuery('.newsslider').kriesi_news_slider({
			slides: '.featured',				// wich element inside the container should serve as slide
			animationSpeed: 900,				// animation duration in milliseconds
			autorotation: true,					// autorotation true or false?
			autorotationSpeed:5					// duration between autorotation switch in Seconds
	});
	
	// curtain slider 
	jQuery('.curtainslider').kriesi_block_slider({
			slides: '.featured',					// wich element inside the container should serve as slide
			animationSpeed: 700,					// animation duration
			autorotation: true,						// autorotation true or false?
			autorotationSpeed:3,					// duration between autorotation switch in Seconds
			slideControlls: 'items',				// which controlls should the be displayed for the user: none, items
			appendControlls: '.feature_wrap',		//element to append the controlls to
			showText: true,							// wether description text should be shown or not
			blockSize: {height: 'full', width:30},	//heigth and width of the blocks in number or the word 'full'
			betweenBlockDelay:60,					// delay between each block change
			switchMovement: true,					// if true will switch transitions left and right
			transition: 'slide'						//slide or fade
			});

	//jQuery('.ajax_form').kriesi_ajax_form();	// activates contact form
	//jQuery('input:text').kriesi_empty_input();	// comment form improvement
	
	// content switcher testimonials
	jQuery('#testimonial').kriesi_content_switch({event:'click', links:'.testimonial_author_pics a',contentContainer:'.testimonial_slides',content:'.t_slide'});
	
	k_pixelperfect();
	
	// validate signup form on keyup and submit
	jQuery("#form1").validate({
		rules: {
			name: {
				required: true,
				minlength: 5
			},
			ic: {
				required: true,
				minlength: 12
			},
			password: {
				required: true,
				minlength: 6
			},
			password_confirm: {
				required: true,
				minlength: 6,
				equalTo: "#password"
			},
			emel: {
				required: true,
				email: true
			},
			tel_bimbit: {
				required: true,
				minlength: 12
			},
			umur: {
				required: true
			}
		},
		messages: {
			name: {
				required: "Sila isi nama penuh anda",
				minlength: "Nama anda mesti lebih dari 5 askara"
			},
			ic: {
				required: "Sila isi no. kad pengenalan anda",
				minlength: "No. kad pengenalan anda mestilah mengandungi 12 nombor, tidak termasuk (-)"
			},
			password: {
				required: "Sila isi kata laluan anda",
				minlength: "Kata laluan mestilah sekurang-kurangnya 6 askara"
			},
			password_confirm: {
				required: "Sila isi kata laluan anda",
				minlength: "Kata laluan mestilah sekurang-kurangnya 6 askara",
				equalTo: "Kata laluan tidak sama.Sila masukkan kata laluan yang sama."
			},
			emel: "Sila isi e-mail yang sah",
			tel_bimbit: {
				required: "Sila isi no.telefon bimbit anda",
				minlength: "No.telefon bimbit anda mestilah sekurang-kurangnya 12 nombor (termasuk kod negara dan kawasan)"
			},
			umur: {
				required: "Sila masukkan umur anda"
			}
		}
	});
	
// -------------------------------------------------------------------------------------------
// END EDITING HERE
// -------------------------------------------------------------------------------------------		
});

// -------------------------------------------------------------------------------------------
// portfolio sorting 
// -------------------------------------------------------------------------------------------

(function($)
{
	$.fn.kriesi_portfolio_sort = function(options) 
	{
		var defaults = 
		{
			items: '.items',
			linkContainer:'#js_sort_items',
			filterItems: '.sort_by_cat',
			sortItems:'sort_by_val'
			
		};
		
		var options = $.extend(defaults, options);
	
		return this.each(function()
		{
			var container = $(this),
				linkContainer = $(options.linkContainer),
				links = linkContainer.find('a'),
				items = container.find(options.items),
				itemLinks = items.find('a'),
				itemPadding = parseInt(items.css('paddingBottom')),
				itemSelection = '',
				columns = 0,
				coordinates = new Array(),
				animationArray = new Array(),
				columnPlus = new Array();
						
			container.methods = {
			
				preloadingDone: function()
				{		
									
					if(linkContainer.length > 0 && !($.browser.msie && $.browser.version < 7))
					{	
						//set container height, get all items and save coordinates
						container.css('height',container.height());
						items.each(function()
						{ 
							var item = $(this),
								itemPos = item.position();

							coordinates.push(itemPos); 
						})
						.each(function(i)
						{ 
							var item = $(this);
							item.css({position:'absolute', top: coordinates[i].top+'px', left: coordinates[i].left+'px'});
						});					
						
						//set columns
						for(i = 0; i < coordinates.length; i++)
						{	
							if(coordinates[i].top == coordinates[0].top) columns ++;
						}
						
						//show controlls
						linkContainer.css({opacity:0, visibility:"visible"}).animate({opacity:1});
						
						// bind action to click events
						container.methods.bindfunctions();
						
					}
				},
				
				bindfunctions: function()
				{	
					links.click(function()
					{	
						var clickedElement = $(this),
							elementFilter = this.id;
							
							animationArray = new Array();
							
						//apply active state
						clickedElement.parent().find('.active_sort').removeClass('active_sort');
						this.className += ' active_sort';
						
						// if we need to filter items
						if(clickedElement.parent().is(options.filterItems))
						{
							var arrayIndex = 0,
								columnIndex = 0;
								
							columnPlus = new Array();
							
							items.each(function(i)
							{
								var item = $(this);
								
								if(item.is('.'+elementFilter))
								{	
									animationArray.push(
									{
                                        element: item, 
                                        animation: 
                                        { 
                                             opacity: 1,
                                             top: coordinates[arrayIndex].top,
                                             left: coordinates[arrayIndex].left
                                        },
                                        height: item.height()
                                    });

                                    
                                    if(columnTop < coordinates[arrayIndex].top)  columnTop = coordinates[arrayIndex].top;
                                    
                                    columnIndex++;
                                    arrayIndex++;
								}
								else
								{
									animationArray.push(
                                    {
                                        element: item, 
                                        animation: 
                                        { 
                                             opacity: 0
                                        },
                                        callback: true
                                    });
								}
								
								if(items.length == i+1 || columnIndex == columns)
                                {	
 									var columnTop = 0;
                                	
                                	for (x = 0; x < columnIndex; x++)
                                	{	
                                		if(animationArray[i-x].height)
                                		{
                                			if(columnTop < animationArray[i-x].height) columnTop = animationArray[i-x].height;
                                		}
                                		else
                                		{
                                			columnIndex++;
                                		}
                                		
                                	}
                                	columnPlus.push(columnTop);
                                	columnIndex = 0;
                                }		
                                							
								if(i+1 == items.length) container.methods.startAnimation();
							});
												
						}
						else // if we need to sort items first
						{	
							var sortitems = items.get(),
								reversed = false;
							
							if(clickedElement.is('.reversed')) reversed = true;
							
							sortitems.sort(function(a, b) 
							{
								var compA = $(a).find('.'+elementFilter).text().toUpperCase();
								var compB = $(b).find('.'+elementFilter).text().toUpperCase();
								if (reversed) 
								{
									return (compA < compB) ? 1 : (compA > compB) ? -1 : 0;				
								} 
								else 
								{		
									return (compA < compB) ? -1 : (compA > compB) ? 1 : 0;	
								}
							});
							
							items = $(sortitems);
							$(options.filterItems).find('.active_sort').trigger('click');
							
						}
						
						return false;
					});
				},
				
				startAnimation: function()
				{	
					var heightmodifier = coordinates[0].top,
						visibleElement = 0,
						currentCol = 0;
					
					for (i = 0; i < animationArray.length; i++) 
					{	
						if(animationArray[i].animation.top)
						{
							if(visibleElement % columns == 0 && visibleElement != 0)
							{
								heightmodifier += columnPlus[currentCol] + itemPadding;
								currentCol ++;
							}
							visibleElement++;
						}
						
						animationArray[i].animation.top = heightmodifier;
             			animationArray[i].element.css('display','block').animate(animationArray[i].animation, 800, "easeInOutQuint", (function(i)
             			{
							return function() 
							{
								if(animationArray[i].callback == true)
	             				{	
	             					animationArray[i].element.css({display:"none"});	             					
	             				}
							}
             			})(i));
            		}
            		
            		
            		var newContainerHeight = coordinates[0].top;
            						
					for(z = 0; z < columnPlus.length; z++ )
					{
						newContainerHeight += columnPlus[z] + itemPadding;
					}
											
					container.animate({height:newContainerHeight}, 800, "easeInOutQuint");	
				}
				
			}
			
			
			
			container.kriesi_image_preloader({delay:100, callback:container.methods.preloadingDone});
			
		});
	}
})(jQuery);	



// -------------------------------------------------------------------------------------------
// content switcher - used for testimonials
// -------------------------------------------------------------------------------------------

(function($)
{
	$.fn.kriesi_content_switch = function(options) 
	{
		var defaults = 
		{
			links: 'a',
			contentContainer:'ul',
			content: 'li',
			event:'mouseenter'
		};
		
		var options = $.extend(defaults, options);
	
		return this.each(function()
		{
			var currentElement = $(this),
				linkItems = currentElement.find(options.links),
				contentContainer = currentElement.find(options.contentContainer),
				contentItems = currentElement.find(options.content),
				activeContainer = contentItems.filter(':visible'),
				inactiveContainer = contentItems.not(":visible"),
				testimonial_arrow = currentElement.find('.testimonial_arrow');
				
				
			//prepare items:
			inactiveContainer.css({position:'absolute', opacity:0, display:'block', zIndex:1});				
				
			linkItems.each(function(i)
			{
				var currentLink = $(this);
					
				currentLink.bind(options.event+" click",function()
				{	
					var currentLinkPos = currentLink.position(),
						arrowWidth = testimonial_arrow.width() / 2,
						currentLinkWidth = currentLink.width() / 2
									
					testimonial_arrow.stop().animate({left:currentLinkPos.left - arrowWidth + currentLinkWidth + 4});
					contentItems.stop().css({zIndex:1}).animate({opacity:0},700, function(){ $(this).css({position:'absolute'});});
					contentItems.eq(i).stop().css({zIndex:4}).animate({opacity:1},400, function()
					{
						var item = $(this),
							itemHeight = item.height(),
							itemPadding = parseInt(item.css("paddingTop")) + parseInt(item.css("paddingBottom")) + 2;
							
						contentContainer.animate({height:itemHeight+itemPadding});
					});
					linkItems.removeClass('active_testimonial');
					currentLink.addClass('active_testimonial');
					
					return false;
				});
				
			});
			
		});
	}
})(jQuery);	

// -------------------------------------------------------------------------------------------
// input field improvements
// -------------------------------------------------------------------------------------------

(function($)
{
	$.fn.kriesi_empty_input = function(options) 
	{
		return this.each(function()
		{
			var currentField = $(this);
			currentField.methods = 
			{
				startingValue:  currentField.val(),
				
				resetValue: function()
				{	
					var currentValue = currentField.val();
					if(currentField.methods.startingValue == currentValue) currentField.val('');
				},
				
				restoreValue: function()
				{	
					var currentValue = currentField.val();
					if(currentValue == '') currentField.val(currentField.methods.startingValue);
				}
			};
			
			currentField.bind('focus',currentField.methods.resetValue);
			currentField.bind('blur',currentField.methods.restoreValue);
		});
	}
})(jQuery);	


	
// -------------------------------------------------------------------------------------------
// The Image preloader
// -------------------------------------------------------------------------------------------


(function($)
{
	$.fn.kriesi_image_preloader = function(options) 
	{
		var defaults = 
		{
			repeatedCheck: 500,
			fadeInSpeed: 1000,
			delay:600,
			callback: ''
		};
		
		var options = $.extend(defaults, options);
		
		return this.each(function()
		{	
			var imageContainer = jQuery(this),
				images = imageContainer.find('img').css({opacity:0, visibility:'hidden'}),
				imagesToLoad = images.length;				
				
				imageContainer.operations =
				{	
					preload: function()
					{	
						var stopPreloading = true;
												
						images.each(function(i, event)
						{	
							var image = $(this);							
							
							if(event.complete == true)
							{	
								if($.browser.opera) imagesToLoad --;
								imageContainer.operations.showImage(image);
							}
							else
							{	
								if($.browser.opera) imagesToLoad --;
								image.bind('error load',{currentImage: image}, imageContainer.operations.showImage);
							}
							
						});
						
						return this;
					},
					
					showImage: function(image)
					{	
						if(!$.browser.opera) imagesToLoad --;
						if(image.data.currentImage != undefined) { image = image.data.currentImage;}
													
						if (options.delay <= 0) image.css('visibility','visible').animate({opacity:1}, options.fadeInSpeed);
											 
						if(imagesToLoad == 0)
						{
							if(options.delay > 0)
							{
								images.each(function(i, event)
								{	
									var image = $(this);
									setTimeout(function()
									{	
										image.css('visibility','visible').animate({opacity:1}, options.fadeInSpeed, function()
										{
											$(this).parent().removeClass('preloading');
										});
									},
									options.delay*(i+1));
								});
								
								if(options.callback != '')
								{
									setTimeout(options.callback, options.delay*images.length);
								}
							}
							else if(options.callback != '')
							{
								(options.callback)();
							}
							
						}
						
					}

				};
				
				imageContainer.operations.preload();
		});
		
	}
})(jQuery);



// -------------------------------------------------------------------------------------------
// The BLOCK && FADE Slider
// -------------------------------------------------------------------------------------------

(function($)
{
	$.fn.kriesi_block_slider= function(options) 
	{
		var defaults = 
		{
			slides: '>div',				// wich element inside the container should serve as slide
			animationSpeed: 900,		// animation duration
			autorotation: true,			// autorotation true or false?
			autorotationSpeed:3,		// duration between autorotation switch in Seconds
			appendControlls: '',		// element to apply controlls to
			slideControlls: 'none',		// controlls, yes or no?
			blockSize: {height: 'full', width:'full'},
			betweenBlockDelay:15,
			display: 'topleft',
			switchMovement: false,
			showText: true,	
			transition: 'slide',		//slide or fade	
			backgroundOpacity:0.8,		// opacity for background
			transitionOrder: new Array('diagonaltop', 'diagonalbottom','topleft', 'bottomright', 'random')
		};
		
		var options = $.extend(defaults, options);
		
		return this.each(function()
		{
			var slideWrapper 	= $(this),								//wrapper element
				slides			= slideWrapper.find(options.slides),	//single slide container
				slideImages		= slides.find('>a>img'),				//slide image within container
				slideCount 	= slides.length,							//number of slides
				slideWidth = slides.width(),							//width of slidecontainer
				slideHeight= slides.height(),							//height of slidecontainer
				blockNumber = 0,										//how many blocks do we need
				currentSlideNumber = 0,									//which slide is currently shown
				reverseSwitch = false,									//var to set the starting point of the transition
				currentTransition = 0,									//var to set which transition to display when rotating with 'all'
				current_class = 'active_item',							//currently active controller item
				controlls = '',											//string that will contain controll items to append
				skipSwitch = true,										//var to check if performing transition is allowed
				interval ='',
				blockOrder = new Array();										
			
			if (options.blockSize.height == 'full') options.blockSize.height = slideHeight;
			if (options.blockSize.width == 'full') options.blockSize.width = slideWidth;
			
			if(options.showText)
			slides.find('.feature_excerpt').css({display:'block', 'opacity':options.backgroundOpacity});
				
			slideWrapper.methods = {
			
				init: function()
				{	
					var posX = 0,
						posY = 0,
						generateBlocks = true,
						bgOffset = '',
						blockSelectionJQ ='',
						blockSelection ='';
						
						
					while(generateBlocks)
					{
						blockNumber ++;
						bgOffset = "-"+posX +"px -"+posY+"px";
						
						$('<div class="kBlock"></div>').appendTo(slideWrapper).css({	
								zIndex:20, 
								position:'absolute',
								display:'none',
								left:posX,
								top:posY,
								height:options.blockSize.height,
								width:options.blockSize.width,
								backgroundPosition:bgOffset
							});
				
						
						posX += options.blockSize.width;
						
						if(posX >= slideWidth)
						{
							posX = 0;
							posY += options.blockSize.height;
						}
						
						if(posY >= slideHeight)
						{	
							//end adding Blocks
							generateBlocks = false;
						}
					}
					
					//setup directions
					blockSelection = slideWrapper.find('.kBlock');
					blockOrder['topleft'] = blockSelection;
					blockOrder['bottomright'] = $(blockSelection.get().reverse());
					blockOrder['diagonaltop'] = slideWrapper.methods.kcubit(blockSelection);
					blockOrder['diagonalbottom'] = slideWrapper.methods.kcubit(blockOrder['bottomright']);
					blockOrder['random'] = slideWrapper.methods.fyrandomize(blockSelection);
					
					
					//save image in case of flash replacements
					slides.each(function()
					{
						$.data(this, "data", { img: $(this).find('img').attr('src')});
					});
			
					if(slideCount <= 1)
						{
							slideWrapper.kriesi_image_preloader({delay:200});
						}
						else
						{
							slideWrapper.kriesi_image_preloader({callback:slideWrapper.methods.preloadingDone, delay:200});
							slideWrapper.methods.appendControlls();
						}	
				},
				
				appendControlls: function()
				{
					if (options.slideControlls == 'items')
					{
						controlls = $('<div></div>').addClass('slidecontrolls').css({position:'absolute'}).appendTo(options.appendControlls);
						
						slides.each(function(i)
						{	
							var controller = $('<a href="#" class="ie6fix '+current_class+'"></a>').appendTo(controlls);
							controller.bind('click', {currentSlideNumber: i}, slideWrapper.methods.switchSlide);
							current_class = "";
						});	
					}
				},
				
				preloadingDone: function()
				{	
					skipSwitch = false;
					
					slides.css({'backgroundColor':'transparent','backgroundImage':'none'});
					
					if(options.autorotation && !$.browser.opera) 
					{
					slideWrapper.methods.autorotate();
					slideImages.bind("click", function(){ clearInterval(interval); });
					}
				},
				
				autorotate: function()
				{	
					interval = setInterval(function()
					{ 	
						currentSlideNumber ++;
						if(currentSlideNumber == slideCount) currentSlideNumber = 0;
						
						slideWrapper.methods.switchSlide();
					},
					(parseInt(options.autorotationSpeed) * 1000) + (options.betweenBlockDelay * blockNumber) + options.animationSpeed);
				},
				
				switchSlide: function(passed)
				{
					var noAction = false;
						
					if(passed != undefined && !skipSwitch)
					{	
						if(currentSlideNumber != passed.data.currentSlideNumber)
						{	
							currentSlideNumber = passed.data.currentSlideNumber;
						}
						else
						{
							noAction = true;
						}
					}
						
					if(passed != undefined) clearInterval(interval);
					
					if(!skipSwitch && noAction == false)
					{	
						skipSwitch = true;
						var currentSlide = slides.filter(':visible'),
							nextSlide = slides.filter(':eq('+currentSlideNumber+')'),
							nextURL = $.data(nextSlide[0], "data").img,	
							nextImageBG = 'url('+nextURL+')';	
							if(options.appendControlls)
							{	
								controlls.find('.active_item').removeClass('active_item');
								controlls.find('a:eq('+currentSlideNumber+')').addClass('active_item');									
							}

						blockSelectionJQ = blockOrder[options.display];
						
						//workarround to make more than one flash movies with the same classname possible
						slides.find('>a>img').css({opacity:1,visibility:'visible'});
							
						//switchmovement
						if(options.switchMovement && (options.display == "topleft" || options.display == "diagonaltop"))
						{
								if(reverseSwitch == false)
								{	
									blockSelectionJQ = blockOrder[options.display];
									reverseSwitch = true;							
								}
								else
								{	
									if(options.display == "topleft") blockSelectionJQ = blockOrder['bottomright'];
									if(options.display == "diagonaltop") blockSelectionJQ = blockOrder['diagonalbottom'];
									reverseSwitch = false;							
								}
						}	
						
						if(options.display == 'random')
						{
							blockSelectionJQ = slideWrapper.methods.fyrandomize(blockSelection);
						}

						if(options.display == 'all')
						{
							blockSelectionJQ = blockOrder[options.transitionOrder[currentTransition]];
							currentTransition ++;
							if(currentTransition >=  options.transitionOrder.length) currentTransition = 0;
						}
						

						//fire transition
						blockSelectionJQ.css({backgroundImage: nextImageBG}).each(function(i)
						{	
							
							var currentBlock = $(this);
							setTimeout(function()
							{	
								var transitionObject = new Array();
								if(options.transition == 'slide')
								{
									transitionObject['css'] = {height:1, width:1, display:'block',opacity:0};
									transitionObject['anim'] = {height:options.blockSize.height,width:options.blockSize.width,opacity:1};
								}
								else
								{
									transitionObject['css'] = {display:'block',opacity:0};
									transitionObject['anim'] = {opacity:1};
								}
							
								currentBlock
								.css(transitionObject['css'])
								.animate(transitionObject['anim'],options.animationSpeed, function()
								{ 
									if(i+1 == blockNumber)
									{	
										slideWrapper.methods.changeImage(currentSlide, nextSlide);
									}
								});
							}, i*options.betweenBlockDelay);
						});
						
					} // end if(!skipSwitch && noAction == false)
					
					return false;
				},
				
				changeImage: function(currentSlide, nextSlide)
				{	
					currentSlide.css({zIndex:0, display:'none'});
					nextSlide.css({zIndex:3, display:'block'});
					blockSelectionJQ.fadeOut(options.animationSpeed*1/3, function(){ skipSwitch = false; });
				},
				
				// array sorting
				fyrandomize: function(object) 
				{	
					var length = object.length,
						objectSorted = $(object);
						
					if ( length == 0 ) return false;
					
					while ( --length ) 
					{
						var newObject = Math.floor( Math.random() * ( length + 1 ) ),
							temp1 = objectSorted[length],
							temp2 = objectSorted[newObject];
						objectSorted[length] = temp2;
						objectSorted[newObject] = temp1;
					}
					return objectSorted;
				},
				
				kcubit: function(object)
				{
					var length = object.length, 
						objectSorted = $(object),	
						currentIndex = 0;		//index of the object that should get the object in "i" applied
						rows = Math.ceil(slideHeight / options.blockSize.height),
						columns = Math.ceil(slideWidth / options.blockSize.width),
						oneColumn = blockNumber/columns,
						oneRow = blockNumber/rows,
						modX = 0,
						modY = 0,
						rowend = 0,
						endreached = false,
						onlyOne = false; 
					
					if ( length == 0 ) return false;
					for (i = 0; i<length; i++ ) 
					{
						objectSorted[i] = object[currentIndex];
						
						if((currentIndex % oneRow == 0 && blockNumber - i > oneRow)|| (modY + 1) % oneColumn == 0)
						{						
							currentIndex -= (((oneRow - 1) * modY) - 1); modY = 0; modX ++; onlyOne = false;
							
							if (rowend > 0)
							{
								modY = rowend; currentIndex += (oneRow -1) * modY;
							}
						}
						else
						{
							currentIndex += oneRow -1; modY ++;
						}
						
						if((modX % (oneRow-1) == 0 && modX != 0 && rowend == 0) || (endreached == true && onlyOne == false) )
						{	
							modX = 0.1; rowend ++; endreached = true; onlyOne = true;
						}	
					}
					
				return objectSorted;						
				}
			}	
			
			slideWrapper.methods.init();	
		});
	}
})(jQuery);



// -------------------------------------------------------------------------------------------
// The News Slider
// -------------------------------------------------------------------------------------------

(function($)
{
	$.fn.kriesi_news_slider= function(options) 
	{
		var defaults = 
		{
			slides: '>div',				// wich element inside the container should serve as slide
			animationSpeed: 900,		// animation duration
			autorotation: true,			// autorotation true or false?
			autorotationSpeed:3,		// duration between autorotation switch in Seconds
			easing: 'easeOutQuint',
			backgroundOpacity:0.8		// opacity for background
		};
		
		var options = $.extend(defaults, options);
		
		return this.each(function()
		{
			var slideWrapper 	= $(this),								
				slides			= slideWrapper.find(options.slides).css({display:'none',zIndex:0}),
				slideCount 	= slides.length,
				accelerator = 0,				// accelerator of scrolling speed
				scrollInterval = '',			// var that stores the setInterval id
				mousePos = '',					// current mouse position
				moving = false,					// scrollbar currently moving or not?
				controllWindowHeight = 0,		// height of the wrapping element that hides overflow
				controllWindowPart = 0,			// mouseoverpart of the wrapping element that hides overflow
				itemWindowHeight = 0,			// height of element to move
				current_class = 'active_item',
				skipSwitch = true,
				currentSlideNumber = 0,
				newsSelect ='',
				newsItems = '';	
				
				slides.find('.feature_excerpt').css('opacity',options.backgroundOpacity);			
				
				slideWrapper.methods = {
				
					init: function()
					{
						newsSelect = $('<div></div>').addClass('newsselect').appendTo(slideWrapper);
						newsItems = $('<div></div>').addClass('newsItems').appendTo(newsSelect);
						fadeout = $('<div></div>').addClass('fadeout').addClass('ie6fix').appendTo(slideWrapper);
						
						slides.filter(':eq(0)').css({zIndex:2, display:'block'});
						
						slides.each(function(i)
						{	
							var slide = $(this),
								url = slide.find('a').attr('href'),
								controll = $('<a class="single_item '+current_class+'"></a>').appendTo(newsItems).attr('href',url);
								current_class ='';
								
							slide.find('.feature_excerpt .sliderheading, .feature_excerpt .sliderdate').clone().appendTo(controll);
							controll.bind('click', {currentSlideNumber: i}, slideWrapper.methods.switchSlide);
						});
						
						controllWindowHeight = newsSelect.height();
						controllWindowPart = controllWindowHeight/3;
						itemWindowHeight = newsItems.height();
						
						if(slideCount > 1)
						{
							slideWrapper.kriesi_image_preloader({delay:200});
							slideWrapper.methods.preloadingDone();
						}
					},
					
					preloadingDone: function()
					{	
						skipSwitch = false;
						var offset = newsSelect.offset();
						
						newsSelect.mousemove(function(e)
						{
							mousePos = e.pageY - offset.top;
							
							if(!moving)
							{
								scrollInterval = setInterval(function() { slideWrapper.methods.scrollItem(mousePos); }, 25);
								moving = true;
							}
						}); 
										
						newsSelect.bind('mouseleave', function()
						{ 
							clearInterval(scrollInterval); 
							moving = false;
							accelerator = 0;
						});
						
					},
					
					scrollItem: function()
					{	
						var movement = 0,
							percent = controllWindowPart / 100,
							modifier = 10,
							currentTop = parseInt(newsItems.css('top'));
							
						accelerator = accelerator <= 2 ? accelerator + 0.5 : accelerator; 
						
						if(mousePos < controllWindowPart)
						{	
							movement = ((controllWindowPart - mousePos) / percent) * accelerator;
							newPos = currentTop + (movement/modifier);
							
							if(currentTop < 0)
							{	
								if (newPos > 0) newPos = 0;
								newsItems.css({top:newPos + "px"});
							}
						}
						else if(mousePos > controllWindowPart * 2)
						{	
							movement = ((mousePos - controllWindowPart * 2) / percent) * accelerator;
							newPos = currentTop + (movement/modifier * -1);
							
							if((currentTop * -1) < itemWindowHeight - controllWindowHeight)
							{
								if (newPos * -1 > itemWindowHeight - controllWindowHeight) newPos = controllWindowHeight - itemWindowHeight;
								
								newsItems.css({top:newPos + "px"});
							}
						}
						else
						{
							accelerator = 0;
						}
					},
					
					switchSlide: function(passed)
					{	
						//workarround to make more than one flash movies with the same classname possible
						slides.find('>a>img').css({opacity:1,visibility:'visible'});
						var noAction = false;
						
						if(passed != undefined && !skipSwitch)
						{
							if(currentSlideNumber != passed.data.currentSlideNumber)
							{	
								currentSlideNumber = passed.data.currentSlideNumber;
							}
							else
							{
								noAction = true;
							}
						}
						
						if(passed != undefined)
						{	
							// clearInterval(interval);
						}
						
						
						if(!skipSwitch && noAction == false)
						{	
							skipSwitch = true;
							var currentSlide = slides.filter(':visible'),
								nextSlide = slides.filter(':eq('+currentSlideNumber+')');
																
							newsSelect.find('.active_item').removeClass('active_item');
							newsSelect.find('a:eq('+currentSlideNumber+')').addClass('active_item');	
																
							currentSlide.css({zIndex:4});
							nextSlide.css({zIndex:2, display:'block'});
							
							currentSlide.fadeOut(options.animationSpeed, function()
							{
								currentSlide.css({zIndex:0, display:"none"});
								skipSwitch = false;
							});
						}
						return false;
					},
					
					autorotate: function()
					{	
						//autorotation not yet supportet
					}
				
				};
				
				slideWrapper.methods.init();
		});
		
	}
})(jQuery);


// -------------------------------------------------------------------------------------------
// The Main accordion slider - KRICORDION

// Dependencies: equalheight function, kriesi_image_preoloader. jquery easing
//
// -------------------------------------------------------------------------------------------
(function($)
{
	$.fn.kricordion = function(options) 
	{
		var defaults = 
		{
			slides: '>div',				// wich element inside the container should serve as slide
			animationSpeed: 900,		// animation duration
			autorotation: true,			// autorotation true or false?
			autorotationSpeed:3,		// duration between autorotation switch in Seconds
			easing: 'easeOutQuint',		// animation easing, more options at the bottom of this file
			event: 'mouseover',			// event to focus a slide: mouseover or click
			imageShadow:true,			// should the image get a drop shadow to the left
			imageShadowStrength:0.5,	// how dark should that shadow be, recommended values: between 0.3 and 0.8, allowed between 0 and 1
			fontOpacity: 1,				// opacity for font, if set to 1 it will be stronger but most browsers got a small rendering glitch at 1
			backgroundOpacity:0.8		// opacity for background
			
		};
		
		// merge default values with the values that were passed with the function call
		var options = $.extend(defaults, options);
		
		return this.each(function()
		{	
			// save some jQuery selections into variables, also calculate base values for each slide
			var slideWrapper 	= $(this),								// element that holds the slides
				slides			= slideWrapper.find(options.slides).css('display','block'),	// the slides
				slide_count 	= slides.length,						// number of slides
				slide_width		= slideWrapper.width() / slide_count	// width of the slides
				expand_slide 	= slides.width(),						// size of a slide when expanded, defined in css, class ".featured" by default
				minimized_slide	= (slideWrapper.width() - expand_slide) / (slide_count - 1), // remaining width is shared among the non-active slides
				overlay_modifier = 200 *(1- options.imageShadowStrength),					//increases the size of the minimized image div to avoid flickering
				excerptWrapper = slideWrapper.find('.feature_excerpt'),
				interval = '',
				current_slide = 0;
			
				
			//modify excerptWrapper and re-select it, also add positioning span -------------------------
			excerptWrapper.wrap('<span class="feature_excerpt"></span>').removeClass('feature_excerpt').addClass('position_excerpt');
			excerptWrapper = slideWrapper.find('.feature_excerpt').css('opacity',options.backgroundOpacity);
			// -------------------------------------------------------------------------------------------
			
				
			//equal heights for all excerpt containers, then hide basic excerpt content -----------------
			excerptWrapper.equalHeights().find('.position_excerpt').css({display:'block', opacity:0, position:'absolute'});
			var excerptWrapperHeight = excerptWrapper.height();
			// -------------------------------------------------------------------------------------------
			
						
			
			//iterate each slide and set new base values, also set positions for acitve and inactive states and event handlers
			slides.each(function(i)
			{
				var this_slide = $(this),											// current slide element
					this_slide_a = this_slide.find('a'),							// a tag inside the element
					real_excerpt = this_slide.find('.position_excerpt'),			// wrapper to center the excerpt content verticaly
					feature_excerpt = this_slide.find('.feature_excerpt'),
					real_excerpt_height = real_excerpt.height(),					// height of the excerpt content
					slide_heading =this_slide.find('.sliderheading'),  				// slide heading
					cloned_heading =   slide_heading.clone().appendTo(this_slide_a) // clone heading for heading only view
													.addClass('heading_clone')
													.css({opacity:options.fontOpacity, width:slide_width-30}),
					clone_height = cloned_heading.height(),							// height of clone heading, needed to center verticaly as well
					modifier = parseInt(feature_excerpt.css('paddingBottom'));
					
					this_slide.css('backgroundPosition',parseInt(slide_width/2-8) + 'px ' + parseInt((this_slide.height()- excerptWrapperHeight)/2 -8) + 'px');						
					
					cloned_heading.css({bottom: (excerptWrapperHeight-clone_height)/2 +modifier});			//center clone heading
					real_excerpt.css({bottom: (excerptWrapperHeight-real_excerpt_height)/2 +modifier});	//center real excerpt
												
					this_slide.data( //save data of each slide via jquerys data method
					'data',
					{
						this_slides_position: i * slide_width,							// position if no item is active
						pos_active_higher: i * minimized_slide,							// position of the item if a higher item is active
						pos_active_lower: ((i-1) * minimized_slide) + expand_slide		// position of the item if a lower item is active
					});
					
				//set base properties	
				this_slide.css({zIndex:i+1, left: i * slide_width, width:slide_width + overlay_modifier});
								
				
				//apply the fading div if option is set to do so
				if(options.imageShadow)
				{
					this_slide.find('>a').prepend('<span class="fadeout ie6fix"></span>');
				}
								
			});
			
			// calls the preloader, kriesi_image_preloader plugin needed
			jQuery('.featured_inside').kriesi_image_preloader({callback:add_functionality});
			
			function add_functionality()
			{
				
				//set autorotation ---------------------------------------------------------------------------
				
				
				if(options.autorotation)
				{
					interval = setInterval(function() { autorotation(); }, (parseInt(options.autorotationSpeed) * 1000));
				}
				
				slides.each(function(i)
				{	
					var this_slide = $(this), 
						real_excerpt = this_slide.find('.position_excerpt'), 
						cloned_heading = this_slide.find('.heading_clone');
						
					//set mouseover or click event
					this_slide.bind(options.event, function(event, continue_autoslide)
					{	
						//stop autoslide on userinteraction
						if(!continue_autoslide)
						{
							clearInterval(interval)
						}
						
						var objData = this_slide.data( 'data' );
						//on mouseover expand current slide to full size and fadeIn real content
						real_excerpt.stop().animate({opacity:options.fontOpacity},options.animationSpeed, options.easing);
						cloned_heading.stop().animate({opacity:0},options.animationSpeed, options.easing);
						
						this_slide.stop().animate({	width: expand_slide + (overlay_modifier * 1.2), 
													left: objData.pos_active_higher},
													options.animationSpeed, options.easing);
											
						//set and all other slides to small size
						slides.each(function(j){
						
							if (i !== j)
							{	
								var this_slide = $(this),
									real_excerpt = this_slide.find('.position_excerpt'),
									cloned_heading = this_slide.find('.heading_clone'),
									objData = this_slide.data( 'data' ),
									new_pos = objData.pos_active_higher;
									
								if(i < j) { new_pos = objData.pos_active_lower; }
								this_slide.stop().animate({left: new_pos, width:minimized_slide + overlay_modifier},options.animationSpeed, options.easing);
								real_excerpt.stop().animate({opacity:0},options.animationSpeed, options.easing);
								cloned_heading.stop().animate({opacity:options.fontOpacity},options.animationSpeed, options.easing);
							}
						
						});
						
					});
				});
				
				
				//set mouseout event: expand all slides to no-slide-active position and width
				slideWrapper.bind('mouseleave', function()
				{
					slides.each(function(i)
					{
						var this_slide = $(this),
							real_excerpt = this_slide.find('.position_excerpt'),
							cloned_heading = this_slide.find('.heading_clone'),
							objData = this_slide.data( 'data' ),
							new_pos = objData.this_slides_position;
							
							this_slide.stop().animate({left: new_pos, width:slide_width + overlay_modifier},options.animationSpeed, options.easing);
							real_excerpt.stop().animate({opacity:0},options.animationSpeed, options.easing);
							cloned_heading.stop().animate({opacity:options.fontOpacity},options.animationSpeed, options.easing);
					});
					
				});
			}
			
			
			// autorotation function for the image slider
			function autorotation()
			{	
				if(slide_count  == current_slide)
				{
					slideWrapper.trigger('mouseleave');
					current_slide = 0;
				}
				else
				{
					slides.filter(':eq('+current_slide+')').trigger(options.event,[true]);
					current_slide ++;
				}
			}
		});
	};
})(jQuery);
// -------------------------------------------------------------------------------------------
// END KRICORDION
// -------------------------------------------------------------------------------------------

function k_smoothscroll()
{
	jQuery('a[href*=#]').click(function() {
		
	   var newHash=this.hash;
	   
	   if(newHash != '' && newHash != '#' )
	   {
		   var target=jQuery(this.hash).offset().top,
			   oldLocation=window.location.href.replace(window.location.hash, ''),
			   newLocation=this,
			   duration=800,
			   easing='easeOutQuint';
		
			
			
			
		   // make sure it's the same location      
		   if(oldLocation+newHash==newLocation)
		   {
		      // animate to target and set the hash to the window.location after the animation
		      jQuery('html:not(:animated),body:not(:animated)').animate({ scrollTop: target }, duration, easing, function() {
		
		         // add new hash to the browser location
		         window.location.href=newLocation;
		      });
		
		      // cancel default click action
		      return false;
		   }
		
		}
	
	});
}


function k_menu()
{
	// k_menu controlls the dropdown menus and improves them with javascript
	
	jQuery("#nav a").removeAttr('title');
	jQuery(" #nav ul ").css({display: "none"}); // Opera Fix

	
	//smooth drop downs
	jQuery("#nav li").each(function()
	{	
		
		var $sublist = jQuery(this).find('ul:first');
		
		jQuery(this).hover(function()
		{	
			$sublist.stop().css({overflow:"hidden", height:"auto", display:"none"}).slideDown(400, function()
			{
				jQuery(this).css({overflow:"visible", height:"auto"});
			});	
		},
		function()
		{	
			$sublist.stop().slideUp(400, function()
			{	
				jQuery(this).css({overflow:"hidden", display:"none"});
			});
		});	
	});
}


/**
 * LavaLamp - A menu plugin for jQuery with cool hover effects.
 * @requires jQuery v1.1.3.1 or above
 *
 * http://gmarwaha.com/blog/?p=7
 *
 * Copyright (c) 2007 Ganeshji Marwaha (gmarwaha.com)
 * Dual licensed under the MIT and GPL licenses:
 * http://www.opensource.org/licenses/mit-license.php
 * http://www.gnu.org/licenses/gpl.html
 *
 * Version: 0.2.0
 * Requires Jquery 1.2.1 from version 0.2.0 onwards. 
 * For jquery 1.1.x, use version 0.1.0 of lavalamp
 */
 
(function($) {
$.fn.k_nav_pointer = function(o) {
    o = $.extend({ fx: "linear", speed: 500, click: function(){} }, o || {});

    return this.each(function() {
        var me = $(this), noop = function(){},
            $back = $('<li class="back ie6fix"><div class="left ie6fix"></div></li>').appendTo(me),
            $li = $("li", this), curr = $("li.current", this)[0], applytoall = false;
            
       	if(curr == undefined)
		{
			$back.css('opacity',0);
			curr = $li[0];
			applytoall = true;
		}

        $li.not(".back").not("#nav ul li").hover(function() {
        	if(applytoall) 
        	{	
        		$back.stop().animate({'opacity':1});
            }
            move(this);
        }, function(){
        	if(applytoall) 
        	{	
        		$back.stop().animate({'opacity':0});
            }
        });

        $(this).hover(noop, function() {
            move(curr);
        });

        $li.click(function(e) {
            setCurr(this);
            return o.click.apply(this, [e, this]);
        });

        setCurr(curr);

        function setCurr(el) {
            $back.css({ "left": el.offsetLeft+"px", "width": el.offsetWidth+"px" });
            curr = el;
        };

        function move(el) {
            $back.each(function() {
                $(this).dequeue(); }
            ).animate({
                width: el.offsetWidth,
                left: el.offsetLeft
            }, o.speed, o.fx);
        };

    });
};
})(jQuery);


//equalHeights by james padolsey
jQuery.fn.equalHeights = function() {
    return this.height(Math.max.apply(null,
        this.map(function() {
           return jQuery(this).height()
        }).get()
    ));
};


/* function cufont_replacement()
{

	var usedCSS = 1,
		colorset = new Array('1px 1px #ffffff', '-1px -1px #000000');
	jQuery('link').each(function()
	{	
		styleURL = jQuery(this).attr('href'); 
		CSSnumber = styleURL.match(/style(\d).css/);
		if(CSSnumber && CSSnumber.length > 0)
		{
			usedCSS = CSSnumber[1];
		}
	});

	
	if(usedCSS == 2 )
	{
		colorset = ['0px 0px #ffffff', '0px 0px #ffffff'];
	}
	else if(usedCSS == 3 || usedCSS == 5)
	{
		colorset = ['-1px -1px #111111', '-1px -1px #111111'];
	}
	else if(usedCSS == 4)
	{
		colorset = ['1px 1px #ffffff', '1px 1px #ffffff'];
	} 

Cufon.replace('h1,h2,h3,h4,h5,h6',{ 
	
	fontFamily: 'quicksand',
	hover:'true',
	textShadow: colorset[0]
	});
	
	
Cufon.replace('#wrapper_heading h2',{ 
	
	fontFamily: 'quicksand',
	hover:'true',
	textShadow: colorset[1]
 
	
	});
	
Cufon.replace('.heading',{ fontFamily: 'quicksand', hover:'true'});
} */


function my_lightbox($elements, autolink)
{	
	var theme_selected = 'light_square';
	
	if(autolink)
	{
		jQuery('a[href$=jpg], a[href$=png], a[href$=gif], a[href$=jpeg], a[href$=.mov] , a[href$=.swf] , a[href*=vimeo.com] , a[href*=youtube.com]').contents("img").parent().each(function()
		{
			if(!jQuery(this).attr('rel') != undefined && !jQuery(this).attr('rel') != '' && !jQuery(this).hasClass('noLightbox'))
			{
				jQuery(this).attr('rel','lightbox[auto_group]')
			}
		});
	}
	
	jQuery($elements).prettyPhoto({
			"theme": theme_selected /* light_rounded / dark_rounded / light_square / dark_square */																	});
	
	jQuery($elements).each(function()
	{	
		var $image = jQuery(this).contents("img");
		$newclass = 'lightbox_video';
		
		if(jQuery(this).attr('href').match(/(jpg|gif|jpeg|png|tif)/)) $newclass = 'lightbox_image';
			
		if ($image.length > 0)
		{	
			if(jQuery.browser.msie &&  jQuery.browser.version < 7) jQuery(this).addClass('ie6_lightbox');
			
			var $bg = jQuery("<span class='"+$newclass+" '></span>").appendTo(jQuery(this));
			
			jQuery(this).bind('mouseenter', function()
			{
				var $height = $image.height(),
					$width = $image.width(),
					$pos =  $image.position(),
					$paddingX = parseInt($image.css('paddingTop')) + parseInt($image.css('paddingBottom')),
					$paddingY = parseInt($image.css('paddingLeft')) + parseInt($image.css('paddingRight'));					
				
				$bg.css({height:$height + $paddingY, width:$width + $paddingX, top:$pos.top, left:$pos.left});
			});
		}
	});	
	
	jQuery($elements).contents("img").hover(function()
	{
		jQuery(this).stop().animate({opacity:0.4},400);
	},
	function()
	{
		jQuery(this).stop().animate({opacity:1},400);
	});
}


(function($)
{
	$.fn.kriesi_ajax_form = function(options) 
	{
		var defaults = 
		{
			sendPath: 'send',
			responseContainer: '.ajaxresponse'
		};
		
		var options = $.extend(defaults, options);
		
		return this.each(function()
		{
			var form = $(this),
				send = 
				{
					formElements: form.find('textarea, select, input:text, input[type=hidden]'),
					validationError:false,
					button : form.find('input:submit'),
					datastring : ''
				};
			
			send.button.bind('click', checkElements);
			
			function send_ajax_form()
			{
				send.button.fadeOut(300);	
									
				$.ajax({
					type: "POST",
					url: options.sendPath,
					data:send.datastring,
					success: function(response)
					{	
						
						var message =  $("<div'></div>").addClass(options.responseContainer)
														.css('display','none')
														.insertBefore(form)
														.html(response); 
														
						form.slideUp(400, function(){message.slideDown(400), send.formElements.val('');});
						
					}
				});
				
			}
			
			function checkElements()
			{	
				// reset validation var and send data
				send.validationError = false;
				send.datastring = 'ajax=true';
				
				send.formElements.each(function(i)
				{
					var currentElement = $(this),
						surroundingElement = currentElement.parent(),
						value = currentElement.val(),
						name = currentElement.attr('name'),
					 	classes = currentElement.attr('class'),
					 	nomatch = true;
					 	
					 	send.datastring  += "&" + name + "=" + value;
					 	
					 	if(classes.match(/is_empty/))
						{
							if(value == '')
							{
								surroundingElement.attr("class","").addClass("error");
								send.validationError = true;
							}
							else
							{
								surroundingElement.attr("class","").addClass("valid");
							}
							nomatch = false;
						}
						
						if(classes.match(/is_email/))
						{
							if(!value.match(/^\w[\w|\.|\-]+@\w[\w|\.|\-]+\.[a-zA-Z]{2,4}$/))
							{
								surroundingElement.attr("class","").addClass("error");
								send.validationError = true;
							}
							else
							{
								surroundingElement.attr("class","").addClass("valid");
							}	
							nomatch = false;
						}
						
						if(nomatch && value != '')
						{
							surroundingElement.attr("class","").addClass("valid");
						}
				});
				
				if(send.validationError == false)
				{
					send_ajax_form();
				}
				return false;
			}
		});
	}
})(jQuery);



/*
 * jQuery Easing v1.3 - http://gsgd.co.uk/sandbox/jquery/easing/
*/

// t: current time, b: begInnIng value, c: change In value, d: duration
jQuery.easing['jswing'] = jQuery.easing['swing'];

jQuery.extend( jQuery.easing,
{
	def: 'easeOutQuad',
	swing: function (x, t, b, c, d) {
		//alert(jQuery.easing.default);
		return jQuery.easing[jQuery.easing.def](x, t, b, c, d);
	},
	easeInQuad: function (x, t, b, c, d) {
		return c*(t/=d)*t + b;
	},
	easeOutQuad: function (x, t, b, c, d) {
		return -c *(t/=d)*(t-2) + b;
	},
	easeInOutQuad: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return c/2*t*t + b;
		return -c/2 * ((--t)*(t-2) - 1) + b;
	},
	easeInCubic: function (x, t, b, c, d) {
		return c*(t/=d)*t*t + b;
	},
	easeOutCubic: function (x, t, b, c, d) {
		return c*((t=t/d-1)*t*t + 1) + b;
	},
	easeInOutCubic: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return c/2*t*t*t + b;
		return c/2*((t-=2)*t*t + 2) + b;
	},
	easeInQuart: function (x, t, b, c, d) {
		return c*(t/=d)*t*t*t + b;
	},
	easeOutQuart: function (x, t, b, c, d) {
		return -c * ((t=t/d-1)*t*t*t - 1) + b;
	},
	easeInOutQuart: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return c/2*t*t*t*t + b;
		return -c/2 * ((t-=2)*t*t*t - 2) + b;
	},
	easeInQuint: function (x, t, b, c, d) {
		return c*(t/=d)*t*t*t*t + b;
	},
	easeOutQuint: function (x, t, b, c, d) {
		return c*((t=t/d-1)*t*t*t*t + 1) + b;
	},
	easeInOutQuint: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return c/2*t*t*t*t*t + b;
		return c/2*((t-=2)*t*t*t*t + 2) + b;
	},
	easeInSine: function (x, t, b, c, d) {
		return -c * Math.cos(t/d * (Math.PI/2)) + c + b;
	},
	easeOutSine: function (x, t, b, c, d) {
		return c * Math.sin(t/d * (Math.PI/2)) + b;
	},
	easeInOutSine: function (x, t, b, c, d) {
		return -c/2 * (Math.cos(Math.PI*t/d) - 1) + b;
	},
	easeInExpo: function (x, t, b, c, d) {
		return (t==0) ? b : c * Math.pow(2, 10 * (t/d - 1)) + b;
	},
	easeOutExpo: function (x, t, b, c, d) {
		return (t==d) ? b+c : c * (-Math.pow(2, -10 * t/d) + 1) + b;
	},
	easeInOutExpo: function (x, t, b, c, d) {
		if (t==0) return b;
		if (t==d) return b+c;
		if ((t/=d/2) < 1) return c/2 * Math.pow(2, 10 * (t - 1)) + b;
		return c/2 * (-Math.pow(2, -10 * --t) + 2) + b;
	},
	easeInCirc: function (x, t, b, c, d) {
		return -c * (Math.sqrt(1 - (t/=d)*t) - 1) + b;
	},
	easeOutCirc: function (x, t, b, c, d) {
		return c * Math.sqrt(1 - (t=t/d-1)*t) + b;
	},
	easeInOutCirc: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return -c/2 * (Math.sqrt(1 - t*t) - 1) + b;
		return c/2 * (Math.sqrt(1 - (t-=2)*t) + 1) + b;
	},
	easeInElastic: function (x, t, b, c, d) {
		var s=1.70158;var p=0;var a=c;
		if (t==0) return b;  if ((t/=d)==1) return b+c;  if (!p) p=d*.3;
		if (a < Math.abs(c)) { a=c; var s=p/4; }
		else var s = p/(2*Math.PI) * Math.asin (c/a);
		return -(a*Math.pow(2,10*(t-=1)) * Math.sin( (t*d-s)*(2*Math.PI)/p )) + b;
	},
	easeOutElastic: function (x, t, b, c, d) {
		var s=1.70158;var p=0;var a=c;
		if (t==0) return b;  if ((t/=d)==1) return b+c;  if (!p) p=d*.3;
		if (a < Math.abs(c)) { a=c; var s=p/4; }
		else var s = p/(2*Math.PI) * Math.asin (c/a);
		return a*Math.pow(2,-10*t) * Math.sin( (t*d-s)*(2*Math.PI)/p ) + c + b;
	},
	easeInOutElastic: function (x, t, b, c, d) {
		var s=1.70158;var p=0;var a=c;
		if (t==0) return b;  if ((t/=d/2)==2) return b+c;  if (!p) p=d*(.3*1.5);
		if (a < Math.abs(c)) { a=c; var s=p/4; }
		else var s = p/(2*Math.PI) * Math.asin (c/a);
		if (t < 1) return -.5*(a*Math.pow(2,10*(t-=1)) * Math.sin( (t*d-s)*(2*Math.PI)/p )) + b;
		return a*Math.pow(2,-10*(t-=1)) * Math.sin( (t*d-s)*(2*Math.PI)/p )*.5 + c + b;
	},
	easeInBack: function (x, t, b, c, d, s) {
		if (s == undefined) s = 1.70158;
		return c*(t/=d)*t*((s+1)*t - s) + b;
	},
	easeOutBack: function (x, t, b, c, d, s) {
		if (s == undefined) s = 1.70158;
		return c*((t=t/d-1)*t*((s+1)*t + s) + 1) + b;
	},
	easeInOutBack: function (x, t, b, c, d, s) {
		if (s == undefined) s = 1.70158; 
		if ((t/=d/2) < 1) return c/2*(t*t*(((s*=(1.525))+1)*t - s)) + b;
		return c/2*((t-=2)*t*(((s*=(1.525))+1)*t + s) + 2) + b;
	},
	easeInBounce: function (x, t, b, c, d) {
		return c - jQuery.easing.easeOutBounce (x, d-t, 0, c, d) + b;
	},
	easeOutBounce: function (x, t, b, c, d) {
		if ((t/=d) < (1/2.75)) {
			return c*(7.5625*t*t) + b;
		} else if (t < (2/2.75)) {
			return c*(7.5625*(t-=(1.5/2.75))*t + .75) + b;
		} else if (t < (2.5/2.75)) {
			return c*(7.5625*(t-=(2.25/2.75))*t + .9375) + b;
		} else {
			return c*(7.5625*(t-=(2.625/2.75))*t + .984375) + b;
		}
	},
	easeInOutBounce: function (x, t, b, c, d) {
		if (t < d/2) return jQuery.easing.easeInBounce (x, t*2, 0, c, d) * .5 + b;
		return jQuery.easing.easeOutBounce (x, t*2-d, 0, c, d) * .5 + c*.5 + b;
	}
});

function k_pixelperfect()
{
	if(jQuery.browser.opera) // opera somewhat sucks when something is alligned with pos absolute and bottom
	{
		//hide fancyborders, doesnt work
		jQuery('.fancyborder').css({display:'none'});
		
		//set background image sidebar
		var sbHeight = jQuery('.sidebar').height();
		jQuery('.sidebar_bottom').css({top:sbHeight});
	}
	
	jQuery('.wp-caption').each(function()
	{
		var current_caption = jQuery(this),
			current_img= current_caption.find('img');
			
		current_caption.css('width',current_img.width() + parseInt(current_img.css('paddingLeft'))+ parseInt(current_img.css('paddingRight')));
	});
	
	if(jQuery.browser.msie && jQuery.browser.version < 8)
	{
		jQuery('.testimonial_slides').css('paddingTop','25px');
		
		if(jQuery.browser.version < 7)
		{
			jQuery('.fancyborder').css({display:'none'});
		}
	}
}