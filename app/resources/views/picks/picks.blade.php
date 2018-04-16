@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 title_polla">
                Polla World Cup 2018
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-10">
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
                                <a class="nav-link" data-toggle="tab" href="#grupoRoun">Round of 16</a>
                            </li>
                             <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#grupoQuar">Quarter-finals</a>
                            </li>
                             <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#grupoSemi">Semi-finals</a>
                            </li>
                             <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#grupoFina">Finals</a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active container" id="grupoa">
                                <br>
                                <div class="row">
                                    <div class="col-md-12">
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
                                                    
                                                            <table id="myTable" class="table table-striped table-hover">
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
                                                                                <div class="col-md-1">
                                                                                    1
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="col-md-12">
                                                                                    Thu 14/6
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
                                                                                        Russia
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <img class="img_flags" src="{{asset('img/flags/russia.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <div class="form-group pikcs">
                                                                                            <input type="text" name="" class="form-control" onKeyPress="return soloNumeros(event)" onKeyPress="return soloNumeros(event)">
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
                                                                                        Saudi Arabia
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
                                                                                    Fri 15/6
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
                                                                                        Egypt
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <img class="img_flags" src="{{asset('img/flags/egypt.png')}}">
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
                                                                                        <img class="img_flags" src="{{asset('img/flags/uruguay.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        Uruguay
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
                                                                                    Tue 19/6
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
                                                                                        Russia
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <img class="img_flags" src="{{asset('img/flags/russia.png')}}">
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
                                                                                        <img class="img_flags" src="{{asset('img/flags/egypt.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        Egypt
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
                                                                                    Wed 20/6
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
                                                                                        Uruguay
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <img class="img_flags" src="{{asset('img/flags/uruguay.png')}}">
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
                                                                                        Saudi Arabia
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
                                                                                    Mon 25/6
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
                                                                                        Uruguay
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <img class="img_flags" src="{{asset('img/flags/uruguay.png')}}">
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
                                                                                        <img class="img_flags" src="{{asset('img/flags/russia.png')}}">
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        Russia
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
                                                                                    Mon 25/6
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
                                                                                        Saudi Arabia
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
                                </div>
                                <br>
                                {{-- Group Standings --}}
                                <div class="row justify-content-center">
                                    <div class="col-md-10">
                                        <div class="card">
                                            <div class="card-header"><h4>{{ __('Group Standings') }}</h4></div>

                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                
                                                        <table id="Standings1" class="display">
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
                            </div>  {{-- tab pane --}}

                            <div class="tab-pane container" id="grupob"> <br>
                                <div class="col-md-12">
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
                                                
                                                        <table id="myTableb" class="table table-striped table-hover">
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
                                                                                Fri 15/6
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
                                                                                    Portugal
                                                                                </div>
                                                                                <div class="col-md-3">
                                                                                    <img class="img_flags" src="{{asset('img/flags/portugal.png')}}">
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
                                                                                    <img class="img_flags" src="{{asset('img/flags/spain.png')}}">
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    Spain
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
                                                                                Fri 15/6
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
                                                                                    Morocco
                                                                                </div>
                                                                                <div class="col-md-3">
                                                                                    <img class="img_flags" src="{{asset('img/flags/morocco.png')}}">
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
                                                                                    <img class="img_flags" src="{{asset('img/flags/iran.png')}}">
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    Iran
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
                                                                                Wed 20/6
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
                                                                                    Portugal
                                                                                </div>
                                                                                <div class="col-md-3">
                                                                                    <img class="img_flags" src="{{asset('img/flags/portugal.png')}}">
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
                                                                                    <img class="img_flags" src="{{asset('img/flags/morocco.png')}}">
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    Morocco
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
                                                                                Wed 20/6
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
                                                                                    Iran
                                                                                </div>
                                                                                <div class="col-md-3">
                                                                                    <img class="img_flags" src="{{asset('img/flags/iran.png')}}">
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
                                                                                    <img class="img_flags" src="{{asset('img/flags/spain.png')}}">
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    Spain
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
                                                                                Mon 25/6
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
                                                                                    Iran
                                                                                </div>
                                                                                <div class="col-md-3">
                                                                                    <img class="img_flags" src="{{asset('img/flags/iran.png')}}">
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
                                                                                    <img class="img_flags" src="{{asset('img/flags/portugal.png')}}">
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    Portugal
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
                                                                                Mon 25/6
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
                                                                                    Spain
                                                                                </div>
                                                                                <div class="col-md-3">
                                                                                    <img class="img_flags" src="{{asset('img/flags/spain.png')}}">
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
                            </div>
                            <div class="tab-pane container" id="grupoc"> <br>
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
                                                
                                                        <table id="myTablec" class="table table-striped table-hover">
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
                            <div class="tab-pane container" id="grupod"> <br>
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
                                                
                                                        <table id="myTabled" class="table table-striped table-hover">
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
                            <div class="tab-pane container" id="grupoe"> <br>
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
                                                
                                                        <table id="myTablee" class="table table-striped table-hover">
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
                            <div class="tab-pane container" id="grupof"> <br>
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
                                                
                                                        <table id="myTablef" class="table table-striped table-hover">
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
                            <div class="tab-pane container" id="grupog"> <br>
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
                                                
                                                        <table id="myTableg" class="table table-striped table-hover">
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
                            <div class="tab-pane container" id="grupoh"> <br>
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
                                                
                                                        <table id="myTableh" class="table table-striped table-hover">
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

                            <div class="tab-pane container" id="grupoRoun"> <br>
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <h4>{{ __('Round of 16') }} </h4>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                
                                                        <table id="myTableh" class="table table-striped table-hover">
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

                            <div class="tab-pane container" id="grupoQuar"> <br>
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <h4>{{ __('Quarter-finals') }} </h4>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                
                                                        <table id="myTableh" class="table table-striped table-hover">
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

                             <div class="tab-pane container" id="grupoSemi"> <br>
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <h4>{{ __('Semi-finals') }} </h4>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                
                                                        <table id="myTableh" class="table table-striped table-hover">
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
                                </div> 
                            </div>

                             <div class="tab-pane container" id="grupoFina"> <br>
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <h4>{{ __('Finals') }} </h4>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                
                                                        <table id="myTableh" class="table table-striped table-hover">
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
        $('#myTable').DataTable({
            paging: false,
            searching: false,
            ordering:  false,
            paging:  false
        });

        $('#myTableb').DataTable({
            paging: false,
            searching: false,
            ordering:  false,
            paging:  false
        });

        $('#myTablec').DataTable({
            paging: false,
            searching: false,
            ordering:  false,
            paging:  false
        });

        $('#myTabled').DataTable({
            paging: false,
            searching: false,
            ordering:  false,
            paging:  false
        });

        $('#myTablee').DataTable({
            paging: false,
            searching: false,
            ordering:  false,
            paging:  false
        });

        $('#myTablef').DataTable({
            paging: false,
            searching: false,
            ordering:  false,
            paging:  false
        });

        $('#myTableg').DataTable({
            paging: false,
            searching: false,
            ordering:  false,
            paging:  false
        });

        $('#myTableh').DataTable({
            paging: false,
            searching: false,
            ordering:  false,
            paging:  false
        });

        // tablas satnding
        $('#Standings1').DataTable({
            paging: false,
            searching: false,
            ordering:  false,
            paging:  false
        });
    } );
</script>


