<head>

<script
  src="https://code.jquery.com/jquery-3.2.1.js"
  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous"></script>

</head>

<body>

	<canvas id="bg"></canvas>
	<img id="buttonpress" src="buttonpress.png"/>
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
@font-face {
    font-family: typoRound;
    src: url(./fonts/Typo_Round.otf);
}
@font-face {
    font-family: alphaMale;
    src: url(./fonts/AlphaMaleModern.ttf);
}
@font-face {
    font-family: prototype;
    src: url(./fonts/Prototype.ttf);
}
@font-face {
    font-family: microFLF;
    src: url(./fonts/MicroFLF.ttf);
}
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
	position:fixed;
	height:100%;
	width:100%;
	top:0;
	left:0;
	z-index:-1000;
}

#buttonpress{
	position:fixed;
	top:25vh;
	left:25vh;
	width:50vh;
	height:50vh;
	z-index: 9000;
}

#content{
	z-index: 0;
	height:100vh;
	width:100vh;
	margin:0;
	background-color: rgba(0,0,0,0);
	display:none;

}

#card{
	width:40vh;
	height:40vh;
	display:flex;
	flex-direction:column;
	align-items:center;
	position:relative;
	opacity:0;
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
	box-shadow: 5px 10px 10px grey;
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
	margin-top:1vh;
	margin-left:2vh;
	background-color:rgba(10,10,10,0.96);
	border-radius:5vh;
	border:1vh double white;
	color:white;
	width:50vh;
	height:60vh;
	
	transform:rotate(3deg);
	opacity: 0;
}

.about{
	color:white;
	display:flex;
}

#about1{
	font-family:prototype;
	margin-bottom: 5vh;
}

#about2{
	font-family:microFLF;
	position:absolute;
	top:8vh;
	display:flex;
	flex-wrap: wrap;
}

.word{
	display:flex;
}

.invisible{
	visibility: hidden;
}

.biggerChar{
	font-size:4vh;
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

	//-------------   ButtonPress ---------------

	$("#buttonpress").click(function(){
		$("#buttonpress").css("display","none");
		$("#content").css("display","flex");
		$("#content").css("display","flex");
		uncover();

		setTimeout(function(){elementVisibilityLoading($("#card"),1);},500);
		setTimeout(function(){elementVisibilityLoading($("#about"),2);},700);
	});

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
    var cptVisibility=[];
    cptVisibility["elem1"] = 0;
    cptVisibility["elem2"] = 0;
    function elementVisibilityLoading(element,idcpt){
    	if (cptVisibility["elem"+idcpt] < 100){
    		//cptVisibility["elem"+idcpt] += Math.floor((Math.random() * 10) + 1);
    		cptVisibility["elem"+idcpt]++;
    		if (cptVisibility["elem"+idcpt]>100)
    			cptVisibility["elem"+idcpt] = 100;
    		//nextStepDelay = Math.floor((Math.random() * 10) + 1)*20;
    		nextStepDelay = 1;
    		element.css("opacity",cptVisibility["elem"+idcpt]/100);
    		setTimeout(function(){elementVisibilityLoading(element,idcpt)},nextStepDelay);
    	}
    }

    function uncover(){
    	setTimeout(function(){fill_about1();},1500);
    }
    about1_text = "     Hello, everybody !";
    about2_text = "  I am a 3rd year IT student, actually learning in Licence pro DIM at Annecy (France). It teaches JS tricks and mobile stuff, in order to form competents and agile web developpers.                            I like to test and experiment new things, but what I enjoy the most is to put into practice my knowledge.                              Have a check on my apps list in the bottom of this page !";
    var cpta = -1;
    var cptc = 1;
    var cptw = 1;
    function fill_about1(){
    	cpta = -1;
    	about1_text = about1_text.replace(/ /g,"_");
    	var arrValues = about1_text.split('');
    	var fill_about1 = setInterval(function(){
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
				clearTimeout(fill_about1);
				fill_about2();
			}
    	},15);
    }

    function fill_about2(){
    	cpta = -1;
    	about2_text = about2_text.replace(/ /g,"_");
    	var arrValues = about2_text.split('');
    	var fill_about2 = setInterval(function(){
			cpta ++;
			if (cpta < arrValues.length){
				if (arrValues[cpta] === "_"){
					word = $("<div/>");
					word.addClass("wordnb"+cptw);
					cptw++;
				}
	    		char = $("<div/>");
	    		char.addClass("char")
	    			.addClass("char2nb"+cptc);
	    		char.append(arrValues[cpta]);
	    		if (arrValues[cpta] === "_"){
	    			char.addClass("invisible");
	    		}
	    		word.append(char)
	    			.addClass("word");
	    		$("#about2").append(word);
	    		cptc++;
			}else{
				clearTimeout(fill_about2);

				setTimeout(function(){aboutTitleCursor();},2000);
				setTimeout(function(){randomColorWord(0);},2500);
				setTimeout(function(){randomColorWord2(0);},3000);
				setTimeout(function(){randomColorWord3(0);},3500);
				//setTimeout(function(){aboutTitleCursor2();},5000);
			}
    	},5);
    }

    cptacd = 0;
    function aboutTitleCursor(){
    	setInterval(function(){
    		$(".charnb"+cptacd).removeClass("biggerChar");
    		cptacd++;
    		if (cptacd > $(".char").length)
    			cptacd = 0;
    		$(".charnb"+cptacd).addClass("biggerChar");
    	},50);
    }

    cptacd2 = 0;
    function aboutTitleCursor2(){
    	setInterval(function(){
    		$(".charnb"+cptacd2).removeClass("biggerChar");
    		cptacd2++;
    		if (cptacd2 > $(".char").length)
    			cptacd2 = 0;
    		$(".charnb"+cptacd2).addClass("biggerChar");
    	},40);
    }

    function randomColorWord(previousWordNb){
    	$(".wordnb"+previousWordNb).css("color","white");
    	newWordNb = Math.floor((Math.random() * (cptw-1)) + 1);
    	NextRCWDelay = Math.floor((Math.random() * 50) + 1)+ 50;
    	$(".wordnb"+newWordNb).css("color","grey");
    	setTimeout(function(){randomColorWord(newWordNb);},NextRCWDelay*10);
    }

    function randomColorWord2(previousWordNb2){
    	$(".wordnb"+previousWordNb2).css("color","white");
    	newWordNb2 = Math.floor((Math.random() * (cptw-1)) + 1);
    	NextRCWDelay2 = Math.floor((Math.random() * 50) + 1)+ 50;
    	$(".wordnb"+newWordNb2).css("color","grey");
    	setTimeout(function(){randomColorWord2(newWordNb2);},NextRCWDelay2*10);
    }

    function randomColorWord3(previousWordNb3){
    	$(".wordnb"+previousWordNb3).css("color","white");
    	newWordNb3 = Math.floor((Math.random() * (cptw-1)) + 1);
    	NextRCWDelay3 = Math.floor((Math.random() * 50) + 1)+ 50;
    	$(".wordnb"+newWordNb3).css("color","grey");
    	setTimeout(function(){randomColorWord3(newWordNb3);},NextRCWDelay3*10);
    }

    aboutMarginTop = "3vh";
    var aboutWaveAnim = setInterval(function(){
    	if (aboutMarginTop == "3vh")
    		aboutMarginTop = "4vh";
    	else
    		aboutMarginTop = "3vh";
    	$("#about").animate({
    		marginTop:aboutMarginTop
    	},500);
    },500);

    cardMarginTop = "2vh";
    var cardWaveAnim = setInterval(function(){
    	if (cardMarginTop == "2vh")
    		cardMarginTop = "3vh";
    	else
    		cardMarginTop = "2vh";
    	$("#card").animate({
    		marginTop:cardMarginTop
    	},550);
    },550);

</script>
