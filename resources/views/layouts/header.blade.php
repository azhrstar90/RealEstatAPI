<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>RealEstatAPI</title> 
  <!--our CSS -->
  <link rel="stylesheet" href="{{asset('build/assets/app.css')}}">
  <link rel="stylesheet" href="{{asset('css/main.css')}}"> 
  <link href="https://fonts.googleapis.com/css2?family=Changa:wght@300;500;600&display=swap" rel="stylesheet">
      
  <!--our BODY -->
  <body class="">
    <nav class="navbar bg-dark bg-body-tertiary" data-bs-theme="dark">
        <div class="container">
        <a class="navbar-brand" href="{{  url('/') }}">
            <img src="{{asset('img/Bootstrap_logo.png')}}" alt="Bootstrap" width="30" height="24">
        </a>
        <h2 style="color:#fbc531">Real Estat API</h2>
        </div>
    </nav>
  
  
