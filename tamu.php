<html>
    <link rel="stylesheet" href="style1.css">
    <div class>
            <!--Bagian header-->
            <header>
                <div class="logo">
                    <div class="fristname">RN.</div>
                    <div class="lastname">HOTEL</div>
                </div>
                <nav>       
                    <ul>
                        <li><a href="http://localhost/hotel.r/index.html">Home</a></li>
                        <li><a href="http://localhost/hotel.r/index.html#about">About</a></li>
                        <li><a href="http://localhost/hotel.r/index.html#room-list">Galery</a></li>
                        <li><a href="http://localhost/hotel.r/index.html#contatc">Contatc Us</a></li>
                    </ul>
                </nav>  
                <div class="dropdown">
                    <a class="dropdown-item">Admin</a>
                    <div class="dropdown-isi">
                        <a href="http://localhost/hotel.r/tamu.php">Tamu</a>
                        <a href="http://localhost/hotel.r/kamar.php">Kamar</a>
                        <a href="http://localhost/hotel.r/reservasi.php">Reservasi</a>
                        <a href="http://localhost/hotel.r/karyawan.php">Karyawan</a>
                    </div>
                </div>
                <div class="button-container">
                    <button class="button">LOGIN</button>
                </div>
            </header>
        </div>
        <h1>SELAMAT DATANG DIHOTEL KAMI</h1>
        <form>
       
        
    <table>
        <tr>
            <td>id_tamu</td>
            <td>nama_tamu</td>
            <td>alamat</td>
            <td>jenis_kelamin</td>
            <td>telepon</td>
            <td>aksi</td>

        </tr>
<?php 
include "koneksi1.php";
$data=mysqli_query ($koneksi,"select * from tamu");
while($d=mysqli_fetch_array($data)){
?>
<tr>
    <td><?php echo $d['id_tamu']?></td>
    <td><?php echo $d['nama_tamu']?></td>
    <td><?php echo $d['alamat']?></td>
    <td><?php echo $d['jenis_kelamin']?></td>
    <td><?php echo $d['telepon']?></td>
    <td>
        <a href="hapus-tamu.php?id=<?php echo $d['id_tamu'];?>">hapus</a>
        <a href="edit-tamu.php?id=<?php echo $d['id_tamu'];?>">edit</a>
    </td>
</tr>
<?php  
}
?>

    </table>
    <div class="databaru">
    <a href="input-tamu.php">tambahkan data baru</a>
    </div>
    
    </form>
</html>