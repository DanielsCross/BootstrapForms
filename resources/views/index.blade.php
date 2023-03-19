<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Web</title>

    <!-- Styles -->
    @vite([
        'resources/js/app.js',
        'resources/css/app.css',
        'node_modules/bootstrap/dist/css/bootstrap.min.css',
        'node_modules/bootstrap/dist/js/bootstrap.bundle.js'
        ])
</head>
<body>
    <div class="container">
        <div class="row"> 
        <nav class="navbar navbar-expand-lg navbar-dark  bg-primary col-12">
        <div class="container">
                <a class="navbar-brand" href="#">SISTEMA WEB</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item active"> 
                        <a class="nav-link" href="{{ url('/') }}">Cadastrar<span class="sr-only"></span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Consultar</a>
                    </li>
                </ul>
            </div>
        </div>
        </nav>
        </div>
    </div>

    <div class="container">
    <div class="row">
		<div class="card mb-3 col-12">
			<div class="card-body">
				<h4 class="card-title">Cadastrar - Agendamento de Potenciais Clientes</h4>
				<p class="card-text">Sistema utilizado para agendamento de serviços.</p>
                <form>
					<div class="form-group">
					    <label for="exampleFormControlInput1">Nome:</label>
						<input type="text" class="form-control" id="txtNome" placeholder="Nome" required>
					</div>
                <br>
                    <div class="form-group">
						<label for="exampleFormControlInput1">Telefone:</label>
						<input type="tel" class="form-control" id="txtTelefone" placeholder="(xx)xxxxx-xxxx" required>
					</div>
                <br>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Origem</label>
                        <select class="form-control"  id="txtOrigem">
                        <option>Celular</option>
						<option>Fixo</option>
                        </select>
                    </div>
                <br>
					<div class="form-group">
						<label for="exampleFormControlInput1">Data do Contato:</label>
						<input type="date" class="form-control" required name="txtDataContato" id="txtDataContato"required>
					</div>
                <br>
					<div class="form-group">
							<label for="exampleFormControlTextarea1">Observação</label>
							<textarea class="form-control" name="txtObservacao" id="txtObservacao" rows="4" required></textarea>
					</div>
                <br>
				    <button type="submit" id="btnInserir" class="btn btn-primary">Cadastrar</button>
				</form>
            </div>
        </div>
    </div>
    </div>
</body>   
</html>