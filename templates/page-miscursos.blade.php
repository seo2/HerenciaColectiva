@php
/*

Template name: Mis cursos

*/
@endphp

@extends('layouts.app')

@section('content') 

<section class="w-full bg-azul mt-8 pt-36 pb-8 lg:pb-8 lg:bg-contain bg-left-top lg:bg-bottom bg-no-repeat " style="background-image: url('<?php bloginfo('template_url') ?>/dist/img/bg_azul_franja.png');">
    <div class=" w-5/6  lg:w-1/2 mx-auto lg:text-center relative">
        <h1 class="text-beige font-festivo6 text-5xl uppercase">Mis cursos</h1>
    </div>
</section>

<section class="mt-12">
    <div class="flex container max-w-screen-xl mx-auto justify-between flex-row lg:px-32">

        <a href="#" class="relative">
            <i class="fas fa-play-circle absolute text-blanco text-6xl left-auto top-auto"></i>
            <img src="https://source.unsplash.com/650x340/?plants" alt="">
        </a>


    </div>
</section>

@endsection

@section('footer')


@endsection  