@layout('layouts.backend')

@section('title')
{{__('dashboard.index')}}
@endsection

@section('right')
	<div class="content-block" role="main">
		<article class="page-header">
			<h1>Welcome, stranger!</h1>
			<p>Huraga is a Star Trek character played by William Dennis Hunt. Huraga was a male Klingon who lived in the 24th century. This great warrior who was known to be an expert storyteller and participated in the Klingon invasion of Cardassia in 2372. Name of the character was not mentioned in dialogues, but it is known from the script.</p>
		</article>
	</div>
	<div class="row">
				
		<!-- Data block -->
		<article class="span12 data-block">
			<div class="data-container">
				<header>
					<h2><span class="awe-star"></span> Huraga Responsive Admin Template</h2>
					<ul class="data-header-actions">
						<li>
							<a class="btn btn-alt btn-inverse" href="#">Export</a>
						</li>
					</ul>
				</header>
				<section>
					<div id="demo-1" class="flot" style="padding: 0px; position: relative;"><canvas class="flot-base" width="880" height="280"></canvas><canvas class="flot-overlay" width="880" height="280" style="position: absolute; left: 0px; top: 0px;"></canvas></div>
				</section>
			</div>
		</article>
		<!-- /Data block -->
		
	</div>
@endsection

@section('footer')	
		<!-- Scripts -->
		<script src="<?php echo URL::base();?>/js/bootstrap/bootstrap-tooltip.js"></script>
@endsection
