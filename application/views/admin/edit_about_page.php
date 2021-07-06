<?php 
$banner = $this->AuthModel->fetch_main_page('about_section');
$table="about_section";
$redirect="about-page";
?>
<div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item">Index Page Editor
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
         

                    <h3 class="card-title" > About page</h3><br>
                    
                    <br><br>
                    <div class="row">
                        <div class="col-3">
                         
                            <form role="form" method="post" action="<?=('logo-upload');?>" enctype="multipart/form-data">
                            <input type="file" class="form-control-file" id="profile_pic" name="profile_pic"><br> 
                            <input type="hidden" class="form-control" id="table" name="table" value="<?php echo $table?>"> 
                            <input type="hidden" class="form-control" id="redirect" name="redirect" value="<?php echo $redirect?>">
                            <input type="hidden" class="form-control" id="table_filed" name="table_filed" value="banner_url"> 
                            <input type="submit" class="btn btn-primary" name="userSubmit" value="Change Banner">
                            </form>               
                        </div>
                        <div class="col-9">
                            <form role="form" method="post" action="<?=('update-about-us');?>" enctype="multipart/form-data">
                                <div class="form-group">
                                    <small id="" class="form-text text-muted">Html Source</small>
                                    <textarea id="heading" name="heading" class="form-control" rows="4" cols="50"><?php echo $banner->banner_heading; ?></textarea>
                                      </div>   
                                <input type="hidden" class="form-control" id="table" name="table" value="<?php echo $table?>"> 
                            <input type="hidden" class="form-control" id="redirect" name="redirect" value="<?php echo $redirect?>">
                            <input type="hidden" class="form-control" id="col" name="col" value="banner_heading">
                           
                                 <input type="submit" class="btn btn-primary" name="userSubmit" value="Update" style="float: right;">
                            </form>               
                        </div>
                    </div>  
                        <br><hr><br>
                        <h3 class="card-title" > Our Approach page</h3><br>
                   
                    
                        <div class="col-12">
                            <form role="form" method="post" action="<?=('update-about-us');?>" enctype="multipart/form-data">
                                <div class="form-group">
                                    <small id="" class="form-text text-muted">Html Source</small>
                                    <textarea id="heading" name="heading" class="form-control" rows="4" cols="50"><?php echo $banner->our_approach; ?></textarea>
                                      </div>   
                                <input type="hidden" class="form-control" id="table" name="table" value="<?php echo $table?>"> 
                            <input type="hidden" class="form-control" id="redirect" name="redirect" value="<?php echo $redirect?>">
                            <input type="hidden" class="form-control" id="col" name="col" value="our_approach">
                           
                                 <input type="submit" class="btn btn-primary" name="userSubmit" value="Update" style="float: right;">
                            </form>               
                        </div>
                  
                        <br><hr><br>
                        <h3 class="card-title" > Social Responsbility page</h3><br>
                   
                    
                        <div class="col-12">
                            <form role="form" method="post" action="<?=('update-about-us');?>" enctype="multipart/form-data">
                                <div class="form-group">
                                    <small id="" class="form-text text-muted">Html Source</small>
                                    <textarea id="heading" name="heading" class="form-control" rows="4" cols="50"><?php echo $banner->soc_res; ?></textarea>
                                      </div>   
                                <input type="hidden" class="form-control" id="table" name="table" value="<?php echo $table?>"> 
                            <input type="hidden" class="form-control" id="redirect" name="redirect" value="<?php echo $redirect?>">
                            <input type="hidden" class="form-control" id="col" name="col" value="soc_res">
                           
                                 <input type="submit" class="btn btn-primary" name="userSubmit" value="Update" style="float: right;">
                            </form>               
                        </div>
                        <br><hr><br>
                        <h3 class="card-title" > Diversity page</h3><br>
                   
                    
                        <div class="col-12">
                            <form role="form" method="post" action="<?=('update-about-us');?>" enctype="multipart/form-data">
                                <div class="form-group">
                                    <small id="" class="form-text text-muted">Html Source</small>
                                    <textarea id="heading" name="heading" class="form-control" rows="4" cols="50"><?php echo $banner->diversity; ?></textarea>
                                      </div>   
                                <input type="hidden" class="form-control" id="table" name="table" value="<?php echo $table?>"> 
                            <input type="hidden" class="form-control" id="redirect" name="redirect" value="<?php echo $redirect?>">
                            <input type="hidden" class="form-control" id="col" name="col" value="diversity">
                           
                                 <input type="submit" class="btn btn-primary" name="userSubmit" value="Update" style="float: right;">
                            </form>               
                        </div>
                        <br><hr><br>
                        <h3 class="card-title" > Wrok With US page</h3><br>
                   
                    
                        <div class="col-12">
                            <form role="form" method="post" action="<?=('update-about-us');?>" enctype="multipart/form-data">
                                <div class="form-group">
                                    <small id="" class="form-text text-muted">Html Source</small>
                                    <textarea id="heading" name="heading" class="form-control" rows="4" cols="50"><?php echo $banner->work_with_us; ?></textarea>
                                      </div>   
                                <input type="hidden" class="form-control" id="table" name="table" value="<?php echo $table?>"> 
                            <input type="hidden" class="form-control" id="redirect" name="redirect" value="<?php echo $redirect?>">
                            <input type="hidden" class="form-control" id="col" name="col" value="work_with_us">
                           
                                 <input type="submit" class="btn btn-primary" name="userSubmit" value="Update" style="float: right;">
                            </form>               
                        </div>
                      <br><hr><br>
                        <h3 class="card-title" > Carrer page</h3><br>
                   
                    
                        <div class="col-12">
                            <form role="form" method="post" action="<?=('update-about-us');?>" enctype="multipart/form-data">
                                <div class="form-group">
                                    <small id="" class="form-text text-muted">Html Source</small>
                                    <textarea id="heading" name="heading" class="form-control" rows="4" cols="50"><?php echo $banner->carrer; ?></textarea>
                                      </div>   
                                <input type="hidden" class="form-control" id="table" name="table" value="<?php echo $table?>"> 
                            <input type="hidden" class="form-control" id="redirect" name="redirect" value="<?php echo $redirect?>">
                            <input type="hidden" class="form-control" id="col" name="col" value="carrer">
                           
                                 <input type="submit" class="btn btn-primary" name="userSubmit" value="Update" style="float: right;">
                            </form>               
                        </div>

            </div>
                    
        </div>
               
    </div>
</div>