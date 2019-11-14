// $('input[type="file"]').on('change', function(e){
	
	// var GFile = e.target.files[0].name;	
	// var GFile = URL.createObjectURL(event.target.files[0]);
	// document.frmPost.hsl.value = GFile;	
    // $('#btnSimpan').attr("disabled", true);    
      $('#btnSimpan').attr("disabled", true);                  
        // $('#btnSimpan').addClass('buttonGrey');   
	  function readURL(input) {
         if (input.files && input.files[0]) {
             var reader = new FileReader();
            
             reader.onload = function (e) {                              
                 $('#gmbr').attr('src', e.target.result);
                 
                 /*variabel untuk dapetin tinggi*/
                 var img = new Image(); 
                 img.src = e.target.result;                             
                 /*end*/
                
                /*fungsi untuk dapetin tinggi*/
                 img.onload = function(){
                     var h = this.height;
                     var w = this.width;                      
                 }
                 /*end*/ 
             }                              
                reader.readAsDataURL(input.files[0]);  
        }
    }
    
    $("#nmFile").change(function(x){        
        var GFile = x.target.files[0].name; 
        var fileExtension = GFile.replace(/^.*\./,'');
        
         if (fileExtension == "png" || fileExtension == "jpg" 
            || fileExtension == "jpeg" || fileExtension == "gif")
        {
          $('#frmGroup').slideDown('slow');
           readURL(this);
           // alert(fileExtension);           
           var LocFile = URL.createObjectURL(event.target.files[0]);
           var SizeFile = x.target.files[0].size;
           var SizeFile = Math.round(SizeFile/1024)+" Kb ";                     
           document.frmGmbr.hsl.value = GFile; 
           document.frmGmbr.LocFile.value = LocFile; 
          $('#btnSimpan').attr("disabled", false);          
           // alert(SizeFile);         
        }else{
            // alert('bukan file gambar');
            // $('#myModal').modal('toggle');
            $('#myModal').modal({
               backdrop: 'static',
               keyboard: false
            }).on('click', '#btnClose', function(ax){
               location.reload(true);
            });

            $('#myModal').modal({
               backdrop: 'static',
               keyboard: false
            }).on('click', '#btnDismis', function(ax){
               location.reload(true);
            });
            // location.reload(true);

        }                
    });

// });