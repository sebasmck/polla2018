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
                                <a class="nav-link active" data-toggle="tab" href="#grupoa">Group A</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#grupob">Group B</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#grupoc">Group C</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#grupod">Group D</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#grupoe">Group E</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#grupof">Group F</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#grupog">Group G</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#grupoh">Group H</a>
                            </li>
                             <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#grupoRoun">Second Stage</a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">

                            {{-- GRUPO A --}}
                            <div class="tab-pane active container" id="grupoa">
                                <br>
                                <div class="row">
                                    <div class="col-md-7 col_group">
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
                                                    <div class="col-md-12">
                                                        <form action="/storegroupa" method="POST">
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
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M1A1" onblur="match_games()">
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
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M1A2" onblur="match_games()">
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
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M2A3" onblur="match_games()">
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
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M2A4" onblur="match_games()">
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
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M3A1" onblur="match_games()">
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
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M3A3" onblur="match_games()">
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
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M4A4" onblur="match_games()">
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
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M4A2" onblur="match_games()">
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
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M5A4" onblur="match_games()">
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
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M5A1" onblur="match_games()">
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
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M6A2" onblur="match_games()">
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
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M6A3" onblur="match_games()">
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
                                    <div class="col-md-5">
                                        {{-- Group Standings --}}
                                        <div class="row justify-content-center">
                                            <div class="col-md-12">
                                                <div class="card">
                                                    <div class="card-header"><h4>{{ __('Group Standings') }}</h4></div>

                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                        
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

                                                                            <select id="WA1" class="form-control">
                                                                                <option></option>
                                                                                <option id="A1" value="Russia">Russia</option>
                                                                                <option id="A2" value="Saudi Arabia">Saudi Arabia</option>
                                                                                <option id="A3" value="Egypt">Egypt</option>
                                                                                <option id="A4" value="Uruguay">Uruguay</option>
                                                                            </select>
                                                                        </div>
                                                                            
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group row">
                                                                            <div class="col-md-12">Group A runner-up</div>

                                                                            <select id="WA2" class="form-control">
                                                                                <option></option>
                                                                                <option id="A1" value="Russia">Russia</option>
                                                                                <option id="A2" value="Saudi Arabia">Saudi Arabia</option>
                                                                                <option id="A3" value="Egypt">Egypt</option>
                                                                                <option id="A4" value="Uruguay">Uruguay</option>
                                                                            </select>
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
                                         <button type="" class="btn btn-primary" style="width: 100%;">
                                            {{ __('Save and go home') }}
                                        </button>
                                    </div>
                                    <div class="col-md-6">
                                         <button type="submit" class="btn btn-primary" style="width: 100%;">
                                            {{ __('Save and continue') }}
                                        </button>
                                    </div>
                                </div>
                            </div>
                            
                            </form>





                            {{-- GRUPO B --}}
                            <div class="tab-pane container" id="grupob">
                                <br>
                                <div class="row">
                                    <div class="col-md-7 col_group">
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
                                                    <div class="col-md-12">
                                                    
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
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M1B1" onblur="match_games_B()">
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
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M1B2" onblur="match_games_B()">
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
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M2B3" onblur="match_games_B()">
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
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M2B4" onblur="match_games_B()">
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
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M3B1" onblur="match_games_B()">
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
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M3B3" onblur="match_games_B()">
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
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M4B4" onblur="match_games_B()">
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
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M4B2" onblur="match_games_B()">
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
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M5B4" onblur="match_games_B()">
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
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M5B1" onblur="match_games_B()">
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
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M6B2" onblur="match_games_B()">
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
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M6B3" onblur="match_games_B()">
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
                                                            <div class="col-md-12">
                                                        
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

                                                                            <select id="WB1" class="form-control">
                                                                                <option></option>
                                                                                <option id="B1" value="Portugal">Portugal</option>
                                                                                <option id="B2" value="Spain Arabia">Spain</option>
                                                                                <option id="B3" value="Morocco">Morocco</option>
                                                                                <option id="B4" value="Iran">Iran</option>
                                                                            </select>
                                                                        </div>
                                                                            
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group row">
                                                                            <div class="col-md-12">Group B runner-up</div>

                                                                            <select id="WB2" class="form-control">
                                                                                <option></option>
                                                                                <option id="B1" value="Portugal">Portugal</option>
                                                                                <option id="B2" value="Spain">Spain</option>
                                                                                <option id="B3" value="Morocco">Morocco</option>
                                                                                <option id="B4" value="Iran">Iran</option>
                                                                            </select>
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
                                         <button type="" class="btn btn-primary" style="width: 100%;">
                                            {{ __('Save and go home') }}
                                        </button>
                                    </div>
                                    <div class="col-md-6">
                                         <button type="submit" class="btn btn-primary" style="width: 100%;">
                                            {{ __('Save and continue') }}
                                        </button>
                                    </div>
                                </div>
                            </div>

                            {{-- GRUPO C --}}
                            <div class="tab-pane container" id="grupoc"> 
                                <br>
                                <div class="row">
                                    <div class="col-md-7 col_group">
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
                                                    <div class="col-md-12">
                                                    
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
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M1C1" onblur="match_games_C()">
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
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M1C2" onblur="match_games_C()">
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
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M2C3" onblur="match_games_C()">
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
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M2C4" onblur="match_games_C()">
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
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M3C1" onblur="match_games_C()">
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
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M3C3" onblur="match_games_C()">
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
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M4C4" onblur="match_games_C()">
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
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M4C2" onblur="match_games_C()">
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
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M5C4" onblur="match_games_C()">
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
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M5C1" onblur="match_games_C()">
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
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M6C2" onblur="match_games_C()">
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
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M6C3" onblur="match_games_C()">
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
                                                            <div class="col-md-12">
                                                        
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

                                                                            <select id="WC1" class="form-control">
                                                                                <option></option>
                                                                                <option id="C1" value="France">France</option>
                                                                                <option id="C2" value="Australia">Australia</option>
                                                                                <option id="C3" value="Peru">Peru</option>
                                                                                <option id="C4" value="Denmark">Denmark</option>
                                                                            </select>
                                                                        </div>
                                                                            
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group row">
                                                                            <div class="col-md-12">Group C runner-up</div>

                                                                            <select id="WC2" class="form-control">
                                                                                <option></option>
                                                                                <option id="C1" value="France">France</option>
                                                                                <option id="C2" value="Australia">Australia</option>
                                                                                <option id="C3" value="Peru">Peru</option>
                                                                                <option id="C4" value="Denmark">Denmark</option>
                                                                            </select>
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
                                         <button type="" class="btn btn-primary" style="width: 100%;">
                                            {{ __('Save and go home') }}
                                        </button>
                                    </div>
                                    <div class="col-md-6">
                                         <button type="submit" class="btn btn-primary" style="width: 100%;">
                                            {{ __('Save and continue') }}
                                        </button>
                                    </div>
                                </div>
                            </div>

                            {{-- GRUPO D --}}
                            <div class="tab-pane container" id="grupod"> 
                                <br>
                                <div class="row">
                                    <div class="col-md-7 col_group">
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
                                                    <div class="col-md-12">
                                                    
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
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M1D1" onblur="match_games_D()">
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
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M1D2" onblur="match_games_D()">
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
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M2D3" onblur="match_games_D()">
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
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M2D4" onblur="match_games_D()">
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
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M3D1" onblur="match_games_D()">
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
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M3D3" onblur="match_games_D()">
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
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M4D4" onblur="match_games_D()">
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
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M4D2" onblur="match_games_D()">
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
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M5D4" onblur="match_games_D()">
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
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M5D1" onblur="match_games_D()">
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
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M6D2" onblur="match_games_D()">
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
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M6D3" onblur="match_games_D()">
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
                                                            <div class="col-md-12">
                                                        
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

                                                                            <select id="WD1" class="form-control">
                                                                                <option></option>
                                                                                <option id="D1" value="Argentina">Argentina</option>
                                                                                <option id="D2" value="Iceland">Iceland</option>
                                                                                <option id="D3" value="Croatia">Croatia</option>
                                                                                <option id="D4" value="Nigeria">Nigeria</option>
                                                                            </select>
                                                                        </div>
                                                                            
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group row">
                                                                            <div class="col-md-12">Group D runner-up</div>

                                                                            <select id="WD2" class="form-control">
                                                                                <option></option>
                                                                                <option id="D1" value="Argentina">Argentina</option>
                                                                                <option id="D2" value="Iceland">Iceland</option>
                                                                                <option id="D3" value="Croatia">Croatia</option>
                                                                                <option id="D4" value="Nigeria">Nigeria</option>
                                                                            </select>
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
                                         <button type="" class="btn btn-primary" style="width: 100%;">
                                            {{ __('Save and go home') }}
                                        </button>
                                    </div>
                                    <div class="col-md-6">
                                         <button type="submit" class="btn btn-primary" style="width: 100%;">
                                            {{ __('Save and continue') }}
                                        </button>
                                    </div>
                                </div>
                            </div>

                            {{-- GRUPO E --}}
                            <div class="tab-pane container" id="grupoe">
                                <br>
                                <div class="row">
                                    <div class="col-md-7 col_group">
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
                                                    <div class="col-md-12">
                                                    
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
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M1E1" onblur="match_games_E()">
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
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M1E2" onblur="match_games_E()">
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
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M2E3" onblur="match_games_E()">
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
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M2E4" onblur="match_games_E()">
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
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M3E1" onblur="match_games_E()">
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
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M3E3" onblur="match_games_E()">
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
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M4E4" onblur="match_games_E()">
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
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M4E2" onblur="match_games_E()">
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
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M5E4" onblur="match_games_E()">
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
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M5E1" onblur="match_games_E()">
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
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M6E2" onblur="match_games_E()">
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
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M6E3" onblur="match_games_E()">
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
                                                            <div class="col-md-12">
                                                        
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

                                                                            <select id="WE1" class="form-control">
                                                                                <option></option>
                                                                                <option id="E1" value="Brazil">Brazil</option>
                                                                                <option id="E2" value="Switzerland">Switzerland</option>
                                                                                <option id="E3" value="Costa Rica">Costa Rica</option>
                                                                                <option id="E4" value="Serbia">Serbia</option>
                                                                            </select>
                                                                        </div>
                                                                            
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group row">
                                                                            <div class="col-md-12">Group E runner-up</div>

                                                                            <select id="WE2" class="form-control">
                                                                                <option></option>
                                                                                <option id="E1" value="Brazil">Brazil</option>
                                                                                <option id="E2" value="Switzerland">Switzerland</option>
                                                                                <option id="E3" value="Costa Rica">Costa Rica</option>
                                                                                <option id="E4" value="Serbia">Serbia</option>
                                                                            </select>
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
                                         <button type="" class="btn btn-primary" style="width: 100%;">
                                            {{ __('Save and go home') }}
                                        </button>
                                    </div>
                                    <div class="col-md-6">
                                         <button type="submit" class="btn btn-primary" style="width: 100%;">
                                            {{ __('Save and continue') }}
                                        </button>
                                    </div>
                                </div>
                            </div>

                            {{-- GRUPO F --}}
                            <div class="tab-pane container" id="grupof">
                                <br>
                                <div class="row">
                                    <div class="col-md-7 col_group">
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
                                                    <div class="col-md-12">
                                                    
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
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M1F1" onblur="match_games_F()">
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
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M1F2" onblur="match_games_F()">
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
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M2F3" onblur="match_games_F()">
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
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M2F4" onblur="match_games_F()">
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
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M3F1" onblur="match_games_F()">
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
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M3F3" onblur="match_games_F()">
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
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M4F4" onblur="match_games_F()">
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
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M4F2" onblur="match_games_F()">
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
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M5F4" onblur="match_games_F()">
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
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M5F1" onblur="match_games_F()">
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
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M6F2" onblur="match_games_F()">
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
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M6F3" onblur="match_games_F()">
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
                                                            <div class="col-md-12">
                                                        
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

                                                                            <select id="WF1" class="form-control">
                                                                                <option></option>
                                                                                <option id="F1" value="Germany">Germany</option>
                                                                                <option id="F2" value="Mexico">Mexico</option>
                                                                                <option id="F3" value="Sweden">Sweden</option>
                                                                                <option id="F4" value="South Korea">South Korea</option>
                                                                            </select>
                                                                        </div>
                                                                            
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group row">
                                                                            <div class="col-md-12">Group F runner-up</div>

                                                                            <select id="WF2" class="form-control">
                                                                                <option></option>
                                                                                <option id="F1" value="Germany">Germany</option>
                                                                                <option id="F2" value="Mexico">Mexico</option>
                                                                                <option id="F3" value="Sweden">Sweden</option>
                                                                                <option id="F4" value="South Korea">South Korea</option>
                                                                            </select>
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
                                         <button type="" class="btn btn-primary" style="width: 100%;">
                                            {{ __('Save and go home') }}
                                        </button>
                                    </div>
                                    <div class="col-md-6">
                                         <button type="submit" class="btn btn-primary" style="width: 100%;">
                                            {{ __('Save and continue') }}
                                        </button>
                                    </div>
                                </div>
                            </div>

                            {{-- GRUPO G --}}
                            <div class="tab-pane container" id="grupog">
                                <br>
                                <div class="row">
                                    <div class="col-md-7 col_group">
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
                                                    <div class="col-md-12">
                                                    
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
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M1G1" onblur="match_games_G()">
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
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M1G2" onblur="match_games_G()">
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
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M2G3" onblur="match_games_G()">
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
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M2G4" onblur="match_games_G()">
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
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M3G1" onblur="match_games_G()">
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
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M3G3" onblur="match_games_G()">
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
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M4G4" onblur="match_games_G()">
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
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M4G2" onblur="match_games_G()">
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
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M5G4" onblur="match_games_G()">
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
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M5G1" onblur="match_games_G()">
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
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M6G2" onblur="match_games_G()">
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
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M6G3" onblur="match_games_G()">
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
                                                            <div class="col-md-12">
                                                        
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

                                                                            <select id="WG1" class="form-control">
                                                                                <option></option>
                                                                                <option id="G1" value="Belgium">Belgium</option>
                                                                                <option id="G2" value="Panama">Panama</option>
                                                                                <option id="G3" value="Tunisia">Tunisia</option>
                                                                                <option id="G4" value="England">England</option>
                                                                            </select>
                                                                        </div>
                                                                            
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group row">
                                                                            <div class="col-md-12">Group G runner-up</div>

                                                                            <select id="WG2" class="form-control">
                                                                                <option></option>
                                                                                <option id="G1" value="Belgium">Belgium</option>
                                                                                <option id="G2" value="Panama">Panama</option>
                                                                                <option id="G3" value="Tunisia">Tunisia</option>
                                                                                <option id="G4" value="England">England</option>
                                                                            </select>
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
                                         <button type="" class="btn btn-primary" style="width: 100%;">
                                            {{ __('Save and go home') }}
                                        </button>
                                    </div>
                                    <div class="col-md-6">
                                         <button type="submit" class="btn btn-primary" style="width: 100%;">
                                            {{ __('Save and continue') }}
                                        </button>
                                    </div>
                                </div>
                            </div>

                            {{-- GRUPO H --}}
                            <div class="tab-pane container" id="grupoh">
                                <br>
                                <div class="row">
                                    <div class="col-md-7 col_group">
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
                                                    <div class="col-md-12">
                                                    
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
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M1H1" onblur="match_games_H()">
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
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M1H2" onblur="match_games_H()">
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
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M2H3" onblur="match_games_H()">
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
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M2H4" onblur="match_games_H()">
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
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M3H1" onblur="match_games_H()">
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
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M3H3" onblur="match_games_H()">
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
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M4H4" onblur="match_games_H()">
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
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M4H2" onblur="match_games_H()">
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
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M5H4" onblur="match_games_H()">
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
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M5H1" onblur="match_games_H()">
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
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M6H2" onblur="match_games_H()">
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
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M6H3" onblur="match_games_H()">
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
                                                            <div class="col-md-12">
                                                        
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

                                                                            <select id="WH1" class="form-control">
                                                                                <option></option>
                                                                                <option id="H1" value="Poland">Poland</option>
                                                                                <option id="H2" value="Senegal">Senegal</option>
                                                                                <option id="H3" value="Colombia">Colombia</option>
                                                                                <option id="H4" value="Japan">Japan</option>
                                                                            </select>
                                                                        </div>
                                                                            
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group row">
                                                                            <div class="col-md-12">Group H runner-up</div>

                                                                            <select id="WH2" class="form-control">
                                                                                <option></option>
                                                                                <option id="H1" value="Poland">Poland</option>
                                                                                <option id="H2" value="Senegal">Senegal</option>
                                                                                <option id="H3" value="Colombia">Colombia</option>
                                                                                <option id="H4" value="Japan">Japan</option>
                                                                            </select>
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
                                         <button type="" class="btn btn-primary" style="width: 100%;">
                                            {{ __('Save and go home') }}
                                        </button>
                                    </div>
                                    <div class="col-md-6">
                                         <button type="submit" class="btn btn-primary" style="width: 100%;">
                                            {{ __('Save and continue') }}
                                        </button>
                                    </div>
                                </div>
                            </div>

                            {{-- SECOND STAGE --}}
                            <div class="tab-pane container" id="grupoRoun">
                                <br>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <h4>{{ __('Second Satage') }} </h4>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                    
                                                            <table id="myTableh" class="table table-striped table-hover table_picks">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>No</th>
                                                                            <th>Date</th>
                                                                            <th>Venue</th>
                                                                            <th>1st Team</th>
                                                                            <th></th>
                                                                            <th>2st Team</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>
                                                                                <div class="col-md-2">
                                                                                    1
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="col-md-12">
                                                                                    Tue 19/6
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="col-md-12">
                                                                                    Moscow
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-6">
                                                                                        Poland
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <img class="img_flags" src="{{asset('img/flags/saudi_arabia.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <div class="form-group pikcs">
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="col-md-2">
                                                                                    V
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-3">
                                                                                        <div class="form-group pikcs">
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <img class="img_flags" src="{{asset('img/flags/saudi_arabia.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        Senegal
                                                                                    </div>  
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr>
                                                                            <td>
                                                                                <div class="col-md-2">
                                                                                    2
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="col-md-12">
                                                                                    Tue 19/6
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="col-md-12">
                                                                                    Saransk
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-6">
                                                                                        Colombia
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <img class="img_flags" src="{{asset('img/flags/saudi_arabia.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <div class="form-group pikcs">
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="col-md-2">
                                                                                    V
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-3">
                                                                                        <div class="form-group pikcs">
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <img class="img_flags" src="{{asset('img/flags/saudi_arabia.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        Japan
                                                                                    </div>  
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr>
                                                                            <td>
                                                                                <div class="col-md-2">
                                                                                    3
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="col-md-12">
                                                                                    Sun 24/6
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="col-md-12">
                                                                                    Kazan
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-6">
                                                                                        Poland
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <img class="img_flags" src="{{asset('img/flags/saudi_arabia.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <div class="form-group pikcs">
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="col-md-2">
                                                                                    V
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-3">
                                                                                        <div class="form-group pikcs">
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <img class="img_flags" src="{{asset('img/flags/saudi_arabia.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        Colombia
                                                                                    </div>  
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr>
                                                                            <td>
                                                                                <div class="col-md-2">
                                                                                    4
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="col-md-12">
                                                                                    Sun 24/6
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="col-md-12">
                                                                                    Ekaterinburg
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-6">
                                                                                        Japan
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <img class="img_flags" src="{{asset('img/flags/saudi_arabia.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <div class="form-group pikcs">
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="col-md-2">
                                                                                    V
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-3">
                                                                                        <div class="form-group pikcs">
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <img class="img_flags" src="{{asset('img/flags/saudi_arabia.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        Senegal
                                                                                    </div>  
                                                                                </div>
                                                                            </td>
                                                                        </tr>


                                                                        <tr>
                                                                            <td>
                                                                                <div class="col-md-2">
                                                                                    5
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="col-md-12">
                                                                                    Thu 28/6
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="col-md-12">
                                                                                    Volgograd
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-6">
                                                                                        Japan
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <img class="img_flags" src="{{asset('img/flags/saudi_arabia.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <div class="form-group pikcs">
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="col-md-2">
                                                                                    V
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-3">
                                                                                        <div class="form-group pikcs">
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <img class="img_flags" src="{{asset('img/flags/saudi_arabia.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        Poland
                                                                                    </div>  
                                                                                </div>
                                                                            </td>
                                                                        </tr>


                                                                        <tr>
                                                                            <td>
                                                                                <div class="col-md-2">
                                                                                    6
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="col-md-12">
                                                                                    Thu 28/6
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="col-md-12">
                                                                                    Samara
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-6">
                                                                                        Senegal
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <img class="img_flags" src="{{asset('img/flags/saudi_arabia.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <div class="form-group pikcs">
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="col-md-2">
                                                                                    V
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-3">
                                                                                        <div class="form-group pikcs">
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <img class="img_flags" src="{{asset('img/flags/saudi_arabia.png')}}">
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
                                        {{ __('Wolrdcup Results') }}
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


<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.js"> </script>
<script src="{{URL::asset('js/app.js')}}"></script>
{{-- Solo Numeros --}}
<script type="text/javascript">
    // Solo permite ingresar numeros.
    function soloNumeros(e){
        var key = window.Event ? e.which : e.keyCode
        return (key >= 48 && key <= 57)
    }
</script>
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
    } );

    
</script>


