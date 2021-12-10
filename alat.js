$(document).ready(function(){
	var dataHasil = 0;
	tampil();

	$('.btn-tambah').click(function(){
		tambah();
	});
	
	$('.btn-batal').click(function(){
		tampil();
		reset();
	});

	$('.btn-ubah').click(function(){
		edit(dataHasil);
	});

	function tampil(){
		$('.targetData').html('');

		$('.btn-tambah').show();
		$('.btn-ubah').hide();
		$('.btn-batal').hide();
		$.ajax({
			type : 'GET',
			url : 'tampil.php',
			dataType : 'JSON',
			success : function(response){
				var i;
				var data = '';
				for( i=0; i<response.length; i++ ){
					data +=
					`
					<tr>
					<td style="text-align: center;">`+(i+1)+`</td>
					<td style="text-align: center;">`+response[i].nama+`</td>
					<td style="text-align: center;">`+response[i].nim+`</td>
					<td style="text-align: center;">`+response[i].tpb+`</td>
					<td style="text-align: center;">`+response[i].tgl+`</td>
					<td style="text-align: center;">
						<button class='btn-edit' nim='`+response[i].nim+`'>Ubah</button>
						<button class='btn-delete' nim='`+response[i].nim+`'>Hapus</button>
					</td>
					</tr>
					`
				}
				$('.targetData').append(data);

				$('.btn-edit').click(function(){
					tampil_data($(this).attr('nim'));
				})

				$('.btn-delete').click(function(){
					hapus($(this).attr('nim'));
				})
			}
		})
	}


	function tambah(){
		var nim = $('.nim').val();
		var nama = $('.nama').val();
		var tpb = $('.tpb').val();
		var tgl = $('.tgl').val();
		$.ajax({
			type : 'POST',
			url : 'tambah.php',
			data : 'nim='+nim+'&nama='+nama+'&tpb='+tpb+'&tgl='+tgl,
			dataType : 'JSON',
			success : function(response){
				if(response.status == '1'){
					tampil();
					reset();
				}else{
					alert(response.msg);
					tampil();
					reset();
				}

			}
		})
	}

	function tampil_data(x){
		$.ajax({
			type : 'POST',
			url : 'tampil_data.php',
			data : 'id='+x,
			dataType : 'JSON',
			success : function(response){
				dataHasil = response.nim;
				$('.nim').val(response.nim);
				$('.nama').val(response.nama);
				$('.tpb').val(response.tpb);
				$('.tgl').val(response.tgl);

				$('.btn-tambah').hide();
				$('.btn-ubah').show();
				$('.btn-batal').show();
	
			}
		})
	}

	function edit(x){
		var id = x;
		var nim = $('.nim').val();
		var nama = $('.nama').val();
		var tpb = $('.tpb').val();
		var tgl = $('.tgl').val();
		$.ajax({
			type : 'POST',
			url : 'edit.php',
			data : '&nim='+nim+'&nama='+nama+'&tpb='+tpb+'&tgl='+tgl,
			success : function(response){
				tampil();
				reset();
			}
		})
	}

	function hapus(x){
		$.ajax({
			type : 'POST',
			url : 'delete.php',
			data : 'nim='+x,
			dataType : 'JSON',
			success : function(response){
				if(response.status == '1'){
					tampil();
					reset();
				}else{
					alert(response.msg);
					tampil();
					reset();
				}
			}
		})
	}

	function reset(){
		$('.').val('');
		$('.nama').val('');
		$('.tpb').val('');
		$('.tgl').val('');
	}


});