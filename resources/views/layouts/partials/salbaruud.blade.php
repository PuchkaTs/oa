<div class="row no-gutters salbaruud">
	<h1 class="salbaruud-title blue-title">Салбарууд</h1>
	<div class="col-md-8 salbaruud-left">
		@include('layouts.partials.salbarmap2')
	</div>
	<div class="col-md-4 salbaruud-right">
		<p v-html=currentAimag.body></p>
		<div class="oa-contact"><i class="fas fa-phone oa-icon"></i>		<p>@{{ currentAimag.phone }}</div>
		<div class="oa-contact"><i class="fas fa-envelope oa-icon"></i>		<p>@{{ currentAimag.mail }}</p></div>
		<div class="oa-contact"><i class="fas fa-map-marker-alt oa-icon"></i>		<p>@{{ currentAimag.address }}</p></div>
	</div>
</div>

