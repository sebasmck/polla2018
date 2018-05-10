@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 title_polla">
                <img src="{{ asset('img/logo.png') }}" style="height: 100px;">
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

                    
                    <div class="card-body">
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

		                                            <table id="myTable" class="display table_picks" style="width: 100%;">
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
		                                                                        <label class="label_team">Russia</label>
		                                                                    </div>
		                                                                    
		                                                                    <div class="col-md-4">
		                                                                        <div class="pikcs">
		                                                                            <input type="text" name="M1A1" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M1A1" onblur="match_games()" value="{{ old('M1A1',  isset($ga->M1A1) ? $ga->M1A1 : null) }}">
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
		                                                                        <div class="pikcs">
		                                                                            <input type="text" name="M1A2" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M1A2" onblur="match_games()" value="{{ old('M1A2',  isset($ga->M1A2) ? $ga->M1A2 : null) }}">
		                                                                        </div>
		                                                                    </div>
		                                                                    <div class="col-md-8 team_right">
		                                                                        <label class="label_team">Saudi Arabia</label>
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
		                                                                        <label class="label_team">Egypt</label>
		                                                                    </div>
		                                                                    <div class="col-md-4">
		                                                                        <div class="pikcs">
		                                                                            <input type="text" name="M2A3" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M2A3" onblur="match_games()" value="{{ old('M2A3',  isset($ga->M2A3) ? $ga->M2A3 : null) }}">
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
		                                                                        <div class="pikcs">
		                                                                            <input type="text" name="M2A4" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M2A4" onblur="match_games()" value="{{ old('M1A2',  isset($ga->M1A2) ? $ga->M1A2 : null) }}">
		                                                                        </div>
		                                                                    </div>
		                                                                    <div class="col-md-8 team_right">
		                                                                        <label class="label_team">Uruguay</label>
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
		                                                                        <label class="label_team">Russia</label>
		                                                                    </div>
		                                                                    <div class="col-md-4">
		                                                                        <div class="pikcs">
		                                                                            <input type="text" name="M3A1" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M3A1" onblur="match_games()" value="{{ old('M3A1',  isset($ga->M3A1) ? $ga->M3A1 : null) }}">
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
		                                                                        <div class="pikcs">
		                                                                            <input type="text" name="M3A3" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M3A3" onblur="match_games()" value="{{ old('M3A3',  isset($ga->M3A3) ? $ga->M3A3 : null) }}">
		                                                                        </div>
		                                                                    </div>
		                                                                    <div class="col-md-8 team_right">
		                                                                        <label class="label_team">Egypt</label>
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
		                                                                        <label class="label_team">Uruguay</label>
		                                                                    </div>
		                                                                   
		                                                                    <div class="col-md-4">
		                                                                        <div class="pikcs">
		                                                                            <input type="text" name="M4A4" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M4A4" onblur="match_games()" value="{{ old('M4A4',  isset($ga->M4A4) ? $ga->M4A4 : null) }}">
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
		                                                                        <div class="pikcs">
		                                                                            <input type="text" name="M4A2" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M4A2" onblur="match_games()" value="{{ old('M4A2',  isset($ga->M4A2) ? $ga->M4A2 : null) }}">
		                                                                        </div>
		                                                                    </div>
		                                                                    <div class="col-md-8 team_right">
		                                                                        <label class="label_team">Saudi Arabia</label>
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
		                                                                        <label class="label_team">Uruguay</label>
		                                                                    </div>
		                                                                    <div class="col-md-4">
		                                                                        <div class="pikcs">
		                                                                            <input type="text" name="M5A4" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M5A4" onblur="match_games()" value="{{ old('M5A4',  isset($ga->M5A4) ? $ga->M5A4 : null) }}">
		                                                                        </div>
		                                                                    </div>
		                                                                </div>
		                                                            </td>
		                                                           
		                                                            <td>
		                                                                <div class="row">
		                                                                    <div class="col-md-4">
		                                                                        <div class="pikcs">
		                                                                            <input type="text" name="M5A1" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M5A1" onblur="match_games()" value="{{ old('M5A1',  isset($ga->M5A1) ? $ga->M5A1 : null) }}">
		                                                                        </div>
		                                                                    </div>
		                                                                    <div class="col-md-8 team_right">
		                                                                        <label class="label_team">Russia</label>
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
		                                                                        <label class="label_team">Saudi Arabia</label>
		                                                                    </div>
		                                                                    <div class="col-md-4">
		                                                                        <div class="pikcs">
		                                                                            <input type="text" name="M6A2" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M6A2" onblur="match_games()" value="{{ old('M6A2',  isset($ga->M6A2) ? $ga->M6A2 : null) }}">
		                                                                        </div>
		                                                                    </div>
		                                                                </div>
		                                                            </td>
		                                                            <td>
		                                                                <div class="row">
		                                                                    <div class="col-md-4">
		                                                                        <div class="pikcs">
		                                                                            <input type="text" name="M6A3" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M6A3" onblur="match_games()" value="{{ old('M6A3',  isset($ga->M6A3) ? $ga->M6A3 : null) }}">
		                                                                        </div>
		                                                                    </div>
		                                                                    <div class="col-md-8 team_right">
		                                                                        <label class="label_team">Egypt</label>
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
			                                    
			                                        <table id="myTable" class="display table_picks" style="width: 100%;">
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
			                                                                    <label class="label_team">Portugal</label>
			                                                                </div>
			                                                                <div class="col-md-4">
			                                                                    <div class="pikcs">
			                                                                        <input type="text" name="M1B1" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M1B1" onblur="match_games_B()" value="{{ old('M1B1',  isset($gb->M1B1) ? $gb->M1B1 : null) }}">
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
			                                                                    <div class="pikcs">
			                                                                        <input type="text" name="M1B2" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M1B2" onblur="match_games_B()" value="{{ old('M1B2',  isset($gb->M1B2) ? $gb->M1B2 : null) }}">
			                                                                    </div>
			                                                                </div>
			                                                                <div class="col-md-8 team_right">
			                                                                    <label class="label_team">Spain</label>
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
			                                                                    <label class="label_team">Morocco</label>
			                                                                </div>
			                                                                <div class="col-md-4">
			                                                                    <div class="pikcs">
			                                                                        <input type="text" name="M2B3" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M2B3" onblur="match_games_B()" value="{{ old('M2B3',  isset($gb->M2B3) ? $gb->M2B3 : null) }}">
			                                                                    </div>
			                                                                </div>
			                                                            </div>
			                                                        </td>

			                                                        <td>
			                                                            <div class="row">
			                                                                <div class="col-md-4">
			                                                                    <div class="pikcs">
			                                                                        <input type="text" name="M2B4" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M2B4" onblur="match_games_B()" value="{{ old('M2B4',  isset($gb->M2B4) ? $gb->M2B4 : null) }}">
			                                                                    </div>
			                                                                </div>
			                                                                <div class="col-md-8 team_right">
			                                                                    <label class="label_team">Iran</label>
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
			                                                                    <label class="label_team">Portugal</label>
			                                                                </div>
			                                                                <div class="col-md-4">
			                                                                    <div class="pikcs">
			                                                                        <input type="text" name="M3B1" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M3B1" onblur="match_games_B()" value="{{ old('M3B1',  isset($gb->M3B1) ? $gb->M3B1 : null) }}">
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
			                                                                    <div class="pikcs">
			                                                                        <input type="text" name="M3B3" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M3B3" onblur="match_games_B()" value="{{ old('M3B3',  isset($gb->M3B3) ? $gb->M3B3 : null) }}">
			                                                                    </div>
			                                                                </div>
			                                                                <div class="col-md-8 team_right">
			                                                                    <label class="label_team">Morocco</label>
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
			                                                                    <label class="label_team">Iran</label>
			                                                                </div>
			                                                                <div class="col-md-4">
			                                                                    <div class="pikcs">
			                                                                        <input type="text" name="M4B4" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M4B4" onblur="match_games_B()" value="{{ old('M4B4',  isset($gb->M4B4) ? $gb->M4B4 : null) }}">
			                                                                    </div>
			                                                                </div>
			                                                            </div>
			                                                        </td>
			                                                        <td>
			                                                            <div class="row">
			                                                                <div class="col-md-4">
			                                                                    <div class="pikcs">
			                                                                        <input type="text" name="M4B2" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M4B2" onblur="match_games_B()" value="{{ old('M4B2',  isset($gb->M4B2) ? $gb->M4B2 : null) }}">
			                                                                    </div>
			                                                                </div>
			                                                                <div class="col-md-8 team_right">
			                                                                    <label class="label_team">Spain</label>
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
			                                                                    <label class="label_team">Iran</label>
			                                                                </div>
			                                                                <div class="col-md-4">
			                                                                    <div class="pikcs">
			                                                                        <input type="text" name="M5B4" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M5B4" onblur="match_games_B()" value="{{ old('M5B4',  isset($gb->M5B4) ? $gb->M5B4 : null) }}">
			                                                                    </div>
			                                                                </div>
			                                                            </div>
			                                                        </td>
			                                                        <td>
			                                                            <div class="row">
			                                                                <div class="col-md-4">
			                                                                    <div class="pikcs">
			                                                                        <input type="text" name="M5B1" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M5B1" onblur="match_games_B()" value="{{ old('M5B1',  isset($gb->M5B1) ? $gb->M5B1 : null) }}">
			                                                                    </div>
			                                                                </div>
			                                                                <div class="col-md-8 team_right">
			                                                                    <label class="label_team">Portugal</label>
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
			                                                                    <label class="label_team">Spain</label>
			                                                                </div>
			                                                                <div class="col-md-4">
			                                                                    <div class="pikcs">
			                                                                        <input type="text" name="M6B2" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M6B2" onblur="match_games_B()" value="{{ old('M6B2',  isset($gb->M6B2) ? $gb->M6B2 : null) }}">
			                                                                    </div>
			                                                                </div>
			                                                            </div>
			                                                        </td>
			                                                        <td>
			                                                            <div class="row">
			                                                                <div class="col-md-4">
			                                                                    <div class="pikcs">
			                                                                        <input type="text" name="M6B3" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M6B3" onblur="match_games_B()" value="{{ old('M6B3',  isset($gb->M6B3) ? $gb->M6B3 : null) }}"> 
			                                                                    </div>
			                                                                </div>
			                                                                <div class="col-md-8 team_right">
			                                                                    <label class="label_team">Morocco</label>
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
        <br>
     </div>
@endsection


 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>



<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.js"> </script>
<script src="{{URL::asset('js/app.js')}}"></script>
<script src="{{URL::asset('scripts/countdown.js')}}"></script>
@include('admin.partials.js')



