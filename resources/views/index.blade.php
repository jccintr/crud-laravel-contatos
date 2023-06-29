<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meus Contatos Laravel Edition</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-dark border-bottom border-bottom-dark" data-bs-theme="dark">


  <div class="container-fluid">
    <a class="navbar-brand" href="/">Meus Contatos</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Contatos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/categorias">Categorias</a>
        </li>
        
      </ul>

      <form class="d-flex" role="search">
        
        <a class="btn btn-success" href="/contatos/new" role="button">NOVO CONTATO</a>

      </form>
    </div>
  </div>
</nav>
    <div class="container" >
        <table class="table table-hover">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Foto</th>
                <th scope="col">Nome</th>
                <th scope="col">Telefone</th>
                <th scope="col">Categoria</th>
                <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                    @foreach($contatos as $contato)
                        <tr>
                            <td class="align-middle" scope="row">{{$contato->id}}</td>
                            <td class="align-middle"><img src="{{$contato->foto}}" style="width:50px;height:50px;border-radius:10px;" alt="{{$contato->nome}}"></td>
                            <td class="align-middle">{{ $contato->nome }}</td>
                            <td class="align-middle">{{ $contato->telefone }}</td>
                            <td class="align-middle">{{ $contato->categoria->nome }}</td>
                            <td class="align-middle">
                                <a class="btn btn-primary btn-sm mx-1" href="/contatos/edit/{{$contato->id}}" role="button">EDITAR</a>
                                <a class="btn btn-danger btn-sm mx-1" href="/contatos/delete/{{$contato->id}}" role="button">EXCLUIR</a>
                            </td>
                        </tr>
                    @endforeach
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>