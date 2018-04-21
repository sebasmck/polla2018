$(document).ready(function(){

        var postURL = "<?php echo url('/storea'); ?>";

        $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

        $('#submitgroupa').click(function(){

            $.ajax({  
                url:postURL,  
                method:"POST",  
                data:$('#groupa').serialize(),
                type:'json',
                success:function(data){
                    if(data.error){
                        printErrorMsg(data.error);
                    }else{
                        alert("done");
                    }
                }  
            }); 

        });

    });