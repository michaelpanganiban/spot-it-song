<?php

namespace App\Http\Controllers;
use DB;
use App\Song;
use Auth;
class SongsController extends Controller
{
    public function index(){
    	$songs = DB::table('songs')
    				->join('users', 'users.id', '=', 'songs.created_by')
    				->select('songs.*', 'users.name')
    				->get();
    	return view('songs', compact('songs'));
    }

    public function addSong(){
    	DB::beginTransaction();
            try {
            	request()->validate([
		          'title' => 'required',
		          'author' => 'required',
		          'lyrics' => 'required'
		        ]); //validate inputs
                $data = array(
                				'title' => htmlspecialchars(trim(request()->title)),
                				'author' => htmlspecialchars(trim(request()->author)),
                				'lyrics' => htmlspecialchars(trim(request()->lyrics)),
                				'created_by' => Auth::id()
                			); //input array
                Song::create($data);
                DB::commit();
                return response()->json(["success"=> true, "message" => "Song has been successfully added!"], 200);
            } catch (\Exception $e){
                DB::rollBack();
                return response()->json(["success"=> false, "message" => $e->getMessage()], 400);
            }
    }

    public function editSong(){
    	DB::beginTransaction();
            try {
            	request()->validate([
		          'title' => 'required',
		          'author' => 'required',
		          'lyrics' => 'required',
		          'song_id' => 'required'
		        ]); //validate inputs
                $data = array(
                				'title' => htmlspecialchars(trim(request()->title)),
                				'author' => htmlspecialchars(trim(request()->author)),
                				'lyrics' => htmlspecialchars(trim(request()->lyrics)),
                				'modified_by' => Auth::id()
                			); //input array
                Song::where('song_id', htmlspecialchars(trim(base64_decode(request()->song_id))))
                ->update($data);
                DB::commit();
                return response()->json(["success"=> true, "message" => "Song has been successfully updated!"], 200);
            } catch (\Exception $e){
                DB::rollBack();
                return response()->json(["success"=> false, "message" => $e->getMessage()], 400);
            }
    }

    public function deleteSong(){
    	DB::beginTransaction();
            try {
            	request()->validate([
		          'song_id' => 'required'
		        ]); //validate inputs
          
                Song::where('song_id', htmlspecialchars(trim(base64_decode(request()->song_id))))
                ->delete();
                DB::commit();
                return response()->json(["success"=> true, "message" => "Song has been successfully deleted!"], 200);
            } catch (\Exception $e){
                DB::rollBack();
                return response()->json(["success"=> false, "message" => $e->getMessage()], 400);
            }
    }
}
