@extends('preprocess.chang.layouts.default')

@section('colWidth', 'col-xs-12')
@section('changContent')

@include('files.view.text.layouts.chang_content')

@stop

@section('end_javascript')
	@yield('extra_js')
@stop