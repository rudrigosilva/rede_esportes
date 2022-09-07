<h3> usuario </h3>

<div class="menu">
    <ul>
        <li><a href="{{ route('site.usuario') }}">Usuario</a></li>
        <li><a href="{{ route('site.evento') }}">Evento</a></li>
        <li><a href="{{ route('site.despesa') }}">Despesa</a></li>
    </ul>
</div>

<div class="usuario">
    <h1>Usuario</h1>
    <form action= {{ route('site.usuario')}} method="get">
        @csrf
        <input name= "nome" type="text" placeholder="Nome" class="borda-branca">
        <br>
        <input name= "telefone" type="text" placeholder="Telefone" class="borda-branca">
        <br>
        <input name= "email" type="text" placeholder="E-mail" class="borda-branca">
        <br>
        <input name= "senha" type="text" placeholder="senha" class="borda-branca">
        <br>
        <button type="submit" class="borda-branca">ENVIAR</button>
    </form>
</div>