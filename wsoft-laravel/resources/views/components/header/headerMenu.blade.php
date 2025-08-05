 <div class="offcanvas-body" data-lenis-prevent>

     <ul class="navbar-nav">
         <li class="nav-item">
             <a class="nav-link" href="{{ url('/') }}" >Home</a>
         </li>
         <li class="nav-item ">
             <a class="nav-link " href="{{ url('/services') }}">Services</a>
         </li>

         <li class="nav-item ">
             <a class="nav-link " href="{{ url('/portfolio') }}">Portfolio</a>
         </li>
         <li class="nav-item ">
             <a class="nav-link " href="{{ url('/about') }}" >About</a>
         </li>
         <li class="nav-item ">
             <a class="nav-link " href="{{ url('/faq') }}" >FAQs</a>
         </li>
         <li class="nav-item ">
             <a class="nav-link " href="{{ url('/contact') }}" >Contact
                 Us</a>
         </li>
         <li class="nav-item dropdown">
             <a class="nav-link dropdown-toggle" href="{{ url('/coming-soon') }}" data-bs-toggle="dropdown"
                 aria-expanded="false">Coming Soon</a>
             <ul class="dropdown-menu">
                 <li><a class="dropdown-item" href="#">Game Development</a></li>
                 <li><a class="dropdown-item" href="#">Drone Solutions</a></li>
                 <li><a class="dropdown-item" href="#">Robotics Systems</a></li>
                 <li><a class="dropdown-item" href="#">IoT Solutions <span class="coming-soon-badge">(Soon
                             On)</span></a></li>
                 <!-- <li><a class="dropdown-item" href="service-single.html">Service Details</a></li> -->
             </ul>
         </li>

     </ul>
 </div>
