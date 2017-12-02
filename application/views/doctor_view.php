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
        
<!--        Doctor Content-->

            <div class="container-fluid">
                <div class="teal">
                    <div class="section">
                        <div class="container">
                          <div class="row white-text">
                              
                              <div class="col l4 m5 s12">
                                  <img src="<?php echo base_url('assets/img/defaults/doctor.jpg') ?>" class="img-profile">
                              </div>
                              <div class="col l4 m7 s12">
                                    <p>Name : Dr. Nitish Kumar </p>
                                    <p>Specialisation : Cardiologist </p>
                                    <p>Licence Number : HU-123456 </p>
                              </div>
                              <div class="col l4 m7 s12">
                                    <p>Gender : Male </p>
                                    <p>City : Jalandhar </p>
                                    <p>State : Punjab </p>
                              </div>
                          </div>
                        </div>
                    </div>
                </div>
        
            </div>
            <div class="container">
                <div class="row">
                    <div class="col l6 m6 s12">
                        <div class="card medium">
                          <div class="card-image">
                            <span class="card-title">Card Title</span>
                          </div>
                          <div class="card-content">
                            <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                          </div>
                          <div class="card-action">
                            <a href="#">This is a link</a>
                            <a href="#">This is a link</a>
                          </div>
                        </div>
                    </div>
                    <div class="col l6 m6 s12">
                        <div class="card medium">
                          <div class="card-image">
                            <span class="card-title">Card Title</span>
                          </div>
                          <div class="card-content">
                            <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                          </div>
                          <div class="card-action">
                            <a href="#">This is a link</a>
                            <a href="#">This is a link</a>
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
        <script src="assets/js/materialize.min.js"></script>
        <script src="assets/js/script.js"></script>
    </body>
  </html>