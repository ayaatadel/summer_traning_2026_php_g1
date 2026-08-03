<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>
     <x-bootstrap-css />

    </head>
  <body>
    <x-navbar></x-navbar>
 <h1 style="color:red ; text-align:center;">    Day 1 laravel </h1>

   <x-bootstrap-Js />
  </body>
</html>
