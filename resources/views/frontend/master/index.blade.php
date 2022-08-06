<!-- container -->
@extends('frontend.master.master')
@section('menu-name')
Home
@endsection
@section('content')

<!--Banner section -->
@include('frontend.master.landingSection.bannder')
<!-- container end -->

<!-- container -->
@include('frontend.master.landingSection.counter')
<!-- container end -->

<!-- Service container -->
@include('frontend.master.landingSection.service')
<!-- container end -->

<!-- Portfolio container -->
@include('frontend.master.landingSection.portfolio')
<!-- container end -->

<!--History container -->
@include('frontend.master.landingSection.history')
<!-- container end -->

<!--Recommendations container -->
@include('frontend.master.landingSection.recommendation')
<!-- container end -->

<!--Contact container -->
@include('frontend.master.landingSection.contact')
<!-- container end -->

@endsection
