<?php 
include 'koneksi.php';
?>
 
<?php 
if(isset($_GET['cari'])){
 $cari = $_GET['cari'];
 echo "<b>Hasil pencarian : ".$cari."</b>";
}
?>
 
<table border="1">
 <tr>
   <th>Nomor Berkas</th> 
  <th>Uraian Informasi Arsip</th>
  <th>Tahun</th>
 </tr>
 <?php 
 if(isset($_GET['cari'])){
  $cari = $_GET['cari'];
  $data = mysqli_query($kon,"select * from data_arsip where uraian_informasi_arsip like '%".$cari."%'");    
 }else{
  $data = mysqli_query($kon,"select * from data_arsip");  
 }
 $no = 1;
 while($d = mysqli_fetch_array($data)){
 ?>
 <tr>
  <td><?php echo $d['no_berkas']; ?></td>
  <td><?php echo $d['uraian_informasi_arsip']; ?></td>
  <td><?php echo $d['kurun_waktu']; ?></td>
 </tr>
 <?php } ?>
</table>


<table border="1">
 <tr>
   <th>Nomor Berkas</th> 
  <th>Uraian Informasi Arsip</th>
  <th>Tahun</th>
 </tr>
 <?php 
 if(isset($_GET['cari'])){
  $cari = $_GET['cari'];
  $data = mysqli_query($kon,"select * from data_arsip_2 where uraian_informasi_arsip_2 like '%".$cari."%'");    
 }else{
  $data = mysqli_query($kon,"select * from data_arsip_2");  
 }
 $no = 1;
 while($d = mysqli_fetch_array($data)){
 ?>
 <tr>
  <td><?php echo $d['no_berkas_2']; ?></td>
  <td><?php echo $d['uraian_informasi_arsip_2']; ?></td>
  <td><?php echo $d['kurun_waktu_2']; ?></td>
 </tr>
 <?php } ?>
</table>