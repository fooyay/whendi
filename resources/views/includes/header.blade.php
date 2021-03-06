{{--For the general template, this navbar needs to be replaced with a more helpful version.--}}
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">When Can You Do It?</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/directory">DIRECTORY</a></li>
                @if (Auth::check())
                    <li><a href="/logout">LOGOUT</a></li>
                @else
                    <li><a href="/login">LOGIN</a></li>
                    <li><a href="/register">REGISTER</a></li>
                @endif
            </ul>
        </div>
    </div>
</nav>
