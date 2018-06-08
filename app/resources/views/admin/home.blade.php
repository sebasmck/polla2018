<!doctype html>
<html lang="{{ app()->getLocale() }}">
    
    @include('admin.partials.head')
    
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
                            <li class="is-active">
                              <a href="{{ route('admin') }}">Pending Approvals</a>
                            </li>
                            <li >
                              <a href="{{ route('assign') }}">User Management</a>
                            </li>
                            <li>
                              <a href="{{ route('pollmanagement') }}"> Pool Management</a>
                            </li>
                            <li>
                              <a href="{{ route('phases') }}"> Phases Management</a>
                            </li>
                          </ul>
                        </nav></div>
                      </div>
                    
                  </section>

                  <section class="section">
                    <div class="container">
                      <a class="button is-success is-pulled-right" href="{{ route('allusers')}}">All Users</a>
                      <h1 class="title"><b> Pending Approvals </b></h1>                  
                      <hr style="margin-bottom: 0;">
                      <table id="pendings" class="display">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Last Name</th>
                                    <th>Nickname</th>
                                    <th>E-mail</th>
                                    <th>City</th>
                                    <th>Cellphone</th>
                                    <th>Referred By</th>
                                    <th>Aprove</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                @if($user->is_approved == 0)
                                <tr>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->lastname}}</td>
                                    <td>{{$user->nickname}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->city}}</td>
                                    <td>{{$user->cellphone}}</td>
                                    <td>{{$user->referredby}}</td>
                                    <td><a class="button is-danger" href="{{route('admins.edit', $user->id)}}"> Aprove </a></td>
                                    <td>
                                        <div class="col-md-6">
                                          {!! Form::open(['route' => ['admins.destroy', $user->id], 'method' => 'DELETE', 'onsubmit' => 'return confirmDelete()']) !!}

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
    </body>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>

    @include('admin.partials.js')


    
    <script>
        
        $(document).ready( function () {
            $('#pendings').DataTable();
        } );

        function confirmDelete() {
            var result = confirm('Are you sure you want to delete?');

            if (result) {
                    return true;
                } else {
                    return false;
                }
        }
        
    </script>


</html>
