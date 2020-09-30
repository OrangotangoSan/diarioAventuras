<main role="main">
    <!-- a parte do form tem que ter csrf, é como se fosse prepared. Todo post -->

    <section class="jumbotron text-center">
      <div class="container">
        <h1 class="jumbotron-heading">Escreva aqui sua nova Aventura</h1>
        <form method="POST" action="/" enctype="multipart/form-data">
          @csrf
          <div class="form-group text-left">
            <label for="email">Endereço de e-mail</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="nome@dominio.com">
          </div>
          <div class="form-group text-left">
            <label for="mensagem">Sua mensagem</label>
            <textarea class="form-control" id="mensagem" name="mensagem" rows="3"></textarea>
          </div>
          <div class="custom-file">
            <input type="file" class="custom-file-input" id="arquivo" name="arquivo">
            <label class="custom-file-label" for="arquivo">Escolha um arquivo</label>
          </div>
          <p>
            <button type="submit" class="btn btn-primary my-2">Enviar</button>
            <button type="reset" class="btn btn-secondary my-2">Cancelar</button>
          </p>
        </form>
      </div>
    </section>
            <!-- Aqui vai ficar a lista -->
    <div class="album py-5 bg-light">
      <div class="container">
        <div class="row">
            @foreach ($collectionoPosts as $post)
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                    <img class="card-img-top figure-img img-fluid rounded" src="">
                    <div class="card-body">
                        <p class="card-text">{{$post->email}}</p>
                    <p class="card-text">{{$post->mensagem}}</p>
                        <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <a type="button" class="btn btn-sm btn-outline-secondary" href="#">Download</a>
                            <form>
                            @csrf
                            <input type="hidden" name="_method" value="delete">
                            <button type="submit" class="btn btn-sm btn-outline-danger">Apagar</button>
                            </form>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>

            @endforeach
            <!-- aqui acaba a repetição do foreach -->
        </div>
      </div>
    </div>

  </main>
