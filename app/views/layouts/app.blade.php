<!DOCTYPE html>
<html>
<head>
	<title>EasyHome</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300" type="text/css">
	<style type="text/css">
		body {
	width: 100wh;
	height: 90vh;
	color: #fff;
	background: linear-gradient(-50deg, #FF7752, #CC3C7E, #23A6D5, #AAD5AB);
	background-size: 400% 400%;
	-webkit-animation: Gradient 10s ease infinite;
	-moz-animation: Gradient 10s ease infinite;
	animation: Gradient 10s ease infinite;
}

@-webkit-keyframes Gradient {
	0% {
		background-position: 0% 50%
	}
	50% {
		background-position: 100% 50%
	}
	100% {
		background-position: 0% 50%
	}
}

@-moz-keyframes Gradient {
	0% {
		background-position: 0% 50%
	}
	50% {
		background-position: 100% 50%
	}
	100% {
		background-position: 0% 50%
	}
}

@keyframes Gradient {
	0% {
		background-position: 0% 50%
	}
	50% {
		background-position: 100% 50%
	}
	100% {
		background-position: 0% 50%
	}
}

body {
  overflow: hidden;
}
@keyframes move {
  0% {left: 0%;}
  75% {left:100%;}
  100% {left:100%;}
}
	</style>
	<script src="https://code.jquery.com/jquery-1.12.4.js" integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU=" crossorigin="anonymous"></script>
	<script type="text/javascript">
	setTimeout(
   		function(){
     		$('#boas-vindas').replaceWith($('#msg'));
      		$('#msg').show();;
      	},
   		2000
	);
	</script>
</head>
</head>
<body>

<center>
	<img src="https://image.freepik.com/free-vector/smart-home-background-in-flat-style_23-2147851434.jpg" width=500px" height="500px" text-align="center">
</center>

<center>
	<div id="texto">
		<h1>
			<div id="boas-vindas" >Easy Home</div>
			<div id="msg">Seja Bem-vindo ao EasyHome, seu Framework para Automação Residencial</div>
		</h1> 
	</div>
</center>

</body>
</html>

