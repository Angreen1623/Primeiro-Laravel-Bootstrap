<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </head>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col">
                <nav class="navbar navbar-expand-lg bg-primary mb-4" data-bs-theme="dark">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="index">SISTEMA WEB</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="index">Cadastrar</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="listar">Consultar</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <p class="mb-3 fs-3">Cadastrar - Agendamento de Potenciais Clientes</p>
                <p class="mb-3 fs-5">Sistema Utilizado para agendamento de serviços.</p>
                
            </div>
        </div>
        <form method="post" action="/adicionar">
        @csrf
            <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome:</label>
                        <input type="text" class="form-control" id="nome" name="nome">
                    </div>
                    <div class="mb-3">
                        <label for="telefone" class="form-label">Telefone:</label>
                        <input type="text" class="form-control" id="telefone" name="telefone">
                    </div>
                    <div class="mb-3">
                    <label for="origem" class="form-label">Origem:</label>
                    <select class="form-select" aria-label="Default select example" name="origem" id="origem">
                        <option selected>Celular</option>
                        <option value="1">Fixo</option>
                        <option value="2">Residencial</option>
                    </select>
                    </div>
                    <div class="mb-3">
                        <label for="dadoContato" class="form-label">Data do Contato:</label>
                        <input type="date" class="form-control" id="dadoContato" name="dadoContato" placeholder="02/02/2024">
                    </div>
                    <div class="mb-3">
                        <label for="observacao" class="form-label">Observação:</label>
                        <textarea class="form-control" id="observacao" name="observacao" rows="5"></textarea>
                    </div>
                    
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                </div>
            </div>
        </form>
    </div>
    
</body>
</html>