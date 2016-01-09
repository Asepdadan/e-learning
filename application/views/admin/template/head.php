<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<link rel="shortcut icon" href="pencil_n_eraser_icon_by_erandarki.png"/>
<title><?php echo $title; ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">

<link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url()?>assets/css/bootstrap-responsive.min.css" rel="stylesheet">
<link href="<?php echo base_url()?>assets/css/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
<link href="<?php echo base_url()?>assets/css/pages/signin.css" rel="stylesheet" type="text/css">

<link href="<?php echo base_url()?>assets/css/style.css" rel="stylesheet">
<link href="<?php echo base_url()?>assets/css/pages/dashboard.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/jquery.dataTables.css">
<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.js"></script>
 <script src="<?php echo base_url()?>assets/js/jquery.maskedinput.js" type="text/javascript" charset="utf-8" async defer></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/count.js"></script>
</head>
<script type="text/javascript">    
    //fungsi displayTime yang dipanggil di bodyOnLoad dieksekusi tiap 1000ms = 1detik
    function displayTime(){
        //buat object date berdasarkan waktu saat ini
        var time = new Date();
        //ambil nilai jam, 
        //tambahan script + "" supaya variable sh bertipe string sehingga bisa dihitung panjangnya : sh.length
        var sh = time.getHours() + ""; 
        //ambil nilai menit
        var sm = time.getMinutes() + "";
        //ambil nilai detik
        var ss = time.getSeconds() + "";
        //tampilkan jam:menit:detik dengan menambahkan angka 0 jika angkanya cuma satu digit (0-9)
        document.getElementById("clock").innerHTML = (sh.length==1?"0"+sh:sh) + ":" + (sm.length==1?"0"+sm:sm) + ":" + (ss.length==1?"0"+ss:ss);
    }
</script>
<script  type="text/javascript" charset="utf-8" async defer>
$(document).ready(function() {
    var panels = $('.user-infos');
    var panelsButton = $('.dropdown-user');
    panels.hide();

    //Click dropdown
    panelsButton.click(function() {
        //get data-for attribute
        var dataFor = $(this).attr('data-for');
        var idFor = $(dataFor);

        //current button
        var currentButton = $(this);
        idFor.slideToggle(400, function() {
            //Completed slidetoggle
            if(idFor.is(':visible'))
            {
                currentButton.html('<i class="glyphicon glyphicon-chevron-up text-muted"></i>');
            }
            else
            {
                currentButton.html('<i class="glyphicon glyphicon-chevron-down text-muted"></i>');
            }
        })
    });


    $('[data-toggle="tooltip"]').tooltip();

    $('button').click(function(e) {
        e.preventDefault();
        alert("This is a demo.\n :-)");
    });

</script>
<style type="text/css" media="screen">
.user-row {
    margin-bottom: 14px;
}

.user-row:last-child {
    margin-bottom: 0;
}

.dropdown-user {
    margin: 13px 0;
    padding: 5px;
    height: 100%;
}

.dropdown-user:hover {
    cursor: pointer;
}

.table-user-information > tbody > tr {
    border-top: 1px solid rgb(221, 221, 221);
}

.table-user-information > tbody > tr:first-child {
    border-top: 0;
}


.table-user-information > tbody > tr > td {
    border-top: 0;
}
.toppad
{margin-top:20px;
}  
</style>



<body onload="displayTime();setInterval('displayTime()', 1000);"><!---->