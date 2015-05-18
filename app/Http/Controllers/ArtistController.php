<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ArtistController extends Controller {

	/**
	* Load all the artists and send it to view on homepage
	*
	* @return Response
	*/
	public function getArtists()
	{

	}

	/**
	* Get the form request and update the DB with new artist
	*
	* @return Response
	*/
	public function postArist()
	{

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
		$artist = Artist::find($id);

		$artist->delete();

	}



}