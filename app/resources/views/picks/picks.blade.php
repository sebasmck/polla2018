@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 title_polla">
                <img src="{{ asset('img/logo.png') }}" style="height: 150px;">
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-8">
                                <h4>{{ __('My Picks') }} </h4>
                            </div>
                            <div class="col-md-4">
                                <h4 class="nickname_pool">Pool Nickname: {{$poll->poll_name}} </h4>
                            </div>
                        </div>                        
                        
                    </div>

                    


                    {{-- <div class="card-body maincontainers"> --}}

                    <div class="card-body">

                        <ul class="nav nav-tabs" id="myTab">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#grupoa" id="idgrupoa">Group A</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#grupob" id="idgrupob">Group B</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#grupoc" id="idgrupoc">Group C</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#grupod" id="idgrupod">Group D</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#grupoe" id="idgrupoe">Group E</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#grupof" id="idgrupof">Group F</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#grupog" id="idgrupog">Group G</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#grupoh" id="idgrupoh">Group H</a>
                            </li>
                             <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#grupoRoun" id="idgrupoRoun">Second Stage</a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">

                            {{-- GRUPO A --}}
                            <div class="tab-pane active container" id="grupoa">
                                <br>
                                <ul style="line-height:80%">
                                    <li><p>  Make sure to click on “Save and go to Next Group” or “Save and go to Home Page” after you have made your Score and Winners selections.</p></li>
                                    <li>
                                        <p>You have to completely fill out the Score and the Winners selections.</p>
                                    </li>    
                                </ul>
                                
                                <div class="row">
                                    <div class="col-12 col-md-7">
                                        <div class="card">
                                            <div class="card-header">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <h4>{{ __('Group A') }} </h4>
                                                    </div>
                                                </div>
                                            </div>
                                        
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-12 table-responsive">

                                                    {{-- FORM GROUP A --}}
                                                        <form name="groupa" id="groupa"> 
                                                            {{ csrf_field() }}

                                                            <input type="hidden" name="group_name" value="Group A">

                                                            <input type="hidden" name="id_fase" value="1">

                                                            <input type="hidden" name="id_poll" value="{{$poll->iduser_poll}}">

                                                            <table id="myTable" class="display table_picks">
                                                                    <thead>
                                                                        <tr>
                                                                            <th class="th-date">Date</th>
                                                                            <th class="th-venue">Venue</th>
                                                                            <th>1st Team</th>
                                                                            {{-- <th></th> --}}
                                                                            <th>2st Team</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr class="A1-A2">
                                                                            <td class="td-date">
                                                                                <div class="col-md-12 div-table-padding">
                                                                                     6/14/2018
                                                                                </div>
                                                                            </td>
                                                                            <td class="td-venue">
                                                                                <div class="col-md-12 div-table-padding">
                                                                                    Moscow
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-5 team_left">
                                                                                        <label class="label_team">Russia</label>
                                                                                    </div>
                                                                                    <div class="col-md-3 div-flag">
                                                                                        <img class="img_flags" src="{{asset('img/flags/russia.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <div class="pikcs">
                                                                                            <input type="text" name="M1A1" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M1A1" onblur="match_games()" value="{{ old('M1A1',  isset($ga->M1A1) ? $ga->M1A1 : null) }}" required>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                           {{--  <td>
                                                                                V
                                                                            </td> --}}
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-3">
                                                                                        <div class="pikcs">
                                                                                            <input type="text" name="M1A2" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M1A2" onblur="match_games()" value="{{ old('M1A2',  isset($ga->M1A2) ? $ga->M1A2 : null) }}" required>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-3 div-flag">
                                                                                        <img class="img_flags" src="{{asset('img/flags/saudi_arabia.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-5 team_right">
                                                                                        <label class="label_team">Saudi Arabia</label>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr class="A3-A4">
                                                                            <td class="td-date">
                                                                                <div class="col-md-12 div-table-padding">
                                                                                    6/15/2018
                                                                                </div>
                                                                            </td>
                                                                            <td class="td-venue">
                                                                                <div class="col-md-12 div-table-padding">
                                                                                    Ekaterinburg
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-5 team_left">
                                                                                        <label class="label_team">Egypt</label>
                                                                                    </div>
                                                                                    <div class="col-md-3 div-flag">
                                                                                        <img class="img_flags" src="{{asset('img/flags/egypt.png')}}" >
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <div class="pikcs">
                                                                                            <input type="text" name="M2A3" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M2A3" onblur="match_games()" value="{{ old('M2A3',  isset($ga->M2A3) ? $ga->M2A3 : null) }}" required>
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
                                                                                    <div class="col-md-3">
                                                                                        <div class="pikcs">
                                                                                            <input type="text" name="M2A4" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M2A4" onblur="match_games()" value="{{ old('M1A2',  isset($ga->M1A2) ? $ga->M1A2 : null) }}" required>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-3 div-flag">
                                                                                        <img class="img_flags" src="{{asset('img/flags/uruguay.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-5 team_right">
                                                                                        <label class="label_team">Uruguay</label>
                                                                                    </div>
                                                                                    
                                                                                    
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr class="A1-A3">
                                                                            </td>
                                                                            <td class="td-date">
                                                                                <div class="col-md-12 div-table-padding">
                                                                                    6/19/2018
                                                                                </div>
                                                                            </td>
                                                                            <td class="td-venue">
                                                                                <div class="col-md-12 div-table-padding">
                                                                                    Saint Petersburg
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-5 team_left">
                                                                                        <label class="label_team">Russia</label>
                                                                                    </div>
                                                                                    <div class="col-md-3 div-flag">
                                                                                        <img class="img_flags" src="{{asset('img/flags/russia.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <div class="pikcs">
                                                                                            <input type="text" name="M3A1" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M3A1" onblur="match_games()" value="{{ old('M3A1',  isset($ga->M3A1) ? $ga->M3A1 : null) }}" required>
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
                                                                                    <div class="col-md-3">
                                                                                        <div class="pikcs">
                                                                                            <input type="text" name="M3A3" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M3A3" onblur="match_games()" value="{{ old('M3A3',  isset($ga->M3A3) ? $ga->M3A3 : null) }}" required >
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-3 div-flag">
                                                                                        <img class="img_flags" src="{{asset('img/flags/egypt.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-5 team_right">
                                                                                        <label class="label_team">Egypt</label>
                                                                                    </div>
                                                                                    
                                                                                    
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr class="A4-A2">
                                                                            <td class="td-date">
                                                                                <div class="col-md-12 div-table-padding">
                                                                                    6/20/2018
                                                                                </div>
                                                                            </td>
                                                                            <td class="td-venue">
                                                                                <div class="col-md-12 div-table-padding">
                                                                                    Rostov-on-Don
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-5 team_left">
                                                                                        <label class="label_team">Uruguay</label>
                                                                                    </div>
                                                                                    <div class="col-md-3 div-flag">
                                                                                        <img class="img_flags" src="{{asset('img/flags/uruguay.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <div class="pikcs">
                                                                                            <input type="text" name="M4A4" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M4A4" onblur="match_games()" value="{{ old('M4A4',  isset($ga->M4A4) ? $ga->M4A4 : null) }}" required>
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
                                                                                    <div class="col-md-3">
                                                                                        <div class="pikcs">
                                                                                            <input type="text" name="M4A2" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M4A2" onblur="match_games()" value="{{ old('M4A2',  isset($ga->M4A2) ? $ga->M4A2 : null) }}" required>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-3 div-flag">
                                                                                        <img class="img_flags" src="{{asset('img/flags/saudi_arabia.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-5 team_right">
                                                                                        <label class="label_team">Saudi Arabia</label>
                                                                                    </div>
                                                                                    
                                                                                    
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr class="A4-A1">
                                                                            <td class="td-date"> 
                                                                                <div class="col-md-12 div-table-padding">
                                                                                    6/25/2018
                                                                                </div>
                                                                            </td>
                                                                            <td class="td-venue">
                                                                                <div class="col-md-12 div-table-padding">
                                                                                    Samara
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-5 team_left">
                                                                                        <label class="label_team">Uruguay</label>
                                                                                    </div>
                                                                                    <div class="col-md-3 div-flag">
                                                                                        <img class="img_flags" src="{{asset('img/flags/uruguay.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <div class="pikcs">
                                                                                            <input type="text" name="M5A4" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M5A4" onblur="match_games()" value="{{ old('M5A4',  isset($ga->M5A4) ? $ga->M5A4 : null) }}" required>
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
                                                                                    <div class="col-md-3">
                                                                                        <div class="pikcs">
                                                                                            <input type="text" name="M5A1" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M5A1" onblur="match_games()" value="{{ old('M5A1',  isset($ga->M5A1) ? $ga->M5A1 : null) }}" required>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-3 div-flag">
                                                                                        <img class="img_flags" src="{{asset('img/flags/russia.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-5 team_right">
                                                                                        <label class="label_team">Russia</label>
                                                                                    </div>
                                                                                    
                                                                                    
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr class="A2-A3">
                                                                            <td class="td-date">
                                                                                <div class="col-md-12 div-table-padding">
                                                                                    6/25/2018
                                                                                </div>
                                                                            </td>
                                                                            <td class="td-venue">
                                                                                <div class="col-md-12 div-table-padding">
                                                                                    Volgograd
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-5 team_left">
                                                                                        <label class="label_team">Saudi Arabia</label>
                                                                                    </div>
                                                                                    <div class="col-md-3 div-flag">
                                                                                        <img class="img_flags" src="{{asset('img/flags/saudi_arabia.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <div class="pikcs">
                                                                                            <input type="text" name="M6A2" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M6A2" onblur="match_games()" value="{{ old('M6A2',  isset($ga->M6A2) ? $ga->M6A2 : null) }}"  required >
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
                                                                                    <div class="col-md-3">
                                                                                        <div class="pikcs">
                                                                                            <input type="text" name="M6A3" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M6A3" onblur="match_games()" value="{{ old('M6A3',  isset($ga->M6A3) ? $ga->M6A3 : null) }}" required >
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-3 div-flag">
                                                                                        <img class="img_flags" src="{{asset('img/flags/egypt.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-5 team_right">
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
                                        </div>  {{--  end card --}}
                                    </div> {{--  end col div --}}
                                    <div class="col-12 col-md-5">
                                        {{-- Group Standings --}}
                                        <div class="row justify-content-center">
                                            <div class="col-md-12">
                                                <div class="card">
                                                    <div class="card-header"><h4>{{ __('Group Standings') }}</h4></div>

                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-md-12 table-responsive">
                                                        
                                                                <table id="Standings1" class="display table_picks">
                                                                    <thead>
                                                                        <tr>
                                                                            <th style="width: 20%;"></th>

                                                                            <th style="width: 5%;">P</th>
                                                                            <th style="width: 5%;">W</th>
                                                                            <th style="width: 5%;">D</th>
                                                                            <th style="width: 5%;">L</th>
                                                                            <th style="width: 5%;">F</th>
                                                                            <th style="width: 5%;">A</th>
                                                                            <th style="width: 5%;">GD</th>
                                                                            <th style="width: 5%;">PTS</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <img class="img_flags" src="{{asset('img/flags/russia.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-8">
                                                                                        <label class="label_team">Russia</label>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td id="AP1"></td>
                                                                            <td id="AW1"></td>
                                                                            <td id="AD1"></td>
                                                                            <td id="AL1"></td>
                                                                            <td id="AF1"></td>
                                                                            <td id="AA1"></td>
                                                                            <td id="AGD1"></td>
                                                                            <td id="APTS1"></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <img class="img_flags" src="{{asset('img/flags/uruguay.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-8">
                                                                                        <label class="label_team">Uruguay</label>
                                                                                    </div>
                                                                                </div></td>
                                                                            <td id="AP4"></td>
                                                                            <td id="AW4"></td>
                                                                            <td id="AD4"></td>
                                                                            <td id="AL4"></td>
                                                                            <td id="AF4"></td>
                                                                            <td id="AA4"></td>
                                                                            <td id="AGD4"></td>
                                                                            <td id="APTS4"></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <img class="img_flags" src="{{asset('img/flags/saudi_arabia.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-8">
                                                                                        <label class="label_team">Saudi Arabia</label>
                                                                                    </div>
                                                                                </div></td>
                                                                            <td id="AP2"></td>
                                                                            <td id="AW2"></td>
                                                                            <td id="AD2"></td>
                                                                            <td id="AL2"></td>
                                                                            <td id="AF2"></td>
                                                                            <td id="AA2"></td>
                                                                            <td id="AGD2"></td>
                                                                            <td id="APTS2"></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <img class="img_flags" src="{{asset('img/flags/egypt.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-8">
                                                                                         <label class="label_team">Egypt</label>
                                                                                    </div>
                                                                                </div></td>
                                                                            <td id="AP3"></td>
                                                                            <td id="AW3"></td>
                                                                            <td id="AD3"></td>
                                                                            <td id="AL3"></td>
                                                                            <td id="AF3"></td>
                                                                            <td id="AA3"></td>
                                                                            <td id="AGD3"></td>
                                                                            <td id="APTS3"></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div style="height: 8px;"></div>

                                        {{-- Winners --}}
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <h4>{{ __('Winners') }} </h4>
                                                            </div>
                                                        </div>
                                                        
                                                        
                                                    </div>

                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group row">
                                                                            <div class="col-md-12">Group A winner</div>
                                                                            {!! Form::select('WA1', [
                                                                                  '' => 'Pick a Team',
                                                                                 '1' => 'Russia',
                                                                                 '3' => 'Saudi Arabia',
                                                                                 '4' => 'Egypt',
                                                                                 '2' => 'Uruguay',
                                                                                 ], old('value', isset($wa->id_winner_team) ? $wa->id_winner_team : null ), [ 'class' =>  'form-control', 'required', 'id' => 'WA1']) !!}

                                                                        </div>

                                                                            
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group row">
                                                                            <div class="col-md-12">Group A runner-up</div>
                                                                            {!! Form::select('WA2', [
                                                                                  '' => 'Pick a Team',
                                                                                 '1' => 'Russia',
                                                                                 '3' => 'Saudi Arabia',
                                                                                 '4' => 'Egypt',
                                                                                 '2' => 'Uruguay',
                                                                                 ], old('value', isset($wa->id_runnerup) ? $wa->id_runnerup : null ), [ 'class' =>  'form-control', 'required', 'id' => 'WA2']) !!}
                                                                        </div>
                                                                            
                                                                    </div>
                                                                </div>    
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>  {{--  end card --}}
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-6">
                                         <button type="button" name="submitgroupahome" id="submitgroupahome" class="btn btn-primary" style="width: 100%;">
                                            {{ __('Save and go to Home Page') }}
                                        </button>
                                    </div>
                                    <div class="col-md-6">

                                        <input type="button" name="submitgroupa" id="submitgroupa" class="btn btn-info btn-block" value="Save and go to Next Group" />
                                         {{-- <button type="submit" class="btn btn-primary" style="width: 100%;">
                                            {{ __('Save and go to Next Group') }} --}}
                                        </button>
                                    </div>
                                </div>
                            </div>

                            </form>

    

                            {{-- GRUPO B FORM --}}


                            <div class="tab-pane container" id="grupob">
                                <br>
                                <ul style="line-height:80%">
                                    <li><p>  Make sure to click on “Save and go to Next Group” or “Save and go to Home Page” after you have made your Score and Winners selections.</p></li>
                                    <li>
                                        <p>You have to completely fill out the Score and the Winners selections.</p>
                                    </li>    
                                </ul>
                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="card">
                                            <div class="card-header">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <h4>{{ __('Group B') }} </h4>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-12 table-responsive">

                                                        <form name="groupb" id="groupb"> 
                                                            {{ csrf_field() }}

                                                            <input type="hidden" name="group_name" value="Group B">

                                                            <input type="hidden" name="id_fase" value="2">

                                                            <input type="hidden" name="id_poll" value="{{$poll->iduser_poll}}"> 
                                                        
                                                            <table id="myTable" class="display table_picks">
                                                                    <thead>
                                                                        <tr>
                                                                            <th class="th-date">Date</th>
                                                                            <th class="th-venue">Venue</th>
                                                                            <th>1st Team</th>
                                                                            {{-- <th></th> --}}
                                                                            <th>2st Team</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr class="A1-A2">
                                                                            <td class="td-date">
                                                                                <div class="col-md-12 div-table-padding">
                                                                                     6/15/2018
                                                                                </div>
                                                                            </td>
                                                                            <td class="td-venue">
                                                                                <div class="col-md-12 div-table-padding">
                                                                                    Sochi
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-5 team_left">
                                                                                        <label class="label_team">Portugal</label>
                                                                                    </div>
                                                                                    <div class="col-md-3 div-flag">
                                                                                        <img class="img_flags" src="{{asset('img/flags/portugal.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-3">
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
                                                                                    <div class="col-md-3">
                                                                                        <div class="pikcs">
                                                                                            <input type="text" name="M1B2" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M1B2" onblur="match_games_B()" value="{{ old('M1B2',  isset($gb->M1B2) ? $gb->M1B2 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-3 div-flag">
                                                                                        <img class="img_flags" src="{{asset('img/flags/spain.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-5 team_right">
                                                                                        <label class="label_team">Spain</label>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr class="A3-A4">
                                                                            <td class="td-date">
                                                                                <div class="col-md-12 div-table-padding">
                                                                                    6/15/2018
                                                                                </div>
                                                                            </td>
                                                                            <td class="td-venue">
                                                                                <div class="col-md-12 div-table-padding">
                                                                                    Saint Petersburg
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-5 team_left">
                                                                                        <label class="label_team">Morocco</label>
                                                                                    </div>
                                                                                    <div class="col-md-3 div-flag">
                                                                                        <img class="img_flags" src="{{asset('img/flags/morocco.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <div class="pikcs">
                                                                                            <input type="text" name="M2B3" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M2B3" onblur="match_games_B()" value="{{ old('M2B3',  isset($gb->M2B3) ? $gb->M2B3 : null) }}">
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
                                                                                    <div class="col-md-3">
                                                                                        <div class="pikcs">
                                                                                            <input type="text" name="M2B4" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M2B4" onblur="match_games_B()" value="{{ old('M2B4',  isset($gb->M2B4) ? $gb->M2B4 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-3 div-flag">
                                                                                        <img class="img_flags" src="{{asset('img/flags/iran.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-5 team_right">
                                                                                        <label class="label_team">Iran</label>
                                                                                    </div>
                                                                                    
                                                                                    
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr class="A1-A3">
                                                                            </td>
                                                                            <td class="td-date">
                                                                                <div class="col-md-12 div-table-padding">
                                                                                    6/20/2018
                                                                                </div>
                                                                            </td>
                                                                            <td class="td-venue">
                                                                                <div class="col-md-12 div-table-padding">
                                                                                    Moscow
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-5 team_left">
                                                                                        <label class="label_team">Portugal</label>
                                                                                    </div>
                                                                                    <div class="col-md-3 div-flag">
                                                                                        <img class="img_flags" src="{{asset('img/flags/portugal.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-3">
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
                                                                                    <div class="col-md-3">
                                                                                        <div class="pikcs">
                                                                                            <input type="text" name="M3B3" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M3B3" onblur="match_games_B()" value="{{ old('M3B3',  isset($gb->M3B3) ? $gb->M3B3 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-3 div-flag">
                                                                                        <img class="img_flags" src="{{asset('img/flags/morocco.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-5 team_right">
                                                                                        <label class="label_team">Morocco</label>
                                                                                    </div>
                                                                                    
                                                                                    
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr class="A4-A2">
                                                                            <td class="td-date">
                                                                                <div class="col-md-12 div-table-padding">
                                                                                    6/20/2018
                                                                                </div>
                                                                            </td>
                                                                            <td class="td-venue">
                                                                                <div class="col-md-12 div-table-padding">
                                                                                    Kazan
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-5 team_left">
                                                                                        <label class="label_team">Iran</label>
                                                                                    </div>
                                                                                    <div class="col-md-3 div-flag">
                                                                                        <img class="img_flags" src="{{asset('img/flags/iran.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <div class="pikcs">
                                                                                            <input type="text" name="M4B4" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M4B4" onblur="match_games_B()" value="{{ old('M4B4',  isset($gb->M4B4) ? $gb->M4B4 : null) }}">
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
                                                                                    <div class="col-md-3">
                                                                                        <div class="pikcs">
                                                                                            <input type="text" name="M4B2" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M4B2" onblur="match_games_B()" value="{{ old('M4B2',  isset($gb->M4B2) ? $gb->M4B2 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-3 div-flag">
                                                                                        <img class="img_flags" src="{{asset('img/flags/spain.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-5 team_right">
                                                                                        <label class="label_team">Spain</label>
                                                                                    </div>
                                                                                    
                                                                                    
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr class="A4-A1">
                                                                            <td class="td-date"> 
                                                                                <div class="col-md-12 div-table-padding">
                                                                                    6/25/2018
                                                                                </div>
                                                                            </td>
                                                                            <td class="td-venue">
                                                                                <div class="col-md-12 div-table-padding">
                                                                                    Saransk
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-5 team_left">
                                                                                        <label class="label_team">Iran</label>
                                                                                    </div>
                                                                                    <div class="col-md-3 div-flag">
                                                                                        <img class="img_flags" src="{{asset('img/flags/iran.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <div class="pikcs">
                                                                                            <input type="text" name="M5B4" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M5B4" onblur="match_games_B()" value="{{ old('M5B4',  isset($gb->M5B4) ? $gb->M5B4 : null) }}">
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
                                                                                    <div class="col-md-3">
                                                                                        <div class="pikcs">
                                                                                            <input type="text" name="M5B1" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M5B1" onblur="match_games_B()" value="{{ old('M5B1',  isset($gb->M5B1) ? $gb->M5B1 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-3 div-flag">
                                                                                        <img class="img_flags" src="{{asset('img/flags/portugal.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-5 team_right">
                                                                                        <label class="label_team">Portugal</label>
                                                                                    </div>
                                                                                    
                                                                                    
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr class="A2-A3">
                                                                            <td class="td-date">
                                                                                <div class="col-md-12 div-table-padding">
                                                                                    6/25/2018
                                                                                </div>
                                                                            </td>
                                                                            <td class="td-venue">
                                                                                <div class="col-md-12 div-table-padding">
                                                                                    Kaliningrad
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-5 team_left">
                                                                                        <label class="label_team">Spain</label>
                                                                                    </div>
                                                                                    <div class="col-md-3 div-flag">
                                                                                        <img class="img_flags" src="{{asset('img/flags/spain.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <div class="pikcs">
                                                                                            <input type="text" name="M6B2" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M6B2" onblur="match_games_B()" value="{{ old('M6B2',  isset($gb->M6B2) ? $gb->M6B2 : null) }}">
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
                                                                                    <div class="col-md-3">
                                                                                        <div class="pikcs">
                                                                                            <input type="text" name="M6B3" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M6B3" onblur="match_games_B()" value="{{ old('M6B3',  isset($gb->M6B3) ? $gb->M6B3 : null) }}"> 
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-3 div-flag">
                                                                                        <img class="img_flags" src="{{asset('img/flags/morocco.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-5 team_right">
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
                                        </div>  {{--  end card --}}
                                    </div> {{--  end col div --}}
                                    <div class="col-md-5">
                                        {{-- Group Standings --}}
                                        <div class="row justify-content-center">
                                            <div class="col-md-12">
                                                <div class="card">
                                                    <div class="card-header"><h4>{{ __('Group Standings') }}</h4></div>

                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-md-12 table-responsive">
                                                        
                                                                <table id="Standings2" class="display table_picks">
                                                                    <thead>
                                                                        <tr>
                                                                            <th style="width: 20%;"></th>

                                                                            <th style="width: 5%;">P</th>
                                                                            <th style="width: 5%;">W</th>
                                                                            <th style="width: 5%;">D</th>
                                                                            <th style="width: 5%;">L</th>
                                                                            <th style="width: 5%;">F</th>
                                                                            <th style="width: 5%;">A</th>
                                                                            <th style="width: 5%;">GD</th>
                                                                            <th style="width: 5%;">PTS</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <img class="img_flags" src="{{asset('img/flags/portugal.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-8">
                                                                                        <label class="label_team">Portugal</label>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td id="BP1"></td>
                                                                            <td id="BW1"></td>
                                                                            <td id="BD1"></td>
                                                                            <td id="BL1"></td>
                                                                            <td id="BF1"></td>
                                                                            <td id="BA1"></td>
                                                                            <td id="BGD1"></td>
                                                                            <td id="BPTS1"></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <img class="img_flags" src="{{asset('img/flags/iran.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-8">
                                                                                        <label class="label_team">Iran</label>
                                                                                    </div>
                                                                                </div></td>
                                                                            <td id="BP4"></td>
                                                                            <td id="BW4"></td>
                                                                            <td id="BD4"></td>
                                                                            <td id="BL4"></td>
                                                                            <td id="BF4"></td>
                                                                            <td id="BA4"></td>
                                                                            <td id="BGD4"></td>
                                                                            <td id="BPTS4"></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <img class="img_flags" src="{{asset('img/flags/spain.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-8">
                                                                                        <label class="label_team">Spain</label>
                                                                                    </div>
                                                                                </div></td>
                                                                            <td id="BP2"></td>
                                                                            <td id="BW2"></td>
                                                                            <td id="BD2"></td>
                                                                            <td id="BL2"></td>
                                                                            <td id="BF2"></td>
                                                                            <td id="BA2"></td>
                                                                            <td id="BGD2"></td>
                                                                            <td id="BPTS2"></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <img class="img_flags" src="{{asset('img/flags/Morocco.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-8">
                                                                                        <label class="label_team">Morocco</label>
                                                                                    </div>
                                                                                </div></td>
                                                                            <td id="BP3"></td>
                                                                            <td id="BW3"></td>
                                                                            <td id="BD3"></td>
                                                                            <td id="BL3"></td>
                                                                            <td id="BF3"></td>
                                                                            <td id="BA3"></td>
                                                                            <td id="BGD3"></td>
                                                                            <td id="BPTS3"></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div style="height: 8px;"></div>

                                        {{-- Winners --}}
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <h4>{{ __('Winners') }} </h4>
                                                            </div>
                                                        </div>
                                                        
                                                        
                                                    </div>

                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group row">
                                                                            <div class="col-md-12">Group B winner</div>
                                                                            {!! Form::select('WB1', [
                                                                                  '' => 'Pick a Team',
                                                                                 '5' => 'Portugal',
                                                                                 '7' => 'Spain',
                                                                                 '8' => 'Morocco',
                                                                                 '6' => 'Iran',
                                                                                 ], old('value', isset($wb->id_winner_team) ? $wb->id_winner_team : null ), [ 'class' =>  'form-control', 'required', 'id' => 'WB1']) !!}
                                                                        </div>
                                                                            
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group row">
                                                                            <div class="col-md-12">Group B runner-up</div>
                                                                            {!! Form::select('WB2', [
                                                                                  '' => 'Pick a Team',
                                                                                 '5' => 'Portugal',
                                                                                 '7' => 'Spain',
                                                                                 '8' => 'Morocco',
                                                                                 '6' => 'Iran',
                                                                                 ], old('value', isset($wb->id_runnerup) ? $wb->id_runnerup : null ), [ 'class' =>  'form-control', 'required', 'id' => 'WB2']) !!}
                                                                        </div>
                                                                            
                                                                    </div>
                                                                </div>    
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>  {{--  end card --}}
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-6">
                                         <button type="button" name="submitgroupbhome" id="submitgroupbhome" class="btn btn-primary" style="width: 100%;">
                                            {{ __('Save and go to Home Page') }}
                                        </button>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="button" name="submitgroupb" id="submitgroupb" class="btn btn-info btn-block" value="Save and go to Next Group" />
                                         {{-- <button type="submit" class="btn btn-primary" style="width: 100%;">
                                            {{ __('Save and go to Next Group') }} --}}
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </form>

                            {{-- GRUPO C --}}
                            <div class="tab-pane container" id="grupoc"> 
                                <br>
                                <ul style="line-height:80%">
                                    <li><p>  Make sure to click on “Save and go to Next Group” or “Save and go to Home Page” after you have made your Score and Winners selections.</p></li>
                                    <li>
                                        <p>You have to completely fill out the Score and the Winners selections.</p>
                                    </li>    
                                </ul>
                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="card">
                                            <div class="card-header">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <h4>{{ __('Group C') }} </h4>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-12 table-responsive">

                                                        <form name="groupc" id="groupc"> 
                                                            {{ csrf_field() }}

                                                            <input type="hidden" name="group_name" value="Group C">

                                                            <input type="hidden" name="id_fase" value="3">

                                                            <input type="hidden" name="id_poll" value="{{$poll->iduser_poll}}"> 
                                                    
                                                            <table id="myTable" class="display table_picks">
                                                                    <thead>
                                                                        <tr>
                                                                            <th class="th-date">Date</th>
                                                                            <th class="th-venue">Venue</th>
                                                                            <th>1st Team</th>
                                                                            {{-- <th></th> --}}
                                                                            <th>2st Team</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr class="A1-A2">
                                                                            <td class="td-date">
                                                                                <div class="col-md-12 div-table-padding">
                                                                                     6/16/2018
                                                                                </div>
                                                                            </td>
                                                                            <td class="td-venue">
                                                                                <div class="col-md-12 div-table-padding">
                                                                                    Kazan
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-5 team_left">
                                                                                        <label class="label_team">France</label>
                                                                                    </div>
                                                                                    <div class="col-md-3 div-flag">
                                                                                        <img class="img_flags" src="{{asset('img/flags/france.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <div class="pikcs">
                                                                                            <input type="text" name="M1C1" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M1C1" onblur="match_games_C()" value="{{ old('M1C1',  isset($gc->M1C1) ? $gc->M1C1 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                           {{--  <td>
                                                                                V
                                                                            </td> --}}
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-3">
                                                                                        <div class="pikcs">
                                                                                            <input type="text" name="M1C2" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M1C2" onblur="match_games_C()" value="{{ old('M1C2',  isset($gc->M1C2) ? $gc->M1C2 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-3 div-flag">
                                                                                        <img class="img_flags" src="{{asset('img/flags/australia.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-5 team_right">
                                                                                        <label class="label_team">Australia</label>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr class="A3-A4">
                                                                            <td class="td-date">
                                                                                <div class="col-md-12 div-table-padding">
                                                                                    6/16/2018
                                                                                </div>
                                                                            </td>
                                                                            <td class="td-venue">
                                                                                <div class="col-md-12 div-table-padding">
                                                                                    Saransk
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-5 team_left">
                                                                                        <label class="label_team">Peru</label>
                                                                                    </div>
                                                                                    <div class="col-md-3 div-flag">
                                                                                        <img class="img_flags" src="{{asset('img/flags/peru.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <div class="pikcs">
                                                                                            <input type="text" name="M2C3" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M2C3" onblur="match_games_C()" value="{{ old('M2C3',  isset($gc->M2C3) ? $gc->M2C3 : null) }}">
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
                                                                                    <div class="col-md-3">
                                                                                        <div class="pikcs">
                                                                                            <input type="text" name="M2C4" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M2C4" onblur="match_games_C()" value="{{ old('M2C4',  isset($gc->M2C4) ? $gc->M2C4 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-3 div-flag">
                                                                                        <img class="img_flags" src="{{asset('img/flags/denmark.png')}}">
                                                                                    </div>
                                                                                     <div class="col-md-5 team_right">
                                                                                        <label class="label_team">Denmark</label>
                                                                                    </div>
                                                                                    
                                                                                    
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr class="A1-A3">
                                                                            </td>
                                                                            <td class="td-date">
                                                                                <div class="col-md-12 div-table-padding">
                                                                                    6/21/2018
                                                                                </div>
                                                                            </td>
                                                                            <td class="td-venue">
                                                                                <div class="col-md-12 div-table-padding">
                                                                                    Ekaterinburg
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-5 team_left">
                                                                                        <label class="label_team">France</label>
                                                                                    </div>
                                                                                    <div class="col-md-3 div-flag">
                                                                                        <img class="img_flags" src="{{asset('img/flags/france.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <div class="pikcs">
                                                                                            <input type="text" name="M3C1" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M3C1" onblur="match_games_C()" value="{{ old('M3C1',  isset($gc->M3C1) ? $gc->M3C1 : null) }}">
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
                                                                                    <div class="col-md-3">
                                                                                        <div class="pikcs">
                                                                                            <input type="text" name="M3C3" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M3C3" onblur="match_games_C()" value="{{ old('M3C3',  isset($gc->M3C3) ? $gc->M3C3 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-3 div-flag">
                                                                                        <img class="img_flags" src="{{asset('img/flags/peru.png')}}">
                                                                                    </div>
                                                                                     <div class="col-md-5 team_right">
                                                                                        <label class="label_team">Peru</label>
                                                                                    </div>
                                                                                    
                                                                                    
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr class="A4-A2">
                                                                            <td class="td-date">
                                                                                <div class="col-md-12 div-table-padding">
                                                                                    6/21/2018
                                                                                </div>
                                                                            </td>
                                                                            <td class="td-venue">
                                                                                <div class="col-md-12 div-table-padding">
                                                                                    Samara
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-5 team_left">
                                                                                        <label class="label_team">Denmark</label>
                                                                                    </div>
                                                                                    <div class="col-md-3 div-flag">
                                                                                        <img class="img_flags" src="{{asset('img/flags/denmark.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <div class="pikcs">
                                                                                            <input type="text" name="M4C4" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M4C4" onblur="match_games_C()" value="{{ old('M4C4',  isset($gc->M4C4) ? $gc->M4C4 : null) }}">
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
                                                                                    <div class="col-md-3">
                                                                                        <div class="pikcs">
                                                                                            <input type="text" name="M4C2" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M4C2" onblur="match_games_C()" value="{{ old('M4C2',  isset($gc->M4C2) ? $gc->M4C2 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-3 div-flag">
                                                                                        <img class="img_flags" src="{{asset('img/flags/australia.png')}}">
                                                                                    </div>
                                                                                     <div class="col-md-5 team_right">
                                                                                        <label class="label_team">Australia</label>
                                                                                    </div>
                                                                                    
                                                                                    
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr class="A4-A1">
                                                                            <td class="td-date"> 
                                                                                <div class="col-md-12 div-table-padding">
                                                                                    6/26/2018
                                                                                </div>
                                                                            </td>
                                                                            <td class="td-venue">
                                                                                <div class="col-md-12 div-table-padding">
                                                                                    Moscow
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-5 team_left">
                                                                                        <label class="label_team">Denmark</label>
                                                                                    </div>
                                                                                    <div class="col-md-3 div-flag">
                                                                                        <img class="img_flags" src="{{asset('img/flags/denmark.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <div class="pikcs">
                                                                                            <input type="text" name="M5C4" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M5C4" onblur="match_games_C()" value="{{ old('M5C4',  isset($gc->M5C4) ? $gc->M5C4 : null) }}">
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
                                                                                    <div class="col-md-3">
                                                                                        <div class="pikcs">
                                                                                            <input type="text" name="M5C1" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M5C1" onblur="match_games_C()" value="{{ old('M5C1',  isset($gc->M5C1) ? $gc->M5C1 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-3 div-flag">
                                                                                        <img class="img_flags" src="{{asset('img/flags/france.png')}}">
                                                                                    </div>
                                                                                     <div class="col-md-5 team_right">
                                                                                        <label class="label_team">France</label>
                                                                                    </div>
                                                                                    
                                                                                    
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr class="A2-A3">
                                                                            <td class="td-date">
                                                                                <div class="col-md-12 div-table-padding">
                                                                                    6/26/2018
                                                                                </div>
                                                                            </td>
                                                                            <td class="td-venue">
                                                                                <div class="col-md-12 div-table-padding">
                                                                                    Sochi
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-5 team_left">
                                                                                        <label class="label_team">Australia</label>
                                                                                    </div>
                                                                                    <div class="col-md-3 div-flag">
                                                                                        <img class="img_flags" src="{{asset('img/flags/australia.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <div class="pikcs">
                                                                                            <input type="text" name="M6C2" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M6C2" onblur="match_games_C()" value="{{ old('M6C2',  isset($gc->M6C2) ? $gc->M6C2 : null) }}">
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
                                                                                    <div class="col-md-3">
                                                                                        <div class="pikcs">
                                                                                            <input type="text" name="M6C3" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M6C3" onblur="match_games_C()" value="{{ old('M6C3',  isset($gc->M6C3) ? $gc->M6C3 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-3 div-flag">
                                                                                        <img class="img_flags" src="{{asset('img/flags/peru.png')}}">
                                                                                    </div>
                                                                                     <div class="col-md-5 team_right">
                                                                                        <label class="label_team">Peru</label>
                                                                                    </div>
                                                                                    
                                                                                    
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        
                                                                        
                                                                    </tbody>
                                                            </table> 

                                                    </div>
                                                </div>
                                            </div>
                                        </div>  {{--  end card --}}
                                    </div> {{--  end col div --}}
                                    <div class="col-md-5">
                                        {{-- Group Standings --}}
                                        <div class="row justify-content-center">
                                            <div class="col-md-12">
                                                <div class="card">
                                                    <div class="card-header"><h4>{{ __('Group Standings') }}</h4></div>

                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-md-12 table-responsive">
                                                        
                                                                <table id="Standings3" class="display table_picks">
                                                                    <thead>
                                                                        <tr>
                                                                            <th style="width: 20%;"></th>

                                                                            <th style="width: 5%;">P</th>
                                                                            <th style="width: 5%;">W</th>
                                                                            <th style="width: 5%;">D</th>
                                                                            <th style="width: 5%;">L</th>
                                                                            <th style="width: 5%;">F</th>
                                                                            <th style="width: 5%;">A</th>
                                                                            <th style="width: 5%;">GD</th>
                                                                            <th style="width: 5%;">PTS</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <img class="img_flags" src="{{asset('img/flags/france.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-8">
                                                                                        <label class="label_team">France</label>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td id="CP1"></td>
                                                                            <td id="CW1"></td>
                                                                            <td id="CD1"></td>
                                                                            <td id="CL1"></td>
                                                                            <td id="CF1"></td>
                                                                            <td id="CA1"></td>
                                                                            <td id="CGD1"></td>
                                                                            <td id="CPTS1"></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <img class="img_flags" src="{{asset('img/flags/denmark.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-8">
                                                                                        <label class="label_team">Denmark</label>
                                                                                    </div>
                                                                                </div></td>
                                                                            <td id="CP4"></td>
                                                                            <td id="CW4"></td>
                                                                            <td id="CD4"></td>
                                                                            <td id="CL4"></td>
                                                                            <td id="CF4"></td>
                                                                            <td id="CA4"></td>
                                                                            <td id="CGD4"></td>
                                                                            <td id="CPTS4"></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <img class="img_flags" src="{{asset('img/flags/australia.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-8">
                                                                                        <label class="label_team">Australia</label>
                                                                                    </div>
                                                                                </div></td>
                                                                            <td id="CP2"></td>
                                                                            <td id="CW2"></td>
                                                                            <td id="CD2"></td>
                                                                            <td id="CL2"></td>
                                                                            <td id="CF2"></td>
                                                                            <td id="CA2"></td>
                                                                            <td id="CGD2"></td>
                                                                            <td id="CPTS2"></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <img class="img_flags" src="{{asset('img/flags/peru.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-8">
                                                                                        <label class="label_team">Peru</label>
                                                                                    </div>
                                                                                </div></td>
                                                                            <td id="CP3"></td>
                                                                            <td id="CW3"></td>
                                                                            <td id="CD3"></td>
                                                                            <td id="CL3"></td>
                                                                            <td id="CF3"></td>
                                                                            <td id="CA3"></td>
                                                                            <td id="CGD3"></td>
                                                                            <td id="CPTS3"></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div style="height: 8px;"></div>

                                        {{-- Winners --}}
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <h4>{{ __('Winners') }} </h4>
                                                            </div>
                                                        </div>
                                                        
                                                        
                                                    </div>

                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group row">
                                                                            <div class="col-md-12">Group C winner</div>
                                                                            {!! Form::select('WC1', [
                                                                                  '' => 'Pick a Team',
                                                                                 '9' => 'France',
                                                                                 '11' => 'Australia',
                                                                                 '12' => 'Peru',
                                                                                 '10' => 'Denmark',
                                                                                 ], old('value', isset($wc->id_winner_team) ? $wc->id_winner_team : null ), [ 'class' =>  'form-control', 'required', 'id' => 'WC1']) !!}
                                                                        </div>
                                                                            
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group row">
                                                                            <div class="col-md-12">Group C runner-up</div>
                                                                            {!! Form::select('WC2', [
                                                                                  '' => 'Pick a Team',
                                                                                 '9' => 'France',
                                                                                 '11' => 'Australia',
                                                                                 '12' => 'Peru',
                                                                                 '10' => 'Denmark',
                                                                                 ], old('value', isset($wc->id_runnerup) ? $wc->id_runnerup : null ), [ 'class' =>  'form-control', 'required', 'id' => 'WC2']) !!}
                                                                        </div>
                                                                            
                                                                    </div>
                                                                </div>    
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>  {{--  end card --}}
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-6">
                                         <button type="button" id="submitgroupchome" name="submitgroupchome" class="btn btn-primary" style="width: 100%;">
                                            {{ __('Save and go to Home Page') }}
                                        </button>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="button" name="submitgroupc" id="submitgroupc" class="btn btn-info btn-block" value="Save and go to Next Group" />
                                         {{-- <button type="submit" class="btn btn-primary" style="width: 100%;">
                                            {{ __('Save and go to Next Group') }} --}}
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </form>

                            {{-- GRUPO D --}}
                            <div class="tab-pane container" id="grupod"> 
                                <br>
                                <ul style="line-height:80%">
                                    <li><p>  Make sure to click on “Save and go to Next Group” or “Save and go to Home Page” after you have made your Score and Winners selections.</p></li>
                                    <li>
                                        <p>You have to completely fill out the Score and the Winners selections.</p>
                                    </li>    
                                </ul>
                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="card">
                                            <div class="card-header">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <h4>{{ __('Group D') }} </h4>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-12 table-responsive">

                                                        <form name="groupd" id="groupd"> 
                                                            {{ csrf_field() }}

                                                            <input type="hidden" name="group_name" value="Group D">

                                                            <input type="hidden" name="id_fase" value="4">

                                                            <input type="hidden" name="id_poll" value="{{$poll->iduser_poll}}"> 
                                                    
                                                            <table id="myTable" class="display table_picks">
                                                                    <thead>
                                                                        <tr>
                                                                            <th class="th-date">Date</th>
                                                                            <th class="th-venue">Venue</th>
                                                                            <th>1st Team</th>
                                                                            {{-- <th></th> --}}
                                                                            <th>2st Team</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr class="A1-A2">
                                                                            <td class="td-date">
                                                                                <div class="col-md-12 div-table-padding">
                                                                                     6/16/2018
                                                                                </div>
                                                                            </td>
                                                                            <td class="td-venue">
                                                                                <div class="col-md-12 div-table-padding">
                                                                                    Moscow
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-5 team_left">
                                                                                        <label class="label_team">Argentina</label>
                                                                                    </div>
                                                                                    <div class="col-md-3 div-flag">
                                                                                        <img class="img_flags" src="{{asset('img/flags/argentina.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <div class="pikcs">
                                                                                            <input type="text" name="M1D1" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M1D1" onblur="match_games_D()" value="{{ old('M1D1',  isset($gd->M1D1) ? $gd->M1D1 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                           {{--  <td>
                                                                                V
                                                                            </td> --}}
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-3">
                                                                                        <div class="pikcs">
                                                                                            <input type="text" name="M1D2" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M1D2" onblur="match_games_D()" value="{{ old('M1D2',  isset($gd->M1D2) ? $gd->M1D2 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-3 div-flag">
                                                                                        <img class="img_flags" src="{{asset('img/flags/iceland.png')}}">
                                                                                    </div>
                                                                                     <div class="col-md-5 team_right">
                                                                                        <label class="label_team">Iceland</label>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr class="A3-A4">
                                                                            <td class="td-date">
                                                                                <div class="col-md-12 div-table-padding">
                                                                                    6/16/2018
                                                                                </div>
                                                                            </td>
                                                                            <td class="td-venue">
                                                                                <div class="col-md-12 div-table-padding">
                                                                                    Kaliningrad
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-5 team_left">
                                                                                        <label class="label_team">Croatia</label>
                                                                                    </div>
                                                                                    <div class="col-md-3 div-flag">
                                                                                        <img class="img_flags" src="{{asset('img/flags/croatia.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <div class="pikcs">
                                                                                            <input type="text" name="M2D3" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M2D3" onblur="match_games_D()" value="{{ old('M2D3',  isset($gd->M2D3) ? $gd->M2D3 : null) }}">
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
                                                                                    <div class="col-md-3">
                                                                                        <div class="pikcs">
                                                                                            <input type="text" name="M2D4" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M2D4" onblur="match_games_D()" value="{{ old('M2D4',  isset($gd->M2D4) ? $gd->M2D4 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-3 div-flag">
                                                                                        <img class="img_flags" src="{{asset('img/flags/nigeria.png')}}">
                                                                                    </div>
                                                                                     <div class="col-md-5 team_right">
                                                                                        <label class="label_team">Nigeria</label>
                                                                                    </div>
                                                                                    
                                                                                    
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr class="A1-A3">
                                                                            </td>
                                                                            <td class="td-date">
                                                                                <div class="col-md-12 div-table-padding">
                                                                                    6/21/2018
                                                                                </div>
                                                                            </td>
                                                                            <td class="td-venue">
                                                                                <div class="col-md-12 div-table-padding">
                                                                                    Nizhny Novgorod
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-5 team_left">
                                                                                        <label class="label_team">Argentina</label>
                                                                                    </div>
                                                                                    <div class="col-md-3 div-flag">
                                                                                        <img class="img_flags" src="{{asset('img/flags/argentina.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <div class="pikcs">
                                                                                            <input type="text" name="M3D1" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M3D1" onblur="match_games_D()" value="{{ old('M3D1',  isset($gd->M3D1) ? $gd->M3D1 : null) }}">
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
                                                                                    <div class="col-md-3">
                                                                                        <div class="pikcs">
                                                                                            <input type="text" name="M3D3" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M3D3" onblur="match_games_D()" value="{{ old('M3D3',  isset($gd->M3D3) ? $gd->M3D3 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-3 div-flag">
                                                                                        <img class="img_flags" src="{{asset('img/flags/croatia.png')}}">
                                                                                    </div>
                                                                                     <div class="col-md-5 team_right">
                                                                                        <label class="label_team">Croatia</label>
                                                                                    </div>
                                                                                    
                                                                                    
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr class="A4-A2">
                                                                            <td class="td-date">
                                                                                <div class="col-md-12 div-table-padding">
                                                                                    6/22/2018
                                                                                </div>
                                                                            </td>
                                                                            <td class="td-venue">
                                                                                <div class="col-md-12 div-table-padding">
                                                                                    Volgograd
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-5 team_left">
                                                                                        <label class="label_team">Nigeria</label>
                                                                                    </div>
                                                                                    <div class="col-md-3 div-flag">
                                                                                        <img class="img_flags" src="{{asset('img/flags/nigeria.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <div class="pikcs">
                                                                                            <input type="text" name="M4D4" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M4D4" onblur="match_games_D()" value="{{ old('M4D4',  isset($gd->M4D4) ? $gd->M4D4 : null) }}">
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
                                                                                    <div class="col-md-3">
                                                                                        <div class="pikcs">
                                                                                            <input type="text" name="M4D2" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M4D2" onblur="match_games_D()" value="{{ old('M4D2',  isset($gd->M4D2) ? $gd->M4D2 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-3 div-flag">
                                                                                        <img class="img_flags" src="{{asset('img/flags/iceland.png')}}">
                                                                                    </div>
                                                                                     <div class="col-md-5 team_right">
                                                                                        <label class="label_team">Iceland</label>
                                                                                    </div>
                                                                                    
                                                                                    
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr class="A4-A1">
                                                                            <td class="td-date"> 
                                                                                <div class="col-md-12 div-table-padding">
                                                                                    6/26/2018
                                                                                </div>
                                                                            </td>
                                                                            <td class="td-venue">
                                                                                <div class="col-md-12 div-table-padding">
                                                                                     Saint Petersburg
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-5 team_left">
                                                                                        <label class="label_team">Nigeria</label>
                                                                                    </div>
                                                                                    <div class="col-md-3 div-flag">
                                                                                        <img class="img_flags" src="{{asset('img/flags/nigeria.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <div class="pikcs">
                                                                                            <input type="text" name="M5D4" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M5D4" onblur="match_games_D()" value="{{ old('M5D4',  isset($gd->M5D4) ? $gd->M5D4 : null) }}">
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
                                                                                    <div class="col-md-3">
                                                                                        <div class="pikcs">
                                                                                            <input type="text" name="M5D1" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M5D1" onblur="match_games_D()" value="{{ old('M5D1',  isset($gd->M5D1) ? $gd->M5D1 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-3 div-flag">
                                                                                        <img class="img_flags" src="{{asset('img/flags/argentina.png')}}">
                                                                                    </div>
                                                                                     <div class="col-md-5 team_right">
                                                                                        <label class="label_team">Argentina</label>
                                                                                    </div>
                                                                                    
                                                                                    
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr class="A2-A3">
                                                                            <td class="td-date">
                                                                                <div class="col-md-12 div-table-padding">
                                                                                    6/26/2018
                                                                                </div>
                                                                            </td>
                                                                            <td class="td-venue">
                                                                                <div class="col-md-12 div-table-padding">
                                                                                    Rostov-on-Don
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-5 team_left">
                                                                                        <label class="label_team">Iceland</label>
                                                                                    </div>
                                                                                    <div class="col-md-3 div-flag">
                                                                                        <img class="img_flags" src="{{asset('img/flags/iceland.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <div class="pikcs">
                                                                                            <input type="text" name="M6D2" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M6D2" onblur="match_games_D()" value="{{ old('M6D2',  isset($gd->M6D2) ? $gd->M6D2 : null) }}">
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
                                                                                    <div class="col-md-3">
                                                                                        <div class="pikcs">
                                                                                            <input type="text" name="M6D3" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M6D3" onblur="match_games_D()" value="{{ old('M6D3',  isset($gd->M6D3) ? $gd->M6D3 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-3 div-flag">
                                                                                        <img class="img_flags" src="{{asset('img/flags/croatia.png')}}">
                                                                                    </div>
                                                                                     <div class="col-md-5 team_right">
                                                                                        <label class="label_team">Croatia</label>
                                                                                    </div>
                                                                                    
                                                                                    
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        
                                                                        
                                                                    </tbody>
                                                            </table> 

                                                    </div>
                                                </div>
                                            </div>
                                        </div>  {{--  end card --}}
                                    </div> {{--  end col div --}}
                                    <div class="col-md-5">
                                        {{-- Group Standings --}}
                                        <div class="row justify-content-center">
                                            <div class="col-md-12">
                                                <div class="card">
                                                    <div class="card-header"><h4>{{ __('Group Standings') }}</h4></div>

                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-md-12 table-responsive">
                                                        
                                                                <table id="Standings4" class="display table_picks">
                                                                    <thead>
                                                                        <tr>
                                                                            <th style="width: 20%;"></th>

                                                                            <th style="width: 5%;">P</th>
                                                                            <th style="width: 5%;">W</th>
                                                                            <th style="width: 5%;">D</th>
                                                                            <th style="width: 5%;">L</th>
                                                                            <th style="width: 5%;">F</th>
                                                                            <th style="width: 5%;">A</th>
                                                                            <th style="width: 5%;">GD</th>
                                                                            <th style="width: 5%;">PTS</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <img class="img_flags" src="{{asset('img/flags/argentina.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-8">
                                                                                        <label class="label_team">Argentina</label>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td id="DP1"></td>
                                                                            <td id="DW1"></td>
                                                                            <td id="DD1"></td>
                                                                            <td id="DL1"></td>
                                                                            <td id="DF1"></td>
                                                                            <td id="DA1"></td>
                                                                            <td id="DGD1"></td>
                                                                            <td id="DPTS1"></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <img class="img_flags" src="{{asset('img/flags/nigeria.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-8">
                                                                                        <label class="label_team">Nigeria</label>
                                                                                    </div>
                                                                                </div></td>
                                                                            <td id="DP4"></td>
                                                                            <td id="DW4"></td>
                                                                            <td id="DD4"></td>
                                                                            <td id="DL4"></td>
                                                                            <td id="DF4"></td>
                                                                            <td id="DA4"></td>
                                                                            <td id="DGD4"></td>
                                                                            <td id="DPTS4"></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <img class="img_flags" src="{{asset('img/flags/iceland.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-8">
                                                                                        <label class="label_team">Iceland</label>
                                                                                    </div>
                                                                                </div></td>
                                                                            <td id="DP2"></td>
                                                                            <td id="DW2"></td>
                                                                            <td id="DD2"></td>
                                                                            <td id="DL2"></td>
                                                                            <td id="DF2"></td>
                                                                            <td id="DA2"></td>
                                                                            <td id="DGD2"></td>
                                                                            <td id="DPTS2"></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <img class="img_flags" src="{{asset('img/flags/croatia.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-8">
                                                                                        <label class="label_team">Croatia</label>
                                                                                    </div>
                                                                                </div></td>
                                                                            <td id="DP3"></td>
                                                                            <td id="DW3"></td>
                                                                            <td id="DD3"></td>
                                                                            <td id="DL3"></td>
                                                                            <td id="DF3"></td>
                                                                            <td id="DA3"></td>
                                                                            <td id="DGD3"></td>
                                                                            <td id="DPTS3"></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div style="height: 8px;"></div>

                                        {{-- Winners --}}
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <h4>{{ __('Winners') }} </h4>
                                                            </div>
                                                        </div>
                                                        
                                                        
                                                    </div>

                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group row">
                                                                            <div class="col-md-12">Group D winner</div>
                                                                            {!! Form::select('WD1', [
                                                                                  '' => 'Pick a Team',
                                                                                 '13' => 'Argentina',
                                                                                 '15' => 'Iceland',
                                                                                 '16' => 'Croatia',
                                                                                 '14' => 'Nigeria',
                                                                                 ], old('value', isset($wd->id_winner_team) ? $wd->id_winner_team : null ), [ 'class' =>  'form-control', 'required', 'id' => 'WD1']) !!}
                                                                        </div>
                                                                            
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group row">
                                                                            <div class="col-md-12">Group D runner-up</div>

                                                                            {!! Form::select('WD2', [
                                                                                  '' => 'Pick a Team',
                                                                                 '13' => 'Argentina',
                                                                                 '15' => 'Iceland',
                                                                                 '16' => 'Croatia',
                                                                                 '14' => 'Nigeria',
                                                                                 ], old('value', isset($wd->id_runnerup) ? $wd->id_runnerup : null ), [ 'class' =>  'form-control', 'required', 'id' => 'WD2']) !!}
                                                                        </div>
                                                                            
                                                                    </div>
                                                                </div>    
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>  {{--  end card --}}
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-6">
                                         <button type="button" name="submitgroupdhome" id="submitgroupdhome" class="btn btn-primary" style="width: 100%;">
                                            {{ __('Save and go to Home Page') }}
                                        </button>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="button" name="submitgroupd" id="submitgroupd" class="btn btn-info btn-block" value="Save and go to Next Group" />
                                         {{-- <button type="submit" class="btn btn-primary" style="width: 100%;">
                                            {{ __('Save and go to Next Group') }} --}}
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </form>

                            {{-- GRUPO E --}}
                            <div class="tab-pane container" id="grupoe">
                                <br>
                                <ul style="line-height:80%">
                                    <li><p>  Make sure to click on “Save and go to Next Group” or “Save and go to Home Page” after you have made your Score and Winners selections.</p></li>
                                    <li>
                                        <p>You have to completely fill out the Score and the Winners selections.</p>
                                    </li>    
                                </ul>
                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="card">
                                            <div class="card-header">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <h4>{{ __('Group E') }} </h4>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-12 table-responsive">

                                                        <form name="groupe" id="groupe"> 
                                                            {{ csrf_field() }}

                                                            <input type="hidden" name="group_name" value="Group E">

                                                            <input type="hidden" name="id_fase" value="5">

                                                            <input type="hidden" name="id_poll" value="{{$poll->iduser_poll}}"> 
                                                    
                                                            <table id="myTable" class="display table_picks">
                                                                    <thead>
                                                                        <tr>
                                                                            <th class="th-date">Date</th>
                                                                            <th class="th-venue">Venue</th>
                                                                            <th>1st Team</th>
                                                                            {{-- <th></th> --}}
                                                                            <th>2st Team</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr class="A1-A2">
                                                                            <td class="td-date">
                                                                                <div class="col-md-12 div-table-padding">
                                                                                     6/17/2018
                                                                                </div>
                                                                            </td>
                                                                            <td class="td-venue">
                                                                                <div class="col-md-12 div-table-padding">
                                                                                     Rostov-on-Don
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-5 team_left">
                                                                                        <label class="label_team">Brazil</label>
                                                                                    </div>
                                                                                    <div class="col-md-3 div-flag">
                                                                                        <img class="img_flags" src="{{asset('img/flags/brazil.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <div class="pikcs">
                                                                                            <input type="text" name="M1E1" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M1E1" onblur="match_games_E()" value="{{ old('M1E1',  isset($ge->M1E1) ? $ge->M1E1 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                           {{--  <td>
                                                                                V
                                                                            </td> --}}
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-3">
                                                                                        <div class="pikcs">
                                                                                            <input type="text" name="M1E2" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M1E2" onblur="match_games_E()" value="{{ old('M1E2',  isset($ge->M1E2) ? $ge->M1E2 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-3 div-flag">
                                                                                        <img class="img_flags" src="{{asset('img/flags/switzerland.png')}}">
                                                                                    </div>
                                                                                     <div class="col-md-5 team_right">
                                                                                        <label class="label_team">Switzerland</label>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr class="A3-A4">
                                                                            <td class="td-date">
                                                                                <div class="col-md-12 div-table-padding">
                                                                                    6/17/2018
                                                                                </div>
                                                                            </td>
                                                                            <td class="td-venue">
                                                                                <div class="col-md-12 div-table-padding">
                                                                                    Samara
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-5 team_left">
                                                                                        <label class="label_team">Costa Rica</label>
                                                                                    </div>
                                                                                    <div class="col-md-3 div-flag">
                                                                                        <img class="img_flags" src="{{asset('img/flags/costa_rica.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <div class="pikcs">
                                                                                            <input type="text" name="M2E3" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M2E3" onblur="match_games_E()" value="{{ old('M2E3',  isset($ge->M2E3) ? $ge->M2E3 : null) }}">
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
                                                                                    <div class="col-md-3">
                                                                                        <div class="pikcs">
                                                                                            <input type="text" name="M2E4" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M2E4" onblur="match_games_E()" value="{{ old('M2E4',  isset($ge->M2E4) ? $ge->M2E4 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-3 div-flag">
                                                                                        <img class="img_flags" src="{{asset('img/flags/serbia.png')}}">
                                                                                    </div>
                                                                                     <div class="col-md-5 team_right">
                                                                                        <label class="label_team">Serbia</label>
                                                                                    </div>
                                                                                    
                                                                                    
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr class="A1-A3">
                                                                            </td>
                                                                            <td class="td-date">
                                                                                <div class="col-md-12 div-table-padding">
                                                                                    6/22/2018
                                                                                </div>
                                                                            </td>
                                                                            <td class="td-venue">
                                                                                <div class="col-md-12 div-table-padding">
                                                                                    Saint Petersburg
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-5 team_left">
                                                                                        <label class="label_team">Brazil</label>
                                                                                    </div>
                                                                                    <div class="col-md-3 div-flag">
                                                                                        <img class="img_flags" src="{{asset('img/flags/brazil.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <div class="pikcs">
                                                                                            <input type="text" name="M3E1" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M3E1" onblur="match_games_E()" value="{{ old('M3E1',  isset($ge->M3E1) ? $ge->M3E1 : null) }}">
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
                                                                                    <div class="col-md-3">
                                                                                        <div class="pikcs">
                                                                                            <input type="text" name="M3E3" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M3E3" onblur="match_games_E()" value="{{ old('M3E3',  isset($ge->M3E3) ? $ge->M3E3 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-3 div-flag">
                                                                                        <img class="img_flags" src="{{asset('img/flags/costa_rica.png')}}">
                                                                                    </div>
                                                                                     <div class="col-md-5 team_right">
                                                                                        <label class="label_team">Costa Rica</label>
                                                                                    </div>
                                                                                    
                                                                                    
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr class="A4-A2">
                                                                            <td class="td-date">
                                                                                <div class="col-md-12 div-table-padding">
                                                                                    6/22/2018
                                                                                </div>
                                                                            </td>
                                                                            <td class="td-venue">
                                                                                <div class="col-md-12 div-table-padding">
                                                                                    Kaliningrad
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-5 team_left">
                                                                                        <label class="label_team">Serbia</label>
                                                                                    </div>
                                                                                    <div class="col-md-3 div-flag">
                                                                                        <img class="img_flags" src="{{asset('img/flags/serbia.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <div class="pikcs">
                                                                                            <input type="text" name="M4E4" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M4E4" onblur="match_games_E()" value="{{ old('M4E4',  isset($ge->M4E4) ? $ge->M4E4 : null) }}">
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
                                                                                    <div class="col-md-3">
                                                                                        <div class="pikcs">
                                                                                            <input type="text" name="M4E2" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M4E2" onblur="match_games_E()" value="{{ old('M4E2',  isset($ge->M4E2) ? $ge->M4E2 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-3 div-flag">
                                                                                        <img class="img_flags" src="{{asset('img/flags/switzerland.png')}}">
                                                                                    </div>
                                                                                     <div class="col-md-5 team_right">
                                                                                        <label class="label_team">Switzerland</label>
                                                                                    </div>
                                                                                    
                                                                                    
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr class="A4-A1">
                                                                            <td class="td-date"> 
                                                                                <div class="col-md-12 div-table-padding">
                                                                                    6/27/2018
                                                                                </div>
                                                                            </td>
                                                                            <td class="td-venue">
                                                                                <div class="col-md-12 div-table-padding">
                                                                                     Moscow
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-5 team_left">
                                                                                        <label class="label_team">Serbia</label>
                                                                                    </div>
                                                                                    <div class="col-md-3 div-flag">
                                                                                        <img class="img_flags" src="{{asset('img/flags/serbia.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <div class="pikcs">
                                                                                            <input type="text" name="M5E4" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M5E4" onblur="match_games_E()" value="{{ old('M5E4',  isset($ge->M5E4) ? $ge->M5E4 : null) }}">
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
                                                                                    <div class="col-md-3">
                                                                                        <div class="pikcs">
                                                                                            <input type="text" name="M5E1" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M5E1" onblur="match_games_E()" value="{{ old('M5E1',  isset($ge->M5E1) ? $ge->M5E1 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-3 div-flag">
                                                                                        <img class="img_flags" src="{{asset('img/flags/brazil.png')}}">
                                                                                    </div>
                                                                                     <div class="col-md-5 team_right">
                                                                                        <label class="label_team">Brazil</label>
                                                                                    </div>
                                                                                    
                                                                                    
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr class="A2-A3">
                                                                            <td class="td-date">
                                                                                <div class="col-md-12 div-table-padding">
                                                                                    6/27/2018
                                                                                </div>
                                                                            </td>
                                                                            <td class="td-venue">
                                                                                <div class="col-md-12 div-table-padding">
                                                                                     Nizhny Novgorod
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-5 team_left">
                                                                                        <label class="label_team">Switzerland</label>
                                                                                    </div>
                                                                                    <div class="col-md-3 div-flag">
                                                                                        <img class="img_flags" src="{{asset('img/flags/switzerland.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <div class="pikcs">
                                                                                            <input type="text" name="M6E2" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M6E2" onblur="match_games_E()" value="{{ old('M6E2',  isset($ge->M6E2) ? $ge->M6E2 : null) }}">
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
                                                                                    <div class="col-md-3">
                                                                                        <div class="pikcs">
                                                                                            <input type="text" name="M6E3" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M6E3" onblur="match_games_E()" value="{{ old('M6E3',  isset($ge->M6E3) ? $ge->M6E3 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-3 div-flag">
                                                                                        <img class="img_flags" src="{{asset('img/flags/costa_rica.png')}}">
                                                                                    </div>
                                                                                     <div class="col-md-5 team_right">
                                                                                        <label class="label_team">Costa Rica</label>
                                                                                    </div>
                                                                                    
                                                                                    
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        
                                                                        
                                                                    </tbody>
                                                            </table> 

                                                    </div>
                                                </div>
                                            </div>
                                        </div>  {{--  end card --}}
                                    </div> {{--  end col div --}}
                                    <div class="col-md-5">
                                        {{-- Group Standings --}}
                                        <div class="row justify-content-center">
                                            <div class="col-md-12">
                                                <div class="card">
                                                    <div class="card-header"><h4>{{ __('Group Standings') }}</h4></div>

                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-md-12 table-responsive">
                                                        
                                                                <table id="Standings5" class="display table_picks">
                                                                    <thead>
                                                                        <tr>
                                                                            <th style="width: 20%;"></th>

                                                                            <th style="width: 5%;">P</th>
                                                                            <th style="width: 5%;">W</th>
                                                                            <th style="width: 5%;">D</th>
                                                                            <th style="width: 5%;">L</th>
                                                                            <th style="width: 5%;">F</th>
                                                                            <th style="width: 5%;">A</th>
                                                                            <th style="width: 5%;">GD</th>
                                                                            <th style="width: 5%;">PTS</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <img class="img_flags" src="{{asset('img/flags/brazil.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-8">
                                                                                        <label class="label_team">Brazil</label>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td id="EP1"></td>
                                                                            <td id="EW1"></td>
                                                                            <td id="ED1"></td>
                                                                            <td id="EL1"></td>
                                                                            <td id="EF1"></td>
                                                                            <td id="EA1"></td>
                                                                            <td id="EGD1"></td>
                                                                            <td id="EPTS1"></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <img class="img_flags" src="{{asset('img/flags/serbia.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-8">
                                                                                        <label class="label_team">Serbia</label>
                                                                                    </div>
                                                                                </div></td>
                                                                            <td id="EP4"></td>
                                                                            <td id="EW4"></td>
                                                                            <td id="ED4"></td>
                                                                            <td id="EL4"></td>
                                                                            <td id="EF4"></td>
                                                                            <td id="EA4"></td>
                                                                            <td id="EGD4"></td>
                                                                            <td id="EPTS4"></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <img class="img_flags" src="{{asset('img/flags/switzerland.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-8">
                                                                                        <label class="label_team">Switzerland</label>
                                                                                    </div>
                                                                                </div></td>
                                                                            <td id="EP2"></td>
                                                                            <td id="EW2"></td>
                                                                            <td id="ED2"></td>
                                                                            <td id="EL2"></td>
                                                                            <td id="EF2"></td>
                                                                            <td id="EA2"></td>
                                                                            <td id="EGD2"></td>
                                                                            <td id="EPTS2"></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <img class="img_flags" src="{{asset('img/flags/costa_rica.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-8">
                                                                                        <label class="label_team">Costa Rica</label>
                                                                                    </div>
                                                                                </div></td>
                                                                            <td id="EP3"></td>
                                                                            <td id="EW3"></td>
                                                                            <td id="ED3"></td>
                                                                            <td id="EL3"></td>
                                                                            <td id="EF3"></td>
                                                                            <td id="EA3"></td>
                                                                            <td id="EGD3"></td>
                                                                            <td id="EPTS3"></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div style="height: 8px;"></div>

                                        {{-- Winners --}}
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <h4>{{ __('Winners') }} </h4>
                                                            </div>
                                                        </div>
                                                        
                                                        
                                                    </div>

                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group row">
                                                                            <div class="col-md-12">Group E winner</div>
                                                                            {!! Form::select('WE1', [
                                                                                  '' => 'Pick a Team',
                                                                                 '17' => 'Brazil',
                                                                                 '19' => 'Switzerland',
                                                                                 '20' => 'Costa Rica',
                                                                                 '18' => 'Serbia',
                                                                                 ], old('value', isset($we->id_winner_team) ? $we->id_winner_team : null ), [ 'class' =>  'form-control', 'required', 'id' => 'WE1']) !!}
                                                                        </div>
                                                                            
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group row">
                                                                            <div class="col-md-12">Group E runner-up</div>
                                                                            {!! Form::select('WE2', [
                                                                                  '' => 'Pick a Team',
                                                                                 '17' => 'Brazil',
                                                                                 '19' => 'Switzerland',
                                                                                 '20' => 'Costa Rica',
                                                                                 '18' => 'Serbia',
                                                                                 ], old('value', isset($we->id_runnerup) ? $we->id_runnerup : null ), [ 'class' =>  'form-control', 'required', 'id' => 'WE2']) !!}
                                                                        </div>
                                                                            
                                                                    </div>
                                                                </div>    
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>  {{--  end card --}}
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-6">
                                         <button type="button" name="submitgroupehome" id="submitgroupehome" class="btn btn-primary" style="width: 100%;">
                                            {{ __('Save and go to Home Page') }}
                                        </button>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="button" name="submitgroupe" id="submitgroupe" class="btn btn-info btn-block" value="Save and go to Next Group" />
                                         {{-- <button type="submit" class="btn btn-primary" style="width: 100%;">
                                            {{ __('Save and go to Next Group') }} --}}
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </form>

                            {{-- GRUPO F --}}
                            <div class="tab-pane container" id="grupof">
                                <br>
                                <ul style="line-height:80%">
                                    <li><p>  Make sure to click on “Save and go to Next Group” or “Save and go to Home Page” after you have made your Score and Winners selections.</p></li>
                                    <li>
                                        <p>You have to completely fill out the Score and the Winners selections.</p>
                                    </li>    
                                </ul>
                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="card">
                                            <div class="card-header">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <h4>{{ __('Group F') }} </h4>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-12 table-responsive">

                                                        <form name="groupf" id="groupf"> 
                                                            {{ csrf_field() }}

                                                            <input type="hidden" name="group_name" value="Group F">

                                                            <input type="hidden" name="id_fase" value="6">

                                                            <input type="hidden" name="id_poll" value="{{$poll->iduser_poll}}"> 
                                                    
                                                            <table id="myTable" class="display table_picks">
                                                                    <thead>
                                                                        <tr>
                                                                            <th class="th-date">Date</th>
                                                                            <th class="th-venue">Venue</th>
                                                                            <th>1st Team</th>
                                                                            {{-- <th></th> --}}
                                                                            <th>2st Team</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr class="A1-A2">
                                                                            <td class="td-date">
                                                                                <div class="col-md-12 div-table-padding">
                                                                                     6/17/2018
                                                                                </div>
                                                                            </td>
                                                                            <td class="td-venue">
                                                                                <div class="col-md-12 div-table-padding">
                                                                                     Moscow
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-5 team_left">
                                                                                        <label class="label_team">Germany</label>
                                                                                    </div>
                                                                                    <div class="col-md-3 div-flag">
                                                                                        <img class="img_flags" src="{{asset('img/flags/Germany.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <div class="pikcs">
                                                                                            <input type="text" name="M1F1" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M1F1" onblur="match_games_F()" value="{{ old('M1F1',  isset($gf->M1F1) ? $gf->M1F1 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                           {{--  <td>
                                                                                V
                                                                            </td> --}}
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-3">
                                                                                        <div class="pikcs">
                                                                                            <input type="text" name="M1F2" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M1F2" onblur="match_games_F()" value="{{ old('M1F2',  isset($gf->M1F2) ? $gf->M1F2 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-3 div-flag">
                                                                                        <img class="img_flags" src="{{asset('img/flags/mexico.png')}}">
                                                                                    </div>
                                                                                     <div class="col-md-5 team_right">
                                                                                        <label class="label_team">Mexico</label>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr class="A3-A4">
                                                                            <td class="td-date">
                                                                                <div class="col-md-12 div-table-padding">
                                                                                    6/18/2018
                                                                                </div>
                                                                            </td>
                                                                            <td class="td-venue">
                                                                                <div class="col-md-12 div-table-padding">
                                                                                     Nizhny Novgorod
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-5 team_left">
                                                                                        <label class="label_team">Sweden</label>
                                                                                    </div>
                                                                                    <div class="col-md-3 div-flag">
                                                                                        <img class="img_flags" src="{{asset('img/flags/sweden.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <div class="pikcs">
                                                                                            <input type="text" name="M2F3" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M2F3" onblur="match_games_F()" value="{{ old('M2F3',  isset($gf->M2F3) ? $gf->M2F3 : null) }}">
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
                                                                                    <div class="col-md-3">
                                                                                        <div class="pikcs">
                                                                                            <input type="text" name="M2F4" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M2F4" onblur="match_games_F()" value="{{ old('M2F4',  isset($gf->M2F4) ? $gf->M2F4 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-3 div-flag">
                                                                                        <img class="img_flags" src="{{asset('img/flags/south_korea.png')}}">
                                                                                    </div>
                                                                                     <div class="col-md-5 team_right">
                                                                                        <label class="label_team">South Korea</label>
                                                                                    </div>
                                                                                    
                                                                                    
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr class="A1-A3">
                                                                            </td>
                                                                            <td class="td-date">
                                                                                <div class="col-md-12 div-table-padding">
                                                                                    6/23/2018
                                                                                </div>
                                                                            </td>
                                                                            <td class="td-venue">
                                                                                <div class="col-md-12 div-table-padding">
                                                                                    Sochi
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-5 team_left">
                                                                                        <label class="label_team">Germany</label>
                                                                                    </div>
                                                                                    <div class="col-md-3 div-flag">
                                                                                        <img class="img_flags" src="{{asset('img/flags/Germany.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <div class="pikcs">
                                                                                            <input type="text" name="M3F1" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M3F1" onblur="match_games_F()" value="{{ old('M3F1',  isset($gf->M3F1) ? $gf->M3F1 : null) }}">
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
                                                                                    <div class="col-md-3">
                                                                                        <div class="pikcs">
                                                                                            <input type="text" name="M3F3" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M3F3" onblur="match_games_F()" value="{{ old('M3F3',  isset($gf->M3F3) ? $gf->M3F3 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-3 div-flag">
                                                                                        <img class="img_flags" src="{{asset('img/flags/sweden.png')}}">
                                                                                    </div>
                                                                                     <div class="col-md-5 team_right">
                                                                                        <label class="label_team">Sweden</label>
                                                                                    </div>
                                                                                    
                                                                                    
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr class="A4-A2">
                                                                            <td class="td-date">
                                                                                <div class="col-md-12 div-table-padding">
                                                                                    6/23/2018
                                                                                </div>
                                                                            </td>
                                                                            <td class="td-venue">
                                                                                <div class="col-md-12 div-table-padding">
                                                                                     Rostov-on-Don
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-5 team_left">
                                                                                        <label class="label_team">South Korea</label>
                                                                                    </div>
                                                                                    <div class="col-md-3 div-flag">
                                                                                        <img class="img_flags" src="{{asset('img/flags/south_korea.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <div class="pikcs">
                                                                                            <input type="text" name="M4F4" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M4F4" onblur="match_games_F()" value="{{ old('M4F4',  isset($gf->M4F4) ? $gf->M4F4 : null) }}">
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
                                                                                    <div class="col-md-3">
                                                                                        <div class="pikcs">
                                                                                            <input type="text" name="M4F2" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M4F2" onblur="match_games_F()" value="{{ old('M4F2',  isset($gf->M4F2) ? $gf->M4F2 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-3 div-flag">
                                                                                        <img class="img_flags" src="{{asset('img/flags/mexico.png')}}">
                                                                                    </div>
                                                                                     <div class="col-md-5 team_right">
                                                                                        <label class="label_team">Mexico</label>
                                                                                    </div>
                                                                                    
                                                                                    
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr class="A4-A1">
                                                                            <td class="td-date"> 
                                                                                <div class="col-md-12 div-table-padding">
                                                                                    6/27/2018
                                                                                </div>
                                                                            </td>
                                                                            <td class="td-venue">
                                                                                <div class="col-md-12 div-table-padding">
                                                                                     Kazan
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-5 team_left">
                                                                                        <label class="label_team">South Korea</label>
                                                                                    </div>
                                                                                    <div class="col-md-3 div-flag">
                                                                                        <img class="img_flags" src="{{asset('img/flags/south_korea.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <div class="pikcs">
                                                                                            <input type="text" name="M5F4" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M5F4" onblur="match_games_F()" value="{{ old('M5F4',  isset($gf->M5F4) ? $gf->M5F4 : null) }}">
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
                                                                                    <div class="col-md-3">
                                                                                        <div class="pikcs">
                                                                                            <input type="text" name="M5F1" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M5F1" onblur="match_games_F()" value="{{ old('M5F1',  isset($gf->M5F1) ? $gf->M5F1 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-3 div-flag">
                                                                                        <img class="img_flags" src="{{asset('img/flags/Germany.png')}}">
                                                                                    </div>
                                                                                     <div class="col-md-5 team_right">
                                                                                        <label class="label_team">Germany</label>
                                                                                    </div>
                                                                                    
                                                                                    
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr class="A2-A3">
                                                                            <td class="td-date">
                                                                                <div class="col-md-12 div-table-padding">
                                                                                    6/27/2018
                                                                                </div>
                                                                            </td>
                                                                            <td class="td-venue">
                                                                                <div class="col-md-12 div-table-padding">
                                                                                     Ekaterinburg
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-5 team_left">
                                                                                        <label class="label_team">Mexico</label>
                                                                                    </div>
                                                                                    <div class="col-md-3 div-flag">
                                                                                        <img class="img_flags" src="{{asset('img/flags/mexico.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <div class="pikcs">
                                                                                            <input type="text" name="M6F2" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M6F2" onblur="match_games_F()" value="{{ old('M6F2',  isset($gf->M6F2) ? $gf->M6F2 : null) }}">
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
                                                                                    <div class="col-md-3">
                                                                                        <div class="pikcs">
                                                                                            <input type="text" name="M6F3" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M6F3" onblur="match_games_F()" value="{{ old('M6F3',  isset($gf->M6F3) ? $gf->M6F3 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-3 div-flag">
                                                                                        <img class="img_flags" src="{{asset('img/flags/sweden.png')}}">
                                                                                    </div>
                                                                                     <div class="col-md-5 team_right">
                                                                                        <label class="label_team">Sweden</label>
                                                                                    </div>
                                                                                    
                                                                                    
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        
                                                                        
                                                                    </tbody>
                                                            </table> 

                                                    </div>
                                                </div>
                                            </div>
                                        </div>  {{--  end card --}}
                                    </div> {{--  end col div --}}
                                    <div class="col-md-5">
                                        {{-- Group Standings --}}
                                        <div class="row justify-content-center">
                                            <div class="col-md-12">
                                                <div class="card">
                                                    <div class="card-header"><h4>{{ __('Group Standings') }}</h4></div>

                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-md-12 table-responsive">
                                                        
                                                                <table id="Standings6" class="display table_picks">
                                                                    <thead>
                                                                        <tr>
                                                                            <th style="width: 20%;"></th>

                                                                            <th style="width: 5%;">P</th>
                                                                            <th style="width: 5%;">W</th>
                                                                            <th style="width: 5%;">D</th>
                                                                            <th style="width: 5%;">L</th>
                                                                            <th style="width: 5%;">F</th>
                                                                            <th style="width: 5%;">A</th>
                                                                            <th style="width: 5%;">GD</th>
                                                                            <th style="width: 5%;">PTS</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <img class="img_flags" src="{{asset('img/flags/Germany.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-8">
                                                                                        <label class="label_team">Germany</label>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td id="FP1"></td>
                                                                            <td id="FW1"></td>
                                                                            <td id="FD1"></td>
                                                                            <td id="FL1"></td>
                                                                            <td id="FF1"></td>
                                                                            <td id="FA1"></td>
                                                                            <td id="FGD1"></td>
                                                                            <td id="FPTS1"></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <img class="img_flags" src="{{asset('img/flags/south_korea.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-8">
                                                                                        <label class="label_team">South Korea</label>
                                                                                    </div>
                                                                                </div></td>
                                                                            <td id="FP4"></td>
                                                                            <td id="FW4"></td>
                                                                            <td id="FD4"></td>
                                                                            <td id="FL4"></td>
                                                                            <td id="FF4"></td>
                                                                            <td id="FA4"></td>
                                                                            <td id="FGD4"></td>
                                                                            <td id="FPTS4"></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <img class="img_flags" src="{{asset('img/flags/mexico.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-8">
                                                                                        <label class="label_team">Mexico</label>
                                                                                    </div>
                                                                                </div></td>
                                                                            <td id="FP2"></td>
                                                                            <td id="FW2"></td>
                                                                            <td id="FD2"></td>
                                                                            <td id="FL2"></td>
                                                                            <td id="FF2"></td>
                                                                            <td id="FA2"></td>
                                                                            <td id="FGD2"></td>
                                                                            <td id="FPTS2"></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <img class="img_flags" src="{{asset('img/flags/sweden.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-8">
                                                                                        <label class="label_team">Sweden</label>
                                                                                    </div>
                                                                                </div></td>
                                                                            <td id="FP3"></td>
                                                                            <td id="FW3"></td>
                                                                            <td id="FD3"></td>
                                                                            <td id="FL3"></td>
                                                                            <td id="FF3"></td>
                                                                            <td id="FA3"></td>
                                                                            <td id="FGD3"></td>
                                                                            <td id="FPTS3"></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div style="height: 8px;"></div>

                                        {{-- Winners --}}
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <h4>{{ __('Winners') }} </h4>
                                                            </div>
                                                        </div>
                                                        
                                                        
                                                    </div>

                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group row">
                                                                            <div class="col-md-12">Group F winner</div>
                                                                            {!! Form::select('WF1', [
                                                                                  '' => 'Pick a Team',
                                                                                 '21' => 'Germany',
                                                                                 '23' => 'Mexico',
                                                                                 '24' => 'Sweden',
                                                                                 '22' => 'South Korea',
                                                                                 ], old('value', isset($wf->id_winner_team) ? $wf->id_winner_team : null ), [ 'class' =>  'form-control', 'required', 'id' => 'WF1']) !!}
                                                                        </div>
                                                                            
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group row">
                                                                            <div class="col-md-12">Group F runner-up</div>
                                                                            {!! Form::select('WF2', [
                                                                                  '' => 'Pick a Team',
                                                                                 '21' => 'Germany',
                                                                                 '23' => 'Mexico',
                                                                                 '24' => 'Sweden',
                                                                                 '22' => 'South Korea',
                                                                                 ], old('value', isset($wf->id_runnerup) ? $wf->id_runnerup : null ), [ 'class' =>  'form-control', 'required', 'id' => 'WF2']) !!}
                                                                        </div>
                                                                            
                                                                    </div>
                                                                </div>    
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>  {{--  end card --}}
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-6">
                                         <button type="button" name="submitgroupfhome" id="submitgroupfhome" class="btn btn-primary" style="width: 100%;">
                                            {{ __('Save and go to Home Page') }}
                                        </button>
                                    </div>
                                    <div class="col-md-6">

                                        
                                        <input type="button" name="submitgroupf" id="submitgroupf" class="btn btn-info btn-block" value="Save and go to Next Group" />
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </form>

                            {{-- GRUPO G --}}
                            <div class="tab-pane container" id="grupog">
                                <br>
                                <ul style="line-height:80%">
                                    <li><p>  Make sure to click on “Save and go to Next Group” or “Save and go to Home Page” after you have made your Score and Winners selections.</p></li>
                                    <li>
                                        <p>You have to completely fill out the Score and the Winners selections.</p>
                                    </li>    
                                </ul>
                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="card">
                                            <div class="card-header">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <h4>{{ __('Group G') }} </h4>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-12 table-responsive">

                                                        <form name="groupg" id="groupg"> 
                                                            {{ csrf_field() }}

                                                            <input type="hidden" name="group_name" value="Group G">

                                                            <input type="hidden" name="id_fase" value="7">

                                                            <input type="hidden" name="id_poll" value="{{$poll->iduser_poll}}"> 
                                                            
                                                            <table id="myTable" class="display table_picks">
                                                                    <thead>
                                                                        <tr>
                                                                            <th class="th-date">Date</th>
                                                                            <th class="th-venue">Venue</th>
                                                                            <th>1st Team</th>
                                                                            {{-- <th></th> --}}
                                                                            <th>2st Team</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr class="A1-A2">
                                                                            <td class="td-date">
                                                                                <div class="col-md-12 div-table-padding">
                                                                                     6/18/2018
                                                                                </div>
                                                                            </td>
                                                                            <td class="td-venue">
                                                                                <div class="col-md-12 div-table-padding">
                                                                                     Sochi
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-5 team_left">
                                                                                        <label class="label_team">Belgium</label>
                                                                                    </div>
                                                                                    <div class="col-md-3 div-flag">
                                                                                        <img class="img_flags" src="{{asset('img/flags/belgium.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <div class="pikcs">
                                                                                            <input type="text" name="M1G1" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M1G1" onblur="match_games_G()" value="{{ old('M1G1',  isset($gg->M1G1) ? $gg->M1G1 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                           {{--  <td>
                                                                                V
                                                                            </td> --}}
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-3">
                                                                                        <div class="pikcs">
                                                                                            <input type="text" name="M1G2" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M1G2" onblur="match_games_G()" value="{{ old('M1G2',  isset($gg->M1G2) ? $gg->M1G2 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-3 div-flag">
                                                                                        <img class="img_flags" src="{{asset('img/flags/panama.png')}}">
                                                                                    </div>
                                                                                     <div class="col-md-5 team_right">
                                                                                        <label class="label_team">Panama</label>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr class="A3-A4">
                                                                            <td class="td-date">
                                                                                <div class="col-md-12 div-table-padding">
                                                                                    6/18/2018
                                                                                </div>
                                                                            </td>
                                                                            <td class="td-venue">
                                                                                <div class="col-md-12 div-table-padding">
                                                                                     Volgograd
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-5 team_left">
                                                                                        <label class="label_team">Tunisia</label>
                                                                                    </div>
                                                                                    <div class="col-md-3 div-flag">
                                                                                        <img class="img_flags" src="{{asset('img/flags/tunisia.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <div class="pikcs">
                                                                                            <input type="text" name="M2G3" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M2G3" onblur="match_games_G()" value="{{ old('M2G3',  isset($gg->M2G3) ? $gg->M2G3 : null) }}">
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
                                                                                    <div class="col-md-3">
                                                                                        <div class="pikcs">
                                                                                            <input type="text" name="M2G4" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M2G4" onblur="match_games_G()" value="{{ old('M2G4',  isset($gg->M2G4) ? $gg->M2G4 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-3 div-flag">
                                                                                        <img class="img_flags" src="{{asset('img/flags/england.png')}}">
                                                                                    </div>
                                                                                     <div class="col-md-5 team_right">
                                                                                        <label class="label_team">England</label>
                                                                                    </div>
                                                                                    
                                                                                    
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr class="A1-A3">
                                                                            </td>
                                                                            <td class="td-date">
                                                                                <div class="col-md-12 div-table-padding">
                                                                                    6/23/2018
                                                                                </div>
                                                                            </td>
                                                                            <td class="td-venue">
                                                                                <div class="col-md-12 div-table-padding">
                                                                                    Moscow
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-5 team_left">
                                                                                        <label class="label_team">Belgium</label>
                                                                                    </div>
                                                                                    <div class="col-md-3 div-flag">
                                                                                        <img class="img_flags" src="{{asset('img/flags/belgium.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <div class="pikcs">
                                                                                            <input type="text" name="M3G1" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M3G1" onblur="match_games_G()" value="{{ old('M3G1',  isset($gg->M3G1) ? $gg->M3G1 : null) }}">
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
                                                                                    <div class="col-md-3">
                                                                                        <div class="pikcs">
                                                                                            <input type="text" name="M3G3" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M3G3" onblur="match_games_G()" value="{{ old('M3G3',  isset($gg->M3G3) ? $gg->M3G3 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-3 div-flag">
                                                                                        <img class="img_flags" src="{{asset('img/flags/tunisia.png')}}">
                                                                                    </div>
                                                                                     <div class="col-md-5 team_right">
                                                                                        <label class="label_team">Tunisia</label>
                                                                                    </div>
                                                                                    
                                                                                    
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr class="A4-A2">
                                                                            <td class="td-date">
                                                                                <div class="col-md-12 div-table-padding">
                                                                                    6/24/2018
                                                                                </div>
                                                                            </td>
                                                                            <td class="td-venue">
                                                                                <div class="col-md-12 div-table-padding">
                                                                                      Nizhny Novgorod
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-5 team_left">
                                                                                        <label class="label_team">England</label>
                                                                                    </div>
                                                                                    <div class="col-md-3 div-flag">
                                                                                        <img class="img_flags" src="{{asset('img/flags/england.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <div class="pikcs">
                                                                                            <input type="text" name="M4G4" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M4G4" onblur="match_games_G()" value="{{ old('M4G4',  isset($gg->M4G4) ? $gg->M4G4 : null) }}">
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
                                                                                    <div class="col-md-3">
                                                                                        <div class="pikcs">
                                                                                            <input type="text" name="M4G2" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M4G2" onblur="match_games_G()" value="{{ old('M4G2',  isset($gg->M4G2) ? $gg->M4G2 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-3 div-flag">
                                                                                        <img class="img_flags" src="{{asset('img/flags/panama.png')}}">
                                                                                    </div>
                                                                                     <div class="col-md-5 team_right">
                                                                                        <label class="label_team">Panama</label>
                                                                                    </div>
                                                                                    
                                                                                    
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr class="A4-A1">
                                                                            <td class="td-date"> 
                                                                                <div class="col-md-12 div-table-padding">
                                                                                    6/28/2018
                                                                                </div>
                                                                            </td>
                                                                            <td class="td-venue">
                                                                                <div class="col-md-12 div-table-padding">
                                                                                     Kaliningrad
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-5 team_left">
                                                                                        <label class="label_team">England</label>
                                                                                    </div>
                                                                                    <div class="col-md-3 div-flag">
                                                                                        <img class="img_flags" src="{{asset('img/flags/england.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <div class="pikcs">
                                                                                            <input type="text" name="M5G4" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M5G4" onblur="match_games_G()" value="{{ old('M5G4',  isset($gg->M5G4) ? $gg->M5G4 : null) }}">
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
                                                                                    <div class="col-md-3">
                                                                                        <div class="pikcs">
                                                                                            <input type="text" name="M5G1" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M5G1" onblur="match_games_G()" value="{{ old('M5G1',  isset($gg->M5G1) ? $gg->M5G1 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-3 div-flag">
                                                                                        <img class="img_flags" src="{{asset('img/flags/belgium.png')}}">
                                                                                    </div>
                                                                                     <div class="col-md-5 team_right">
                                                                                        <label class="label_team">Belgium</label>
                                                                                    </div>
                                                                                    
                                                                                    
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr class="A2-A3">
                                                                            <td class="td-date">
                                                                                <div class="col-md-12 div-table-padding">
                                                                                    6/28/2018
                                                                                </div>
                                                                            </td>
                                                                            <td class="td-venue">
                                                                                <div class="col-md-12 div-table-padding">
                                                                                     Saransk
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-5 team_left">
                                                                                        <label class="label_team">Panama</label>
                                                                                    </div>
                                                                                    <div class="col-md-3 div-flag">
                                                                                        <img class="img_flags" src="{{asset('img/flags/panama.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <div class="pikcs">
                                                                                            <input type="text" name="M6G2" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M6G2" onblur="match_games_G()" value="{{ old('M6G2',  isset($gg->M6G2) ? $gg->M6G2 : null) }}">
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
                                                                                    <div class="col-md-3">
                                                                                        <div class="pikcs">
                                                                                            <input type="text" name="M6G3" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M6G3" onblur="match_games_G()" value="{{ old('M6G3',  isset($gg->M6G3) ? $gg->M6G3 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-3 div-flag">
                                                                                        <img class="img_flags" src="{{asset('img/flags/tunisia.png')}}">
                                                                                    </div>
                                                                                     <div class="col-md-5 team_right">
                                                                                        <label class="label_team">Tunisia</label>
                                                                                    </div>
                                                                                    
                                                                                    
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        
                                                                        
                                                                    </tbody>
                                                            </table> 

                                                    </div>
                                                </div>
                                            </div>
                                        </div>  {{--  end card --}}
                                    </div> {{--  end col div --}}
                                    <div class="col-md-5">
                                        {{-- Group Standings --}}
                                        <div class="row justify-content-center">
                                            <div class="col-md-12">
                                                <div class="card">
                                                    <div class="card-header"><h4>{{ __('Group Standings') }}</h4></div>

                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-md-12 table-responsive">
                                                        
                                                                <table id="Standings7" class="display table_picks">
                                                                    <thead>
                                                                        <tr>
                                                                            <th style="width: 20%;"></th>

                                                                            <th style="width: 5%;">P</th>
                                                                            <th style="width: 5%;">W</th>
                                                                            <th style="width: 5%;">D</th>
                                                                            <th style="width: 5%;">L</th>
                                                                            <th style="width: 5%;">F</th>
                                                                            <th style="width: 5%;">A</th>
                                                                            <th style="width: 5%;">GD</th>
                                                                            <th style="width: 5%;">PTS</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <img class="img_flags" src="{{asset('img/flags/belgium.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-8">
                                                                                        <label class="label_team">Belgium</label>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td id="GP1"></td>
                                                                            <td id="GW1"></td>
                                                                            <td id="GD1"></td>
                                                                            <td id="GL1"></td>
                                                                            <td id="GF1"></td>
                                                                            <td id="GA1"></td>
                                                                            <td id="GGD1"></td>
                                                                            <td id="GPTS1"></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <img class="img_flags" src="{{asset('img/flags/england.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-8">
                                                                                        <label class="label_team">England</label>
                                                                                    </div>
                                                                                </div></td>
                                                                            <td id="GP4"></td>
                                                                            <td id="GW4"></td>
                                                                            <td id="GD4"></td>
                                                                            <td id="GL4"></td>
                                                                            <td id="GF4"></td>
                                                                            <td id="GA4"></td>
                                                                            <td id="GGD4"></td>
                                                                            <td id="GPTS4"></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <img class="img_flags" src="{{asset('img/flags/panama.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-8">
                                                                                        <label class="label_team">Panama</label>
                                                                                    </div>
                                                                                </div></td>
                                                                            <td id="GP2"></td>
                                                                            <td id="GW2"></td>
                                                                            <td id="GD2"></td>
                                                                            <td id="GL2"></td>
                                                                            <td id="GF2"></td>
                                                                            <td id="GA2"></td>
                                                                            <td id="GGD2"></td>
                                                                            <td id="GPTS2"></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <img class="img_flags" src="{{asset('img/flags/tunisia.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-8">
                                                                                        <label class="label_team">Tunisia</label>
                                                                                    </div>
                                                                                </div></td>
                                                                            <td id="GP3"></td>
                                                                            <td id="GW3"></td>
                                                                            <td id="GD3"></td>
                                                                            <td id="GL3"></td>
                                                                            <td id="GF3"></td>
                                                                            <td id="GA3"></td>
                                                                            <td id="GGD3"></td>
                                                                            <td id="GPTS3"></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div style="height: 8px;"></div>

                                        {{-- Winners --}}
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <h4>{{ __('Winners') }} </h4>
                                                            </div>
                                                        </div>
                                                        
                                                        
                                                    </div>

                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group row">
                                                                            <div class="col-md-12">Group G winner</div>

                                                                            {!! Form::select('WG1', [
                                                                                  '' => 'Pick a Team',
                                                                                 '25' => 'Belgium',
                                                                                 '27' => 'Panama',
                                                                                 '28' => 'Tunisia',
                                                                                 '26' => 'England',
                                                                                 ], old('value', isset($wg->id_winner_team) ? $wg->id_winner_team : null ), [ 'class' =>  'form-control', 'required', 'id' => 'WG1']) !!}
                                                                        </div>
                                                                            
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group row">
                                                                            <div class="col-md-12">Group G runner-up</div>

                                                                           {!! Form::select('WG2', [
                                                                                  '' => 'Pick a Team',
                                                                                 '25' => 'Belgium',
                                                                                 '27' => 'Panama',
                                                                                 '28' => 'Tunisia',
                                                                                 '26' => 'England',
                                                                                 ], old('value', isset($wg->id_runnerup) ? $wg->id_runnerup : null ), [ 'class' =>  'form-control', 'required', 'id' => 'WG2']) !!}
                                                                        </div>
                                                                            
                                                                    </div>
                                                                </div>    
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>  {{--  end card --}}
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-6">
                                         <button type="button" name="submitgroupghome" id="submitgroupghome" class="btn btn-primary" style="width: 100%;">
                                            {{ __('Save and go to Home Page') }}
                                        </button>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="button" name="submitgroupg" id="submitgroupg" class="btn btn-info btn-block" value="Save and go to Next Group" />
                                         {{-- <button type="submit" class="btn btn-primary" style="width: 100%;">
                                            {{ __('Save and go to Next Group') }} --}}
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </form>

                            {{-- GRUPO H --}}
                            <div class="tab-pane container" id="grupoh">
                                <br>
                               <ul style="line-height:80%">
                                    <li><p>  Make sure to click on “Save and go to Next Group” or “Save and go to Home Page” after you have made your Score and Winners selections.</p></li>
                                    <li>
                                        <p>You have to completely fill out the Score and the Winners selections.</p>
                                    </li>    
                                </ul>
                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="card">
                                            <div class="card-header">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <h4>{{ __('Group H') }} </h4>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-12 table-responsive">

                                                        <form name="grouph" id="grouph"> 
                                                            {{ csrf_field() }}

                                                            <input type="hidden" name="group_name" value="Group H">

                                                            <input type="hidden" name="id_fase" value="8">

                                                            <input type="hidden" name="id_poll" value="{{$poll->iduser_poll}}"> 
                                                    
                                                            <table id="myTable" class="display table_picks">
                                                                    <thead>
                                                                        <tr>
                                                                            <th class="th-date">Date</th>
                                                                            <th class="th-venue">Venue</th>
                                                                            <th>1st Team</th>
                                                                            {{-- <th></th> --}}
                                                                            <th>2st Team</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr class="A1-A2">
                                                                            <td class="td-date">
                                                                                <div class="col-md-12 div-table-padding">
                                                                                     6/19/2018
                                                                                </div>
                                                                            </td>
                                                                            <td class="td-venue">
                                                                                <div class="col-md-12 div-table-padding">
                                                                                     Moscow
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-5 team_left">
                                                                                        <label class="label_team">Poland</label>
                                                                                    </div>
                                                                                    <div class="col-md-3 div-flag">
                                                                                        <img class="img_flags" src="{{asset('img/flags/poland.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <div class="pikcs">
                                                                                            <input type="text" name="M1H1" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M1H1" onblur="match_games_H()" value="{{ old('M1H1',  isset($gh->M1H1) ? $gh->M1H1 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                           {{--  <td>
                                                                                V
                                                                            </td> --}}
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-3">
                                                                                        <div class="pikcs">
                                                                                            <input type="text" name="M1H2" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M1H2" onblur="match_games_H()" value="{{ old('M1H2',  isset($gh->M1H2) ? $gh->M1H2 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-3 div-flag">
                                                                                        <img class="img_flags" src="{{asset('img/flags/senegal.png')}}">
                                                                                    </div>
                                                                                     <div class="col-md-5 team_right">
                                                                                        <label class="label_team">Senegal</label>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr class="A3-A4">
                                                                            <td class="td-date">
                                                                                <div class="col-md-12 div-table-padding">
                                                                                    6/19/2018
                                                                                </div>
                                                                            </td>
                                                                            <td class="td-venue">
                                                                                <div class="col-md-12 div-table-padding">
                                                                                     Saransk
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-5 team_left">
                                                                                        <label class="label_team">Colombia</label>
                                                                                    </div>
                                                                                    <div class="col-md-3 div-flag">
                                                                                        <img class="img_flags" src="{{asset('img/flags/Colombia.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <div class="pikcs">
                                                                                            <input type="text" name="M2H3" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M2H3" onblur="match_games_H()" value="{{ old('M2H3',  isset($gh->M2H3) ? $gh->M2H3 : null) }}">
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
                                                                                    <div class="col-md-3">
                                                                                        <div class="pikcs">
                                                                                            <input type="text" name="M2H4" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M2H4" onblur="match_games_H()" value="{{ old('M2H4',  isset($gh->M2H4) ? $gh->M2H4 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-3 div-flag">
                                                                                        <img class="img_flags" src="{{asset('img/flags/japan.png')}}">
                                                                                    </div>
                                                                                     <div class="col-md-5 team_right">
                                                                                        <label class="label_team">Japan</label>
                                                                                    </div>
                                                                                    
                                                                                    
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr class="A1-A3">
                                                                            </td>
                                                                            <td class="td-date">
                                                                                <div class="col-md-12 div-table-padding">
                                                                                    6/24/2018
                                                                                </div>
                                                                            </td>
                                                                            <td class="td-venue">
                                                                                <div class="col-md-12 div-table-padding">
                                                                                     Kazan
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-5 team_left">
                                                                                        <label class="label_team">Poland</label>
                                                                                    </div>
                                                                                    <div class="col-md-3 div-flag">
                                                                                        <img class="img_flags" src="{{asset('img/flags/poland.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <div class="pikcs">
                                                                                            <input type="text" name="M3H1" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M3H1" onblur="match_games_H()" value="{{ old('M3H1',  isset($gh->M3H1) ? $gh->M3H1 : null) }}">
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
                                                                                    <div class="col-md-3">
                                                                                        <div class="pikcs">
                                                                                            <input type="text" name="M3H3" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M3H3" onblur="match_games_H()" value="{{ old('M3H3',  isset($gh->M3H3) ? $gh->M3H3 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-3 div-flag">
                                                                                        <img class="img_flags" src="{{asset('img/flags/Colombia.png')}}">
                                                                                    </div>
                                                                                     <div class="col-md-5 team_right">
                                                                                        <label class="label_team">Colombia</label>
                                                                                    </div>
                                                                                    
                                                                                    
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr class="A4-A2">
                                                                            <td class="td-date">
                                                                                <div class="col-md-12 div-table-padding">
                                                                                    6/24/2018
                                                                                </div>
                                                                            </td>
                                                                            <td class="td-venue">
                                                                                <div class="col-md-12 div-table-padding">
                                                                                      Ekaterinburg
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-5 team_left">
                                                                                        <label class="label_team">Japan</label>
                                                                                    </div>
                                                                                    <div class="col-md-3 div-flag">
                                                                                        <img class="img_flags" src="{{asset('img/flags/japan.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <div class="pikcs">
                                                                                            <input type="text" name="M4H4" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M4H4" onblur="match_games_H()" value="{{ old('M4H4',  isset($gh->M4H4) ? $gh->M4H4 : null) }}">
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
                                                                                    <div class="col-md-3">
                                                                                        <div class="pikcs">
                                                                                            <input type="text" name="M4H2" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M4H2" onblur="match_games_H()" value="{{ old('M4H2',  isset($gh->M4H2) ? $gh->M4H2 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-3 div-flag">
                                                                                        <img class="img_flags" src="{{asset('img/flags/senegal.png')}}">
                                                                                    </div>
                                                                                     <div class="col-md-5 team_right">
                                                                                        <label class="label_team">Senegal</label>
                                                                                    </div>
                                                                                    
                                                                                    
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr class="A4-A1">
                                                                            <td class="td-date"> 
                                                                                <div class="col-md-12 div-table-padding">
                                                                                    6/28/2018
                                                                                </div>
                                                                            </td>
                                                                            <td class="td-venue">
                                                                                <div class="col-md-12 div-table-padding">
                                                                                     Volgograd
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-5 team_left">
                                                                                        <label class="label_team">Japan</label>
                                                                                    </div>
                                                                                    <div class="col-md-3 div-flag">
                                                                                        <img class="img_flags" src="{{asset('img/flags/japan.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <div class="pikcs">
                                                                                            <input type="text" name="M5H4" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M5H4" onblur="match_games_H()" value="{{ old('M5H4',  isset($gh->M5H4) ? $gh->M5H4 : null) }}">
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
                                                                                    <div class="col-md-3">
                                                                                        <div class="pikcs">
                                                                                            <input type="text" name="M5H1" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M5H1" onblur="match_games_H()" value="{{ old('M5H1',  isset($gh->M5H1) ? $gh->M5H1 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-3 div-flag">
                                                                                        <img class="img_flags" src="{{asset('img/flags/poland.png')}}">
                                                                                    </div>
                                                                                     <div class="col-md-5 team_right">
                                                                                        <label class="label_team">Poland</label>
                                                                                    </div>
                                                                                    
                                                                                    
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr class="A2-A3">
                                                                            <td class="td-date">
                                                                                <div class="col-md-12 div-table-padding">
                                                                                    6/28/2018
                                                                                </div>
                                                                            </td>
                                                                            <td class="td-venue">
                                                                                <div class="col-md-12 div-table-padding">
                                                                                     Samara
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-5 team_left">
                                                                                        <label class="label_team">Senegal</label>
                                                                                    </div>
                                                                                    <div class="col-md-3 div-flag">
                                                                                        <img class="img_flags" src="{{asset('img/flags/senegal.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <div class="pikcs">
                                                                                            <input type="text" name="M6H2" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M6H2" onblur="match_games_H()" value="{{ old('M6H2',  isset($gh->M6H2) ? $gh->M6H2 : null) }}">
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
                                                                                    <div class="col-md-3">
                                                                                        <div class="pikcs">
                                                                                            <input type="text" name="M6H3" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M6H3" onblur="match_games_H()" value="{{ old('M6H3',  isset($gh->M6H3) ? $gh->M6H3 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-3 div-flag">
                                                                                        <img class="img_flags" src="{{asset('img/flags/Colombia.png')}}">
                                                                                    </div>
                                                                                     <div class="col-md-5 team_right">
                                                                                        <label class="label_team">Colombia</label>
                                                                                    </div>
                                                                                    
                                                                                    
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        
                                                                        
                                                                    </tbody>
                                                            </table> 

                                                    </div>
                                                </div>
                                            </div>
                                        </div>  {{--  end card --}}
                                    </div> {{--  end col div --}}
                                    <div class="col-md-5">
                                        {{-- Group Standings --}}
                                        <div class="row justify-content-center">
                                            <div class="col-md-12">
                                                <div class="card">
                                                    <div class="card-header"><h4>{{ __('Group Standings') }}</h4></div>

                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-md-12 table-responsive">
                                                        
                                                                <table id="Standings8" class="display table_picks">
                                                                    <thead>
                                                                        <tr>
                                                                            <th style="width: 20%;"></th>

                                                                            <th style="width: 5%;">P</th>
                                                                            <th style="width: 5%;">W</th>
                                                                            <th style="width: 5%;">D</th>
                                                                            <th style="width: 5%;">L</th>
                                                                            <th style="width: 5%;">F</th>
                                                                            <th style="width: 5%;">A</th>
                                                                            <th style="width: 5%;">GD</th>
                                                                            <th style="width: 5%;">PTS</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <img class="img_flags" src="{{asset('img/flags/poland.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-8">
                                                                                        <label class="label_team">Poland</label>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td id="HP1"></td>
                                                                            <td id="HW1"></td>
                                                                            <td id="HD1"></td>
                                                                            <td id="HL1"></td>
                                                                            <td id="HF1"></td>
                                                                            <td id="HA1"></td>
                                                                            <td id="HGD1"></td>
                                                                            <td id="HPTS1"></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <img class="img_flags" src="{{asset('img/flags/japan.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-8">
                                                                                        <label class="label_team">Japan</label>
                                                                                    </div>
                                                                                </div></td>
                                                                            <td id="HP4"></td>
                                                                            <td id="HW4"></td>
                                                                            <td id="HD4"></td>
                                                                            <td id="HL4"></td>
                                                                            <td id="HF4"></td>
                                                                            <td id="HA4"></td>
                                                                            <td id="HGD4"></td>
                                                                            <td id="HPTS4"></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <img class="img_flags" src="{{asset('img/flags/senegal.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-8">
                                                                                        <label class="label_team">Senegal</label>
                                                                                    </div>
                                                                                </div></td>
                                                                            <td id="HP2"></td>
                                                                            <td id="HW2"></td>
                                                                            <td id="HD2"></td>
                                                                            <td id="HL2"></td>
                                                                            <td id="HF2"></td>
                                                                            <td id="HA2"></td>
                                                                            <td id="HGD2"></td>
                                                                            <td id="HPTS2"></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <img class="img_flags" src="{{asset('img/flags/Colombia.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-8">
                                                                                        <label class="label_team">Colombia</label>
                                                                                    </div>
                                                                                </div></td>
                                                                            <td id="HP3"></td>
                                                                            <td id="HW3"></td>
                                                                            <td id="HD3"></td>
                                                                            <td id="HL3"></td>
                                                                            <td id="HF3"></td>
                                                                            <td id="HA3"></td>
                                                                            <td id="HGD3"></td>
                                                                            <td id="HPTS3"></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div style="height: 8px;"></div>

                                        {{-- Winners --}}
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <h4>{{ __('Winners') }} </h4>
                                                            </div>
                                                        </div>
                                                        
                                                        
                                                    </div>

                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group row">
                                                                            <div class="col-md-12">Group H winner</div>

                                                                            {!! Form::select('WH1', [
                                                                                  '' => 'Pick a Team',
                                                                                 '29' => 'Poland',
                                                                                 '31' => 'Senegal',
                                                                                 '32' => 'Colombia',
                                                                                 '30' => 'Japan',
                                                                                 ], old('value', isset($wh->id_winner_team) ? $wh->id_winner_team : null ), [ 'class' =>  'form-control', 'required', 'id' => 'WH1']) !!}
                                                                        </div>
                                                                            
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group row">
                                                                            <div class="col-md-12">Group H runner-up</div>

                                                                            {!! Form::select('WH2', [
                                                                                  '' => 'Pick a Team',
                                                                                 '29' => 'Poland',
                                                                                 '31' => 'Senegal',
                                                                                 '32' => 'Colombia',
                                                                                 '30' => 'Japan',
                                                                                 ], old('value', isset($wh->id_runnerup) ? $wh->id_runnerup : null ), [ 'class' =>  'form-control', 'required', 'id' => 'WH2']) !!}
                                                                        </div>
                                                                            
                                                                    </div>
                                                                </div>    
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>  {{--  end card --}}
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-6">
                                         <button type="button" name="submitgrouphhome" id="submitgrouphhome" class="btn btn-primary" style="width: 100%;">
                                            {{ __('Save and go to Home Page') }}
                                        </button>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="button" name="submitgrouph" id="submitgrouph" class="btn btn-info btn-block" value="Save and go to Second Stage" />

                                    </div>
                                </div>
                            </div>

                        </form>

                            {{-- SECOND STAGE --}}
                            <div class="tab-pane container" id="grupoRoun">

                                    <br><br>
                                    <iframe id="secondstageframe" src="{{route('secondstage.show', $poll->iduser_poll)}}" height="1150" width="1010"></iframe>

                            </div>
                                

                                <input type="hidden" id="imgroute" value="{{asset('img/flags')}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    <br>
        {{-- MENU --}}
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header"><h4>{{ __('Menu') }}</h4></div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-10 offset-md-1 ">
                                <div class="form-group">
                                    <button type="" class="btn btn-primary" onclick="window.location='{{ route('rules') }}'" style="width: 100%;">
                                        {{ __('Read the Rules') }}
                                    </button>
                                </div>
                            </div>
                            <div class="col-md-10 offset-md-1 ">
                                <div class="form-group">
                                    <button type="" class="btn btn-primary" onclick="window.location='{{ route('login') }}'" style="width: 100%;">
                                        {{ __('Wolrdcup Results (starts June 12th)') }}
                                    </button>
                                </div>
                            </div>
                            <div class="col-md-10 offset-md-1 ">
                                 <div class="form-group">
                                    <button type="" class="btn btn-primary" onclick="window.location='{{ route('login') }}'" style="width: 100%;">
                                        {{ __('Ranking and Poolwide picks') }}
                                        <br>
                                        {{(__('(starts June 12th)'))}}
                                    </button>
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
@endsection


    


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script src="{{URL::asset('js/app.js')}}"></script>
<script src="{{URL::asset('scripts/countdown.js')}}"></script>
{{-- Solo Numeros --}}
<script type="text/javascript">
    // Solo permite ingresar numeros.
    function soloNumeros(e){
        var key = window.Event ? e.which : e.keyCode
        return (key >= 48 && key <= 57)
    }
</script>


{{-- <script src="{{URL::asset('js/picks/group_A.js')}}"></script> --}}

{{-- ajax --}}


<script>

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

        // RESET

       


        //  -----------------------------


        var postURLA = "<?php echo url('/storea'); ?>";
        var postURLB = "<?php echo url('/storeb'); ?>";
        var postURLC = "<?php echo url('/storec'); ?>";
        var postURLD = "<?php echo url('/stored'); ?>";
        var postURLE = "<?php echo url('/storee'); ?>";
        var postURLF = "<?php echo url('/storef'); ?>";
        var postURLG = "<?php echo url('/storeg'); ?>";
        var postURLH = "<?php echo url('/storeh'); ?>";


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
                        $( '#secondstageframe' ).attr( 'src', function ( i, val ) { return val; });
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
                        $( '#secondstageframe' ).attr( 'src', function ( i, val ) { return val; });
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
                        $( '#secondstageframe' ).attr( 'src', function ( i, val ) { return val; });
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
                        $( '#secondstageframe' ).attr( 'src', function ( i, val ) { return val; });
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
                        $( '#secondstageframe' ).attr( 'src', function ( i, val ) { return val; });
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
                        $( '#secondstageframe' ).attr( 'src', function ( i, val ) { return val; });
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
                        $( '#secondstageframe' ).attr( 'src', function ( i, val ) { return val; });
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
                        $( '#secondstageframe' ).attr( 'src', function ( i, val ) { return val; });
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




