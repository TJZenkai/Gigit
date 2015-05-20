<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Request;

class ArtistController extends Controller {

	/**
	* Load all the artists and send it to view on homepage
	*
	* @return Artist blade template with all artist rows as json.
	*/
	public function getArtists()
	{
		$artist = \DB::table('artists')->get();

		return view('artists')->with('artist', $artist);

	}

	/**
	* Get the form request and update the DB with new artist
	*
	* @return Response
	*/
	public function postArtist()
	{
		$input = Request::all();

		$artist_name = $input['name'];

		$artist = new \App\Artist;
		$artist->artist_name = $artist_name;
		$artist->save();

		return view('artists');
	}

	/**
	* Update the artist indicated with the name provided
	*
	* @return Response
	*/
	public function updateArist()
	{

	}

	/**
	* Delete the artist from the database based on his id.
	*
	* @return Response
	*/
	public function delArist($id)
	{
		//find the artist from the table
	 	$artist = \App\Artist::find($id);

	 	$artist->delete();

	}



}
