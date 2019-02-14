
<nav class="colorlib-nav" role="navigation">
        <div class="top-menu">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 text-right">
                        <ul>
                            <li class="has-dropdown"><a href="/">Cats</a></li>
                            @guest
                            <li><a href="login">Se logger / s'enregister</a></li>   
                            @endguest
                           @auth
                            <li><a href="admin/create">Create Cats</a></li>
                            <li><a href="login">Compte</a></li>
                            <li><a href="stats">stats</a></li>
                            <form style="padding:0; margin:0;" method="POST" action="{{ url('/logout') }}">
                                @csrf
                                <li><a href="logout">deconnexion</a></li>
                            </form>
                            @endauth                                   
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    
