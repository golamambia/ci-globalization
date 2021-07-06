<?php 
$banner = $this->AuthModel->fetch_main_page('globalreach_section');?>
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
         

                    <h3 class="card-title" > Banner Section</h3><br>
                    <div class="row">
                        <div class="col-4">
                                <img src="<?php echo $banner->banner_url ?>" alt="" class="img-fluid">
                        </div>
                        <div class="col-8">
                                <h3><?php echo $banner->banner_heading; ?>
                                </h3>
                                <h5><?php echo $banner->banner_content; ?></h5>
                        </div>
                    </div> 
                    <br><br>
                    <div class="row">
                        <div class="col-3">
                         
                            <form role="form" method="post" action="<?=('logo-upload');?>" enctype="multipart/form-data">
                            <input type="file" class="form-control-file" id="profile_pic" name="profile_pic"><br> 
                            <input type="hidden" class="form-control" id="table" name="table" value="globalreach_section"> 
                            <input type="hidden" class="form-control" id="table_filed" name="table_filed" value="banner_url"> 
                            <input type="hidden" class="form-control" id="redirect" name="redirect" value="globalreach-page">
                            <input type="submit" class="btn btn-primary" name="userSubmit" value="Change Banner">
                            </form>               
                        </div>
                        <div class="col-9">
                            <form role="form" method="post" action="<?=('update-globalbanner-text');?>" enctype="multipart/form-data">
                                <div class="form-group">
                                    <small id="" class="form-text text-muted">Heading</small>
                                    <input type="text" class="form-control" name="heading" aria-describedby="heading" placeholder="Heading" value="<?php echo $banner->banner_heading; ?>">
                                </div>   
                                <div class="form-group">
                                  <small id="" class="form-text text-muted">Content</small>
                                  <input type="text" class="form-control" name="content" aria-describedby="content" placeholder="Content" value="<?php echo $banner->banner_content; ?>">
                                </div>   
                                 <input type="submit" class="btn btn-primary" name="userSubmit" value="Update" style="float: right;">
                            </form>               
                        </div>
                    </div>  
                        <br><hr><br>
                        <h3 class="card-title" > About Us Section</h3><br> 
                     <div class="row">
                        <div class="col-4">
                                <img src="<?php echo $banner->about_us_banner_url	 ?>" alt="" class="img-fluid">
                        </div>
                        <div class="col-8">
                                <h3><?php echo $banner->about_us_content	; ?></h3>
                        </div>
                    </div> 
                    <br><br>
                    <div class="row">
                        <div class="col-3">
                         
                            <form role="form" method="post" action="<?=('logo-upload');?>" enctype="multipart/form-data">
                            <input type="file" class="form-control-file" id="profile_pic" name="profile_pic"><br> 
                            <input type="hidden" class="form-control" id="table" name="table" value="globalreach_section"> 
                            <input type="hidden" class="form-control" id="redirect" name="redirect" value="globalreach-page">
                            <input type="hidden" class="form-control" id="table_filed" name="table_filed" value="about_us_banner_url"> 
                            <input type="submit" class="btn btn-primary" name="userSubmit" value="Change Banner">
                            </form>               
                        </div>
                        <div class="col-9">
                            <form role="form" method="post" action="<?=('update-globalabout-text');?>" enctype="multipart/form-data">
                                <div class="form-group">
                                    <small id="" class="form-text text-muted">Content</small>
                                    <input type="text" class="form-control" name="content" aria-describedby="content" placeholder="Content" value="<?php echo $banner->about_us_content; ?>">
                                </div>   
                                   
                                 <input type="submit" class="btn btn-primary" name="userSubmit" value="Update" style="float: right;">
                            </form>               
                        </div>
                    </div>  
                        <br><hr><br>
                   
                    
                       
                        <h3 class="card-title" >service header</h3><br> 
                        <div class="col-12">
                            <form role="form" method="post" action="<?=('update-about-us');?>" enctype="multipart/form-data">
                                <div class="form-group">
                                    <small id="" class="form-text text-muted">Html Source</small>
                                    <textarea id="heading" name="heading" class="form-control" rows="4" cols="50"><?php echo $banner->service_section; ?></textarea>
                                      </div>   
                                <input type="hidden" class="form-control" id="table" name="table" value="globalreach_section"> 
                            <input type="hidden" class="form-control" id="redirect" name="redirect" value="globalreach-page">
                            <input type="hidden" class="form-control" id="col" name="col" value="service_section">
                           
                                 <input type="submit" class="btn btn-primary" name="userSubmit" value="Update" style="float: right;">
                            </form>               
                        </div>
                    <br><hr><br>
                    <h3 class="card-title" >Country portfolio</h3><br> 
                        <div class="col-12">
                            <form role="form" method="post" action="<?=('update-about-us');?>" enctype="multipart/form-data">
                                <div class="form-group">
                                    <small id="" class="form-text text-muted">Html Source</small>
                                    <textarea id="heading" name="heading" class="form-control" rows="4" cols="50"><?php echo $banner->country_section; ?></textarea>
                                      </div>   
                                <input type="hidden" class="form-control" id="table" name="table" value="globalreach_section"> 
                            <input type="hidden" class="form-control" id="redirect" name="redirect" value="globalreach-page">
                            <input type="hidden" class="form-control" id="col" name="col" value="country_section">
                           
                                 <input type="submit" class="btn btn-primary" name="userSubmit" value="Update" style="float: right;">
                            </form>               
                        </div>
            </div>
                    
        </div>
               
    </div>
</div>