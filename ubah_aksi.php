<?php 
include 'aksi.php';
$db = new aksi();

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$prodi = $_POST['prodi'];
$result = $db->update($nim,$nama,$prodi);
if($result==1){
	echo "
	<script>
		alert('Data berhasil diubah');		
		window.location.href='index.php';
	</script>
	";
}else{
	echo "
	<script>
		alert('Gagal simpan');		
		history.go(-1);
	</script>
	";
}
?>