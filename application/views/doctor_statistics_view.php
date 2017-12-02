<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
 <!DOCTYPE html>
  <html>
    <head>
        <title>Doctor</title>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/materialize.min.css');?>"  media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/style.css');?>"  media="screen,projection"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
                
        <?php $this->load->view('template/doctor_nav'); ?>
        
        
            <div class="container-fluid">
                <div class="teal">
                    <div class="section">
                        <div class="container">
                            <h2 class="center white-text">Statistics</h2>
                        </div>
                    </div>
                 </div>
            </div>
<!--        Doctor Content-->
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col l6">
                        <div class="card">
                            <div class="card-content">
                                <canvas id="myChart1" width="400" height="400"></canvas>
                           </div>
                        </div>
                    </div>
                    <div class="col l6">
                        <div class="card">
                            <div class="card-content">
                                <canvas id="myChart2" width="400" height="400"></canvas>
                           </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        
<!--        Doctor Content-->
        <footer class="page-footer teal">
            <div class="container">
              <div class="row">
                <div class="col l6 s12">
                  <h5 class="white-text">Rajasthan Initaive</h5>
                  <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>


                </div>
                <div class="col l3 s12">
                  <h5 class="white-text">Settings</h5>
                  <ul>
                    <li><a class="white-text" href="#!">Link 1</a></li>
                    <li><a class="white-text" href="#!">Link 2</a></li>
                    <li><a class="white-text" href="#!">Link 3</a></li>
                    <li><a class="white-text" href="#!">Link 4</a></li>
                  </ul>
                </div>
                <div class="col l3 s12">
                  <h5 class="white-text">Contact</h5>
                  <ul>
                    <li><a class="white-text" href="#!">Government</a></li>
                    <li><a class="white-text" href="#!">Doctor</a></li>
                    <li><a class="white-text" href="#!">Medial Association</a></li>
                    <li><a class="white-text" href="#!">Near by</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="footer-copyright">
              <div class="container">
              Made by <a class="brown-text text-lighten-3" href="http://materializecss.com">Materialize</a>
              </div>
            </div>
          </footer>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
        <script src="<?php echo base_url('assets/js/materialize.min.js');?>"></script>
        <script src="<?php echo base_url('assets/js/script.js');?>"></script>
        <script src="<?php echo base_url('assets/js/graph.js');?>"></script>
    </body>
  </html>