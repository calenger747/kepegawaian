<?php
	if(isset($_POST['tambah'])) {

		include('../config_config_cs/koneksi-data-peg-lr-com.php');
		$p_id		 		= $_POST['id'];
		$p_nip		 		= $_POST['nip'];	
		$p_nama_skill	 	= strtoupper($_POST['nama_skill']);
		$p_kompetensi		= $_POST['kompetensi'];	
		

		$q_skill	= mysqli_query($connect, "UPDATE tbl_skil SET nip = '$p_nip', skil = '$p_nama_skill', kompetensi = '$p_kompetensi' WHERE id = '$p_id' ") or die(mysqli_error($connect));
		if ($q_skill) { ?>
			<script type="text/javascript">
				window.location="../?view=profil-pribadi&id=997386739hupa&name=pegaaplication&detailPegawai&nip=<?php echo $p_nip; ?>&status=1111";
		    </script>
		<?php 
		} else { ?>
			<script type="text/javascript">
				window.location="../?view=profil-pribadi&id=997386739hupa&name=pegaaplication&detailPegawai&nip=<?php echo $p_nip; ?>&status=4444";
			</script>	
		<?php
		}

	} else {
		echo '<script>window.history.back()</script>';
	}
?>