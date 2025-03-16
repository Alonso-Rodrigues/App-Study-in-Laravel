<header class="container-menu">
    <nav class="menu-nav">
        <ul class="menu-ul">
            @guest
                <li class="menu-li"><a href="/">Home</a></li>
                <li class="menu-li"><a href="/register">Register</a></li>
                <li class="menu-li"><a href="/contact">Contact</a></li>
            @endguest
            
            @auth
                <li class="menu-li"><a href="/dashboard">Dashboard</a></li>
                <li class="menu-li"><a href="/events">My Events</a></li>
            @endauth
            
            <li class="menu-li"><a href="/events/create">Create Events</a></li>           
        </ul>

        @guest
            <button class="btn-geral"><a href="/login">Login</a></button>
        @endguest

        @auth
            <button class="btn-geral">
                <form action="/logout" method="POST">
                    @csrf
                    <a href="/logout" 
                    onClick="event.preventDefault();
                    this.closest('form').submit();">
                        Log Out
                    </a>
                </form>
            </button>    
        @endauth   
    </nav>
</header>  
