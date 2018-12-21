<!doctype html>
<html lang="pt-br">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="styletwo.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	
	<script src="../js/validade_Fields.js"></script>
	<script  src="../js/jquery-imask.js" ></script>
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<script type="text/javascript" src="../js/grafico.js" ></script>

	<title>SGP</title>
	<script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      <?php $n1=130 ?>
      var n1 = <?php echo $n1 ?>;
      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Quantidade', 'modulos (in millions)'],
          ['Vagas', 240], ['Alunos ativos', n1]

        ]);

        var options = {
          title: '',
          legend: 'none',
          pieSliceText: 'label',
          slices: {  4: {offset: 0.2},
                    12: {offset: 0.3},
                    14: {offset: 0.4},
                    15: {offset: 0.5},
          },
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        chart.draw(data, options);
      }
    </script>

</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="#">SGP</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="home.php">Inicio <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="record.php">Cadastro</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="search.php">Pequisar</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="search_pedagogico.php">Pedagógico</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="classes.php">Cadastrar Turma</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="classes2.php">Pesquisar por Turma</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="quadroHorario.php">Quadro de Horário</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="logOut.php">Sair</a>
				</li>
			</ul>
		</div>
	</nav>