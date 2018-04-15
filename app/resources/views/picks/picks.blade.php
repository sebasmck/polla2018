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
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active container" id="grupoa">
                                <br>
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <h4>{{ __('Gruop A') }} </h4>
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
                                                                            <div class="col-md-2">
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
                                                                                <div class="col-md-8">
                                                                                    Russia
                                                                                </div>
                                                                                <div class="col-md-2">
                                                                                    <img src="">
                                                                                </div>
                                                                                <div class="col-md-2">
                                                                                    <input type="text" name="">
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
                                                                                <div class="col-md-8">
                                                                                    Saudi Arabia
                                                                                </div>
                                                                            <div class="col-md-2">
                                                                                    <img src="">
                                                                                </div>
                                                                                <div class="col-md-2">
                                                                                    <input type="text" name="">
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
                                                                                <div class="col-md-12">
                                                                                    EgyptE22
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="col-md-2">
                                                                                V
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="col-md-12">
                                                                                UruguayK22
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    {{-- @foreach ($polls as $poll)
                                                                    <tr>
                                                                        <td>{{$poll->poll_name}}</td>
                                                                        <td>{{$poll->status}}</td>
                                                                        <td></td>
                                                                        <td><div class="form-group row mb-0">

                                                                            @if($poll->status == 'Unauthorized')

                                                                            @else
                                                                            <div class="col-md-8 offset-md-4">
                                                                                <div class="control">
                                                                                    <button class="btn btn-primary" onclick="window.location='{{ route('picks.index') }}'">Edit my picks</button>
                                                                                </div>
                                                                            </div>
                                                                            @endif
                                                                        </div></td>
                                                                    </tr>
                                                                    @endforeach --}}
                                                                </tbody>
                                                        </table> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane container" id="grupob">
                                <h5>Grupo B</h5>
                            </div>
                            <div class="tab-pane container" id="grupoc">
                                <h5>Grupo C</h5>
                            </div>
                            <div class="tab-pane container" id="grupod">...</div>
                            <div class="tab-pane container" id="grupoe">...</div>
                            <div class="tab-pane container" id="grupof">...</div>
                            <div class="tab-pane container" id="grupof">...</div>
                            <div class="tab-pane container" id="grupoh">...</div>
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

<script>
    $(document).ready( function () {
        $('#myTable').DataTable({
            paging: false,
            searching: false,
            ordering:  false,
            paging:  false
        });
    } );
</script>


