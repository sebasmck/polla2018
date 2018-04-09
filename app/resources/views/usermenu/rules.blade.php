@extends('partials.layout')

@section('content')

<section class="hero is-danger">
        <div class="hero-body">
          <div class="container">
            <p class="title">
                Rules of the Game 
            </p>
            <p class="subtitle">
              
            </p>
          </div>
        </div>
</section>

    <br><br>

<div class="container">
    <div class="columns">

        <div class="row">
        <div class="column">
            <div class="notification">
                    1. Register at www.pollaworldcup.com at your earliest convenience - be prepared to submit: 
                    Nickname (only published information)
                    Password
                    First Name 
                    Last Name
                    E-Mail 
                    Mobile Number 
                    Referral
            </div>
        </div>

        <div class="column">
            <div class="notification">
                    2. Once activated, log in with your username and password
                    and fill out your picks by clicking on "Select and Edit Your Picks". 
                    In the tabs group A through group H, guess a score for 
                    each game. You can update the group table ranking by clicking on 
                    "Update table according to My Picks". Then, pick the winner and 
                    runner up of each group. 
                    GO TO TAB: Second Round, and...
                    From these 16 teams select 8 teams for the Quarter-Finals 
                    From these 8 teams select 4 for the Semi-finals 
                    From these 4 teams select 2 for the Final
                    Pick a Champion
                    Please click on SAVE CHANGES and go to Home Page to save your picks. 
            </div>
        </div>
        <div class="column">
                <div class="notification">
                        3. ATTENTION: Your poll will be inactive until you 
                        activate it. Contact your city representative to 
                        activate your account as soon as possible. You will
                         be able, in the meantime, to modify your picks at will. 
                </div>
        </div>

        <div class="column">
                <div class="notification">
                        The ranking will be determined and sorted according 
                        to the score obtained by each player. The first place 
                        will be the player with the greatest amount of points, 
                        and the runner up will be the player with the second 
                        greatest amount of points. In case of a tie, participants 
                        will be ranked in alphabetical order, only for presentation 
                        purposes. 
                </div>
        </div>



        <div class="column">
                <div class="notification">
                    <b>   SCORING SYSTEM: </b>
                    <br>
                    <br>
                    The player will receive two (2) points for every score that the player gets right in the first round.
                    The player will receive one (1) point for every team that he selects and that qualifies to the Round of 16. Four (4) bonus points will be awarded if the player selects the 16 teams that make it to the Round of 16.
                    The player will receive two (2) points for every team that he selects and that qualifies to the Quarter-Final. Four (4) bonus points if the player selects the 8 teams that make it to the Quarter-Finals.
                    The player will receive four (4) points for every team that he selects and that qualifies to the Semi-Final. Four (4) bonus points will be awarded if the player selects the 4 teams that make it to the Semi-Final.
                    The player will receive eight (8) points for every team that he selects and that qualifies to the Final. Four (4) bonus points will be awarded if the player selects the 2 teams that make it to the Final.
                    The player will receive 20 points if he selects the champion.
                </div>
        </div>


        <div class="column">
                <div class="notification">
                    <b> WINNER: </b>
                    <br>
                    <br>
                    The winners will be the players with greatest amount of points at the end 
                    of the World Cup, once the final Ranking Table has been published. 
                    
                </div>
        </div>

        <div class="column">
                <div class="notification">
                    <b> PRIZES: (After 5% administration and maintenance fees)  </b>
                    <br>
                    <br>
                    

            1st Place: 80% <br>
            2nd Place: 20%
            <br>
            In case of a draw, the tied players will split the prize in equal amounts. 
            So if a tie exists between two players for the first position, the prize 
            designated for 1st and 2nd place is added and divided between the tied players. 
            In addition, if there is only one first place winner and three players are tied 
            for 2nd place, the money allocated for the 2nd place will be divided among the 
            three players. 
                </div>
        </div>

        <div class="column">
                <div class="notification">
                    <b> DISCLAIMER: </b>
                    <br>
                    <br>
                    
            The qualified teams and their order of qualification to the 
            subsequent rounds will be determined by the FIFA and their rules, regulations 
            and format and NOT our by World Cup tracker. Please keep in mind, that if there 
            is a tie in points, games won, and goal difference, the FIFA uses a drawing of 
            lots process to determine who passes to the next round, if this is the case of
             your scores your tracker will prompt you to choose your teams manually. Please 
             do so. For official rules for the World Cup competition go to:  
             http://resources.fifa.com/mm/document/tournament/competition/01/47/38/17/regulationsfwcbrazil2014_update_e_neutral.pdf
                </div>
        </div>

        
        </div>

    </div>
</div>
<footer class="footer">
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
      </footer>
@endsection

