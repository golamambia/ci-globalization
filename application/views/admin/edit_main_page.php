<?php 
$result = $this->AuthModel->fetch_main_page('header_section');
$banner = $this->AuthModel->fetch_main_page('banner_section');
$testinomial = $this->AuthModel->fetch_main_page('testinomial');
?>
   <!-- ============================================================== -->
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
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                        <h3 class="card-title" > Logo Section</h3><br>
                        <div class="row">
                        <div class="col-4">
                        <img src="<?php echo $result->logo_url ?>" alt="" class="img-fluid"></div>
<div class="col-8">
<?php echo $this->session->flashdata('success_msg'); ?>
<?php echo $this->session->flashdata('error_msg'); ?>
<form role="form" method="post" action="<?=('logo-upload');?>" enctype="multipart/form-data">
<input type="file" class="form-control-file" id="profile_pic" name="profile_pic"><br> 
<input type="hidden" class="form-control" id="table" name="table" value="header_section">
<input type="hidden" class="form-control" id="table_filed" name="table_filed" value="logo_url">
 <input type="submit" class="btn btn-primary" name="userSubmit" value="Change Logo" style="float: right;">
</form>               
</div>
                           </div> <br><hr><br>

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
                            <input type="hidden" class="form-control" id="table" name="table" value="banner_section"> 
                            <input type="hidden" class="form-control" id="table_filed" name="table_filed" value="banner_url"> 
                            <input type="submit" class="btn btn-primary" name="userSubmit" value="Change Banner">
                            </form>               
                        </div>
                        <div class="col-9">
                            <form role="form" method="post" action="<?=('update-banner-text');?>" enctype="multipart/form-data">
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

                    <h3 class="card-title" > Services Section</h3><br> 
                    <div class="row">
                        <div class="col-6">
                        <h3><?php echo $banner->service_heading; ?></h3>
                        <h5><?php echo $banner->service_content; ?></h5>
                                         
                        </div>
                        <div class="col-6">
                            <form role="form" method="post" action="<?=('update-service-text');?>" enctype="multipart/form-data">
                                <div class="form-group">
                                    <small id="" class="form-text text-muted">Heading</small>
                                    <input type="text" class="form-control" name="heading" aria-describedby="heading" placeholder="Heading" value="<?php echo $banner->service_heading; ?>">
                                </div>   
                                <div class="form-group">
                                  <small id="" class="form-text text-muted">Content</small>
                                  <input type="text" class="form-control" name="content" aria-describedby="content" placeholder="Content" value="<?php echo $banner->service_content; ?>">
                                </div>   
                                 <input type="submit" class="btn btn-primary" name="userSubmit" value="Update" style="float: right;">
                            </form>               
                        </div>
                    </div>
                    <br><hr><br>
                    <h3 class="card-title" >  Add Services </h3><br> 
                    <div class="col-12">
                            <form role="form" method="post" action="<?=('update-about-us');?>" enctype="multipart/form-data">
                                <div class="form-group">
                                    <small id="" class="form-text text-muted">Html Source</small>
                                    <textarea id="heading" name="heading" class="form-control" rows="4" cols="50"><?php echo $banner->add_service_html; ?></textarea>
                                      </div>   
                                <input type="hidden" class="form-control" id="table" name="table" value="banner_section"> 
                            <input type="hidden" class="form-control" id="redirect" name="redirect" value="main-page">
                            <input type="hidden" class="form-control" id="col" name="col" value="add_service_html">
                           
                                 <input type="submit" class="btn btn-primary" name="userSubmit" value="Update" style="float: right;">
                            </form>               
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
                            <input type="hidden" class="form-control" id="table" name="table" value="banner_section"> 
                            <input type="hidden" class="form-control" id="table_filed" name="table_filed" value="about_us_banner_url"> 
                            <input type="submit" class="btn btn-primary" name="userSubmit" value="Change Banner">
                            </form>               
                        </div>
                        <div class="col-9">
                            <form role="form" method="post" action="<?=('update-about-text');?>" enctype="multipart/form-data">
                                <div class="form-group">
                                    <small id="" class="form-text text-muted">Content</small>
                                    <input type="text" class="form-control" name="content" aria-describedby="content" placeholder="Content" value="<?php echo $banner->about_us_content; ?>">
                                </div>   
                                   
                                 <input type="submit" class="btn btn-primary" name="userSubmit" value="Update" style="float: right;">
                            </form>               
                        </div>
                    </div>  
                        <br><hr><br>
                        <h3 class="card-title" > Our Clients Say About Us Section</h3><br> 
                        <div class="col-12">
                            <form role="form" method="post" action="<?=('update-about-us');?>" enctype="multipart/form-data">
                                <div class="form-group">
                                    <small id="" class="form-text text-muted">Html Source</small>
                                    <textarea id="heading" name="heading" class="form-control" rows="4" cols="50"><?php echo $banner->testinomial_html; ?></textarea>
                                      </div>   
                                <input type="hidden" class="form-control" id="table" name="table" value="banner_section"> 
                            <input type="hidden" class="form-control" id="redirect" name="redirect" value="main-page">
                            <input type="hidden" class="form-control" id="col" name="col" value="testinomial_html">
                           
                                 <input type="submit" class="btn btn-primary" name="userSubmit" value="Update" style="float: right;">
                            </form>               
                        </div>
                    <br><hr><br>
                    <h3 class="card-title" >contact  Us  today Section</h3><br> 
                     <div class="row">
                        <div class="col-4">
                                <img src="<?php echo $banner->today_url	 ?>" alt="" class="img-fluid">
                        </div>
                        <div class="col-8">
                                <h3><?php echo $banner->today_content	; ?></h3>
                        </div>
                    </div> 
                    <br><br>
                    <div class="row">
                        <div class="col-4">
                         
                            <form role="form" method="post" action="<?=('logo-upload');?>" enctype="multipart/form-data">
                            <input type="file" class="form-control-file" id="profile_pic" name="profile_pic"><br> 
                            <input type="hidden" class="form-control" id="table" name="table" value="banner_section"> 
                            <input type="hidden" class="form-control" id="table_filed" name="table_filed" value="today_url"> 
                            <input type="submit" class="btn btn-primary" name="userSubmit" value="Change Banner">
                            </form>               
                        </div>
                        <div class="col-8">
                            <form role="form" method="post" action="<?=('update-today-text');?>" enctype="multipart/form-data">
                                <div class="form-group">
                                    <small id="" class="form-text text-muted">Content</small>
                                    <input type="text" class="form-control" name="content" aria-describedby="content" placeholder="Content" value="<?php echo $banner->today_content; ?>">
                                </div>   
                                   
                                 <input type="submit" class="btn btn-primary" name="userSubmit" value="Update" style="float: right;">
                            </form>               
                        </div>
                    </div>  
                        <br><hr><br>
                <div class="row">
                <div class="col-4">
                <h3 class="card-title" >Address</h3><br> 
                <h3><?php echo $result->address	; ?></h3>
                </div>
                <div class="col-4">
                <h3 class="card-title" >Email</h3><br> 
                <h3><?php echo $result->email	; ?></h3>
                </div>   
                <div class="col-4">
                <h3 class="card-title" >Contact</h3><br> 
                <h3><?php echo $result->contact; ?></h3>
                </div> 
            </div> 
            <form role="form" method="post" action="<?=('update-address-text');?>" enctype="multipart/form-data">
                               
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Address" name="address" value="<?php echo $result->address; ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Email" name="email" value="<?php echo $result->email; ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Contact" name ="contact" value="<?php echo $result->contact; ?>">
                                                </div>
                                            </div>
                                            
                                        </div> 
                                        <input type="submit" class="btn btn-primary" name="userSubmit" value="Update" style="float: right;">
                            </form>
            </div>
                    
        </div>
               
    </div>
</div>