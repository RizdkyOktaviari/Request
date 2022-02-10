<?php
include '../conn.php';
include 'navbar.php'; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Chat</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <link href="../css/animate.min.css" rel="stylesheet">
    <link href="../css/lightbox.css" rel="stylesheet">
   <link href="../css/main.css" rel="stylesheet">
   <link href="../css/responsive.css" rel="stylesheet">

   <link rel="shortcut icon" href="../images/ico/go.png">
   <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../images/ico/apple-touch-icon-144-precomposed.png">
   <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../images/ico/apple-touch-icon-114-precomposed.png">
   <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../images/ico/apple-touch-icon-72-precomposed.png">
   <link rel="apple-touch-icon-precomposed" href="../images/ico/apple-touch-icon-57-precomposed.png">

   <script type="text/javascript" src="../js/jquery.js"></script>
   <script type="text/javascript" src="../js/bootstrap.min.js"></script>
   <script type="text/javascript" src="../js/lightbox.min.js"></script>
   <script type="text/javascript" src="../js/wow.min.js"></script>
   <script type="text/javascript" src="../js/main.js"></script>
  </head>
  <style>
  #header .navbar-nav.navbar-right >li a {
   color: #cecece !important;
  }
   #header .navbar {
       background: #272626 !important;
   }

   /*
*
* ==========================================
* FOR DEMO PURPOSES
* ==========================================
*
*/
body {
  padding-top: 0;
  font-size: 12px;
  color: #777;
  background: #f9f9f9;
  font-family: 'Open Sans',sans-serif;
  margin-top:0px;
}

.bg-white {
  background-color: #fff;
}

.friend-list {
  list-style: none;
margin-left: -40px;
}

.friend-list li {
  border-bottom: 1px solid #eee;
}

.friend-list li a img {
  float: left;
  width: 45px;
  height: 45px;
  margin-right: 10px;
}

 .friend-list li a {
  position: relative;
  display: block;
  padding: 10px;
  transition: all .2s ease;
  -webkit-transition: all .2s ease;
  -moz-transition: all .2s ease;
  -ms-transition: all .2s ease;
  -o-transition: all .2s ease;
}

.friend-list li.active a {
  background-color: #f1f5fc;
}

.friend-list li a .friend-name,
.friend-list li a .friend-name:hover {
  color: #777;
}

.friend-list li a .last-message {
  width: 65%;
  white-space: nowrap;
  text-overflow: ellipsis;
  overflow: hidden;
}

.friend-list li a .time {
  position: absolute;
  top: 10px;
  right: 8px;
}

small, .small {
  font-size: 85%;
}

.friend-list li a .chat-alert {
  position: absolute;
  right: 8px;
  top: 27px;
  font-size: 10px;
  padding: 3px 5px;
}

.chat-message {
  padding: 60px 20px 115px;
}

.chat {
    list-style: none;
    margin: 0;
}

.chat-message{
    background: #f9f9f9;
}

.chat li img {
  width: 45px;
  height: 45px;
  border-radius: 50em;
  -moz-border-radius: 50em;
  -webkit-border-radius: 50em;
}

img {
  max-width: 100%;
}

.chat-body {
  padding-bottom: 20px;
}

.chat li.left .chat-body {
  margin-left: 70px;
  background-color: #fff;
}

.chat li .chat-body {
  position: relative;
  font-size: 11px;
  padding: 10px;
  border: 1px solid #f1f5fc;
  box-shadow: 0 1px 1px rgba(0,0,0,.05);
  -moz-box-shadow: 0 1px 1px rgba(0,0,0,.05);
  -webkit-box-shadow: 0 1px 1px rgba(0,0,0,.05);
}

.chat li .chat-body .header {
  padding-bottom: 5px;
  border-bottom: 1px solid #f1f5fc;
}

.chat li .chat-body p {
  margin: 0;
}

.chat li.left .chat-body:before {
  position: absolute;
  top: 10px;
  left: -8px;
  display: inline-block;
  background: #fff;
  width: 16px;
  height: 16px;
  border-top: 1px solid #f1f5fc;
  border-left: 1px solid #f1f5fc;
  content: '';
  transform: rotate(-45deg);
  -webkit-transform: rotate(-45deg);
  -moz-transform: rotate(-45deg);
  -ms-transform: rotate(-45deg);
  -o-transform: rotate(-45deg);
}

.chat li.right .chat-body:before {
  position: absolute;
  top: 10px;
  right: -8px;
  display: inline-block;
  background: #fff;
  width: 16px;
  height: 16px;
  border-top: 1px solid #f1f5fc;
  border-right: 1px solid #f1f5fc;
  content: '';
  transform: rotate(45deg);
  -webkit-transform: rotate(45deg);
  -moz-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  -o-transform: rotate(45deg);
}

.chat li {
  margin: 15px 0;
}

.chat li.right .chat-body {
  margin-right: 70px;
  background-color: #fff;
}

.chat-box {
/*
  position: fixed;
  bottom: 0;
  left: 444px;
  right: 0;
*/
  padding: 15px;
  border-top: 1px solid #eee;
  transition: all .5s ease;
  -webkit-transition: all .5s ease;
  -moz-transition: all .5s ease;
  -ms-transition: all .5s ease;
  -o-transition: all .5s ease;
}

.primary-font {
  color: #3c8dbc;
}

a:hover, a:active, a:focus {
  text-decoration: none;
  outline: 0;
}
.chat-message {
    background: #efece9;
}
  </style>
  <body>

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container bootstrap snippets bootdey">
    <div class="row">


        <!--=========================================================-->
        <!-- selected chat -->
    	<div class="col-md-8 bg-white " style="margin-left: 20%; margin-top: 2%; padding: 10px; border-radius: 10px;background-color: #ffaa0e85;">
            <div class="chat-message">
                <ul class="chat">

                  <?php
                  $id = $_GET['id'];
                  $query_mysql = mysqli_query($conn,"SELECT * FROM `pesan` WHERE id=$id")or die(mysql_error());
                  $data_old = mysqli_fetch_array($query_mysql);

                  $query_mysql2 = mysqli_query($conn,"SELECT * FROM `tabel_permintaan` WHERE Judul= '$data_old[postingan]'")or die(mysql_error());
                  $data_old2 = mysqli_fetch_array($query_mysql2);
                  // $data2 = mysqli_fetch_array($query_mysql);
                  $new_sql = mysqli_query($conn,"SELECT * FROM `pesan` WHERE postingan='$data_old2[Judul]' ")or die(mysql_error());
                  while($data = mysqli_fetch_array($new_sql)){
                  ?>

                  <?php

                  if ($data['user'] != $_SESSION['user']) { ?>

                    <li class="left clearfix">
                    	<span class="chat-img pull-left">
                    		<img src="https://bootdey.com/img/Content/user_3.jpg" alt="User Avatar">
                    	</span>
                    	<div class="chat-body clearfix">
                    		<div class="header">
                    			<strong class="primary-font"><?php echo $data['user']; ?></strong>
                    			<small class="pull-right text-muted"><i class="fa fa-clock-o"></i> <?php echo $data['waktu']; ?></small>
                    		</div>
                    		<p>
                    			<?php echo $data['pesan']; ?>
                    		</p>
                    	</div>
                    </li>
              <?php    } else { ?>

                <li class="right clearfix">
                  <span class="chat-img pull-right">
                    <img src="https://bootdey.com/img/Content/user_1.jpg" alt="User Avatar">
                  </span>
                  <div class="chat-body clearfix">
                    <div class="header">
                      <strong class="primary-font"><?php echo $data['user']; ?></strong>
                      <small class="pull-right text-muted"><i class="fa fa-clock-o"></i> <?php echo $data['waktu']; ?></small>
                    </div>
                    <p>
                      <?php echo $data['pesan']; ?>
                    </p>
                  </div>
                </li>

              <?php }  } ?>

                </ul>
            </div>
            <div class="chat-box bg-white">
            	<div class="input-group" style="width: 100%;">

                <form method="post">
    		          <input class="form-control border no-shadow no-rounded" type="text" placeholder="Type your message here" name="pesan" autocomplete="off">
              		<span class="input-group-btn">
              			<button type="submit" class="btn btn-success no-rounded" name="send">Send</button>
              		</span>
                </form>

                <?php
                  if (isset($_POST['send'])) {
                    $query_mysql = mysqli_query($conn,"SELECT * FROM `pesan` WHERE id=$id")or die(mysql_error());
                    $data2 = mysqli_fetch_array($query_mysql);
                    $tgl = date("l_jS_n-h_i_s ");
                    mysqli_query($conn,"INSERT INTO `pesan`(`pesan`, `user`, `postingan`, `posted`, `waktu`) VALUES ('$_POST[pesan]','$_SESSION[user]','$data2[postingan]','none','$tgl')");
                    echo "<script>setTimeout(function(){ window.location.href= '';});</script>";
                  }
                 ?>

            	</div><!-- /input-group -->
            </div>
		</div>
	</div>
</div>

  </body>
</html>
