<?php include 'layout/css.php'; ?>

    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <div id="wrapper"> 
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="icon-grid"></i></a>
                <div class="top-left-part"><a class="logo" href="<?php echo base_url('admin/dashboard/') ?>"><b><img src="<?php echo base_url();?>optimum/small.png" alt="Codeig" /></b><span class="hidden-xs">Igniter Admin</span></a></div>
                <ul class="nav navbar-top-links navbar-left hidden-xs">
                    <li><a href="javascript:void(0)" class="open-close hidden-xs"><i class="icon-grid"></i></a></li>
                    <li>
                        <form><div class="nc-search" role="search" style="position: relative; display: flex; flex-flow: row wrap; margin: 0px auto; padding: 0.75em 0px 0px; font-family: -apple-system, blinkmacsystemfont, 'segoe ui', roboto, oxygen, ubuntu, cantarell, 'fira sans', 'droid sans', 'helvetica neue', sans-serif;"><input  type="text" id="search_input" name="search_key" placeholder="Search for anything here ..." class="form-control" style="flex: 1 1 0%; min-width: 400px; min-height: 42px; padding: 0px 0.5em; border: 1px solid #d6d6d6; font-size: 1.125em; line-height: 20px; margin-right: 0px !important; margin-top: 0px !important; border-top-left-radius: 5px !important; border-top-right-radius: 0px !important; border-bottom-right-radius: 0px !important; border-bottom-left-radius: 5px !important;" autocomplete="off" placeholder="e.g. example.com" autocorrect="off" spellcheck="false" autocapitalize="off" type="text" required><input style="flex: 0 1 0%; min-width: 94px; width: 94px; padding: 0px 1em; font-size: 1.125em; line-height: 20px; text-align: center; border: 1px solid rgb(222, 55, 35); color: rgb(255, 255, 255); text-shadow: rgb(222, 55, 35) 0px -1px 1px; background: rgba(0, 0, 0, 0) linear-gradient(rgb(253, 79, 0) 0%, rgb(222, 55, 35) 100%) repeat scroll 0% 0%; cursor: pointer; min-height: 42px !important; margin-left: 0px !important; margin-top: 0px !important; border-radius: 0px 5px 5px 0px !important;" value="Search" type="submit"></form>
                    </li>
                </ul>
                
                <ul class="nav navbar-top-links navbar-right pull-right">
                <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-fax"></i>
                    
          <div class=""><span class=""></span><span class="point"></span></div>
          </a>
         
           <ul class="dropdown-menu  animated bounceInDown">
           
                         
                       <!-- calculator-->
            <style>
                .calculator_button{
                    border : 1px solid #303641;
                    width: 50px;
                    background-color: #5A606C;
                    color: #F5FAFC;
                    cursor:auto;
                }
                .calculator_button:hover{
                    border : 1px solid #303641;
                    background-color: #5A606C;
                    color: #F5FAFC;
                }
                .calculator_button:focus{
                    border : 1px solid #303641;
                    background-color: #5A606C;
                    color: #F5FAFC;
                }
            </style>    
            <form name="form1" onsubmit="return false">
            <table style="">
                <tr>
                    <td colspan="4"><input type="text" id="display" style="width:100%; border:0px; background-color:#303641;text-align: right;  font-size: 24px;  font-weight: 100;  color: #fff;" readonly placeholder="0" /></td>
                </tr>
                <tr>
                    <td colspan="4"><button type="button" class="btn btn-default calculator_button" style="width:100%;"  onclick="reset()">Clear</button></td>
                </tr>
                <tr>
                    <td><button type="button" class="btn btn-default calculator_button" onclick="displaynum(7)">7</button></td>
                    <td><button type="button" class="btn btn-default calculator_button" onclick="displaynum(8)" >8</button></td>
                    <td><button type="button" class="btn btn-default calculator_button" onclick="displaynum(9)" >9</button></td>
                    <td><button type="button" class="btn btn-default calculator_button" onclick="operator(&quot;+&quot;)">+</button></td>
                </tr>
                <tr>
                    <td><button type="button" class="btn btn-default calculator_button" onclick="displaynum(4)">4</button></td>
                    <td><button type="button" class="btn btn-default calculator_button" onclick="displaynum(5)" >5</button></td>
                    <td><button type="button" class="btn btn-default calculator_button" onclick="displaynum(6)" >6</button></td>
                    <td><button type="button" class="btn btn-default calculator_button" onclick="operator(&quot;-&quot;)" >-</button></td>
                </tr>
                <tr>
                    <td><button type="button" class="btn btn-default calculator_button" onclick="displaynum(1)">1</button></td>
                    <td><button type="button" class="btn btn-default calculator_button" onclick="displaynum(2)" >2</button></td>
                    <td><button type="button" class="btn btn-default calculator_button" onclick="displaynum(3)" >3</button></td>
                    <td><button type="button" class="btn btn-default calculator_button" onclick="operator(&quot;*&quot;)" >&times;</button></td>
                </tr>
                <tr>
                    <td><button type="button" class="btn btn-default calculator_button" onclick="displaynum(0)">0</button></td>
                    <td><button type="button" class="btn btn-default calculator_button" onclick="displaynum(&quot;.&quot;)" >.</button></td>
                    <td><button type="button" class="btn btn-default calculator_button" onclick="equals()" >=</button></td>
                    <td><button type="button" class="btn btn-default calculator_button" onclick="operator(&quot;/&quot;)" >&divide;</button></td>
                </tr>
            </table>
            </form>
                   
                    </ul>
                                        
                        
                        
                        <!-- /.dropdown-messages -->
                    </li>
                    <!-- /.dropdown -->
                    
                    
                

 <ul class="nav navbar-top-links navbar-right pull-right">
                <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-language"></i>
                    
          <div class=""><span class=""></span><span class="point"></span></div>
          </a>
         
           <ul class="dropdown-menu  animated bounceInDown">
           
                         
                            <li class="active">
                                <a href="">
                                    <img src="<?php echo base_url(); ?>optimum/flag/english.png" style="width:16px; height:16px;" />    
                                    <span>English</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="">
                                    <img src="<?php echo base_url(); ?>optimum/flag/arabic.png" style="width:16px; height:16px;" /> 
                                    <span>Arabic</span>
                                </a>
                            </li>
                            
                            <li class="">
                                <a href="">
                                    <img src="<?php echo base_url(); ?>optimum/flag/german.png" style="width:16px; height:16px;" /> 
                                    <span>German</span>
                                </a>
                            </li>
                            
                            <li class="">
                                <a href="">
                                    <img src="<?php echo base_url(); ?>optimum/flag/dutch.png" style="width:16px; height:16px;" />  
                                    <span>Dutch</span>
                                </a>
                            </li>
                            
                            <li class="">
                                <a href="">
                                    <img src="<?php echo base_url(); ?>optimum/flag/french.png" style="width:16px; height:16px;" /> 
                                    <span>French</span>
                                </a>
                            </li>
                            
                            <li class="">
                                <a href="">
                                    <img src="<?php echo base_url(); ?>optimum/flag/bengali.png" style="width:16px; height:16px;" />    
                                    <span>Bengali</span>
                                </a>
                            </li>
                            
                            <li class="">
                                <a href="">
                                    <img src="<?php echo base_url(); ?>optimum/flag/italian.png" style="width:16px; height:16px;" />    
                                    <span>Italian</span>
                                </a>
                            </li>
                            
                            <li class="">
                                <a href="">
                                    <img src="<?php echo base_url(); ?>optimum/flag/russian.png" style="width:16px; height:16px;" />    
                                    <span>Russian</span>
                                </a>
                            </li>
                            
                            <li class="">
                                <a href="">
                                    <img src="<?php echo base_url(); ?>optimum/flag/spanish.png" style="width:16px; height:16px;" />    
                                    <span>Spanish</span>
                                </a>
                            </li>
                            
                            <li class="">
                                <a href="">
                                    <img src="<?php echo base_url(); ?>optimum/flag/thai.png" style="width:16px; height:16px;" />   
                                    <span>Thai</span>
                                </a>
                            </li>
                            
                            <li class="">
                                <a href="">
                                    <img src="<?php echo base_url(); ?>optimum/flag/turkish.png" style="width:16px; height:16px;" />    
                                    <span>Turkish</span>
                                </a>
                            </li>
                            
                                <li class="">
                                <a href="">
                                    <img src="<?php echo base_url(); ?>optimum/flag/greek.png" style="width:16px; height:16px;" />  
                                    <span>Greek</span>
                                </a>
                            </li>
                            
                            <li class="">
                                <a href="">
                                    <img src="<?php echo base_url(); ?>optimum/flag/urdu.png" style="width:16px; height:16px;" />   
                                    <span>Urdu</span>
                                </a>
                            </li>
                            
                            <li class="">
                                <a href="">
                                    <img src="<?php echo base_url(); ?>optimum/flag/indonesian.png" style="width:16px; height:16px;" /> 
                                    <span>Indonesian</span>
                                </a>
                            </li>
                            
                            <li class="">
                                <a href="">
                                    <img src="<?php echo base_url(); ?>optimum/flag/hungarian.png" style="width:16px; height:16px;" />  
                                    <span>Hungarian</span>
                                </a>
                            </li>
                            
                            <li class="">
                                <a href="">
                                    <img src="<?php echo base_url(); ?>optimum/flag/hindi.png" style="width:16px; height:16px;" />  
                                    <span>Hindi</span>
                                </a>
                            </li>
                   
                    </ul>
                                        
                        
                        
                        <!-- /.dropdown-messages -->
                    </li>
                    <!-- /.dropdown -->
                    
                    
                    
                    
                    
                     <ul class="nav navbar-top-links navbar-right pull-right">
                    <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-screen-desktop"></i>
          <div class="notify"><span class=""></span><span class=""></span></div>
          </a>
                        <ul class="dropdown-menu mailbox animated bounceInRight">
                            <li>
                                <div class="drop-title">You have 4 new messages</div>
                            </li>
                            <li>
                                <div class="message-center">
                                    <a href="#">
                                        <div class="user-img"> <img src="<?php echo base_url();?>optimum/plugins/images/users/pawandeep.jpg" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                                        <div class="mail-contnet">
                                            <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:30 AM</span> </div>
                                    </a>
                                    <a href="#">
                                        <div class="user-img"> <img src="<?php echo base_url();?>optimum/plugins/images/users/sonu.jpg" alt="user" class="img-circle"> <span class="profile-status busy pull-right"></span> </div>
                                        <div class="mail-contnet">
                                            <h5>Sonu Nigam</h5> <span class="mail-desc">I've sung a song! See you at</span> <span class="time">9:10 AM</span> </div>
                                    </a>
                                    <a href="#">
                                        <div class="user-img"> <img src="<?php echo base_url();?>optimum/plugins/images/users/arijit.jpg" alt="user" class="img-circle"> <span class="profile-status away pull-right"></span> </div>
                                        <div class="mail-contnet">
                                            <h5>Arijit Sinh</h5> <span class="mail-desc">I am a singer!</span> <span class="time">9:08 AM</span> </div>
                                    </a>
                                    <a href="#">
                                        <div class="user-img"> <img src="<?php echo base_url();?>optimum/plugins/images/users/pawandeep.jpg" alt="user" class="img-circle"> <span class="profile-status offline pull-right"></span> </div>
                                        <div class="mail-contnet">
                                            <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <a class="text-center" href="javascript:void(0);"> <strong>See all notifications</strong> <i class="fa fa-angle-right"></i> </a>
                            </li>
                        </ul>
                        <!-- /.dropdown-messages -->
                    </li>
                    <!-- /.dropdown -->
                    
                    <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-feed"></i>
          <div class="notify"><span class=""></span><span class=""></span></div>
          </a>
                        <ul class="dropdown-menu dropdown-tasks animated bounceInRight">
                            <li>
                                <a href="#">
                                    <div>
                                        <p> <strong>Task 1</strong> <span class="pull-right text-muted">40% Complete</span> </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> <span class="sr-only">40% Complete (success)</span> </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <p> <strong>Task 2</strong> <span class="pull-right text-muted">20% Complete</span> </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%"> <span class="sr-only">20% Complete</span> </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <p> <strong>Task 3</strong> <span class="pull-right text-muted">60% Complete</span> </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%"> <span class="sr-only">60% Complete (warning)</span> </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <p> <strong>Task 4</strong> <span class="pull-right text-muted">80% Complete</span> </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%"> <span class="sr-only">80% Complete (danger)</span> </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a class="text-center" href="#"> <strong>See All Tasks</strong> <i class="fa fa-angle-right"></i> </a>
                            </li>
                        </ul>
                        <!-- /.dropdown-tasks -->
                    </li>
                    <!-- /.dropdown -->
                    <li class="dropdown">
                        <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"> <img src="<?php echo base_url();?>optimum/images/admin.jpg" alt="user-img" width="36" class="img-circle"><b class="hidden-xs"><?php echo $this->session->userdata('name'); ?></b> </a>
                        <ul class="dropdown-menu dropdown-user animated flipInY">
                            <li><a href="javascript:void(0)"><i class="ti-user"></i>  My Profile</a></li>
                            <li><a href="javascript:void(0)"><i class="ti-email"></i>  Inbox</a></li>
                            <li><a href="javascript:void(0)"><i class="ti-settings"></i>  Account Setting</a></li>
                            <li><a href="<?php echo base_url('auth/logout') ?>"><i class="fa fa-power-off"></i>  Logout</a></li>
                        </ul>
                        <!-- /.dropdown-user -->
                    </li>
                        <!--<li class="right-side-toggle"> <a class="waves-effect waves-light" href="javascript:void(0)"><i class="ti-settings"></i></a></li>-->
                    <!-- /.dropdown -->
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <!-- Left navbar-header -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse slimscrollsidebar">
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search hidden-sm hidden-md hidden-lg">
                        <!-- input-group -->
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search<?php echo base_url();?>optimum."> <span class="input-group-btn">
            <button class="btn btn-default" type="button"> <i class="fa fa-search"></i> </button>
            </span> </div>
                        <!-- /input-group -->
                    </li>
                    <li class="user-pro">
                        <a href="#" class="waves-effect"><img src="<?php echo base_url();?>optimum/images/admin.jpg" alt="user-img" class="img-circle"> <span class="hide-menu"><?php echo $this->session->userdata('name'); ?><span class="fa arrow"></span></span>
                        </a>
                        <ul class="nav nav-second-level">
                            <li><a href="javascript:void(0)"><i class="ti-user"></i> My Profile</a></li>
                            <li><a href="javascript:void(0)"><i class="ti-email"></i> Inbox</a></li>
                            <li><a href="javascript:void(0)"><i class="ti-settings"></i> Account Setting</a></li>
                            <li><a href="<?php echo base_url('auth/logout') ?>"><i class="fa fa-power-off"></i> Logout</a></li>
                        </ul>
                    </li>
                    <li> <a href="<?php echo base_url('admin/dashboard') ?>" class="waves-effect"><i class="ti-dashboard p-r-10"></i> <span class="hide-menu">Dashboard</span></a> </li>
                   
                   
                    
                     <?php if ($this->session->userdata('role') == 'admin'): ?>
                             <li> <a href="<?php echo base_url('admin/user') ?>"><i class="fa fa-plus p-r-10"></i><span class="hide-menu">Cadastrar Usuario</span></a></li>
                           
                              <?php else: ?>
                               <?php if(check_power(1)):?>
                            <li> <a href="<?php echo base_url('admin/user') ?>"><i class="fa fa-plus p-r-10"></i><span class="hide-menu">Cadastrar Usuarios</span></a></li>
                            <?php endif; ?>
                            <?php endif ?>
                        <li><a href="<?php echo base_url('admin/user/all_user_list') ?>"><i class="fa fa-list p-r-10"></i><span class="hide-menu">Ver Todos os usuarios</span></a></li>
                    
                    <li> <a href="<?php echo base_url('admin/Aparelhos_controller') ?>" class="waves-effect"><i class="ti-dashboard p-r-10"></i> <span class="hide-menu">Aparelhos - CRUD</span></a> </li>

                    <li><a href="<?php echo base_url('auth/logout') ?>" class="waves-effect"><i class="icon-logout fa-fw"></i> <span class="hide-menu">Sair</span></a></li>
                </ul>
            </div>
        </div>
        <!-- Left navbar-header end -->
       
       
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                
            <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Admin</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <a href="" target="_blank" class="btn pull-right m-l-20 btn-info btn-rounded btn-sm">Buy Now</a>
                        <ol class="breadcrumb">
                            <li><a href="<?php echo base_url();?>admin/dashboard/">Home</a></li>
                            <li class="active"> <?php echo $page_title; ?></li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>  
                
                
                
                
                <!--  row    ->
               <?php echo $main_content; ?>
                <!-- /.row -->
            
            </div>
            <!-- /.container-fluid -->
           <?php include 'layout/footer.php'; ?>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
   <?php include 'layout/js.php'; ?>
