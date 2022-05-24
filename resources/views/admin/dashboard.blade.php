@extends('layouts.admin')
@section('contenu')
<div class="container-fluid" >
<div class="d-sm-flex align-items-center mb-4">
  <h1 class="h3 mb-0 text-gray-800">Statistics</h1>
</div>

<!-- Content Row -->
<section class="content">
  <div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="row">



       <!-- ./col -->
       @if (auth()->user()->role =="admin")
           
       
       <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-warning">
          <div class="inner">
            <h3>{{count($user)}}</h3>

            <p>User Registrations</p>
          </div>
          <div class="icon">
            <i class="ion ion-person-add"></i>
          </div>
          <a href="#" class="small-box-footer"></a>
        </div>
      </div>
      @endif
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
          <div class="inner">
            <h3>{{count($rooms)}}</h3>

            <p>Rooms</p>
          </div>
          <div class="icon">
            <i class="fas fa-map-marked-alt"></i>
          </div>
          <a href="#" class="small-box-footer"> </a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
          <div class="inner">
            <h3>{{count($room_types)}}</h3>

            <p>Room Type</p>
          </div>
          <div class="icon">
            <i class='fas fa-atlas'></i>
          </div>
          <a href="#" class="small-box-footer"></a>
        </div>
      </div>
     
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-danger">
          <div class="inner">
            <h3>{{count($reservations)}}</h3>

            <p>Reservation</p>
          </div>
          <div class="icon">
            <i class="fas fa-ticket-alt"></i>
          </div>
          <a href="#" class="small-box-footer"></a>
        </div>
      </div>
      <!-- ./col -->
      
      <!-- ./col -->
    </div>
  </div>
</section>

<!-- Content Row -->
<div class="row">

  <div class="col-lg-12 mb-4">
   <!-- Illustrations -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Site user guide</h6>
      </div>
      <div class="card-body">
        <div class="text-center">
          <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="{{URL::asset('assets/images/undraw_posting_photo.svg')}}" alt="">
        </div>
        <ol class="guide-liste">
          <li>The menu on the left allows you to browse between all the features of the site.</li>
          <li>La section (Ajouter) vous permet de sélectionner les fichier pdf et xml et d'afficher les détails de vos résultats de téléchargement, pour que les résultats soient donc répartis selon l'état du fichier dans la barre d'état. Donc Vous devez cliquer sur « selectionner des fichiers » et Choisissez les fichiers (XML+pdf)</p>
          <li>L'interface des prélèvement vous permet d’afficher (le nom, prénom, la date, l’heure de prélèvement, le médecin et l’organisme) et de télécharger les résultats au format PDF du chaque patient.</li>
          <li>L'interface des médecins vous permet d’afficher la liste des médecins.</li>
          <li>L'interface des patients vous permet d’afficher la liste des patients.</li>
          <li>L'interface des sociétés vous permet d’afficher la liste des sociétés.</li>
          <li>L'interface des cliniques vous permet d’afficher la liste des cliniques.</li>
        </ol>
      </div>
    </div>

  </div>

</div>
</div>
{{-- @if(auth()->user()->role =="admin")
    <script>
    function sendMarkRequest(id = null) {
      $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        return $.ajax("{{ route('markNotification') }}", {
            method: 'POST',
            data: {
                 
                id,
            }
        });
    }
    $(function() {
        $('.mark-as-read').click(function() {
          var span_Text = document.getElementById("rev").innerText;
            let request = sendMarkRequest($(this).data('id'));
            request.done(() => {
                $(this).parents('div.alert').remove();
                text=span_Text-1;
               
                $("#rev").text(text);
            });
        });
        $('#mark-all').click(function() {
            let request = sendMarkRequest();
            request.done(() => {
                $('div.alert').remove();
                $('.soso').remove();
            })
        });
    });
    </script>
@endif --}}
@endsection