<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset('dashboard_files/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->name }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
       
     

      
       
        <li><a href="{{ url('countries') }}"><i class="fa fa-flag-o"></i> <span>countries</span></a></li>
        <li><a href="{{route('agents.index')}}"><i class="fa fa-users"></i><span>Agents</span></a></li>

        <li><a href="{{route('services.service.index')}}"><i class="fa fa-list-ul"></i><span>Services</span></a></li>

      


          <li class="treeview">
        <a href="#"><i class="fa fa fa-tasks"></i> <span>Projects</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
        <ul class="treeview-menu">
          <li><a href="{{route('projects.project.index')}}">Projects</a></li>
          <li><a href="{{route('project_agents.project_agent.index')}}">Project Agents</a></li>
        </ul>
      </li>

  <li><a href="{{route('clients.index')}}"><i class="fa fa-list-ul"></i><span>Clients</span></a></li>

  <li><a href="{{route('team.index')}}"><i class="fa fa-list-ul"></i><span>Team</span></a></li>


   <li><a href="{{route('emails.email.index')}}"><i class="fa fa-envelope"></i><span>Email</span></a></li>



        
       
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>