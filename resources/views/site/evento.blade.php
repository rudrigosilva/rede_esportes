<h3>Criando Evento</h3>

<div class="menu">
    <ul>
        <li><a href="{{ route('site.usuario') }}">Usuario</a></li>
        <li><a href="{{ route('site.evento') }}">Evento</a></li>
        <li><a href="{{ route('site.despesa') }}">Despesa</a></li>
    </ul>
</div>

<div class="evento">
    <h1>Evento</h1>
    <form action= {{ route('site.evento')}} method="get">
        @csrf
        <input name="titulo" type="text" placeholder="titulo" class="borda-branca">
        <br>
        <input name="codigo_projeto" type="text" placeholder="codigo do projeto" class="borda-branca">
        <br>
        <input name="usuario" type="text" placeholder="usuario" class="borda-branca">
        <br>
        <input name="data-inicio" type="text" placeholder="data de inicio" class="borda-branca">
        <br>
        <input name="valor" type="text" placeholder="valor" class="borda-branca">
        <br>
        <input name="usuario_dono" type="text" placeholder="usuario dono" class="borda-branca">
        <br>
        <button type="submit" class="borda-branca">CADASTRAR</button>
    </form>
</div>