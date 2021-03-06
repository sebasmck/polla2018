@extends('layouts.app')

@section('pagetitle')
    Ranking
@endsection

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12 title_polla">
                <img src="{{ asset('img/logo.png') }}" style="height: 150px;">
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-8">
                                <a style="float: left; margin-right: 15px;" href="{{route('home')}}"><button class="btn btn-primary" id="close"> < </button></a>
                                <h4>{{ __('Ranking') }} </h4>
                            </div>
                        </div>
                        
                        
                    </div>

                    <div class="card-body">
                         <div class="row">
                            <div class="col-md-12 table-responsive">
                                <table id="ranking" class="table table_pool">
                                        <thead>
                                            <tr>
                                                <th>Ranking</th>
                                                <th>Nickname</th>
                                                <th>Score</th>
                                                <th>Finalist</th>
                                                <th>Champion</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($polls as $poll)
                                            @if(Auth()->user()->id == $poll->id_User)
                                            <tr style="border: solid 1px #004782; background-color: #ebe9ed;">
                                                <td>{{$poll->ranking}}/{{$activepolls}}</td>
                                                <td><a href="{{route('adminprintpicks.show', $poll->iduser_poll) }}">{{$poll->poll_name}}</a></td>
                                                <td>{{$poll->score}}</td>
                                                <td>{{$poll->finalFinalist($poll->iduser_poll)}}</td>
                                                <td>{{$poll->finalWinner($poll->iduser_poll)}}</td>
                                            </tr>
                                            @else
                                            <tr>
                                                <td>{{$poll->ranking}}/{{$activepolls}}</td>
                                                <td><a href="{{route('adminprintpicks.show', $poll->iduser_poll) }}">{{$poll->poll_name}}</a></td>
                                                <td>{{$poll->score}}</td>
                                                <td>{{$poll->finalFinalist($poll->iduser_poll)}}</td>
                                                <td>{{$poll->finalWinner($poll->iduser_poll)}}</td>
                                            </tr>
                                            @endif
                                            @endforeach
                                        </tbody>
                                </table> 
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
@include('admin.partials.js')

<script>
    $(document).ready(function(){
        // $('#ranking').DataTable();
        // $("#ranking").tablesorter({sortList: [[2,1], [1,1]]});
    });
</script>




