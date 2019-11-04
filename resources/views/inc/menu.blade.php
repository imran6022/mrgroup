<!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('home') }}">Dashboard</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Raw Cotton <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('rawcotPurchase') }}">Raw Collon Purchases</a></li>
                      <li><a href="{{ route('rawcotpurchaseAdd') }}">Add Raw Collon</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-desktop"></i> Sales <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('salesmamage') }}">Sales</a></li>
                      <li><a href="{{ route('salesadd') }}">New Sales</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-bar-chart-o"></i> Reports<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('party') }}">Sales Reports</a></li>
                      <li><a href="{{ route('rawcottontype') }}">Raw Coton Reports</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-bar-chart-o"></i> Setting<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('party') }}">Party</a></li>
                      <li><a href="{{ route('count') }}">Count</a></li>
                      <li><a href="{{ route('rawcottontype') }}">Raw Coton Type</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>