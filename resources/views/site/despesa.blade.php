<h3>Despesas do Evento</h3>

<div class="menu">
    <ul>
        <li><a href="{{ route('site.usuario') }}">Usuario</a></li>
        <li><a href="{{ route('site.evento') }}">Evento</a></li>
        <li><a href="{{ route('site.despesa') }}">Despesa</a></li>
    </ul>
</div>

<div class="despesa">
    <h1>Despesas</h1>
    <form action= {{ route('site.despesa')}} method="get">
        @csrf
        <input name="titulo_despesa" type="text" placeholder="titulo" class="borda-branca">
        <br>
        <input name="quantidade" type="text" placeholder="quantidade" class="borda-branca">
        <br>
        <input name="valor_uni" type="text" placeholder="valor unitario" class="borda-branca">
        <br>
        <input name="valor_total" type="text" placeholder="valor total" class="borda-branca">
        <br>
        <input name="evento_origem" type="text" placeholder="evento de origem" class="borda-branca">
        <br>
        <button type="submit" class="borda-branca">CADASTRAR</button>
    </form>
</div>