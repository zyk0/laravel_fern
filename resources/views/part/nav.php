    <!-- Navbar Start -->
    <div class="container-fluid sticky-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light p-0">
                <a href="/" class="navbar-brand">
                    <h2 class="text-white">Fern</h2>
                </a>
                <button type="button" class="navbar-toggler ms-auto me-0" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="/" class="nav-item nav-link">Home</a>
                        <a href="/about" class="nav-item nav-link">About</a>
                        <a href="/product" class="nav-item nav-link">Products</a>
						<a href="/feature" class="nav-item nav-link">Features</a>
						
						<!--
						меню на категории 
						
						<div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">dropdown-menu 0</a>
                            <div class="dropdown-menu bg-light mt-2">
							@foreach($categories as $category)
                                <a href="{{route('showCategory')}}">{{$category->title}}</a>
							@endforeach	
                            </div>
                        </div>
						-->

						<!--				
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">dropdown-menu 0</a>
                            <div class="dropdown-menu bg-light mt-2">
                                <a href="#" class="dropdown-item">dropdown-menu 1</a>
                                <a href="#" class="dropdown-item">dropdown-menu 2</a>
                                <a href="#" class="dropdown-item">dropdown-menu 3</a>
                                <a href="#" class="dropdown-item">dropdown-menu 4</a>
                            </div>
                        </div>
						-->
						
                        <a href="/article" class="nav-item nav-link">Article</a>
						
						<a href="/login"    class="nav-item nav-link" 
							style="background-color: #03ab1f;padding: 0px 0px 0px 0px">Login</a>
							
						<a href="/register" class="nav-item nav-link" 
							style="background-color: #03ab1f;padding: 0px 0px 0px 0px" >Register</a>

                    </div>   
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->