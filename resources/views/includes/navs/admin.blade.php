<!-- Left Side Of Navbar -->
<ul class="nav navbar-nav">
    <li><a href="#">About US</a></li>
    <li><a href="#">Contact</a></li>
    <li><a href="{{ route('signIn') }}">Registration & Login</a></li>
</ul>

<!-- Right Side Of Navbar -->
<ul class="nav navbar-nav navbar-right">
    <!-- Authentication Links -->
    <li><a href="{{ route('view.products') }}">View Products</a></li>
    <li><a href="{{ route('add.new.productCategory') }}">Add New Product Category</a></li>
    <li><a href="{{ route('add.new.product') }}">Add New Product</a></li>
    @if(Auth::check())
    <li><a href="{{ route('signOut') }}">Sign Out</a></li>
    @endif
</ul>