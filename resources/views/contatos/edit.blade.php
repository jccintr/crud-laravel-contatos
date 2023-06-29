<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meus Contatos Laravel</title>
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
          <a class="nav-link" aria-current="page" href="/">Contatos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/categorias">Categorias</a>
        </li>
        
      </ul>

     
    </div>
  </div>
</nav>
    <div class="container mt-3" >
         <h2>Editando Contato</h2>
         <form method="POST" action="/contatos/{{$contato->id}}" >
            @csrf
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input required type="text" class="form-control" id="nome" name="nome" aria-describedby="emailHelp" value="{{$contato->nome}}">
            </div>
            <div class="mb-3">
                <label required for="telefone" class="form-label">Telefone</label>
                <input type="text" class="form-control" id="telefone" name="telefone" aria-describedby="emailHelp" value="{{$contato->telefone}}">
            </div>
            <div class="mb-3">
                <label required for="foto" class="form-label">Foto (url)</label>
                <input type="text" class="form-control" id="foto" name="foto" aria-describedby="emailHelp" value="{{$contato->foto}}">
            </div>
            <div class="mb-3">
                <label for="categoria" class="form-label">Categoria</label>
                <select class="form-select" id="categoria" name="categoria_id" aria-label="Default select example">
                     @foreach($categorias as $categoria)
                            <option 
                              @if($categoria->id == $contato->categoria_id)
                                 selected
                              @endif
                              value="{{$categoria->id}}">{{$categoria->nome}}</option>
                     @endforeach
                </select>
            </div>
            
            <button type="submit" class="btn btn-primary ">SALVAR</button>
         </form>
    </div>

   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>