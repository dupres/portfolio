<head>

<script
  src="https://code.jquery.com/jquery-3.2.1.js"
  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous"></script>
<title>Portfolio</title>
<link rel="icon" href="favicon.ico" />
</head>

<body>

	<canvas id="bg"></canvas>

	<div id="buttonpressdiv"><img id="buttonpress" src="buttonpress.png"/></div>	
	<div id="content">
		<div id="summary">
			<button class='summaryButton' onclick="reach('page1');">Me</button>
			<button class='summaryButton' onclick="reach('page2');">My skills</button>
			<button class='summaryButton' onclick="reach('page3');">Experiences</button>
			<button class='summaryButton' onclick="reach('page4');">Projects</button>
			<a href='Stephen_DUPRE_CV_3.0_eng.pdf' target="_blank"><button class='CVButton'>CV</button></a>
			<div>
				<button class='summaryButton' id="themeButton" onclick="changeTheme();"></button>
				<div style="border:1px solid white;" id="dropCpt"></div>
			</div>



		</div>
		<div id="pages">
			<div id="page1" class="page">
				<div id="card">
					<div id="card_face"></div>
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

			<div id="page2" class="page">
				<table id="techSkills">
					<tr><th id="techSkillsTitle" colspan="2">Technical skills</th></tr>

					<tr class='web' ><td class="techSkillSubtitle" coslpan="3">Web languages</td></tr>
					<tr class='web'><td class="skillname">PHP</td><td class="skilllvl weblvl">8</td><td class="skilldef">Data</td></tr>
					<tr class='web'><td class="skillname">HTML / CSS</td><td class="skilllvl weblvl">6</td><td class="skilldef">Design</td></tr>
					<tr class='web'><td class="skillname">Javascript</td><td class="skilllvl weblvl">7</td><td class="skilldef">Animations</td></tr>

					<tr class='sql'><td class="techSkillSubtitle" coslpan="3">SQL languages</td></tr>
					<tr class='sql'><td class="skillname">MySQL</td><td class="skilllvl sqllvl">6</td><td class="skilldef">Data transmission</td></tr>
					<tr class='sql'><td class="skillname">PostegreSQL</td><td class="skilllvl sqllvl">5</td><td class="skilldef"></td></tr>
					<tr class='sql'><td class="skillname">NoSQL</td><td class="skilllvl sqllvl">4</td><td class="skilldef"></td></tr>

					<tr class='hard'><td class="techSkillSubtitle" coslpan="3">Hardcode languages</td></tr>
					<tr class='hard'><td class="skillname">C / C++</td><td class="skilllvl hardlvl">3</td><td class="skilldef">Basic programming</td></tr>
					<tr class='hard'><td class="skillname">C#</td><td class="skilllvl hardlvl">5</td><td class="skilldef">Object oriented programming</td></tr>
					<tr class='hard'><td class="skillname">Java</td><td class="skilllvl hardlvl">4</td><td class="skilldef">Java</td></tr>
					<tr class='hard'><td class="skillname">Python</td><td class="skilllvl hardlvl">3</td><td class="skilldef">Data processing</td></tr>
					<tr class='hard'><td class="skillname">VBA</td><td class="skilllvl hardlvl">6</td><td class="skilldef">Excel spreadsheets</td></tr>

					<tr class='model'><td class="techSkillSubtitle" coslpan="3">Models and methods</td></tr>
					<tr class='model'><td class="skillname">UML</td><td class="skilllvl modellvl">5</td><td class="skilldef">Basic programming</td></tr>
					<tr class='model'><td class="skillname">MERISE</td><td class="skilllvl modellvl">5</td><td class="skilldef">Object oriented programming</td></tr>

					<tr class='oper'><td class="techSkillSubtitle" coslpan="3">Operating systems</td></tr>
					<tr class='oper'><td class="skillname">Windows</td><td class="skilllvl operlvl">9</td><td class="skilldef"></td></tr>
					<tr class='oper'><td class="skillname">Linux</td><td class="skilllvl operlvl">3</td><td class="skilldef"></td></tr>
					<tr class='finalRow'><td>This is the final row down !</td><td class="finalGauge">Hidden gauge</td><td/></tr>

				</table>
			</div>

			<div id="page3" class="page">
				<div id="page3content">
					<div class="expTitle">Qualifications</div>
					<table id="qualifications">
						<tr><td>Soon</td><td><strong>LP DIM (Professional Bachelor’s Degree in multi-plateform software development) - Sandwich course</strong><br/>CCI Annecy / University of Savoy / IUT Annecy—Annecy-le-Vieux, France</td></tr>
						<tr><td>June, 2017</td><td><strong>DUT Informatique (2-year university diploma in computer science)</strong><br/>University of Savoy / IUT Annecy—Annecy-le-Vieux, France</td></tr>
						<tr id="explastrow"><td>June, 2015</td><td><strong>French Baccalaureate (High School diploma) with honors</strong><br/>Hector Berlioz High School—La Côte St André, France</td></tr>
					</table>
					<div class="expTitle">Works</div>
					<table id="works">
						<tr><td>September 2017 to June 2018<br/>(1 school year, 10 months)</td><td><strong><i>Sandwich course :</i> PHP development on an ERP trade software package.</strong><br/><a target="_blank" href="http://www.isisolutions.fr">IsiSolutions</a>—Cran-Gevrier, France</td></tr>
						<tr><td>April to June 2017<br/>(3 months)</td><td><strong><i>IT internship :</i> Design and development of VBA tools for the operational mar-keting department.</strong><br/><a target="_blank" href="http://www.somfy.com">SOMFY SAS</a>,<a target="_blank" href="http://www.patriarche.fr/projet/somfy-centre-rd"> R&amp;D Center</a>—Cluses, France</td></tr>
						<tr><td>July to August 2014, 2015, 2016<br/>(2 months each year during 3 years)</td><td><strong><i>Heating engineering labour :</i> Building, destruction, maintenance of factory fur-naces and other manual tasks.</strong><br/><a target="_blank" href="http://www.e-pro.fr/isere/fabrication-de-fours-et-bruleurs/tdma_f813494">TDMA</a>—Apprieu, France<br/><a target="_blank" href="http://www.ferbecketfumitherm.com/">Fumitherm</a>—Les Eparres, France</td></tr>
						<tr><td>June 2013<br/>(1 month)</td><td><strong><i>Computer repairer aid :</i> Computer installation (hardware), software update, peripheral sales and advice.</strong><br/><a target="_blank" title="TDMA does not have a website anymore" href="http://www.e-pro.fr/isere/fabrication-de-fours-et-bruleurs/tdma_f813494">TDMA Informatique</a>—Apprieu, France</td></tr>
						<tr><td>March 2012<br/>(2 weeks)</td><td><strong><i>Dog breeder aid :</i> Care, breeding, contests. Website update.</strong><br/><a title="Patrick LARGUET is not dog breeder anymore"><a target="_blank" href="https://www.societe.com/societe/sci-daisy-533518999.html">Patrick LARGUET</a>, dog breeder</a>—Champier, France</td></tr>
					</table>
				</div>
			</div>

			<div id="page4" class="page">
				
			</div>
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
@font-face{
	font-family: diagon;
	src: url(./fonts/Diagon.otf);
}
@font-face{
	font-family: pixel;
	src: url(./fonts/Pixel.otf);
}
@font-face{
	font-family:bubbleboddy;
	src: url(./fonts/Bubbleboddy.ttf);
}
@font-face{
	font-family:Chocolate;
	src:url(./fonts/ChocolateBar.otf);
}
@font-face{
	font-family:komtit;
	src:url(./fonts/KOMTIT.ttf);
}
@font-face{
	font-family:MomTW;
	src:url(./fonts/MomTW.ttf);
}
@font-face{
	font-family:ASwirlVelvet;
	src:url(./fonts/ASwirlVelvet.ttf);
}
@font-face{
	font-family:linowrite;
	src:url(./fonts/linowrite.ttf);
}
@font-face{
	font-family: TravelingTypewriter;
	src:url(./fonts/TravelingTypewriter.ttf);
}
@font-face{
	font-family:dkjambo;
	src:url(./fonts/DKJambo.otf);
}
@font-face{
	font-family:jbetude;
	src:url(./fonts/JBEtude.ttf);
}
body{
	display:flex;
	flex-direction:row;
	padding:0;
	margin:0;
	font-size:3vh;
	overflow-x: none;
	overflow-y: none;

}
*{
	outline:0;
	overflow:none;
}
a{
	cursor:pointer;
}
button{
	cursor:pointer;
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
#content{
	z-index:0;
	/*height:1000vh;*/
	height:96vh;
	width:160vh;
	margin:0;
	background-color: rgba(0,0,0,0);
	display:none;
	flex-direction:row;
}
#summary{
	height:100%;
	width:20%;
	/*background-color:rgba(255,255,255,0.5);*/
	display:none;
	border-left:1vh double white;
	border-right:1vh double white;
	border-bottom:1vh double white;
	border-radius:0,0,60,60;
	display:flex;
	flex-direction:column;
	align-items:center;
	color:white;
}
.summaryButton {
  -webkit-border-radius: 60;
  -moz-border-radius: 60;
  border-radius: 10vh;
  font-family: Arial;
  color: #ffffff;
  font-size: 20px;
  padding: 1vh 2vh;
  /*border: solid #ffffff 1vh;*/
  text-decoration: none;
  margin-top:5vh;
  background-color: rgba(0,0,0,0);
  width:95%;
}

.summaryButton:hover {
  background: rgba(255,255,255,0.5);
  text-decoration: none;
}
.CVButton {
  -webkit-border-radius: 60;
  -moz-border-radius: 60;
  border-radius: 10vh;
  font-family: Arial;
  color: #ffffff;
  font-size: 20px;
  padding: 1vh 2vh;
  /*border: solid #ffffff 1vh;*/
  text-decoration: none;
  margin-top:10vh;
  background-color: rgba(255,255,255,0.25);
  width:20vh;
}

.CVButton:hover {
  background: rgba(255,255,255,0.5);
  text-decoration: none;
}
#pages{
	height:100%;
	width:80%;
}
#page1{
	display:flex;
	flex-direction:row;
	margin-top:10vh;
	height:80vh;
	padding-left:7vh;
}

#page2{
	display:none;
	padding-left:10vh;
	width:100%;
	background-color:rgba(0,0,0,0.85);
	font-weight:lighter;
}

#page3{
	display:none;
	padding-left:10vh;
	width:100%;
	background-color:rgba(0,0,0,0.85);
	font-family:linowrite;
}
.expTitle{
	border:1px dashed white;
	font-weight:bolder;
	color:white;
	margin-top:1vh;
}
#qualifications{
	/*padding-top:5vh;*/
	background-color:rgba(0,0,0,0.5);
}
#works{
	/*padding-top:5vh;*/
	background-color: rgba(0,0,0,0.5);
	padding-bottom:2vh;
}
#page3 td{
	padding:1vh;
	color:lightgrey;
}
#page3 a{
	text-decoration: none;
}
#page3 a:hover{
	text-decoration: underline;
}
#qualifications td{
	color:lightblue;
	border-bottom:1px dashed white;
}
#explastrow td{
	border-bottom:0px solid rgba(0,0,0,0);
}
#qualifications strong{
	color:dodgerblue;
	font-weight:normal;
}
#works td{
	border-bottom:1px dashed white;
	color:coral;
}
#works a{
	color:indianred;
}
#works i{
	font-weight:bold;
}
#works strong{
	font-weight: normal;
	color:lightcoral;
}
#buttonpressdiv{
	position:fixed;
	top:10vh;
	left:10vh;
	width:50vh;
	height:50vh;
	z-index: 9000;
}

#buttonpress{
	position:relative;
	top:0;
	left:0;
	width:100%;
	height:100%;
	z-index: 9001;
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

#card_face{
	background-color: rgba(255,255,0,0);
	position:absolute;
	top:0;
	left:0;
	width:100%;
	height:100%;
	z-index:10;
	transform:rotate(-3deg);
	cursor:pointer;
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
	cursor:pointer;
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
	margin-left:10vh;
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

.selectedWord{
	color:green;
	font-weight: bolder;
}

.char:hover{
	color:red;
}

#techSkills{
	/*background-color:white;*/
	color:white;
	font-size:2vh;
	margin-left:00vh;
	left:0vh;
	/*width:100%;*/
	width:115vh;
	/*transform:rotate(-1deg);*/
	/*width:100vh;*/
	border-left:1vh dotted white;
	padding-left:3vh;
	padding-top:5vh;
	padding-right:3vh;
	font-weight:lighter;
}

#techSkillsTitle{
	font-family:pixel;
	font-weight:lighter;
}

.web{
	font-family: dkjambo;
	font-size:25px;
	font-weight:lighter;
	font-size:2.5vh;
}
.sql{
	font-family:bubbleboddy;
	font-weight:lighter;
	font-size:3vh;
}
.hard{
	font-family:MomTW;
	font-weight:lighter;
}
.oper{
	font-family:komtit;
	font-weight:lighter;
}
.model{
	font-family:Chocolate;
	font-weight:lighter;
}

.webgauge{
	background-color: lightblue;
}

.sqlgauge{
	background-color: lightgreen;
}

.hardgauge{
	background-color: lightcoral;
}

.modelgauge{
	background-color: khaki;
}

.opergauge{
	background-color: lightgrey;
}

.techSkillSubtitle{
	/*text-decoration: underline;*/
	width:40vh;
	border-top:3px dotted white;
	/*font-weight:bolder;*/
	font-size:20px;
	text-decoration: underline;
}

.skillname{
	/*font-size:2vh;*/
	width:40vh;

}

.skilllvl{
	/*width:50vh;*/
	height:3vh;*
	/*width:70vh;*/
}

.skilldef{
	border-right:1vh double white;
	width:50vh;
        display:flex;
        flex-direction:row;
        align-items:right;
}

.finalRow{
	background-color:gray;
	visibility: hidden;
}

.finalGauge{
	background-color:white;
	width:50vh;
}

td{
	/*border:1px solid black;*/
	color:white;
}

th{
	font-size:3.5vh;
}

/* --------- Scrollbars ------------- */

::-webkit-scrollbar {
  width: 15px;
  height: 15px;
}
::-webkit-scrollbar-button {
  width: 0px;
  height: 0px;
}
::-webkit-scrollbar-thumb {
  background: #5768dd;
  border: 0px none #ffffff;
  border-radius: 100px;
}
::-webkit-scrollbar-thumb:hover {
  background: #8592e7;
}
::-webkit-scrollbar-thumb:active {
  background: #7460d5;
}
::-webkit-scrollbar-track {
  background: #666666;
  border: 4px solid #888888;
  border-radius: 100px;
}
::-webkit-scrollbar-track:hover {
  background: #666666;
}
::-webkit-scrollbar-track:active {
  background: #666666;
}
::-webkit-scrollbar-corner {
  background: transparent;
}
</style>



</style>

<script>

	//--------------------------------------------------------
	//					Themes
	//--------------------------------------------------------
	var themes = [
		["Monochrome",[[255,255,255]]],
		["Party",[[255,0,0],[0,0,255],[0,255,0],[255,255,0],[255,0,255],[0,255,255]]],
		["Mana",[[0,0,255],[212,241,255],[175,204,225],[90,147,199],[35,100,148],[17,72,122]]],
		["Lava",[[255,0,0],[255,255,0],[85,51,51],[204,68,34],[255,102,0],[255,255,68],[234,218,181]]],
		["Golden",[[255,255,0],[109,88,0],[167,135,0],[210,170,0],[236,191,0],[255,213,34],[216,183,75],[170,170,170]]],
		["Acid",[[0,255,0],[0,150,150],[0,255,150],[0,150,255],[111,255,0],[199,206,97],[43,226,58],[43,170,58]]],
		["Bloody",[[255,0,0],[30,0,0],[56,0,0],[77,0,0],[74,0,0],[111,0,0]]],
		["Chocolate",[[174,110,82],[167,103,76],[163,98,69],[161,90,60],[156,84,53],[210,105,30]]],
		["Nebula",[[0,145,255],[0,17,255],[0,2,34],[75,0,130],[138,43,226]]],
		["Portal",[[1,115,182],[255,120,47]]],
		["ClownFish",[[255,120,47],[255,255,255]]],
		["Nope",[[0,0,0]]]
	];
	var theme = 0;
	if (localStorage["theme"])
		theme = localStorage["theme"];
	$("#themeButton").text("Theme : "+themes[theme][0]);
	var colors = themes[theme][1];

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

	    // Background variables
	    var interval = 0;
	    var intervalPourRendreLesGensFous = 0;
	    var maxDropNb = 80;
	    var dropLuck = 10;
	    
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
	        if (Math.floor((Math.random() * dropLuck) + 1) == 1 && shots.length<maxDropNb){
	            posX = Math.floor((Math.random() * canvas.width) + 1);
	            color = colors[Math.floor((Math.random() * colors.length))];
	            speed = (Math.random() * 2) + 1;
	            shots[shots.length] = new Shot(posX,0,"bottom",1,color[0],color[1],color[2],speed);
	        }
	        $("#dropCpt").text("Drops:"+shots.length+"/"+maxDropNb);
	    },40);
	}

	var f_time = true;

	//-------------   ButtonPress ---------------

	$("#buttonpress").click(function(){
		$("#buttonpress").remove();
		$("#buttonpressdiv").remove();
		$("#content").css("display","flex");
		$("#content").css("display","flex");
		uncover();

		setTimeout(function(){elementVisibilityLoading($("#card"),1);},500);
		setTimeout(function(){elementVisibilityLoading($("#about"),2);},700);
		moveitCond = false;
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
    $("#card_face").on("mouseover",function(){
    	if (!(card_hover_firsttime)){
	    	if (card_hover_display){
		    	if (card_face == "front"){
		    		$("#card_hover").css("visibility","visible");
		    	}
		    }
		}
    });
    $("#card_face").on("mouseout",function(){
    	if (!(card_hover_firsttime)){
    		$("#card_hover").css("visibility","hidden");
    	}
    });


    // ------ Technical skills ------

    $.each($(".skilllvl"),function(key,value){
    	var skillCanvas = $("<canvas/>");

    });



    // -------------------------
    //			Uncover
    // -------------------------
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
    	$("#summary").slideDown("slow");
    }
    about1_text = "     Hello, everybody !";
    about2_text = "  I am a 3rd year IT student, actually learning in Licence pro DIM at Annecy (France). It teaches JS tricks and mobile stuff, in order to form competents and agile web developpers.                            I like to test and experiment new things, but what I enjoy the most is to put into practice my knowledge.                              Have a check on my apps list at the bottom of this page !";
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

				setTimeout(function(){aboutTitleCursor();},500);
				setTimeout(function(){randomColorWord(0);},1000);
				setTimeout(function(){randomColorWord2(0);},1500);
				setTimeout(function(){randomColorWord3(0);},2000);
				//setTimeout(function(){aboutTitleCursor2();},5000);
			}
    	},5);
    }

    // -----------------------------------
    //          Pagination
    // -----------------------------------
    var startPage = "page1";
    var pages = [];
    $.each($(".page"),function(){
    	pages.push($(this).attr("id"));
    });
    console.log(pages);
    function reach(region){
    	$.each(pages,function(key,value){
    		if (region!=value){
    			$("#"+value).slideUp();
    		}
    	});
    	$("#"+region).slideDown();
    }





    // -----------------------------------
    //			Effects
    // ----------------------------------

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

    function randomColorWord(previousWordNb){
    	$(".wordnb"+previousWordNb).removeClass("selectedWord");
    	newWordNb = Math.floor((Math.random() * (cptw-1)) + 1);
    	NextRCWDelay = Math.floor((Math.random() * 50) + 1)+ 50;
    	$(".wordnb"+newWordNb).addClass("selectedWord");
    	setTimeout(function(){randomColorWord(newWordNb);},NextRCWDelay*5);
    }

    function randomColorWord2(previousWordNb2){
    	$(".wordnb"+previousWordNb2).removeClass("selectedWord");
    	newWordNb2 = Math.floor((Math.random() * (cptw-1)) + 1);
    	NextRCWDelay2 = Math.floor((Math.random() * 50) + 1)+ 50;
    	$(".wordnb"+newWordNb2).addClass("selectedWord");
    	setTimeout(function(){randomColorWord2(newWordNb2);},NextRCWDelay2*5);
    }

    function randomColorWord3(previousWordNb3){
    	$(".wordnb"+previousWordNb3).removeClass("selectedWord");
    	newWordNb3 = Math.floor((Math.random() * (cptw-1)) + 1);
    	NextRCWDelay3 = Math.floor((Math.random() * 50) + 1)+ 50;
    	$(".wordnb"+newWordNb3).addClass("selectedWord");
    	setTimeout(function(){randomColorWord3(newWordNb3);},NextRCWDelay3*5);
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
    },499);

    cardMarginTop = "2vh";
    var cardWaveAnim = setInterval(function(){
    	if (cardMarginTop == "2vh")
    		cardMarginTop = "3vh";
    	else
    		cardMarginTop = "2vh";
    	$("#card").animate({
    		marginTop:cardMarginTop
    	},550);
    },549);

    var t = 0;
    var moveitCond = true;
	function moveit() {
	    t += 0.05;
	    var r = 50;         // radius
	    var xcenter = 100;   // center X position
	    var ycenter = 100;   // center Y position
	    var newLeft = Math.floor(xcenter + (r * Math.cos(t)));
	    var newTop = Math.floor(ycenter + (r * Math.sin(t)));
	    $('#buttonpress').animate({
	        top: newTop,
	        left: newLeft,
	    }, 1, function() {
	    	if (moveitCond)
		        moveit();
	    });
	}
	moveit();

	//----- Technical skills -------------------------
	var cptGauge = 0;
	var gaugeWide = [];
	$.each($(".skilllvl"),function(){
		lvl = $(this).text();
		gauge = $("<div/>");
		gauge.addClass("gauge"+cptGauge)
			.css({
			"color":"rgba(0,0,0,0)",
			"height":"100%",
			"width":(lvl*5)+"vh",
			"border-radius":"0px 5px 5px 0px"
		})
			.text(true);
		if ($(this).hasClass("weblvl"))
			gauge.addClass("webgauge");
		if ($(this).hasClass("sqllvl"))
			gauge.addClass("sqlgauge");
		if ($(this).hasClass("hardlvl"))
			gauge.addClass("hardgauge");
		if ($(this).hasClass("modellvl"))
			gauge.addClass("modelgauge");
		if ($(this).hasClass("operlvl"))
			gauge.addClass("opergauge");
		
		$(this).text("").append(gauge);
		gaugeWide[cptGauge] = false;
		cptGauge++;
		
	});
	
	var gaugeMore = 0.1;

	var gaugeDelay0 = Math.floor((Math.random() * 500) + 700);
	setInterval(function(){
		var gaugeSize0 = 8;
		if ($(".gauge0").text()=="true"){
			$(".gauge0").text("false");
			gaugeSize0+=gaugeMore;
		}else{
			$(".gauge0").text("true");
			gaugeSize0-=gaugeMore;
		}
			$(".gauge0").animate({width:gaugeSize0*5+"vh"},gaugeDelay0);
	},gaugeDelay0);

	var gaugeDelay1 = Math.floor((Math.random() * 500) + 700);
	setInterval(function(){
		var gaugeSize1 = 6;
		if ($(".gauge1").text()=="true"){
			$(".gauge1").text("false");
			gaugeSize1+=gaugeMore;
		}else{
			$(".gauge1").text("true");
			gaugeSize1-=gaugeMore;
		}
			$(".gauge1").animate({width:gaugeSize1*5+"vh"},gaugeDelay1);
	},gaugeDelay1);

	var gaugeDelay2 = Math.floor((Math.random() * 500) + 700);
	setInterval(function(){
		var gaugeSize2 = 7;
		if ($(".gauge2").text()=="true"){
			$(".gauge2").text("false");
			gaugeSize2+=gaugeMore;
		}else{
			$(".gauge2").text("true");
			gaugeSize2-=gaugeMore;
		}
			$(".gauge2").animate({width:gaugeSize2*5+"vh"},gaugeDelay2);
	},gaugeDelay2);

	var gaugeDelay3 = Math.floor((Math.random() * 500) + 700);
	setInterval(function(){
		var gaugeSize3 = 6;
		if ($(".gauge3").text()=="true"){
			$(".gauge3").text("false");
			gaugeSize3+=gaugeMore;
		}else{
			$(".gauge3").text("true");
			gaugeSize3-=gaugeMore;
		}
			$(".gauge3").animate({width:gaugeSize3*5+"vh"},gaugeDelay3);
	},gaugeDelay3);

	var gaugeDelay4 = Math.floor((Math.random() * 500) + 700);
	setInterval(function(){
		var gaugeSize4 = 5;
		if ($(".gauge4").text()=="true"){
			$(".gauge4").text("false");
			gaugeSize4+=gaugeMore;
		}else{
			$(".gauge4").text("true");
			gaugeSize4-=gaugeMore;
		}
			$(".gauge4").animate({width:gaugeSize4*5+"vh"},gaugeDelay4);
	},gaugeDelay4);

	var gaugeDelay5 = Math.floor((Math.random() * 500) + 700);
	setInterval(function(){
		var gaugeSize5 = 4;
		if ($(".gauge5").text()=="true"){
			$(".gauge5").text("false");
			gaugeSize5+=gaugeMore;
		}else{
			$(".gauge5").text("true");
			gaugeSize5-=gaugeMore;
		}
			$(".gauge5").animate({width:gaugeSize5*5+"vh"},gaugeDelay5);
	},gaugeDelay5);

	var gaugeDelay6 = Math.floor((Math.random() * 500) + 700);
	setInterval(function(){
		var gaugeSize6 = 3;
		if ($(".gauge6").text()=="true"){
			$(".gauge6").text("false");
			gaugeSize6+=gaugeMore;
		}else{
			$(".gauge6").text("true");
			gaugeSize6-=gaugeMore;
		}
			$(".gauge6").animate({width:gaugeSize6*5+"vh"},gaugeDelay6);
	},gaugeDelay6);

	var gaugeDelay7 = Math.floor((Math.random() * 500) + 700);
	setInterval(function(){
		var gaugeSize7 = 5;
		if ($(".gauge7").text()=="true"){
			$(".gauge7").text("false");
			gaugeSize7+=gaugeMore;
		}else{
			$(".gauge7").text("true");
			gaugeSize7-=gaugeMore;
		}
			$(".gauge7").animate({width:gaugeSize7*5+"vh"},gaugeDelay7);
	},gaugeDelay7);

	var gaugeDelay8 = Math.floor((Math.random() * 500) + 700);
	setInterval(function(){
		var gaugeSize8 = 4;
		if ($(".gauge8").text()=="true"){
			$(".gauge8").text("false");
			gaugeSize8+=gaugeMore;
		}else{
			$(".gauge8").text("true");
			gaugeSize8-=gaugeMore;
		}
			$(".gauge8").animate({width:gaugeSize8*5+"vh"},gaugeDelay8);
	},gaugeDelay8);

	var gaugeDelay9 = Math.floor((Math.random() * 500) + 700);
	setInterval(function(){
		var gaugeSize9 = 3;
		if ($(".gauge9").text()=="true"){
			$(".gauge9").text("false");
			gaugeSize9+=gaugeMore;
		}else{
			$(".gauge9").text("true");
			gaugeSize9-=gaugeMore;
		}
			$(".gauge9").animate({width:gaugeSize9*5+"vh"},gaugeDelay9);
	},gaugeDelay9);

	var gaugeDelay10 = Math.floor((Math.random() * 500) + 700);
	setInterval(function(){
		var gaugeSize10 = 6;
		if ($(".gauge10").text()=="true"){
			$(".gauge10").text("false");
			gaugeSize10+=gaugeMore;
		}else{
			$(".gauge10").text("true");
			gaugeSize10-=gaugeMore;
		}
			$(".gauge10").animate({width:gaugeSize10*5+"vh"},gaugeDelay10);
	},gaugeDelay10);

	var gaugeDelay11 = Math.floor((Math.random() * 500) + 700);
	setInterval(function(){
		var gaugeSize11 = 5;
		if ($(".gauge11").text()=="true"){
			$(".gauge11").text("false");
			gaugeSize11+=gaugeMore;
		}else{
			$(".gauge11").text("true");
			gaugeSize11-=gaugeMore;
		}
			$(".gauge11").animate({width:gaugeSize11*5+"vh"},gaugeDelay11);
	},gaugeDelay11);

	var gaugeDelay12 = Math.floor((Math.random() * 500) + 700);
	setInterval(function(){
		var gaugeSize12 = 5;
		if ($(".gauge12").text()=="true"){
			$(".gauge12").text("false");
			gaugeSize12+=gaugeMore;
		}else{
			$(".gauge12").text("true");
			gaugeSize12-=gaugeMore;
		}
			$(".gauge12").animate({width:gaugeSize12*5+"vh"},gaugeDelay12);
	},gaugeDelay12);

	var gaugeDelay13 = Math.floor((Math.random() * 500) + 700);
	setInterval(function(){
		var gaugeSize13 = 9;
		if ($(".gauge13").text()=="true"){
			$(".gauge13").text("false");
			gaugeSize13+=gaugeMore;
		}else{
			$(".gauge13").text("true");
			gaugeSize13-=gaugeMore;
		}
			$(".gauge13").animate({width:gaugeSize13*5+"vh"},gaugeDelay13);
	},gaugeDelay13);
	
	var gaugeDelay14 = Math.floor((Math.random() * 500) + 700);
	setInterval(function(){
		var gaugeSize14 = 3;
		if ($(".gauge14").text()=="true"){
			$(".gauge14").text("false");
			gaugeSize14+=gaugeMore;
		}else{
			$(".gauge14").text("true");
			gaugeSize14-=gaugeMore;
		}
			$(".gauge14").animate({width:gaugeSize14*5+"vh"},gaugeDelay14);
	},gaugeDelay14);

	var gaugeDelayFinal = 800;
	setInterval(function(){
		var gaugeSizeFinal = 10;
		if ($(".finalGauge").text()=="true"){
			$(".finalGauge").text("false");
			gaugeSizeFinal+=gaugeMore;
		}else{
			$(".finalGauge").text("true");
			gaugeSizeFinal-=gaugeMore;
		}
			$(".finalGauge").animate({width:gaugeSizeFinal*5+"vh"},gaugeDelayFinal);
	},gaugeDelayFinal);

	p3MarginTop = "3vh";
        var p3WaveAnim = setInterval(function(){
    	    if (p3MarginTop == "3vh")
    		p3MarginTop = "4vh";
    	    else
    		p3MarginTop = "3vh";
    	    $("#page3content").animate({
    		marginTop:p3MarginTop
    	    },1000);
        },999);

//------------------------------------------------
//				Theme change
//------------------------------------------------

function changeTheme(){
	theme++;
	if (theme>=themes.length)
		theme = 0;
	$("#themeButton").text("Theme : "+themes[theme][0]);
	localStorage["theme"] = theme;
	colors = themes[theme][1];
}


</script>
		