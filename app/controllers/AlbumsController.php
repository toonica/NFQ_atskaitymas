<?php
use Illuminate\Support\MessageBag;
class AlbumsController extends BaseController{
    public function createAction() {

        if (Input::server("REQUEST_METHOD") == "POST")
        {
            $validator = Validator::make(Input::all(), [
                "name" => "required",
                "description" => "required",
                "allDescription" => "required",
                "location" => "required"
            ]);

            if ($validator->passes())
            {
                $album = new Albums;
                $album->name = Input::get('name');
                $album->description = Input::get('description');
                $album->allDescription = Input::get('allDescription');
                $album->location = Input::get('location');
                $album->save();
                return Redirect::route("albums/create")->with("message", "Albumas sėkmingai išsaugotas");
            }

            return Redirect::route("albums/create")
                ->withInput()->withErrors($validator);
        }

        return View::make('albums/create');


    }
    public function index(){
        $albums = Albums::all();
        return View::make('albums/albums', compact('albums'));
    }
}



