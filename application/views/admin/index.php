
    <?php 
$row = $this->AuthModel->fetch_contact('user_contact_form');
$subscribe = $this->AuthModel->fetch_contact('subscribe');
$request = $this->AuthModel->fetch_contact('request');
?>
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item">Dashboard
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                  
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- *************************************************************** -->
                <div class="card-group">
                    <div class="card border-right">
                        <div class="card-body">
                            <h4 class="card-title">Top request</h4>
                        <div class="table-responsive">
                                    <table class="table no-wrap v-middle mb-0">
                                        <thead>
                                            <tr class="border-0">
                                            
                                                <th class="border-0 font-14 font-weight-medium text-muted">Name
                                                </th>
                                                <th class="border-0 font-14 font-weight-medium text-muted">Email
                                                </th>
                                                <th class="border-0 font-14 font-weight-medium text-muted">Country
                                                </th>
                                                <th class="border-0 font-14 font-weight-medium text-muted">Expand
                                                </th>
                                                <th class="border-0 font-14 font-weight-medium text-muted">Message
                                                </th>
                                                <th class="border-0 font-14 font-weight-medium text-muted">Time
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                      <?php foreach( $request as $req ) {  ?>
                                      
                                         <tr>
                                                <td class="border-0 font-14"><?php echo $req->fname.' '.$req->lname;?></td>
                                                <td class="border-0 font-14"><?php echo $req->bemail;?></td>
                                                <td class="border-0 font-14"><?php echo $req->located;?></td>
                                                <td class="border-0 font-14"><?php echo $req->expand;?></td>
                                                <td class="border-0 font-14"><?php echo $req->message;?></td>
                                                <td class="border-0 font-14"><?php echo $req->time;?></td>
                                               
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                        </div>
                    </div>
                   
                    
                </div>
                <!-- Start First Cards -->
                <!-- *************************************************************** -->
                <div class="card-group">
                    <div class="card border-right">
                        <div class="card-body">
                            <h4 class="card-title">Top Subscribe</h4>
                        <div class="table-responsive">
                                    <table class="table no-wrap v-middle mb-0">
                                        <thead>
                                            <tr class="border-0">
                                            
                                                <th class="border-0 font-14 font-weight-medium text-muted">Email
                                                </th>
                                                <th class="border-0 font-14 font-weight-medium text-muted">Time
                                                </th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                      <?php foreach( $subscribe as $sus ) {  ?>
                                      
                                         <tr>
                                                <td class="border-0 font-14"><?php echo $sus->email;?></td>
                                                <td class="border-0 font-14"><?php echo $sus->time;?></td>
                                               
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                        </div>
                    </div>
                   
                    
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-4">
                                    <h4 class="card-title">Top contact</h4>
                                    <div class="ml-auto">
                                        <div class="dropdown sub-dropdown">
                                            <button class="btn btn-link text-muted dropdown-toggle" type="button"
                                                id="dd1" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <i data-feather="more-vertical"></i>
                                            </button>
                                           
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table no-wrap v-middle mb-0">
                                        <thead>
                                            <tr class="border-0">
                                                <th class="border-0 font-14 font-weight-medium text-muted">Name
                                                </th>
                                                <th class="border-0 font-14 font-weight-medium text-muted">Email
                                                </th>
                                                <th class="border-0 font-14 font-weight-medium text-muted ">
                                                    Contact Number
                                                </th>
                                                <th class="border-0 font-14 font-weight-medium text-muted">Company Name</th>
                                                <th class="border-0 font-14 font-weight-medium text-muted ">
                                                    Looking
                                                </th>
                                                <th class="border-0 font-14 font-weight-medium text-muted ">
                                                    Locate
                                                </th>
                                                <th class="border-0 font-14 font-weight-medium text-muted ">
                                                    Help
                                                </th>
                                                <th class="border-0 font-14 font-weight-medium text-muted ">
                                                    Message
                                                </th>
                                                <th class="border-0 font-14 font-weight-medium text-muted">Time</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                      <?php foreach( $row as $contact ) {  ?>
                                      
                                         <tr>
                                                <td class="border-0 font-14"><?php echo $contact->name;?></td>
                                                <td class="border-0 font-14"><?php echo $contact->b_email;?></td>
                                                <td class="border-top-0  font-14"><?php echo $contact->contact_no;?></td>
                                                <td class="border-top-0  font-14"><?php echo $contact->company_name;?></td>
                                                <td class="border-top-0  font-14"><?php echo $contact->looking;?></td>
                                                <td class="border-top-0  font-14"><?php echo $contact->locate;?></td>
                                                <td class="border-top-0  font-14"><?php echo $contact->help;?></td>
                                               <td class="border-top-0  font-14"><?php echo $contact->message;?> </td>
                                                <td class="border-top-0  font-14"><?php echo $contact->time;?></td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- *************************************************************** -->
                <!-- End Top Leader Table -->
                <!-- *************************************************************** -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
          