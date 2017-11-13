<body>

	<div class="flip-container" ontouchstart="this.classList.toggle('hover');">
		<div class="flipper">
			<div class="front">
					<img src="./sp/sp_diag_center.jpg"/>
			</div>
			<div class="back">
					Sum text
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

.flip-container:hover .flipper, .flip-container.hover .flipper, .flip-container.flip .flipper {
	transform: rotateY(90deg);
	transition:0.5s ease all;
}

</style>
<script>

	//SP AVATAR
	//http://www.sp-studio.de/



	//FLIP 
	//FROM https://davidwalsh.name/css-flip

	/* entire container, keeps perspective */
	.flip-container {
		perspective: 1000px;
	}
		/* flip the pane when hovered */
		.flip-container:hover .flipper, .flip-container.hover .flipper {
			transform: rotateY(180deg);
		}

	.flip-container, .front, .back {
		width: 320px;
		height: 480px;
	}

	/* flip speed goes here */
	.flipper {
		transition: 0.6s;
		transform-style: preserve-3d;

		position: relative;
	}

	/* hide back of pane during swap */
	.front, .back {
		backface-visibility: hidden;

		position: absolute;
		top: 0;
		left: 0;
	}

	/* front pane, placed above back */
	.front {
		z-index: 2;
		/* for firefox 31 */
		transform: rotateY(0deg);
	}

	/* back, initially hidden pane */
	.back {
		transform: rotateY(180deg);
	}



</script>
