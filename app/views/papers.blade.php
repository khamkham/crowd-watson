@extends('layouts.default')
@section('content')
			<!-- START /index --> 			
			<div class="col-xs-8 col-md-offset-2">
				<div class='maincolumn CW_box_style'>
@include('layouts.flashdata')	
	<div class="page-header text-center" style="margin:10px;">
						<h2><i class="fa fa-angle-left" style="float:left; color:#999; display:inline-block; cursor:pointer" onclick="javascript:window.history.back()"></i>Papers <small>by the CrowdWatson team</small></h2>
					</div>
					<div class="row">
						<div class="col-xs-10 col-xs-offset-1"  style="padding-bottom:40px; padding-top:20px">
						<ul class="paperlist">
							<li>Anca Dumitrache, Lora Aroyo, Chris Welty, Robert-Jan Sips, Anthony Levas: <a href="http://ceur-ws.org/Vol-1030/paper-02.pdf"><strong>Dr. Detective: combining gamification techniques and crowdsourcing to create a gold standard in medical text</strong></a>. <a href="http://crowdsem.wordpress.com/">CrowdSem 2013</a>: 16 &#8211; 31.</li>
							<li>Oana Inel, Lora Aroyo, Chris Welty, Robert-Jan Sips: <strong><a href="http://crowd-watson.nl/tech-reports/20130702.pdf">Exploiting crowdsourcing disagreement with various domain-independent quality measures</a></strong>. <a href="http://derive2013.wordpress.com/">DeRiVe 2013</a>.</li>
							<li>Guillermo Soberon, Lora Aroyo, Chris Welty, Oana Inel, Manfred Overmeen, Hui Lin: <strong><a href="http://ceur-ws.org/Vol-1030/paper-07.pdf">Content and Behaviour Based Metrics for Crowd Truth</a></strong>. <a href="http://crowdsem.wordpress.com/">CrowdSem 2013</a>: 45 &#8211; 58.</li>
							<li>Lora Aroyo, Chris Welty: <a href="http://www.researchgate.net/publication/236463327_Crowd_Truth_Harnessing_disagreement_in_crowdsourcing_a_relation_extraction_gold_standard/file/60b7d517f69c26c5d7.pdf"><strong>Crowd Truth: Harnessing disagreement in crowdsourcing a relation extraction gold standard</strong></a>. <a href="http://www.websci13.org/">ACM WebSci 2013</a>.</li>
							<li>Lora Aroyo, Chris Welty: <a href="http://ceur-ws.org/Vol-902/paper_4.pdf"><strong>Harnessing disagreement for event extraction</strong></a>. <a href="http://semanticweb.cs.vu.nl/derive2012/">DeRiVe 2012:</a> 31 &#8211; 40.</li>
						</ul>
						<p>
						<a href="http://www-03.ibm.com/systems/nl/inspire/">IBM Inspire</a> also published an article about our work (available in Dutch <a href="https://drive.google.com/file/d/0BzrxNZeLZ4YeUlJaVU5xNF83N2M/edit?usp=sharing">here</a>).</p>
					</div>
				</div>
				</div>
			</div>
			<style type="text/css">
			.paperlist li {
				padding-bottom: 10px;
			}
			</style>
@stop