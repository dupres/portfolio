<head>

<script
  src="https://code.jquery.com/jquery-3.2.1.js"
  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous"></script>

</head>

<body>

	<div id="content">
			<div id="card">
				<div id="card_content">
					<img id="card_front" src="./sp/sp_forward.jpg"/>
					<canvas id="card_back"/>
				</div>
		</div>
	</div>

</body>

<?php
	
	
	
	
	
?>
<style>

body{
	display:flex;
	flex-direction:column;
	align-items:center;
}

#card{
	width:90vh;
	height:90vh;
	display:flex;
	flex-direction:column;
	align-items:center;
	position:relative;

}
#card_content{
	position:relative;
	width:100%;
	height:100%;
	transition: 0.5s ease-in-out all;
}
#card_front{
	position:absolute;
	width:100%;
	height:100%;
	top:0px;
	left:0px;
	z-index:2;
}
#card_back{
	position:absolute;
	width:100%;
	height:100%;
	top:0px;
	left:0px;
	z-index:1;
	
	
}








</style>
<script>

	//SP AVATAR
	//http://www.sp-studio.de/



	var card_canvas = $("#card_back");
	console.log(card_canvas);
	var context = card_canvas.get(0).getContext("2d");
	context.moveTo(0,0);
	context.fillStyle="blue";
	context.fillRect(0,0,card_canvas.width(),card_canvas.height());

	//FLIP 
	//FROM https://davidwalsh.name/css-flip
	card_face = "front";
	function card_flip(){
		if (card_face == "front"){
			card_face = "back";
			$("#card_content").css("width","0%");
			setTimeout(function(){
				$("#card_back").css("z-index","3");
				$("#card_content").css("width","100%");
			},500);
		}else{
			card_face = "front";
			$("#card_content").css("width","0%");
			setTimeout(function(){
				$("#card_back").css("z-index","1");
				$("#card_content").css("width","100%");
			},500);
		}
	}
	$("#card").click(function(){
		card_flip();
	});
	

	function ffalse()
    {
            return false;
    }
    function ftrue()
    {
            return true;
    }
    document.onselectstart = new Function ("return false");
    if(window.sidebar)
    {
            $("card").onmousedown = ffalse;
            $(".card").onclick = ftrue;
    }

    var cpt = 0;
    var nextBlink = 75;
    var stay = 5;
    setInterval(function(){
    	if (stay){
    		stay = stay - 1;
    	}else{
    		pif = Math.floor((Math.random() * 100) + 1);
	    	if(pif < 10){
    			$("#card_front").attr("src","./sp/sp_down.jpg");
	    	}else if (pif >=10 && pif < 20){
    			$("#card_front").attr("src","./sp/sp_left.jpg");
			}else if(pif >=20 && pif < 30){
    			$("#card_front").attr("src","./sp/sp_meow.jpg");
	    	}else if(pif >=30 && pif < 40){
    			$("#card_front").attr("src","./sp/sp_up.jpg");
	    	}else{
    			$("#card_front").attr("src","./sp/sp_forward.jpg");
	    	}
	    	stay = Math.floor((Math.random() * 50) + 1)+50;
	    }
	    

    	if (cpt==nextBlink){
    		$("#card_front").attr("src","./sp/sp_closed.jpg");
    		nextBlink = cpt + Math.floor((Math.random() * 75) + 1)+25;
    		stay = 3;
    	}

    	cpt=cpt+1;
    },50);



</script>
