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
                            <div class="card-header">User Data Records</div>
                                
                            <div class="card-body">
                                <form class="row">
                                    
                                    <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Select Company Name</label>
                                    <select class="custom-select">
  <option selected>Select Company</option>
  <option value="Abc company limited">Abc company limited</option>
  <option value="ABC car rent limited">ABC car rent limited</option>
</select>
                                    </div>
                                    </div>
                                    <div class="col-md-4">
                                    <div class="form-group">
                                    <label>Upload PDF File</label>
                                    <input type="file" class="form-control" id="customFile" />
                                    </div>
                                    </div>
                                    <div class="col-md-4">
                                    <div class="form-group">
                                    <label>Upload Meeting Video</label>
                                    <input type="file" class="form-control" id="customFile" />
                                    </div>
                                    </div>
                                    
                                    
                                    <!-- Save changes button-->
                                    <div class="col-md-12">
                                            <button class="btn btn-primary" type="button">Submit</button>
                                    </div>
                                        </form>
                                <br>
                                
                                <div class="datatable">
                                    <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>S.No.</th>
                                                <th>Company Name</th>
                                                <th>Upload Date</th>
                                                <th>PDF</th>
                                                <th>Video</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>ABC Company Limited</td>
                                                <td>12/09/2023</td>
                                                <td class="pdf-main text-center"><a href="images-main/sample.pdf" target="_blank">
                                                    <img src="images-main/pdf.png">
                                                    </a></td>
                                                <td class="video-main text-center"><a href="images-main/movie.mp4" target="_blank">
                                                    <img src="images-main/video.png">
                                                    </a></td>
                                                
                                                <td>
                                                
                                                    <a href="record-data-view.php"><button class="btn btn-datatable btn-icon btn-transparent-dark"><i data-feather="eye"></i></button></a>
                                                    
                                                    <a href="#"><button class="btn btn-datatable btn-icon btn-transparent-dark"><i data-feather="trash-2"></i></button></a>
                                                    
                                                </td>
                                                
                                            </tr>
                                            
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            </div>
                    </div>
                </main>
                <?php
include 'include/footer.php';
?>