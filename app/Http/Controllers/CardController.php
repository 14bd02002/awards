<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Award;
use App\Comments;

class CardController extends Controller
{
    public function index($id)
    {
        $data = Award::where('id', '=', $id)->first();
        $comments = Comments::all();

        return view ('card' , compact('data' , 'comments'));

    }
    public function comment($id)
    {
    	$name = $_POST["name"];
	  	$page_id = $_POST["page_id"];
	  	$comment_text = $_POST["comment_text"];
	  	$name = htmlspecialchars($name);// Преобразуем спецсимволы в HTML-сущности
		$comment_text = htmlspecialchars($comment_text);// Преобразуем спецсимволы в HTML-сущности

		$all_comments = array('page_id' => $page_id, 'commentator' => $name, 'comment_text' => $comment_text);
		Comments::create($all_comments);

		return redirect()->to('/awards/'.$id);
    }

}
