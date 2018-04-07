@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Pollas</div>
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
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Seleccionar') }}
                                    </button>
                                </div>
                            </div></td>
                        </tr>
                        <tr>
                            <td>Row 2 Data 1</td>
                            <td>Row 2 Data 2</td>
                            <td><div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Seleccionar') }}
                                    </button>
                                </div>
                            </div></td>
                        </tr>
                    </tbody>
                </table>
               
            </div>
        </div>
    </div>
</div>
@endsection

@section('addjs')
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.js"> </script>

<script>
    $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
@endsection

