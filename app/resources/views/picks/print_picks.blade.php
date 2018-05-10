@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 title_polla">
                <img src="{{ asset('img/logo.png') }}" style="height: 80px;">
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-12">

                <div class="card">

                    <div class="card-header-print">
                        <div class="row">
                            <div class="col-md-6">
                                <h5>{{ __('Printable Verision of my Picks') }} </h5>
                            </div>
                           <div class="col-md-6" style="text-align: right;">
                                <h5>{{ __('Nickname: ').$poll->poll_name }} </h5>
                            </div>
                        </div>
                    </div>

                    
                    <div class="card-body-print">
                    	<div class="row">
	                    	<div class="col-md-6">
	                    		{{-- GRUPO A --}}
		                        <div class="card">
		                            <div class="card-header-print">
		                                <div class="row">
		                                    <div class="col-md-4">
		                                        <h6>{{ __('Group A') }} </h6>
		                                    </div>
		                                </div>
		                            </div>
		                        
		                            <div class="card-body-print">
		                                <div class="row">
		                                    <div class="col-md-12 table-responsive">
		                                    	<table id="myTable" class="display table_picks-print">
                                                    <thead>
                                                        <tr>
                                                            <th class="th-date">Date</th>
                                                            <th>1st Team</th>
                                                            <th>2st Team</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="A1-A2">
                                                            <td class="td-date">
                                                                <div class="col-md-12">
                                                                     6/14/2018
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="col-md-8 team_left">
                                                                        <label class="label_team_print">Russia</label>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="pikcs-print">
                                                                            <input type="text" readonly name="M1A1" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M1A1" onblur="match_games()" value="{{ old('M1A1',  isset($ga->M1A1) ? $ga->M1A1 : null) }}">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <div class="pikcs-print">
                                                                            <input type="text" readonly name="M1A2" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M1A2" onblur="match_games()" value="{{ old('M1A2',  isset($ga->M1A2) ? $ga->M1A2 : null) }}">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-8 team_right">
                                                                        <label class="label_team_print">Saudi Arabia</label>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr class="A3-A4">
                                                            <td class="td-date">
                                                                <div class="col-md-12">
                                                                    6/15/2018
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="col-md-8 team_left">
                                                                        <label class="label_team_print">Egypt</label>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="pikcs-print">
                                                                            <input type="text" readonly name="M2A3" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M2A3" onblur="match_games()" value="{{ old('M2A3',  isset($ga->M2A3) ? $ga->M2A3 : null) }}">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <div class="pikcs-print">
                                                                            <input type="text" readonly name="M2A4" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M2A4" onblur="match_games()" value="{{ old('M1A2',  isset($ga->M1A2) ? $ga->M1A2 : null) }}">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-8 team_right">
                                                                        <label class="label_team_print">Uruguay</label>
                                                                    </div>
                                                                    
                                                                    
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr class="A1-A3">
                                                            </td>
                                                            <td class="td-date">
                                                                <div class="col-md-12">
                                                                    6/19/2018
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="col-md-8 team_left">
                                                                        <label class="label_team_print">Russia</label>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="pikcs-print">
                                                                            <input type="text" readonly name="M3A1" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M3A1" onblur="match_games()" value="{{ old('M3A1',  isset($ga->M3A1) ? $ga->M3A1 : null) }}">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <div class="pikcs-print">
                                                                            <input type="text" readonly name="M3A3" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M3A3" onblur="match_games()" value="{{ old('M3A3',  isset($ga->M3A3) ? $ga->M3A3 : null) }}">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-8 team_right">
                                                                        <label class="label_team_print">Egypt</label>
                                                                    </div>
                                                                    
                                                                    
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr class="A4-A2">
                                                            <td class="td-date">
                                                                <div class="col-md-12">
                                                                    6/20/2018
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="col-md-8 team_left">
                                                                        <label class="label_team_print">Uruguay</label>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="pikcs-print">
                                                                            <input type="text" readonly name="M4A4" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M4A4" onblur="match_games()" value="{{ old('M4A4',  isset($ga->M4A4) ? $ga->M4A4 : null) }}">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <div class="pikcs-print">
                                                                            <input type="text" readonly name="M4A2" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M4A2" onblur="match_games()" value="{{ old('M4A2',  isset($ga->M4A2) ? $ga->M4A2 : null) }}">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-8 team_right">
                                                                        <label class="label_team_print">Saudi Arabia</label>
                                                                    </div>
                                                                    
                                                                    
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr class="A4-A1">
                                                            <td class="td-date"> 
                                                                <div class="col-md-12">
                                                                    6/25/2018
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="col-md-8 team_left">
                                                                        <label class="label_team_print">Uruguay</label>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="pikcs-print">
                                                                            <input type="text" readonly name="M5A4" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M5A4" onblur="match_games()" value="{{ old('M5A4',  isset($ga->M5A4) ? $ga->M5A4 : null) }}">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            {{-- <td>
                                                                <div class="col-md-2">
                                                                    V
                                                                </div>
                                                            </td> --}}
                                                            <td>
                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <div class="pikcs-print">
                                                                            <input type="text" readonly name="M5A1" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M5A1" onblur="match_games()" value="{{ old('M5A1',  isset($ga->M5A1) ? $ga->M5A1 : null) }}">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-8 team_right">
                                                                        <label class="label_team_print">Russia</label>
                                                                    </div>
                                                                    
                                                                    
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr class="A2-A3">
                                                            <td class="td-date">
                                                                <div class="col-md-12">
                                                                    6/25/2018
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="col-md-8 team_left">
                                                                        <label class="label_team_print">Saudi Arabia</label>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="pikcs-print">
                                                                            <input type="text" readonly name="M6A2" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M6A2" onblur="match_games()" value="{{ old('M6A2',  isset($ga->M6A2) ? $ga->M6A2 : null) }}">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <div class="pikcs-print">
                                                                            <input type="text" readonly name="M6A3" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M6A3" onblur="match_games()" value="{{ old('M6A3',  isset($ga->M6A3) ? $ga->M6A3 : null) }}">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-8 team_right">
                                                                        <label class="label_team_print">Egypt</label>
                                                                    </div>
                                                                    
                                                                    
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        
                                                        
                                                    </tbody>
                                            </table> 
		                                    </div>
		                                </div>
		                            </div>
		                        </div>
	                        </div>

	                        <div class="col-md-6">
	                        	{{-- GRUPO B --}}
			                    <div class="card">
			                        <div class="card-header-print">
			                            <div class="row">
			                                <div class="col-md-4">
			                                    <h6>{{ __('Group B') }} </h6>
			                                </div>
			                            </div>
			                        </div>

			                        <div class="card-body-print">
			                            <div class="row">
			                                <div class="col-md-12 table-responsive">
			                                    
			                                        <table id="myTable" class="display table_picks-print" style="width: 100%;">
			                                                <thead>
			                                                    <tr>
			                                                        <th class="th-date">Date</th>
			                                                        <th>1st Team</th>
			                                                        <th>2st Team</th>
			                                                    </tr>
			                                                </thead>
			                                                <tbody>
			                                                    <tr class="A1-A2">
			                                                        <td class="td-date">
			                                                            <div class="col-md-12">
			                                                                 6/15/2018
			                                                            </div>
			                                                        </td>
			                                                        <td>
			                                                            <div class="row">
			                                                                <div class="col-md-8 team_left">
			                                                                    <label class="label_team_print">Portugal</label>
			                                                                </div>
			                                                                <div class="col-md-4">
			                                                                    <div class="pikcs-print">
			                                                                        <input type="text" readonly name="M1B1" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M1B1" onblur="match_games_B()" value="{{ old('M1B1',  isset($gb->M1B1) ? $gb->M1B1 : null) }}">
			                                                                    </div>
			                                                                </div>
			                                                            </div>
			                                                        </td>
			                                                       {{--  <td>
			                                                            V
			                                                        </td> --}}
			                                                        <td>
			                                                            <div class="row">
			                                                                <div class="col-md-4">
			                                                                    <div class="pikcs-print">
			                                                                        <input type="text" readonly name="M1B2" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M1B2" onblur="match_games_B()" value="{{ old('M1B2',  isset($gb->M1B2) ? $gb->M1B2 : null) }}">
			                                                                    </div>
			                                                                </div>
			                                                                <div class="col-md-8 team_right">
			                                                                    <label class="label_team_print">Spain</label>
			                                                                </div>
			                                                            </div>
			                                                        </td>
			                                                    </tr>

			                                                    <tr class="A3-A4">
			                                                        <td class="td-date">
			                                                            <div class="col-md-12">
			                                                                6/15/2018
			                                                            </div>
			                                                        </td>
			                                                        <td>
			                                                            <div class="row">
			                                                                <div class="col-md-8 team_left">
			                                                                    <label class="label_team_print">Morocco</label>
			                                                                </div>
			                                                                <div class="col-md-4">
			                                                                    <div class="pikcs-print">
			                                                                        <input type="text" readonly name="M2B3" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M2B3" onblur="match_games_B()" value="{{ old('M2B3',  isset($gb->M2B3) ? $gb->M2B3 : null) }}">
			                                                                    </div>
			                                                                </div>
			                                                            </div>
			                                                        </td>

			                                                        <td>
			                                                            <div class="row">
			                                                                <div class="col-md-4">
			                                                                    <div class="pikcs-print">
			                                                                        <input type="text" readonly name="M2B4" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M2B4" onblur="match_games_B()" value="{{ old('M2B4',  isset($gb->M2B4) ? $gb->M2B4 : null) }}">
			                                                                    </div>
			                                                                </div>
			                                                                <div class="col-md-8 team_right">
			                                                                    <label class="label_team_print">Iran</label>
			                                                                </div>
			                                                                
			                                                                
			                                                            </div>
			                                                        </td>
			                                                    </tr>

			                                                    <tr class="A1-A3">
			                                                        </td>
			                                                        <td class="td-date">
			                                                            <div class="col-md-12">
			                                                                6/20/2018
			                                                            </div>
			                                                        </td>
			                                                        <td>
			                                                            <div class="row">
			                                                                <div class="col-md-8 team_left">
			                                                                    <label class="label_team_print">Portugal</label>
			                                                                </div>
			                                                                <div class="col-md-4">
			                                                                    <div class="pikcs-print">
			                                                                        <input type="text" readonly name="M3B1" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M3B1" onblur="match_games_B()" value="{{ old('M3B1',  isset($gb->M3B1) ? $gb->M3B1 : null) }}">
			                                                                    </div>
			                                                                </div>
			                                                            </div>
			                                                        </td>
			                                                        {{-- <td>
			                                                            <div class="col-md-2">
			                                                                V
			                                                            </div>
			                                                        </td> --}}
			                                                        <td>
			                                                            <div class="row">
			                                                                <div class="col-md-4">
			                                                                    <div class="pikcs-print">
			                                                                        <input type="text" readonly name="M3B3" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M3B3" onblur="match_games_B()" value="{{ old('M3B3',  isset($gb->M3B3) ? $gb->M3B3 : null) }}">
			                                                                    </div>
			                                                                </div>
			                                                                <div class="col-md-8 team_right">
			                                                                    <label class="label_team_print">Morocco</label>
			                                                                </div>
			                                                                
			                                                                
			                                                            </div>
			                                                        </td>
			                                                    </tr>

			                                                    <tr class="A4-A2">
			                                                        <td class="td-date">
			                                                            <div class="col-md-12">
			                                                                6/20/2018
			                                                            </div>
			                                                        </td>
			                                                        <td>
			                                                            <div class="row">
			                                                                <div class="col-md-8 team_left">
			                                                                    <label class="label_team_print">Iran</label>
			                                                                </div>
			                                                                <div class="col-md-4">
			                                                                    <div class="pikcs-print">
			                                                                        <input type="text" readonly name="M4B4" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M4B4" onblur="match_games_B()" value="{{ old('M4B4',  isset($gb->M4B4) ? $gb->M4B4 : null) }}">
			                                                                    </div>
			                                                                </div>
			                                                            </div>
			                                                        </td>
			                                                        <td>
			                                                            <div class="row">
			                                                                <div class="col-md-4">
			                                                                    <div class="pikcs-print">
			                                                                        <input type="text" readonly name="M4B2" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M4B2" onblur="match_games_B()" value="{{ old('M4B2',  isset($gb->M4B2) ? $gb->M4B2 : null) }}">
			                                                                    </div>
			                                                                </div>
			                                                                <div class="col-md-8 team_right">
			                                                                    <label class="label_team_print">Spain</label>
			                                                                </div>
			                                                                
			                                                                
			                                                            </div>
			                                                        </td>
			                                                    </tr>

			                                                    <tr class="A4-A1">
			                                                        <td class="td-date"> 
			                                                            <div class="col-md-12">
			                                                                6/25/2018
			                                                            </div>
			                                                        </td>
			                                                        <td>
			                                                            <div class="row">
			                                                                <div class="col-md-8 team_left">
			                                                                    <label class="label_team_print">Iran</label>
			                                                                </div>
			                                                                <div class="col-md-4">
			                                                                    <div class="pikcs-print">
			                                                                        <input type="text" readonly name="M5B4" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M5B4" onblur="match_games_B()" value="{{ old('M5B4',  isset($gb->M5B4) ? $gb->M5B4 : null) }}">
			                                                                    </div>
			                                                                </div>
			                                                            </div>
			                                                        </td>
			                                                        <td>
			                                                            <div class="row">
			                                                                <div class="col-md-4">
			                                                                    <div class="pikcs-print">
			                                                                        <input type="text" readonly name="M5B1" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M5B1" onblur="match_games_B()" value="{{ old('M5B1',  isset($gb->M5B1) ? $gb->M5B1 : null) }}">
			                                                                    </div>
			                                                                </div>
			                                                                <div class="col-md-8 team_right">
			                                                                    <label class="label_team_print">Portugal</label>
			                                                                </div>
			                                                                
			                                                                
			                                                            </div>
			                                                        </td>
			                                                    </tr>

			                                                    <tr class="A2-A3">
			                                                        <td class="td-date">
			                                                            <div class="col-md-12">
			                                                                6/25/2018
			                                                            </div>
			                                                        </td>
			                                                        <td>
			                                                            <div class="row">
			                                                                <div class="col-md-8 team_left">
			                                                                    <label class="label_team_print">Spain</label>
			                                                                </div>
			                                                                <div class="col-md-4">
			                                                                    <div class="pikcs-print">
			                                                                        <input type="text" readonly name="M6B2" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M6B2" onblur="match_games_B()" value="{{ old('M6B2',  isset($gb->M6B2) ? $gb->M6B2 : null) }}">
			                                                                    </div>
			                                                                </div>
			                                                            </div>
			                                                        </td>
			                                                        <td>
			                                                            <div class="row">
			                                                                <div class="col-md-4">
			                                                                    <div class="pikcs-print">
			                                                                        <input type="text" readonly name="M6B3" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M6B3" onblur="match_games_B()" value="{{ old('M6B3',  isset($gb->M6B3) ? $gb->M6B3 : null) }}"> 
			                                                                    </div>
			                                                                </div>
			                                                                <div class="col-md-8 team_right">
			                                                                    <label class="label_team_print">Morocco</label>
			                                                                </div>
			                                                            </div>
			                                                        </td>
			                                                    </tr>
			                                                </tbody>
			                                        </table> 

			                                </div>
			                            </div>
			                        </div>
			                    </div>
	                        </div>
                        </div>

                        <div class="row">
                        	<div class="col-md-6">
                        		{{-- GRUPO C --}}
		                        <div class="card">
		                            <div class="card-header-print">
		                                <div class="row">
		                                    <div class="col-md-4">
		                                        <h6>{{ __('Group C') }} </h6>
		                                    </div>
		                                </div>
		                            </div>
		                        
		                            <div class="card-body-print">
		                                <div class="row">
		                                    <div class="col-md-12 table-responsive">
		                                    	<table id="myTable" class="display table_picks-print">
                                                    <thead>
                                                        <tr>
                                                            <th class="th-date">Date</th>
                                                            <th>1st Team</th>
                                                            <th>2st Team</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="A1-A2">
                                                            <td class="td-date">
                                                                <div class="col-md-12">
                                                                     6/16/2018
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="col-md-8 team_left">
                                                                        <label class="label_team_print">France</label>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="pikcs-print">
                                                                            <input type="text" readonly name="M1C1" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M1C1" onblur="match_games_C()" value="{{ old('M1C1',  isset($gc->M1C1) ? $gc->M1C1 : null) }}">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                           {{--  <td>
                                                                V
                                                            </td> --}}
                                                            <td>
                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <div class="pikcs-print">
                                                                            <input type="text" readonly name="M1C2" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M1C2" onblur="match_games_C()" value="{{ old('M1C2',  isset($gc->M1C2) ? $gc->M1C2 : null) }}">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-8 team_right">
                                                                        <label class="label_team_print">Australia</label>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr class="A3-A4">
                                                            <td class="td-date">
                                                                <div class="col-md-12">
                                                                    6/16/2018
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="col-md-8 team_left">
                                                                        <label class="label_team_print">Peru</label>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="pikcs-print">
                                                                            <input type="text" readonly name="M2C3" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M2C3" onblur="match_games_C()" value="{{ old('M2C3',  isset($gc->M2C3) ? $gc->M2C3 : null) }}">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            {{-- <td>
                                                                <div class="col-md-2">
                                                                    V
                                                                </div>
                                                            </td> --}}
                                                            <td>
                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <div class="pikcs-print">
                                                                            <input type="text" readonly name="M2C4" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M2C4" onblur="match_games_C()" value="{{ old('M2C4',  isset($gc->M2C4) ? $gc->M2C4 : null) }}">
                                                                        </div>
                                                                    </div>
                                                                     <div class="col-md-8 team_right">
                                                                        <label class="label_team_print">Denmark</label>
                                                                    </div>
                                                                    
                                                                    
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr class="A1-A3">
                                                            </td>
                                                            <td class="td-date">
                                                                <div class="col-md-12">
                                                                    6/21/2018
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="col-md-8 team_left">
                                                                        <label class="label_team_print">France</label>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="pikcs-print">
                                                                            <input type="text" readonly name="M3C1" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M3C1" onblur="match_games_C()" value="{{ old('M3C1',  isset($gc->M3C1) ? $gc->M3C1 : null) }}">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            {{-- <td>
                                                                <div class="col-md-2">
                                                                    V
                                                                </div>
                                                            </td> --}}
                                                            <td>
                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <div class="pikcs-print">
                                                                            <input type="text" readonly name="M3C3" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M3C3" onblur="match_games_C()" value="{{ old('M3C3',  isset($gc->M3C3) ? $gc->M3C3 : null) }}">
                                                                        </div>
                                                                    </div>
                                                                     <div class="col-md-8 team_right">
                                                                        <label class="label_team_print">Peru</label>
                                                                    </div>
                                                                    
                                                                    
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr class="A4-A2">
                                                            <td class="td-date">
                                                                <div class="col-md-12">
                                                                    6/21/2018
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="col-md-8 team_left">
                                                                        <label class="label_team_print">Denmark</label>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="pikcs-print">
                                                                            <input type="text" readonly name="M4C4" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M4C4" onblur="match_games_C()" value="{{ old('M4C4',  isset($gc->M4C4) ? $gc->M4C4 : null) }}">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            {{-- <td>
                                                                <div class="col-md-2">
                                                                    V
                                                                </div>
                                                            </td> --}}
                                                            <td>
                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <div class="pikcs-print">
                                                                            <input type="text" readonly name="M4C2" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M4C2" onblur="match_games_C()" value="{{ old('M4C2',  isset($gc->M4C2) ? $gc->M4C2 : null) }}">
                                                                        </div>
                                                                    </div>
                                                                     <div class="col-md-8 team_right">
                                                                        <label class="label_team_print">Australia</label>
                                                                    </div>
                                                                    
                                                                    
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr class="A4-A1">
                                                            <td class="td-date"> 
                                                                <div class="col-md-12">
                                                                    6/26/2018
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="col-md-8 team_left">
                                                                        <label class="label_team_print">Denmark</label>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="pikcs-print">
                                                                            <input type="text" readonly name="M5C4" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M5C4" onblur="match_games_C()" value="{{ old('M5C4',  isset($gc->M5C4) ? $gc->M5C4 : null) }}">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            {{-- <td>
                                                                <div class="col-md-2">
                                                                    V
                                                                </div>
                                                            </td> --}}
                                                            <td>
                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <div class="pikcs-print">
                                                                            <input type="text" readonly name="M5C1" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M5C1" onblur="match_games_C()" value="{{ old('M5C1',  isset($gc->M5C1) ? $gc->M5C1 : null) }}">
                                                                        </div>
                                                                    </div>
                                                                     <div class="col-md-8 team_right">
                                                                        <label class="label_team_print">France</label>
                                                                    </div>
                                                                    
                                                                    
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr class="A2-A3">
                                                            <td class="td-date">
                                                                <div class="col-md-12">
                                                                    6/26/2018
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="col-md-8 team_left">
                                                                        <label class="label_team_print">Australia</label>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="pikcs-print">
                                                                            <input type="text" readonly name="M6C2" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M6C2" onblur="match_games_C()" value="{{ old('M6C2',  isset($gc->M6C2) ? $gc->M6C2 : null) }}">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            {{-- <td>
                                                                <div class="col-md-2">
                                                                    V
                                                                </div>
                                                            </td> --}}
                                                            <td>
                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <div class="pikcs-print">
                                                                            <input type="text" readonly name="M6C3" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M6C3" onblur="match_games_C()" value="{{ old('M6C3',  isset($gc->M6C3) ? $gc->M6C3 : null) }}">
                                                                        </div>
                                                                    </div>
                                                                     <div class="col-md-8 team_right">
                                                                        <label class="label_team_print">Peru</label>
                                                                    </div>
                                                                    
                                                                    
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        
                                                        
                                                    </tbody>
                                            </table> 
		                                    </div>
		                                </div>
		                            </div>
		                        </div>
                        	</div>
                        	<div class="col-md-6">
                        		{{-- GRUPO D --}}
		                        <div class="card">
		                            <div class="card-header-print">
		                                <div class="row">
		                                    <div class="col-md-4">
		                                        <h6>{{ __('Group D') }} </h6>
		                                    </div>
		                                </div>
		                            </div>
		                        
		                            <div class="card-body-print">
		                                <div class="row">
		                                    <div class="col-md-12 table-responsive">
		                                    	<table id="myTable" class="display table_picks-print">
                                                    <thead>
                                                        <tr>
                                                            <th class="th-date">Date</th>
                                                            <th>1st Team</th>
                                                            <th>2st Team</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="A1-A2">
                                                            <td class="td-date">
                                                                <div class="col-md-12">
                                                                     6/16/2018
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="col-md-8 team_left">
                                                                        <label class="label_team_print">Argentina</label>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="pikcs-print">
                                                                            <input type="text" readonly name="M1D1" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M1D1" onblur="match_games_D()" value="{{ old('M1D1',  isset($gd->M1D1) ? $gd->M1D1 : null) }}">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                           {{--  <td>
                                                                V
                                                            </td> --}}
                                                            <td>
                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <div class="pikcs-print">
                                                                            <input type="text" readonly name="M1D2" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M1D2" onblur="match_games_D()" value="{{ old('M1D2',  isset($gd->M1D2) ? $gd->M1D2 : null) }}">
                                                                        </div>
                                                                    </div>
                                                                     <div class="col-md-8 team_right">
                                                                        <label class="label_team_print">Iceland</label>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr class="A3-A4">
                                                            <td class="td-date">
                                                                <div class="col-md-12">
                                                                    6/16/2018
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="col-md-8 team_left">
                                                                        <label class="label_team_print">Croatia</label>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="pikcs-print">
                                                                            <input type="text" readonly name="M2D3" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M2D3" onblur="match_games_D()" value="{{ old('M2D3',  isset($gd->M2D3) ? $gd->M2D3 : null) }}">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            {{-- <td>
                                                                <div class="col-md-2">
                                                                    V
                                                                </div>
                                                            </td> --}}
                                                            <td>
                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <div class="pikcs-print">
                                                                            <input type="text" readonly name="M2D4" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M2D4" onblur="match_games_D()" value="{{ old('M2D4',  isset($gd->M2D4) ? $gd->M2D4 : null) }}">
                                                                        </div>
                                                                    </div>        
                                                                     <div class="col-md-8 team_right">
                                                                        <label class="label_team_print">Nigeria</label>
                                                                    </div>
                                                                    
                                                                    
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr class="A1-A3">
                                                            </td>
                                                            <td class="td-date">
                                                                <div class="col-md-12">
                                                                    6/21/2018
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="col-md-8 team_left">
                                                                        <label class="label_team_print">Argentina</label>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="pikcs-print">
                                                                            <input type="text" readonly name="M3D1" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M3D1" onblur="match_games_D()" value="{{ old('M3D1',  isset($gd->M3D1) ? $gd->M3D1 : null) }}">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            {{-- <td>
                                                                <div class="col-md-2">
                                                                    V
                                                                </div>
                                                            </td> --}}
                                                            <td>
                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <div class="pikcs-print">
                                                                            <input type="text" readonly name="M3D3" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M3D3" onblur="match_games_D()" value="{{ old('M3D3',  isset($gd->M3D3) ? $gd->M3D3 : null) }}">
                                                                        </div>
                                                                    </div>
                                                                     <div class="col-md-8 team_right">
                                                                        <label class="label_team_print">Croatia</label>
                                                                    </div>
                                                                    
                                                                    
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr class="A4-A2">
                                                            <td class="td-date">
                                                                <div class="col-md-12">
                                                                    6/22/2018
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="col-md-8 team_left">
                                                                        <label class="label_team_print">Nigeria</label>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="pikcs-print">
                                                                            <input type="text" readonly name="M4D4" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M4D4" onblur="match_games_D()" value="{{ old('M4D4',  isset($gd->M4D4) ? $gd->M4D4 : null) }}">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            {{-- <td>
                                                                <div class="col-md-2">
                                                                    V
                                                                </div>
                                                            </td> --}}
                                                            <td>
                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <div class="pikcs-print">
                                                                            <input type="text" readonly name="M4D2" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M4D2" onblur="match_games_D()" value="{{ old('M4D2',  isset($gd->M4D2) ? $gd->M4D2 : null) }}">
                                                                        </div>
                                                                    </div>
                                                                     <div class="col-md-8 team_right">
                                                                        <label class="label_team_print">Iceland</label>
                                                                    </div>
                                                                    
                                                                    
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr class="A4-A1">
                                                            <td class="td-date"> 
                                                                <div class="col-md-12">
                                                                    6/26/2018
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="col-md-8 team_left">
                                                                        <label class="label_team_print">Nigeria</label>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="pikcs-print">
                                                                            <input type="text" readonly name="M5D4" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M5D4" onblur="match_games_D()" value="{{ old('M5D4',  isset($gd->M5D4) ? $gd->M5D4 : null) }}">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <div class="pikcs-print">
                                                                            <input type="text" readonly name="M5D1" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M5D1" onblur="match_games_D()" value="{{ old('M5D1',  isset($gd->M5D1) ? $gd->M5D1 : null) }}">
                                                                        </div>
                                                                    </div>
                                                                     <div class="col-md-8 team_right">
                                                                        <label class="label_team_print">Argentina</label>
                                                                    </div>
                                                                    
                                                                    
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr class="A2-A3">
                                                            <td class="td-date">
                                                                <div class="col-md-12">
                                                                    6/26/2018
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="col-md-8 team_left">
                                                                        <label class="label_team_print">Iceland</label>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="pikcs-print">
                                                                            <input type="text" readonly name="M6D2" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M6D2" onblur="match_games_D()" value="{{ old('M6D2',  isset($gd->M6D2) ? $gd->M6D2 : null) }}">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <div class="pikcs-print">
                                                                            <input type="text" readonly name="M6D3" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M6D3" onblur="match_games_D()" value="{{ old('M6D3',  isset($gd->M6D3) ? $gd->M6D3 : null) }}">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-8 team_right">
                                                                        <label class="label_team_print">Croatia</label>
                                                                    </div>
                                                                    
                                                                    
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        
                                                        
                                                    </tbody>
                                                </table> 
		                                    </div>
		                                </div>
		                            </div>
		                        </div>
                        	</div>
                    	</div>

                    	<div class="row">
                        	<div class="col-md-6">
                        		{{-- GRUPO E --}}
		                        <div class="card">
		                            <div class="card-header-print">
		                                <div class="row">
		                                    <div class="col-md-4">
		                                        <h6>{{ __('Group E') }} </h6>
		                                    </div>
		                                </div>
		                            </div>
		                        
		                            <div class="card-body-print">
		                                <div class="row">
		                                    <div class="col-md-12 table-responsive">
		                                    	<table id="myTable" class="display table_picks-print">
                                                                    <thead>
                                                                        <tr>
                                                                            <th class="th-date">Date</th>
                                                                            <th>1st Team</th>
                                                                            <th>2st Team</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr class="A1-A2">
                                                                            <td class="td-date">
                                                                                <div class="col-md-12">
                                                                                     6/17/2018
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-8 team_left">
                                                                                        <label class="label_team_print">Brazil</label>
                                                                                    </div>
                                                                                    <div class="col-md-4">
                                                                                        <div class="pikcs-print">
                                                                                            <input type="text" readonly name="M1E1" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M1E1" onblur="match_games_E()" value="{{ old('M1E1',  isset($ge->M1E1) ? $ge->M1E1 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                           {{--  <td>
                                                                                V
                                                                            </td> --}}
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <div class="pikcs-print">
                                                                                            <input type="text" readonly name="M1E2" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M1E2" onblur="match_games_E()" value="{{ old('M1E2',  isset($ge->M1E2) ? $ge->M1E2 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                     <div class="col-md-8 team_right">
                                                                                        <label class="label_team_print">Switzerland</label>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr class="A3-A4">
                                                                            <td class="td-date">
                                                                                <div class="col-md-12">
                                                                                    6/17/2018
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-8 team_left">
                                                                                        <label class="label_team_print">Costa Rica</label>
                                                                                    </div>
                                                                                    <div class="col-md-4">
                                                                                        <div class="pikcs-print">
                                                                                            <input type="text" readonly name="M2E3" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M2E3" onblur="match_games_E()" value="{{ old('M2E3',  isset($ge->M2E3) ? $ge->M2E3 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <div class="pikcs-print">
                                                                                            <input type="text" readonly name="M2E4" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M2E4" onblur="match_games_E()" value="{{ old('M2E4',  isset($ge->M2E4) ? $ge->M2E4 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                     <div class="col-md-8 team_right">
                                                                                        <label class="label_team_print">Serbia</label>
                                                                                    </div>
                                                                                    
                                                                                    
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr class="A1-A3">
                                                                            </td>
                                                                            <td class="td-date">
                                                                                <div class="col-md-12">
                                                                                    6/22/2018
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-8 team_left">
                                                                                        <label class="label_team_print">Brazil</label>
                                                                                    </div>
                                                                                    <div class="col-md-4">
                                                                                        <div class="pikcs-print">
                                                                                            <input type="text" readonly name="M3E1" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M3E1" onblur="match_games_E()" value="{{ old('M3E1',  isset($ge->M3E1) ? $ge->M3E1 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            {{-- <td>
                                                                                <div class="col-md-2">
                                                                                    V
                                                                                </div>
                                                                            </td> --}}
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <div class="pikcs-print">
                                                                                            <input type="text" readonly name="M3E3" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M3E3" onblur="match_games_E()" value="{{ old('M3E3',  isset($ge->M3E3) ? $ge->M3E3 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                     <div class="col-md-8 team_right">
                                                                                        <label class="label_team_print">Costa Rica</label>
                                                                                    </div>
                                                                                    
                                                                                    
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr class="A4-A2">
                                                                            <td class="td-date">
                                                                                <div class="col-md-12">
                                                                                    6/22/2018
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-8 team_left">
                                                                                        <label class="label_team_print">Serbia</label>
                                                                                    </div>
                                                                                    <div class="col-md-4">
                                                                                        <div class="pikcs-print">
                                                                                            <input type="text" readonly name="M4E4" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M4E4" onblur="match_games_E()" value="{{ old('M4E4',  isset($ge->M4E4) ? $ge->M4E4 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            {{-- <td>
                                                                                <div class="col-md-2">
                                                                                    V
                                                                                </div>
                                                                            </td> --}}
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <div class="pikcs-print">
                                                                                            <input type="text" readonly name="M4E2" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M4E2" onblur="match_games_E()" value="{{ old('M4E2',  isset($ge->M4E2) ? $ge->M4E2 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                     <div class="col-md-8 team_right">
                                                                                        <label class="label_team_print">Switzerland</label>
                                                                                    </div>
                                                                                    
                                                                                    
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr class="A4-A1">
                                                                            <td class="td-date"> 
                                                                                <div class="col-md-12">
                                                                                    6/27/2018
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-8 team_left">
                                                                                        <label class="label_team_print">Serbia</label>
                                                                                    </div>
                                                                                    <div class="col-md-4">
                                                                                        <div class="pikcs-print">
                                                                                            <input type="text" readonly name="M5E4" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M5E4" onblur="match_games_E()" value="{{ old('M5E4',  isset($ge->M5E4) ? $ge->M5E4 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <div class="pikcs-print">
                                                                                            <input type="text" readonly name="M5E1" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M5E1" onblur="match_games_E()" value="{{ old('M5E1',  isset($ge->M5E1) ? $ge->M5E1 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                     <div class="col-md-8 team_right">
                                                                                        <label class="label_team_print">Brazil</label>
                                                                                    </div>
                                                                                    
                                                                                    
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr class="A2-A3">
                                                                            <td class="td-date">
                                                                                <div class="col-md-12">
                                                                                    6/27/2018
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-8 team_left">
                                                                                        <label class="label_team_print">Switzerland</label>
                                                                                    </div>
                                                                                    <div class="col-md-4">
                                                                                        <div class="pikcs-print">
                                                                                            <input type="text" readonly name="M6E2" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M6E2" onblur="match_games_E()" value="{{ old('M6E2',  isset($ge->M6E2) ? $ge->M6E2 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            {{-- <td>
                                                                                <div class="col-md-2">
                                                                                    V
                                                                                </div>
                                                                            </td> --}}
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <div class="pikcs-print">
                                                                                            <input type="text" readonly name="M6E3" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M6E3" onblur="match_games_E()" value="{{ old('M6E3',  isset($ge->M6E3) ? $ge->M6E3 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                     <div class="col-md-8 team_right">
                                                                                        <label class="label_team_print">Costa Rica</label>
                                                                                    </div>
                                                                                    
                                                                                    
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        
                                                                        
                                                                    </tbody>
                                                            </table> 
		                                    </div>
		                                </div>
		                            </div>
		                        </div>
                        	</div>
                        	<div class="col-md-6">
                        		{{-- GRUPO F --}}
		                        <div class="card">
		                            <div class="card-header-print">
		                                <div class="row">
		                                    <div class="col-md-4">
		                                        <h6>{{ __('Group F') }} </h6>
		                                    </div>
		                                </div>
		                            </div>
		                        
		                            <div class="card-body-print">
		                                <div class="row">
		                                    <div class="col-md-12 table-responsive">
		                                    	<table id="myTable" class="display table_picks-print">
                                                                    <thead>
                                                                        <tr>
                                                                            <th class="th-date">Date</th>
                                                                            <th>1st Team</th>
                                                                            <th>2st Team</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr class="A1-A2">
                                                                            <td class="td-date">
                                                                                <div class="col-md-12">
                                                                                     6/17/2018
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-8 team_left">
                                                                                        <label class="label_team_print">Germany</label>
                                                                                    </div>
                                                                                    <div class="col-md-4">
                                                                                        <div class="pikcs-print">
                                                                                            <input type="text" readonly name="M1F1" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M1F1" onblur="match_games_F()" value="{{ old('M1F1',  isset($gf->M1F1) ? $gf->M1F1 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                           {{--  <td>
                                                                                V
                                                                            </td> --}}
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <div class="pikcs-print">
                                                                                            <input type="text" readonly name="M1F2" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M1F2" onblur="match_games_F()" value="{{ old('M1F2',  isset($gf->M1F2) ? $gf->M1F2 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                     <div class="col-md-8 team_right">
                                                                                        <label class="label_team_print">Mexico</label>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr class="A3-A4">
                                                                            <td class="td-date">
                                                                                <div class="col-md-12">
                                                                                    6/18/2018
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-8 team_left">
                                                                                        <label class="label_team_print">Sweden</label>
                                                                                    </div>
                                                                                    <div class="col-md-4">
                                                                                        <div class="pikcs-print">
                                                                                            <input type="text" readonly name="M2F3" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M2F3" onblur="match_games_F()" value="{{ old('M2F3',  isset($gf->M2F3) ? $gf->M2F3 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>

                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <div class="pikcs-print">
                                                                                            <input type="text" readonly name="M2F4" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M2F4" onblur="match_games_F()" value="{{ old('M2F4',  isset($gf->M2F4) ? $gf->M2F4 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                     <div class="col-md-8 team_right">
                                                                                        <label class="label_team_print">South Korea</label>
                                                                                    </div>
                                                                                    
                                                                                    
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr class="A1-A3">
                                                                            </td>
                                                                            <td class="td-date">
                                                                                <div class="col-md-12">
                                                                                    6/23/2018
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-8 team_left">
                                                                                        <label class="label_team_print">Germany</label>
                                                                                    </div>
                                                                                    <div class="col-md-4">
                                                                                        <div class="pikcs-print">
                                                                                            <input type="text" readonly name="M3F1" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M3F1" onblur="match_games_F()" value="{{ old('M3F1',  isset($gf->M3F1) ? $gf->M3F1 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>

                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <div class="pikcs-print">
                                                                                            <input type="text" readonly name="M3F3" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M3F3" onblur="match_games_F()" value="{{ old('M3F3',  isset($gf->M3F3) ? $gf->M3F3 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                     <div class="col-md-8 team_right">
                                                                                        <label class="label_team_print">Sweden</label>
                                                                                    </div>
                                                                                    
                                                                                    
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr class="A4-A2">
                                                                            <td class="td-date">
                                                                                <div class="col-md-12">
                                                                                    6/23/2018
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-8 team_left">
                                                                                        <label class="label_team_print">South Korea</label>
                                                                                    </div>
                                                                                    <div class="col-md-4">
                                                                                        <div class="pikcs-print">
                                                                                            <input type="text" readonly name="M4F4" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M4F4" onblur="match_games_F()" value="{{ old('M4F4',  isset($gf->M4F4) ? $gf->M4F4 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            {{-- <td>
                                                                                <div class="col-md-2">
                                                                                    V
                                                                                </div>
                                                                            </td> --}}
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <div class="pikcs-print">
                                                                                            <input type="text" readonly name="M4F2" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M4F2" onblur="match_games_F()" value="{{ old('M4F2',  isset($gf->M4F2) ? $gf->M4F2 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                     <div class="col-md-8 team_right">
                                                                                        <label class="label_team_print">Mexico</label>
                                                                                    </div>
                                                                                    
                                                                                    
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr class="A4-A1">
                                                                            <td class="td-date"> 
                                                                                <div class="col-md-12">
                                                                                    6/27/2018
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-8 team_left">
                                                                                        <label class="label_team_print">South Korea</label>
                                                                                    </div>
                                                                                    <div class="col-md-4">
                                                                                        <div class="pikcs-print">
                                                                                            <input type="text" readonly name="M5F4" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M5F4" onblur="match_games_F()" value="{{ old('M5F4',  isset($gf->M5F4) ? $gf->M5F4 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <div class="pikcs-print">
                                                                                            <input type="text" readonly name="M5F1" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M5F1" onblur="match_games_F()" value="{{ old('M5F1',  isset($gf->M5F1) ? $gf->M5F1 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                     <div class="col-md-8 team_right">
                                                                                        <label class="label_team_print">Germany</label>
                                                                                    </div>
                                                                                    
                                                                                    
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr class="A2-A3">
                                                                            <td class="td-date">
                                                                                <div class="col-md-12">
                                                                                    6/27/2018
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-8 team_left">
                                                                                        <label class="label_team_print">Mexico</label>
                                                                                    </div>
                                                                                    <div class="col-md-4">
                                                                                        <div class="pikcs-print">
                                                                                            <input type="text" readonly name="M6F2" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M6F2" onblur="match_games_F()" value="{{ old('M6F2',  isset($gf->M6F2) ? $gf->M6F2 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            {{-- <td>
                                                                                <div class="col-md-2">
                                                                                    V
                                                                                </div>
                                                                            </td> --}}
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <div class="pikcs-print">
                                                                                            <input type="text" readonly name="M6F3" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M6F3" onblur="match_games_F()" value="{{ old('M6F3',  isset($gf->M6F3) ? $gf->M6F3 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                     <div class="col-md-8 team_right">
                                                                                        <label class="label_team_print">Sweden</label>
                                                                                    </div>
                                                                                    
                                                                                    
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        
                                                                        
                                                                    </tbody>
                                                            </table> 
		                                    </div>
		                                </div>
		                            </div>
		                        </div>
                        	</div>
                    	</div>

                    	<div class="row">
                        	<div class="col-md-6">
                        		{{-- GRUPO G --}}
		                        <div class="card">
		                            <div class="card-header-print">
		                                <div class="row">
		                                    <div class="col-md-4">
		                                        <h6>{{ __('Group G') }} </h6>
		                                    </div>
		                                </div>
		                            </div>
		                        
		                            <div class="card-body-print">
		                                <div class="row">
		                                    <div class="col-md-12 table-responsive">
		                                    	<table id="myTable" class="display table_picks-print">
                                                                    <thead>
                                                                        <tr>
                                                                            <th class="th-date">Date</th>
                                                                            <th>1st Team</th>
                                                                            <th>2st Team</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr class="A1-A2">
                                                                            <td class="td-date">
                                                                                <div class="col-md-12">
                                                                                     6/18/2018
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-8 team_left">
                                                                                        <label class="label_team_print">Belgium</label>
                                                                                    </div>
                                                                                    <div class="col-md-4">
                                                                                        <div class="pikcs-print">
                                                                                            <input type="text" readonly name="M1G1" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M1G1" onblur="match_games_G()" value="{{ old('M1G1',  isset($gg->M1G1) ? $gg->M1G1 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                           {{--  <td>
                                                                                V
                                                                            </td> --}}
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <div class="pikcs-print">
                                                                                            <input type="text" readonly name="M1G2" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M1G2" onblur="match_games_G()" value="{{ old('M1G2',  isset($gg->M1G2) ? $gg->M1G2 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                     <div class="col-md-8 team_right">
                                                                                        <label class="label_team_print">Panama</label>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr class="A3-A4">
                                                                            <td class="td-date">
                                                                                <div class="col-md-12">
                                                                                    6/18/2018
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-8 team_left">
                                                                                        <label class="label_team_print">Tunisia</label>
                                                                                    </div>
                                                                                    <div class="col-md-4">
                                                                                        <div class="pikcs-print">
                                                                                            <input type="text" readonly name="M2G3" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M2G3" onblur="match_games_G()" value="{{ old('M2G3',  isset($gg->M2G3) ? $gg->M2G3 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            {{-- <td>
                                                                                <div class="col-md-2">
                                                                                    V
                                                                                </div>
                                                                            </td> --}}
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <div class="pikcs-print">
                                                                                            <input type="text" readonly name="M2G4" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M2G4" onblur="match_games_G()" value="{{ old('M2G4',  isset($gg->M2G4) ? $gg->M2G4 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                     <div class="col-md-8 team_right">
                                                                                        <label class="label_team_print">England</label>
                                                                                    </div>
                                                                                    
                                                                                    
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr class="A1-A3">
                                                                            </td>
                                                                            <td class="td-date">
                                                                                <div class="col-md-12">
                                                                                    6/23/2018
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-8 team_left">
                                                                                        <label class="label_team_print">Belgium</label>
                                                                                    </div>
                                                                                    <div class="col-md-4">
                                                                                        <div class="pikcs-print">
                                                                                            <input type="text" readonly name="M3G1" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M3G1" onblur="match_games_G()" value="{{ old('M3G1',  isset($gg->M3G1) ? $gg->M3G1 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            {{-- <td>
                                                                                <div class="col-md-2">
                                                                                    V
                                                                                </div>
                                                                            </td> --}}
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <div class="pikcs-print">
                                                                                            <input type="text" readonly name="M3G3" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M3G3" onblur="match_games_G()" value="{{ old('M3G3',  isset($gg->M3G3) ? $gg->M3G3 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                     <div class="col-md-8 team_right">
                                                                                        <label class="label_team_print">Tunisia</label>
                                                                                    </div>
                                                                                    
                                                                                    
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr class="A4-A2">
                                                                            <td class="td-date">
                                                                                <div class="col-md-12">
                                                                                    6/24/2018
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-8 team_left">
                                                                                        <label class="label_team_print">England</label>
                                                                                    </div>
                                                                                    <div class="col-md-4">
                                                                                        <div class="pikcs-print">
                                                                                            <input type="text" readonly name="M4G4" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M4G4" onblur="match_games_G()" value="{{ old('M4G4',  isset($gg->M4G4) ? $gg->M4G4 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            {{-- <td>
                                                                                <div class="col-md-2">
                                                                                    V
                                                                                </div>
                                                                            </td> --}}
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <div class="pikcs-print">
                                                                                            <input type="text" readonly name="M4G2" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M4G2" onblur="match_games_G()" value="{{ old('M4G2',  isset($gg->M4G2) ? $gg->M4G2 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                     <div class="col-md-8 team_right">
                                                                                        <label class="label_team_print">Panama</label>
                                                                                    </div>
                                                                                    
                                                                                    
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr class="A4-A1">
                                                                            <td class="td-date"> 
                                                                                <div class="col-md-12">
                                                                                    6/28/2018
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-8 team_left">
                                                                                        <label class="label_team_print">England</label>
                                                                                    </div>
                                                                                    <div class="col-md-4">
                                                                                        <div class="pikcs-print">
                                                                                            <input type="text" readonly name="M5G4" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M5G4" onblur="match_games_G()" value="{{ old('M5G4',  isset($gg->M5G4) ? $gg->M5G4 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            {{-- <td>
                                                                                <div class="col-md-2">
                                                                                    V
                                                                                </div>
                                                                            </td> --}}
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <div class="pikcs-print">
                                                                                            <input type="text" readonly name="M5G1" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M5G1" onblur="match_games_G()" value="{{ old('M5G1',  isset($gg->M5G1) ? $gg->M5G1 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                     <div class="col-md-8 team_right">
                                                                                        <label class="label_team_print">Belgium</label>
                                                                                    </div>
                                                                                    
                                                                                    
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr class="A2-A3">
                                                                            <td class="td-date">
                                                                                <div class="col-md-12">
                                                                                    6/28/2018
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-8 team_left">
                                                                                        <label class="label_team_print">Panama</label>
                                                                                    </div>
                                                                                    <div class="col-md-4">
                                                                                        <div class="pikcs-print">
                                                                                            <input type="text" readonly name="M6G2" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M6G2" onblur="match_games_G()" value="{{ old('M6G2',  isset($gg->M6G2) ? $gg->M6G2 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            {{-- <td>
                                                                                <div class="col-md-2">
                                                                                    V
                                                                                </div>
                                                                            </td> --}}
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <div class="pikcs-print">
                                                                                            <input type="text" readonly name="M6G3" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M6G3" onblur="match_games_G()" value="{{ old('M6G3',  isset($gg->M6G3) ? $gg->M6G3 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                     <div class="col-md-8 team_right">
                                                                                        <label class="label_team_print">Tunisia</label>
                                                                                    </div>
                                                                                    
                                                                                    
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        
                                                                        
                                                                    </tbody>
                                                            </table> 
		                                    </div>
		                                </div>
		                            </div>
		                        </div>
                        	</div>
                        	<div class="col-md-6">
                        		{{-- GRUPO H --}}
		                        <div class="card">
		                            <div class="card-header-print">
		                                <div class="row">
		                                    <div class="col-md-4">
		                                        <h6>{{ __('Group H') }} </h6>
		                                    </div>
		                                </div>
		                            </div>
		                        
		                            <div class="card-body-print">
		                                <div class="row">
		                                    <div class="col-md-12 table-responsive">
		                                    	<table id="myTable" class="display table_picks-print">
                                                                    <thead>
                                                                        <tr>
                                                                            <th class="th-date">Date</th>
                                                                            <th>1st Team</th>
                                                                            <th>2st Team</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr class="A1-A2">
                                                                            <td class="td-date">
                                                                                <div class="col-md-12">
                                                                                     6/19/2018
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-8 team_left">
                                                                                        <label class="label_team_print">Poland</label>
                                                                                    </div>
                                                                                    <div class="col-md-4">
                                                                                        <div class="pikcs-print">
                                                                                            <input type="text" readonly name="M1H1" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M1H1" onblur="match_games_H()" value="{{ old('M1H1',  isset($gh->M1H1) ? $gh->M1H1 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                           {{--  <td>
                                                                                V
                                                                            </td> --}}
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <div class="pikcs-print">
                                                                                            <input type="text" readonly name="M1H2" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M1H2" onblur="match_games_H()" value="{{ old('M1H2',  isset($gh->M1H2) ? $gh->M1H2 : null) }}">
                                                                                        </div>
                                                                                    </div>                                      
                                                                                     <div class="col-md-8 team_right">
                                                                                        <label class="label_team_print">Senegal</label>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr class="A3-A4">
                                                                            <td class="td-date">
                                                                                <div class="col-md-12">
                                                                                    6/19/2018
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-8 team_left">
                                                                                        <label class="label_team_print">Colombia</label>
                                                                                    </div>
                                                                                    <div class="col-md-4">
                                                                                        <div class="pikcs-print">
                                                                                            <input type="text" readonly name="M2H3" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M2H3" onblur="match_games_H()" value="{{ old('M2H3',  isset($gh->M2H3) ? $gh->M2H3 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            {{-- <td>
                                                                                <div class="col-md-2">
                                                                                    V
                                                                                </div>
                                                                            </td> --}}
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <div class="pikcs-print">
                                                                                            <input type="text" readonly name="M2H4" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M2H4" onblur="match_games_H()" value="{{ old('M2H4',  isset($gh->M2H4) ? $gh->M2H4 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                     <div class="col-md-8 team_right">
                                                                                        <label class="label_team_print">Japan</label>
                                                                                    </div>
                                                                                    
                                                                                    
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr class="A1-A3">
                                                                            </td>
                                                                            <td class="td-date">
                                                                                <div class="col-md-12">
                                                                                    6/24/2018
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-8 team_left">
                                                                                        <label class="label_team_print">Poland</label>
                                                                                    </div>
                                                                                    <div class="col-md-4">
                                                                                        <div class="pikcs-print">
                                                                                            <input type="text" readonly name="M3H1" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M3H1" onblur="match_games_H()" value="{{ old('M3H1',  isset($gh->M3H1) ? $gh->M3H1 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            {{-- <td>
                                                                                <div class="col-md-2">
                                                                                    V
                                                                                </div>
                                                                            </td> --}}
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <div class="pikcs-print">
                                                                                            <input type="text" readonly name="M3H3" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M3H3" onblur="match_games_H()" value="{{ old('M3H3',  isset($gh->M3H3) ? $gh->M3H3 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                     <div class="col-md-8 team_right">
                                                                                        <label class="label_team_print">Colombia</label>
                                                                                    </div>
                                                                                    
                                                                                    
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr class="A4-A2">
                                                                            <td class="td-date">
                                                                                <div class="col-md-12">
                                                                                    6/24/2018
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-8 team_left">
                                                                                        <label class="label_team_print">Japan</label>
                                                                                    </div>
                                                                                    <div class="col-md-4">
                                                                                        <div class="pikcs-print">
                                                                                            <input type="text" readonly name="M4H4" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M4H4" onblur="match_games_H()" value="{{ old('M4H4',  isset($gh->M4H4) ? $gh->M4H4 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            {{-- <td>
                                                                                <div class="col-md-2">
                                                                                    V
                                                                                </div>
                                                                            </td> --}}
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <div class="pikcs-print">
                                                                                            <input type="text" readonly name="M4H2" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M4H2" onblur="match_games_H()" value="{{ old('M4H2',  isset($gh->M4H2) ? $gh->M4H2 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                     <div class="col-md-8 team_right">
                                                                                        <label class="label_team_print">Senegal</label>
                                                                                    </div>
                                                                                    
                                                                                    
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr class="A4-A1">
                                                                            <td class="td-date"> 
                                                                                <div class="col-md-12">
                                                                                    6/28/2018
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-8 team_left">
                                                                                        <label class="label_team_print">Japan</label>
                                                                                    </div>
                                                                                    <div class="col-md-4">
                                                                                        <div class="pikcs-print">
                                                                                            <input type="text" readonly name="M5H4" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M5H4" onblur="match_games_H()" value="{{ old('M5H4',  isset($gh->M5H4) ? $gh->M5H4 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            {{-- <td>
                                                                                <div class="col-md-2">
                                                                                    V
                                                                                </div>
                                                                            </td> --}}
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <div class="pikcs-print">
                                                                                            <input type="text" readonly name="M5H1" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M5H1" onblur="match_games_H()" value="{{ old('M5H1',  isset($gh->M5H1) ? $gh->M5H1 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                     <div class="col-md-8 team_right">
                                                                                        <label class="label_team_print">Poland</label>
                                                                                    </div>
                                                                                    
                                                                                    
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr class="A2-A3">
                                                                            <td class="td-date">
                                                                                <div class="col-md-12">
                                                                                    6/28/2018
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-8 team_left">
                                                                                        <label class="label_team_print">Senegal</label>
                                                                                    </div>
                                                                                    <div class="col-md-4">
                                                                                        <div class="pikcs-print">
                                                                                            <input type="text" readonly name="M6H2" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M6H2" onblur="match_games_H()" value="{{ old('M6H2',  isset($gh->M6H2) ? $gh->M6H2 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            {{-- <td>
                                                                                <div class="col-md-2">
                                                                                    V
                                                                                </div>
                                                                            </td> --}}
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <div class="pikcs-print">
                                                                                            <input type="text" readonly name="M6H3" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M6H3" onblur="match_games_H()" value="{{ old('M6H3',  isset($gh->M6H3) ? $gh->M6H3 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                     <div class="col-md-8 team_right">
                                                                                        <label class="label_team_print">Colombia</label>
                                                                                    </div>
                                                                                    
                                                                                    
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        
                                                                        
                                                                    </tbody>
                                                            </table> 
		                                    </div>
		                                </div>
		                            </div>
		                        </div>
                        	</div>
                    	</div>

                    	<div class="row">
                    		{{-- Second Stage --}}
		                        <div class="card">
		                            
		                        
		                            <div class="card-body-print">
		                                <div class="row">
		                                    <div class="col-md-12">
		                                    	<div class="row">
			                                    	{{-- Round of 16 --}}
				                                    <div class="col-md-3 second_sta">
				                                        <div class="card">
				                                            <div class="card-header-print">
				                                                <div class="row">
				                                                    <div class="col-md-12">
				                                                        <h6>{{ __('Round of 16') }} </h6>
				                                                    </div>
				                                                </div>
				                                            </div>
				                                            <div class="card-body-print flagsbody" style="text-align: left;">
				                                                {{-- 1A --}}
				                                                <div class="row">
				                                                    <div class="col-md-12">
				                                                        
				                                                        <table class="display table_second_stage">
				                                                            <tbody>
				                                                                 @if($winA == null)
				                                                                <tr>
				                                                                    
				                                                                    <td style="width: 70%;"></td>
				                                                                    
				                                                                </tr>
				                                                                @else
				                                                                <tr>
				                                                                    
				                                                                    <td style="width: 70%;">
				                                                                        <div class="row">
				                                                                            <div class="col-md-12" >
				                                                                                <label>{{$winA->team_name}}</label>
				                                                                            </div>
				                                                                        </div>
				                                                                    </td>
				                                                                </tr>
				                                                                @endif
				                                                            </tbody>
				                                                        </table>
				                                                    </div>
				                                                </div>

				                                                {{-- 2B --}}
				                                                <div class="row">
				                                                    <div class="col-md-12">
				                                                        <table class="display table_second_stage">
				                                                            <tbody>
				                                                                @if($winB == null)
				                                                                <tr>
				                                                                    
				                                                                    <td style="width: 70%;"></td>
				                                                                </tr>
				                                                                @else
				                                                                <tr>
				                                                                    <td style="width: 70%;">
				                                                                        <div class="row">
				                                                                            <div class="col-md-12" >
				                                                                                <label>{{$winB->team_rumup}}</label>
				                                                                            </div>
				                                                                        </div>
				                                                                    </td>

				                                                                </tr>
				                                                                @endif
				                                                            </tbody>
				                                                        </table>
				                                                    </div>
				                                                </div>

				                                                {{-- 1C --}}
				                                                <div class="row">
				                                                    <div class="col-md-12">
				                                                        
				                                                        <table class="display table_second_stage">
				                                                            <tbody>
				                                                                 @if($winC == null)
				                                                                <tr>
				                                                                    
				                                                                    <td style="width: 70%;"></td>
				                                                                </tr>
				                                                                @else
				                                                                <tr>
				                                                                    <td style="width: 70%;">
				                                                                        <div class="row">
				                                                                            <div class="col-md-12" >
				                                                                                <label>{{$winC->team_name}}</label>
				                                                                            </div>
				                                                                        </div>
				                                                                    </td>

				                                                                </tr>
				                                                                @endif
				                                                            </tbody>
				                                                        </table>
				                                                    </div>
				                                                </div>
				                                                
				                                                {{-- 2D --}}
				                                                <div class="row">
				                                                    <div class="col-md-12">
				                                                        <table class="display table_second_stage">
				                                                            <tbody>
				                                                                @if($winD == null)
				                                                                <tr>
				                                                                    
				                                                                    <td style="width: 70%;"></td>
				                                                                    
				                                                                </tr>
				                                                                @else
				                                                                <tr>
				                                                                    <td style="width: 70%;">
				                                                                        <div class="row">
				                                                                            <div class="col-md-12" >
				                                                                                <label>{{$winD->team_rumup}}</label>
				                                                                            </div>
				                                                                        </div>
				                                                                    </td>

				                                                                </tr>
				                                                                @endif
				                                                            </tbody>
				                                                        </table>
				                                                    </div>
				                                                </div>

				                                                {{-- 1E --}}
				                                                <div class="row">
				                                                    <div class="col-md-12">
				                                                        
				                                                        <table class="display table_second_stage">
				                                                            <tbody>
				                                                                 @if($winE == null)
				                                                                <tr>
				                                                                    
				                                                                    <td style="width: 70%;"></td>
				                                                                </tr>
				                                                                @else
				                                                                <tr>
				                                                                    <td style="width: 70%;">
				                                                                        <div class="row">
				                                                                            <div class="col-md-12" >
				                                                                                <label>{{$winE->team_name}}</label>
				                                                                            </div>
				                                                                        </div>
				                                                                    </td>

				                                                                </tr>
				                                                                @endif
				                                                            </tbody>
				                                                        </table>
				                                                    </div>
				                                                </div>
				                                                
				                                                {{-- 2F --}}
				                                                <div class="row">
				                                                    <div class="col-md-12">
				                                                        <table class="display table_second_stage">
				                                                            <tbody>
				                                                                @if($winF == null)
				                                                                <tr>
				                                                                    
				                                                                    <td style="width: 70%;"></td>
				                                                                </tr>
				                                                                @else
				                                                                <tr>
				                                                                    <td style="width: 70%;">
				                                                                        <div class="row">
				                                                                            <div class="col-md-12" >
				                                                                                <label>{{$winF->team_rumup}}</label>
				                                                                            </div>
				                                                                        </div>
				                                                                    </td>

				                                                                </tr>
				                                                                @endif
				                                                            </tbody>
				                                                        </table>
				                                                    </div>
				                                                </div>

				                                                {{-- 1G --}}
				                                                <div class="row">
				                                                    <div class="col-md-12">
				                                                        
				                                                        <table class="display table_second_stage">
				                                                            <tbody>
				                                                                 @if($winG == null)
				                                                                <tr>
				                                                                    
				                                                                    <td style="width: 70%;"></td>
				                                                                </tr>
				                                                                @else
				                                                                <tr>
				                                                                    <td style="width: 70%;">
				                                                                        <div class="row">
				                                                                            <div class="col-md-12" >
				                                                                                <label>{{$winG->team_name}}</label>
				                                                                            </div>
				                                                                        </div>
				                                                                    </td>
				                                                                </tr>
				                                                                @endif
				                                                            </tbody>
				                                                        </table>
				                                                    </div>
				                                                </div>
				                                                
				                                                {{-- 2H --}}
				                                                <div class="row">
				                                                    <div class="col-md-12">
				                                                        <table class="display table_second_stage">
				                                                            <tbody>
				                                                                @if($winH == null)
				                                                                <tr>
				                                                                    
				                                                                    <td style="width: 70%;"></td>
				                                                                </tr>
				                                                                @else
				                                                                <tr>
				                                                                    <td style="width: 70%;">
				                                                                        <div class="row">
				                                                                            <div class="col-md-12" >
				                                                                                <label>{{$winH->team_rumup}}</label>
				                                                                            </div>
				                                                                        </div>
				                                                                    </td>
				                                                                </tr>
				                                                                @endif
				                                                            </tbody>
				                                                        </table>
				                                                    </div>
				                                                </div>

				                                                {{-- 1B --}}
				                                                <div class="row">
				                                                    <div class="col-md-12">
				                                                        
				                                                        <table class="display table_second_stage">
				                                                            <tbody>
				                                                                 @if($winB == null)
				                                                                <tr>
				                                                                    
				                                                                    <td style="width: 70%;"></td>
				                                                                </tr>
				                                                                @else
				                                                                <tr>
				                                                                    <td style="width: 70%;">
				                                                                        <div class="row">
				                                                                            <div class="col-md-12" >
				                                                                                <label>{{$winB->team_name}}</label>
				                                                                            </div>
				                                                                        </div>
				                                                                    </td>

				                                                                </tr>
				                                                                @endif
				                                                            </tbody>
				                                                        </table>
				                                                    </div>
				                                                </div>

				                                                {{-- 2A --}}
				                                                <div class="row">
				                                                    <div class="col-md-12">
				                                                        <table class="display table_second_stage">
				                                                            <tbody>
				                                                                @if($winA == null)
				                                                                <tr>
				                                                                    
				                                                                    <td style="width: 70%;"></td>
				                                                                </tr>
				                                                                @else
				                                                                <tr>
				                                                                    <td style="width: 70%;">
				                                                                        <div class="row">
				                                                                            <div class="col-md-12" >
				                                                                                <label>{{$winA->team_rumup}}</label>
				                                                                            </div>
				                                                                        </div>
				                                                                    </td>

				                                                                </tr>
				                                                                @endif
				                                                            </tbody>
				                                                        </table>
				                                                    </div>
				                                                </div>

				                                                {{-- 1D --}}
				                                                <div class="row">
				                                                    <div class="col-md-12">
				                                                        
				                                                        <table class="display table_second_stage">
				                                                            <tbody>
				                                                                 @if($winD == null)
				                                                                <tr>
				                                                                    
				                                                                    <td style="width: 70%;"></td>
				                                                                </tr>
				                                                                @else
				                                                                <tr>
				                                                                    <td style="width: 70%;">
				                                                                        <div class="row">
				                                                                            <div class="col-md-12" >
				                                                                                <label>{{$winD->team_name}}</label>
				                                                                            </div>
				                                                                        </div>
				                                                                    </td>
				                                                                </tr>
				                                                                @endif
				                                                            </tbody>
				                                                        </table>
				                                                    </div>
				                                                </div>
				                                                
				                                                {{-- 2C --}}
				                                                <div class="row">
				                                                    <div class="col-md-12">
				                                                        <table class="display table_second_stage">
				                                                            <tbody>
				                                                                @if($winC == null)
				                                                                <tr>
				                                                                    
				                                                                    <td style="width: 70%;"></td>
				                                                                </tr>
				                                                                @else
				                                                                <tr>
				                                                                    <td style="width: 70%;">
				                                                                        <div class="row">
				                                                                            <div class="col-md-12" >
				                                                                                <label>{{$winC->team_rumup}}</label>
				                                                                            </div>
				                                                                        </div>
				                                                                    </td>
				                                                                </tr>
				                                                                @endif
				                                                            </tbody>
				                                                        </table>
				                                                    </div>
				                                                </div>

				                                                {{-- 1F --}}
				                                                <div class="row">
				                                                    <div class="col-md-12">
				                                                        
				                                                        <table class="display table_second_stage">
				                                                            <tbody>
				                                                                 @if($winF == null)
				                                                                <tr>
				                                                                    
				                                                                    <td style="width: 70%;"></td>
				                                                                </tr>
				                                                                @else
				                                                                <tr>
				                                                                    <td style="width: 70%;">
				                                                                        <div class="row">
				                                                                            <div class="col-md-12" >
				                                                                                <label>{{$winF->team_name}}</label>
				                                                                            </div>
				                                                                        </div>
				                                                                    </td>

				                                                                </tr>
				                                                                @endif
				                                                            </tbody>
				                                                        </table>
				                                                    </div>
				                                                </div>
				                                                
				                                                {{-- 2E --}}
				                                                <div class="row">
				                                                    <div class="col-md-12">
				                                                        <table class="display table_second_stage">
				                                                            <tbody>
				                                                                @if($winE == null)
				                                                                <tr>
				                                                                    
				                                                                    <td style="width: 70%;"></td>
				                                                                </tr>
				                                                                @else
				                                                                <tr>
				                                                                    <td style="width: 70%;">
				                                                                        <div class="row">
				                                                                            <div class="col-md-12" >
				                                                                                <label>{{$winE->team_rumup}}</label>
				                                                                            </div>
				                                                                        </div>
				                                                                    </td>

				                                                                </tr>
				                                                                @endif
				                                                            </tbody>
				                                                        </table>
				                                                    </div>
				                                                </div>

				                                                {{-- 1H --}}
				                                                <div class="row">
				                                                    <div class="col-md-12">
				                                                        
				                                                        <table class="display table_second_stage">
				                                                            <tbody>
				                                                                 @if($winH == null)
				                                                                <tr>
				                                                                    
				                                                                    <td style="width: 70%;"></td>
				                                                                </tr>
				                                                                @else
				                                                                <tr>
				                                                                    <td style="width: 70%;">
				                                                                        <div class="row">
				                                                                            <div class="col-md-12" >
				                                                                                <label>{{$winH->team_name}}</label>
				                                                                            </div>
				                                                                        </div>
				                                                                    </td>

				                                                                </tr>
				                                                                @endif
				                                                            </tbody>
				                                                        </table>
				                                                    </div>
				                                                </div>
				                                                
				                                                {{-- 2G --}}
				                                                <div class="row">
				                                                    <div class="col-md-12">
				                                                        <table class="display table_second_stage">
				                                                            <tbody>
				                                                                @if($winG == null)
				                                                                <tr>
				                                                                    
				                                                                    <td style="width: 50%; height: 30px;"></td>
				                                                                </tr>
				                                                                @else
				                                                                <tr>
				                                                                    <td style="width: 70%;">
				                                                                        <div class="row">
				                                                                            <div class="col-md-12" >
				                                                                                <label>{{$winG->team_rumup}}</label>
				                                                                            </div>
				                                                                        </div>
				                                                                    </td>
				                                                                </tr>
				                                                                @endif
				                                                            </tbody>
				                                                        </table>
				                                                    </div>
				                                                </div>

				                                            </div>
				                                        </div>  {{--  end card --}}
				                                    </div> {{--  end col div --}}

				                                    {{-- Quarter-finals --}}
				                                    <div class="col-md-2 quarters second_sta">
				                                        <div class="card">
				                                            <div class="card-header-print">
				                                                <div class="row">
				                                                    <div class="col-md-12">
				                                                        <h6>{{ __('Quarter-finals') }} </h6>
				                                                    </div>
				                                                </div>
				                                            </div>

				                                            <div class="card-body-print">
				                                                {{-- 1A - 2B --}}
				                                                <div class="row">
				                                                    <div class="col-md-12">
				                                                        
				                                                        <table class="display table_second_stage">
				                                                            <tbody>
				                                                                @if($winA == null && $winA)
				                                                                <tr>
				                                                                    
				                                                                    <td style="width: 70%;"></td>
				                                                                </tr>
				                                                                @else
				                                                                <tr>   
				                                                                    <td style="width: 70%;">
				                                                                        <div class="row">
				                                                                            <div class="col-md-12">
				                                                                                @if (isset($ss->quarter_1))
				                                                                                    {!! Form::select('WRound1A2B', [
				                                                                                      '' => 'Pick a Team',
				                                                                                      "$winA->id_winner_team" => "$winA->team_name",
				                                                                                      "$winB->id_runnerup" => "$winB->team_rumup",
				                                                                                      ], old('value', isset($ss->quarter_1) ? $ss->quarter_1 : null ), [ 'class' =>  'form-control WRound1A2B', 'required', 'id' => 'WRound1A2B']) !!}
				                                                                                @else

				                                                                                    <select class="form-control WRound1A2B" id="WRound1A2B" name="WRound1A2B">
				                                                                                        <option>Pick a Team...</option>
				                                                                                        @if($winA != null && $winB != null)
				                                                                                        <option value="{{$winA->id_winner_team}}">{{$winA->team_name}}</option>

				                                                                                        <option value="{{$winB->id_runnerup}}">{{$winB->team_rumup}}</option>
				                                                                                        @endif
				                                                                                    </select>
				                                                                                @endif
				                                                                            </div>
				                                                                        </div>
				                                                                    </td>

				                                                                </tr>
				                                                                @endif
				                                                            </tbody>
				                                                        </table>
				                                                    </div>
				                                                </div>

				                                                {{-- 1C - 2D --}}
				                                                <div class="row">
				                                                    <div class="col-md-12">
				                                                        <table class="display table_second_stage">
				                                                            <tbody>
				                                                                 @if($winC == null && $winD)
				                                                                <tr>
				                                                                    
				                                                                    <td style="width: 70%;"></td>
				                                                                </tr>
				                                                                @else
				                                                                <tr>
				                                                                    <td style="width: 70%;">
				                                                                        <div class="row">
				                                                                            <div class="col-md-12">
				                                                                                @if (isset($ss->quarter_2))
				                                                                                    {!! Form::select('WRound1C2D', [
				                                                                                      '' => 'Pick a Team',
				                                                                                      "$winC->id_winner_team" => "$winC->team_name",
				                                                                                      "$winD->id_runnerup" => "$winD->team_rumup",
				                                                                                      ], old('value', isset($ss->quarter_2) ? $ss->quarter_2 : null ), [ 'class' =>  'form-control WRound1C2D', 'required', 'id' => 'WRound1C2D']) !!}
				                                                                                @else
				                                                                                
				                                                                                    <select class="form-control WRound1C2D" id="WRound1C2D" name="WRound1C2D">
				                                                                                        <option>Pick a Team...</option>
				                                                                                        @if($winC != null && $winD != null)
				                                                                                        <option value="{{$winC->id_winner_team}}">{{$winC->team_name}}</option>
				                                                                                        <option value="{{$winD->id_runnerup}}">{{$winD->team_rumup}}</option>
				                                                                                        @endif
				                                                                                    </select>
				                                                                                @endif

				                                                                                
				                                                                            </div>
				                                                                        </div>
				                                                                    </td>

				                                                                </tr>
				                                                                @endif
				                                                            </tbody>
				                                                        </table>
				                                                    </div>
				                                                </div>


				                                                {{-- 1E - 2F --}}
				                                                <div class="row">
				                                                    <div class="col-md-12">
				                                                        <table class="display table_second_stage">
				                                                            <tbody>
				                                                                 @if($winE == null && $winF)
				                                                                <tr>
				                                                                    
				                                                                    <td style="width: 70%;"></td>
				                                                                </tr>
				                                                                @else
				                                                                <tr>
				                                                                    <td style="width: 70%;">
				                                                                        <div class="row">
				                                                                            <div class="col-md-12">
				                                                                                    
				                                                                                @if (isset($ss->quarter_3))
				                                                                                    {!! Form::select('WRound1E2F', [
				                                                                                      '' => 'Pick a Team',
				                                                                                      "$winE->id_winner_team" => "$winE->team_name",
				                                                                                      "$winF->id_runnerup" => "$winF->team_rumup",
				                                                                                      ], old('value', isset($ss->quarter_3) ? $ss->quarter_3 : null ), [ 'class' =>  'form-control WRound1E2F', 'required', 'id' => 'WRound1E2F']) !!}
				                                                                                @else
				                                                                                
				                                                                                    <select class="form-control WRound1E2F" id="WRound1E2F" name="WRound1E2F">
				                                                                                        <option>Pick a Team...</option>
				                                                                                        @if($winE != null && $winF != null)
				                                                                                        <option value="{{$winE->id_winner_team}}">{{$winE->team_name}}</option>
				                                                                                        <option value="{{$winF->id_runnerup}}">{{$winF->team_rumup}}</option>
				                                                                                        @endif
				                                                                                    </select>
				                                                                                @endif

				                                                                                    
				                                                                            </div>
				                                                                        </div>
				                                                                    </td>

				                                                                </tr>
				                                                                @endif
				                                                            </tbody>
				                                                        </table>
				                                                    </div>
				                                                </div>

				                                                {{-- 1G - 2H --}}
				                                                <div class="row">
				                                                    <div class="col-md-12">
				                                                        <table class="display table_second_stage">
				                                                            <tbody>
				                                                                 @if($winG == null && $winH)
				                                                                <tr>
				                                                                    
				                                                                    <td style="width: 70%;"></td>
				                                                                </tr>
				                                                                @else
				                                                                <tr>
				                                                                    <td style="width: 70%;">
				                                                                        <div class="row">
				                                                                            <div class="col-md-12">
				                                                                                 
				                                                                                @if (isset($ss->quarter_4))
				                                                                                    {!! Form::select('WRound1G2H', [
				                                                                                      '' => 'Pick a Team',
				                                                                                      "$winG->id_winner_team" => "$winG->team_name",
				                                                                                      "$winH->id_runnerup" => "$winH->team_rumup",
				                                                                                      ], old('value', isset($ss->quarter_4) ? $ss->quarter_4 : null ), [ 'class' =>  'form-control WRound1G2H', 'required', 'id' => 'WRound1G2H']) !!}
				                                                                                @else
				                                                                                
				                                                                                    <select class="form-control WRound1G2H" id="WRound1G2H" name="WRound1G2H">
				                                                                                        <option>Pick a Team...</option>
				                                                                                        @if($winG != null && $winH != null)
				                                                                                        <option value="{{$winG->id_winner_team}}">{{$winG->team_name}}</option>
				                                                                                        <option value="{{$winH->id_runnerup}}">{{$winH->team_rumup}}</option>
				                                                                                        @endif
				                                                                                    </select>
				                                                                                @endif
				                                                                                    
				                                                                                
				                                                                            </div>
				                                                                        </div>
				                                                                    </td>

				                                                                </tr>
				                                                                @endif
				                                                            </tbody>
				                                                        </table>
				                                                    </div>
				                                                </div>

				                                                {{-- 1B - 2A --}}
				                                                <div class="row">
				                                                    <div class="col-md-12">
				                                                        <table class="display table_second_stage">
				                                                            <tbody>
				                                                                 @if($winB == null && $winA)
				                                                                <tr>
				                                                                    
				                                                                    <td style="width: 70%;"></td>
				                                                                </tr>
				                                                                @else
				                                                                <tr>
				                                                                    <td style="width: 70%;">
				                                                                        <div class="row">
				                                                                            <div class="col-md-12">
				                                                                                 
				                                                                                @if (isset($ss->quarter_5))
				                                                                                    {!! Form::select('WRound1B2A', [
				                                                                                      '' => 'Pick a Team',
				                                                                                      "$winB->id_winner_team" => "$winB->team_name",
				                                                                                      "$winA->id_runnerup" => "$winA->team_rumup",
				                                                                                      ], old('value', isset($ss->quarter_5) ? $ss->quarter_5 : null ), [ 'class' =>  'form-control WRound1B2A', 'required', 'id' => 'WRound1B2A']) !!}
				                                                                                @else
				                                                                                
				                                                                                <select class="form-control WRound1B2A" id="WRound1B2A" name="WRound1B2A">
				                                                                                    <option>Pick a Team...</option>
				                                                                                    @if($winB != null && $winA != null)
				                                                                                    <option value="{{$winB->id_winner_team}}">{{$winB->team_name}}</option>
				                                                                                    <option value="{{$winA->id_runnerup}}">{{$winA->team_rumup}}</option>
				                                                                                    @endif
				                                                                                </select>
				                                                                                @endif

				                                                                                
				                                                                            </div>
				                                                                        </div>
				                                                                    </td>

				                                                                </tr>
				                                                                @endif
				                                                            </tbody>
				                                                        </table>
				                                                    </div>
				                                                </div>

				                                                {{-- 1D - 2C --}}
				                                                <div class="row">
				                                                    <div class="col-md-12">
				                                                        <table class="display table_second_stage">
				                                                            <tbody>
				                                                                 @if($winD == null && $winC)
				                                                                <tr>
				                                                                    
				                                                                    <td style="width: 70%;"></td>
				                                                                </tr>
				                                                                @else
				                                                                <tr>
				                                                                    <td style="width: 70%;">
				                                                                        <div class="row">
				                                                                            <div class="col-md-12">
				                                                                                @if (isset($ss->quarter_6))
				                                                                                    {!! Form::select('WRound1D2C', [
				                                                                                      '' => 'Pick a Team',
				                                                                                      "$winD->id_winner_team" => "$winD->team_name",
				                                                                                      "$winC->id_runnerup" => "$winC->team_rumup",
				                                                                                      ], old('value', isset($ss->quarter_6) ? $ss->quarter_6 : null ), [ 'class' =>  'form-control WRound1D2C', 'required', 'id' => 'WRound1D2C']) !!}
				                                                                                @else
				                                                                                
				                                                                                 <select class="form-control WRound1D2C" id="WRound1D2C" name="WRound1D2C">
				                                                                                    <option>Pick a Team...</option>
				                                                                                    @if($winD != null && $winC != null)
				                                                                                    <option value="{{$winD->id_winner_team}}">{{$winD->team_name}}</option>
				                                                                                    <option value="{{$winC->id_runnerup}}">{{$winC->team_rumup}}</option>
				                                                                                    @endif
				                                                                                </select>
				                                                                                @endif

				                                                                               
				                                                                            </div>
				                                                                        </div>
				                                                                    </td>

				                                                                </tr>
				                                                                @endif
				                                                            </tbody>
				                                                        </table>
				                                                    </div>
				                                                </div>

				                                                {{-- 1F - 2E --}}
				                                                <div class="row">
				                                                    <div class="col-md-12">
				                                                        <table class="display table_second_stage">
				                                                            <tbody>
				                                                                 @if($winF == null && $winE)
				                                                                <tr>
				                                                                    
				                                                                    <td style="width: 70%;"></td>
				                                                                </tr>
				                                                                @else
				                                                                <tr>
				                                                                    <td style="width: 70%;">
				                                                                        <div class="row">
				                                                                            <div class="col-md-12">

				                                                                                @if (isset($ss->quarter_7))
				                                                                                    {!! Form::select('WRound1F2E', [
				                                                                                      '' => 'Pick a Team',
				                                                                                      "$winF->id_winner_team" => "$winF->team_name",
				                                                                                      "$winE->id_runnerup" => "$winE->team_rumup",
				                                                                                      ], old('value', isset($ss->quarter_7) ? $ss->quarter_7 : null ), [ 'class' =>  'form-control WRound1F2E', 'required', 'id' => 'WRound1F2E']) !!}
				                                                                                @else
				                                                                                
				                                                                                <select class="form-control WRound1F2E" id="WRound1F2E" name="WRound1F2E">
				                                                                                    <option>Pick a Team...</option>
				                                                                                    @if($winF != null && $winE != null)
				                                                                                    <option value="{{$winF->id_winner_team}}">{{$winF->team_name}}</option>
				                                                                                    <option value="{{$winE->id_runnerup}}">{{$winE->team_rumup}}</option>
				                                                                                    @endif
				                                                                                </select>
				                                                                                @endif
				                                                                               
				                                                                            </div>
				                                                                        </div>
				                                                                    </td>

				                                                                </tr>
				                                                                @endif
				                                                            </tbody>
				                                                        </table>
				                                                    </div>
				                                                </div>

				                                                {{-- 1H - 2G --}}
				                                                <div class="row">
				                                                    <div class="col-md-12">
				                                                        <table class="display table_second_stage">
				                                                            <tbody>
				                                                                 @if($winH == null && $winG)
				                                                                <tr>
				                                                                    
				                                                                    <td style="width: 70%;"></td>
				                                                                </tr>
				                                                                @else
				                                                                <tr>
				                                                                    <td style="width: 70%;">
				                                                                        <div class="row">
				                                                                            <div class="col-md-12">
				                                                                                 
				                                                                                @if (isset($ss->quarter_8))
				                                                                                    {!! Form::select('WRound1H2G', [
				                                                                                      '' => 'Pick a Team',
				                                                                                      "$winH->id_winner_team" => "$winH->team_name",
				                                                                                      "$winG->id_runnerup" => "$winG->team_rumup",
				                                                                                      ], old('value', isset($ss->quarter_8) ? $ss->quarter_8 : null ), [ 'class' =>  'form-control WRound1H2G', 'required', 'id' => 'WRound1H2G']) !!}
				                                                                                @else
				                                                                                
				                                                                                <select class="form-control WRound1H2G" id="WRound1H2G" name="WRound1H2G">
				                                                                                    <option>Pick a Team...</option>
				                                                                                    @if($winH != null && $winG != null)
				                                                                                    <option value="{{$winH->id_winner_team}}">{{$winH->team_name}}</option>
				                                                                                    <option value="{{$winG->id_runnerup}}">{{$winG->team_rumup}}</option>
				                                                                                    @endif
				                                                                                </select>
				                                                                                @endif

				                                                                                
				                                                                            </div>
				                                                                        </div>
				                                                                    </td>

				                                                                </tr>
				                                                                @endif
				                                                            </tbody>
				                                                        </table>
				                                                    </div>
				                                                </div>

				                                            </div>
				                                        </div>  {{--  end card --}}
				                                    </div> {{--  end col div --}}

				                                    {{-- Semi-finals --}}
				                                    <div class="col-md-2 second_sta">
				                                        <div class="card">
				                                            <div class="card-header-print">
				                                                <div class="row">
				                                                    <div class="col-md-12">
				                                                        <h6>{{ __('Semi-finals') }} </h6>
				                                                    </div>
				                                                </div>
				                                            </div>

				                                            <div class="card-body-print">
				                                                <div class="row">
				                                                    <div class="col-md-12">
				                                                        {{-- 1A - 2B --}}
				                                                        <div class="row">
				                                                            <div class="col-md-12">
				                                                                
				                                                                <table class="display table_second_stage">
				                                                                    <tbody>
				                                                                        <tr>
				                                                                            <td style="width: 70%;">
				                                                                                <div class="row">
				                                                                                    <div class="col-md-12">
				                                                                                        @if (isset($ss->semi_1))
				                                                                                            {!! Form::select('Wquarter1_2', [
				                                                                                            '' => 'Pick a Team',
				                                                                                            "$ss->semi_1" => $ss->semi1->team_name,
				                                                                                            ], old('value', isset($ss->semi_1) ? $ss->semi_1 : null ), [ 'class' =>  'form-control Wquarter1_2', 'required', 'id' => 'Wquarter1_2']) !!}
				                                                                                        @else
				                                                                                        {!! Form::select('Wquarter1_2', [
				                                                                                            '' => 'Pick a Team',
				                                                                                            ], null, [ 'class' =>  'form-control Wquarter1_2', 'required', 'id' => 'Wquarter1_2']) !!}
				                                                                                        @endif
				                                                                                        
				                                                                                    </div>
				                                                                                </div>
				                                                                            </td>
				                                                                        </tr>
				                                                                    </tbody>
				                                                                </table>
				                                                            </div>
				                                                        </div>

				                                                        {{-- 1C - 2D --}}
				                                                        <div class="row">
				                                                            <div class="col-md-12">
				                                                                <table class="display table_second_stage">
				                                                                    <tbody>
				                                                                         
				                                                                        <tr>
				                                                                            <td style="width: 70%;">
				                                                                                <div class="row">
				                                                                                    <div class="col-md-12">
				                                                                                        @if (isset($ss->semi_2))
				                                                                                        {!! Form::select('Wquarter3_4', [
				                                                                                            '' => 'Pick a Team',
				                                                                                            "$ss->semi_2" => $ss->semi2->team_name,
				                                                                                            ], old('value', isset($ss->semi_2) ? $ss->semi_2 : null ), [ 'class' =>  'form-control Wquarter3_4', 'required', 'id' => 'Wquarter3_4']) !!}
				                                                                                        @else
				                                                                                        {!! Form::select('Wquarter3_4', [
				                                                                                            '' => 'Pick a Team',
				                                                                                            ], null, [ 'class' =>  'form-control Wquarter3_4', 'required', 'id' => 'Wquarter3_4']) !!}
				                                                                                        @endif
				                                                                                    </div>
				                                                                                </div>
				                                                                            </td>
				                                                                        </tr>
				                                                                    </tbody>
				                                                                </table>
				                                                            </div>
				                                                        </div>

				                                                        {{-- 1E - 2F --}}
				                                                        <div class="row">
				                                                            <div class="col-md-12">
				                                                                <table class="display table_second_stage">
				                                                                    <tbody>
				                                                                        <tr>
				                                                                            <td style="width: 80%; height: 30px;">
				                                                                                <div class="row">
				                                                                                    <div class="col-md-12">

				                                                                                        @if (isset($ss->semi_3))
				                                                                                            {!! Form::select('Wquarter5_6', [
				                                                                                            '' => 'Pick a Team',
				                                                                                            "$ss->semi_3" => $ss->semi3->team_name,
				                                                                                            ], old('value', isset($ss->semi_3) ? $ss->semi_3 : null ), [ 'class' =>  'form-control Wquarter5_6', 'required', 'id' => 'Wquarter5_6']) !!}
				                                                                                        @else
				                                                                                            {!! Form::select('Wquarter5_6', [
				                                                                                                '' => 'Pick a Team',
				                                                                                                ],null, [ 'class' =>  'form-control Wquarter5_6', 'required', 'id' => 'Wquarter5_6']) !!}
				                                                                                        @endif
				                                                                                        
				                                                                                    </div>
				                                                                                </div>
				                                                                            </td>
				                                                                        </tr>
				                                                                    </tbody>
				                                                                </table>
				                                                            </div>
				                                                        </div>

				                                                        {{-- 1G - 2H --}}
				                                                        <div class="row">
				                                                            <div class="col-md-12">
				                                                                <table class="display table_second_stage">
				                                                                    <tbody>
				                                                                        <tr>
				                                                                            <td style="width: 70%;">
				                                                                                <div class="row">
				                                                                                    <div class="col-md-12">
				                                                                                        @if (isset($ss->semi_4))
				                                                                                            {!! Form::select('Wquarter7_8', [
				                                                                                            '' => 'Pick a Team',
				                                                                                            "$ss->semi_4" => $ss->semi4->team_name,
				                                                                                            ], old('value', isset($ss->semi_4) ? $ss->semi_4 : null ), [ 'class' =>  'form-control Wquarter7_8', 'required', 'id' => 'Wquarter7_8']) !!}
				                                                                                        @else
				                                                                                        {!! Form::select('Wquarter7_8',[
				                                                                                                '' => 'Pick a Team',
				                                                                                                ], null, [ 'class' =>  'form-control Wquarter7_8', 'required', 'id' => 'Wquarter7_8']) !!}
				                                                                                        @endif
				                                                                                        </div>
				                                                                                    </div>
				                                                                                </div>
				                                                                            </td>
				                                                                        </tr>
				                                                                    </tbody>
				                                                                </table>
				                                                            </div>
				                                                        </div>
				                                                    </div>
				                                                </div>
				                                            </div>
				                                        </div>  {{--  end card --}}
				                                    </div> {{--  end col div --}}

				                                    {{-- Semi-finals --}}
				                                    <div class="col-md-2 second_sta">
				                                        <div class="card">
				                                            <div class="card-header-print">
				                                                <div class="row">
				                                                    <div class="col-md-12">
				                                                        <h6>{{ __('Final') }} </h6>
				                                                    </div>
				                                                </div>
				                                            </div>

				                                            <div class="card-body-print">
				                                                <div class="row">
				                                                    <div class="col-md-12">
				                                                        {{-- 1A - 2B --}}
				                                                        <div class="row">
				                                                            <div class="col-md-12">
				                                                                
				                                                                <table class="display table_second_stage">
				                                                                    <tbody>
				                                                                        @if($winA == null && $winA)
				                                                                        <tr>
				                                                                            
				                                                                            <td style="width: 70%;"></td>
				                                                                        </tr>
				                                                                        @else
				                                                                        <tr>
				                                                                            <td style="width: 70%;">
				                                                                                <div class="row">
				                                                                                    <div class="col-md-12">

				                                                                                        @if (isset($ss->final_1))
				                                                                                            {!! Form::select('WSemi1_2', [
				                                                                                            '' => 'Pick a Team',
				                                                                                            "$ss->final_1" => $ss->final1->team_name,
				                                                                                            ], old('value', isset($ss->final_1) ? $ss->final_1 : null ), [ 'class' =>  'form-control WSemi1_2', 'required', 'id' => 'WSemi1_2']) !!}
				                                                                                        @else
				                                                                                        {!! Form::select('WSemi1_2',[
				                                                                                                '' => 'Pick a Team',
				                                                                                                ], null, [ 'class' =>  'form-control WSemi1_2', 'required', 'id' => 'WSemi1_2']) !!}
				                                                                                        @endif

				                                                                                    </div>
				                                                                                </div>
				                                                                            </td>
				                                                                        </tr>
				                                                                        @endif
				                                                                    </tbody>
				                                                                </table>
				                                                            </div>
				                                                        </div>

				                                                        {{-- 1C - 2D --}}
				                                                        <div class="row">
				                                                            <div class="col-md-12">
				                                                                <table class="display table_second_stage">
				                                                                    <tbody>
				                                                                        <tr>
				                                                                            <td style="width: 80%; height: 30px;">
				                                                                                <div class="row">
				                                                                                    <div class="col-md-12">
				                                                                                         
				                                                                                         @if (isset($ss->final_2))
				                                                                                            {!! Form::select('WSemi3_4', [
				                                                                                            '' => 'Pick a Team',
				                                                                                            "$ss->final_2" => $ss->final2->team_name,
				                                                                                            ], old('value', isset($ss->final_2) ? $ss->final_2 : null ), [ 'class' =>  'form-control WSemi3_4', 'required', 'id' => 'WSemi3_4']) !!}
				                                                                                        @else
				                                                                                        {!! Form::select('WSemi3_4',[
				                                                                                                '' => 'Pick a Team',
				                                                                                                ], null, [ 'class' =>  'form-control WSemi3_4', 'required', 'id' => 'WSemi3_4']) !!}
				                                                                                        @endif

				                                                                                    </div>
				                                                                                </div>
				                                                                            </td>
				                                                                        </tr>
				                                                                    </tbody>
				                                                                </table>
				                                                            </div>
				                                                        </div>
				                                                    </div>
				                                                </div>
				                                            </div>
				                                            
				                                        </div>  {{--  end card --}}
				                                    </div> {{--  end col div --}}

				                                    <div class="col-md-3 second_sta">
				                                        <div class="card">
				                                            <div class="card-header-print">
				                                                <div class="row">
				                                                    <div class="col-md-12">
				                                                        <h6>Champion</h6>
				                                                    </div>
				                                                </div>
				                                            </div>

				                                            <div class="card-body-print">
				                                                <div class="row">
				                                                    <div class="col-md-12">
				                                                        
				                                                        <div class="row">
				                                                            <div class="col-md-12">
				                                                                
				                                                                <table class="display table_second_stage">
				                                                                    <tbody>
				                                                                        <tr>
				                                                                            <br>
				                                                                            
				                                                                            <td style="width: 70%;">
				                                                                                <div class="row">
				                                                                                    <div class="col-md-12">

				                                                                                         @if (isset($ss->winner))
				                                                                                            {!! Form::select('Winner1', [
				                                                                                            '' => 'Pick a Team',
				                                                                                            "$ss->winner" => $ss->winner1->team_name,
				                                                                                            ], old('value', isset($ss->winner) ? $ss->winner : null ), [ 'class' =>  'form-control Winner1', 'required', 'id' => 'Winner1']) !!}
				                                                                                        @else
				                                                                                        {!! Form::select('Winner1',[
				                                                                                                '' => 'Pick a Team',
				                                                                                                ], null, [ 'class' =>  'form-control Winner1', 'required', 'id' => 'Winner1']) !!}
				                                                                                        @endif

				                                                                                         
				                                                                                        

				                                                                                    </div>
				                                                                                </div>
				                                                                            </td>
				                                                                        </tr>
				                                                                     </tbody>
				                                                                </table>
				                                                            </div>
				                                                        </div>


				                                                    </div>
				                                                </div>
				                                            </div>
				                                            
				                                        </div>  
				                                    </div>
			                                    </div>
		                                    </div>
		                                </div>
		                            </div>
		                        </div>
                    	</div>
                    </div>

                   
                </div>
            </div>
        </div>
        <br>
     </div>
@endsection


 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>



<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.js"> </script>
<script src="{{URL::asset('js/app.js')}}"></script>
<script src="{{URL::asset('scripts/countdown.js')}}"></script>
@include('admin.partials.js')



