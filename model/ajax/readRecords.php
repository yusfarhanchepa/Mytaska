<?php
	// include Database connection file 
	include("../../lib/db/conn.php");

	// Design initial table header 
	$data = '<table class="table table-bordered table-striped">
						<tr>
							<th>No.</th>
							<th>Nama Kelas</th>
							<th>Nama Guru</th>
							<th>Nama PPM</th>
							<th>Sesi </th>
							<th>Tahun Mula Operasi </th>
							<th>Kapasiti </th>
							<th>Update</th>
							<th>Delete</th>
						</tr>';

	$query = "SELECT * FROM kelas";

	if (!$result = mysqli_query($conn, $query)) {
        exit(mysqli_error($conn));
    }

    // if query results contains rows then featch those rows 
    if(mysqli_num_rows($result) > 0)
    {
    	$number = 1;
    	while($row = mysqli_fetch_assoc($result))
    	{
    		$data .= '<tr>
				<td>'.$number.'</td>
				<td>'.$row['nama_kelas'].'</td>
				<td>'.$row['nama_guru'].'</td>
				<td>'.$row['nama_ppm'].'</td>
				<td>'.$row['sesi'].'</td>
				<td>'.$row['tahun_mula_operasi'].'</td>
				<td>'.$row['kapasiti'].'</td>
			
				<td>
					<button onclick="GetUserDetails('.$row['id_kelas'].')" class="btn btn-warning">Update</button>
				</td>
				<td>
					<button onclick="DeleteUser('.$row['id_kelas'].')" class="btn btn-danger">Delete</button>
				</td>
    		</tr>';
    		$number++;
    	}
    }
    else
    {
    	// records now found 
    	$data .= '<tr><td colspan="6">Records not found!</td></tr>';
    }

    $data .= '</table>';

    echo $data;
?>