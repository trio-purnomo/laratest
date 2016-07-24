<nav class="navbar navbar-default navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <button class="navbar-toggle collapsed" data-target="#bs-example-navbar-collapse-1" data-toggle="collapse" type="button">
                <span class="sr-only">
                    Toggle Navigation
                </span>
                <span class="icon-bar">
                </span>
                <span class="icon-bar">
                </span>
                <span class="icon-bar">
                </span>
            </button>
            <a class="navbar-brand" href="#">
                Laravel
            </a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="{{ (Request::is('/') ? 'active' : '') }}">
                    <a href="{{ url('') }}">
                        <i class="fa fa-home">
                        </i>
                        Home
                    </a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="{{ (Request::is('register') ? 'active' : '') }}">
                    <a href="{{ url('register') }}">
                        Register
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>