<ul class="nav">                
        
          <li class="nav-item ">
          
            <a class="nav-link" href="{{route('home')}}">
        
            
              <i class="menu-icon fa fa-dashboard text-info"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>        
          
           @role('admin')
          <li class="nav-item ">
            <a class="nav-link " data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon fa fa-users text-info "></i>
              <span class="menu-title">Management</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
               
                <li class="nav-item">
                  <a class="nav-link " href="{{route('users.index')}}">USER</a>
                </li> 

                <li class="nav-item">
                  <a class="nav-link " href="{{route('roles.index')}}">ROLE</a>
                </li> 

                <!--<li class="nav-item">
                  <a class="nav-link " href="{{route('permissions.index')}}">PERMISSIONS</a>
                </li> -->

              </ul>
            </div>
          </li>   

          <li class="nav-item ">
            <a class="nav-link" href="{{url('pendaftaran')}}">
              <i class="menu-icon fa fa-registered text-info" class=""></i>
              <span class="menu-title ">Pendaftaran</span>
            </a>
          </li> 

          <li class="nav-item ">
            <a class="nav-link" href="{{url('bobot')}}">
              <i class="menu-icon fa fa-level-up text-info" class=""></i>
              <span class="menu-title ">Bobot</span>
            </a>
          </li>  

          <li class="nav-item ">
            <a class="nav-link" href="{{url('upload')}}">
              <i class="menu-icon fa fa-upload text-info"></i>
              <span class="menu-title ">Upload</span>
            </a>
          </li>  
          
          <li class="nav-item ">
            <a class="nav-link" href="{{url('mahasiswa')}}">
              <i class="menu-icon fa fa-user text-info"></i>
              <span class="menu-title ">Mahasiswa</span>
            </a>
          </li>              
           
          @endrole

           @role('Mahasiswa')                                 
          <!--  -->    
          <li class="nav-item ">
            <a class="nav-link" href="{{url('upload')}}">
              <i class="menu-icon fa fa-upload text-info"></i>
              <span class="menu-title ">Upload</span>
            </a>
          </li>  
          
          <li class="nav-item ">
            <a class="nav-link" href="{{url('mahasiswa')}}">
              <i class="menu-icon fa fa-user text-info"></i>
              <span class="menu-title ">Mahasiswa</span>
            </a>
          </li>

           <li class="nav-item ">
            <a class="nav-link" href="{{url('mahasiswa_entry')}}">
              <i class="menu-icon fa fa-user fa-sign-in text-info"></i>
              <span class="menu-title ">Mahasiswa Entry</span>
            </a>
          </li> 
                              
          <li class="nav-item ">
            <a class="nav-link" href="{{url('konfirmasi')}}">
              <i class="menu-icon fa fa-user fa-sign-in text-info"></i>
              <span class="menu-title ">Konfirmasi</span>
            </a>
          </li> 


    <!--  <li class="nav-item ">
            <a class="nav-link" href="{{url('bobot.show')}}">
              <i class="menu-icon fa fa-registered text-info" class=""></i>
              <span class="menu-title ">Bobot</span>
            </a>
          </li>   -->

          @endrole  
         
           @role('karyawan|admin')

          <li class="nav-item ">
            <a class="nav-link" href="{{url('periode')}}">
              <i class="menu-icon fa fa-calendar text-info"></i>
              <span class="menu-title ">Periode</span>
            </a>
          </li>
          
          <li class="nav-item ">
            <a class="nav-link" href="{{url('informasi')}}">
              <i class="menu-icon fa fa-info-circle text-info"></i>
              <span class="menu-title">INFORMASI</span>
            </a>
          </li>

           <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-Referensi" aria-expanded="false" aria-controls="ui-Referensi">
              <i class="menu-icon fa fa-list text-info"></i>
              <span class="menu-title">Referensi</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-Referensi">
              <ul class="nav flex-column sub-menu">
                
                <li class="nav-item">
                  <a class="nav-link" href="{{route('fakultas.index')}}">FAKULTAS</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="{{url('tarif')}}">TARIF</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="{{url('kategory')}}">KATEGORY</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="{{url('kategory_detail')}}">KATEGORY DETAIL</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="{{url('jenisbiaya')}}">JENIS BIAYA</a>
                </li>

                 <li class="nav-item">
                  <a class="nav-link" href="{{url('jenjang')}}">JENJANG</a>
                </li>
              
                <li class="nav-item">
                  <a class="nav-link" href="{{url('programstudi')}}">PRODI</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="{{url('jalur_masuk')}}">JALUR MASUK</a>
                </li>

                 <li class="nav-item">
                  <a class="nav-link" href="{{url('jenisfile')}}">DOKUMEN</a>
                </li>                                
                 
              </ul>
            </div>
          </li>

           <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-mapping" aria-expanded="false" aria-controls="ui-mapping">
              <i class="menu-icon fa fa-list text-info"></i>
              <span class="menu-title">MAPPING</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-mapping">
              <ul class="nav flex-column sub-menu">                
               
                <li class="nav-item">
                  <a class="nav-link" href="{{url('mappingjalur')}}">MAPPING JALUR</a>
                </li>     

                <li class="nav-item">
                  <a class="nav-link" href="{{url('mappingprodi')}}">MAPPING PRODI</a>
                </li>              
                 
              </ul>
            </div>
          </li>
          @endrole

</ul>
