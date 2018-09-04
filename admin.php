<?php

session_start();

if(!isset($_SESSION['login_id']))
{

header('Location:http://localhost/Fairway/login.php');
exit();

}

if($_SESSION['designation']!='admin')
{

header('Location:http://localhost/Fairway/login.php');
exit();

}



if (isset($_SESSION['del_emp'])) {
      

      if($_SESSION['del_emp']==0)
          {
            echo "<script>alert('Wrong email!');</script>";

          }

      if($_SESSION['del_emp']==1)
          {
            echo "<script>alert('Employee profile has been deleted!');</script>";

          }
          
          unset($_SESSION['del_emp']);


}

if (isset($_SESSION['active_emp'])) {
      

      if($_SESSION['active_emp']==0)
          {
            echo "<script>alert('Wrong email!');</script>";

          }

      if($_SESSION['active_emp']==1)
          {
            echo "<script>alert('Employee profile has been actived!');</script>";

          }
          
          unset($_SESSION['active_emp']);


}



?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Admin : Fairway Pharmaceuticals | The Right choice </title>
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="css/components.css">





  <style type="text/css">
    html {
      box-sizing: border-box;
    }

    *,
    *:before,
    *:after {
      box-sizing: inherit;
    }

    .column1 {
      float: left;
      width: 33.3%;
      margin-bottom: 16px;
      padding: 0 8px;
      padding: 20px;
    }

    @media screen and (max-width: 650px) {
      .column1 {
        width: 100%;
        display: block;
      }
    }

    .card1 {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);

    }

    .card1:hover {

      box-shadow: 0px 0px 150px #000000;
      transform: scale(1.008);
    }

    .container1 {
      padding: 0 16px;
    }

    .container1::after,
    .row1::after {
      content: "";
      clear: both;
      display: table;
    }

    .title1 {
      color: grey;
    }

    .button1 {
      border: none;
      outline: 0;
      display: inline-block;
      padding: 8px;
      color: white;
      background-color: #000;
      text-align: center;
      cursor: pointer;
      width: 100%;
    }

    .button1:hover {
      background-color: #555;
    }


    * {
      box-sizing: border-box;
    }

    #myInput {
      background-image: url('search_emp.png');
      background-position: 10px 10px;
      background-repeat: no-repeat;
      width: 100%;
      font-size: 16px;
      padding: 20px 20px 12px 63px;
      border: 1px solid #ddd;
      margin-bottom: 12px;
      background-size: 45px 45px;
    }

    #myTable {
      border-collapse: collapse;
      width: 100%;
      border: 1px solid #ddd;
      font-size: 18px;
    }

    #myTable th,
    #myTable td {
      text-align: left;
      padding: 12px;
      border: 1px solid #eee;
    }

    #myTable tr {
      border-bottom: 1px solid #ddd;
    }

    #myTable tr.header {

      background-color: #A1BEB4;

    }


    #myTable tr:hover {
      background-color: #f1f1f1;
      cursor: pointer;
    }

    #myTable tr.header:hover {

      background-color: #A1BEB4;

    }





    #myInput2 {
      background-image: url('search_emp.png');
      background-position: 10px 10px;
      background-repeat: no-repeat;
      width: 100%;
      font-size: 16px;
      padding: 20px 20px 12px 63px;
      border: 1px solid #ddd;
      margin-bottom: 12px;
      background-size: 45px 45px;
    }

    #myTable2 {
      border-collapse: collapse;
      width: 100%;
      border: 1px solid #ddd;
      font-size: 18px;
    }

    #myTable2 th,
    #myTable2 td {
      text-align: left;
      padding: 12px;
      border: 1px solid #eee;
    }

    #myTable2 tr {
      border-bottom: 1px solid #ddd;
    }

    #myTable2 tr.header {

      background-color: #A1BEB4;

    }


    #myTable2 tr:hover {
      background-color: #f1f1f1;
      cursor: pointer;
    }

    #myTable2 tr.header:hover {

      background-color: #A1BEB4;

    }
  </style>


</head>

<body style="background: linear-gradient(to right, #2bc0e4, #eaecc6);">
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <!-- Title -->
        <span class="mdl-layout-title">Fairway</span>
        <span style="position: absolute;top:40px;">Admin Panel</span>
        <!-- Add spacer, to align navigation to the right -->
        <div class="mdl-layout-spacer"></div>
        <!-- Navigation. We hide it in small screens. -->
        <nav class="mdl-navigation mdl-layout--large-screen-only">
          <a class="mdl-navigation__link" href="admin.php"><i class="zmdi zmdi-home zmdi-hc-lg"></i> Dashboard</a>
          <a class="mdl-navigation__link" href="addOffer.php"><i class="zmdi zmdi-cake zmdi-hc-lg"></i> Add Offer </a>
          <a class="mdl-navigation__link" href="createEmployee.php"><i class="zmdi zmdi-account-add zmdi-hc-lg"></i> Creat
            Employee
          </a>
          <a class="mdl-navigation__link" href="reports.php"><i class="zmdi zmdi-chart zmdi-hc-lg"></i> Reports</a>
          <a class="mdl-navigation__link" href="backend/logout.php"><i class="zmdi zmdi-lock-open zmdi-hc-lg"></i> Logout</a>
        </nav>
      </div>
    </header>
    <div class="mdl-layout__drawer">
      <span class="mdl-layout-title">Fairway</span>
      <nav class="mdl-navigation">
        <a class="mdl-navigation__link" href="admin.php"><i class="zmdi zmdi-home zmdi-hc-lg"></i>&nbsp;Dashboard</a>
        <a class="mdl-navigation__link" href="addOffer.php"><i class="zmdi zmdi-cake zmdi-hc-lg"></i>&nbsp;Add Offer </a>
        <a class="mdl-navigation__link" href="createEmployee.php"><i class="zmdi zmdi-account-add zmdi-hc-lg"></i>&nbsp;Creat
          Employee
        </a>
        <a class="mdl-navigation__link" href="reports.php"><i class="zmdi zmdi-chart zmdi-hc-lg"></i>&nbsp;Reports</a>
        <hr/>
        <a class="mdl-navigation__link" href="backend/logout.php"><i class="zmdi zmdi-lock-open zmdi-hc-lg"></i>&nbsp;Logout</a>
      </nav>
    </div>
    <main class="mdl-layout__content">
      <div class="page-content">
        <!-- Your content goes here -->

        <div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
          <div class="mdl-tabs__tab-bar">
            <a href="#runningOffers" class="mdl-tabs__tab is-active" style="text-decoration: none;">Offers</a>
            <a href="#tableView" class="mdl-tabs__tab" style="text-decoration: none;">Table View</a>
            <a href="#activeUsers" class="mdl-tabs__tab" style="text-decoration: none;">Users</a>
          </div>

          <div class="mdl-tabs__panel is-active" id="runningOffers">




            <h6 style="color: #0B2C40;text-align: center;">Exclusive Offer(S)</h6>
            <div class="row">


              <div id="runningO" style="cursor: pointer;">


              </div>

            </div>


            <br>




          </div>











 <div class="mdl-tabs__panel" id="tableView" style="position: relative;margin:0 auto;line-height: 1.4em;overflow-x:scroll;overflow-y:hidden;">
  <center>  <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp">
      <thead> 
          <tr>
            <th class="mdl-data-table__cell--non-numeric">Medicine Name</th>
            <th>Packaging</th>
            <th class="mdl-data-table__cell--non-numeric">Offer Title</th>
            <th>On Sale of</th>
            <th>Quantity FREE</th>
            <th class="mdl-data-table__cell--non-numeric">Remarks</th>
            <th>Validity</th>
            <th>Offer Image</th>
          </tr>
      </thead>
        <tbody>
        <tr>
            <th class="mdl-data-table__cell--non-numeric">Nimonial Gold</th>
            <th>1*10</th>
            <th class="mdl-data-table__cell--non-numeric">Summer Offer</th>
            <th>200</th>
            <th>20</th>
            <th class="mdl-data-table__cell--non-numeric">Fentastic Offer</th>
            <th>15/09/2018</th>            
            <th>I am link</th>
          </tr>
          <tr>
            <th class="mdl-data-table__cell--non-numeric">Fair cold</th>
            <th>2*10</th>
            <th class="mdl-data-table__cell--non-numeric">Dasahra Offer</th>
            <th>100</th>
            <th>20</th>
            <th class="mdl-data-table__cell--non-numeric">Condition apply</th>
            <th>04/10/2018</th>           
            <th>Click for Image</th>
          </tr>
          <tr>
            <th class="mdl-data-table__cell--non-numeric">Cold Fiwrman</th>
            <th>1*10</th>
            <th class="mdl-data-table__cell--non-numeric">Winter Offer</th>
            <th>500</th>
            <th>50</th>
            <th class="mdl-data-table__cell--non-numeric"> I am Remarks</th>
            <th>06/10/2018</th>            
            <th>Image</th>
          </tr>
        </tbody>
      </table>

</center>

          </div>


          <div class="mdl-tabs__panel" id="activeUsers" style="width: 80%;
                    position: relative;
                    margin:0 auto;
                    line-height: 1.4em;overflow-x:scroll;
    overflow-y:hidden;">







          </div>





        </div>


      </div>
    </main>
  </div>

  <script src="js/components.js"></script>
  <script type="text/javascript">


    $(document).ready(function () {



      fetch_offer();

      function fetch_offer() {


        $.ajax({

          url: 'backend/offer.php',
          method: 'POST',
          success: function (data) {

            $('#runningO').html(data);

          }

        })

      }


      setInterval(function () { fetch_offer(); }, 1000);





      //      today_sale();

      // function today_sale(){

      //          $.ajax({

      //            url:'backend/todays_sale.php',
      //            method:'POST',
      //            success:function(data){

      //              $('#todaysale').html(data);


      //            }




      //          })



      //              }


      //setInterval(function(){today_sale();},1000);  










      fetch_users();

      function fetch_users() {


        $.ajax({

          url: 'backend/fetch_active_user.php',
          method: 'POST',
          success: function (data) {

            $('#activeUsers').html(data);

          }

        })

      }


      setInterval(function () { fetch_users(); }, 30000);








    });



    function mySearch2() {

      var input, filter, table, tr, td, i;

      input = document.getElementById('myInput2');
      filter = input.value.toUpperCase();
      table = document.getElementById('myTable2');
      tr = table.getElementsByTagName('tr');
      for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName('td')[0];
        if (td) {
          if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";

          }
          else {

            tr[i].style.display = 'none';

          }


        }

      }


    }





    function mySearch() {

      var input, filter, table, tr, td, i;

      input = document.getElementById('myInput');
      filter = input.value.toUpperCase();
      table = document.getElementById('myTable');
      tr = table.getElementsByTagName('tr');
      for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName('td')[0];
        if (td) {
          if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";

          }
          else {

            tr[i].style.display = 'none';

          }


        }

      }


    }






  </script>
  <!--Start of Tawk.to Script-->
  <script type="text/javascript">
    var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
    (function () {
      var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
      s1.async = true;
      s1.src = 'https://embed.tawk.to/5b7cf754f31d0f771d840655/default';
      s1.charset = 'UTF-8';
      s1.setAttribute('crossorigin', '*');
      s0.parentNode.insertBefore(s1, s0);
    })();
  </script>
  <!--End of Tawk.to Script-->




</body>

</html>