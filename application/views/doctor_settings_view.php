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
                            <h2 class="center white-text">Settings</h2>
                        </div>
                    </div>
                 </div>
            </div>
<!--        Doctor Content-->
        <div class="section">
            <div class="container">
                <div class="row">
                      <ul id="tabs-swipe-demo" class="tabs">
                        <li class="tab col s3"><a href="#test-swipe-1" class="active">General</a></li>
                        <li class="tab col s3"><a href="#test-swipe-2">Privacy</a></li>
                        <li class="tab col s3"><a href="#test-swipe-3">Security</a></li>
                      </ul>
                      <div id="test-swipe-1">
                          <div class="col s4 ">
                            <div class="row">
                                <div class="section">
                                    Available
                                  <div class="switch">
                                    <label>
                                      Off
                                      <input type="checkbox">
                                      <span class="lever"></span>
                                      On
                                    </label>
                                  </div>
                                </div>
                            </div>
                          </div>
                          <div class="col s8">
                            <form>
                                  <div class="row">
                                      <h3>Change Password</h3>
                                    <div class="input-field col s12">
                                      <input id="first_name2" type="text" class="validate">
                                      <label class="" for="first_name2">Current Password</label>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="input-field col s12">
                                      <input id="first_name2" type="text" class="validate">
                                      <label class="" for="first_name2">New Password</label>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="input-field col s12">
                                      <input id="first_name2" type="text" class="validate">
                                      <label class="" for="first_name2">Repeat Password</label>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <button class="btn waves-effect waves-light" type="submit" name="action">
                                        Login
                                        <i class="material-icons right">send</i>
                                    </button>
                                  </div>
                            </form>
                        </div>
                      </div>
                      <div id="test-swipe-2" class="col s12">
                            <p>
                                Hide me from Network
                            </p>
                      </div>
                      <div id="test-swipe-3" class="col s12">
                            <p>
                                Disable My accaount 
                            </p>
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