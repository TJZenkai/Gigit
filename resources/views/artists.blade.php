@extends('default')

@section('content')
  <div id="main-content">
    <div class="headline">
     <h1>DISCOVER YOUR FAVORITE ARTISTS</h1>
    <div>
<!--
      <table id="allArtists">
        <thead>
          <tr>
            <td>Artist Name</td>
            <td>config</td>
          </tr>
        </thead>
      </table> -->
      <ul id="allArtists">
        <li id="newartist">
        </li>
      <ul>

      <!--
     <script id="allArtistsTemplate" type="text/template">
        <td> <%= artist_name %> </td>
        <td><a href="#artists/<%= id %>/edit" class="edit">Edit</a></td>
        <td><a href="#artists/<%= id %>" class="delete">Delete</a></td>
      </script>-->
      <script id="allArtistsTemplate" type="text/template">
         <li> <%= artist_name %>
           <span><a href="#artists/<%= id %>/edit" class="edit"><i class="teal fa fa-pencil"></i></a></span>
           <span><a href="#artists/<%= id %>" class="delete"><i class="red fa fa-times"></i></a></span>
         </li>
       </script>

      <script id="editArtistTemplate" type="text/template">
        <form id="editartist-div" class="form" accept-charset="UTF-8">
         <input type="hidden" name="_token" value="{{ csrf_token() }}">
           <div class="form-group">
              <input type="text" id="editartist-name" name="editartist_name" class="fl form-control nav-search" maxlength="30" value="<%= artist_name %>" placeholder="Rename Artist" required>
           </div>
           <div class="form-group">
              <button type="submit" class="btn btn-primary fl nav-button-1"><i class="fa fa-check"></i></button>
              <button type="button" class="btn btn-primary cancel fl nav-button-2"><i class="fa fa-sign-out"></i></button>
           </div>
        </form>
       </script>

  </div>

@stop
