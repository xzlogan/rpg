@extends('site.layouts.login')

@section('titulo', 'Vampiro')

@section('conteudo')
    <div class="conteudo-destaque">
      <form accept={{ route('site.entrar') }} method="post">
        @csrf 

        <div class="border" style=" height: 200px; width: 30%; background-color: powderblue; margin-left: 30%; margin-top: 100px;" >
          <table>
          <tr>
            <td>Uusuario</td>
            <td> <input type="text" name="usuario" placeholder="Usuário" class="" ></td>
          </tr>
          <tr>
            <td>Senha</td>
            <td>  <input type="password" name="password" placeholder="Senha" class="" ></td>
          </tr>
          <tr>
            <td> </td>
            <td> <button type="submit" class="btn btn-primary">Acessar</button>  </td>
          </tr>

          </table> 
         
        
          
        
        </form>
        {{isset($erro) && $erro != '' ? $erro: ''}}
        
    </div>
@endsection
