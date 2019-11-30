@extends('layouts.app')


    @section('content')

    @include('components.searchbar')
    @include('components.carousel')
    @include('components.jumborton')
    @include('components.testomonials')
    @include('components.words')<br/>
    @include('components.partners')

    @endsection