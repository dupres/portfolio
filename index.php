<head>

<script
  src="https://code.jquery.com/jquery-3.2.1.js"
  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous"></script>

</head>

<body>

	<canvas id="bg"></canvas>
	<div id="content">
		<div id="card">
			<div id="card_content"  onmousedown="event.preventDefault ? event.preventDefault() : event.returnValue = false">
				<div id="card_hover">Click me !</div>
				<img id="card_front" src="./sp/sp_forward.jpg"/>
				<img id="card_back" src='idcard.jpg'/>
			</div>

		</div>

		<div id="about">
			<p id="about1" class="about"><p>
	 		<p id="about2" class="about"><p>
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
	padding:0;
	margin:0;
	font-size:3vh;
}

#bg{
	background-color: black;
	position:fixed;z
	height:100%;
	width:100%;
	top:0;
	left:0;
	z-index:-1000;
}

#content{
	z-index: 0;
	height:100vh;
	width:100vh;
	margin:0;
	background-color: black;
	display:flex;

}

#card{
	width:40vh;
	height:40vh;
	display:flex;
	flex-direction:column;
	align-items:center;
	position:relative;

}
@font-face {
    font-family: typoRound;
    src: url(Typo_Round.otf);
}
#card_hover{
	font-family: typoRound;
	z-index:42;
	position:relative;
	font-size: 2vh;
	visibility: visible;
}
#card_content{
	border:3px outline black;
	position:relative;
	width:100%;
	height:100%;
	transition: 0.5s ease-in-out all;
	box-shadow: 5px 10px 10px #777;
	transform:rotate(-3deg);
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

#about{
	margin-top:3vh;
	margin-left:2vh;
	background-color:rba(0,0,0,0);
	color:white;
	width:50vh;
	height:30vh;
	max-width: 50vh;
}

.about{
	color:white;
	display:flex;
}

#about2{
	display:flex;
	flex-wrap: wrap;
}

.invisible{
	visibility: hidden;
}

.biggerChar{
	font-size:3.2vh;
}


</style>
<script>

	class Shot{
    constructor(posX, posY=0, dir="bottom", type=1, r=255, g=255, b=255, speed=1, dmg=1){
        this.type = type;
        this.posX = posX;
        this.posY = posY;
        this.dir = dir;
        this.r = r;
        this.g = g;
        this.b = b;
        this.speed = speed;
        this.dmg = dmg;
        this.hit = false;
        
    }
    
    act(canvas, context){
        if (this.dir == "bottom"){
            if (this.posY + this.speed < canvas.height){
                this.posY=this.posY+this.speed;
                this.draw(canvas,context);
            }else{
                this.hit = true;
            }
        }else if (this.dir == "top"){
            if (this.posY - this.speed > 0){
                this.posY=this.posY-this.speed;
                this.draw(canvas,context);
            }else{
                this.hit = true;
            }
        }
    }
    
    draw(canvas,context){
        context.beginPath();
        context.strokeStyle = "rgb("+this.r+","+this.g+","+this.b+")";
        if (this.dir == "top"){
            context.moveTo(this.posX, this.posY);
            context.lineTo(this.posX, this.posY + 5 * this.speed);
        }else if(this.dir == "bottom"){
            context.moveTo(this.posX, this.posY);
            context.lineTo(this.posX, this.posY - 5 * this.speed);
        }
        context.closePath();
        context.stroke();
    }
    
}

	window.onload = function()
	{
	    //---------------------------------------------------------
	    //                        Initialisation
	    //---------------------------------------------------------
	    
	    var canvas = document.getElementById('bg');
	    if(!canvas)
	    {
	        alert("Impossible de récupérer le canvas");
	        return;
	    }

	    var context = canvas.getContext('2d');
	    if(!context)
	    {
	        alert("Impossible de récupérer le context du canvas");
	        return;
	    }
	    
	    var shots = [];
	    //var colors = [[255,0,0],[255,255,0],[255,0,255],[0,255,255],[0,255,0],[0,0,255]];
	    var colors = [[255,255,255]];
	    //posX, posY=0, dir="bottom", type=1, r=255, g=255, b=255, speed=1, dmg=1
	    
	    
	    //drawArrow(context,0,0,0.5,'rgb(255,0,0)','rgb(0,0,255)');
	    
	    
	    // Background variables
	    var interval = 0;
	    var intervalPourRendreLesGensFous = 0;
	    
	    //---------------------------------------------------------------------
	    //                  Press space to play screen
	    //---------------------------------------------------------------------

	    interval = setInterval(function(){
	        context.beginPath();
	        context.fillStyle="rgba(0,0,0,0.3)";
	        context.rect(0,0,canvas.width,canvas.height);
	        context.fill();
	        context.closePath();
	        
	        $.each(shots, function(key,shot){
	            shot.act(canvas,context);
	            if (shot.hit === true){
	                posX = Math.floor((Math.random() * canvas.width) + 1);
	                color = colors[Math.floor((Math.random() * colors.length))];
	                speed = (Math.random() * 2) + 1;
	                shots[key] = new Shot(posX,0,"bottom",1,color[0],color[1],color[2],speed);
	            }
	        });
	        if (Math.floor((Math.random() * 50) + 1) == 1 && shots.length<100){
	            posX = Math.floor((Math.random() * canvas.width) + 1);
	            color = colors[Math.floor((Math.random() * colors.length))];
	            speed = (Math.random() * 2) + 1;
	            shots[shots.length] = new Shot(posX,0,"bottom",1,color[0],color[1],color[2],speed);
	        }
	        
	    },20);
	}

	var f_time = true;

	//SP AVATAR
	//http://www.sp-studio.de/
	
	//FLIP 
	//FROM https://davidwalsh.name/css-flip
	var card_face = "front";
	function card_flip(){
		if (card_face == "front"){
			card_hover_firsttime = false;
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
				setTimeout(function(){card_hover_display = true;},500);
			},500);
		}
	}
	$("#card").click(function(){
		card_hover_display = false;
		$("#card_hover").css("visibility","hidden");
		card_flip();
		if (f_time){
			f_time = false;
			uncover();
		}
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
    },40);

    // -----   Card_hover -------
    
	var card_hover_display = true;
	var card_hover_state = "small";
	var card_hover_firsttime = true;
	setInterval(function(){
		if (card_hover_state == "small"){
			card_hover_state = "big";
			$("#card_hover").animate({fontSize: "4vh"});
		}else{
			card_hover_state = "small";
			$("#card_hover").animate({fontSize: "3vh"});
		}
	},400);
    $("#card").on("mouseover",function(){
    	if (!(card_hover_firsttime)){
	    	if (card_hover_display){
		    	if (card_face == "front"){
		    		$("#card_hover").css("visibility","visible");
		    	}
		    }
		}
    });
    $("#card").on("mouseout",function(){
    	if (!(card_hover_firsttime)){
    		$("#card_hover").css("visibility","hidden");
    	}
    });

    // ----- Uncover -------------
    function uncover(){
    	uncover_a1();
    }
    about1_text = "     Hello, everybody !";
    about2_text = "I am a 3rd year IT student, actually learning in Licence pro DIM at Annecy (France). It teaches JS tricks and mobile stuff, in order to form competents and agile web developpers. I like to test and experiment new things, but what  I enjoy the most is to put into practice my knowledge. Have a check on my apps list in the bottom of this page !";
    var cpta = -1;
    var cptc = 1;
    function uncover_a1(){
    	cpta = -1;
    	about1_text = about1_text.replace(/ /g,"_");
    	var arrValues = about1_text.split('');
    	var fill_a1 = setInterval(function(){
			cpta ++;
			if (cpta < arrValues.length){
	    		char = $("<div/>");
	    		char.addClass("char")
	    			.addClass("charnb"+cptc);
	    		char.append(arrValues[cpta]);
	    		if (arrValues[cpta] === "_"){
	    			char.addClass("invisible");
	    		}
	    		$("#about1").append(char);
	    		cptc++;
			}else{
				clearTimeout(fill_a1);
				uncover_a2();
			}
    	},15);
    }

    function uncover_a2(){
    	cpta = -1;
    	about2_text = about2_text.replace(/ /g,"_");
    	var arrValues = about2_text.split('');
    	var fill_a2 = setInterval(function(){
			cpta ++;
			if (cpta < arrValues.length){
	    		char = $("<div/>");
	    		char.addClass("char")
	    			.addClass("charnb"+cptc);
	    		char.append(arrValues[cpta]);
	    		if (arrValues[cpta] === "_"){
	    			char.addClass("invisible");
	    		}
	    		$("#about2").append(char);
	    		cptc++;
			}else{
				clearTimeout(fill_a2);

				setTimeout(function(){aboutCharDeco();},500);
				setTimeout(function(){aboutCharDeco2();},5000);
			}
    	},5);
    } 

    cptacd = 0;
    function aboutCharDeco(){
    	setInterval(function(){
    		$(".charnb"+cptacd).removeClass("biggerChar");
    		cptacd++;
    		if (cptacd > $(".char").length)
    			cptacd = 0;
    		$(".charnb"+cptacd).addClass("biggerChar");
    	},20);
    }

    cptacd2 = 0;
    function aboutCharDeco2(){
    	setInterval(function(){
    		$(".charnb"+cptacd2).removeClass("biggerChar");
    		cptacd2++;
    		if (cptacd2 > $(".char").length)
    			cptacd2 = 0;
    		$(".charnb"+cptacd2).addClass("biggerChar");
    	},40);
    }

</script>
