@extends('back.template')

@section('content')
</div>
</div>
<div class ="col-lg-12">
	<div class="col-lg-4">
	    <div class="card">
	        <div class="card-body">
	            <div class="stat-widget-one">
	                <div class="stat-icon dib"><i class="ti-user text-primary border-primary"></i></div>
	                <div class="stat-content dib">
	                    <div class="stat-text">Nombre de visites aujourd'hui</div>
	                    <div class="stat-digit">{{$nbViewToday}}</div>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
	<div class="col-lg-4">
	    <div class="card">
	        <div class="card-body">
	            <div class="stat-widget-one">
	                <div class="stat-icon dib"><i class="ti-user text-primary border-primary"></i></div>
	                <div class="stat-content dib">
	                    <div class="stat-text">Nombre de visites les 7 derniers jours</div>
	                    <div class="stat-digit">{{$nbViewWeek}}</div>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
	<div class="col-lg-4">
	    <div class="card">
	        <div class="card-body">
	            <div class="stat-widget-one">
	                <div class="stat-icon dib"><i class="ti-user text-primary border-primary"></i></div>
	                <div class="stat-content dib">
	                    <div class="stat-text">Nombre de visites ce mois çi</div>
	                    <div class="stat-digit">{{$nbViewMonth}}</div>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
</div>
  <div id="perf_div"></div>

@endsection