<!DOCTYPE html>
<html>
	<head>
		<title>Linea del tiempo</title>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<meta name="description" content="Prueba para blackcrawler: linea del tiempo">

		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
		<link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

		<style>
			* {
				box-sizing: border-box;
			}

			/* Set a background color */
			body {
				background-color: #c53211;
				font-family: Helvetica, sans-serif;
			}

			footer {
				background-color: #2c2c2c;
				color: white;
				padding: 10px;
				bottom: 0;
				width: 100%;
		    }

		    nav{
		    	background-color: #2c2c2c;
		    }

		    hr{
		    	border: 0.01em solid black;
		    }

		    .agregar{
		    	border-radius: 8px;
		    	background-color: #1d65ac;
		    	border: none;
		    	color: white;
		    	padding: 0.6em 0.6em;
		    	text-align: center;
		    	font-weight: bold;
		    }

			/* The actual timeline (the vertical ruler) */
			.timeline {
				position: relative;
				max-width: 1200px;
				margin: 0 auto;
			}

			/* The actual timeline (the vertical ruler) */
			.timeline::after {
				content: '';
				position: absolute;
				width: 0.5em;
				background-color: white;
				top: 0;
				bottom: 0;
				left: 50%;
				margin-left: -3px;
			}

			/* Container around content */
			.container {
				padding: 10px 40px;
				position: relative;
				background-color: inherit;
				width: 50%;
			}

			/* The circles on the timeline */
			.container::after {
				content: '';
				position: absolute;
				width: 25px;
				height: 25px;
				right: -17px;
				background-color: white;
				top: 15px;
				border-radius: 50%;
				z-index: 1;
			}

			/* Place the container to the left */
			.left {
				left: -19em;
			}

			/* Place the container to the right */
			.right {
				left: 18em;
			}

			/* Add arrows to the left container (pointing right) */
			.left::before {
				content: " ";
				height: 0;
				position: absolute;
				top: 1.2em;
				width: 0;
				z-index: 1;right: 30px;
				border: medium solid white;
				border-width: 10px 0 10px 10px;
				border-color: transparent transparent transparent white;
			}

			/* Add arrows to the right container (pointing left) */
			.right::before {
				content: " ";
				height: 0;
				position: absolute;
				top: 1.2em;
				width: 0;
				z-index: 1;
				left: 1.86em;
				border: medium solid white;
				border-width: 10px 10px 10px 0;
				border-color: transparent white transparent transparent;
			}

			/* Fix the circle for containers on the right side */
			.right::after {
				left: 0em;
			}

			/* The actual content */
			.content {
				padding: 0.6em 0.9em;
				background-color: white;
				position: relative;
				border-radius: 6px;
			}

			/* Media queries - Responsive timeline on screens less than 600px wide */
			@media screen and (max-width: 1200px) {

				/* Place the timelime to the left */
				.timeline::after {
					left: 31px;
				}

				/* Full-width containers */
				.container {
					width: 100%;
					padding-left: 70px;
					padding-right: 25px;
				}

				/* Make sure that all arrows are pointing leftwards */
				.container::before {
					left: 60px;
					border: medium solid white;
					border-width: 10px 10px 10px 0;
					border-color: transparent white transparent transparent;
				}

				/* Make sure all circles are at the same spot */
				.left::after, .right::after {
					left: 1.2em;
				}

				/* Make all right containers behave like the left ones */
				.right {
					left: 0em;
				}

				.left {
					left: 0em;
				}
			}
		</style>
	</head>
	