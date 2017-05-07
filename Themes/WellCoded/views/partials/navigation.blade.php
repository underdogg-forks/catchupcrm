<div class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ route('homepage') }}">{{ setting('core::site-name') }}</a>
        </div>
        <div class="navbar-collapse collapse navbar-right">
            <ul class="nav navbar-nav">
                <li class="{{ on_route('homepage') || on_route('podcasts.*') ? 'active' : '' }}">
                    <a href="{{ route('homepage') }}">Podcasts</a>
                </li>
                <li class="{{ Request::is('*a-propos') ? 'active' : '' }}">
                    <a href="{{ route('page', ['a-propos']) }}">À propos</a>
                </li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>
