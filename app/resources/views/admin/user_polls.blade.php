<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Polla2018 | All</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{asset('css/bulma.css')}}">
        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.css">

        
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
                              Active Polls
                            </p>
                          </div>
                          <div class="column is-narrow">
                            <div id="carboncontainer">
                                <p style="font-size:400%;"> {{$user->name}} </p> 
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
                              <a href="/admin">Pendientes</a>
                            </li>
                            <li class="is-active">
                                <a href="/assign">Assign Rep</a>
                              </li>
                          </ul>
                        </nav></div>
                      </div>
                    
                  </section>

                  <section class="section">
                    <div class="container">
                      <h1 class="title"><b> Current Picks </b></h1>                  
                      <hr style="margin-bottom: 0;">
                      <table id="pendings" class="display">
                            <thead>
                                <tr>
                                    <th>Poll Name</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($polls as $poll)

                                <tr>
                                    <td>{{$poll->poll_name}}</td>
                                    <td>{{$poll->status}}</td>
                                    <td><button class="button is-primary is-pulled-left" id="showModal"
                                    data-target="modal-ter" data-id="{{$poll->iduser_poll}}" aria-haspopup="true">Edit Status</button></td>
                                </tr>

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
                <p class="modal-card-title">Change Status</p>
              </header>
              <section class="modal-card-body">
                <form class="form-horizontal" role="form">
                  @csrf
                  <input type="hidden" id="iduser_poll" name="iduser_poll">
                  <div class="select">
                      <select id="status" name="status">
                          <option value="Unauthorized">Unauthorized</option>
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
    


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>
    
    <script>
        
        $(document).ready( function () {

          $('#pendings').DataTable();   

          $(document).on('click', '#showModal', function(){

              $('#iduser_poll').val($(this).data('id'));
              $(".modal").addClass("is-active");  

          });


          $("#close").click(function() {
              $(".modal").removeClass("is-active");
          });

          $(document).on('click', '#submit', function(){

            $.ajaxSetup({
              headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
            });

            $.ajax({

            type: 'post',
            url: '/editstatus',
            data: {
              
            'iduser_poll': $("#iduser_poll").val(),
            'status': $("#status").val(),
            },

            success: function(data){
                    alert("Status changed");
            }

            });

            });

        });


    </script>


</html>
