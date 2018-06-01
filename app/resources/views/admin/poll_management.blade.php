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
                              Current Pools
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
                              <a href="{{route('admin')}}">Pending Approvals</a>
                            </li>
                            <li >
                                <a href="{{route('assign')}}">User Management</a>
                            </li>
                            <li class="is-active">
                              <a href="{{ route('pollmanagement') }}">Pool Management</a>
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


                      <h1 class="title"><b> Current Pools </b></h1>      

                      {{-- <hr style="margin-bottom: 0;"> --}}

                        <a href="{{ route('exportexcel') }}" class="button is-success is-pulled-left" style="margin-bottom: 25px;">Export to Excel</a>            
                      
                      <table id="pendings" class="display">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Pool Name</th>
                                    <th>E-mail</th>
                                    <th>City</th>
                                    <th>Cellphone</th>
                                    <th>Referre By</th>
                                    <th>Complete Pool</th>
                                    <th>Status</th>
                                    <th>Rep</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($allpolls as $poll)
                                <tr>
                                    <td>{{$poll->name . ' '. $poll->lastname}}</td>
                                    <td><a href="{{route('adminprintpicks.show', $poll->iduser_poll) }}">{{$poll->poll_name}}</a></td>
                                    <td>{{$poll->email}}</td>
                                    <td>{{$poll->city}}</td>
                                    <td>{{$poll->cellphone}}</td>
                                    <td>{{$poll->referredby}}</td>
                                    <td>{{$poll->complete}}</td>
                                    <td>{{$poll->status}}</td>
                                    <td>{{$poll->rep}}</td>
                                    
                                    <td>
                                        <button class="button is-primary is-pulled-left" id="showModal" data-target="modal-ter" data-id="{{$poll->iduser_poll}}" aria-haspopup="true">Edit</button>  
                                    </td>
                                    <td>
                                      {!! Form::open(['route' => ['destroypoll', $poll->iduser_poll], 'method' => 'DELETE', 'onsubmit' => 'return confirmDelete()']) !!}

                                          {!!Form::submit('x', ['class' => 'button is-danger', 'style' => 'margin-left:15px;']) !!}
                            
                                          {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                  </section>

    {{-- BEGIN CREATE MODAL --}}

    <div class="modal">
      <div class="modal-background"></div>
      <div class="modal-card">
        <header class="modal-card-head">
          <p class="modal-card-title">Change Status</p>
        </header>
        <section class="modal-card-body">
          <form class="form-horizontal" action="{{url('/editstatus')}}" method="POST">
            @csrf
            <input type="hidden" id="iduser_poll" name="iduser_poll">
            <div class="select">
              <select id="status" name="status">
                <option value="Pending">Pending</option>
                <option value="Active">Active</option>
              </select>
            </div>
          </section>
          <footer class="modal-card-foot">
            <button type="submit" id="submit" class="button is-success">Save</button>
          </form>
          <button class="button" id="close">Cancel</button>
        </footer>
      </div>
    </div>


    </body>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>

    @include('admin.partials.js')
    
    <script>
        
        $(document).ready( function () {

          $('#pendings').DataTable();   

          // open stuff

          $(document).on('click', '#showModal', function(){

              $('#iduser_poll').val($(this).data('id'));
              $(".modal").addClass("is-active");  

          });


          $("#close").click(function() {
              $(".modal").removeClass("is-active");
          });


        });

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
