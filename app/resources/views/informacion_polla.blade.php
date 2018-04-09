@extends('partials.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header">Informacion Polla </div>
                
               
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

