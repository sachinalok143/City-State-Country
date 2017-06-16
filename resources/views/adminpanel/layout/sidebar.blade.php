    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
           <input type="text" name="q" class="form-control search-menu-box" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      
      <!-- sidebar menu: style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <!-- <li class="header">Main</li> -->
        <!-- Dashboard Tab Started -->

          <li class="treeview">
            <a href="{{url('/')}}">
              <i class="fa fa-dashboard"></i> <span>Dashboard</span>
              <span class="pull-right-container">
              
              </span>
            </a>
          </li>
         <li>
      <a href="{{url('http://www.news.ambulance.run')}}"><i class="fa fa-newspaper-o"> CMS</i><span>
            
      </span>
      </a>
          </li>
           <li>
      <a href="{{url('http://www.intranet.goldenhoursystems.com')}}"><i class="fa fa-group"> HRMS</i><span>
             
      </span>
      </a>
          </li>
          <!-- start of internal ticket menus -->
          <li>
              <a href=""><i class="fa fa-ticket"></i> <span>Query Manager</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li>
                  <a href="{{url('Admin/Ticket/Ticket-Dashboard')}}"><i class="fa fa-dashboard"></i>DashBoard
                   
                  </a>
                </li>
                <li>
                  <a href="{{url('Admin/Ticket/create_query')}}"><i class="fa fa-circle-o"></i> Raise Query
                    
                  </a>
                </li>
                <li>
                  <a href="{{url('Admin/Ticket/')}}"><i class="fa fa-folder-open-o"></i> Latest Queries
                    
                  </a>
                </li>
                     <li>
                  <a href="{{url('Admin/Ticket/MyQuery')}}"><i class="fa fa-folder-open-o"></i> My Queries
                    
                  </a>
                </li>
              </ul>
            </li>
            <!-- end of internal ticket menus -->

            <!-- Start of customer support menus -->
              <li class="treeview">
                <a href="#">
                  <i class="fa fa-support"></i> <span>Customer Support</span>
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>

                <ul class="treeview-menu">
                  <li>
                    <a href="{{url('Ticket/Ticket-Dashboard')}}"><i class="fa fa-dashboard"></i> Dashboard
                      
                    </a>
                  </li>

                  <li>
                    <a href="{{url('Ticket/create')}}"><i class="fa fa-circle-o"></i> Raise Ticket
                      
                    </a>  
                  </li>
                  <li>
                    <a href="{{url('Ticket')}}"><i class="fa fa-folder-open-o"></i> Latest Tickets
                      
                    </a>
                  </li>                   
                </ul>
              </li>

              <!--Generate by Sachit -->
            <!--   <li class="treeview">
                <a href="{{url('logins_operator')}}">
                  <i class="fa fa-support"></i> <span>Operator</span>
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
              </li> -->
              <!--End Here -->

              <li class="treeview">
                <a href="#">
                  <i class="fa fa-support"></i> <span>Website Enquiries</span>
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>

                <ul class="treeview-menu">
                  <li>
                    <a href="{{url('Admin/Website/Enquiry')}}"><i class="fa fa-dashboard"></i> Enquiries
                      
                    </a>
                  </li>
                  <li>
                    <a href="{{url('Admin/Website/Enquiry/EnquiryStatus')}}"><i class="fa fa-dashboard"></i> Enquiry Status
                      
                    </a>
                  </li>

                 <!--  <li>
                    <a href="{{url('Admin/Website/Enquiry')}}"><i class="fa fa-circle-o"></i> Raise Ticket
                      
                    </a>  
                  </li>
                  <li>
                    <a href="{{url('Admin/Website/Enquiry')}}"><i class="fa fa-folder-open-o"></i> Latest Tickets
                      
                    </a>
                  </li> -->

                   
                </ul>
              </li>
            <!-- End of Customer Support ticket menus -->
         
        <!-- Dashboard Tab End -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-database"></i> <span>CRM</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
           <ul class="treeview-menu">
              <li><a href="{{ url('/Generatelead/Company') }}"><i class="fa fa-user-plus"></i> Generate Lead</a></li>
              <li><a href="{{ url('/Operator/Company') }}"><i class="fa fa-users"></i> Operator </a></li>
              <li><a href="{{ url('/Hospital') }}"><i class="fa fa-hospital-o"></i> Hospital </a></li>
              <li><a href="{{ url('/key_partners') }}"><i class="fa fa-venus-mars"></i> Key Partner </a></li>


              <li><a href="{{ url('/Ambulance') }}"><i class="fa fa-hospital-o"></i> Ambulances </a></li>
              <li><a href="{{ url('/Driver') }}"><i class="fa fa-venus-mars"></i> Drivers </a></li>

            </ul>
            </li>
        <!-- Data Tab Started -->
        <li class="treeview">
          <a href="#">
            <i class="fa  fa-wrench"></i> <span>Tools</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li>
              <a href="#"><i class="fa fa-globe"></i> Geo-Location
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li>
                  <a href="{{url('Admin/Location/State')}}"><i class="fa fa-circle-o"></i> State
                    <!-- <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span> -->
                  </a>
                 <!--  <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Add State</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Delete State</a></li>
                  </ul> -->
                </li>
                 <li>
                  <a href="{{url('Admin/Location/District')}}"><i class="fa fa-circle-o"></i> District
                    <!-- <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span> -->
                  </a>
                  <!-- <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Add District</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Delete District</a></li>
                  </ul> -->
                </li>
                <li>
                  <a href="{{url('Admin/Location/City')}}"><i class="fa fa-circle-o"></i> City
                   <!--  <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span> -->
                  </a>
                <!--   <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Add City</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Delete City</a></li>
                  </ul> -->
                </li>
                 <li>
                  <a href="{{url('Admin/Location/Region')}}"><i class="fa fa-circle-o"></i> RTO Region
                    <!-- <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span> -->
                  </a>
                <!--   <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Add City</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Delete City</a></li>
                  </ul> -->
                </li>
                 <li>
                  <a href="{{url('Admin/Location/Subregion')}}"><i class="fa fa-circle-o"></i>  RTO Sub-Region
                    <!-- <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span> -->
                  </a>
                <!--   <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Add City</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Delete City</a></li>
                  </ul> -->
                </li>
              </ul>
            </li>


            <li>
              <a href="#"><i class="fa fa-globe"></i> Data
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li>
                  <a href="{{url('Admin/Tools/Data/Generatelead')}}"><i class="fa fa-circle-o"></i> Generate Lead
                  </a>
                  </li>
     
              </ul>
            </li>
            <li>
              <a href="#"><i class="fa fa-ambulance"></i> Ambulances
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li>
                  <a href="{{url('Admin/Ambulance/AmbulanceModels')}}"><i class="fa fa-circle-o"></i>Ambulance Models
                
                </a>
                 <!--  <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Add State</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Delete State</a></li>
                  </ul> -->
                </li>
                
                
              </ul>
            </li>
             <li>
              <a href="{{url('Admin/Keypartner/Sub_Industry')}}"><i class="fa fa-ambulance"></i> KeyPartner subindustry
                <span class="pull-right-container">
                  <i class="pull-right"></i>
                </span>
              </a>
            </li>
            <li>
                  <a href="{{url('Admin/Tagging')}}"><i class="fa fa-circle-o"></i>Tagging
                
                </a>
           </li>

               <!-- li>
                  <a href="{{url('Admin/Templates')}}"><i class="fa fa-circle-o"></i>Templates
                
                </a>
                </li> -->
             <li>
              <a href="#"><i class="fa fa-joomla"></i> Templates
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li>
                  <a href="{{url('Admin/Templates/Template')}}"><i class="fa fa-circle-o"></i>Template
                
                </a>
                
                </li>
                
                 <li>
                  <a href="{{url('Admin/Templates/Types')}}"><i class="fa fa-circle-o"></i>Type
                
                </a>
                
                </li>
              </ul>
            </li>
            <li>
              <a href="#"><i class="fa fa-tasks"></i> Subscription
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li>
                  <a href="{{url('Admin/Subscription/Plan')}}"><i class="fa fa-circle-o"></i>Plan
                
                </a>
                
                </li>
                
              </ul>
            </li>
              <li>
                  <a href="{{url('Admin/Activity_Tracker')}}"><i class="fa fa-list"></i> Activity Tracker</a>
              </li>

            
          </ul>
        </li>

        <!-- Support Ticket -->
         
        <!-- Data Tab End -->
        @can('Admin-Fares-Management')
          <li class="treeview">
          <a href="#">
            <i class="fa fa-rupee"></i> <span>Fares</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('Admin/Fares')}}"><i class="fa fa-money"></i> Manage Fares</a></li>
            <li><a href="{{url('Admin/Fares/create-fare')}}"><i class="fa fa-circle-o"></i> Create Fares</a></li>
          </ul>
          </li>
        @endcan

        @can('Admin-Roles-Permission-Management')
          <li class="treeview">
          <a href="#">
            <i class="fa fa-user-secret"></i> <span>Roles & Permissions</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('Admin/Roles')}}"><i class="fa fa-user"></i> Manage Roles</a></li>
            <li><a href="{{url('Admin/Permissions')}}"><i class="fa fa-key"></i> Manage Permission</a></li>
            <li><a href="{{url('Admin/Mapping_Roles_Permission')}}"><i class="fa fa-map"></i> Mapping</a></li>


          </ul>
          </li>
        @endcan

        @can('Admin-Employees-Management')
        <li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i><span>Employee Management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('Admin/Users')}}"><i class="fa fa-users"></i> Employee Users</a></li>
            <li><a href="{{url('Admin/Users')}}"><i class="fa fa-refresh"></i> Change Role</a></li>
            <li><a href="{{url('Admin/Users')}}"><i class="fa fa-key"></i> Add Permission</a></li>
          </ul>
        </li>
        @endcan

   
         <li class="treeview">
          <a href="#">
            <i class="fa fa-building-o"></i> <span>Department</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li>
              <a href="{{url('Admin/Departments')}}"><i class="fa fa-tasks"></i>Manage Department
                <!-- <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span> -->
              </a>
              <!-- <ul class="treeview-menu">
                 <li><a href="{{url('Admin/Departments')}}"><i class="fa fa-tasks"></i>Department</a></li>
            <li><a href="{{url('Admin/Users')}}"><i class="fa fa-circle-o"></i>Assign Department</a></li>

               
              </ul> -->
            </li>
            
        </ul>
        </li>

      <!--    <li class="treeview">
          <a href="#">
            <i class="fa fa-sitemap"></i> <span>Reporting</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
          
             <li>
              <a href="#"><a href="#"><i class="fa fa-pie-chart"></i> Manage Reporting
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-exchange"></i>Reporting</a></li>
                <li><a href="#"><i class="fa fa-exchange"></i>Org.Structure</a></li>
              </ul>
            </li>

           
          
          </ul>
        </li> -->

    <li class="treeview">
        <a href="#">
          <i class="fa fa-dollar"></i> <span>Operations</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
      <ul class="treeview-menu">
          <li class="treeview">
            <a href="{{ url('/Investor/dashboard') }}">
             <i class="fa fa-dashboard">
            </i><span>Dashboard</span>
             </a>
          </li>
          <li class="treeview">
            <a href="{{url('/fleet')}}">
              <i class="fa fa-bar-chart"></i> <span>KPI</span>
           
            </a>

          </li>
          <li class="treeview">
            <a href="{{ url('/Investor/revenue') }}">
             <i class="fa fa-rupee">
            </i><span>Revenue</span>
             </a>
          </li>
          <li class="treeview">
            <a href="{{ url('/Investor/newinitiative') }}">
              <i class="fa fa-lightbulb-o"></i><span>New Initiative</span>
             </a>
          </li>
          <li class="treeview">
            <a href="{{ url('/Investor/teamstatus') }}">
              <i class="fa fa-group"></i><span>Team Status</span>
             </a>
          </li>
          <li class="treeview">
            <a href="{{ url('/Investor/productupdate') }}">
              <i class="fa fa-refresh"></i><span>Product Update</span>
             </a>
          </li>
          <li class="treeview">
            <a href="{{ url('/Investor/financestatus') }}">
              <i class="fa fa-signal"></i><span>Finance Status</span>
             </a>
          </li>
        </ul>
    </li>
        <li class="treeview">
            <a href="{{url('/Announcement/allAnnouncements')}}">
              <i class="fa fa-bullhorn"></i> <span>Announcement</span>
              <span class="pull-right-container">
            
              </span>
            </a>
          </li> 

          <li class="treeview">
            <a href="{{url('Admin/Ticket/create_task')}}">
              <i class="fa fa-tasks"></i> <span>Create Task</span>
              <span class="pull-right-container">
            
              </span>
            </a>
          </li>  
          <li class="treeview">
            <a href="{{url('Admin/Apps/Users')}}">
              <i class="fa fa-tasks"></i> <span>Users</span>
              <span class="pull-right-container">
            
              </span>
            </a>
          </li>   
            
      </ul>
    </section>


        <!-- /.sidebar -->