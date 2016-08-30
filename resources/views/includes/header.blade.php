

<nav class="navbar navbar-default navbar-static-top">
    <div class="container">

        <div class="navbar-header">
            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ route('home') }}">Home</a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
<p style="display:none;">
            @if(Auth::check())

                {{ $a = 'includes.navs.'.Auth::user()->userType->name }}
            @else
            
               {{ $a = "includes.navs.common" }} 
           
                
            @endif
            </p>

            @include($a)
        
        </div>
    </div>
</nav>