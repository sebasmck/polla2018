@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 title_polla">
                Polla World Cup 2018
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-4">
                                <h4>{{ __('My picks') }} </h4>
                            </div>
                            <div class="col-md-8">
                                {{-- <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-primary addbutton" id="myBtn"><span class="fa fa-plus">+</span></button> --}}
                            </div>
                        </div>                        
                        
                    </div>

                    <div class="card-body">
                        <ul class="nav nav-tabs">
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
                                <div class="row">
                                    <div class="col-12 col-md-7">
                                        <div class="card">
                                            <div class="card-header">
                                                <div class="row">
                                                    <div class="col-md-4">
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
                                                                            <th>Venue</th>
                                                                            <th>1st Team</th>
                                                                            {{-- <th></th> --}}
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
                                                                                <div class="col-md-12">
                                                                                    Moscow
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-5 team_left">
                                                                                        Russia
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <img class="img_flags" src="{{asset('img/flags/russia.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <div class="form-group pikcs">
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
                                                                                    <div class="col-md-3">
                                                                                        <div class="form-group pikcs">
                                                                                            <input type="text" name="M1A2" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M1A2" onblur="match_games()" value="{{ old('M1A2',  isset($ga->M1A2) ? $ga->M1A2 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <img class="img_flags" src="{{asset('img/flags/saudi_arabia.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        Saudi Arabia
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
                                                                                <div class="col-md-12">
                                                                                    Ekaterinburg
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-5 team_left">
                                                                                        Egypt
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <img class="img_flags" src="{{asset('img/flags/egypt.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <div class="form-group pikcs">
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
                                                                                    <div class="col-md-3">
                                                                                        <div class="form-group pikcs">
                                                                                            <input type="text" name="M2A4" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M2A4" onblur="match_games()" value="{{ old('M1A2',  isset($ga->M1A2) ? $ga->M1A2 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <img class="img_flags" src="{{asset('img/flags/uruguay.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        Uruguay
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
                                                                                <div class="col-md-12">
                                                                                    Saint Petersburg
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-5 team_left">
                                                                                        Russia
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <img class="img_flags" src="{{asset('img/flags/russia.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <div class="form-group pikcs">
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
                                                                                    <div class="col-md-3">
                                                                                        <div class="form-group pikcs">
                                                                                            <input type="text" name="M3A3" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M3A3" onblur="match_games()" value="{{ old('M3A3',  isset($ga->M3A3) ? $ga->M3A3 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <img class="img_flags" src="{{asset('img/flags/egypt.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        Egypt
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
                                                                                <div class="col-md-12">
                                                                                    Rostov-on-Don
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-5 team_left">
                                                                                        Uruguay
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <img class="img_flags" src="{{asset('img/flags/uruguay.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <div class="form-group pikcs">
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
                                                                                    <div class="col-md-3">
                                                                                        <div class="form-group pikcs">
                                                                                            <input type="text" name="M4A2" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M4A2" onblur="match_games()" value="{{ old('M4A2',  isset($ga->M4A2) ? $ga->M4A2 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <img class="img_flags" src="{{asset('img/flags/saudi_arabia.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        Saudi Arabia
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
                                                                                <div class="col-md-12">
                                                                                    Samara
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-5 team_left">
                                                                                        Uruguay
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <img class="img_flags" src="{{asset('img/flags/uruguay.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <div class="form-group pikcs">
                                                                                            <input type="text" name="M5A4" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M5A4" onblur="match_games()" value="{{ old('M5A4',  isset($ga->M5A4) ? $ga->M5A4 : null) }}">
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
                                                                                        <div class="form-group pikcs">
                                                                                            <input type="text" name="M5A1" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M5A1" onblur="match_games()" value="{{ old('M5A1',  isset($ga->M5A1) ? $ga->M5A1 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <img class="img_flags" src="{{asset('img/flags/russia.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        Russia
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
                                                                                <div class="col-md-12">
                                                                                    Volgograd
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-5 team_left">
                                                                                        Saudi Arabia
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <img class="img_flags" src="{{asset('img/flags/saudi_arabia.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <div class="form-group pikcs">
                                                                                            <input type="text" name="M6A2" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M6A2" onblur="match_games()" value="{{ old('M6A2',  isset($ga->M6A2) ? $ga->M6A2 : null) }}">
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
                                                                                        <div class="form-group pikcs">
                                                                                            <input type="text" name="M6A3" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M6A3" onblur="match_games()" value="{{ old('M6A3',  isset($ga->M6A3) ? $ga->M6A3 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <img class="img_flags" src="{{asset('img/flags/egypt.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        Egypt
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
                                                                            <th style="width: 60%;"></th>

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
                                                                                        Russia
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
                                                                                        Uruguay
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
                                                                                        Saudi Arabia
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
                                                                                        Egypt
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
                                                                            <th>Venue</th>
                                                                            <th>1st Team</th>
                                                                            {{-- <th></th> --}}
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
                                                                                <div class="col-md-12">
                                                                                    Sochi
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-5 team_left">
                                                                                        Portugal
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <img class="img_flags" src="{{asset('img/flags/portugal.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <div class="form-group pikcs">
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
                                                                                        <div class="form-group pikcs">
                                                                                            <input type="text" name="M1B2" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M1B2" onblur="match_games_B()" value="{{ old('M1B2',  isset($gb->M1B2) ? $gb->M1B2 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <img class="img_flags" src="{{asset('img/flags/spain.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        Spain
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
                                                                                <div class="col-md-12">
                                                                                    Saint Petersburg
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-5 team_left">
                                                                                        Morocco
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <img class="img_flags" src="{{asset('img/flags/morocco.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <div class="form-group pikcs">
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
                                                                                        <div class="form-group pikcs">
                                                                                            <input type="text" name="M2B4" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M2B4" onblur="match_games_B()" value="{{ old('M2B4',  isset($gb->M2B4) ? $gb->M2B4 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <img class="img_flags" src="{{asset('img/flags/iran.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        Iran
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
                                                                                <div class="col-md-12">
                                                                                    Moscow
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-5 team_left">
                                                                                        Portugal
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <img class="img_flags" src="{{asset('img/flags/portugal.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <div class="form-group pikcs">
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
                                                                                        <div class="form-group pikcs">
                                                                                            <input type="text" name="M3B3" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M3B3" onblur="match_games_B()" value="{{ old('M3B3',  isset($gb->M3B3) ? $gb->M3B3 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <img class="img_flags" src="{{asset('img/flags/morocco.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        Morocco
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
                                                                                <div class="col-md-12">
                                                                                    Kazan
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-5 team_left">
                                                                                        Iran
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <img class="img_flags" src="{{asset('img/flags/iran.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <div class="form-group pikcs">
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
                                                                                        <div class="form-group pikcs">
                                                                                            <input type="text" name="M4B2" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M4B2" onblur="match_games_B()" value="{{ old('M4B2',  isset($gb->M4B2) ? $gb->M4B2 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <img class="img_flags" src="{{asset('img/flags/spain.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        Spain
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
                                                                                <div class="col-md-12">
                                                                                    Saransk
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-5 team_left">
                                                                                        Iran
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <img class="img_flags" src="{{asset('img/flags/iran.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <div class="form-group pikcs">
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
                                                                                        <div class="form-group pikcs">
                                                                                            <input type="text" name="M5B1" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M5B1" onblur="match_games_B()" value="{{ old('M5B1',  isset($gb->M5B1) ? $gb->M5B1 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <img class="img_flags" src="{{asset('img/flags/portugal.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        Portugal
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
                                                                                <div class="col-md-12">
                                                                                    Kaliningrad
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-5 team_left">
                                                                                        Spain
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <img class="img_flags" src="{{asset('img/flags/spain.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <div class="form-group pikcs">
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
                                                                                        <div class="form-group pikcs">
                                                                                            <input type="text" name="M6B3" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M6B3" onblur="match_games_B()" value="{{ old('M6B3',  isset($gb->M6B3) ? $gb->M6B3 : null) }}"> 
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <img class="img_flags" src="{{asset('img/flags/morocco.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        Morocco
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
                                                                            <th style="width: 60%;"></th>

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
                                                                                        Portugal
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
                                                                                        Iran
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
                                                                                        Spain
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
                                                                                        Morocco
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
                                                                            <th>Venue</th>
                                                                            <th>1st Team</th>
                                                                            {{-- <th></th> --}}
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
                                                                                <div class="col-md-12">
                                                                                    Kazan
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-5 team_left">
                                                                                        France
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <img class="img_flags" src="{{asset('img/flags/france.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <div class="form-group pikcs">
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
                                                                                        <div class="form-group pikcs">
                                                                                            <input type="text" name="M1C2" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M1C2" onblur="match_games_C()" value="{{ old('M1C2',  isset($gc->M1C2) ? $gc->M1C2 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <img class="img_flags" src="{{asset('img/flags/australia.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        Australia
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
                                                                                <div class="col-md-12">
                                                                                    Saransk
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-5 team_left">
                                                                                        Peru
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <img class="img_flags" src="{{asset('img/flags/peru.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <div class="form-group pikcs">
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
                                                                                        <div class="form-group pikcs">
                                                                                            <input type="text" name="M2C4" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M2C4" onblur="match_games_C()" value="{{ old('M2C4',  isset($gc->M2C4) ? $gc->M2C4 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <img class="img_flags" src="{{asset('img/flags/denmark.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        Denmark
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
                                                                                <div class="col-md-12">
                                                                                    Ekaterinburg
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-5 team_left">
                                                                                        France
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <img class="img_flags" src="{{asset('img/flags/france.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <div class="form-group pikcs">
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
                                                                                        <div class="form-group pikcs">
                                                                                            <input type="text" name="M3C3" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M3C3" onblur="match_games_C()" value="{{ old('M3C3',  isset($gc->M3C3) ? $gc->M3C3 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <img class="img_flags" src="{{asset('img/flags/peru.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        Peru
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
                                                                                <div class="col-md-12">
                                                                                    Samara
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-5 team_left">
                                                                                        Denmark
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <img class="img_flags" src="{{asset('img/flags/denmark.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <div class="form-group pikcs">
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
                                                                                        <div class="form-group pikcs">
                                                                                            <input type="text" name="M4C2" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M4C2" onblur="match_games_C()" value="{{ old('M4C2',  isset($gc->M4C2) ? $gc->M4C2 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <img class="img_flags" src="{{asset('img/flags/australia.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        Australia
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
                                                                                <div class="col-md-12">
                                                                                    Moscow
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-5 team_left">
                                                                                        Denmark
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <img class="img_flags" src="{{asset('img/flags/denmark.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <div class="form-group pikcs">
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
                                                                                        <div class="form-group pikcs">
                                                                                            <input type="text" name="M5C1" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M5C1" onblur="match_games_C()" value="{{ old('M5C1',  isset($gc->M5C1) ? $gc->M5C1 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <img class="img_flags" src="{{asset('img/flags/france.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        France
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
                                                                                <div class="col-md-12">
                                                                                    Sochi
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-5 team_left">
                                                                                        Australia
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <img class="img_flags" src="{{asset('img/flags/australia.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <div class="form-group pikcs">
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
                                                                                        <div class="form-group pikcs">
                                                                                            <input type="text" name="M6C3" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M6C3" onblur="match_games_C()" value="{{ old('M6C3',  isset($gc->M6C3) ? $gc->M6C3 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <img class="img_flags" src="{{asset('img/flags/peru.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        Peru
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
                                                                            <th style="width: 60%;"></th>

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
                                                                                        France
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
                                                                                        Denmark
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
                                                                                        Australia
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
                                                                                        Peru
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
                                                                            <th>Venue</th>
                                                                            <th>1st Team</th>
                                                                            {{-- <th></th> --}}
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
                                                                                <div class="col-md-12">
                                                                                    Moscow
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-5 team_left">
                                                                                        Argentina
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <img class="img_flags" src="{{asset('img/flags/argentina.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <div class="form-group pikcs">
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
                                                                                        <div class="form-group pikcs">
                                                                                            <input type="text" name="M1D2" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M1D2" onblur="match_games_D()" value="{{ old('M1D2',  isset($gd->M1D2) ? $gd->M1D2 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <img class="img_flags" src="{{asset('img/flags/iceland.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        Iceland
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
                                                                                <div class="col-md-12">
                                                                                    Kaliningrad
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-5 team_left">
                                                                                        Croatia
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <img class="img_flags" src="{{asset('img/flags/croatia.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <div class="form-group pikcs">
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
                                                                                        <div class="form-group pikcs">
                                                                                            <input type="text" name="M2D4" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M2D4" onblur="match_games_D()" value="{{ old('M2D4',  isset($gd->M2D4) ? $gd->M2D4 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <img class="img_flags" src="{{asset('img/flags/nigeria.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        Nigeria
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
                                                                                <div class="col-md-12">
                                                                                    Nizhny Novgorod
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-5 team_left">
                                                                                        Argentina
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <img class="img_flags" src="{{asset('img/flags/argentina.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <div class="form-group pikcs">
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
                                                                                        <div class="form-group pikcs">
                                                                                            <input type="text" name="M3D3" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M3D3" onblur="match_games_D()" value="{{ old('M3D3',  isset($gd->M3D3) ? $gd->M3D3 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <img class="img_flags" src="{{asset('img/flags/croatia.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        Croatia
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
                                                                                <div class="col-md-12">
                                                                                    Volgograd
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-5 team_left">
                                                                                        Nigeria
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <img class="img_flags" src="{{asset('img/flags/nigeria.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <div class="form-group pikcs">
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
                                                                                        <div class="form-group pikcs">
                                                                                            <input type="text" name="M4D2" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M4D2" onblur="match_games_D()" value="{{ old('M4D2',  isset($gd->M4D2) ? $gd->M4D2 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <img class="img_flags" src="{{asset('img/flags/iceland.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        Iceland
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
                                                                                <div class="col-md-12">
                                                                                     Saint Petersburg
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-5 team_left">
                                                                                        Nigeria
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <img class="img_flags" src="{{asset('img/flags/nigeria.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <div class="form-group pikcs">
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
                                                                                        <div class="form-group pikcs">
                                                                                            <input type="text" name="M5D1" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M5D1" onblur="match_games_D()" value="{{ old('M5D1',  isset($gd->M5D1) ? $gd->M5D1 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <img class="img_flags" src="{{asset('img/flags/argentina.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        Argentina
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
                                                                                <div class="col-md-12">
                                                                                    Rostov-on-Don
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-5 team_left">
                                                                                        Iceland
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <img class="img_flags" src="{{asset('img/flags/iceland.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <div class="form-group pikcs">
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
                                                                                        <div class="form-group pikcs">
                                                                                            <input type="text" name="M6D3" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M6D3" onblur="match_games_D()" value="{{ old('M6D3',  isset($gd->M6D3) ? $gd->M6D3 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <img class="img_flags" src="{{asset('img/flags/croatia.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        Croatia
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
                                                                            <th style="width: 60%;"></th>

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
                                                                                        Argentina
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
                                                                                        Nigeria
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
                                                                                        Iceland
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
                                                                                        Croatia
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
                                                                            <th>Venue</th>
                                                                            <th>1st Team</th>
                                                                            {{-- <th></th> --}}
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
                                                                                <div class="col-md-12">
                                                                                     Rostov-on-Don
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-5 team_left">
                                                                                        Brazil
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <img class="img_flags" src="{{asset('img/flags/brazil.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <div class="form-group pikcs">
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
                                                                                        <div class="form-group pikcs">
                                                                                            <input type="text" name="M1E2" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M1E2" onblur="match_games_E()" value="{{ old('M1E2',  isset($ge->M1E2) ? $ge->M1E2 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <img class="img_flags" src="{{asset('img/flags/switzerland.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        Switzerland
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
                                                                                <div class="col-md-12">
                                                                                    Samara
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-5 team_left">
                                                                                        Costa Rica
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <img class="img_flags" src="{{asset('img/flags/costa_rica.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <div class="form-group pikcs">
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
                                                                                        <div class="form-group pikcs">
                                                                                            <input type="text" name="M2E4" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M2E4" onblur="match_games_E()" value="{{ old('M2E4',  isset($ge->M2E4) ? $ge->M2E4 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <img class="img_flags" src="{{asset('img/flags/serbia.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        Serbia
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
                                                                                <div class="col-md-12">
                                                                                    Saint Petersburg
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-5 team_left">
                                                                                        Brazil
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <img class="img_flags" src="{{asset('img/flags/brazil.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <div class="form-group pikcs">
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
                                                                                        <div class="form-group pikcs">
                                                                                            <input type="text" name="M3E3" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M3E3" onblur="match_games_E()" value="{{ old('M3E3',  isset($ge->M3E3) ? $ge->M3E3 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <img class="img_flags" src="{{asset('img/flags/costa_rica.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        Costa Rica
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
                                                                                <div class="col-md-12">
                                                                                    Kaliningrad
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-5 team_left">
                                                                                        Serbia
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <img class="img_flags" src="{{asset('img/flags/serbia.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <div class="form-group pikcs">
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
                                                                                        <div class="form-group pikcs">
                                                                                            <input type="text" name="M4E2" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M4E2" onblur="match_games_E()" value="{{ old('M4E2',  isset($ge->M4E2) ? $ge->M4E2 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <img class="img_flags" src="{{asset('img/flags/switzerland.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        Switzerland
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
                                                                                <div class="col-md-12">
                                                                                     Moscow
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-5 team_left">
                                                                                        Serbia
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <img class="img_flags" src="{{asset('img/flags/serbia.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <div class="form-group pikcs">
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
                                                                                        <div class="form-group pikcs">
                                                                                            <input type="text" name="M5E1" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M5E1" onblur="match_games_E()" value="{{ old('M5E1',  isset($ge->M5E1) ? $ge->M5E1 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <img class="img_flags" src="{{asset('img/flags/brazil.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        Brazil
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
                                                                                <div class="col-md-12">
                                                                                     Nizhny Novgorod
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-5 team_left">
                                                                                        Switzerland
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <img class="img_flags" src="{{asset('img/flags/switzerland.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <div class="form-group pikcs">
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
                                                                                        <div class="form-group pikcs">
                                                                                            <input type="text" name="M6E3" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M6E3" onblur="match_games_E()" value="{{ old('M6E3',  isset($ge->M6E3) ? $ge->M6E3 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <img class="img_flags" src="{{asset('img/flags/costa_rica.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        Costa Rica
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
                                                                            <th style="width: 60%;"></th>

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
                                                                                        Brazil
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
                                                                                        Serbia
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
                                                                                        Switzerland
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
                                                                                        Costa Rica
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
                                                                            <th>Venue</th>
                                                                            <th>1st Team</th>
                                                                            {{-- <th></th> --}}
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
                                                                                <div class="col-md-12">
                                                                                     Moscow
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-5 team_left">
                                                                                        Germany
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <img class="img_flags" src="{{asset('img/flags/Germany.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <div class="form-group pikcs">
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
                                                                                        <div class="form-group pikcs">
                                                                                            <input type="text" name="M1F2" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M1F2" onblur="match_games_F()" value="{{ old('M1F2',  isset($gf->M1F2) ? $gf->M1F2 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <img class="img_flags" src="{{asset('img/flags/mexico.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        Mexico
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
                                                                                <div class="col-md-12">
                                                                                     Nizhny Novgorod
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-5 team_left">
                                                                                        Sweden
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <img class="img_flags" src="{{asset('img/flags/sweden.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <div class="form-group pikcs">
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
                                                                                        <div class="form-group pikcs">
                                                                                            <input type="text" name="M2F4" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M2F4" onblur="match_games_F()" value="{{ old('M2F4',  isset($gf->M2F4) ? $gf->M2F4 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <img class="img_flags" src="{{asset('img/flags/south_korea.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        South Korea
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
                                                                                <div class="col-md-12">
                                                                                    Sochi
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-5 team_left">
                                                                                        Germany
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <img class="img_flags" src="{{asset('img/flags/Germany.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <div class="form-group pikcs">
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
                                                                                        <div class="form-group pikcs">
                                                                                            <input type="text" name="M3F3" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M3F3" onblur="match_games_F()" value="{{ old('M3F3',  isset($gf->M3F3) ? $gf->M3F3 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <img class="img_flags" src="{{asset('img/flags/sweden.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        Sweden
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
                                                                                <div class="col-md-12">
                                                                                     Rostov-on-Don
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-5 team_left">
                                                                                        South Korea
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <img class="img_flags" src="{{asset('img/flags/south_korea.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <div class="form-group pikcs">
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
                                                                                        <div class="form-group pikcs">
                                                                                            <input type="text" name="M4F2" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M4F2" onblur="match_games_F()" value="{{ old('M4F2',  isset($gf->M4F2) ? $gf->M4F2 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <img class="img_flags" src="{{asset('img/flags/mexico.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        Mexico
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
                                                                                <div class="col-md-12">
                                                                                     Kazan
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-5 team_left">
                                                                                        South Korea
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <img class="img_flags" src="{{asset('img/flags/south_korea.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <div class="form-group pikcs">
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
                                                                                        <div class="form-group pikcs">
                                                                                            <input type="text" name="M5F1" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M5F1" onblur="match_games_F()" value="{{ old('M5F1',  isset($gf->M5F1) ? $gf->M5F1 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <img class="img_flags" src="{{asset('img/flags/Germany.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        Germany
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
                                                                                <div class="col-md-12">
                                                                                     Ekaterinburg
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-5 team_left">
                                                                                        Mexico
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <img class="img_flags" src="{{asset('img/flags/mexico.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <div class="form-group pikcs">
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
                                                                                        <div class="form-group pikcs">
                                                                                            <input type="text" name="M6F3" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M6F3" onblur="match_games_F()" value="{{ old('M6F3',  isset($gf->M6F3) ? $gf->M6F3 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <img class="img_flags" src="{{asset('img/flags/sweden.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        Sweden
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
                                                                            <th style="width: 60%;"></th>

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
                                                                                        Germany
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
                                                                                        South Korea
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
                                                                                        Mexico
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
                                                                                        Sweden
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
                                         {{-- <button type="submit" class="btn btn-primary" style="width: 100%;">
                                            {{ __('Save and go to Next Group') }} --}}
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </form>

                            {{-- GRUPO G --}}
                            <div class="tab-pane container" id="grupog">
                                <br>
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
                                                                            <th>Venue</th>
                                                                            <th>1st Team</th>
                                                                            {{-- <th></th> --}}
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
                                                                                <div class="col-md-12">
                                                                                     Sochi
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-5 team_left">
                                                                                        Belgium
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <img class="img_flags" src="{{asset('img/flags/belgium.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <div class="form-group pikcs">
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
                                                                                        <div class="form-group pikcs">
                                                                                            <input type="text" name="M1G2" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M1G2" onblur="match_games_G()" value="{{ old('M1G2',  isset($gg->M1G2) ? $gg->M1G2 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <img class="img_flags" src="{{asset('img/flags/panama.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        Panama
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
                                                                                <div class="col-md-12">
                                                                                     Volgograd
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-5 team_left">
                                                                                        Tunisia
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <img class="img_flags" src="{{asset('img/flags/tunisia.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <div class="form-group pikcs">
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
                                                                                        <div class="form-group pikcs">
                                                                                            <input type="text" name="M2G4" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M2G4" onblur="match_games_G()" value="{{ old('M2G4',  isset($gg->M2G4) ? $gg->M2G4 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <img class="img_flags" src="{{asset('img/flags/england.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        England
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
                                                                                <div class="col-md-12">
                                                                                    Moscow
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-5 team_left">
                                                                                        Belgium
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <img class="img_flags" src="{{asset('img/flags/belgium.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <div class="form-group pikcs">
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
                                                                                        <div class="form-group pikcs">
                                                                                            <input type="text" name="M3G3" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M3G3" onblur="match_games_G()" value="{{ old('M3G3',  isset($gg->M3G3) ? $gg->M3G3 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <img class="img_flags" src="{{asset('img/flags/tunisia.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        Tunisia
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
                                                                                <div class="col-md-12">
                                                                                      Nizhny Novgorod
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-5 team_left">
                                                                                        England
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <img class="img_flags" src="{{asset('img/flags/england.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <div class="form-group pikcs">
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
                                                                                        <div class="form-group pikcs">
                                                                                            <input type="text" name="M4G2" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M4G2" onblur="match_games_G()" value="{{ old('M4G2',  isset($gg->M4G2) ? $gg->M4G2 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <img class="img_flags" src="{{asset('img/flags/panama.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        Panama
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
                                                                                <div class="col-md-12">
                                                                                     Kaliningrad
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-5 team_left">
                                                                                        England
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <img class="img_flags" src="{{asset('img/flags/england.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <div class="form-group pikcs">
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
                                                                                        <div class="form-group pikcs">
                                                                                            <input type="text" name="M5G1" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M5G1" onblur="match_games_G()" value="{{ old('M5G1',  isset($gg->M5G1) ? $gg->M5G1 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <img class="img_flags" src="{{asset('img/flags/belgium.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        Belgium
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
                                                                                <div class="col-md-12">
                                                                                     Saransk
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-5 team_left">
                                                                                        Panama
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <img class="img_flags" src="{{asset('img/flags/panama.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <div class="form-group pikcs">
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
                                                                                        <div class="form-group pikcs">
                                                                                            <input type="text" name="M6G3" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M6G3" onblur="match_games_G()" value="{{ old('M6G3',  isset($gg->M6G3) ? $gg->M6G3 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <img class="img_flags" src="{{asset('img/flags/tunisia.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        Tunisia
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
                                                                            <th style="width: 60%;"></th>

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
                                                                                        Belgium
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
                                                                                        England
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
                                                                                        Panama
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
                                                                                        Tunisia
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
                                        <input type="button" name="submitgroupg" id="submitgroupg" class="btn btn-info btn-block" value="Save and go to Second Stage" />
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
                                                                            <th>Venue</th>
                                                                            <th>1st Team</th>
                                                                            {{-- <th></th> --}}
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
                                                                                <div class="col-md-12">
                                                                                     Moscow
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-5 team_left">
                                                                                        Poland
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <img class="img_flags" src="{{asset('img/flags/poland.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <div class="form-group pikcs">
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
                                                                                        <div class="form-group pikcs">
                                                                                            <input type="text" name="M1H2" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M1H2" onblur="match_games_H()" value="{{ old('M1H2',  isset($gh->M1H2) ? $gh->M1H2 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <img class="img_flags" src="{{asset('img/flags/senegal.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        Senegal
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
                                                                                <div class="col-md-12">
                                                                                     Saransk
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-5 team_left">
                                                                                        Colombia
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <img class="img_flags" src="{{asset('img/flags/Colombia.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <div class="form-group pikcs">
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
                                                                                        <div class="form-group pikcs">
                                                                                            <input type="text" name="M2H4" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M2H4" onblur="match_games_H()" value="{{ old('M2H4',  isset($gh->M2H4) ? $gh->M2H4 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <img class="img_flags" src="{{asset('img/flags/japan.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        Japan
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
                                                                                <div class="col-md-12">
                                                                                     Kazan
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-5 team_left">
                                                                                        Poland
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <img class="img_flags" src="{{asset('img/flags/poland.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <div class="form-group pikcs">
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
                                                                                        <div class="form-group pikcs">
                                                                                            <input type="text" name="M3H3" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M3H3" onblur="match_games_H()" value="{{ old('M3H3',  isset($gh->M3H3) ? $gh->M3H3 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <img class="img_flags" src="{{asset('img/flags/Colombia.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        Colombia
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
                                                                                <div class="col-md-12">
                                                                                      Ekaterinburg
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-5 team_left">
                                                                                        Japan
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <img class="img_flags" src="{{asset('img/flags/japan.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <div class="form-group pikcs">
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
                                                                                        <div class="form-group pikcs">
                                                                                            <input type="text" name="M4H2" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M4H2" onblur="match_games_H()" value="{{ old('M4H2',  isset($gh->M4H2) ? $gh->M4H2 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <img class="img_flags" src="{{asset('img/flags/senegal.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        Senegal
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
                                                                                <div class="col-md-12">
                                                                                     Volgograd
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-5 team_left">
                                                                                        Japan
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <img class="img_flags" src="{{asset('img/flags/japan.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <div class="form-group pikcs">
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
                                                                                        <div class="form-group pikcs">
                                                                                            <input type="text" name="M5H1" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M5H1" onblur="match_games_H()" value="{{ old('M5H1',  isset($gh->M5H1) ? $gh->M5H1 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <img class="img_flags" src="{{asset('img/flags/poland.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        Poland
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
                                                                                <div class="col-md-12">
                                                                                     Samara
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-5 team_left">
                                                                                        Senegal
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <img class="img_flags" src="{{asset('img/flags/senegal.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <div class="form-group pikcs">
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
                                                                                        <div class="form-group pikcs">
                                                                                            <input type="text" name="M6H3" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M6H3" onblur="match_games_H()" value="{{ old('M6H3',  isset($gh->M6H3) ? $gh->M6H3 : null) }}">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <img class="img_flags" src="{{asset('img/flags/Colombia.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        Colombia
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
                                                                            <th style="width: 60%;"></th>

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
                                                                                        Poland
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
                                                                                        Japan
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
                                                                                        Senegal
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
                                                                                        Colombia
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
                                        <input type="button" name="submitgrouph" id="submitgrouph" class="btn btn-info btn-block" value="Save and go to Next Group" />

                                    </div>
                                </div>
                            </div>

                        </form>

                            {{-- SECOND STAGE --}}
                            <div class="tab-pane container" id="grupoRoun">
                                <form name="secondstage" id="secondstage">

                                    @csrf

                                    <input type="hidden" name="id_poll" value="{{$poll->iduser_poll}}"> 
                                <br>
                                <div class="row">
                                    {{-- Round of 16 --}}
                                    <div class="col-md-2.4">
                                        <div class="card">
                                            <div class="card-header">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <h6>{{ __('Round of 16') }} </h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                {{-- 1A --}}
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        
                                                        <table class="display table_second_stage">
                                                            <tbody>
                                                                 @if($winA == null)
                                                                <tr>
                                                                    <td style="width: 30%; height: 30px;"></td>
                                                                    <td style="width: 70%; height: 30px;"></td>
                                                                    
                                                                </tr>
                                                                @else
                                                                <tr>
                                                                    <td style="width: 30%; height: 30px;">
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <img class="img_flags" src="{{asset('img/flags/').'/'.str_replace(' ', '_', strtolower($winA->team_name)).'.png'}}">
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td style="width: 70%; height: 30px;">
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

                                                <div style="height: 10px;"></div>

                                                {{-- 2B --}}
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <table class="display table_second_stage">
                                                            <tbody>
                                                                @if($winB == null)
                                                                <tr>
                                                                    <td style="width: 30%; height: 30px;"></td>
                                                                    <td style="width: 70%; height: 30px;"></td>
                                                                </tr>
                                                                @else
                                                                <tr>
                                                                    <td style="width: 30%; height: 30px;">
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <img class="img_flags" src="{{asset('img/flags/').'/'.str_replace(' ', '_', strtolower($winB->team_rumup)).'.png'}}">
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td style="width: 70%; height: 30px;">
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

                                                <hr>

                                                {{-- 1C --}}
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        
                                                        <table class="display table_second_stage">
                                                            <tbody>
                                                                 @if($winC == null)
                                                                <tr>
                                                                    <td style="width: 30%; height: 30px;"></td>
                                                                    <td style="width: 70%; height: 30px;"></td>
                                                                </tr>
                                                                @else
                                                                <tr>
                                                                    <td style="width: 30%; height: 30px;">
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <img class="img_flags" src="{{asset('img/flags/').'/'.str_replace(' ', '_', strtolower($winC->team_name)).'.png'}}">
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td style="width: 70%; height: 30px;">
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

                                                <div style="height: 10px;"></div>
                                                
                                                {{-- 2D --}}
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <table class="display table_second_stage">
                                                            <tbody>
                                                                @if($winD == null)
                                                                <tr>
                                                                    <td style="width: 30%; height: 30px;"></td>
                                                                    <td style="width: 70%; height: 30px;"></td>
                                                                    
                                                                </tr>
                                                                @else
                                                                <tr>
                                                                    <td style="width: 30%; height: 30px;">
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <img class="img_flags" src="{{asset('img/flags/').'/'.str_replace(' ', '_', strtolower($winD->team_rumup)).'.png'}}">
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td style="width: 70%; height: 30px;">
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

                                                <hr>

                                                {{-- 1E --}}
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        
                                                        <table class="display table_second_stage">
                                                            <tbody>
                                                                 @if($winE == null)
                                                                <tr>
                                                                    <td style="width: 30%; height: 30px;"></td>
                                                                    <td style="width: 70%; height: 30px;"></td>
                                                                </tr>
                                                                @else
                                                                <tr>
                                                                    <td style="width: 30%; height: 30px;">
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <img class="img_flags" src="{{asset('img/flags/').'/'.str_replace(' ', '_', strtolower($winE->team_name)).'.png'}}">
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td style="width: 70%; height: 30px;">
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

                                                <div style="height: 10px;"></div>
                                                
                                                {{-- 2F --}}
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <table class="display table_second_stage">
                                                            <tbody>
                                                                @if($winF == null)
                                                                <tr>
                                                                    <td style="width: 30%; height: 30px;"></td>
                                                                    <td style="width: 70%; height: 30px;"></td>
                                                                </tr>
                                                                @else
                                                                <tr>
                                                                    <td style="width: 30%; height: 30px;">
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <img class="img_flags" src="{{asset('img/flags/').'/'.str_replace(' ', '_', strtolower($winF->team_rumup)).'.png'}}">
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td style="width: 70%; height: 30px;">
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

                                                <hr>

                                                {{-- 1G --}}
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        
                                                        <table class="display table_second_stage">
                                                            <tbody>
                                                                 @if($winG == null)
                                                                <tr>
                                                                    <td style="width: 30%; height: 30px;"></td>
                                                                    <td style="width: 70%; height: 30px;"></td>
                                                                </tr>
                                                                @else
                                                                <tr>
                                                                    <td style="width: 30%; height: 30px;">
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <img class="img_flags" src="{{asset('img/flags/').'/'.str_replace(' ', '_', strtolower($winG->team_name)).'.png'}}">
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td style="width: 70%; height: 30px;">
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

                                                <div style="height: 10px;"></div>
                                                
                                                {{-- 2H --}}
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <table class="display table_second_stage">
                                                            <tbody>
                                                                @if($winH == null)
                                                                <tr>
                                                                    <td style="width: 30%; height: 30px;"></td>
                                                                    <td style="width: 70%; height: 30px;"></td>
                                                                </tr>
                                                                @else
                                                                <tr>
                                                                    <td style="width: 30%; height: 30px;">
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <img class="img_flags" src="{{asset('img/flags/').'/'.str_replace(' ', '_', strtolower($winH->team_rumup)).'.png'}}">
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td style="width: 70%; height: 30px;">
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

                                                <hr>

                                                {{-- 1B --}}
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        
                                                        <table class="display table_second_stage">
                                                            <tbody>
                                                                 @if($winB == null)
                                                                <tr>
                                                                    <td style="width: 30%; height: 30px;"></td>
                                                                    <td style="width: 70%; height: 30px;"></td>
                                                                </tr>
                                                                @else
                                                                <tr>
                                                                    <td style="width: 30%; height: 30px;">
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <img class="img_flags" src="{{asset('img/flags/').'/'.str_replace(' ', '_', strtolower($winB->team_name)).'.png'}}">
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td style="width: 70%; height: 30px;">
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

                                                <div style="height: 10px;"></div>

                                                {{-- 2A --}}
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <table class="display table_second_stage">
                                                            <tbody>
                                                                @if($winA == null)
                                                                <tr>
                                                                    <td style="width: 30%; height: 30px;"></td>
                                                                    <td style="width: 70%; height: 30px;"></td>
                                                                </tr>
                                                                @else
                                                                <tr>
                                                                    <td style="width: 30%; height: 30px;">
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <img class="img_flags" src="{{asset('img/flags/').'/'.str_replace(' ', '_', strtolower($winA->team_rumup)).'.png'}}">
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td style="width: 70%; height: 30px;">
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

                                                <hr>

                                                {{-- 1D --}}
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        
                                                        <table class="display table_second_stage">
                                                            <tbody>
                                                                 @if($winD == null)
                                                                <tr>
                                                                    <td style="width: 30%; height: 30px;"></td>
                                                                    <td style="width: 70%; height: 30px;"></td>
                                                                </tr>
                                                                @else
                                                                <tr>
                                                                    <td style="width: 30%; height: 30px;">
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <img class="img_flags" src="{{asset('img/flags/').'/'.str_replace(' ', '_', strtolower($winD->team_name)).'.png'}}">
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td style="width: 70%; height: 30px;">
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

                                                <div style="height: 10px;"></div>
                                                
                                                {{-- 2C --}}
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <table class="display table_second_stage">
                                                            <tbody>
                                                                @if($winC == null)
                                                                <tr>
                                                                    <td style="width: 30%; height: 30px;"></td>
                                                                    <td style="width: 70%; height: 30px;"></td>
                                                                </tr>
                                                                @else
                                                                <tr>
                                                                    <td style="width: 30%; height: 30px;">
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <img class="img_flags" src="{{asset('img/flags/').'/'.str_replace(' ', '_', strtolower($winC->team_rumup)).'.png'}}">
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td style="width: 70%; height: 30px;">
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

                                                <hr>

                                                {{-- 1F --}}
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        
                                                        <table class="display table_second_stage">
                                                            <tbody>
                                                                 @if($winF == null)
                                                                <tr>
                                                                    <td style="width: 30%; height: 30px;"></td>
                                                                    <td style="width: 70%; height: 30px;"></td>
                                                                </tr>
                                                                @else
                                                                <tr>
                                                                    <td style="width: 30%; height: 30px;">
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <img class="img_flags" src="{{asset('img/flags/').'/'.str_replace(' ', '_', strtolower($winF->team_name)).'.png'}}">
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td style="width: 70%; height: 30px;">
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

                                                <div style="height: 10px;"></div>
                                                
                                                {{-- 2E --}}
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <table class="display table_second_stage">
                                                            <tbody>
                                                                @if($winE == null)
                                                                <tr>
                                                                    <td style="width: 30%; height: 30px;"></td>
                                                                    <td style="width: 70%; height: 30px;"></td>
                                                                </tr>
                                                                @else
                                                                <tr>
                                                                    <td style="width: 30%; height: 30px;">
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <img class="img_flags" src="{{asset('img/flags/').'/'.str_replace(' ', '_', strtolower($winE->team_rumup)).'.png'}}">
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td style="width: 70%; height: 30px;">
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

                                                <hr>

                                                {{-- 1H --}}
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        
                                                        <table class="display table_second_stage">
                                                            <tbody>
                                                                 @if($winH == null)
                                                                <tr>
                                                                    <td style="width: 30%; height: 30px;"></td>
                                                                    <td style="width: 70%; height: 30px;"></td>
                                                                </tr>
                                                                @else
                                                                <tr>
                                                                    <td style="width: 30%; height: 30px;">
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <img class="img_flags" src="{{asset('img/flags/').'/'.str_replace(' ', '_', strtolower($winH->team_name)).'.png'}}">
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td style="width: 70%; height: 30px;">
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

                                                <div style="height: 28px;"></div>
                                                
                                                {{-- 2G --}}
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <table class="display table_second_stage">
                                                            <tbody>
                                                                @if($winG == null)
                                                                <tr>
                                                                    <td style="width: 30%; height: 30px;"></td>
                                                                    <td style="width: 50%; height: 30px;"></td>
                                                                </tr>
                                                                @else
                                                                <tr>
                                                                    <td style="width: 30%; height: 30px;">
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <img class="img_flags" src="{{asset('img/flags/').'/'.str_replace(' ', '_', strtolower($winG->team_rumup)).'.png'}}">
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td style="width: 70%; height: 30px;">
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
                                    <div class="col-md-2.4">
                                        <div class="card">
                                            <div class="card-header">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <h6>{{ __('Quarter-finals') }} </h6>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card-body">
                                                <div style="height: 40px;"></div>
                                                {{-- 1A - 2B --}}
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        
                                                        <table class="display table_second_stage">
                                                            <tbody>
                                                                @if($winA == null && $winA)
                                                                <tr>
                                                                    <td style="width: 30%; height: 30px;"></td>
                                                                    <td style="width: 70%; height: 30px;"></td>
                                                                </tr>
                                                                @else
                                                                <tr>
                                                                    <td style="width: 30%; height: 30px;">
                                                                         <img class="img_flags_WRound1A2B" src="">
                                                                    </td>
                                                                       
                                                                    <td style="width: 70%; height: 30px;">
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

                                                <div style="height: 10px;"></div>

                                                {{-- 1C - 2D --}}
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <table class="display table_second_stage">
                                                            <tbody>
                                                                 @if($winC == null && $winD)
                                                                <tr>
                                                                    <td style="width: 30%; height: 30px;"></td>
                                                                    <td style="width: 70%; height: 30px;"></td>
                                                                </tr>
                                                                @else
                                                                <tr>
                                                                    <td style="width: 30%; height: 30px;"></td>
                                                                    <td style="width: 70%; height: 30px;">
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

                                                <div style="height: 95px;"></div>

                                                {{-- 1E - 2F --}}
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <table class="display table_second_stage">
                                                            <tbody>
                                                                 @if($winE == null && $winF)
                                                                <tr>
                                                                    <td style="width: 30%; height: 30px;"></td>
                                                                    <td style="width: 70%; height: 30px;"></td>
                                                                </tr>
                                                                @else
                                                                <tr>
                                                                    <td style="width: 30%; height: 30px;"></td>
                                                                    <td style="width: 70%; height: 30px;">
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

                                                <div style="height: 10px;"></div>

                                                {{-- 1G - 2H --}}
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <table class="display table_second_stage">
                                                            <tbody>
                                                                 @if($winG == null && $winH)
                                                                <tr>
                                                                    <td style="width: 30%; height: 30px;"></td>
                                                                    <td style="width: 70%; height: 30px;"></td>
                                                                </tr>
                                                                @else
                                                                <tr>
                                                                    <td style="width: 30%; height: 30px;"></td>
                                                                    <td style="width: 70%; height: 30px;">
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

                                                <div style="height: 98px;"></div>

                                                {{-- 1B - 2A --}}
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <table class="display table_second_stage">
                                                            <tbody>
                                                                 @if($winB == null && $winA)
                                                                <tr>
                                                                    <td style="width: 30%; height: 30px;"></td>
                                                                    <td style="width: 70%; height: 30px;"></td>
                                                                </tr>
                                                                @else
                                                                <tr>
                                                                    <td style="width: 30%; height: 30px;"></td>
                                                                    <td style="width: 70%; height: 30px;">
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

                                                <div style="height: 10px;"></div>

                                                {{-- 1D - 2C --}}
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <table class="display table_second_stage">
                                                            <tbody>
                                                                 @if($winD == null && $winC)
                                                                <tr>
                                                                    <td style="width: 30%; height: 30px;"></td>
                                                                    <td style="width: 70%; height: 30px;"></td>
                                                                </tr>
                                                                @else
                                                                <tr>
                                                                    <td style="width: 30%; height: 30px;"></td>
                                                                    <td style="width: 70%; height: 30px;">
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

                                                <div style="height: 100px;"></div>

                                                {{-- 1F - 2E --}}
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <table class="display table_second_stage">
                                                            <tbody>
                                                                 @if($winF == null && $winE)
                                                                <tr>
                                                                    <td style="width: 30%; height: 30px;"></td>
                                                                    <td style="width: 70%; height: 30px;"></td>
                                                                </tr>
                                                                @else
                                                                <tr>
                                                                    <td style="width: 30%; height: 30px;"></td>
                                                                    <td style="width: 70%; height: 30px;">
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

                                                <div style="height: 10px;"></div>

                                                {{-- 1H - 2G --}}
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <table class="display table_second_stage">
                                                            <tbody>
                                                                 @if($winH == null && $winG)
                                                                <tr>
                                                                    <td style="width: 30%; height: 30px;"></td>
                                                                    <td style="width: 70%; height: 30px;"></td>
                                                                </tr>
                                                                @else
                                                                <tr>
                                                                    <td style="width: 30%; height: 30px;"></td>
                                                                    <td style="width: 70%; height: 30px;">
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

                                                <div style="height: 40px;"></div>
                                            </div>
                                        </div>  {{--  end card --}}
                                    </div> {{--  end col div --}}

                                    {{-- Semi-finals --}}
                                    <div class="col-md-2.4">
                                        <div class="card">
                                            <div class="card-header">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <h6>{{ __('Semi-finals') }} </h6>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div style="height: 130px;"></div>
                                                        {{-- 1A - 2B --}}
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                
                                                                <table class="display table_second_stage">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td style="width: 30%; height: 30px;"></td>
                                                                            <td style="width: 70%; height: 30px;">
                                                                                <div class="row">
                                                                                    <div class="col-md-12">
                                                                                         {{-- <select class="form-control Wquarter1_2" id="Wquarter1_2" name="Wquarter1_2">
                                                                                            <option>Pick a Team...</option>
                                                                                            
                                                                                        </select> --}}
                                                                                        {!! Form::select('Wquarter1_2', [
                                                                                            '' => 'Pick a Team',
                                                                                            ], old('value', isset($ss->semi_1) ? $ss->semi_1 : null ), [ 'class' =>  'form-control Wquarter1_2', 'required', 'id' => 'Wquarter1_2']) !!}
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div style="height: 10px;"></div>

                                                        {{-- 1C - 2D --}}
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <table class="display table_second_stage">
                                                                    <tbody>
                                                                         
                                                                        <tr>
                                                                            <td style="width: 30%; height: 30px;"></td>
                                                                            <td style="width: 70%; height: 30px;">
                                                                                <div class="row">
                                                                                    <div class="col-md-12">
                                                                                        {{-- <select class="form-control Wquarter3_4" id="Wquarter3_4" name="Wquarter3_4">
                                                                                            <option>Pick a Team...</option>
                                                                                        </select> --}}
                                                                                        {!! Form::select('Wquarter3_4', [
                                                                                            '' => 'Pick a Team',
                                                                                            ], old('value', isset($ss->semi_2) ? $ss->semi_2 : null ), [ 'class' =>  'form-control Wquarter3_4', 'required', 'id' => 'Wquarter3_4']) !!}
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div style="height: 100px;"></div>

                                                        {{-- 1E - 2F --}}
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <table class="display table_second_stage">
                                                                    <tbody>
                                                                        
                                                                        <tr>
                                                                            <td style="width: 30%; height: 30px;"></td>
                                                                            <td style="width: 80%; height: 30px;">
                                                                                <div class="row">
                                                                                    <div class="col-md-12">
                                                                                         {{-- <select class="form-control Wquarter5_6" id="Wquarter5_6" name="Wquarter5_6">
                                                                                            <option>Pick a Team...</option>
                                                                                        </select> --}}
                                                                                        {!! Form::select('Wquarter5_6', [
                                                                                            '' => 'Pick a Team',
                                                                                            ], old('value', isset($ss->semi_3) ? $ss->semi_3 : null ), [ 'class' =>  'form-control Wquarter5_6', 'required', 'id' => 'Wquarter5_6']) !!}

                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div style="height: 10px;"></div>

                                                        {{-- 1G - 2H --}}
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <table class="display table_second_stage">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td style="width: 30%; height: 30px;"></td>
                                                                            <td style="width: 70%; height: 30px;">
                                                                                <div class="row">
                                                                                    <div class="col-md-12">
                                                                                            {{-- select class="form-control Wquarter7_8" id="Wquarter7_8" name="Wquarter7_8">
                                                                                                <option>Pick a Team...</option>
                                                                                            </select> --}}
                                                                                            {!! Form::select('Wquarter7_8', [
                                                                                            '' => 'Pick a Team',
                                                                                            ], old('value', isset($ss->semi_4) ? $ss->semi_4 : null ), [ 'class' =>  'form-control Wquarter7_8', 'required', 'id' => 'Wquarter7_8']) !!}
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div style="height: 327px;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>  {{--  end card --}}
                                    </div> {{--  end col div --}}

                                    {{-- Semi-finals --}}
                                     <div class="col-md-2.4">
                                        <div class="card">
                                            <div class="card-header">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <h6>{{ __('Finals') }} </h6>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div style="height: 230px;"></div>
                                                        {{-- 1A - 2B --}}
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                
                                                                <table class="display table_second_stage">
                                                                    <tbody>
                                                                        @if($winA == null && $winA)
                                                                        <tr>
                                                                            <td style="width: 30%; height: 30px;"></td>
                                                                            <td style="width: 70%; height: 30px;"></td>
                                                                        </tr>
                                                                        @else
                                                                        <tr>
                                                                            <td style="width: 30%; height: 30px;"></td>
                                                                            <td style="width: 70%; height: 30px;">
                                                                                <div class="row">
                                                                                    <div class="col-md-12">
                                                                                         {{-- <select class="form-control WSemi1_2" id="WSemi1_2" name="WSemi1_2">
                                                                                                <option>Pick a Team...</option>
                                                                                            </select> --}}
                                                                                            {!! Form::select('WSemi1_2', [
                                                                                            '' => 'Pick a Team',
                                                                                            ], old('value', isset($ss->final_1) ? $ss->final_1 : null ), [ 'class' =>  'form-control WSemi1_2', 'required', 'id' => 'WSemi1_2']) !!}
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        @endif
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div style="height: 10px;"></div>

                                                        {{-- 1C - 2D --}}
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <table class="display table_second_stage">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td style="width: 30%; height: 30px;"></td>
                                                                            <td style="width: 80%; height: 30px;">
                                                                                <div class="row">
                                                                                    <div class="col-md-12">
                                                                                         {{-- <select class="form-control WSemi3_4" id="WSemi3_4" name="WSemi3_4">
                                                                                                <option>Pick a Team...</option>
                                                                                            </select> --}}
                                                                                        {!! Form::select('WSemi3_4', [
                                                                                            '' => 'Pick a Team',
                                                                                            ], old('value', isset($ss->final_2) ? $ss->final_2 : null ), [ 'class' =>  'form-control WSemi3_4', 'required', 'id' => 'WSemi3_4']) !!}

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
                                            <div style="height: 420px;"></div>
                                        </div>  {{--  end card --}}
                                    </div> {{--  end col div --}}

                                    <div class="col-md-2.4">
                                        <div class="card">
                                            <div class="card-header">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <h6>Winner</h6>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div style="height: 230px;"></div>
                                                        
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                
                                                                <table class="display table_second_stage">
                                                                    <tbody>
                                                                        <tr>
                                                                            <br>
                                                                            <td style="width: 30%; height: 30px;"></td>
                                                                            <td style="width: 70%; height: 30px;">
                                                                                <div class="row">
                                                                                    <div class="col-md-12">
                                                                                         {{-- <select class="form-control Winner1" id="Winner1" name="Winner1">
                                                                                            <option>Pick a Team...</option>
                                                                                        </select> --}}
                                                                                        {!! Form::select('Winner1', [
                                                                                            '' => 'Pick a Team',
                                                                                            ], old('value', isset($ss->winner) ? $ss->winner : null ), [ 'class' =>  'form-control Winner1', 'required', 'id' => 'Winner1']) !!}

                                                                                            {{-- {{$ss->winner}} --}}

                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                     </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div style="height: 10px;"></div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div style="height: 440px;"></div>
                                        </div>  
                                    </div>

                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-6">
                                         <button type="button" name="" id="" class="btn btn-primary" style="width: 100%;">
                                            {{ __('Save and go to Home Page') }}
                                        </button>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="button" name="submitgrouph" id="submitSecondStage" class="btn btn-info btn-block" value="Save" />
                                         {{-- <button type="submit" class="btn btn-primary" style="width: 100%;">
                                            {{ __('Save and go to Next Group') }} --}}
                                        </button>

                                </form>
                                    </div>
                                </div>
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
                            <div class="col-md-10 offset-md-1">
                                <div class="form-group">
                                    <button type="" class="btn btn-primary" onclick="window.location='{{ route('login') }}'" style="width: 100%;">
                                        {{ __('Printable Version of my Picks') }}
                                    </button>
                                </div>    
                            </div>
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
                                    </button>
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

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.js"> </script>

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

        // QUARTER FINALS

         $("select.WRound1A2B").change(function(){
            // save variables on change
            var selectedTeamAvalue = $(".WRound1A2B option:selected").val();
            var selectedTeamAtext = $(".WRound1A2B option:selected").text();

            if (($('#Wquarter1_2 option').length) <= 2) {

                $('select.Wquarter1_2').append($('<option/>', { 
                value: selectedTeamAvalue,
                text : selectedTeamAtext 
            }));    
            } else { 
                $('#Wquarter1_2 option:gt(0)').remove();
                $('select.Wquarter1_2').append($('<option/>', { 
                value: selectedTeamAvalue,
                text : selectedTeamAtext 
            })); 
            }
            

        });

         $("select.WRound1C2D").change(function(){
            var selectedTeamBvalue = $(".WRound1C2D option:selected").val();
            var selectedTeamBtext = $(".WRound1C2D option:selected").text();

            

            if (($('#Wquarter1_2 option').length) <= 2) {
                $('select.Wquarter1_2').append($('<option/>', { 
                value: selectedTeamBvalue,
                text : selectedTeamBtext 
            }));   
            } else { 
                $('#Wquarter1_2 option:gt(0)').remove();
                $('select.Wquarter1_2').append($('<option/>', { 
                value: selectedTeamBvalue,
                text : selectedTeamBtext 
            })); 
            }
        });



        $("select.WRound1E2F").change(function(){
            var selectedTeamCvalue = $(".WRound1E2F option:selected").val();
            var selectedTeamCtext = $(".WRound1E2F option:selected").text();
            
            $('select.Wquarter3_4').append($('<option/>', { 
                value: selectedTeamCvalue,
                text : selectedTeamCtext 
            }));

        });

        $("select.WRound1G2H").change(function(){
            var selectedTeamDvalue = $(".WRound1G2H option:selected").val();
            var selectedTeamDtext = $(".WRound1G2H option:selected").text();

            $('select.Wquarter3_4').append($('<option/>', { 
                value: selectedTeamDvalue,
                text : selectedTeamDtext 
            }));

        });

        $("select.WRound1B2A").change(function(){
            var selectedTeamEvalue = $(".WRound1B2A option:selected").val();
            var selectedTeamEtext = $(".WRound1B2A option:selected").text();

            $('select.Wquarter5_6').append($('<option/>', { 
                value: selectedTeamEvalue,
                text : selectedTeamEtext 
            }));
            
        });

        $("select.WRound1D2C").change(function(){
            var selectedTeamFvalue = $(".WRound1D2C option:selected").val();
            var selectedTeamFtext = $(".WRound1D2C option:selected").text();
            
            $('select.Wquarter5_6').append($('<option/>', { 
                value: selectedTeamFvalue,
                text : selectedTeamFtext 
            }));
        });

        $("select.WRound1F2E").change(function(){
            var selectedTeamGvalue = $(".WRound1F2E option:selected").val();
            var selectedTeamGtext = $(".WRound1F2E option:selected").text();
            
            $('select.Wquarter7_8').append($('<option/>', { 
                value: selectedTeamGvalue,
                text : selectedTeamGtext 
            }));
        });

        $("select.WRound1H2G").change(function(){
            var selectedTeamHvalue = $(".WRound1H2G option:selected").val();
            var selectedTeamHtext = $(".WRound1H2G option:selected").text();
            
            $('select.Wquarter7_8').append($('<option/>', { 
                value: selectedTeamHvalue,
                text : selectedTeamHtext 
            }));
        });


        // FINALS

        $("select.Wquarter1_2").change(function(){
            var selectedSemi1Value = $(".Wquarter1_2 option:selected").val();
            var selectedSemi1Text = $(".Wquarter1_2 option:selected").text();
            
            $('select.WSemi1_2').append($('<option/>', { 
                value: selectedSemi1Value,
                text : selectedSemi1Text 
            }));
        });

        $("select.Wquarter3_4").change(function(){
            var selectedSemi2Value = $(".Wquarter3_4 option:selected").val();
            var selectedSemi2Text = $(".Wquarter3_4 option:selected").text();
            
            $('select.WSemi1_2').append($('<option/>', { 
                value: selectedSemi2Value,
                text : selectedSemi2Text 
            }));
        });


        $("select.Wquarter5_6").change(function(){
            var selectedSemi3Value = $(".Wquarter5_6 option:selected").val();
            var selectedSemi3Text = $(".Wquarter5_6 option:selected").text();
            
            $('select.WSemi3_4').append($('<option/>', { 
                value: selectedSemi3Value,
                text : selectedSemi3Text 
            }));
        });


        $("select.Wquarter7_8").change(function(){
            var selectedSemi4Value = $(".Wquarter7_8 option:selected").val();
            var selectedSemi4Text = $(".Wquarter7_8 option:selected").text();
            
            $('select.WSemi3_4').append($('<option/>', { 
                value: selectedSemi4Value,
                text : selectedSemi4Text 
            }));
        });
        
        

        
        // FINAL

        

        $("select.WSemi1_2").change(function(){
            var selectedSemi4Value = $(".WSemi1_2 option:selected").val();
            var selectedSemi4Text = $(".WSemi1_2 option:selected").text();
            
            $('select.Winner1').append($('<option/>', { 
                value: selectedSemi4Value,
                text : selectedSemi4Text 
            }));
        });

        $("select.WSemi3_4").change(function(){
            var selectedSemi4Value = $(".WSemi3_4 option:selected").val();
            var selectedSemi4Text = $(".WSemi3_4 option:selected").text();
            
            $('select.Winner1').append($('<option/>', { 
                value: selectedSemi4Value,
                text : selectedSemi4Text 
            }));
        });


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
                        toastr.success('Saved');
                        // $('#idgrupoh').removeClass( "active show" );
                        // $('#idgrupoRoun').addClass( "active show" );
                        // $('#grupoh').removeClass( "active show" );
                        // $('#grupoRoun').addClass( "active show" );
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

        $('#WRound1A2B').change(function(event) {
            var team_name =$('#WRound1A2B').val();
            //$("#img_flags_WRound1A2B").attr('src', '/mg/flags/' + team_name + '.png');
            
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





