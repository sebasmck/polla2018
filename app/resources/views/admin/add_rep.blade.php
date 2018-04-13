<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Polla2018 |Assign Rep</title>

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
                              Nuevos Usuarios
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
                                        <div class="modal-card">
                                          <header class="modal-card-head">
                                            <p class="modal-card-title">Add Rep</p>
                                          </header>
                                          <section class="modal-card-body">
                                          <form action="/storerep" method="POST">
                                              @csrf
                                                <div class="field">
                                                <div class="control">
                                                    <input name="name" class="input is-danger" type="text" placeholder="Name" required>
                                                </div>
                                                <br>
                                                <div class="field">
                                                <div class="control">
                                                    <input name="email" class="input is-danger" type="text" placeholder="Email" required>
                                                </div>
                                                </div>
                                          </section>
                                          <footer class="modal-card-foot">
                                              <button type="submit" class="button is-success">Save</button>
                                            </form>
                                            <button class="button" id="close">Cancel</button>
                                          </footer>
                                        </div>
                    </div>
                  </section>

    {{-- BEGIN CREATE MODAL --}}
    </body>


   

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>
    
    


</html>
