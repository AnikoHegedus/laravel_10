<nav class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Acme</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="navbar-nav nav">
                <li class="{{Request::is('home') ? 'active' : ''}}">
                    <a href="home">Home</a>
                </li>
                <li class="{{Request::is('messages') ? 'active' : ''}}">
                    <a href="messages">Messages</a>
                </li>
                <li class="{{Request::is('about') ? 'active' : ''}}">
                    <a href="about">About</a>
                </li>
                <li class="{{Request::is('contact') ? 'active' : ''}}">
                    <a href="contact">Contact</a>
                </li>
            </ul>
        </div> <!-- nav collapse-->
    </div>
</nav>