<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    {{-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.css"> --}}
    
    {{-- <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script> --}}

    
    {{-- toastr --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
                
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="{{URL::asset('js/jquery.tablesorter.js')}}"></script>
    

</head>
<body style="background-image: none;" >
    <div id="status" class="modalLoading" style="display: none">
        <div class="centerModalLoading">
            <img src="{{URL::asset('img/loading.gif')}}" alt="">
        </div>
    </div>
    <main style="background-image:none;" class="content_web">
    <div style="background-color: white;" class="tab-pane container" id="grupoRoun">
    <form name="secondstage" id="secondstage">

        <div class="closestelement">

            @csrf

            <input type="hidden" name="id_poll" value="{{$poll->iduser_poll}}"> 
            <br>
            <div class="row">
                {{-- Round of 16 --}}
                <div class="col second_sta">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-12">
                                    <h6>{{ __('Round of 16') }} </h6>
                                </div>
                            </div>
                        </div>
                        <div class="card-body flagsbody" style="text-align: left;">
                            {{-- 1A --}}
                            <div class="row">
                                <div class="col-md-12">

                                    <table class="display table_second_stage">
                                        <tbody>
                                           @if(empty($wa->id_winner_team) || $wa->id_winner_team == NULL)
                                            <tr>
                                                <td style="width: 30%; height: 30px;"></td>
                                                <td style="width: 70%; height: 30px;"></td>
                                            </tr>
                                            @else
                                            <tr>
                                                <td style="width: 30%; height: 30px;">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <img class="img_flags" src="{{asset('img/flags/').'/'.str_replace(' ', '_', strtolower($wa->getTeamName($wa->id_winner_team))).'.png'}}">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td style="width: 70%; height: 30px;">
                                                    <div class="row">
                                                        <div class="col-md-12" >
                                                            <label>{{$wa->getTeamName($wa->id_winner_team)}}</label>
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
                                            @if(empty($wb->id_runnerup) || $wb->id_runnerup == NULL)
                                            <tr>
                                                <td style="width: 30%; height: 30px;"></td>
                                                <td style="width: 70%; height: 30px;"></td>
                                            </tr>
                                            @else
                                            <tr>
                                                <td style="width: 30%; height: 30px;">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <img class="img_flags" src="{{asset('img/flags/').'/'.str_replace(' ', '_', strtolower($wb->getTeamName($wb->id_runnerup))).'.png'}}">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td style="width: 70%; height: 30px;">
                                                    <div class="row">
                                                        <div class="col-md-12" >
                                                            <label>{{$wb->getTeamName($wb->id_runnerup)}}</label>
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
                                           @if(empty($wc->id_winner_team) || $wc->id_winner_team == NULL)
                                           <tr>
                                                <td style="width: 30%; height: 30px;"></td>
                                                <td style="width: 70%; height: 30px;"></td>
                                            </tr>
                                            @else
                                            <tr>
                                                <td style="width: 30%; height: 30px;">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <img class="img_flags" src="{{asset('img/flags/').'/'.str_replace(' ', '_', strtolower($wc->getTeamName($wc->id_winner_team))).'.png'}}">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td style="width: 70%; height: 30px;">
                                                    <div class="row">
                                                        <div class="col-md-12" >
                                                            <label>{{$wc->getTeamName($wc->id_winner_team)}}</label>
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
                                        @if(empty($wd->id_runnerup) || $wd->id_runnerup == NULL)
                                        <tr>
                                            <td style="width: 30%; height: 30px;"></td>
                                            <td style="width: 70%; height: 30px;"></td>

                                        </tr>
                                        @else
                                        <tr>
                                            <td style="width: 30%; height: 30px;">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <img class="img_flags" src="{{asset('img/flags/').'/'.str_replace(' ', '_', strtolower($wd->getTeamName($wd->id_runnerup))).'.png'}}">
                                                    </div>
                                                </div>
                                            </td>
                                            <td style="width: 70%; height: 30px;">
                                                <div class="row">
                                                    <div class="col-md-12" >
                                                        <label>{{$wd->getTeamName($wd->id_runnerup)}}</label>
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
                                       @if(empty($we->id_winner_team) || $we->id_winner_team == NULL)
                                       <tr>
                                        <td style="width: 30%; height: 30px;"></td>
                                        <td style="width: 70%; height: 30px;"></td>
                                    </tr>
                                    @else
                                    <tr>
                                        <td style="width: 30%; height: 30px;">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <img class="img_flags" src="{{asset('img/flags/').'/'.str_replace(' ', '_', strtolower($we->getTeamName($we->id_winner_team))).'.png'}}">
                                                </div>
                                            </div>
                                        </td>
                                        <td style="width: 70%; height: 30px;">
                                            <div class="row">
                                                <div class="col-md-12" >
                                                    <label>{{$we->getTeamName($we->id_winner_team)}}</label>
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
                                @if(empty($wf->id_winner_team) || $wf->id_winner_team == NULL)
                                <tr>
                                    <td style="width: 30%; height: 30px;"></td>
                                    <td style="width: 70%; height: 30px;"></td>
                                </tr>
                                @else
                                <tr>
                                    <td style="width: 30%; height: 30px;">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <img class="img_flags" src="{{asset('img/flags/').'/'.str_replace(' ', '_', strtolower($wf->getTeamName($wf->id_runnerup))).'.png'}}">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="width: 70%; height: 30px;">
                                        <div class="row">
                                            <div class="col-md-12" >
                                                <label>{{$wf->getTeamName($wf->id_runnerup)}}</label>
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
                               @if(empty($wg->id_winner_team) || $wg->id_winner_team == NULL)
                               <tr>
                                <td style="width: 30%; height: 30px;"></td>
                                <td style="width: 70%; height: 30px;"></td>
                            </tr>
                            @else
                            <tr>
                                <td style="width: 30%; height: 30px;">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <img class="img_flags" src="{{asset('img/flags/').'/'.str_replace(' ', '_', strtolower($wg->getTeamName($wg->id_winner_team))).'.png'}}">
                                        </div>
                                    </div>
                                </td>
                                <td style="width: 70%; height: 30px;">
                                    <div class="row">
                                        <div class="col-md-12" >
                                            <label>{{$wg->getTeamName($wg->id_winner_team)}}</label>
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
                            @if(empty($wh->id_winner_team) || $wh->id_winner_team == NULL)
                            <tr>
                                <td style="width: 30%; height: 30px;"></td>
                                <td style="width: 70%; height: 30px;"></td>
                            </tr>
                            @else
                            <tr>
                                <td style="width: 30%; height: 30px;">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <img class="img_flags" src="{{asset('img/flags/').'/'.str_replace(' ', '_', strtolower($wh->getTeamName($wh->id_runnerup))).'.png'}}">
                                        </div>
                                    </div>
                                </td>
                                <td style="width: 70%; height: 30px;">
                                    <div class="row">
                                        <div class="col-md-12" >
                                            <label>{{$wh->getTeamName($wh->id_runnerup)}}</label>
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
                           @if(empty($wb->id_runnerup) || $wb->id_runnerup == NULL)
                           <tr>
                            <td style="width: 30%; height: 30px;"></td>
                            <td style="width: 70%; height: 30px;"></td>
                        </tr>
                        @else
                        <tr>
                            <td style="width: 30%; height: 30px;">
                                <div class="row">
                                    <div class="col-md-12">
                                        <img class="img_flags" src="{{asset('img/flags/').'/'.str_replace(' ', '_', strtolower($wb->getTeamName($wb->id_winner_team))).'.png'}}">
                                    </div>
                                </div>
                            </td>
                            <td style="width: 70%; height: 30px;">
                                <div class="row">
                                    <div class="col-md-12" >
                                        <label>{{$wb->getTeamName($wb->id_winner_team)}}</label>
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
                        @if(empty($wa->id_runnerup) || $wa->id_runnerup == NULL)
                        <tr>
                            <td style="width: 30%; height: 30px;"></td>
                            <td style="width: 70%; height: 30px;"></td>
                        </tr>
                        @else
                        <tr>
                            <td style="width: 30%; height: 30px;">
                                <div class="row">
                                    <div class="col-md-12">
                                        <img class="img_flags" src="{{asset('img/flags/').'/'.str_replace(' ', '_', strtolower($wa->getTeamName($wa->id_runnerup))).'.png'}}">
                                    </div>
                                </div>
                            </td>
                            <td style="width: 70%; height: 30px;">
                                <div class="row">
                                    <div class="col-md-12" >
                                        <label>{{$wa->getTeamName($wa->id_runnerup)}}</label>
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
                       @if(empty($wd->id_runnerup) || $wd->id_runnerup == NULL)
                       <tr>
                        <td style="width: 30%; height: 30px;"></td>
                        <td style="width: 70%; height: 30px;"></td>
                    </tr>
                    @else
                    <tr>
                        <td style="width: 30%; height: 30px;">
                            <div class="row">
                                <div class="col-md-12">
                                    <img class="img_flags" src="{{asset('img/flags/').'/'.str_replace(' ', '_', strtolower($wd->getTeamName($wd->id_winner_team))).'.png'}}">
                                </div>
                            </div>
                        </td>
                        <td style="width: 70%; height: 30px;">
                            <div class="row">
                                <div class="col-md-12" >
                                    <label>{{$wd->getTeamName($wd->id_winner_team)}}</label>
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
                    @if(empty($wc->id_runnerup) || $wc->id_runnerup == NULL)
                    <tr>
                        <td style="width: 30%; height: 30px;"></td>
                        <td style="width: 70%; height: 30px;"></td>
                    </tr>
                    @else
                    <tr>
                        <td style="width: 30%; height: 30px;">
                            <div class="row">
                                <div class="col-md-12">
                                    <img class="img_flags" src="{{asset('img/flags/').'/'.str_replace(' ', '_', strtolower($wc->getTeamName($wc->id_runnerup))).'.png'}}">
                                </div>
                            </div>
                        </td>
                        <td style="width: 70%; height: 30px;">
                            <div class="row">
                                <div class="col-md-12" >
                                    <label>{{$wc->getTeamName($wc->id_runnerup)}}</label>
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
                   @if(empty($wf->id_runnerup) || $wf->id_runnerup == NULL)
                   <tr>
                    <td style="width: 30%; height: 30px;"></td>
                    <td style="width: 70%; height: 30px;"></td>
                </tr>
                @else
                <tr>
                    <td style="width: 30%; height: 30px;">
                        <div class="row">
                            <div class="col-md-12">
                                <img class="img_flags" src="{{asset('img/flags/').'/'.str_replace(' ', '_', strtolower($wf->getTeamName($wf->id_winner_team))).'.png'}}">
                            </div>
                        </div>
                    </td>
                    <td style="width: 70%; height: 30px;">
                        <div class="row">
                            <div class="col-md-12" >
                                <label>{{$wf->getTeamName($wf->id_winner_team)}}</label>
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
                @if(empty($we->id_runnerup) || $we->id_runnerup == NULL)
                <tr>
                    <td style="width: 30%; height: 30px;"></td>
                    <td style="width: 70%; height: 30px;"></td>
                </tr>
                @else
                <tr>
                    <td style="width: 30%; height: 30px;">
                        <div class="row">
                            <div class="col-md-12">
                                <img class="img_flags" src="{{asset('img/flags/').'/'.str_replace(' ', '_', strtolower($we->getTeamName($we->id_runnerup))).'.png'}}">
                            </div>
                        </div>
                    </td>
                    <td style="width: 70%; height: 30px;">
                        <div class="row">
                            <div class="col-md-12" >
                                <label>{{$we->getTeamName($we->id_runnerup)}}</label>
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
               @if(empty($wh->id_runnerup) || $wh->id_runnerup == NULL)
               <tr>
                <td style="width: 30%; height: 30px;"></td>
                <td style="width: 70%; height: 30px;"></td>
            </tr>
            @else
            <tr>
                <td style="width: 30%; height: 30px;">
                    <div class="row">
                        <div class="col-md-12">
                            <img class="img_flags" src="{{asset('img/flags/').'/'.str_replace(' ', '_', strtolower($wh->getTeamName($wh->id_winner_team))).'.png'}}">
                        </div>
                    </div>
                </td>
                <td style="width: 70%; height: 30px;">
                    <div class="row">
                        <div class="col-md-12" >
                            <label>{{$wh->getTeamName($wh->id_winner_team)}}</label>
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

{{-- 2G --}}
<div class="row">
    <div class="col-md-12">
        <table class="display table_second_stage">
            <tbody>
                @if(empty($wg->id_runnerup) || $wg->id_runnerup == NULL)
                <tr>
                    <td style="width: 23%; height: 30px;"></td>
                    <td style="width: 50%; height: 30px;"></td>
                </tr>
                @else
                <tr>
                    <td style="width: 30%; height: 30px;">
                        <div class="row">
                            <div class="col-md-12">
                                <img class="img_flags" src="{{asset('img/flags/').'/'.str_replace(' ', '_', strtolower($wg->getTeamName($wg->id_runnerup))).'.png'}}">
                            </div>
                        </div>
                    </td>
                    <td style="width: 70%; height: 30px;">
                        <div class="row">
                            <div class="col-md-12" >
                                <label>{{$wg->getTeamName($wg->id_runnerup)}}</label>
                            </div>
                        </div>
                    </td>
                </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>

<div style="height: 50px;"></div>

</div>
</div>  {{--  end card --}}
</div> {{--  end col div --}}

{{-- Quarter-finals --}}
<div class="col quarters second_sta">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-12">
                    <h6>{{ __('Quarter-finals') }} </h6>
                </div>
            </div>
        </div>

        <div class="card-body">
            <div style="height: 55px;" class="separtos"></div>
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
                                 <div class="row">
                                    <div class="col-md-12">
                                        @if (isset($ss->quarter1->team_name))
                                        <img  class="img_flags iWRound1A2B" src="{{asset('img/flags/').'/'.str_replace(' ', '_', strtolower($ss->quarter1->team_name)).'.png'}}">
                                        @else
                                        <img class="img_flags iWRound1A2B" src="{{asset('img/flags/cup2.png')}}">
                                        @endif

                                    </div>
                                </div>
                            </td>

                            <td style="width: 70%; height: 30px;">
                                <div class="row">
                                    <div class="col-md-12">
                                        @if (isset($ss->quarter_1))
                                        {!! Form::select('WRound1A2B', [
                                          '' => 'Pick a Team',
                                          "$wa->id_winner_team" => "{$wa->getTeamName($wa->id_winner_team)}",
                                          "$wb->id_runnerup" => "{$wb->getTeamName($wb->id_runnerup)}",
                                          ], old('value', isset($ss->quarter_1) ? $ss->quarter_1 : null ), [ 'class' =>  'form-control WRound1A2B', 'required', 'id' => 'WRound1A2B']) !!}
                                          @else

                                          <select class="form-control WRound1A2B" id="WRound1A2B" name="WRound1A2B">
                                            <option value="">Pick a Team...</option>
                                            @if($winA != null && $winB != null)
                                            <option value="{{$wa->id_winner_team}}">{{$wa->getTeamName($wa->id_winner_team)}}</option>

                                            <option value="{{$wb->id_runnerup}}">{{$wb->getTeamName($wb->id_runnerup)}}</option>
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

        <div style="height: 10px;" ></div>

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
                        <td style="width: 30%; height: 30px;">
                            <div class="row">
                                <div class="col-md-12">
                                    @if (isset($ss->quarter2->team_name))
                                    <img class="img_flags iWRound1C2D" src="{{asset('img/flags/').'/'.str_replace(' ', '_', strtolower($ss->quarter2->team_name)).'.png'}}">
                                    @else
                                    <img class="img_flags iWRound1C2D" src="{{asset('img/flags/cup2.png')}}">
                                    @endif

                                </div>
                            </div>
                        </td>
                        <td style="width: 70%; height: 30px;">
                            <div class="row">
                                <div class="col-md-12">
                                    @if (isset($ss->quarter_2))
                                    {!! Form::select('WRound1C2D', [
                                      '' => 'Pick a Team',
                                      "$wc->id_winner_team" => "{$wc->getTeamName($wc->id_winner_team)}",
                                      "$wd->id_runnerup" => "{$wd->getTeamName($wd->id_runnerup)}",
                                      ], old('value', isset($ss->quarter_2) ? $ss->quarter_2 : null ), [ 'class' =>  'form-control WRound1C2D', 'required', 'id' => 'WRound1C2D']) !!}
                                      @else

                                      <select class="form-control WRound1C2D" id="WRound1C2D" name="WRound1C2D">
                                        <option value="">Pick a Team...</option>
                                        @if($winC != null && $winD != null)
                                        <option value="{{$wc->id_winner_team}}">{{$wc->getTeamName($wc->id_winner_team)}}</option>
                                        <option value="{{$wd->id_runnerup}}">{{$wd->getTeamName($wd->id_runnerup)}}</option>
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

    <div style="height: 130px;" class="separtos"></div>

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
                    <td style="width: 30%; height: 30px;">
                        <div class="row">
                            <div class="col-md-12">
                                @if (isset($ss->quarter3->team_name))
                                <img class="img_flags iWRound1E2F" src="{{asset('img/flags/').'/'.str_replace(' ', '_', strtolower($ss->quarter3->team_name)).'.png'}}">
                                @else
                                <img class="img_flags iWRound1E2F" src="{{asset('img/flags/cup2.png')}}">
                                @endif
                            </div>
                        </div>
                    </td>
                    <td style="width: 70%; height: 30px;">
                        <div class="row">
                            <div class="col-md-12">

                                @if (isset($ss->quarter_3))
                                {!! Form::select('WRound1E2F', [
                                  '' => 'Pick a Team',
                                  "$we->id_winner_team" => "{$we->getTeamName($we->id_winner_team)}",
                                  "$wf->id_runnerup" => "{$wf->getTeamName($wf->id_runnerup)}",
                                  ], old('value', isset($ss->quarter_3) ? $ss->quarter_3 : null ), [ 'class' =>  'form-control WRound1E2F', 'required', 'id' => 'WRound1E2F']) !!}
                                  @else

                                  <select class="form-control WRound1E2F" id="WRound1E2F" name="WRound1E2F">
                                    <option value="">Pick a Team...</option>
                                    @if($winE != null && $winF != null)
                                    <option value="{{$we->id_winner_team}}">{{$we->getTeamName($we->id_winner_team)}}</option>
                                    <option value="{{$wf->id_runnerup}}">{{$wf->getTeamName($wf->id_runnerup)}}</option>
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
                <td style="width: 30%; height: 30px;">
                    <div class="row">
                        <div class="col-md-12">
                            @if (isset($ss->quarter4->team_name))
                            <img class="img_flags iWRound1G2H" src="{{asset('img/flags/').'/'.str_replace(' ', '_', strtolower($ss->quarter4->team_name)).'.png'}}">
                            @else
                            <img class="img_flags iWRound1G2H" src="{{asset('img/flags/cup2.png')}}">
                            @endif
                        </div>
                    </div>
                </td>
                <td style="width: 70%; height: 30px;">
                    <div class="row">
                        <div class="col-md-12">

                            @if (isset($ss->quarter_4))
                            {!! Form::select('WRound1G2H', [
                              '' => 'Pick a Team',
                              "$wg->id_winner_team" => "{$wg->getTeamName($wg->id_winner_team)}",
                              "$wh->id_runnerup" => "{$wh->getTeamName($wh->id_runnerup)}",
                              ], old('value', isset($ss->quarter_4) ? $ss->quarter_4 : null ), [ 'class' =>  'form-control WRound1G2H', 'required', 'id' => 'WRound1G2H']) !!}
                              @else

                              <select class="form-control WRound1G2H" id="WRound1G2H" name="WRound1G2H">
                                <option value="">Pick a Team...</option>
                                @if($winG != null && $winH != null)
                                <option value="{{$wg->id_winner_team}}">{{$wg->getTeamName($wg->id_winner_team)}}</option>
                                <option value="{{$wh->id_runnerup}}">{{$wh->getTeamName($wh->id_runnerup)}}</option>
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

<div style="height: 130px;" class="separtos"></div>

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
                <td style="width: 30%; height: 30px;">
                    <div class="row">
                        <div class="col-md-12">
                            @if (isset($ss->quarter5->team_name))
                            <img class="img_flags iWRound1B2A" src="{{asset('img/flags/').'/'.str_replace(' ', '_', strtolower($ss->quarter5->team_name)).'.png'}}">
                            @else
                            <img class="img_flags iWRound1B2A" src="{{asset('img/flags/cup2.png')}}">
                            @endif
                        </div>
                    </div>
                </td>
                <td style="width: 70%; height: 30px;">
                    <div class="row">
                        <div class="col-md-12">

                            @if (isset($ss->quarter_5))
                            {!! Form::select('WRound1B2A', [
                              '' => 'Pick a Team',
                              "$wa->id_runnerup" => "{$wa->getTeamName($wa->id_runnerup)}",
                              "$wb->id_winner_team" => "{$wb->getTeamName($wb->id_winner_team)}",
                              ], old('value', isset($ss->quarter_5) ? $ss->quarter_5 : null ), [ 'class' =>  'form-control WRound1B2A', 'required', 'id' => 'WRound1B2A']) !!}
                              @else

                              <select class="form-control WRound1B2A" id="WRound1B2A" name="WRound1B2A">
                                <option value="">Pick a Team...</option>
                                @if($winB != null && $winA != null)
                                <option value="{{$wa->id_runnerup}}">{{$wa->getTeamName($wa->id_runnerup)}}</option>
                                <option value="{{$wb->id_winner_team}}">{{$wb->getTeamName($wb->id_winner_team)}}</option>
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
                <td style="width: 30%; height: 30px;">
                    <div class="row">
                        <div class="col-md-12">
                            @if (isset($ss->quarter6->team_name))
                            <img class="img_flags iWRound1D2C" src="{{asset('img/flags/').'/'.str_replace(' ', '_', strtolower($ss->quarter6->team_name)).'.png'}}">
                            @else
                            <img class="img_flags iWRound1D2C" src="{{asset('img/flags/cup2.png')}}">
                            @endif
                        </div>
                    </div>
                </td>
                <td style="width: 70%; height: 30px;">
                    <div class="row">
                        <div class="col-md-12">
                            @if (isset($ss->quarter_6))
                            {!! Form::select('WRound1D2C', [
                              '' => 'Pick a Team',
                              "$wc->id_runnerup" => "{$wc->getTeamName($wc->id_runnerup)}",
                              "$wd->id_winner_team" => "{$wd->getTeamName($wd->id_winner_team)}",
                              ], old('value', isset($ss->quarter_6) ? $ss->quarter_6 : null ), [ 'class' =>  'form-control WRound1D2C', 'required', 'id' => 'WRound1D2C']) !!}
                              @else

                              <select class="form-control WRound1D2C" id="WRound1D2C" name="WRound1D2C">
                                <option value="">Pick a Team...</option>
                                @if($winD != null && $winC != null)
                                <option value="{{$wc->id_runnerup}}">{{$wc->getTeamName($wc->id_runnerup)}}</option>
                                <option value="{{$wd->id_winner_team}}">{{$wd->getTeamName($wd->id_winner_team)}}</option>
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

<div style="height: 134px;" class="separtos"></div>

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
                <td style="width: 30%; height: 30px;">
                    <div class="row">
                        <div class="col-md-12">
                            @if (isset($ss->quarter7->team_name))
                            <img class="img_flags iWRound1F2E" src="{{asset('img/flags/').'/'.str_replace(' ', '_', strtolower($ss->quarter7->team_name)).'.png'}}">
                            @else
                            <img class="img_flags iWRound1F2E" src="{{asset('img/flags/cup2.png')}}">
                            @endif
                        </div>
                    </div>
                </td>
                <td style="width: 70%; height: 30px;">
                    <div class="row">
                        <div class="col-md-12">

                            @if (isset($ss->quarter_7))
                            {!! Form::select('WRound1F2E', [
                              '' => 'Pick a Team',
                              "$we->id_runnerup" => "{$we->getTeamName($we->id_runnerup)}",
                              "$wf->id_winner_team" => "{$wf->getTeamName($wf->id_winner_team)}",
                              ], old('value', isset($ss->quarter_7) ? $ss->quarter_7 : null ), [ 'class' =>  'form-control WRound1F2E', 'required', 'id' => 'WRound1F2E']) !!}
                              @else

                              <select class="form-control WRound1F2E" id="WRound1F2E" name="WRound1F2E">
                                <option value="">Pick a Team...</option>
                                @if($winF != null && $winE != null)
                                <option value="{{$we->id_runnerup}}">{{$we->getTeamName($we->id_runnerup)}}</option>
                                <option value="{{$wf->id_winner_team}}">{{$wf->getTeamName($wf->id_winner_team)}}</option>
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
                <td style="width: 30%; height: 30px;">
                    <div class="row">
                        <div class="col-md-12">
                            @if (isset($ss->quarter8->team_name))
                            <img class="img_flags iWRound1H2G" src="{{asset('img/flags/').'/'.str_replace(' ', '_', strtolower($ss->quarter8->team_name)).'.png'}}">
                            @else
                            <img class="img_flags iWRound1H2G" src="{{asset('img/flags/cup2.png')}}">
                            @endif
                        </div>
                    </div>
                </td>
                <td style="width: 70%; height: 30px;">
                    <div class="row">
                        <div class="col-md-12">

                            @if (isset($ss->quarter_8))
                            {!! Form::select('WRound1H2G', [
                              '' => 'Pick a Team',
                              "$wg->id_runnerup" => "{$wg->getTeamName($wg->id_runnerup)}",
                              "$wh->id_winner_team" => "{$wh->getTeamName($wh->id_winner_team)}",
                              ], old('value', isset($ss->quarter_8) ? $ss->quarter_8 : null ), [ 'class' =>  'form-control WRound1H2G', 'required', 'id' => 'WRound1H2G']) !!}
                              @else

                              <select class="form-control WRound1H2G" id="WRound1H2G" name="WRound1H2G">
                                <option value="">Pick a Team...</option>
                                @if($winH != null && $winG != null)
                                <option value="{{$wg->id_runnerup}}">{{$wg->getTeamName($wg->id_runnerup)}}</option>
                                <option value="{{$wh->id_winner_team}}">{{$wh->getTeamName($wh->id_winner_team)}}</option>
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

<div style="height: 69px;" class="separtos"></div>
</div>
</div>  {{--  end card --}}
</div> {{--  end col div --}}

{{-- Semi-finals --}}
<div class="col second_sta">
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
                    <div style="height: 165px;" class="separtos"></div>
                    {{-- 1A - 2B --}}
                    <div class="row">
                        <div class="col-md-12">

                            <table class="display table_second_stage">
                                <tbody>
                                    <tr>
                                        <td style="width: 30%; height: 30px;">
                                            <div class="row">
                                                <div class="col-md-12">

                                                    @if (isset($ss->semi1->team_name))
                                                    <img class="img_flags iWquarter1_2" src="{{asset('img/flags/').'/'.str_replace(' ', '_', strtolower($ss->semi1->team_name)).'.png'}}">
                                                    @else
                                                    <img class="img_flags iWquarter1_2" src="{{asset('img/flags/cup2.png')}}">
                                                    @endif

                                                </div>
                                            </div>
                                        </td>
                                        <td style="width: 70%; height: 30px;">
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

                            <div style="height: 10px;"></div>

                            {{-- 1C - 2D --}}
                            <div class="row">
                                <div class="col-md-12">
                                    <table class="display table_second_stage">
                                        <tbody>

                                            <tr>
                                                <td style="width: 30%; height: 30px;">
                                                    <div class="row">
                                                        <div class="col-md-12">

                                                            @if (isset($ss->semi2->team_name))
                                                            <img class="img_flags iWquarter3_4" src="{{asset('img/flags/').'/'.str_replace(' ', '_', strtolower($ss->semi2->team_name)).'.png'}}">
                                                            @else
                                                            <img class="img_flags iWquarter3_4" src="{{asset('img/flags/cup2.png')}}">
                                                            @endif


                                                        </div>
                                                    </div>
                                                </td>
                                                <td style="width: 70%; height: 30px;">
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

                                    <div style="height: 355px;" class="separtos"></div>

                                    {{-- 1E - 2F --}}
                                    <div class="row">
                                        <div class="col-md-12">
                                            <table class="display table_second_stage">
                                                <tbody>
                                                    <tr>
                                                        <td style="width: 30%; height: 30px;">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    @if (isset($ss->semi3->team_name))
                                                                    <img class="img_flags iWquarter5_6" src="{{asset('img/flags/').'/'.str_replace(' ', '_', strtolower($ss->semi3->team_name)).'.png'}}">
                                                                    @else
                                                                    <img class="img_flags iWquarter5_6" src="{{asset('img/flags/cup2.png')}}">
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </td>
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

                                            <div style="height: 10px;"></div>

                                            {{-- 1G - 2H --}}
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <table class="display table_second_stage">
                                                        <tbody>
                                                            <tr>
                                                                <td style="width: 30%; height: 30px;">
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            @if (isset($ss->semi4->team_name))
                                                                            <img class="img_flags iWquarter7_8" src="{{asset('img/flags/').'/'.str_replace(' ', '_', strtolower($ss->semi4->team_name)).'.png'}}">
                                                                            @else
                                                                            <img class="img_flags iWquarter7_8" src="{{asset('img/flags/cup2.png')}}">
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td style="width: 70%; height: 30px;">
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

                                                <div style="height: 181px;" class="separtos"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>  {{--  end card --}}
                            </div> {{--  end col div --}}

                            {{-- Semi-finals --}}
                            <div class="col second_sta">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h6>{{ __('Final') }} </h6>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div style="height: 387px;" class="separtos"></div>
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
                                                                        <div class="row">
                                                                            <div class="col-md-12">

                                                                                @if (isset($ss->final1->team_name))
                                                                                <img class="img_flags iWSemi1_2" src="{{asset('img/flags/').'/'.str_replace(' ', '_', strtolower($ss->final1->team_name)).'.png'}}">
                                                                                @else
                                                                                <img class="img_flags iWSemi1_2" src="{{asset('img/flags/cup2.png')}}">
                                                                                @endif

                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td style="width: 70%; height: 30px;">
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

                                                        <div style="height: 10px;" class="separtos"></div>

                                                        {{-- 1C - 2D --}}
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <table class="display table_second_stage">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td style="width: 30%; height: 30px;">
                                                                                <div class="row">
                                                                                    <div class="col-md-12">

                                                                                        @if (isset($ss->final2->team_name))
                                                                                        <img class="img_flags iWSemi3_4" src="{{asset('img/flags/').'/'.str_replace(' ', '_', strtolower($ss->final2->team_name)).'.png'}}">
                                                                                        @else
                                                                                        <img class="img_flags iWSemi3_4" src="{{asset('img/flags/cup2.png')}}">
                                                                                        @endif

                                                                                    </div>
                                                                                </div>
                                                                            </td>
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
                                                            <div style="height: 407px;" class="separtos"></div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>  {{--  end card --}}
                                        </div> {{--  end col div --}}

                                        <div class="col second_sta">
                                            <div class="card">
                                                <div class="card-header">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <h6>Champion</h6>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div style="height: 385px;" class="separtos"></div>

                                                            <div class="row">
                                                                <div class="col-md-12">

                                                                    <table class="display table_second_stage">
                                                                        <tbody>
                                                                            <tr>
                                                                                <br>
                                                                                <td style="width: 30%; height: 30px;">
                                                                                    <div class="row">
                                                                                        <div class="col-md-12">
                                                                                            @if (isset($ss->winner1->team_name))
                                                                                            <img class="img_flags iWinner1" src="{{asset('img/flags/').'/'.str_replace(' ', '_', strtolower($ss->winner1->team_name)).'.png'}}">
                                                                                            @else
                                                                                            <img class="img_flags iWinner1" src="{{asset('img/flags/cup2.png')}}">
                                                                                            @endif
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td style="width: 70%; height: 30px;">
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

                                                                <div style="height: 437px;" class="separtos"></div>

                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>  
                                            </div>

                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-6">
                                              <input type="button" name="reset" id="reset" class="btn btn-info btn-block" value="Reset" />
                                          </button>
                                      </div>

                                      <div class="col-md-6">
                                        <input type="button" name="submitgrouph" id="submitSecondStage" class="btn btn-info btn-block" value="Save" />
                                    </button>
                                </div>
                            </form>
                        </div> {{-- end closestcontainer --}}
                <input type="hidden" id="imgroute" value="{{asset('img/flags')}}">

        </main>
    </div>
</body>

<script>
{{-- {{asset('img/flags/pick_a_team.png')}} --}}
    $(document).ready(function(){

        
        if($('select.WRound1A2B').val() == ''){
            $(".iWRound1A2B").attr('src', "{{asset('img/flags/cup2.png')}}");
            // $('select.Wquarter1_2').find('option').not(':first').remove();
            // $(".iWquarter1_2").attr('src', "{{asset('img/flags/cup2.png')}}");
            // $('select.WSemi1_2').find('option').not(':first').remove();
            // $(".iWSemi1_2").attr('src', "{{asset('img/flags/cup2.png')}}");

            // $('select.Winner1').find('option').not(':first').remove();
            // $(".iWinner1").attr('src', "{{asset('img/flags/cup2.png')}}");

        }

        if($('select.WRound1C2D').val() == ''){
            $(".iWRound1C2D").attr('src', "{{asset('img/flags/cup2.png')}}");
            // $('select.Wquarter1_2').find('option').not(':first').remove();
            // $(".iWquarter1_2").attr('src', "{{asset('img/flags/cup2.png')}}");
            // $('select.WSemi1_2').find('option').not(':first').remove();
            // $(".iWSemi1_2").attr('src', "{{asset('img/flags/cup2.png')}}");

            // $('select.Winner1').find('option').not(':first').remove();
            // $(".iWinner1").attr('src', "{{asset('img/flags/cup2.png')}}");
        }

        if($('select.WRound1E2F').val() == ''){
            $(".iWRound1E2F").attr('src', "{{asset('img/flags/cup2.png')}}");
            // $('select.Wquarter3_4').find('option').not(':first').remove();
            // $(".iWquarter3_4").attr('src', "{{asset('img/flags/cup2.png')}}");
            // $('select.WSemi1_2').find('option').not(':first').remove();
            // $(".iWSemi1_2").attr('src', "{{asset('img/flags/cup2.png')}}");

            // $('select.Winner1').find('option').not(':first').remove();
            // $(".iWinner1").attr('src', "{{asset('img/flags/cup2.png')}}");

        }

        if($('select.WRound1G2H').val() == ''){
            $(".iWRound1G2H").attr('src', "{{asset('img/flags/cup2.png')}}");
            // $('select.Wquarter3_4').find('option').not(':first').remove();
            // $(".iWquarter3_4").attr('src', "{{asset('img/flags/cup2.png')}}");  
            // $('select.WSemi1_2').find('option').not(':first').remove();
            // $(".iWSemi1_2").attr('src', "{{asset('img/flags/cup2.png')}}");

            // $('select.Winner1').find('option').not(':first').remove();
            // $(".iWinner1").attr('src', "{{asset('img/flags/cup2.png')}}");
        }

        if($('select.WRound1B2A').val() == ''){
            $(".iWRound1B2A").attr('src', "{{asset('img/flags/cup2.png')}}");
            // $('select.Wquarter5_6').find('option').not(':first').remove();

            // $('select.Wquarter5_6').find('option').not(':first').remove();
            // $(".iWquarter5_6").attr('src', "{{asset('img/flags/cup2.png')}}");
            // $('select.WSemi3_4').find('option').not(':first').remove();
            // $(".iWSemi3_4").attr('src', "{{asset('img/flags/cup2.png')}}");
            // $('select.Winner1').find('option').not(':first').remove();
            // $(".iWinner1").attr('src', "{{asset('img/flags/cup2.png')}}");


        }

        if($('select.WRound1D2C').val() == ''){
            $(".iWRound1D2C").attr('src', "{{asset('img/flags/cup2.png')}}");
            // $(".iWquarter5_6").attr('src', "{{asset('img/flags/cup2.png')}}");

            // $('select.Wquarter5_6').find('option').not(':first').remove();
            // $(".iWquarter5_6").attr('src', "{{asset('img/flags/cup2.png')}}"); 
            // $('select.WSemi3_4').find('option').not(':first').remove();
            // $(".iWSemi3_4").attr('src', "{{asset('img/flags/cup2.png')}}");
            // $('select.Winner1').find('option').not(':first').remove();
            // $(".iWinner1").attr('src', "{{asset('img/flags/cup2.png')}}");

        }

        if($('select.WRound1F2E').val() == ''){
            $(".iWRound1F2E").attr('src', "{{asset('img/flags/cup2.png')}}");
            // $('select.Wquarter7_8').find('option').not(':first').remove();
            // $(".iWquarter7_8").attr('src', "{{asset('img/flags/cup2.png')}}");
            // $('select.WSemi3_4').find('option').not(':first').remove();
            // $(".iWSemi3_4").attr('src', "{{asset('img/flags/cup2.png')}}");
            // $('select.Winner1').find('option').not(':first').remove();
            // $(".iWinner1").attr('src', "{{asset('img/flags/cup2.png')}}");

        }

        if($('select.WRound1H2G').val() == ''){
            $(".iWRound1H2G").attr('src', "{{asset('img/flags/cup2.png')}}");
            // $('select.Wquarter7_8').find('option').not(':first').remove();
            // $(".iWquarter7_8").attr('src', "{{asset('img/flags/cup2.png')}}");
            // $('select.WSemi3_4').find('option').not(':first').remove();
            // $(".iWSemi3_4").attr('src', "{{asset('img/flags/cup2.png')}}");
            // $('select.Winner1').find('option').not(':first').remove();
            // $(".iWinner1").attr('src', "{{asset('img/flags/cup2.png')}}");
        }


        var selectedTeamAvalue = $(".WRound1A2B option:selected").val();
        var selectedTeamAtext = $(".WRound1A2B option:selected").text();

        var selectedTeamBvalue = $(".WRound1C2D option:selected").val();
        var selectedTeamBtext = $(".WRound1C2D option:selected").text();

        if (selectedTeamAvalue != '' && selectedTeamBvalue != ''){
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
        }

        var selectedTeamCvalue = $(".WRound1E2F option:selected").val();
        var selectedTeamCtext = $(".WRound1E2F option:selected").text();

        var selectedTeamDvalue = $(".WRound1G2H option:selected").val();
        var selectedTeamDtext = $(".WRound1G2H option:selected").text();
        
        if (selectedTeamCvalue != '' && selectedTeamDvalue != ''){


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

        }


        var selectedTeamEvalue = $(".WRound1B2A option:selected").val();
        var selectedTeamEtext = $(".WRound1B2A option:selected").text();

        var selectedTeamFvalue = $(".WRound1D2C option:selected").val();
        var selectedTeamFtext = $(".WRound1D2C option:selected").text();

        if (selectedTeamEvalue != '' && selectedTeamFvalue != ''){

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

        }


        var selectedTeamGvalue = $(".WRound1F2E option:selected").val();
        var selectedTeamGtext = $(".WRound1F2E option:selected").text();

        var selectedTeamHvalue = $(".WRound1H2G option:selected").val();
        var selectedTeamHtext = $(".WRound1H2G option:selected").text();


        if (selectedTeamGvalue != '' && selectedTeamHvalue != ''){

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

        }


        /*
        * FINAL
        */

        var selectedTeamIvalue = $(".Wquarter1_2 option:selected").val();
        var selectedTeamItext = $(".Wquarter1_2 option:selected").text();

        var selectedTeamJvalue = $(".Wquarter3_4 option:selected").val();
        var selectedTeamJtext = $(".Wquarter3_4 option:selected").text();

        if (selectedTeamIvalue != '' && selectedTeamJvalue != ''){

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

        }


        var selectedTeamKvalue = $(".Wquarter5_6 option:selected").val();
        var selectedTeamKtext = $(".Wquarter5_6 option:selected").text();

        var selectedTeamLvalue = $(".Wquarter7_8 option:selected").val();
        var selectedTeamLtext = $(".Wquarter7_8 option:selected").text();

        if (selectedTeamKvalue != '' && selectedTeamLvalue != ''){

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
        }


        /*
        * Campeon
        */

        if (selectedTeamMvalue != '' && selectedTeamNvalue != ''){

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

        }

    }); 

    var url = $("#imgroute").val();
    

    $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
         });

    var postSECONDSTAGE = "<?php echo url('/storesecondstage'); ?>";

    $('#submitSecondStage').click(function(){

            $('#status').show();
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
                        parent.location='{{ route("home") }}';
                        
                    }
                    $('#status').hide();
                }  
            }); 

        });


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

        

        $("#WRound1C2D, #WRound1A2B").on("change", function(){


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



        $("select.WRound1E2F, select.WRound1G2H").on("change", function(){

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


        $("select.WRound1B2A, select.WRound1D2C").on("change", function(){

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


        $("select.WRound1F2E, select.WRound1H2G").on("change", function(){

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



        $("select.Wquarter1_2, select.Wquarter3_4").on("change", function(){

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


        $("select.Wquarter5_6, select.Wquarter7_8").on("change", function(){

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

        $("select.WSemi1_2, select.WSemi3_4").on("change", function(){

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

        $("select.Winner1").on("change", function(){

            // var selectedSemi5Value = $(".Winner1 option:selected").val();
            var selectedWinner = $(".Winner1 option:selected").text();

            $(".iWinner1").attr('src', url + '/' + selectedWinner.replace(/ /g,"_").toLowerCase() + '.png');
            
            
        });

</script>

</html>

