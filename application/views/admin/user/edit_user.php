
    <!-- Start Page Content -->

    <div class="row">
        <div class="col-lg-12">

            
           <div class="panel panel-info">
                <div class="panel-heading"> 
                     <i class="fa fa-pencil"></i> &nbsp;User Edit <a href="<?php echo base_url('admin/user/all_user_list') ?>" class="btn btn-info btn-sm pull-right"><i class="fa fa-list"></i> All Users </a>

                </div>
                <div class="panel-body table-responsive">
				
				 <?php $error_msg = $this->session->flashdata('error_msg'); ?>
            <?php if (isset($error_msg)): ?>
                <div class="alert alert-danger delete_msg pull" style="width: 100%"> <i class="fa fa-times"></i> <?php echo $error_msg; ?> &nbsp;
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
                </div>
            <?php endif ?>
			
			
                    <form method="post" action="<?php echo base_url('admin/user/update/'.$user->id_usuario) ?>" class="form-horizontal" novalidate>
                       <div class="form-group">
                 	<label class="col-md-12" for="example-text">nome_usuario</label>
                    <div class="col-sm-12">
                   <input type="text" name="nome_usuario" class="form-control" value="<?php echo $user->nome_usuario; ?>">
                                        </div>
                                    </div>
                              

                           <div class="form-group">
                 	<label class="col-md-12" for="example-text">login</label>
                    <div class="col-sm-12">
                     <input type="text" name="login" class="form-control" value="<?php echo $user->login; ?>">
                                        </div>
                                    </div>
                              

                           <div class="form-group">
                 	<label class="col-md-12" for="example-text">email</label>
                    <div class="col-sm-12">
                   <input type="text" name="email" class="form-control" value="<?php echo $user->email; ?>">
                                        </div>
                                    </div>
                              

                         <div class="form-group">
                  <label class="col-md-12" for="example-text">senha</label>
                    <div class="col-sm-12">
                   <input type="text" name="senha" class="form-control" value="">
                                        </div>
                                    </div>

                                    <div class="form-group">
                  <label class="col-md-12" for="example-text">Perfil</label>
                    <div class="col-sm-12">
                   <select name="cod_pessoa">
                     <?php
if ($user->cod_pessoa == 0) {
  ?>
<option value="0">Admin</option>
<option value="1">User</option>
  <?php
}//fim if ($user->cod_pessoa == 0) {
                     ?>
<?php
                     if ($user->cod_pessoa == 1) {
  ?>
<option value="1">User</option>
<option value="0">Admin</option>
  <?php
}//fim if ($user->cod_pessoa == 1) {
                     ?>
                   </select>
                                        </div>
                                    </div>
                           
						
                                    
                          
	<hr>
                          
                            <!-- CSRF token -->
                            <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" />
  <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-5">
                                  <button type="submit" class="btn btn-info btn-rounded btn-sm"> <i class="fa fa-plus"></i>&nbsp;&nbsp;Save</button>
                            </div>
                        </div>
                           
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- End Page Content -->