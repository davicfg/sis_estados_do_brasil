<html>
<head>
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/custom.css" rel="stylesheet">
    <title>Estados do Brasil</title>
</head>
<body>
<div class="container">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="/estados">
                    Estados do Brasil com laravel
                </a>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{action('EstadoController@lista')}}">Listagem</a></li>
                <li><a href="{{action('EstadoController@novo')}}">Novo</a></li>
            </ul>

        </div>
    </nav>
    @yield('conteudo')
    <footer class="footer">
        <p>Produzido por Davi Carvalho</p>
    </footer>
</div>
</body>
</html>