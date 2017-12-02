<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
 <!DOCTYPE html>
  <html>
    <head>
        <title>About</title>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/materialize.min.css');?>"  media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/style.css');?>"  media="screen,projection"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>

        <?php $this->load->view('template/doctor_nav'); ?>

  <!-- Modal Structure -->
  <div id="modal1" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h4>Explained Details</h4>
      <table class="highlight">
          <tbody>
             <tr>
              <td>Date</td>
              <td>20-10-17</td>
            </tr>
             <tr>
              <td>Doctor</td>
              <td>Dr. Rajan Malhotra</td>
            </tr>
             <tr>
              <td>Disease</td>
              <td>Maleria</td>
            </tr>
             <tr>
              <td>Presciption</td>
              <td>Be crefull</td>
            </tr>
             <tr>
              <td>Test </td>
              <td>Blood and Urine</td>
            </tr>
             <tr>
              <td>Disease </td>
              <td>Beginning stage</td>
            </tr>
             <tr>
              <td>Lever </td>
              <td>Normal</td>
            </tr>
             <tr>
              <td>Blood Pressure </td>
              <td>80/120</td>
            </tr>
             <tr>
              <td>Next Appointment </td>
              <td>20-10-2018</td>
            </tr>
      </tbody>
      </table>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Done</a>
    </div>
  </div>
  <div id="modal2" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h4>Explained Details</h4>
      <table class="highlight">
          <tbody>
             <tr>
              <td>Date</td>
              <td>20-08-16</td>
            </tr>
             <tr>
              <td>Doctor</td>
              <td>Dr. Rajan Malhotra</td>
            </tr>
             <tr>
              <td>Disease</td>
              <td>Fever</td>
            </tr>
             <tr>
              <td>Presciption</td>
              <td>Be crefull</td>
            </tr>
             <tr>
              <td>Test </td>
              <td>Blood and Urine</td>
            </tr>
             <tr>
              <td>Disease </td>
              <td>Beginning stage</td>
            </tr>
             <tr>
              <td>Lever </td>
              <td>Normal</td>
            </tr>
             <tr>
              <td>Blood Pressure </td>
              <td>80/120</td>
            </tr>
             <tr>
              <td>Next Appointment </td>
              <td>20-10-2018</td>
            </tr>
      </tbody>
      </table>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Done</a>
    </div>
  </div>
  <div id="modal3" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h4>Explained Details</h4>
      <table class="highlight">
          <tbody>
             <tr>
              <td>Date</td>
              <td>10-10-16-</td>
            </tr>
             <tr>
              <td>Doctor</td>
              <td>Dr. Rajan Malhotra</td>
            </tr>
             <tr>
              <td>Disease</td>
              <td>Asthama</td>
            </tr>
             <tr>
              <td>Presciption</td>
              <td>Be crefull</td>
            </tr>
             <tr>
              <td>Test </td>
              <td>Blood and Urine</td>
            </tr>
             <tr>
              <td>Disease </td>
              <td>Beginning stage</td>
            </tr>
             <tr>
              <td>Lever </td>
              <td>Normal</td>
            </tr>
             <tr>
              <td>Blood Pressure </td>
              <td>80/120</td>
            </tr>
             <tr>
              <td>Next Appointment </td>
              <td>20-10-2018</td>
            </tr>
      </tbody>
      </table>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Done</a>
    </div>
  </div>
          
<!--        Doctor Content-->
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col l10 s12 offset-l1">
                        <table class="highlight">
                          <thead>
                            <tr>
                                <th>Date</th>
                                <th>Disease</th>
                                <th>Doctor</th>
                                <th>More</th>
                            </tr>
                          </thead>

                          <tbody>
                             <tr>
                              <td>20-10-17-</td>
                              <td>Maleria</td>
                              <td>Dr. S K Mandal</td>
                              <td><a class="waves-effect waves-light btn modal-trigger" href="#modal1">View</a></td>
                            </tr>

                               <tr>
                              <td>20-10-17-</td>
                              <td>Maleria</td>
                              <td>Dr. S K Mandal</td>
                              <td><a class="waves-effect waves-light btn modal-trigger" href="#modal2">View</a></td>
                            </tr>

                               <tr>
                              <td>20-10-17-</td>
                              <td>Maleria</td>
                              <td>Dr. S K Mandal</td>
                              <td><a class="waves-effect waves-light btn modal-trigger" href="#modal3">View</a></td>
                            </tr>

                              <tr>
                              <td>20-10-17-</td>
                              <td>Maleria</td>
                              <td>Dr. S K Mandal</td>
                              <td><a class="waves-effect waves-light btn modal-trigger" href="#modal1">View</a></td>
                            </tr>

                               <tr>
                              <td>20-10-17-</td>
                              <td>Maleria</td>
                              <td>Dr. S K Mandal</td>
                              <td><a class="waves-effect waves-light btn modal-trigger" href="#modal2">View</a></td>
                            </tr>

                              <tr>
                              <td>20-10-17-</td>
                              <td>Maleria</td>
                              <td>Dr. S K Mandal</td>
                              <td><a class="waves-effect waves-light btn modal-trigger" href="#modal3">View</a></td>
                            </tr>

                              <tr>
                              <td>20-10-17-</td>
                              <td>Maleria</td>
                              <td>Dr. S K Mandal</td>
                              <td><a class="waves-effect waves-light btn modal-trigger" href="#modal1">View</a></td>
                            </tr>

                               <tr>
                              <td>20-10-17-</td>
                              <td>Maleria</td>
                              <td>Dr. S K Mandal</td>
                              <td><a class="waves-effect waves-light btn modal-trigger" href="#modal3">View</a></td>
                            </tr>


                          </tbody>
                        </table>
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
        <script src="<?php echo base_url('assets/js/materialize.min.js');?>"></script>
        <script src="<?php echo base_url('assets/js/script.js');?>"></script>
        <script type="text/javascript">
           $(document).ready(function(){
    // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();
  });
      
        </script>
    </body>
  </html>
