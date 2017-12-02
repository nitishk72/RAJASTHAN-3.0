<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
 <!DOCTYPE html>
  <html>
    <head>
        <title>Homepage </title>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/materialize.min.css');?>"  media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/style.css');?>"  media="screen,projection"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>


        <?php $this->load->view('template/default_nav'); ?>


        <div class="container-fluid">
            <div class="sectionh">

              <!--   Icon Section   -->
              <div class="row">

            <div class="col s12 m8 l6 offset-m2 offset-l3">
                  <div class="icon-block">
                    <h2 class="center brown-text"><i class="material-icons">security</i></h2>
                    <h5 class="center">Login Here</h5>

                    <p class="bold center">We care about You</p>
                      <form action="<?php echo base_url('Doctor');?>" method="post">
                          <div class="row">
                            <div class="input-field col s12">
                              <input id="first_name2" type="text" class="validate">
                              <label class="active" for="first_name2">Aadhar Number</label>
                            </div>
                          </div>
                          <div class="row">
                            <div class="input-field col s12">
                              <input id="first_name2" type="text" class="validate">
                              <label class="active" for="first_name2">Mobile Number</label>
                            </div>
                          </div>
                        <div class="row">
                          
                            <div class="input-field col s12">
                            <select>
                              <optgroup label="I am">
                                <option value="2">Patients</option>
                                <option value="1">Doctor</option>
                              </optgroup>
                            </select>
                            <label>Sign in AS</label>
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
              </div>

            </div>
          </div>




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
                    <li><a class="white-text" href="#!">Report Error</a></li>
                    <li><a class="white-text" href="#!">Request Help</a></li>
                    <li><a class="white-text" href="#!">Privacy</a></li>
                    <li><a class="white-text" href="#!">Policy</a></li>
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
              Made by <a class="brown-text text-lighten-3" href="http://materializecss.com">Back Benchers</a>
              </div>
            </div>
          </footer>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="<?php echo base_url('assets/js/materialize.min.js');?>"></script>
        <script src="<?php echo base_url('assets/js/script.js');?>"></script>
        <script>
           $(document).ready(function() {
              $('select').material_select();
            });
                 
        </script>
    </body>
  </html>
