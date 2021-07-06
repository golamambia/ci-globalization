<?php 
$table='global_billing';
$redirect='global-billing';
$banner = $this->AuthModel->fetch_main_page('global_billing');
?>
<div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item">
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
    </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
<h3 class="card-title" > Banner Section</h3><br>
                    <div class="row">
                        <div class="col-4">
                                <img src="<?php echo $banner->banner_url ?>" alt="" class="img-fluid">
                        </div>
                        <div class="col-8">
                                <h3><?php echo $banner->banner_top1_heading; ?></h3>
                                <h5><?php echo $banner->banner_top2_heading; ?></h5>
                                <h5><?php echo $banner->banner_top3_heading; ?></h5>
                        </div>
                    </div> 
                    <br><br>
                    <div class="row">
                        <div class="col-3">
                         
                            <form role="form" method="post" action="<?=('service-image-upload');?>" enctype="multipart/form-data">
                            <input type="file" class="form-control-file" id="profile_pic" name="profile_pic"><br> 
                            <input type="hidden" class="form-control" id="table" name="table" value="<?php echo $table; ?>"> 
                            <input type="hidden" class="form-control" id="table_filed" name="table_filed" value="banner_url"> 
                            <input type="hidden" class="form-control" id="redirect" name="redirect" value="<?php echo $redirect; ?>"> 
                            <input type="submit" class="btn btn-primary" name="userSubmit" value="Change Banner">
                            </form>               
                        </div>
                        <div class="col-9">
                            <form role="form" method="post" action="<?=('update-servicebanner-text');?>" enctype="multipart/form-data">
                                <div class="form-group">
                                    <small id="" class="form-text text-muted">Heading-1</small>
                                    <input type="text" class="form-control" name="heading1" aria-describedby="heading1" placeholder="Heading-1" value="<?php echo $banner->banner_top1_heading; ?>">
                                </div>   
                                <div class="form-group">
                                  <small id="" class="form-text text-muted">Heading-2</small>
                                  <input type="text" class="form-control" name="heading2" aria-describedby="heading2" placeholder="Heading-2" value="<?php echo $banner->banner_top2_heading; ?>">
                                </div> 
                                <div class="form-group">
                                  <small id="" class="form-text text-muted">Heading-3</small>
                                  <input type="text" class="form-control" name="heading3" aria-describedby="heading3" placeholder="Heading-3" value="<?php echo $banner->banner_top3_heading; ?>">
                                </div> 
                                <input type="hidden" class="form-control" name="table" aria-describedby="table" placeholder="table" value="<?php echo $table; ?>">
                                <input type="hidden" class="form-control" id="redirect" name="redirect" value="<?php echo $redirect; ?>"> 
                            
                                 <input type="submit" class="btn btn-primary" name="userSubmit" value="Update" style="float: right;">
                            </form>               
                        </div>
                    </div>  
                        <br><hr><br>
                        <h3 class="card-title" > Content Section</h3><br> 
                    <div class="row">
                        <div class="col-6">
                        <h3><?php echo $banner->section2_heading; ?></h3>
                        <h5><?php echo $banner->section_content; ?></h5>
                                         
                        </div>
                        <div class="col-6">
                            <form role="form" method="post" action="<?=('update-servicesection-text');?>" enctype="multipart/form-data">
                                <div class="form-group">
                                    <small id="" class="form-text text-muted">Heading</small>
                                    <input type="text" class="form-control" name="heading" aria-describedby="heading" placeholder="Heading" value="<?php echo $banner->section2_heading; ?>">
                                </div>   
                                <div class="form-group">
                                  <small id="" class="form-text text-muted">Content</small>
                                  <input type="text" class="form-control" name="content" aria-describedby="content" placeholder="Content" value="<?php echo $banner->section_content; ?>">
                                </div>   
                                <input type="hidden" class="form-control" name="table" aria-describedby="table" placeholder="table" value="<?php echo $table; ?>">
                                <input type="hidden" class="form-control" id="redirect" name="redirect" value="<?php echo $redirect; ?>"> 
                            
                                
                                 <input type="submit" class="btn btn-primary" name="userSubmit" value="Update" style="float: right;">
                            </form>               
                        </div>
                    </div>
                    <br><hr><br>
                    <h3 class="card-title" >Other Html</h3><br> 
                        <div class="col-12">
                            <form role="form" method="post" action="<?=('update-about-us');?>" enctype="multipart/form-data">
                                <div class="form-group">
                                    <small id="" class="form-text text-muted">Html Source</small>
                                    <textarea id="heading" name="heading" class="form-control" rows="4" cols="50"><?php echo $banner->other_section; ?></textarea>
                                      </div>   
                                <input type="hidden" class="form-control" id="table" name="table" value="<?php echo $table; ?>"> 
                            <input type="hidden" class="form-control" id="redirect" name="redirect" value="<?php echo $redirect; ?>">
                            <input type="hidden" class="form-control" id="col" name="col" value="other_section">
                           
                                 <input type="submit" class="btn btn-primary" name="userSubmit" value="Update" style="float: right;">
                            </form>               
                        </div>
                    <br><hr><br>
                </div>
             </div>
        </div>
    </div>
  </div>