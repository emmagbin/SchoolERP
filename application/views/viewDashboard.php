<?php include ('header/top.php') ;?>
 <!-- END X-NAVIGATION VERTICAL -->                        
                <!-- START BREADCRUMB -->
                <ul class="breadcrumb" style="margin-top:50px" >
                    <li><a href="#">Dashboard</a></li>
                    
                </ul>
                <!-- END BREADCRUMB -->                
                
                  
                
                 <div class="page-content-wrap">
                    
                    <!-- START WIDGETS -->                    
                    <div class="row">
                        <div class="col-md-3">
                            
                            <!-- START WIDGET SLIDER -->
                            <div class="widget widget-default widget-carousel">
                                <div class="owl-carousel" id="owl-example">
								     <div>                                    
                                        <div class="widget-title">Total Staff</div>                                                                        
                                        <div class="widget-subtitle">27/08/2014 15:23</div>
                                        <div class="widget-int">3,548</div>
                                    </div>
                                    <div>                                    
                                        <div class="widget-title">Total Students</div>                                                                        
                                        <div class="widget-subtitle">27/08/2014 15:23</div>
                                        <div class="widget-int">3,548</div>
                                    </div>
									 <div>                                    
                                        <div class="widget-title"> male</div>                                                                        
                                        <div class="widget-subtitle">27/08/2014 15:23</div>
                                        <div class="widget-int">3,548</div>
                                    </div>
									
									<div>                                    
                                        <div class="widget-title">female</div>                                                                        
                                        <div class="widget-subtitle">27/08/2014 15:23</div>
                                        <div class="widget-int">3,548</div>
                                    </div>
									
                                    <div>                                    
                                        <div class="widget-title">parents</div>
                                         <div class="widget-subtitle">27/08/2014 15:23</div>
                                        <div class="widget-int">1,695</div>
                                    </div>
                                   <!-- <div>                                    
                                        <div class="widget-title">parents</div>
                                        <div class="widget-subtitle">Visitors</div>
                                        <div class="widget-int">1,977</div>
                                    </div>-->
                                </div>                            
                                <div class="widget-controls">                                
                                    <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
                                </div>                             
                            </div>         
                            <!-- END WIDGET SLIDER -->
                            
                        </div>
                        <div class="col-md-3">
                            
                            <!-- START WIDGET MESSAGES -->
                            <div class="widget widget-default widget-item-icon" onclick="location.href='pages-messages.html';">
                                <div class="widget-item-left">
                                    <span class="fa fa-envelope"></span>
                                </div>                             
                                <div class="widget-data">
                                    <div class="widget-int num-count">48</div>
                                    <div class="widget-title">New messages</div>
                                    <div class="widget-subtitle">In your mailbox</div>
                                </div>      
                                <div class="widget-controls">                                
                                    <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip"
                                       data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
                                </div>
                            </div>                            
                            <!-- END WIDGET MESSAGES -->
                            
                        </div>
                        <div class="col-md-3">
                            
                            <!-- START WIDGET REGISTRED -->
                            <div class="widget widget-default widget-item-icon" onclick="location.href='pages-address-book.html';">
                                <div class="widget-item-left">
                                    <span class="fa fa-user"></span>
                                </div>
                                <div class="widget-data">
                                    <div class="widget-int num-count">375</div>
                                    <div class="widget-title">Registred users</div>
                                    <div class="widget-subtitle">On your website</div>
                                </div>
                                <div class="widget-controls">                                
                                    <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
                                </div>                            
                            </div>                            
                            <!-- END WIDGET REGISTRED -->
                            
                        </div>
                        <div class="col-md-3">
                            
                            <!-- START WIDGET CLOCK -->
                            <div class="widget widget-info widget-padding-sm">
                                <div class="widget-big-int plugin-clock">00:00</div>                            
                                <div class="widget-subtitle plugin-date">Loading...</div>
                                <div class="widget-controls">                                
                                    <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="left" title="Remove Widget"><span class="fa fa-times"></span></a>
                                </div>                            
                                <div class="widget-buttons widget-c3">
                                    <div class="col">
                                        <a href="#"><span class="fa fa-clock-o"></span></a>
                                    </div>
                                    <div class="col">
                                        <a href="#"><span class="fa fa-bell"></span></a>
                                    </div>
                                    <div class="col">
                                        <a href="#"><span class="fa fa-calendar"></span></a>
                                    </div>
                                </div>                            
                            </div>                        
                            <!-- END WIDGET CLOCK -->
                            
                        </div>
                    </div>
                    <!-- END WIDGETS -->                    
                    
                    <div class="row">
                        <div class="col-md-3">
						
                            
                            <!-- START USERS ACTIVITY BLOCK -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="panel-title-box">
                                        <h3>Discussions </h3>
                                        <!--<span>Users </span>-->
                                    </div>                                    
                                     <ul class="panel-controls">
                                       
                                        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                                        <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>                        
                                </div>                                
                                <div class="panel-body padding-0">
                                    <div class="chart-holder" id="dashboard-bar-1" style="height: 200px;"></div>
                                </div>                                    
                            </div>
                            <!-- END USERS ACTIVITY BLOCK -->
                            
                    
						
						 <div class="panel panel-default">
                                <div class="panel-heading ">
                                    <div class="panel-title-box ">
                                        <h3>Finance</h3>
                                        <!--<span>Users vs returning</span>-->
                                    </div>                                    
                                     <ul class="panel-controls">
                                       
                                        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                                        <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>                        
                                </div> 
                                <div class="panel-body">
                                    Use <code>.panel-collapse</code>,<code>.panel-remove</code>,<code>.panel-refresh</code> classes inside panel to get all features.
                                </div>      
                                <div class="panel-footer">                                
                                    <button class="btn btn-primary pull-right">Button</button>
                                </div>                            
                            </div>
						
						
						 <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="panel-title-box">
                                        <h3>Birthdays</h3>
                                        <!--<span>Users vs returning</span>-->
                                    </div>                                    
                                     <ul class="panel-controls">
                                      
                                        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                                        <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>                        
                                </div> 
                                <div class="panel-body">
                                    Use <code>.panel-collapse</code>,<code>.panel-remove</code>,<code>.panel-refresh</code> classes inside panel to get all features.
                                </div>      
                                <div class="panel-footer">                                
                                    <button class="btn btn-primary pull-right">Button</button>
                                </div>                            
                            </div>
						
						
						 <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="panel-title-box">
                                        <h3>Employees on leave</h3>
                                        <!--<span>Users vs returning</span>-->
                                    </div>                                    
                                     <ul class="panel-controls">
                                       
                                        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                                        <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>                        
                                </div> 
                                <div class="panel-body">
                                    Use <code>.panel-collapse</code>,<code>.panel-remove</code>,<code>.panel-refresh</code> classes inside panel to get all features.
                                </div>      
                                <div class="panel-footer">                                
                                    <button class="btn btn-primary pull-right">Button</button>
                                </div>                            
                            </div>
						
						</div>
						
						<div class="col-md-3">
					
						 <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="panel-title-box">
                                        <h3>Polls</h3>
                                        <!--<span>Users vs returning</span>-->
                                    </div>                                    
                                     <ul class="panel-controls">
                                      
                                        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                                        <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>                        
                                </div> 
                                <div class="panel-body">
                                    Use <code>.panel-collapse</code>,<code>.panel-remove</code>,<code>.panel-refresh</code> classes inside panel to get all features.
                                </div>      
                                <div class="panel-footer">                                
                                    <button class="btn btn-primary pull-right">Button</button>
                                </div>                            
                            </div>
						
						
						
						 <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="panel-title-box">
                                        <h3>Students Absent</h3>
                                        <!--<span>Users vs returning</span>-->
                                    </div>                                    
                                     <ul class="panel-controls">
                                       
                                        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                                        <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>                        
                                </div> 
                                <div class="panel-body">
                                    Use <code>.panel-collapse</code>,<code>.panel-remove</code>,<code>.panel-refresh</code> classes inside panel to get all features.
                                </div>      
                                <div class="panel-footer">                                
                                    <button class="btn btn-primary pull-right">Button</button>
                                </div>                            
                            </div>
						
						
						 <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="panel-title-box">
                                        <h3>Placement</h3>
                                        <!--<span>Users vs returning</span>-->
                                    </div>                                    
                                     <ul class="panel-controls">
                                       
                                        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                                        <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>                        
                                </div> 
                                <div class="panel-body">
                                    Use <code>.panel-collapse</code>,<code>.panel-remove</code>,<code>.panel-refresh</code> classes inside panel to get all features.
                                </div>      
                                <div class="panel-footer">                                
                                    <button class="btn btn-primary pull-right">Button</button>
                                </div>                            
                            </div>
						
						
						 <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="panel-title-box">
                                        <h3>Examinations</h3>
                                        <!--<span>Users vs returning</span>-->
                                    </div>                                    
                                     <ul class="panel-controls">
                                       
                                        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                                        <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>                        
                                </div> 
                                <div class="panel-body">
                                    Use <code>.panel-collapse</code>,<code>.panel-remove</code>,<code>.panel-refresh</code> classes inside panel to get all features.
                                </div>      
                                <div class="panel-footer">                                
                                    <button class="btn btn-primary pull-right">Button</button>
                                </div>                            
                            </div>
						
						</div>
						
                        <div class="col-md-3">
                            
                            <!-- START VISITORS BLOCK -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="panel-title-box">
                                        <h3>News</h3>
                                        <!--<span>last month</span>-->
                                    </div>
                                    <ul class="panel-controls">
                                        <!--<li><a href="#" class="panel-fullscreen"><span class="fa fa-expand"></span></a></li>-->
                                        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                                        <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>
                                </div>
                                <div class="panel-body padding-0">
                                    <div class="chart-holder" id="dashboard-donut-1" style="height: 200px;"></div>
                                </div>
                            </div>
								 <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="panel-title-box">
                                        <h3>Relieved Students</h3>
                                        <!--<span>Users vs returning</span>-->
                                    </div>                                    
                                     <ul class="panel-controls">
                                       
                                        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                                        <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>                        
                                </div> 
                                <div class="panel-body">
                                    Use <code>.panel-collapse</code>,<code>.panel-remove</code>,<code>.panel-refresh</code> classes inside panel to get all features.
                                </div>      
                                <div class="panel-footer">                                
                                    <button class="btn btn-primary pull-right">Button</button>
                                </div>                            
                            </div>
								 <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="panel-title-box">
                                        <h3>SMS Sent</h3>
                                        <!--<span>Users vs returning</span>-->
                                    </div>                                    
                                     <ul class="panel-controls">
                                       
                                        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                                        <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>                        
                                </div> 
                                <div class="panel-body">
                                    Use <code>.panel-collapse</code>,<code>.panel-remove</code>,<code>.panel-refresh</code> classes inside panel to get all features.
                                </div>      
                                <div class="panel-footer">                                
                                    <button class="btn btn-primary pull-right">Button</button>
                                </div>                            
                            </div>
								 <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="panel-title-box">
                                        <h3>Tasks Due</h3>
                                        <!--<span>Users vs returning</span>-->
                                    </div>                                    
                                     <ul class="panel-controls">
                                       
                                        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                                        <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>                        
                                </div> 
                                <div class="panel-body">
                                    Use <code>.panel-collapse</code>,<code>.panel-remove</code>,<code>.panel-refresh</code>
                                    classes inside panel to get all features.
                                </div>      
                                <div class="panel-footer">                                
                                    <button class="btn btn-primary pull-right">Button</button>
                                </div>                            
                            </div>
                            <!-- END VISITORS BLOCK -->
                            
                        </div>

						<div class="col-md-3">
                            
                            <!-- START PROJECTS BLOCK -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="panel-title-box">
                                        <h3>Projects</h3>
                                        <!--<span>Projects activity</span>-->
                                    </div>                                    
                                     <ul class="panel-controls">
                                        <!--<li><a href="#" class="panel-fullscreen"><span class="fa fa-expand"></span></a></li>-->
                                        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                                        <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>
                                </div>
                                <div class="panel-body panel-body-table">
                                    
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th width="50%">Project</th>
                                                    <th width="20%">Status</th>
                                                    <th width="30%">Activity</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><strong>Joli Admin</strong></td>
                                                    <td><span class="label label-danger">Developing</span></td>
                                                    <td>
                                                        <div class="progress progress-small progress-striped active">
                                                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 85%;">85%</div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Gemini</strong></td>
                                                    <td><span class="label label-warning">Updating</span></td>
                                                    <td>
                                                        <div class="progress progress-small progress-striped active">
                                                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">40%</div>
                                                        </div>
                                                    </td>
                                                </tr>                                                
                                                <tr>
                                                    <td><strong>Taurus</strong></td>
                                                    <td><span class="label label-warning">Updating</span></td>
                                                    <td>
                                                        <div class="progress progress-small progress-striped active">
                                                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 72%;">72%</div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Leo</strong></td>
                                                    <td><span class="label label-success">Support</span></td>
                                                    <td>
                                                        <div class="progress progress-small progress-striped active">
                                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">100%</div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Virgo</strong></td>
                                                    <td><span class="label label-success">Support</span></td>
                                                    <td>
                                                        <div class="progress progress-small progress-striped active">
                                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">100%</div>
                                                        </div>
                                                    </td>
                                                </tr>                                                
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                    
                                </div>
                            </div>
                            <!-- END PROJECTS BLOCK -->
                            
                        </div>
                    </div>




                    

                    
                    <!-- START DASHBOARD CHART -->
					<div class="chart-holder" id="dashboard-area-1" style="height: 200px;"></div>
					<div class="block-full-width">
                                                                       
                    </div>                    
                    <!-- END DASHBOARD CHART -->
                    
                </div>
                <!-- END PAGE CONTENT WRAPPER -->                
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->
		
		        <!-- MODALS -->
        <div class="modal" id="modal_basic" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="defModalHead">Basic Modal</h4>
                    </div>
                    <div class="modal-body">
                        Some content in modal example
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>




        <!-- START PRELOADS -->
        <audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
        <!-- END PRELOADS -->                 
        
    <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>   

		<script type="text/javascript" src="js/plugins/morris/raphael-min.js"></script>
        <script type="text/javascript" src="js/plugins/morris/morris.min.js"></script>       
        <script type="text/javascript" src="js/plugins/rickshaw/d3.v3.js"></script>
        <script type="text/javascript" src="js/plugins/rickshaw/rickshaw.min.js"></script>
        <script type='text/javascript' src='js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js'></script>
        <script type='text/javascript' src='js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'></script>                
        <script type='text/javascript' src='js/plugins/bootstrap/bootstrap-datepicker.js'></script>                
        <script type="text/javascript" src="js/plugins/owl/owl.carousel.min.js"></script>      		
		
		 <script type="text/javascript" src="js/plugins/moment.min.js"></script>
        <script type="text/javascript" src="js/plugins/daterangepicker/daterangepicker.js"></script>
        <!-- END PLUGINS -->

        <!-- THIS PAGE PLUGINS -->
		        <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
       
        <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        <!-- END PAGE PLUGINS --> 
		<!-------------THIS IS RESPONSIBLE FOR MAKING THE HEADER NAV MOVE------  -->
				<!--<script type="text/javascript" src="js/settings.js"></script>-->
				
				
        <!-- START TEMPLATE -->
        <script type="text/javascript" src="js/plugins.js"></script>        
        <script type="text/javascript" src="js/actions.js"></script>   

 <script type="text/javascript" src="js/demo_dashboard.js"></script>		
        <!-- END TEMPLATE -->
		
    <!-- END SCRIPTS -->         
    </body>
</html>






