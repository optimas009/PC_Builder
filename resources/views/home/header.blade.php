<header class="header_section">
            <div class="container">
               <nav class="navbar navbar-expand-lg custom_nav-container ">
                  <a class="navbar-brand" href="{{url('/')}}"><img width="250" src="images/pc_builderimage.jpg" alt="#" /></a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class=""> </span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav">
                        <li class="nav-item active">
                           <a class="nav-link" href="{{url('/')}}">Home<span class="sr-only">(current)</span></a>
                        </li>
                 
                        <li class="nav-item">
                           <a class="nav-link" href="product.html">Products</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="blog_list.html">Category</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="contact.html">Contact</a>
                        </li>
                        <form class="form-inline">
                           <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                           <i class="fa fa-search" aria-hidden="true"></i>
                           </button>
                        </form>
                        @if (Route::has('login'))

                        @auth
                        <li class="nav-item">
                          <x-app-layout>

                            </x-app-layout>
                        </li>

                        @else
                        <li class="nav-item">
                           <a class="btn btn-primary" href="{{route('login')}}" id="logincss">Login</a>
                        </li>
                        <li class="nav-item">
                           <a class="btn btn-success" href="{{route('register')}}">Register</a>
                        </li>
                        @endauth
                     @endif
                     <div style="margin-left:20px">
                     <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                     <i class="fas fa-shopping-cart">Cart</i>

                           </button>
                     </div>
                     </ul>
                  </div>
               </nav>
            </div>
         </header>