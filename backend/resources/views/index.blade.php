<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ config('app.name', 'Laravel') }}</title>
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
  <link href="{{ asset('css/bootstrap-social.css') }}" rel="stylesheet">
  <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
  <body>

    <div id="app">
      <router-link v-bind:to="{name: 'home'}">
        <button class="btn btn-success">Home</button>
      </router-link>
      <router-link v-bind:to="{name: 'user.detail.create'}">
        <button class="btn btn-success">Create</button>
      </router-link>
      <router-link v-bind:to="{name: 'search'}">
        <button class="btn btn-success">Search</button>
      </router-link>

      <!-- @auth
      <div>
          <img src="" width="48" height="48">
          {{ Auth::user()->unique_id }}
      </div>
      @endif -->
      <router-view
        :isAuth="{{ json_encode(Auth::user() ? \App\Models\SkillDetail::where(Auth::user()->id,'user_id') : null) }}"
        :auth_id='{{ json_encode(Auth::user()->id) }}'
        :user_name='{{ json_encode(Auth::user()->name) }}'
        :unique_id='{{ json_encode(Auth::user()->unique_id) }}'
        :avatar='{{ json_encode(Auth::user()->avatar) }}'
      ></router-view>
    </div>
    <script>
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src=" {{ mix('js/app.js') }} "></script>
  </body>
</html>