@extends('layout')

@section('title')
<title> Cancun Travel Experience </title>
<meta name="description" content="Cancun Travel Experience">
<meta name="keywords" content="Cancun Travel Experience">
<meta name="robots" content="index, follow">
<script src="https://cdn.tailwindcss.com"></script>
<style>
  #header, #footer{
    display: none !important;
  }
</style>
@endsection

@section('content')
<div class="flex items-center justify-center h-screen">
  <div>
    <div class="flex flex-col items-center space-y-2">
      <svg xmlns="http://www.w3.org/2000/svg" class="text-green-600 w-28 h-28" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
      </svg>
      <h1 class="text-4xl font-bold">Muchas gracias por contactarnos</h1>
      <p class="pb-6">En breve uno de nuestros agentes de reservas se contactara con usted.</p>
      <a href="/" class="inline-flex items-center px-4 py-2 text-white  border bg-orange-600 rounded rounded-full hover:bg-orange-600 focus:outline-none focus:ring">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M7 16l-4-4m0 0l4-4m-4 4h18" />
        </svg>
        <span class="text-sm font-medium">
          Volver a inicio
        </span>
      </a>
    </div>
  </div>
</div>
@endsection