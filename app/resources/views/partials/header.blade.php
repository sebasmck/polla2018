<header>

        <nav class="navbar is-transparent">
                <div class="navbar-brand">
                  <a class="navbar-item" href="/home">
                    Polla World Cup
                  </a>
                  <div class="navbar-burger burger" data-target="navbarExampleTransparentExample">
                    <span></span>
                    <span></span>
                    <span></span>
                  </div>
                </div>
              
                <div id="navbarExampleTransparentExample" class="navbar-menu">
                  
              
                  <div class="navbar-end">
                    <div class="navbar-item">
                      
                            <div class="navbar-start">
                                    <div class="navbar-item has-dropdown is-hoverable">
                                      <a class="navbar-link">
                                            {{ Auth::user()->name }}
                                      </a>

                                      <div class="navbar-dropdown is-boxed">

                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                          document.getElementById('logout-form').submit();">
                                             {{ __('Logout') }}
                                         </a>
     
                                         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                             @csrf
                                         </form>

                                      </div>


                                    </div>
                                  </div>

                    </div>
                  </div>


                </div>
              </nav>

              
</header>