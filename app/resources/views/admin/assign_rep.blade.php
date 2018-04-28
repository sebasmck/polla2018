<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Polla2018 |User Management</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{asset('css/bulma.css')}}">
        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.css">
      
        @include('admin.partials.head')


    </head>
    <body>

           @include('partials.header')

                  <section class="hero is-link">
                    <div class="hero-body">
                      <div class="container">
                        <div class="columns is-vcentered">
                          <div class="column">
                            <p class="title">
                              Admin
                            </p>
                            <p class="subtitle">
                              Users
                            </p>
                          </div>
                          <div class="column is-narrow">
                            <div id="carboncontainer">
                  
                            </div>
                  
                          </div>
                        </div>
                      </div>
                    </div>
                  
                    <div class="hero-foot">
                      <div class="container">
                        <nav class="tabs is-boxed">
                          <ul>
                            <li>
                              <a href="/admin">Pending approvals</a>
                            </li>
                            <li class="is-active">
                                <a href="/assign">User Management</a>
                              </li>
                          </ul>
                        </nav></div>
                      </div>
                    
                  </section>

                  <section class="section">
                    <div class="container">
                    <a class="button is-success is-pulled-right" href="/addrep">Add Rep</a>
                      <h1 class="title"><b> User Management </b></h1>                  
                      <hr style="margin-bottom: 0;">
                      <table id="pendings" class="display">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Pools</th>
                                    <th>Assign</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                @if($user->is_approved == 1 && $user->role != 'admin')
                                <tr>
                                    <td>{{$user->nickname}}</td>
                                    <td>{{$user->email}}</td>
                                <td> <a class="button is-danger" href="{{route('admins.show', $user->id)}}"> View Pools</a> </td>
                                <td>
                                    @if(empty($user->id_rep))
                                    <button class="button is-primary is-pulled-left" id="showModal"
                                      data-target="modal-ter" data-id="{{$user->id}}" aria-haspopup="true">Assign Rep</button>
                                    @else
                                    <a href="/editrep/{{$user->id}}"> <button class="button is-primary is-pulled-right">Edit Rep</button></a>
                                    <p class="is-pulled-left">{{$user->rep->name}}</p>
                                    @endif
                                    </td>
                                    <td>
                                        <div class="col-md-6">
                                          {!! Form::open(['route' => ['admins.destroy', $user->id], 'method' => 'DELETE']) !!}

                                          {!!Form::submit('x', ['class' => 'button is-danger']) !!}
                            
                                          {!! Form::close() !!}
                                        </div>
                                    </td>
                                </tr>
                               @endif 
                            @endforeach
                            </tbody>
                            
                        </table>


                    </div>
                  </section>

    {{-- BEGIN CREATE MODAL --}}
    </body>


    <div class="modal">
            <div class="modal-background"></div>
                <div class="modal-card">
                  <header class="modal-card-head">
                    <p class="modal-card-title">Add Rep</p>
                  </header>
                  <section class="modal-card-body">
                  <form action="/assigntouser" method="POST">
                      @csrf
                      <input type="hidden" id="id" name="id">
                      <div class="select">
                          {{ Form::select('id_rep', $reps->pluck('name', 'id_rep'), null, ['class' => 'form-control', 'id' => 'id_rep']) }}
                      </div>
                  </section>
                  <footer class="modal-card-foot">
                      <button type="submit" class="button is-success">Save</button>
                    </form>
                    <button class="button" id="close">Cancel</button>
                  </footer>
                </div>
      </div>

    @include('admin.partials.js')

    <script src="{{URL::asset('js/bulma.js')}}"></script>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>
    
    <script>
        
        $(document).ready( function () {

        $('#pendings').DataTable();

        
        $(document).on('click', '#showModal', function(){

        $('#id').val($(this).data('id'));
        $(".modal").addClass("is-active");  

        });

        

        $("#close").click(function() {
            $(".modal").removeClass("is-active");
        });

      
        });

    </script>



    

    

</html>
