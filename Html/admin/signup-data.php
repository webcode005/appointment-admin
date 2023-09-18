<?php
$pagetitle = 'Tital Global Services Ltd';
$description='';
$keywords = '';
include 'include/header.php';
?>
            <div id="layoutSidenav_content">
                <main>
                    <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
                        <div class="container">
                            <div class="page-header-content pt-4">
                            </div>
                        </div>
                    </header>
                    <!-- Main page content-->
                    <div class="container mt-n10">
                        <!-- Example Colored Cards for Dashboard Demo-->
                       
                            <div class="card mb-4">
                            <div class="card-header">Signup Data</div>
                                
                            <div class="card-body">
                                
                                <div class="datatable">
                                    <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>S.No.</th>
                                                <th>Name</th>
                                                <th>Company Name</th>
                                                <th>Phone Number</th>
                                                <th>Email</th>
                                                <th>Service</th>
                                                <th>Action</th>
                                                
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Mohammad Kaleem</td>
                                                <td>ABC Private limited</td>
                                                <td>9876543210</td>
                                                <td>abclimited@gmail.com</td>
                                                <td>Silver</td>
                                                <td>
                                                    <button data-toggle="modal" data-target="#exampleModal" class="btn btn-datatable btn-icon btn-transparent-dark"><i data-feather="eye"></i></button>
                                                    
                                                    <a href="#"><button class="btn btn-datatable btn-icon btn-transparent-dark"><i data-feather="trash-2"></i></button></a>
                                                    
                                                </td>
                                                
                                            </tr>
                                            
                                            <!-- Button trigger modal -->
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            </div>
                    </div>
                </main>
                <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Singup Detail</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <p><b>Name:</b> Mohammad Kaleem</p>
          <p><b>Company Name:</b> ABC Private limited</p>
          <p><b>Phone No.:</b> 097827527725</p>
          <p><b>Email:</b> abclimited@gmail.com</p>
          <p><b>Website:</b> www.abclimited.com</p>
          <p><b>Service: </b> Silver</p>
          <p class="payment"><b>Payment Status:</b> Faild</p>
          <p class="green"><b>Payment Status:</b> Success</p>
      </div>
      
    </div>
  </div>
</div>
                <?php
include 'include/footer.php';
?>