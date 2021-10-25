<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ config('app.name', 'Laravel') }}</title>
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

  <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
  <body>

    <div id="app">
      <app></app>
      <router-link v-bind:to="{name: 'user.detail.create'}">
        <button class="btn btn-success">Home</button>
      </router-link>
      <!-- @auth
      <div>
          <img src="" width="48" height="48">
          {{ Auth::user()->unique_id }}
      </div>
      @endif -->
      <router-view
        :user_name='{{ json_encode(Auth::user()->name) }}'
        :unique_id='{{ json_encode(Auth::user()->unique_id) }}'
        :avatar='{{ json_encode(Auth::user()->avatar) }}'
      ></router-view>
    </div>
    <script>
    </script>
    <script src=" {{ mix('js/app.js') }} "></script>
  </body>
</html>