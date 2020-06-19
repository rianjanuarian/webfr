<!doctype html>
<html>
	<head>
		<title>Transaksi</title>
		<!-- Load JQuery dari CDN -->
		<!-- <script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.10.2.min.js"></script> -->
		
		<!-- Load DataTables dan Bootstrap dari CDN -->
		<!-- <script type="text/javascript" language="javascript" src="//cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
		<script type="text/javascript" language="javascript" src="//cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.js"></script> -->
		
		<!-- <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.css"> -->
	</head>
	<body>
		<?php //$this->load->view('backend/admin_menu')?>
		<!-- dalam div row harus ada col yang maksimum nilainya 12 -->
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-10">
			
				<table id="myTable" class="table table-striped table-bordered table-hover">
					<thead>
						<tr>
							<th>ID Transaksi</th>
                            <th>Tanggal Transaksi</th>
                            <th>Tanggal Berangkat</th>
                            <th>Actions</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($invoices as $invoice) : ?>
						<tr>
							<td><?=$invoice->id_transaksi?></td>
							<td><?=$invoice->tgl_transaksi?></td>
							<td><?=$invoice->tgl_berangkat?></td>
							
                            <td>
                                <?=anchor(	'invoices/detail/' . $invoice->id_transaksi, 
											'Details',
											['class'=>'btn btn-default btn-sm'])
								?> 
                            </td>
						</tr>
						<?php endforeach; ?>
					</tbody>
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