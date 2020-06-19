<!doctype html>
<html>
	<head>
		<title>Detail</title>
		<!-- Load JQuery dari CDN -->
		<!-- <script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.10.2.min.js"></script> -->
		
		<!-- Load DataTables dan Bootstrap dari CDN -->
		<!-- <script type="text/javascript" language="javascript" src="//cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
		<script type="text/javascript" language="javascript" src="//cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.js"></script> -->
		
		<!-- <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.css"> -->
	</head>
	<body>
		<?php $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/footer');
        ?>
		<!-- dalam div row harus ada col yang maksimum nilainya 12 -->
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-10">
			
                <h3>Detail Transaksi ID<?=$invoice->id_transaksi?></h3>
				<table id="myTable" class="table table-striped table-bordered table-hover">
					<thead>
						<tr>
							<th>ID Transaksi</th>
							<th>ID Katalog</th>
							<th>ID Pelanggan</th>
							<th>Tanggal Transaksi</th>
							<th>Tanggal Berangkat</th>
                            <th>Penerima</th>
							<th>Alamat Rinci</th>
                            <th>No Hp Penerima</th>
						</tr>
					</thead>
					<tbody>
						<?php 
                            foreach($orders as $order) :                            ;
                        ?>
						<tr>
							<td><?=$order->id_transaksi?></td>
							<td><?=$order->id_katalog?></td>
							<td><?=$order->id_pelanggan?></td>
							<td><?=$order->tgl_transaksi?></td>
                            <td><?=$order->tgl_berangkat?></td>
							<td><?=$order->penerima?></td>
							<td><?=$order->alamat_rinci?></td>
							<td><?=$order->nohp_penerima?></td>
							
						</tr>
						<?php endforeach; ?>
					</tbody>
                    <tfoot>
                        <tr>
                        </tr>
                    </tfoot>
				</table>
			</div>
			<div class="col-md-1"></div>
		</div>
		
		
		<script>
			$(document).ready(function(){
				$('#myTable').DataTable();
			});
		</script>
	</body>
</html>