<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Test Upload</title>
	 <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Viga&display=swap" rel="stylesheet">
</head>
<body>
	<div class="container">
	  <form id="frmGmbr" name="frmGmbr" method="POST" action="/upload" enctype="multipart/form-data">
	  	@csrf
		<div class="row">
		  <div class="col-4 text-info">
			<h1 class="mt-4 ml-2"><i class="fas fa-upload fa-2x mr-3 "></i>UPLOAD FILE</h1>
		  </div>
		</div>
	
				@if (session('status'))
				    <div class="alert alert-success alert-block mt-3">
				        <!-- {{ session('status') }} -->
				        <button type="button" class="close" data-dismiss="alert">x</button>
				        <strong>{{ session('status') }}</strong>
				    </div>
				@endif 					

		<div class="row">			
		  <div class="col-7">								
			  <div class="form-group ">			  
			  	<!-- <input type="file" class="mt-3 mb-5" id="nmFile">	 -->					
			  	 <div class="custom-file mt-4 mb-2 ml-2">
				  	<input type="file" class="custom-file-input" name="nmFile" id="nmFile" 
				  	aria-describedby="nmFile">
				  	<label class="custom-file-label" for="nmFile">Choose file...</label>
			  	 </div>
		   	  </div>
	 	  </div>
		</div>

		<div class="row">			
			<div class="col-5">								
				<div class="form-group" id="frmGroup">
				 	<div class="gmbrHsl" id="gmbrHsl">
				  	   <img src="#" alt="pic" id="gmbr" class="img-fluid">	
				  	    <div class="input-group input-group-sm mb-3 mt-3">
						  <div class="input-group-prepend">
						    <span label for="hslID" class="input-group-text" id="inputGroup-sizing-sm">Nama File</span>
						  </div>
						  <input type="text" class="form-control col-8" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="hsl" id="hslID">		
						</div>	
				  	 </div>
				</div>					
			</div>			
		</div>

		<div class="row">			
			<div class="col-5">								
			  	 <button type="submit" class="btn btn-primary btn-lg mt-2 ml-2 mb-3" id="btnSimpan">Simpan Gambar</button>
				 <input type="hidden" name="LocFile" id="LocFile">
					 <!-- <button type="submit" class="btn btn-primary">Simpan</button> -->			
			</div>
		</div>
		
		<div class="modal fade" id="myModal" role="dialog">
		    <div class="modal-dialog">
		    
		      <!-- Modal content-->
		      <div class="modal-content">
		        <div class="modal-header bg-danger">		          
		          <i class="fas fa-times-circle fa-3x text-white"></i><h4 class="modal-title text text-white ml-3 mt-1">Upload Error..!</h4>
		          <button type="button" class="close text-white" data-dismiss="modal" id="btnDismis">&times;</button>
		        </div>
		        <div class="modal-body">
		          <p>File ini bukan file gambar. Silahkan upload gambar dengan extensi: jpg, png atau gif</p>
		        </div>
		        <div class="modal-footer">
		          <button type="button" class="btn btn-danger" data-dismiss="modal" id="btnClose">Close</button>
		        </div>
		      </div>
		      
		    </div>
		  </div>

	</div>

	<!-- <form id="form1" runat="server">
        <input type='file' id="imgInp" />
        <img id="blah" src="#" alt="your image" />
    </form> -->

			

 <!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/3ca203cb0e.js" crossorigin="anonymous"></script>
<script src="{{asset('js/script.js')}}"></script>

</body>
</html>