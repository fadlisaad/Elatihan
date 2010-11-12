jQuery.noConflict();

jQuery(document).ready(function(){

// -------------------------------------------------------------------------------------------
// START EDITING HERE
// -------------------------------------------------------------------------------------------
	
	jQuery(".multislide1").kriesi_block_slider({
			slides: '.featured',				// wich element inside the container should serve as slide
			animationSpeed:600,					// animation duration
			autorotation: false,				// autorotation true or false?
			autorotationSpeed:3,				// duration between autorotation switch in Seconds
			slideControlls: 'items',			// which controlls should the be displayed for the user: none, items
			appendControlls: '.feature_wrap1',	//element to append the controlls to
			blockSize: {height: 65, width:65},//heigth and width of the blocks in number or the word 'full'
			betweenBlockDelay:35,				// delay between each block change
			display: 'diagonaltop', 					// showing up blocks: random, topleft, bottomright, diagonaltop, diagonalbottom, all
			switchMovement: true				// if display is set "topleft" it will switch to "br" every 2nd transition, same for diagonal settings
			});
		
	jQuery('.multislide2').kriesi_block_slider({
			slides: '.featured',					// wich element inside the container should serve as slide
			animationSpeed: 1500,					// animation duration
			autorotation: false,					// autorotation true or false?
			autorotationSpeed:3,					// duration between autorotation switch in Seconds
			slideControlls: 'items',				// which controlls should the be displayed for the user: none, items
			appendControlls: '.feature_wrap2',		//element to append the controlls to
			transition: 'fade'						//slide or fade
			});

	
	// curtain slider 
	jQuery('.multislide3').kriesi_block_slider({
			slides: '.featured',					// wich element inside the container should serve as slide
			animationSpeed: 700,					// animation duration
			autorotation: false,						// autorotation true or false?
			autorotationSpeed:3,					// duration between autorotation switch in Seconds
			slideControlls: 'items',				// which controlls should the be displayed for the user: none, items
			appendControlls: '.feature_wrap3',		//element to append the controlls to
			showText: true,							// wether description text should be shown or not
			blockSize: {height: 'full', width:30},	//heigth and width of the blocks in number or the word 'full'
			betweenBlockDelay:60,					// delay between each block change
			switchMovement: true,					// if true will switch transitions left and right
			transition: 'slide'						//slide or fade
			});

// -------------------------------------------------------------------------------------------
// END EDITING HERE
// -------------------------------------------------------------------------------------------		
});