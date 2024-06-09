<header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        @foreach ($configurations as $index => $configuration )
                        <a href="index.html" class="logo">{{ $configuration->name }}<em> Gym</em></a>
                        @endforeach
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="{{ route('home') }}" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#features">Program</a></li>
                            <li class="scroll-to-section"><a href="#our-classes">Supplement</a></li>
                            <li class="scroll-to-section"><a href="#schedule">Membership</a></li>
                            <li class="scroll-to-section"><a href="#contact-us">Contact</a></li>
                            @if($hasRegistrations)
                            <li class="scroll-to-section"><a href="{{ URL::to('/registration-member') }}">My Registrations</a></li>
                            @endif
                            @if(auth()->check())
                            <li class="main-button"><a href="{{ route('logout') }}">Logout</a></li>
                            @else
                            <li class="main-button"><a href="{{ route('login') }}">Login</a></li>
                            @endif
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>