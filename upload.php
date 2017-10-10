<?php

	// koneksi
	$connect = mysqli_connect("localhost", "root", "", "KUA");

	if( mysqli_connect_errno() ){
	    printf("Connect failed: %s\n", mysqli_connect_errno());
	    exit();
	}

	if( isset($_POST['submit_rfp']) ){

		$project_proposal = $_FILES['project_proposal'];

		$name 					= $_POST['name'];
		$institution_name 		= $_POST['institution_name'];
		$institution_address 	= $_POST['institution_address'];
		$phone 					= $_POST['phone'];
		$email 					= $_POST['email'];
		$project_detail 		= $_POST['project_detail'];
		$status					= 0;
		$created_at 			= date('Y-m-d h:i:s');

		// var_dump($project_proposal);
		// upload proposal
		$target_dir = "uploads/";
		$target_file = $target_dir . basename($project_proposal["name"]);
		$file_extension = pathinfo($target_file,PATHINFO_EXTENSION);
		$upload_status = 1;


		if( $file_extension != "pdf" ){
			die("mohon upload file pdf");
		}else{

			if ( !file_exists($target_file) ) {

		// 		// var_dump($project_proposal);
				// ;
				move_uploaded_file($project_proposal["tmp_name"], $target_file);
			// 	if (  ) {
			//         echo ("The file ".basename( $project_proposal["name"]). " has been uploaded.");
			//     } else {
			//          $upload_status = 0;
			//      }
			}
		}

		if( $upload_status ){

			// insert ke database

			$sql = "insert into rfp values ('', '$name', '$institution_name', '$institution_address', '$phone', '$email', '$project_detail', '$target_file', $status, '$created_at' )";

			$insert = mysqli_query($connect, $sql);

			if( $insert )
				die("<script>window.alert('Upload Berhasil');window.location='./';</script>");
			else
				die("gagal");
		}
	}

	// tutup koneksi
	mysqli_close($connect);
?>