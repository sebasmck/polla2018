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
                    <div class="card-header"><h4>{{ __('My polls') }}</h4></div>

                    <div class="card-body">
                        <div class="columns">
                            <div class="row">
                                <div class="column">
                                    <a class="button is-primary is-link is-fullwidth" href="">
                                        <span class="icon"><i class="fa fa-sign-in"></i></span>
                                        <span>Printable Version of my Picks</span>
                                    </a>
                                </div>
                                <div class="column">
                                    <a class="button is-primary is-link is-fullwidth" href="/rules">
                                        <span class="icon"><i class="fa fa-sign-in"></i></span>
                                        <span>Read the Rules</span>
                                    </a>
                                </div>
                                <div class="column">
                                    <a class="button is-primary is-link is-fullwidth" href="">
                                        <span class="icon"><i class="fa fa-sign-in"></i></span>
                                        <span>Wolrdcup Results</span>
                                    </a>
                                </div>
                                <div class="column">
                                    <a class="button is-primary is-link is-fullwidth" href="">
                                        <span class="icon"><i class="fa fa-sign-in"></i></span>
                                        <span>Ranking and Poolwide picks</span>
                                    </a>
                                </div>
                            </div>
                
                            <div class="column is-two-thirds">
                            
                                    <table id="myTable" class="display">
                                            <thead>
                                                <tr>
                                                    <th>Nickname Polla</th>
                                                    <th>Pago</th>
                                                    <th>Acción</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Row 1 Data 1</td>
                                                    <td>Row 1 Data 2</td>
                                                    <td><div class="form-group row mb-0">
                                                        <div class="col-md-6 offset-md-4">
                                                                <div class="control">
                                                                    <button class="button is-link">Submit</button>
                                                                </div>
                                                        </div>
                                                    </div></td>
                                                </tr>
                                                <tr>
                                                    <td>Row 2 Data 1</td>
                                                    <td>Row 2 Data 2</td>
                                                    <td><div class="form-group row mb-0">
                                                        <div class="col-md-6 offset-md-4">
                                                                <div class="control">
                                                                    <button class="button is-link">Submit</button>
                                                                </div>
                                                        </div>
                                                    </div></td>
                                                </tr>
                                            </tbody>
                                        </table> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header"><h4>{{ __('Menu') }}</h4></div>

                    <div class="card-body">
                        <div class="row">
                            <div class="column">
                                <a class="button is-primary is-link is-fullwidth" href="">
                                    <span class="icon"><i class="fa fa-sign-in"></i></span>
                                    <span>Printable Version of my Picks</span>
                                </a>
                            </div>
                            <div class="column">
                                <a class="button is-primary is-link is-fullwidth" href="/rules">
                                    <span class="icon"><i class="fa fa-sign-in"></i></span>
                                    <span>Read the Rules</span>
                                </a>
                            </div>
                            <div class="column">
                                <a class="button is-primary is-link is-fullwidth" href="">
                                    <span class="icon"><i class="fa fa-sign-in"></i></span>
                                    <span>Wolrdcup Results</span>
                                </a>
                            </div>
                            <div class="column">
                                <a class="button is-primary is-link is-fullwidth" href="">
                                    <span class="icon"><i class="fa fa-sign-in"></i></span>
                                    <span>Ranking and Poolwide picks</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

     </div>
@endsection


    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.js"> </script>
<script src="{{URL::asset('js/app.js')}}"></script>

<script>
    $(document).ready( function () {
        $('#myTable').DataTable();
    } );
</script>


