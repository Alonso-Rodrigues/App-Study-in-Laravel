<header class="container-menu">
    <nav class="menu-nav">
        @auth
            <p id="user-name">Welcome: {{ $user->name }}</p>
        @endauth
        <ul class="menu-ul">
            @auth
                <li class="menu-li"><a href="/dashboard">Dashboard</a></li>
                <li class="menu-li"><a href="/events">My Events</a></li>
            @endauth

            @guest
                <li class="menu-li"><a href="/">Home</a></li>
            @endguest
            
                <li class="menu-li"><a href="/events/create">Create Events</a></li>

            @guest
                <li class="menu-li"><a href="/register">Register</a></li>
                <li class="menu-li"><a href="/contact">Contact</a></li>
            @endguest  
        </ul>

        @guest
            <button class="btn-menu"><a href="/login">Login</a></button>
        @endguest

        @auth
            <button class="btn-menu">
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
