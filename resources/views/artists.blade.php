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

      <div id="editArtist">
      </div>

     <script id="allArtistsTemplate" type="text/template">
        <td> <%= artist_name %> </td>
        <td><a href="#artists/<%= id %>/edit" class="edit">Edit</a></td>
        <td><a href="#artists/<%= id %>" class="delete">Delete</a></td>
      </script>

      <script id="editArtistTemplate" type="text/template">
        <form id="editartist-div" class="form" accept-charset="UTF-8">
         <input type="hidden" name="_token" value="{{ csrf_token() }}">
           <div class="form-group">
              <input type="text" id="editartist-name" name="editartist_name" class="form-control" maxlength="30" value="<%= artist_name %>" placeholder="Rename Artist" required>
           </div>
           <div class="form-group">
              <button type="submit" class="btn btn-primary btn-block">Rename Artist</button>
              <button type="button" class="btn btn-primary btn-block cancel">Close</button>
           </div>
        </form>
       </script>

  </div>

@stop
