<nav>
   <div class="nav-wrapper">
     <a href="#" class="brand-logo">BuckTracker</a>
     <ul id="nav-mobile" class="right hide-on-med-and-down">
       <li><a href="">About</a></li>
       <li><a href="{{route('users.register')}}">Register</a></li>
       <li><a href="">Stats</a></li>
       <li><a href="{{ route('login') }}">Login</a></li>
       <li><a href="{{ route('register') }}">Register</a></li>
       <li>
           <a href="{{ route('logout') }}"
               onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
               Logout
           </a>

           <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
               {{ csrf_field() }}
           </form>
       </li>
     </ul>
   </div>
</nav>
