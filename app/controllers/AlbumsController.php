<?php
use Illuminate\Support\MessageBag;
class AlbumsController extends BaseController{
    public function createAction() {

        $errors = new MessageBag();

        if ($old = Input::old("errors"))
        {
            $errors = $old;
        }

        $data = [
            "errors" => $errors
        ];

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
                DB::table('albums')->insert(
                    array('name' => Input::get("name"),
                        'description' => Input::get("description"),
                        'allDescription' => Input::get("allDescription"),
                        'location' => Input::get("location")
                    )
                );

            }

            $data["errors"] = new MessageBag([
                "password" => [
                    ""
                ]
            ]);

            $data["username"] = Input::get("username");

            return Redirect::route("user/createAlbum")
                ->withInput($data);
        }

        return View::make('/create', $data);


    }
    public function index(){
        $albums = Albums::all();
        return View::make('albums/albums', compact('albums'));
    }
}



