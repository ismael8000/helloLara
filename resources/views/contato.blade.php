@extends('app')
@section('conteudo')

    <h1>ContactMe</h1>

    <hr />


    <form action="/programadores/ismael/helloLara/public/enviar" method="POST">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">

      <div class="form-group">
                  <label for="nome">Categoria</label>

                                <select id="categoria_id" name="categoria_id" class="form-control">
                                <option value="null">Selecione</option>

                                   @foreach (App\Categoria::all() as $categoria)
                                       <option value="{{ $categoria->id }}">{{ $categoria->nome }}</option>
                                   @endforeach

                               </select>

       </div>

      <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" id="nome" name="nome" class="form-control" placeholder="">
      </div>

      <div class="form-group">
        <label for="email">E-Mail</label>
        <input type="text" id="email" name="email" class="form-control" placeholder="">
      </div>

      <div class="form-group">
        <textarea id="mensagem" name="mensagem" class="form-control" placeholder="Digite sua mensagem"></textarea>
      </div>


</br>
      <button type="submit" class="btn btn-default">Enviar</button>

    </form>

@endsection
