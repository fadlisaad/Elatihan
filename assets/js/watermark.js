var load = false;
	window.onload = function(){
		if(!load) {
			wmark.init({
				"position": "bottom-right",
				"opacity": 50,
				"className": "photo",
				"watermark": "watermark.png"
			});
			load = true;
		}
	}