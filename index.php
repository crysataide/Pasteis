<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="reset.css" />
		<link rel="stylesheet" href="style.css" />
		<!-- <link rel="icon" href="x-tuchaua.ico"> -->
		<title>Pastéis</title>
	</head>
    <body>
		<div class="titulo">
			<!-- <h2>Monte seu pedido de pastéis</h2> -->
		</div>
		<div class="container">
			<div class="box">
				<form id="form">
					<div class="box__title">
						<h3>PASTÉIS</h3>
					</div>
					<div class="form__questions">
						<div class="form-control">
							<label for="amount">Simples</label>
							<input type="text" id="valorXsalada" placeholder="0" onchange="validInput(this)" />
						</div>
						<div class="form-control">
							<label for="amount">Pastelão</label>
							<input type="text" id="valorXsalada" placeholder="0" onchange="validInput(this)" />
						</div>
					</div>
				</form>
			</div>
		</div>
		<!-- <script src="script.js"></script> -->
	</body>
</html>
