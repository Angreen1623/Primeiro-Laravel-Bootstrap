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
            <div class="col px-0">
                <nav class="navbar navbar-expand-lg bg-primary mb-4 " data-bs-theme="dark">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="/">SISTEMA WEB</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="/">Cadastrar</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="listar">Consultar</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col px-0">
                <p class="mb-3 fs-3">Cadastrar - Agendamento de Potenciais Clientes</p>
                <p class="mb-3 fs-5">Sistema Utilizado para agendamento de serviços.</p>
                
            </div>
        </div>
        <div class="table-responsive">
            <table class="table text-center text-bg-primary ">
                <thead>
                    <tr class="table-primary">
                        <th scope="col">ID</th> 						
                        <th scope="col">Telefone</th>
                        <th scope="col">Origem</th>
                        <th scope="col">Dados de Contato</th>
                        <th scope="col">Observação</th>
                        <th scope="col">Apagar/Editar</th>
                    </tr>
                </thead>
                <tbody>

                    @if(count($cliente) > 0)
                        @foreach($cliente as $cli)
                        <tr>
                            <td>{{ $cli->id }}</td>
                            <td>{{ $cli->telefone }}</td>
                            <td>{{ $cli->origem }}</td>
                            <td>{{ $cli->dadoContato }}</td>
                            <td>{{ $cli->observacao }}</td>
                            <td>
                                <a href="/editar/{{$cli->id}}" class="btn btn-primary"> Editar </a>
                                <a href="/excluir/{{$cli->id}}" class="btn btn-danger"> Deletar </a>
                            </td>
                        </tr>
                        @endforeach
                    @else
                        <tr>
                            <th>Sem registros!</th>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
    
</body>
</html>