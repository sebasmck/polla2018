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
                              <a href="{{ route('admin') }}">Pending Approvals</a>
                            </li>
                            <li>
                                <a href="{{ route('assign') }}">User Management</a>
                            </li>
                            <li>
                              <a href="{{ route('pollmanagement') }}"> Pool Management </a>
                            </li>
                            <li class="is-active">
                              <a href="{{ route('phases') }}"> Phases Management</a>
                            </li>
                          </ul>
                        </nav></div>
                      </div>
                    
                  </section>

                  <section class="section">
                    <div class="container">
                        
                        <h1 class="title"><b>Phases Management </b></h1>                  
                        <hr style="margin-bottom: 0;">

                          <header class="modal-card-head">
                            <p class="modal-card-title">Set Phase</p>
                          </header>
                          <section class="modal-card-body">
                            <form action="{{ route('changetophase')}}" method="POST">
                              @csrf
                            <div class="column">
                              <div class="select">
                                {{ Form::select('id_phase', ['1' => 'Phase 1', '2' => 'Phase 2', '3' => 'Phase 3'], null, ['class' => 'form-control', 'id' => 'id_phase']) }}
                              </div>
                            </div>
                            </section>
                          <footer class="modal-card-foot">
                              <button type="submit" class="button is-success">Save</button>
                            </form>
                            
                            @if($phase->phase == 3)
                              <a href="{{route('picks.show', Auth::user()->id)}}" class="button is-info"> Enter Results</a>
                            @else

                            @endif
                          </footer>
                        </div>

                    </div>
                  </section>
    </body>


    

    @include('admin.partials.js')

    <script src="{{URL::asset('js/bulma.js')}}"></script>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>


    
    <script>
        
        $(document).ready( function () {

          $('#pendings').DataTable();

          
          

      
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
