$(document).ready(function(){



        var url = $("#imgroute").val();

        function RefreshTable() {
            $("#secondstage").load("{{route('picks.show', $poll->iduser_poll)}} #secondstage");
            $(".test").load("{{route('picks.show', $poll->iduser_poll)}} #secondstage" ,function(){
            $.getScript("{{asset('')}}");
            });
        }


        // RESET

        function reset(){

            // $("#WRound1A2B").prepend("<option value='' selected='selected'>Pick a Team</option>");
            // $("#WRound1A2B").val('');

            // select quarters 

            // 1
            $("#WRound1A2B").find('option:eq(0)').prop('selected', true);
            $(".iWRound1A2B").attr('src', '');
            // 2
            $("#WRound1C2D").find('option:eq(0)').prop('selected', true);
            $(".iWRound1C2D").attr('src', '');
            // 3
            $("#WRound1E2F").find('option:eq(0)').prop('selected', true);
            $(".iWRound1E2F").attr('src', '');
            // 4
            $("#WRound1G2H").find('option:eq(0)').prop('selected', true);
            $(".iWRound1G2H").attr('src', '');
            // 5
            $("#WRound1B2A").find('option:eq(0)').prop('selected', true);
            $(".iWRound1B2A").attr('src', '');
            // 6
            $("#WRound1D2C").find('option:eq(0)').prop('selected', true);
            $(".iWRound1D2C").attr('src', '');
            // 7
            $("#WRound1F2E").find('option:eq(0)').prop('selected', true);
            $(".iWRound1F2E").attr('src', '');
            // 8
            $("#WRound1H2G").find('option:eq(0)').prop('selected', true);
            $(".iWRound1H2G").attr('src', '');


            // Semi-finals
            // 1
            $('select.Wquarter1_2').find('option').not(':first').remove();
            $(".iWquarter1_2").attr('src', '');
            // 2
            $('select.Wquarter3_4').find('option').not(':first').remove();
            $(".iWquarter3_4").attr('src', '');
            // 3
            $('select.Wquarter5_6').find('option').not(':first').remove();
            $(".iWquarter5_6").attr('src', '');
            // 4
            $('select.Wquarter7_8').find('option').not(':first').remove();
            $(".iWquarter7_8").attr('src', '');

            // Final
            // 1
            $('select.WSemi1_2').find('option').not(':first').remove();
            $(".iWSemi1_2").attr('src', '');
            // 2
            $('select.WSemi3_4').find('option').not(':first').remove();
            $(".iWSemi3_4").attr('src', '');

            // Champion
            // 1
            $('select.Winner1').find('option').not(':first').remove();
            $(".iWinner1").attr('src', '');

        }

        $('#reset').click(function(){
            reset();
        });

         $("select.WRound1A2B").on("input",function(){
            // save variables on change

            var selectedTeamAvalue = $(".WRound1A2B option:selected").val();
            var selectedTeamAtext = $(".WRound1A2B option:selected").text();
            var selectedTeamBvalue = $(".WRound1C2D option:selected").val();
            var selectedTeamBtext = $(".WRound1C2D option:selected").text();



            $(".iWRound1A2B").attr('src', url + '/' + selectedTeamAtext.replace(/ /g,"_").toLowerCase() + '.png');

            if (($('#Wquarter1_2 option').length) < 3) {
                
                $('select.Wquarter1_2').append($('<option/>', { 
                value: selectedTeamAvalue,
                text : selectedTeamAtext 
            }));    
            } else { 


                $('#Wquarter1_2').empty().append($('<option/>', { 
                value: selectedTeamAvalue,
                text : selectedTeamAtext 
            }));
                $('#Wquarter1_2').append($('<option/>', { 
                value: selectedTeamBvalue,
                text : selectedTeamBtext 
            })); 
            }
            

        });

         $("select.WRound1C2D").on("change",function(){

            var selectedTeamAvalue = $(".WRound1A2B option:selected").val();
            var selectedTeamAtext = $(".WRound1A2B option:selected").text();

            var selectedTeamBvalue = $(".WRound1C2D option:selected").val();
            var selectedTeamBtext = $(".WRound1C2D option:selected").text();

            $("select.Wquarter1_2").val("option:first");

            $(".iWRound1C2D").attr('src', url + '/' + selectedTeamBtext.replace(/ /g,"_").toLowerCase() + '.png');
            

            if (($('#Wquarter1_2 option').length) < 3) {

                $('select.Wquarter1_2').append($('<option/>', { 
                value: selectedTeamBvalue,
                text : selectedTeamBtext 
            }));    
            } else { 
                $('#Wquarter1_2').empty().append($('<option/>', { 
                value: selectedTeamAvalue,
                text : selectedTeamAtext 
            }));
                $('#Wquarter1_2').append($('<option/>', { 
                value: selectedTeamBvalue,
                text : selectedTeamBtext 
            })); 
            }
        });

         // -----------------------



        $("select.WRound1E2F").on("change",function(){

            var selectedTeamCvalue = $(".WRound1E2F option:selected").val();
            var selectedTeamCtext = $(".WRound1E2F option:selected").text();
            
            var selectedTeamDvalue = $(".WRound1G2H option:selected").val();
            var selectedTeamDtext = $(".WRound1G2H option:selected").text();

            $("select.Wquarter3_4").val("option:first");

            $(".iWRound1E2F").attr('src', url + '/' + selectedTeamCtext.replace(/ /g,"_").toLowerCase() + '.png');

            if (($('#Wquarter3_4 option').length) < 3) {

                $('select.Wquarter3_4').append($('<option/>', { 
                value: selectedTeamCvalue,
                text : selectedTeamCtext 
            }));    
            } else { 
                $('#Wquarter3_4').empty().append($('<option/>', { 
                value: selectedTeamCvalue,
                text : selectedTeamCtext 
            }));
                $('#Wquarter3_4').append($('<option/>', { 
                value: selectedTeamDvalue,
                text : selectedTeamDtext 
            })); 
            }

        });

        $("select.WRound1G2H").on("change",function(){

            var selectedTeamCvalue = $(".WRound1E2F option:selected").val();
            var selectedTeamCtext = $(".WRound1E2F option:selected").text();

            var selectedTeamDvalue = $(".WRound1G2H option:selected").val();
            var selectedTeamDtext = $(".WRound1G2H option:selected").text();

            $("select.iWRound1G2H").val("option:first");

            $(".iWRound1G2H").attr('src', url + '/' + selectedTeamDtext.replace(/ /g,"_").toLowerCase() + '.png');

            if (($('#Wquarter3_4 option').length) < 3) {

                $('select.Wquarter3_4').append($('<option/>', { 
                value: selectedTeamDvalue,
                text : selectedTeamDtext 
            }));    
            } else { 
                $('#Wquarter3_4').empty().append($('<option/>', { 
                value: selectedTeamDvalue,
                text : selectedTeamDtext 
            }));
                $('#Wquarter3_4').append($('<option/>', { 
                value: selectedTeamCvalue,
                text : selectedTeamCtext 
            })); 
            }

        });


        // -----------------------------

        $("select.WRound1B2A").on("change",function(){

            var selectedTeamEvalue = $(".WRound1B2A option:selected").val();
            var selectedTeamEtext = $(".WRound1B2A option:selected").text();

            var selectedTeamFvalue = $(".WRound1D2C option:selected").val();
            var selectedTeamFtext = $(".WRound1D2C option:selected").text();

            $("select.Wquarter5_6").val("option:first");

            $(".iWRound1B2A").attr('src', url + '/' + selectedTeamEtext.replace(/ /g,"_").toLowerCase() + '.png');

            if (($('#Wquarter5_6 option').length) < 3) {

                $('select.Wquarter5_6').append($('<option/>', { 
                value: selectedTeamEvalue,
                text : selectedTeamEtext 
            }));    
            } else { 
                $('#Wquarter5_6').empty().append($('<option/>', { 
                value: selectedTeamEvalue,
                text : selectedTeamEtext 
            }));
                $('#Wquarter5_6').append($('<option/>', { 
                value: selectedTeamFvalue,
                text : selectedTeamFtext 
            })); 
            }

        });

        $("select.WRound1D2C").on("change",function(){

            var selectedTeamEvalue = $(".WRound1B2A option:selected").val();
            var selectedTeamEtext = $(".WRound1B2A option:selected").text();

            var selectedTeamFvalue = $(".WRound1D2C option:selected").val();
            var selectedTeamFtext = $(".WRound1D2C option:selected").text();


            $(".iWRound1D2C").attr('src', url + '/' + selectedTeamFtext.replace(/ /g,"_").toLowerCase() + '.png');
            
           if (($('#Wquarter5_6 option').length) < 3) {

                $('select.Wquarter5_6').append($('<option/>', { 
                value: selectedTeamFvalue,
                text : selectedTeamFtext 
            }));    
            } else { 
                $('#Wquarter5_6').empty().append($('<option/>', { 
                value: selectedTeamFvalue,
                text : selectedTeamFtext 
            }));
                $('#Wquarter5_6').append($('<option/>', { 
                value: selectedTeamEvalue,
                text : selectedTeamEtext 
            })); 
            }
        });

        //  -----------------------------

        $("select.WRound1F2E").on("change",function(){

            var selectedTeamGvalue = $(".WRound1F2E option:selected").val();
            var selectedTeamGtext = $(".WRound1F2E option:selected").text();

            var selectedTeamHvalue = $(".WRound1H2G option:selected").val();
            var selectedTeamHtext = $(".WRound1H2G option:selected").text();

            $(".iWRound1F2E").attr('src', url + '/' + selectedTeamGtext.replace(/ /g,"_").toLowerCase() + '.png');
            
            if (($('#Wquarter7_8 option').length) < 3) {

                $('select.Wquarter7_8').append($('<option/>', { 
                value: selectedTeamGvalue,
                text : selectedTeamGtext 
            }));    
            } else { 
                $('#Wquarter7_8').empty().append($('<option/>', { 
                value: selectedTeamGvalue,
                text : selectedTeamGtext 
            }));
                $('#Wquarter7_8').append($('<option/>', { 
                value: selectedTeamHvalue,
                text : selectedTeamHtext 
            })); 
            }

        });

        $("select.WRound1H2G").on("input",function(){

            var selectedTeamGvalue = $(".WRound1F2E option:selected").val();
            var selectedTeamGtext = $(".WRound1F2E option:selected").text();

            var selectedTeamHvalue = $(".WRound1H2G option:selected").val();
            var selectedTeamHtext = $(".WRound1H2G option:selected").text();

            $(".iWRound1H2G").attr('src', url + '/' + selectedTeamHtext.replace(/ /g,"_").toLowerCase() + '.png');
            
            if (($('#Wquarter7_8 option').length) < 3) {

                $('select.Wquarter7_8').append($('<option/>', { 
                value: selectedTeamHvalue,
                text : selectedTeamHtext 
            }));    
            } else { 
                $('#Wquarter7_8').empty().append($('<option/>', { 
                value: selectedTeamHvalue,
                text : selectedTeamHtext 
            }));
                $('#Wquarter7_8').append($('<option/>', { 
                value: selectedTeamGvalue,
                text : selectedTeamGtext 
            })); 
            }
        });

        //   ------------------------------


        // FINALS

        $("select.Wquarter1_2").on("input",function(){
            var selectedSemi1Value = $(".Wquarter1_2 option:selected").val();
            var selectedSemi1Text = $(".Wquarter1_2 option:selected").text();

            var selectedSemi2Value = $(".Wquarter3_4 option:selected").val();
            var selectedSemi2Text = $(".Wquarter3_4 option:selected").text();

            $(".iWquarter1_2").attr('src', url + '/' + selectedSemi1Text.replace(/ /g,"_").toLowerCase() + '.png');
           
            if (($('#WSemi1_2 option').length) < 3) {

                $('select.WSemi1_2').append($('<option/>', { 
                value: selectedSemi1Value,
                text : selectedSemi1Text 
            }));    
            } else { 
                $('#WSemi1_2').empty().append($('<option/>', { 
                value: selectedSemi1Value,
                text : selectedSemi1Text 
            }));
                $('#WSemi1_2').append($('<option/>', { 
                value: selectedSemi2Value,
                text : selectedSemi2Text 
            })); 
            }
        });

        $("select.Wquarter3_4").on("input",function(){

            var selectedSemi1Value = $(".Wquarter1_2 option:selected").val();
            var selectedSemi1Text = $(".Wquarter1_2 option:selected").text();

            var selectedSemi2Value = $(".Wquarter3_4 option:selected").val();
            var selectedSemi2Text = $(".Wquarter3_4 option:selected").text();

            $(".iWquarter3_4").attr('src', url + '/' + selectedSemi2Text.replace(/ /g,"_").toLowerCase() + '.png');
            
            if (($('#WSemi1_2 option').length) < 3) {

                $('select.WSemi1_2').append($('<option/>', { 
                value: selectedSemi2Value,
                text : selectedSemi2Text 
            }));    
            } else { 
                $('#WSemi1_2').empty().append($('<option/>', { 
                value: selectedSemi2Value,
                text : selectedSemi2Text 
            }));
                $('#WSemi1_2').append($('<option/>', { 
                value: selectedSemi1Value,
                text : selectedSemi1Text 
            })); 
            }
        });

        //  ---------------------------------


        $("select.Wquarter5_6").on("input",function(){
            var selectedSemi3Value = $(".Wquarter5_6 option:selected").val();
            var selectedSemi3Text = $(".Wquarter5_6 option:selected").text();

            var selectedSemi4Value = $(".Wquarter7_8 option:selected").val();
            var selectedSemi4Text = $(".Wquarter7_8 option:selected").text();

             $(".iWquarter5_6").attr('src', url + '/' + selectedSemi3Text.replace(/ /g,"_").toLowerCase() + '.png');
            
            if (($('#WSemi3_4 option').length) < 3) {
                
                $('select.WSemi3_4').append($('<option/>', { 
                value: selectedSemi3Value,
                text : selectedSemi3Text 
            }));    
            } else { 
                $('#WSemi3_4').empty().append($('<option/>', { 
                value: selectedSemi3Value,
                text : selectedSemi3Text 
            }));
                $('#WSemi3_4').append($('<option/>', { 
                value: selectedSemi4Value,
                text : selectedSemi4Text 
            })); 
            }
        });


        $("select.Wquarter7_8").on("input",function(){
            var selectedSemi3Value = $(".Wquarter5_6 option:selected").val();
            var selectedSemi3Text = $(".Wquarter5_6 option:selected").text();

            var selectedSemi4Value = $(".Wquarter7_8 option:selected").val();
            var selectedSemi4Text = $(".Wquarter7_8 option:selected").text();

             $(".iWquarter7_8").attr('src', url + '/' + selectedSemi4Text.replace(/ /g,"_").toLowerCase() + '.png');
            
            if (($('#WSemi3_4 option').length) < 3) {

                $('select.WSemi3_4').append($('<option/>', { 
                value: selectedSemi4Value,
                text : selectedSemi4Text 
            }));    
            } else { 
                $('#WSemi3_4').empty().append($('<option/>', { 
                value: selectedSemi4Value,
                text : selectedSemi4Text 
            }));
                $('#WSemi3_4').append($('<option/>', { 
                value: selectedSemi3Value,
                text : selectedSemi3Text 
            })); 
            }
            
        });

        // ------------------------------------
        
        

        
        // FINAL

        

        $("select.WSemi1_2").on("input",function(){
            var selectedSemi5Value = $(".WSemi1_2 option:selected").val();
            var selectedSemi5Text = $(".WSemi1_2 option:selected").text();

            var selectedSemi6Value = $(".WSemi3_4 option:selected").val();
            var selectedSemi6Text = $(".WSemi3_4 option:selected").text();

            $(".iWSemi1_2").attr('src', url + '/' + selectedSemi5Text.replace(/ /g,"_").toLowerCase() + '.png');
            
            if (($('#Winner1 option').length) < 3) {

                $('select.Winner1').append($('<option/>', { 
                value: selectedSemi5Value,
                text : selectedSemi5Text 
            }));    
            } else { 
                $('#Winner1').empty().append($('<option/>', { 
                value: selectedSemi5Value,
                text : selectedSemi5Text 
            }));
                $('#Winner1').append($('<option/>', { 
                value: selectedSemi6Value,
                text : selectedSemi6Text 
            })); 
            }
        });

        $("select.WSemi3_4").on("input",function(){

            var selectedSemi5Value = $(".WSemi1_2 option:selected").val();
            var selectedSemi5Text = $(".WSemi1_2 option:selected").text();
            
            var selectedSemi6Value = $(".WSemi3_4 option:selected").val();
            var selectedSemi6Text = $(".WSemi3_4 option:selected").text();

            $(".iWSemi3_4").attr('src', url + '/' + selectedSemi6Text.replace(/ /g,"_").toLowerCase() + '.png');
            
            if (($('#Winner1 option').length) < 3) {

                $('select.Winner1').append($('<option/>', { 
                value: selectedSemi6Value,
                text : selectedSemi6Text 
            }));    
            } else { 
                $('#Winner1').empty().append($('<option/>', { 
                value: selectedSemi6Value,
                text : selectedSemi6Text 
            }));
                $('#Winner1').append($('<option/>', { 
                value: selectedSemi5Value,
                text : selectedSemi5Text 
            })); 
            }
        });

        $("select.Winner1").on("input",function(){

            // var selectedSemi5Value = $(".Winner1 option:selected").val();
            var selectedWinner = $(".Winner1 option:selected").text();

            $(".iWinner1").attr('src', url + '/' + selectedWinner.replace(/ /g,"_").toLowerCase() + '.png');
            
            
        });


        //  -----------------------------


        var postURLA = "<?php echo url('/storea'); ?>";
        var postURLB = "<?php echo url('/storeb'); ?>";
        var postURLC = "<?php echo url('/storec'); ?>";
        var postURLD = "<?php echo url('/stored'); ?>";
        var postURLE = "<?php echo url('/storee'); ?>";
        var postURLF = "<?php echo url('/storef'); ?>";
        var postURLG = "<?php echo url('/storeg'); ?>";
        var postURLH = "<?php echo url('/storeh'); ?>";
        var postSECONDSTAGE = "<?php echo url('/storesecondstage'); ?>";

        $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
         });

        $('#submitgroupa').click(function(){

            $.ajax({  
                url:postURLA,  
                method:"POST",  
                data:$('#groupa').serialize(),
                type:'json',
                success:function(data){
                    if(data.error){
                        printErrorMsg(data.error);
                    }else{
                        toastr.success('Saved');
                        $('#idgrupoa').removeClass( "active show" );
                        $('#idgrupob').addClass( "active show" );
                        $('#grupoa').removeClass( "active show" );
                        $('#grupob').addClass( "active show" );
                        RefreshTable();
                        reset();
                    }
                }  
            }); 

        });

        $('#submitgroupahome').click(function(){
            $.ajax({  
                url:postURLA,  
                method:"POST",  
                data:$('#groupa').serialize(),
                type:'json',
                success:function(data){
                    if(data.error){
                        printErrorMsg(data.error);
                    }else{
                        toastr.success('Saved');
                        window.location='{{ route("home") }}';
                    }
                }  
            }); 

        });

        $('#submitgroupb').click(function(){

            $.ajax({  
                url:postURLB,  
                method:"POST",  
                data:$('#groupb').serialize(),
                type:'json',
                success:function(data){
                    if(data.error){
                        printErrorMsg(data.error);
                    }else{
                        toastr.success('Saved');
                        $('#idgrupob').removeClass( "active show" );
                        $('#idgrupoc').addClass( "active show" );
                        $('#grupob').removeClass( "active show" );
                        $('#grupoc').addClass( "active show" );
                        RefreshTable();
                        reset();
                    }
                }  
            }); 

        });
        $('#submitgroupbhome').click(function(){

            $.ajax({  
                url:postURLB,  
                method:"POST",  
                data:$('#groupb').serialize(),
                type:'json',
                success:function(data){
                    if(data.error){
                        printErrorMsg(data.error);
                    }else{
                        toastr.success('Saved');
                        window.location='{{ route("home") }}';
                    }
                }  
            }); 

        });


        $('#submitgroupc').click(function(){

            $.ajax({  
                url:postURLC,  
                method:"POST",  
                data:$('#groupc').serialize(),
                type:'json',
                success:function(data){
                    if(data.error){
                        printErrorMsg(data.error);
                    }else{
                        toastr.success('Saved');
                        $('#idgrupoc').removeClass( "active show" );
                        $('#idgrupod').addClass( "active show" );
                        $('#grupoc').removeClass( "active show" );
                        $('#grupod').addClass( "active show" );
                        RefreshTable();
                        reset();
                    }
                }  
            }); 

        });
        $('#submitgroupchome').click(function(){

            $.ajax({  
                url:postURLC,  
                method:"POST",  
                data:$('#groupc').serialize(),
                type:'json',
                success:function(data){
                    if(data.error){
                        printErrorMsg(data.error);
                    }else{
                        toastr.success('Saved');
                        window.location='{{ route("home") }}';
                    }
                }  
            }); 

        });



        $('#submitgroupd').click(function(){

            $.ajax({  
                url:postURLD,  
                method:"POST",  
                data:$('#groupd').serialize(),
                type:'json',
                success:function(data){
                    if(data.error){
                        printErrorMsg(data.error);
                    }else{
                        toastr.success('Saved');
                        $('#idgrupod').removeClass( "active show" );
                        $('#idgrupoe').addClass( "active show" );
                        $('#grupod').removeClass( "active show" );
                        $('#grupoe').addClass( "active show" );
                        RefreshTable();
                        reset();
                    }
                }  
            }); 

        });
        $('#submitgroupdhome').click(function(){

            $.ajax({  
                url:postURLD,  
                method:"POST",  
                data:$('#groupd').serialize(),
                type:'json',
                success:function(data){
                    if(data.error){
                        printErrorMsg(data.error);
                    }else{
                        toastr.success('Saved');
                        window.location='{{ route("home") }}';
                    }
                }  
            }); 

        });



        $('#submitgroupe').click(function(){

            $.ajax({  
                url:postURLE,  
                method:"POST",  
                data:$('#groupe').serialize(),
                type:'json',
                success:function(data){
                    if(data.error){
                        printErrorMsg(data.error);
                    }else{
                        toastr.success('Saved');
                        $('#idgrupoe').removeClass( "active show" );
                        $('#idgrupof').addClass( "active show" );
                        $('#grupoe').removeClass( "active show" );
                        $('#grupof').addClass( "active show" );
                        RefreshTable();
                        reset();
                    }
                }  
            }); 

        });
        $('#submitgroupehome').click(function(){

            $.ajax({  
                url:postURLE,  
                method:"POST",  
                data:$('#groupe').serialize(),
                type:'json',
                success:function(data){
                    if(data.error){
                        printErrorMsg(data.error);
                    }else{
                        toastr.success('Saved');
                        window.location='{{ route("home") }}';
                    }
                }  
            }); 

        });



        $('#submitgroupf').click(function(){

            $.ajax({  
                url:postURLF,  
                method:"POST",  
                data:$('#groupf').serialize(),
                type:'json',
                success:function(data){
                    if(data.error){
                        printErrorMsg(data.error);
                    }else{
                        toastr.success('Saved');
                        $('#idgrupof').removeClass( "active show" );
                        $('#idgrupog').addClass( "active show" );
                        $('#grupof').removeClass( "active show" );
                        $('#grupog').addClass( "active show" );
                        RefreshTable();
                        reset();
                    }
                }  
            }); 

        });
        $('#submitgroupfhome').click(function(){

            $.ajax({  
                url:postURLF,  
                method:"POST",  
                data:$('#groupf').serialize(),
                type:'json',
                success:function(data){
                    if(data.error){
                        printErrorMsg(data.error);
                    }else{
                        toastr.success('Saved');
                        window.location='{{ route("home") }}';
                    }
                }  
            }); 

        });



        $('#submitgroupg').click(function(){

            $.ajax({  
                url:postURLG,  
                method:"POST",  
                data:$('#groupg').serialize(),
                type:'json',
                success:function(data){
                    if(data.error){
                        printErrorMsg(data.error);
                    }else{
                        toastr.success('Saved');
                        $('#idgrupog').removeClass( "active show" );
                        $('#idgrupoh').addClass( "active show" );
                        $('#grupog').removeClass( "active show" );
                        $('#grupoh').addClass( "active show" );
                        RefreshTable();
                        reset();
                    }
                }  
            }); 

        });
        $('#submitgroupghome').click(function(){

            $.ajax({  
                url:postURLG,  
                method:"POST",  
                data:$('#groupg').serialize(),
                type:'json',
                success:function(data){
                    if(data.error){
                        printErrorMsg(data.error);
                    }else{
                        toastr.success('Saved');
                        window.location='{{ route("home") }}';
                    }
                }  
            }); 

        });


        
        $('#submitgrouph').click(function(){

            $.ajax({  
                url:postURLH,  
                method:"POST",  
                data:$('#grouph').serialize(),
                type:'json',
                success:function(data){
                    if(data.error){
                        printErrorMsg(data.error);
                    }else{                        
                        toastr.success('Saved');
                        $('#idgrupoh').removeClass( "active show" );
                        $('#idgrupoRoun').addClass( "active show" );
                        $('#grupoh').removeClass( "active show" );
                        $('#grupoRoun').addClass( "active show" );
                        RefreshTable();



                      
                    }
                }  
            }); 

        });
        $('#submitgrouphhome').click(function(){

            $.ajax({  
                url:postURLH,  
                method:"POST",  
                data:$('#grouph').serialize(),
                type:'json',
                success:function(data){
                    if(data.error){
                        printErrorMsg(data.error);
                    }else{
                        toastr.success('Saved');
                        window.location='{{ route("home") }}';
                    }
                }  
            }); 

        });

        $('#submitSecondStage').click(function(){

            $.ajax({  
                url:postSECONDSTAGE,  
                method:"POST",  
                data:$('#secondstage').serialize(),
                type:'json',
                success:function(data){
                    if(data.error){
                        printErrorMsg(data.error);
                    }else{
                        // toastr.success('Saved');
                        // location.reload();
                        // $('#idgrupoh').removeClass( "active show" );
                        // $('#idgrupoRoun').addClass( "active show" );
                        // $('#grupoh').removeClass( "active show" );
                        // $('#grupoRoun').addClass( "active show" );
                        // location.reload();
                        toastr.success('Saved');
                        window.location='{{ route("home") }}';
                    }
                }  
            }); 

        });

        
        // dont repet winner by group
        $('#WA2').change(function(event) {
            var espP = $('#WA1').val();
            var espS = event.target.value;
            if(espP == espS)
            {
                toastr.warning('Please make sure to select different teams in the Winners section');
                $('#WA2').val($("#WA2 option:first").val());
            }
        });

        $('#WA1').change(function(event) {
            var espS = $('#WA2').val();
            var espP = event.target.value;
            if(espP == espS)
            {
                toastr.warning('Please make sure to select different teams in the Winners section');
                $('#WA1').val($("#WA1 option:first").val());
            }
        });

        $('#WB2').change(function(event) {
            var espP = $('#WB1').val();
            var espS = event.target.value;
            if(espP == espS)
            {
                toastr.warning('Please make sure to select different teams in the Winners section');
                $('#WB2').val($("#WB2 option:first").val());
            }
        });

        $('#WB1').change(function(event) {
            var espS = $('#WB2').val();
            var espP = event.target.value;
            if(espP == espS)
            {
                toastr.warning('Please make sure to select different teams in the Winners section');
                $('#WB1').val($("#WB1 option:first").val());
            }
        });

        $('#WC2').change(function(event) {
            var espP = $('#WC1').val();
            var espS = event.target.value;
            if(espP == espS)
            {
                toastr.warning('Please make sure to select different teams in the Winners section');
                $('#WC2').val($("#WC2 option:first").val());
            }
        });

        $('#WC1').change(function(event) {
            var espS = $('#WC2').val();
            var espP = event.target.value;
            if(espP == espS)
            {
                toastr.warning('Please make sure to select different teams in the Winners section');
                $('#WC1').val($("#WC1 option:first").val());
            }
        });

        $('#WD2').change(function(event) {
            var espP = $('#WD1').val();
            var espS = event.target.value;
            if(espP == espS)
            {
                toastr.warning('Please make sure to select different teams in the Winners section');
                $('#WD2').val($("#WD2 option:first").val());
            }
        });

        $('#WD1').change(function(event) {
            var espS = $('#WD2').val();
            var espP = event.target.value;
            if(espP == espS)
            {
                toastr.warning('Please make sure to select different teams in the Winners section');
                $('#WD1').val($("#WD1 option:first").val());
            }
        });

        $('#WE2').change(function(event) {
            var espP = $('#WE1').val();
            var espS = event.target.value;
            if(espP == espS)
            {
                toastr.warning('Please make sure to select different teams in the Winners section');
                $('#WE2').val($("#WE2 option:first").val());
            }
        });

        $('#WE1').change(function(event) {
            var espS = $('#WE2').val();
            var espP = event.target.value;
            if(espP == espS)
            {
                toastr.warning('Please make sure to select different teams in the Winners section');
                $('#WE1').val($("#WE1 option:first").val());
            }
        });

        $('#WF2').change(function(event) {
            var espP = $('#WF1').val();
            var espS = event.target.value;
            if(espP == espS)
            {
                toastr.warning('Please make sure to select different teams in the Winners section');
                $('#WF2').val($("#WF2 option:first").val());
            }
        });

        $('#WF1').change(function(event) {
            var espS = $('#WF2').val();
            var espP = event.target.value;
            if(espP == espS)
            {
                toastr.warning('Please make sure to select different teams in the Winners section');
                $('#WF1').val($("#WF1 option:first").val());
            }
        });

        $('#WG2').change(function(event) {
            var espP = $('#WG1').val();
            var espS = event.target.value;
            if(espP == espS)
            {
                toastr.warning('Please make sure to select different teams in the Winners section');
                $('#WG2').val($("#WG2 option:first").val());
            }
        });

        $('#WG1').change(function(event) {
            var espS = $('#WG2').val();
            var espP = event.target.value;
            if(espP == espS)
            {
                toastr.warning('Please make sure to select different teams in the Winners section');
                $('#WG1').val($("#WG1 option:first").val());
            }
        });

        $('#WH2').change(function(event) {
            var espP = $('#WH1').val();
            var espS = event.target.value;
            if(espP == espS)
            {
                toastr.warning('Please make sure to select different teams in the Winners section');
                $('#WH2').val($("#WH2 option:first").val());
            }
        });

        $('#WH1').change(function(event) {
            var espS = $('#WH2').val();
            var espP = event.target.value;
            if(espP == espS)
            {
                toastr.warning('Please make sure to select different teams in the Winners section');
                $('#WH1').val($("#WH1 option:first").val());
            }
        });

        

    });


    
</script>

{{-- calculations --}}
<script src="{{URL::asset('scripts/tools.js')}}"></script>
<script src="{{URL::asset('scripts/calculate_A.js')}}"></script>
<script src="{{URL::asset('scripts/calculate_B.js')}}"></script>
<script src="{{URL::asset('scripts/calculate_C.js')}}"></script>
<script src="{{URL::asset('scripts/calculate_D.js')}}"></script>
<script src="{{URL::asset('scripts/calculate_E.js')}}"></script>
<script src="{{URL::asset('scripts/calculate_F.js')}}"></script>
<script src="{{URL::asset('scripts/calculate_G.js')}}"></script>
<script src="{{URL::asset('scripts/calculate_H.js')}}"></script>




<script>



    $(document).ready( function () {

        match_games();
        match_games_B();
        match_games_C();
        match_games_D();
        match_games_E();
        match_games_F();
        match_games_G();
        match_games_H();

        $(function(){
            //Set button disabled
            $('#submita').attr('disabled', 'disabled');

            //Append a change event listener to your input
            $('#submita').change(function(){

                    if(($('fa1').val().length > 0) && ($('fa2').val().length > 0) && ($('fa3').val().length > 0) && ($('fa4').val().length > 0)) {
                    $('#submita').removeAttr('disabled');  
                    }                            
            });

            // You could then trigger the a change event on load just to check
            $('#submita').trigger('change');
        });


    });

    
</script>



