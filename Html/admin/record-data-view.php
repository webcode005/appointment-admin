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
                            <div class="card-header">Record Data Detail</div>
                                
                            <div class="card-body detail-client">
                                <div class="add-packages">
                                    <a href="user-data.php"><button class="btn pull-right btn-primary" type="button">Go Back</button></a>
                                    <br>
                                    <br>
                                </div>
                                <div class="row">
                                <div class="col-md-6">
                                    <p><b>Client Basic Detail</b></p>
                                    <hr>
                                    <p><b>Contact Name:</b> Mohammad Kaleem</p>
                                    <p><b>Company Name:</b> ABC Private Limited</p>
                                    <p><b>Website:</b> www.abcprivatelimited.com</p>
                                    <p><b>Phone No:</b> 0998764611</p>
                                    <p><b>Email Id:</b> mohammadkaleem@gmail.com</p>
                                    <p><b>Upload Time:</b> 12/09/2023</p>
                                    <p class="pdf-main"><b>Uploaded PDF:</b> <a href="images-main/sample.pdf"><img src="images-main/pdf.png"></a></p>
                                    
                                    </div>
                                    <div class="col-md-6">
                                    <p><b>Uploaded Video</b></p>
                                        <hr>
                                    <video width="100%" height="240" controls>
  <source src="images-main/movie.mp4" type="video/mp4">
  <source src="images-main/movie.ogg" type="video/ogg">
</video>
                                    </div>
                                    
                                </div>
                            </div>
                            </div>
                    </div>
                </main>
                <?php
include 'include/footer.php';
?>