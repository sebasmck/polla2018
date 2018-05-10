@extends('layouts.app')

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
                        <div class="col-md-10">
                            <h4>{{ __('Rules of the Game') }} </h4>
                        </div>
                        <div class="col-md-2">
                                <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-primary addbutton" id="myBtn" style="width: 100%;" onclick="window.location='{{ route('home') }}'">Home</button>
                            </div>
                    </div>
                    
                    
                </div>

                <div class="card-body">
                    <div class="columns">
                        <div class="column is-two-thirds">
                            <div class="row">
                                    <ol>
                                        <h6><b>   Rules  of  the  Game </b></h6>
                                        <li>
                                            <p>
                                                Register at www.pollaworldcup.com at your earliest convenience - be prepared to submit: 
                                            </p>
                                            <ul>
                                                <li>
                                                    Nickname (only published information)
                                                </li>
                                                <li>Password</li>
                                                <li>First Name </li>
                                                <li>Last Name</li>
                                                <li>E-Mail</li>
                                                <li>Mobile Number</li>
                                                <li>Referral</li>
                                            </ul>
                                        </li>
                                        <br>
                                        <li>
                                            <p>
                                                Once activated, log in with your email and password. Once logged in, on the main menu page, please click on “Edit my Picks” to fill out your pool. If you would like to add more pools, click on “Add Additional Pool”. You will be prompted to create a unique nickname.
                                                Each nickname can only be used once. You can then click on “Edit picks” to fill out your pools.
                                            </p>
                                            <p>
                                                In the tabs group A through group H, predict a score for each game and pick the winner and runner up for each group. Click “Save and go to Next Group” to continue, click any of the group tabs to navigate scores and groups, or “Save and go to Home Page” to go back to Main Menu.
                                            </p>
                                            <p>
                                                GO TO TAB: Second Round, and... <br>
                                                From these 16 teams select 8 teams for the Quarter-Finals <br>
                                                From these 8 teams select 4 for the Semi-finals  <br>
                                                From these 4 teams select 2 for the Final<br>
                                                Pick a Champion<br>
                                                Please click on SAVE CHANGES and go to Home Page to save your picks. 
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                ATTENTION: Your poll will be inactive until you 
                                                    activate it. Contact your city representative to 
                                                    activate your account as soon as possible. You will
                                                     be able, in the meantime, to modify your picks at will. 
                                                     <br>
                                                       miami@pollaworldcup.com::  newyork@pollaworldcup.com  :: barranquilla@pollaworldcup.com  ::  bogota@pollaworldcup.com   
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                 You will be able log in to www.pollaworldcup.com with your email and password and change your results as much as you want BEFORE JUNE 11, 2018 @ 6:00 PM EST
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                JUNE 11, 2018 @ 11:00 PM EST, the administration will make all pools public, and
                                                publish THE RANKING TABLE. <br>
                                                The TABLE will be updated daily and all users will be able to see every participant&#39;s picks. Upon completion of the World Cup, the winner(s) and runner(s) up will be announced;
                                            </p>
                                        </li>
                                        <h6><b>   Rules </b></h6>
                                        <p>
                                             The  ranking  will  be  determined  and  sorted  according  to  the  score  obtained  by  each  player.  The  first  place  will  be  the  player  with  the  greatest  amount  of  points,  and  the  runner  up  will  be  the  player  with  the  second  greatest  amount  of  points.  In  case  of  a  tie,  participants  will  be  ranked  in  alphabetical  order,  only  for  presentation  purposes.  
                                        </p>
                                    </ol>

                                    
                                    <ul>
                                        <h6><b>   SCORING SYSTEM: </b></h6>
                                        <li>
                                            The player will receive two (2) points for every score that the player gets right in the first round.
                                            
                                        </li>
                                        <li>
                                            The player will receive one (1) point for every team that he selects and that qualifies to the Round of 16. Four (4) bonus points will be awarded if the player selects the 16 teams that make it to the Round of 16.
                                            
                                        </li>
                                        <li>
                                            The player will receive two (2) points for every team that he selects and that qualifies to the Quarter-Final. Four (4) bonus points if the player selects the 8 teams that make it to the Quarter-Finals.
                                            
                                        </li>
                                        <li>
                                            The player will receive four (4) points for every team that he selects and that qualifies to the Semi-Final. Four (4) bonus points will be awarded if the player selects the 4 teams that make it to the Semi-Final.
                                            
                                        </li>
                                        <li>
                                            The player will receive eight (8) points for every team that he selects and that qualifies to the Final. Four (4) bonus points will be awarded if the player selects the 2 teams that make it to the Final.
                                            
                                        </li>
                                        <li>
                                            The player will receive 20 points if he selects the champion.
                                        </li>
                                        
                                    </ul>
                                    <br>
                                    <ul>
                                        <h6><b>   WINNER: </b></h6>
                                        <li>
                                            The winners will be the players with greatest amount of points at the end 
                                            of the World Cup, once the final Ranking Table has been published. 
                                        </li>
                                    </ul>
                                    <br>
                                    <ul>
                                        <h6><b>   PRIZES: </b></h6>
                                        <li>
                                            (After 5% administration and maintenance fees)
                                        </li>
                                        <li>
                                            1st Place: 80%
                                        </li>
                                        <li>
                                            2nd Place: 20%
                                        </li>
                                        <br>
                                        <p>
                                            In case of a draw, the tied players will split the prize in equal amounts. 
                                            So if a tie exists between two players for the first position, the prize 
                                            designated for 1st and 2nd place is added and divided between the tied players. 
                                            In addition, if there is only one first place winner and three players are tied 
                                            for 2nd place, the money allocated for the 2nd place will be divided among the 
                                            three players. 
                                        </p>
                                    </ul>
                                    <br>
                                    
                                    <ul>
                                        <h6><b>   DISCLAIMER:</b></h6>
                                       
                                            <p>The qualified teams and their order of qualification to the subsequent rounds will be determined by the FIFA and their rules, regulations  and format and NOT our by World Cup tracker. Please keep in mind, that if there  is a tie in points, games  won, and goal difference, the FIFA uses a drawing of lots process to determine who passes to the next round, if this is the case of your scores your tracker will prompt you to choose your teams manually. Please do so. For official rules for the World Cup competition go to: <a href="http://resources.fifa.com/mm/document/tournament/competition/02/84/35/19/regulationsfwc2018en_neutral.pdf">http://resources.fifa.com/mm/document/
                                            tournament/competition/02/84/35/19/
                                            regulationsfwc2018en_neutral.pdf</a> 
                                            </p>
                                        
                                    </ul>

                                <div class="container">
                                  <div class="content has-text-centered">
                                          <article class="tile is-child notification is-info">
                                                  <p class="title">Contacto</p>

                                                      <li>General information: contact@pollaworldcup.com </li>
                                                      <li>Miami City Rep: miami@pollaworldcup.com </li>
                                                      <li>New York City Rep: newyork@pollaworldcup.com </li>
                                                      <li>Boston City Rep: boston@pollaworldcup.com</li>
                                                      <li>Bogota City Rep: bogota@pollaworldcup.com </li>
                                                      <li>Barranquilla City Rep: barranquilla@pollaworldcup.com </li>

                                          </article>
                                  </div>
                                </div>
                            </div>
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
<script src="{{URL::asset('js/app.js')}}"></script>
<script src="{{URL::asset('scripts/countdown.js')}}"></script>
@include('admin.partials.js')