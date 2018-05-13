
    $(document).ready(function(){
        
        match_games();
        match_games_B();
        match_games_C();
        match_games_D();
        match_games_E();
        match_games_F();
        match_games_G();
        match_games_H();

        var url = $("#imgroute").val();


        function RefreshTable() {

        $("#secondstage").load("{{route('picks.show', $poll->iduser_poll)}} #secondstage" , function(){

            // after postback a var = flags label needds to be reposted into options on first quarter

            var team1 = $


        $("#secondstage").on("change", "select.WRound1A2B, select.WRound1C2D", function(){

            var selectedTeamAvalue = $(".WRound1A2B option:selected").val();
            var selectedTeamAtext = $(".WRound1A2B option:selected").text();

            var selectedTeamBvalue = $(".WRound1C2D option:selected").val();
            var selectedTeamBtext = $(".WRound1C2D option:selected").text();

            $('select.Wquarter1_2').find('option:eq(0)').prop('selected', true);
            $('select.Wquarter1_2').find("option:gt(0)").remove();


            $(".iWquarter1_2").attr('src', '{{asset('img/flags/pick_a_team.png')}}');

            $(".iWRound1A2B").attr('src', url + '/' + selectedTeamAtext.replace(/ /g,"_").toLowerCase() + '.png');

            $(".iWRound1C2D").attr('src', url + '/' + selectedTeamBtext.replace(/ /g,"_").toLowerCase() + '.png');

            
            $('select.Wquarter1_2').append($('<option/>', { 
                    value: selectedTeamAvalue,
                    text : selectedTeamAtext 
                }));
            $('select.Wquarter1_2').append($('<option/>', { 
                    value: selectedTeamBvalue,
                    text : selectedTeamBtext 
                }));

        });



        $("#secondstage").on("change" , "select.WRound1E2F, select.WRound1G2H", function(){

            var selectedTeamCvalue = $(".WRound1E2F option:selected").val();
            var selectedTeamCtext = $(".WRound1E2F option:selected").text();

            var selectedTeamDvalue = $(".WRound1G2H option:selected").val();
            var selectedTeamDtext = $(".WRound1G2H option:selected").text();

            $('select.Wquarter3_4').find('option:eq(0)').prop('selected', true);
            $('select.Wquarter3_4').find("option:gt(0)").remove();

            $(".iWquarter3_4").attr('src', '{{asset('img/flags/pick_a_team.png')}}');

            $(".iWRound1E2F").attr('src', url + '/' + selectedTeamCtext.replace(/ /g,"_").toLowerCase() + '.png');

            $(".iWRound1G2H").attr('src', url + '/' + selectedTeamDtext.replace(/ /g,"_").toLowerCase() + '.png');
            

            $('select.Wquarter3_4').append($('<option/>', { 
                    value: selectedTeamCvalue,
                    text : selectedTeamCtext 
                }));
            $('select.Wquarter3_4').append($('<option/>', { 
                    value: selectedTeamDvalue,
                    text : selectedTeamDtext 
                }));

        });


        $("#secondstage").on("change", "select.WRound1B2A, select.WRound1D2C", function(){

            var selectedTeamEvalue = $(".WRound1B2A option:selected").val();
            var selectedTeamEtext = $(".WRound1B2A option:selected").text();

            var selectedTeamFvalue = $(".WRound1D2C option:selected").val();
            var selectedTeamFtext = $(".WRound1D2C option:selected").text();

            $(".iWquarter5_6").attr('src', '{{asset('img/flags/pick_a_team.png')}}');

            $('select.Wquarter5_6').find('option:eq(0)').prop('selected', true);
            $('select.Wquarter5_6').find("option:gt(0)").remove();

            $(".iWRound1B2A").attr('src', url + '/' + selectedTeamEtext.replace(/ /g,"_").toLowerCase() + '.png');

            $(".iWRound1D2C").attr('src', url + '/' + selectedTeamFtext.replace(/ /g,"_").toLowerCase() + '.png');
            

            $('select.Wquarter5_6').append($('<option/>', { 
                    value: selectedTeamEvalue,
                    text : selectedTeamEtext 
                }));
            $('select.Wquarter5_6').append($('<option/>', { 
                    value: selectedTeamFvalue,
                    text : selectedTeamFtext 
                }));

        });


        $("#secondstage").on("change", "select.WRound1F2E, select.WRound1H2G", function(){

            var selectedTeamGvalue = $(".WRound1F2E option:selected").val();
            var selectedTeamGtext = $(".WRound1F2E option:selected").text();

            var selectedTeamHvalue = $(".WRound1H2G option:selected").val();
            var selectedTeamHtext = $(".WRound1H2G option:selected").text();

            $(".iWquarter7_8").attr('src', '{{asset('img/flags/pick_a_team.png')}}');

            $('select.Wquarter7_8').find('option:eq(0)').prop('selected', true);
            $('select.Wquarter7_8').find("option:gt(0)").remove();

            
            $(".iWRound1F2E").attr('src', url + '/' + selectedTeamGtext.replace(/ /g,"_").toLowerCase() + '.png');

            $(".iWRound1H2G").attr('src', url + '/' + selectedTeamHtext.replace(/ /g,"_").toLowerCase() + '.png');
            

            $('select.Wquarter7_8').append($('<option/>', { 
                    value: selectedTeamGvalue,
                    text : selectedTeamGtext 
                }));
            $('select.Wquarter7_8').append($('<option/>', { 
                    value: selectedTeamHvalue,
                    text : selectedTeamHtext 
                }));

        });



        $("#secondstage").on("change", "select.Wquarter1_2, select.Wquarter3_4", function(){

            var selectedTeamIvalue = $(".Wquarter1_2 option:selected").val();
            var selectedTeamItext = $(".Wquarter1_2 option:selected").text();

            var selectedTeamJvalue = $(".Wquarter3_4 option:selected").val();
            var selectedTeamJtext = $(".Wquarter3_4 option:selected").text();

            $(".iWSemi1_2").attr('src', '{{asset('img/flags/pick_a_team.png')}}');

            $('select.WSemi1_2').find('option:eq(0)').prop('selected', true);
            $('select.WSemi1_2').find("option:gt(0)").remove();


            $(".iWquarter1_2").attr('src', url + '/' + selectedTeamItext.replace(/ /g,"_").toLowerCase() + '.png');

            $(".iWquarter3_4").attr('src', url + '/' + selectedTeamJtext.replace(/ /g,"_").toLowerCase() + '.png');
            

            $('select.WSemi1_2').append($('<option/>', { 
                    value: selectedTeamIvalue,
                    text : selectedTeamItext 
                }));
            $('select.WSemi1_2').append($('<option/>', { 
                    value: selectedTeamJvalue,
                    text : selectedTeamJtext 
                }));

        });


        $("#secondstage").on("change", "select.Wquarter5_6, select.Wquarter7_8", function(){

            var selectedTeamKvalue = $(".Wquarter5_6 option:selected").val();
            var selectedTeamKtext = $(".Wquarter5_6 option:selected").text();

            var selectedTeamLvalue = $(".Wquarter7_8 option:selected").val();
            var selectedTeamLtext = $(".Wquarter7_8 option:selected").text();

            $(".iWSemi3_4").attr('src', '{{asset('img/flags/pick_a_team.png')}}');

            $('select.WSemi3_4').find('option:eq(0)').prop('selected', true);
            $('select.WSemi3_4').find("option:gt(0)").remove();

            $(".iWquarter5_6").attr('src', url + '/' + selectedTeamKtext.replace(/ /g,"_").toLowerCase() + '.png');

            $(".iWquarter7_8").attr('src', url + '/' + selectedTeamLtext.replace(/ /g,"_").toLowerCase() + '.png');


            $('select.WSemi3_4').append($('<option/>', { 
                    value: selectedTeamKvalue,
                    text : selectedTeamKtext 
                }));
            $('select.WSemi3_4').append($('<option/>', { 
                    value: selectedTeamLvalue,
                    text : selectedTeamLtext 
                }));

        });

        $("#secondstage").on("change", "select.WSemi1_2, select.WSemi3_4", function(){

            var selectedTeamMvalue = $(".WSemi1_2 option:selected").val();
            var selectedTeamMtext = $(".WSemi1_2 option:selected").text();

            var selectedTeamNvalue = $(".WSemi3_4 option:selected").val();
            var selectedTeamNtext = $(".WSemi3_4 option:selected").text();

            $(".iWinner1").attr('src', '{{asset('img/flags/pick_a_team.png')}}');

            $('select.Winner1').find('option:eq(0)').prop('selected', true);
            $('select.Winner1').find("option:gt(0)").remove();

            $(".iWSemi1_2").attr('src', url + '/' + selectedTeamMtext.replace(/ /g,"_").toLowerCase() + '.png');

            $(".iWSemi3_4").attr('src', url + '/' + selectedTeamNtext.replace(/ /g,"_").toLowerCase() + '.png');
            

            $('select.Winner1').append($('<option/>', { 
                    value: selectedTeamMvalue,
                    text : selectedTeamMtext 
                }));
            $('select.Winner1').append($('<option/>', { 
                    value: selectedTeamNvalue,
                    text : selectedTeamNtext 
                }));

        });

        $("#secondstage").on("change", "select.Winner1", function(){

            // var selectedSemi5Value = $(".Winner1 option:selected").val();
            var selectedWinner = $(".Winner1 option:selected").text();

            $(".iWinner1").attr('src', url + '/' + selectedWinner.replace(/ /g,"_").toLowerCase() + '.png');
            
            
        });


        $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
         });


            // finish reset

            // reset trigger 
   
            // submit second stage copy

            $('#submitSecondStage').click(function(){

            $.ajax({  
                url:postSECONDSTAGE,  
                method:"POST",  
                data:$('#secondstage').serialize(),
                type:'json',
                success:function(data){
                    if(data.error){
                        toastr.warning(data.error);
                    }else{
                        // toastr.success('Saved');
                        // location.reload();
                        // $('#idgrupoh').removeClass( "active show" );
                        // $('#idgrupoRoun').addClass( "active show" );
                        // $('#grupoh').removeClass( "active show" );
                        // $('#grupoRoun').addClass( "active show" );
                        toastr.success('Saved');
                        window.location='{{ route("home") }}';
                    }
                } 
            }); // Ajax finishes here 

        }); // finish second stage copy

    }); //Load finish here

} //Refresh table finish


        // RESET

        function reset(){

            

            // select quarters 

            // 1
            $("#WRound1A2B").find('option:eq(0)').prop('selected', true);
            $(".iWRound1A2B").attr('src', "{{asset('img/flags/cup2.png')}}");
            // 2
            $("#WRound1C2D").find('option:eq(0)').prop('selected', true);
            $(".iWRound1C2D").attr('src', "{{asset('img/flags/cup2.png')}}");
            // 3
            $("#WRound1E2F").find('option:eq(0)').prop('selected', true);
            $(".iWRound1E2F").attr('src', "{{asset('img/flags/cup2.png')}}");
            // 4
            $("#WRound1G2H").find('option:eq(0)').prop('selected', true);
            $(".iWRound1G2H").attr('src', "{{asset('img/flags/cup2.png')}}");
            // 5
            $("#WRound1B2A").find('option:eq(0)').prop('selected', true);
            $(".iWRound1B2A").attr('src', "{{asset('img/flags/cup2.png')}}");
            // 6
            $("#WRound1D2C").find('option:eq(0)').prop('selected', true);
            $(".iWRound1D2C").attr('src', "{{asset('img/flags/cup2.png')}}");
            // 7
            $("#WRound1F2E").find('option:eq(0)').prop('selected', true);
            $(".iWRound1F2E").attr('src', "{{asset('img/flags/cup2.png')}}");
            // 8
            $("#WRound1H2G").find('option:eq(0)').prop('selected', true);
            $(".iWRound1H2G").attr('src', "{{asset('img/flags/cup2.png')}}");


            // Semi-finals
            // 1
            $('select.Wquarter1_2').find('option').not(':first').remove();
            $(".iWquarter1_2").attr('src', "{{asset('img/flags/cup2.png')}}");
            // 2
            $('select.Wquarter3_4').find('option').not(':first').remove();
            $(".iWquarter3_4").attr('src', "{{asset('img/flags/cup2.png')}}");
            // 3
            $('select.Wquarter5_6').find('option').not(':first').remove();
            $(".iWquarter5_6").attr('src', "{{asset('img/flags/cup2.png')}}");
            // 4
            $('select.Wquarter7_8').find('option').not(':first').remove();
            $(".iWquarter7_8").attr('src', "{{asset('img/flags/cup2.png')}}");

            // Final
            // 1
            $('select.WSemi1_2').find('option').not(':first').remove();
            $(".iWSemi1_2").attr('src', "{{asset('img/flags/cup2.png')}}");
            // 2
            $('select.WSemi3_4').find('option').not(':first').remove();
            $(".iWSemi3_4").attr('src', "{{asset('img/flags/cup2.png')}}");

            // Champion
            // 1
            $('select.Winner1').find('option').not(':first').remove();
            $(".iWinner1").attr('src', "{{asset('img/flags/cup2.png')}}");

        }  // Finish reset

        $('#reset').click(function(){
            reset();
        });

        // mahere

        $("#secondstage").on("change", "select.WRound1A2B, select.WRound1C2D", function(){

            var selectedTeamAvalue = $(".WRound1A2B option:selected").val();
            var selectedTeamAtext = $(".WRound1A2B option:selected").text();

            var selectedTeamBvalue = $(".WRound1C2D option:selected").val();
            var selectedTeamBtext = $(".WRound1C2D option:selected").text();

            $('select.Wquarter1_2').find('option:eq(0)').prop('selected', true);
            $('select.Wquarter1_2').find("option:gt(0)").remove();


            $(".iWquarter1_2").attr('src', '{{asset('img/flags/pick_a_team.png')}}');

            $(".iWRound1A2B").attr('src', url + '/' + selectedTeamAtext.replace(/ /g,"_").toLowerCase() + '.png');

            $(".iWRound1C2D").attr('src', url + '/' + selectedTeamBtext.replace(/ /g,"_").toLowerCase() + '.png');

            
            $('select.Wquarter1_2').append($('<option/>', { 
                    value: selectedTeamAvalue,
                    text : selectedTeamAtext 
                }));
            $('select.Wquarter1_2').append($('<option/>', { 
                    value: selectedTeamBvalue,
                    text : selectedTeamBtext 
                }));

        });



        $("#secondstage").on("change", "select.WRound1E2F, select.WRound1G2H", function(){

            var selectedTeamCvalue = $(".WRound1E2F option:selected").val();
            var selectedTeamCtext = $(".WRound1E2F option:selected").text();

            var selectedTeamDvalue = $(".WRound1G2H option:selected").val();
            var selectedTeamDtext = $(".WRound1G2H option:selected").text();

            $('select.Wquarter3_4').find('option:eq(0)').prop('selected', true);
            $('select.Wquarter3_4').find("option:gt(0)").remove();

            $(".iWquarter3_4").attr('src', '{{asset('img/flags/pick_a_team.png')}}');

            $(".iWRound1E2F").attr('src', url + '/' + selectedTeamCtext.replace(/ /g,"_").toLowerCase() + '.png');

            $(".iWRound1G2H").attr('src', url + '/' + selectedTeamDtext.replace(/ /g,"_").toLowerCase() + '.png');
            

            $('select.Wquarter3_4').append($('<option/>', { 
                    value: selectedTeamCvalue,
                    text : selectedTeamCtext 
                }));
            $('select.Wquarter3_4').append($('<option/>', { 
                    value: selectedTeamDvalue,
                    text : selectedTeamDtext 
                }));

        });


        $("#secondstage").on("change", "select.WRound1B2A, select.WRound1D2C", function(){

            var selectedTeamEvalue = $(".WRound1B2A option:selected").val();
            var selectedTeamEtext = $(".WRound1B2A option:selected").text();

            var selectedTeamFvalue = $(".WRound1D2C option:selected").val();
            var selectedTeamFtext = $(".WRound1D2C option:selected").text();

            $(".iWquarter5_6").attr('src', '{{asset('img/flags/pick_a_team.png')}}');

            $('select.Wquarter5_6').find('option:eq(0)').prop('selected', true);
            $('select.Wquarter5_6').find("option:gt(0)").remove();

            $(".iWRound1B2A").attr('src', url + '/' + selectedTeamEtext.replace(/ /g,"_").toLowerCase() + '.png');

            $(".iWRound1D2C").attr('src', url + '/' + selectedTeamFtext.replace(/ /g,"_").toLowerCase() + '.png');
            

            $('select.Wquarter5_6').append($('<option/>', { 
                    value: selectedTeamEvalue,
                    text : selectedTeamEtext 
                }));
            $('select.Wquarter5_6').append($('<option/>', { 
                    value: selectedTeamFvalue,
                    text : selectedTeamFtext 
                }));

        });


        $(" #secondstage").on("change","select.WRound1F2E, select.WRound1H2G", function(){

            var selectedTeamGvalue = $(".WRound1F2E option:selected").val();
            var selectedTeamGtext = $(".WRound1F2E option:selected").text();

            var selectedTeamHvalue = $(".WRound1H2G option:selected").val();
            var selectedTeamHtext = $(".WRound1H2G option:selected").text();

            $(".iWquarter7_8").attr('src', '{{asset('img/flags/pick_a_team.png')}}');

            $('select.Wquarter7_8').find('option:eq(0)').prop('selected', true);
            $('select.Wquarter7_8').find("option:gt(0)").remove();

            
            $(".iWRound1F2E").attr('src', url + '/' + selectedTeamGtext.replace(/ /g,"_").toLowerCase() + '.png');

            $(".iWRound1H2G").attr('src', url + '/' + selectedTeamHtext.replace(/ /g,"_").toLowerCase() + '.png');
            

            $('select.Wquarter7_8').append($('<option/>', { 
                    value: selectedTeamGvalue,
                    text : selectedTeamGtext 
                }));
            $('select.Wquarter7_8').append($('<option/>', { 
                    value: selectedTeamHvalue,
                    text : selectedTeamHtext 
                }));

        });



        $("#secondstage").on("change", "select.Wquarter1_2, select.Wquarter3_4", function(){

            var selectedTeamIvalue = $(".Wquarter1_2 option:selected").val();
            var selectedTeamItext = $(".Wquarter1_2 option:selected").text();

            var selectedTeamJvalue = $(".Wquarter3_4 option:selected").val();
            var selectedTeamJtext = $(".Wquarter3_4 option:selected").text();

            $(".iWSemi1_2").attr('src', '{{asset('img/flags/pick_a_team.png')}}');

            $('select.WSemi1_2').find('option:eq(0)').prop('selected', true);
            $('select.WSemi1_2').find("option:gt(0)").remove();


            $(".iWquarter1_2").attr('src', url + '/' + selectedTeamItext.replace(/ /g,"_").toLowerCase() + '.png');

            $(".iWquarter3_4").attr('src', url + '/' + selectedTeamJtext.replace(/ /g,"_").toLowerCase() + '.png');
            

            $('select.WSemi1_2').append($('<option/>', { 
                    value: selectedTeamIvalue,
                    text : selectedTeamItext 
                }));
            $('select.WSemi1_2').append($('<option/>', { 
                    value: selectedTeamJvalue,
                    text : selectedTeamJtext 
                }));

        });


        $("#secondstage").on("change", "select.Wquarter5_6, select.Wquarter7_8", function(){

            var selectedTeamKvalue = $(".Wquarter5_6 option:selected").val();
            var selectedTeamKtext = $(".Wquarter5_6 option:selected").text();

            var selectedTeamLvalue = $(".Wquarter7_8 option:selected").val();
            var selectedTeamLtext = $(".Wquarter7_8 option:selected").text();

            $(".iWSemi3_4").attr('src', '{{asset('img/flags/pick_a_team.png')}}');

            $('select.WSemi3_4').find('option:eq(0)').prop('selected', true);
            $('select.WSemi3_4').find("option:gt(0)").remove();

            $(".iWquarter5_6").attr('src', url + '/' + selectedTeamKtext.replace(/ /g,"_").toLowerCase() + '.png');

            $(".iWquarter7_8").attr('src', url + '/' + selectedTeamLtext.replace(/ /g,"_").toLowerCase() + '.png');


            $('select.WSemi3_4').append($('<option/>', { 
                    value: selectedTeamKvalue,
                    text : selectedTeamKtext 
                }));
            $('select.WSemi3_4').append($('<option/>', { 
                    value: selectedTeamLvalue,
                    text : selectedTeamLtext 
                }));

        });

        $("#secondstage").on("change", "select.WSemi1_2, select.WSemi3_4", function(){

            var selectedTeamMvalue = $(".WSemi1_2 option:selected").val();
            var selectedTeamMtext = $(".WSemi1_2 option:selected").text();

            var selectedTeamNvalue = $(".WSemi3_4 option:selected").val();
            var selectedTeamNtext = $(".WSemi3_4 option:selected").text();

            $(".iWinner1").attr('src', '{{asset('img/flags/pick_a_team.png')}}');

            $('select.Winner1').find('option:eq(0)').prop('selected', true);
            $('select.Winner1').find("option:gt(0)").remove();

            $(".iWSemi1_2").attr('src', url + '/' + selectedTeamMtext.replace(/ /g,"_").toLowerCase() + '.png');

            $(".iWSemi3_4").attr('src', url + '/' + selectedTeamNtext.replace(/ /g,"_").toLowerCase() + '.png');
            

            $('select.Winner1').append($('<option/>', { 
                    value: selectedTeamMvalue,
                    text : selectedTeamMtext 
                }));
            $('select.Winner1').append($('<option/>', { 
                    value: selectedTeamNvalue,
                    text : selectedTeamNtext 
                }));

        });

        $("#secondstage").on("change", "select.Winner1", function(){

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
                        toastr.warning(data.error);
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
                        toastr.warning(data.error);
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
                        toastr.warning(data.error);
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
                        toastr.warning(data.error);
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
                        toastr.warning(data.error);
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
                        toastr.warning(data.error);
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
                        toastr.warning(data.error);
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
                        toastr.warning(data.error);
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
                        toastr.warning(data.error);
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
                        toastr.warning(data.error);
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
                        toastr.warning(data.error);
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
                        toastr.warning(data.error);
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
                        toastr.warning(data.error);
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
                        toastr.warning(data.error);
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
                        toastr.warning(data.error);
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
                        toastr.warning(data.error);
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
                        toastr.warning(data.error);
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

