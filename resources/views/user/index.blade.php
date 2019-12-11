@extends('user.home')
  
  @section('content')
  	@include ('user.includes.mainSlider')
  	@include ('user.includes.staticBanner')
  	@include ('user.includes.specialProducts')
  	@include ('user.includes.latestProducts')
  	@include ('user.includes.trendingProducts')
  	@include ('user.includes.featuredProducts')
  	@include ('user.includes.featuredCategories')
  	@include ('user.includes.productViewModal')
  @endsection
