<script src="https://kit.fontawesome.com/yourcode.js"></script>
<ul class="nav">                
          <li class="nav-item "> 
            <a class="nav-link" href="{{url('/')}}">
              <i class="menu-icon fa fa-dashboard text-info"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>

          
     
          <li class="nav-item ">
            <a class="nav-link" href="{{ route('login') }}">
              <i class="menu-icon fa fa-registered text-info" class=""></i>
              <span class="menu-title ">LOGIN</span>
            </a>
          </li> 

          <li class="nav-item ">
            <a class="nav-link" href="{{ url('informasi') }}">
              <i class="menu-icon fa fa-info-circle text-info"></i>
              <span class="menu-title">INFORMASI</span>
            </a>
          </li>

           <li class="nav-item ">
            <a class="nav-link" href="{{ url('registrasi') }}">
              <i class="menu-icon fa fa-info-circle text-info"></i>
              <span class="menu-title">registrasi</span>
            </a>
          </li>
          
     
         
     
</ul>