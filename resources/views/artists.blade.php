@extends('default')

@section('content')
  <div id="main-content">
    <div class="headline">
     <h1>DISCOVER YOUR FAVORITE ARTISTS</h1>
    <div>

      <table id="allArtists">
        <thead>
          <tr>
            <td>Artist Name</td>
            <td>config</td>
          </tr>
        </thead>
      </table>

      <script id="allArtistsTemplate" type="text/template">
        <td> <%= artist_name %> </td>
        <td><a href="#artists/<%= id %>" class="delete">Delete</a></td>
      </script>
  </div>

@stop
