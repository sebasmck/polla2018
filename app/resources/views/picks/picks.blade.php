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
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M1A1">
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
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M1A2">
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
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M2A3">
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
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M2A4">
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
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M3A1">
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
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M3A3">
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
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M4A4">
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
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M4A2">
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
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M5A4">
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
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M5A1">
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
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M6A2">
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
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M6A3">
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
                                                                                        <img class="img_flags" src="{{asset('img/flags/saudi_arabia.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-8">
                                                                                        Saudi Arabia
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
                                                                        <tr>
                                                                            <td><div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <img class="img_flags" src="{{asset('img/flags/egypt.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-8">
                                                                                        Egypt
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
                                         <button type="" class="btn btn-primary" style="width: 100%;" onclick="calculateA();">
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
                                                                        <tr class="B1-B2">
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
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="B1">
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
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="B2">
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

                                                                        <tr class="B3-B4">
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
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="B3">
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
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="B4">
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

                                                                        <tr class="B1-B3">
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
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="B1">
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
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="B3">
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

                                                                        <tr class="B4-B2">
                                                                            <td class="td-date">
                                                                                <div class="col-md-12">
                                                                                    6/20/2018
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="col-md-12">
                                                                                    KazanD28
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
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="B4">
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
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="B2">
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

                                                                        <tr class="B4-B1">
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
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="B4">
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
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="B1">
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

                                                                        <tr class="B2-B3">
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
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="B2">
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
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="B3">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <img class="img_flags" src="{{asset('img/flags/morocco.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        MoroccoK34
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
                                                                                        <img class="img_flags" src="{{asset('img/flags/morocco.png')}}">
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

                                                                            <select id="WB1" class="form-control">
                                                                                <option></option>
                                                                                <option id="B1" value="Portugal">Portugal</option>
                                                                                <option id="B2" value="Spain">Spain</option>
                                                                                <option id="B3" value="Morocco">Morocco</option>
                                                                                <option id="B4" value="Iran">Iran</option>
                                                                            </select>
                                                                        </div>
                                                                            
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group row">
                                                                            <div class="col-md-12">Group A runner-up</div>

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
                                         <button type="submit" class="btn btn-primary" style="width: 100%;">
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
                                    <div class="col-md-12">
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
                                                    
                                                            <table id="myTablec" class="table table-striped table-hover table_picks">
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
                                                                                    Sat 16/6
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
                                                                                        France
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <img class="img_flags" src="{{asset('img/flags/france.png')}}">
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
                                                                                        <img class="img_flags" src="{{asset('img/flags/australia.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        Australia
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
                                                                                    Sat 16/6
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
                                                                                        Peru
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <img class="img_flags" src="{{asset('img/flags/peru.png')}}">
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
                                                                                        <img class="img_flags" src="{{asset('img/flags/denmark.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        Denmark
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
                                                                                    Thu 21/6
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
                                                                                        France
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <img class="img_flags" src="{{asset('img/flags/france.png')}}">
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
                                                                                        <img class="img_flags" src="{{asset('img/flags/peru.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        Peru
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
                                                                                    Thu 21/6
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
                                                                                        Denmark
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <img class="img_flags" src="{{asset('img/flags/denmark.png')}}">
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
                                                                                        <img class="img_flags" src="{{asset('img/flags/australia.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        Australia
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
                                                                                    Tue 26/6
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
                                                                                        Denmark
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <img class="img_flags" src="{{asset('img/flags/denmark.png')}}">
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
                                                                                        <img class="img_flags" src="{{asset('img/flags/france.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        France
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
                                                                                    Tue 26/6
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="col-md-12">
                                                                                    Sochi
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-6">
                                                                                        Australia
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <img class="img_flags" src="{{asset('img/flags/australia.png')}}">
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
                                </div>
                                 <br>
                                {{-- Group Standings --}}
                                <div class="row justify-content-center">
                                    <div class="col-md-8">
                                        <div class="card">
                                            <div class="card-header"><h4>{{ __('Group Standings') }}</h4></div>

                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                
                                                        <table id="Standings3" class="display">
                                                            <thead>
                                                                <tr>
                                                                    <th style="width: 40%;"></th>

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
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
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
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
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
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
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
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
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

                            {{-- GRUPO D --}}
                            <div class="tab-pane container" id="grupod"> 
                                <br>
                                <div class="row">
                                    <div class="col-md-12">
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
                                                    
                                                            <table id="myTabled" class="table table-striped table-hover table_picks">
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
                                                                                    Sat 16/6
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
                                                                                        Argentina
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
                                                                                        Iceland
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
                                                                                    Sat 16/6
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="col-md-12">
                                                                                    Kaliningrad
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-6">
                                                                                        Croatia
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
                                                                                        Nigeria
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
                                                                                    Thu 21/6
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="col-md-12">
                                                                                    Nizhny Novgorod
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-6">
                                                                                        Argentina
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
                                                                                        Croatia
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
                                                                                    Fri 22/6
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
                                                                                        Nigeria
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
                                                                                        Iceland
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
                                                                                    Tue 26/6
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="col-md-12">
                                                                                    Saint Petersburg
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-6">
                                                                                        Nigeria
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
                                                                                        Argentina
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
                                                                                    Tue 26/6
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="col-md-12">
                                                                                    Rostov-on-Don
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-6">
                                                                                        Iceland
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
                                </div>
                                 <br>
                                {{-- Group Standings --}}
                                <div class="row justify-content-center">
                                    <div class="col-md-8">
                                        <div class="card">
                                            <div class="card-header"><h4>{{ __('Group Standings') }}</h4></div>

                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                
                                                        <table id="Standings4" class="display">
                                                            <thead>
                                                                <tr>
                                                                    <th style="width: 40%;"></th>

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
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
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
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
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
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
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
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
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

                            {{-- GRUPO E --}}
                            <div class="tab-pane container" id="grupoe">
                                <br>
                                <div class="row">
                                    <div class="col-md-12">
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
                                                    
                                                            <table id="myTablee" class="table table-striped table-hover table_picks">
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
                                                                                    Sun 17/6
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="col-md-12">
                                                                                    Rostov-on-Don
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-6">
                                                                                        Brazil
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
                                                                                        Switzerland
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
                                                                                    Sun 17/6
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
                                                                                        Costa Rica
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
                                                                                        Serbia
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
                                                                                    Fri 22/6
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="col-md-12">
                                                                                    Saint Petersburg
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-6">
                                                                                        Brazil
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
                                                                                        Costa Rica
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
                                                                                    Fri 22/6
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="col-md-12">
                                                                                    Kaliningrad
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-6">
                                                                                        Serbia
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
                                                                                        Switzerland
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
                                                                                    Wed 27/6
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
                                                                                        Serbia
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
                                                                                        Brazil
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
                                                                                    Mon 27/6
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="col-md-12">
                                                                                    Nizhny Novgorod
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-6">
                                                                                        Switzerland
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
                                </div>
                                 <br>
                                {{-- Group Standings --}}
                                <div class="row justify-content-center">
                                    <div class="col-md-8">
                                        <div class="card">
                                            <div class="card-header"><h4>{{ __('Group Standings') }}</h4></div>

                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                
                                                        <table id="Standings5" class="display">
                                                            <thead>
                                                                <tr>
                                                                    <th style="width: 40%;"></th>

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
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
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
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
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
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
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
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
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

                            {{-- GRUPO F --}}
                            <div class="tab-pane container" id="grupof">
                                <br>
                                <div class="row">
                                    <div class="col-md-12">
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
                                                    
                                                            <table id="myTablef" class="table table-striped table-hover table_picks">
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
                                                                                    Fri 17/6
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
                                                                                        Germany
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
                                                                                        Mexico
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
                                                                                    Mon 18/6
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="col-md-12">
                                                                                    Nizhny Novgorod
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-6">
                                                                                        Sweden
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
                                                                                        South Korea
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
                                                                                    Sat 23/6
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="col-md-12">
                                                                                    Sochi
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-6">
                                                                                        Germany
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
                                                                                        Sweden
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
                                                                                    Sat 23/6
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="col-md-12">
                                                                                    Rostov-on-Don
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-6">
                                                                                        South Korea
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
                                                                                        Mexico
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
                                                                                    Wed 27/6
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
                                                                                        South Korea
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
                                                                                        Germany
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
                                                                                    Wed 27/6
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
                                                                                        Mexico
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
                                </div>
                                 <br>
                                {{-- Group Standings --}}
                                <div class="row justify-content-center">
                                    <div class="col-md-8">
                                        <div class="card">
                                            <div class="card-header"><h4>{{ __('Group Standings') }}</h4></div>

                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                
                                                        <table id="Standings6" class="display">
                                                            <thead>
                                                                <tr>
                                                                    <th style="width: 40%;"></th>

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
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
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
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
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
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
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
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
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

                            {{-- GRUPO G --}}
                            <div class="tab-pane container" id="grupog">
                                <br>
                                <div class="row">
                                    <div class="col-md-12">
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
                                                    
                                                            <table id="myTableg" class="table table-striped table-hover table_picks">
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
                                                                                    Mon 18/6
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="col-md-12">
                                                                                    Sochi
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-6">
                                                                                        Belgium
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
                                                                                        Panama
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
                                                                                    Mon 18/6
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
                                                                                        Tunisia
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
                                                                                        England
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
                                                                                    Sat 23/6
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
                                                                                        Belgium
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
                                                                                        Tunisia
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
                                                                                    Nizhny Novgorod
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-6">
                                                                                        England
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
                                                                                        Panama
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
                                                                                    Kaliningrad
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-6">
                                                                                        England
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
                                                                                        Belgium
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
                                                                                    Saransk
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-6">
                                                                                        Panama
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
                                </div>
                                 <br>
                                {{-- Group Standings --}}
                                <div class="row justify-content-center">
                                    <div class="col-md-8">
                                        <div class="card">
                                            <div class="card-header"><h4>{{ __('Group Standings') }}</h4></div>

                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                
                                                        <table id="Standings7" class="display">
                                                            <thead>
                                                                <tr>
                                                                    <th style="width: 40%;"></th>

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
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
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
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
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
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
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
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
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

                            {{-- GRUPO H --}}
                            <div class="tab-pane container" id="grupoh">
                                <br>
                                <div class="row">
                                    <div class="col-md-12">
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
                                 <br>
                                {{-- Group Standings --}}
                                <div class="row justify-content-center">
                                    <div class="col-md-8">
                                        <div class="card">
                                            <div class="card-header"><h4>{{ __('Group Standings') }}</h4></div>

                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                
                                                        <table id="Standings8" class="display">
                                                            <thead>
                                                                <tr>
                                                                    <th style="width: 40%;"></th>

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
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
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
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
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
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
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
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
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

        $(".A1-A2 #A1").blur(function(){
            calculateA();
        });

    } );




    function calculateA(){

        var a1a2_A1 = $('.A1-A2 #A1').val();
        var a1a2_A2 = $('.A1-A2 #A2').val();
        if (a1a2_A1 != '' && a1a2_A2 != '')
        {
            $('#AP1').append('1');
            console.log(a1a2_A1, a1a2_A2);
        }
        
    }
</script>


