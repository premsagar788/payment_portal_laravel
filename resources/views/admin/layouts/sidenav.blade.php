  <!-- Sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>

        <li class="{{ request()->is('admin/dashboard*') ? 'active' : '' }}">
          <a href="{{ url('admin/dashboard') }}" >
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>

        <!-- User -->

        <li class="treeview {{ request()->is('admin/users') ? 'active' : '' }} {{ request()->is('admin/adduser*') ? 'active' : '' }}">
          <a href="#">
            <i class="fa fa-user"></i>
            <span>Clients</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ request()->is('admin/adduser') ? 'active' : '' }}">
              <a href="{{ url('admin/adduser') }}"><i class="fa fa-circle-o"></i> Add New Client</a>
            </li>
            <li class="{{ request()->is('admin/users*') ? 'active' : '' }}">
              <a href="users/"><i class="fa fa-circle-o"></i> All  Clients</a>
            </li>
          </ul>
        </li>

        <!-- Websites -->

        <li class="treeview {{ request()->is('admin/invoices*') ? 'active' : '' }} {{ request()->is('admin/addinvoices*') ? 'active' : '' }}">
          <a href="#">
            <!-- <i class="fa fa-globe"></i> -->
            <i class="fa fa-file"></i>
            <span>Invoices</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ request()->is('admin/invoice*') ? 'active' : '' }}">
              <a href="{{ url('admin/addinvoice') }}"><i class="fa fa-circle-o"></i> Add New Invoice</a>
            </li>
            <li class="{{ request()->is('admin/invoices*') ? 'active' : '' }}">
              <a href="{{ url('admin/invoices') }}"><i class="fa fa-circle-o"></i> All  Invoices</a>
            </li>
          </ul>
        </li>
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>