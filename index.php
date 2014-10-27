<?php
	
	$rota = parse_url("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
	$file = str_replace("/", "", $rota['path']);	
	
	function rota($path, $file) {
		
		$arquivo = $path . $file . ".php";
		
		$rotas = [
						"home"     => "paginas/home.php",
						"empresa"  => "paginas/empresa.php",
						"produtos" => "paginas/produtos.php",
						"servicos" => "paginas/servicos.php",
						"contato"  => "paginas/contato.php"
					];
					
		$rotaDefault = ["padrao" => "paginas/home.php"];
		
		# se o file não estiver setado a rota padrão é exibida		
		if(!$file) {
			require_once($rotaPadrao["padrao"]);
		}		
		
		# se o arquivo existir e estiver mapeado na rota		
		if(file_exists($arquivo) && array_key_exists($file, $rotas)) {
			require_once($arquivo);
		} else {
			echo "Página não encontrada. Erro: 404.";		
		}
	}	
	
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="rafael" >

    <title>Primeiro Projeto - PHP Foundation</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/logo-nav.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                    <img src="http://placehold.it/150x50&text=Logo" alt="">
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="home">Home</a>
                    </li>
                    <li>
                        <a href="empresa">Empresa</a>
                    </li>
		    				<li>
                        <a href="servicos">Serviços</a>
                    </li>
		    			  <li>
                        <a href="produtos">Produtos</a>
                    </li>
                    <li>
                        <a href="contato">Contato</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                
                <?php 
								
						rota("paginas/", $file);	
                	
                ?>
            </div>
        </div>
    </div>
    <!-- /.container -->

    <nav class="navbar navbar-inverse navbar-fixed-bottom" role="navigation">
        <div class="container">
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <p class="footer text-center">
			Todos os direitos reservados - <?php echo date('Y'); ?>
		</p>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
