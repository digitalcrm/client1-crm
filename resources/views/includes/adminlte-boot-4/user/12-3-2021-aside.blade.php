<aside class="main-sidebar sidebar-light-primary">
    <!-- Brand Logo -->
    <a href="{{url('dashboard')}}" class="brand-link">
        <img src="{{asset('assets/adminlte-boot-4/dist/img/AdminLTELogo.png')}}" alt="Digital CRM" class="brand-image img-circle">
        <span class="brand-text font-weight-light">Digital CRM</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <!-- Sidebar Menu -->
        <nav>
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->

                <li class="nav-item">
                    <a href="{{url('dashboard')}}" class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt icon-size"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-address-card icon-size"></i>
                        <p>
                            Contacts
                            <i class="right fas fa-angle-left"></i>
                        </p>

                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('contacts')}}" class="nav-link nav-link-custom {{ Request::is('contacts*')? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p class="sub-nav">Contacts</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{url('accounts')}}" class="nav-link nav-link-custom {{ request()->is('accounts*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p class="sub-nav">Accounts</p>
                            </a>
                        </li>
                        
                        <li class="nav-item">
                            <a href="{{ route('companies.index') }}" class="nav-link nav-link-custom {{ request()->is('accounts*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p class="sub-nav">Companies</p>
                            </a>
                        </li>
                    </ul>
                </li>



                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-cart-plus icon-size"></i>
                        <p>Sales
                            <i class="right fas fa-angle-left"></i>
                        </p>

                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('leads')}}" class="nav-link nav-link-custom {{ Request::is('leads*')? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p class="sub-nav">Leads</p>
                            </a>
                        </li>
                        <!--leads/getproductleads/shop--->

                        <li class="nav-item">
                            <a href="{{url('leads/getproductleads/list')}}" class="nav-link nav-link-custom">
                                <i class="far fa-circle nav-icon"></i>
                                <p class="sub-nav">Product Leads</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('deals')}}" class="nav-link nav-link-custom {{ Request::is('deals*')? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p class="sub-nav">Deals</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('customers')}}" class="nav-link nav-link-custom {{ Request::is('customers*')? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p class="sub-nav">Customers</p>
                            </a>
                        </li>


                        <li class="nav-item">
                            <a href="{{url('sales')}}" class="nav-link nav-link-custom {{ Request::is('sales*')? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p class="sub-nav">Sales</p>
                            </a>
                        </li>
						
                        <li class="nav-item">
                            <a href="{{url('orders')}}" class="nav-link nav-link-custom {{ Request::is('orders*')? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p class="sub-nav">Orders</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('invoice')}}" class="nav-link nav-link-custom {{ Request::is('invoice*')? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p class="sub-nav">Invoice</p>
                            </a>
                        </li>
						<!--
                        <li class="nav-item">
                            <a href="{{url('products')}}" class="nav-link nav-link-custom {{ Request::is('products*')? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p class="sub-nav">Product</p>
                            </a>
                        </li>
						-->
                        <li class="nav-item">
                            <a href="{{url('forecast')}}" class="nav-link nav-link-custom {{ Request::is('forecast*')? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p class="sub-nav">Forecast</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{url('territory')}}" class="nav-link nav-link-custom {{ Request::is('territory*')? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p class="sub-nav">Territory</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('taskmanagement.index') }}" class="nav-link nav-link-custom {{ request()->is('admin/tasks*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p class="sub-nav">Task</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            {{-- <a href="{{ route('bookevents.index',['events'=>'upcoming']) }}" --}}
                            <a href="{{ url('/calendar') }}" class="nav-link nav-link-custom {{ request()->is('bookevents*') ? 'active' : '' }} {{ request()->is('calendar*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p class="sub-nav">
                                    Appointments
                                </p>
                            </a>
                        </li>

                    </ul>
                </li>
				
				
                <li class="nav-item">
                    <a href="{{url('products')}}" class="nav-link nav-link-custom {{ Request::is('products*')? 'active' : '' }}">
                    <i class="nav-icon far fa-circle icon-size"></i>
                        <p >Products</p>
                    </a>
                </li>


                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-bullhorn icon-size"></i>
                        <p>
                            Marketing
                            <i class="right fas fa-angle-left"></i>
                        </p>

                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('mails')}}" class="nav-link nav-link-custom {{ Request::is('mails*')? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p class="sub-nav">Webmail</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('campaigns')}}" class="nav-link nav-link-custom {{ Request::is('campaigns*')? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p class="sub-nav">Campaign</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{url('webtolead')}}" class="nav-link nav-link-custom {{ request()->is('webtolead*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p class="sub-nav">Web to Lead</p>
                            </a>
                        </li>
                    </ul>
                </li>



                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-project-diagram icon-size"></i>
                        <p>
                            Projects
                            <i class="right fas fa-angle-left"></i>
                        </p>

                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('projects')}}" class="nav-link nav-link-custom {{ Request::is('projects*')? 'active' : '' }}">
                                <i class="fas fa-circle nav-icon"></i>
                                <p class="sub-nav">Projects</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('tickets.index',['all' => 'true']) }}" class="nav-link nav-link-custom {{ request()->is('tickets*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p class="sub-nav">Ticketing</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{url('documents')}}" class="nav-link nav-link-custom {{ Request::is('documents*')? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p class="sub-nav">Document</p>
                            </a>
                        </li>

                    </ul>
                </li>


                <!--<li class="nav-item has-treeview">-->
                <!--    <a href="#" class="nav-link">-->
                <!--        <i class="nav-icon fas fa-shopping-cart"></i>-->
                <!--        <p>Ecommerce<i class="fas fa-angle-left right"></i></p>-->
                <!--    </a>-->
                <!--    <ul class="nav nav-treeview" style="display: none;">-->
                <!--        <li class="nav-item">-->
                <!--            <a href="{{url('ecommerce/orders/list')}}" class="nav-link">-->
                <!--                <i class="far fa-circle nav-icon"></i>-->
                <!--                <p>Orders</p>-->
                <!--            </a>-->
                <!--        </li>-->
                <!--        <li class="nav-item">-->
                <!--            <a href="{{url('ecommerce/consumers/list')}}" class="nav-link">-->
                <!--                <i class="far fa-circle nav-icon"></i>-->
                <!--                <p>Consumers</p>-->
                <!--            </a>-->
                <!--        </li>-->
                <!--    </ul>-->
                <!--</li>-->

                <li class="nav-item">
                    <a href="{{url('reports/leads')}}" class="nav-link nav-link-custom {{ Request::is('reports/*')? 'active' : '' }}">
                        <i class="nav-icon fas fa-chart-pie icon-size"></i>
                        <p>Reports</p>
                    </a>
                </li>


            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>