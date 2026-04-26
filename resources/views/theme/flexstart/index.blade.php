@extends('theme.flexstart.layouts.app')

@section('content')
<!-- ======= Hero Section ======= -->
@include('theme.flexstart.partial.slide')
<!-- End Hero -->

<!-- About Section -->
{{-- @include('theme.flexstart.partial.about') --}}
<!-- /About Section -->

<!-- Akses Section -->
@include('theme.flexstart.partial.aksescepat')
<!-- /Akses Section -->

<!-- Statistik Section -->
<!-- @include('theme.flexstart.partial.statistik')     -->
<!-- /Statistik Section -->

<!-- Portfolio Section -->
@include('theme.flexstart.partial.banner2')
<!-- /Portfolio Section -->

<!-- Recent Posts Section -->
@include('theme.flexstart.partial.posts')
<!-- /Recent Posts Section -->

<!-- agenda Section -->
@include('theme.flexstart.partial.agenda2')
<!-- /agenda Section -->

<!-- Team Section -->
@include('theme.flexstart.partial.team')
<!-- /Team Section -->

<!-- Faq Section -->
@include('theme.flexstart.partial.faq')
<!-- /Faq Section -->


<!-- Stats Section -->
{{-- @include('theme.flexstart.partial.visitor')  --}}
<!-- /Stats Section -->

<!-- Contact Section -->
@include('theme.flexstart.partial.contact')
<!-- /Contact Section -->

<!-- Related link Section -->
@include('theme.flexstart.partial.relatedlink')
<!-- /Related link Section -->

<!-- agenda Section -->
{{-- @include('theme.flexstart.partial.agenda')  --}}
<!-- /agenda Section -->

@endsection

@section('description', $data['profil']['seo_desc'])
@section('keyword', $data['profil']['seo_desc'])
@section('title', $data['profil']['name'])
@section('name', $data['profil']['name'])
@section('image', env('URL_STORAGE').$data['profil']['logo'] )