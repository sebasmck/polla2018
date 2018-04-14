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
                                <h4>{{ __('My polls') }} </h4>
                            </div>
                            <div class="col-md-8">
                                <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-primary addbutton" id="myBtn"><span class="fa fa-plus">+</span></button>
                            </div>
                        </div>
                        
                        
                    </div>

                    <div class="card-body">
                        <div class="columns">
                            <div class="column is-two-thirds">
                            
                                    <table id="myTable" class="display">
                                            <thead>
                                                <tr>
                                                    <th>Nickname Poll</th>
                                                    <th>Status</th>
                                                    <th>Picks Complete</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($polls as $poll)
                                                <tr>
                                                    <td>{{$poll->poll_name}}</td>
                                                    <td>{{$poll->status}}</td>
                                                    <td></td>
                                                    <td><div class="form-group row mb-0">
                                                        <div class="col-md-6 offset-md-4">
                                                            <div class="control">
                                                                <button class="button is-link">Edit mi picks</button>
                                                            </div>
                                                        </div>
                                                    </div></td>
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

     {{-- BEGIN CREATE MODAL --}}

      <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
          
            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Create poll</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            
            <!-- Modal body -->
            <div class="modal-body">
            <form  action="{{route('pollregistration')}}" method="POST">
                    @csrf

            <input type="hidden" value="{{Auth::user()->id}}" name="user_id">

                    <div class="form-group row">
                        <div class="col-md-12">
                            <input id="poll_name" type="text" class="form-control{{ $errors->has('poll_name') ? ' is-invalid' : '' }}" name="poll_name" value="{{ old('poll_name') }}" required placeholder="Poll Name">

                                @if ($errors->has('poll_name'))
                                    <span class="invalid-feedback">
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

   {{--  <div id="id1" class="modal" style="">

        <div class="modal-content" style="width:60%;">

            <div class="card-head style-primary">
                <header>Crear ATA</header>
                <span style="margin-right: 20px;" onclick="document.getElementById('id1').style.display='none'"
                class="close">x</span>
            </div>

            <div class="card">
                <div class="card-body floating-label">
                    <form method="POST" action="{{ route('home') }}">
                    @csrf

                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="cATA" name="ATA" required>
                                        <label for="ATA">ATA</label>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="cCodATA" name="CodATA" required>
                                        <label for="CodATA">CodATA</label>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="cGeneral" name="General" required>
                                        <label for="General">General</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    

                    <div class="row">
                        <div class="col-sm-6">
                            <button type="submit" style="" class="btn btn-info btn-block">Crear</button>
                        </div>
                        <div class="col-sm-6">
                            <button type="button" onclick="document.getElementById('id1').style.display='none'" style="" class="btn btn-danger btn-block">Cancelar</button>
                        </div>
                    </div>

                </form>
                </div>
            </div>
        </div>

    </div> --}}


{{-- END CREATEMODAL --}}
@endsection


    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.js"> </script>
<script src="{{URL::asset('js/app.js')}}"></script>

<script>
    $(document).ready( function () {
        $('#myTable').DataTable({
            paging: false,
        });
    } );
</script>


