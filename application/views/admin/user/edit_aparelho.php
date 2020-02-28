
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
			
			
                   <form method="post" action="<?php echo base_url('admin/Aparelhos_controller/update/'.$aparelhos->id_aparelho); ?>" class="form-horizontal" novalidate>
                       <div class="form-group">
                  <label class="col-md-12" for="example-text">id_aparelho</label>
                    <div class="col-sm-12">
                                            <input type="number" name="id_aparelho" class="form-control"  required data-validation-required-message="id_aparelho is required" value="<?php echo $aparelhos->id_aparelho; ?>">
                                        </div>
                                    </div>
                              

                           <div class="form-group">
                  <label class="col-md-12" for="example-text">descricao_aparelho</label>
                    <div class="col-sm-12">
                                            <input type="text" name="descricao_aparelho" class="form-control" required data-validation-required-message="descricao_aparelho is required" value="<?php echo $aparelhos->descricao_aparelho; ?>">
                                        </div>
                                    </div>
                              

                           <div class="form-group">
                  <label class="col-md-12" for="example-text">codigo_aparelho</label>
                    <div class="col-sm-12">
                                            <input type="number" name="codigo_aparelho" class="form-control" required data-validation-required-message="codigo_aparelho is required" value="<?php echo $aparelhos->codigo_aparelho; ?>">
                                        </div>
                                    </div>
                              

                          
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