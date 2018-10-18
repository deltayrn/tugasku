<?php

include "config.php";
?>
<html>
<head>
 <title> Registrasi Karyawan Baru </title>
 <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/navbar-fixed-top.css" rel="stylesheet">
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">
    <link href="css/jquery.dataTables.min.css" rel="stylesheet">
 
</head>
<body style = 'margin : 20px; font : 16px arial;'>
 <center>
 <div class="row">
            <div class="box">
                <div class="col-lg-12">
 <h1> Registrasi Karyawan Baru </h1>
 
 <form method = 'POST' action = 'aksi_tambah.php'>
 <table border = '1' cellspacing = '1' cellpadding = '10'
 style = 'border : #aaa; color: #101; font-family : arial; fot-size : 12px;'>
 <tr>
  <td> Nama Karyawan </td>
  <td width = '5' align = 'center'> : </td>
  <td> <input type = 'text' placeholder='Nama Karyawan' name = 'nama_id' /> </td>
  </tr>
 <tr>
  <td> Tanggal Lahir </td>
  <td align = 'center'> : </td>
  <td> <input type = 'date' placeholder='yyyy/mm/dd ' name = 'tgl_lahir' /> </td>
  </tr>
 <tr>
  <td> Jenis Kelamin </td>
  <td align = 'center'> : </td>
  <td> <input type = 'text' placeholder='Jenis Kelamin' name = 'sex' /> </td>
  </tr>
 <tr>
  <td> Jabatan </td>
  <td width = '5' align = 'center'> : </td>
  <td> <textarea name = 'jabatan' placeholder='Jabatan' ></textarea> </td>
  </tr>
<tr>
  <td> Mulai Kerja </td>
  <td width = '5' align = 'center'> : </td>
  <td> <input type = 'date' name = 'mulai_kerja' placeholder='yyyy/mm/dd' ></textarea> </td>
  </tr>
 
  
 <tr>
 <td colspan = '3' align = 'center'>
 <input type = 'submit' name = 'submit' value = 'Submit'/>
 <input type = 'reset' name = 'Reset' value = 'Reset' /> </td>
 </tr>
</table>
</form>
</div>
</div>
</div>
</center>
<a href = 'index.php'> Kembali </a>
</form>
</body>
</html>  