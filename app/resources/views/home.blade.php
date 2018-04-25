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
                            <div class="col-md-8">
                                <h4>{{ __('My Pools') }} </h4>
                            </div>
                            <div class="col-md-4">
                                <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-primary" id="myBtn" style="width: 100%; padding-top: 0;"> Add additional Pool <span style="font-size: 19px;     font-weight: 700;"></span></button>
                            </div>
                        </div>
                        
                        
                    </div>

                    <div class="card-body">
                        <br>
                        <ul style="line-height:80%" >
                            <li>
                                <p>Your registered Pool is below. To enter your picks, select “Edit my Picks”.</p>
                            </li>
                            <li>
                                <p>To participate in additional Pools, please click “Add Additional Pool”.</p>
                            </li>
                        </ul>
                        
                         <div class="row">
                            <div class="col-md-12 table-responsive">
                        
                                <table id="myTable" class="table table_pool">
                                        <thead>
                                            <tr>
                                                <th>Nickname</th>
                                                <th>Status</th>
                                                <th>Complete Pool</th>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($polls as $poll)
                                            <tr>
                                                <td>{{$poll->poll_name}}</td>
                                                @if($poll->status == 'Pending')
                                                    <td style="color: #FF0000;">{{$poll->status}}</td>
                                                @else
                                                    <td style="color: #38610B;">{{$poll->status}}</td>
                                                @endif

                                                <td></td>
                                                <td><div class="form-group row mb-0">

                                                    @if($poll->status == 'Pending')
                                                        <div class="col-md-8 offset-md-4">
                                                            <div class="control">
                                                                <button class="btn btn-primary" onclick="window.location='{{ route('picks.show', $poll->iduser_poll) }}'">Edit my picks</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @else
                                                    
                                                    @endif
                                                </div></td>
                                                <td>
                                                    @if($poll->status == 'Pending')
                                                    <div class="col-md-8 offset-md-4">
                                                        <div class="control">
                                                            {{-- <a href="{{route('picks.destroy', $poll->iduser_poll)}}" class="btn btn-primary">Delete Poll</a> --}}
                                                            {!! Form::open(['method' => 'DELETE','route' => ['picks.destroy', $poll->iduser_poll],'style'=>'display:inline']) !!}
                                                            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                                            {!! Form::close() !!}
                                                        </div>
                                                    </div>
                                                    @else
                                                    
                                                    @endif
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                </table> 
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
                                    <button type="" class="btn btn-primary" style="width: 100%;">
                                        {{ __('Worldcup Results (starts June 12th)') }}
                                    </button>
                                </div>
                            </div>
                            <div class="col-md-10 offset-md-1 ">
                                 <div class="form-group">
                                    <button type="" class="btn btn-primary" style="width: 100%;">
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

     {{-- BEGIN CREATE MODAL --}}

      <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
          
            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Create pool</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            
            <!-- Modal body -->
            <div class="modal-body">
            <form  action="{{route('pollregistration')}}" method="POST">
                    @csrf

            <input type="hidden" value="{{Auth::user()->id}}" name="user_id">

                    <div class="form-group row">
                        <div class="col-md-12">
                            <input id="poll_name" type="text" class="form-control{{ $errors->has('poll_name') ? ' is-invalid' : '' }}" name="poll_name" value="{{ old('poll_name') }}" required placeholder="Pool Name">

                                @if ($errors->has('poll_name'))
                                    <span class="invalid-feFFedback">
                                        <strong>{{ $errors->first('poll_name') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-8 offset-md-2">
                            <button type="submit" class="btn btn-primary" style="width: 100%;">
                                {{ __('Save') }}
                            </button>

                            {{-- <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a> --}}
                        </div>
                    </div>
                </form>
            </div>
            
            {{-- <!-- Modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-primary" data-dismiss="modal">Guardar</button>
            </div> --}}
            
          </div>
        </div>
      </div>

{{-- END CREATEMODAL --}}
@endsection


    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.js"> </script>
<script src="{{URL::asset('js/app.js')}}"></script>
<script src="{{URL::asset('scripts/countdown.js')}}"></script>

<script>
    // $(document).ready( function () {
    //     $('#myTable').DataTable({
    //         paging: false,
    //     });
    // } );



</script>


