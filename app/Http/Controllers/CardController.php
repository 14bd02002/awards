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

        return view ('card' , compact('data'));

    }
    public function comment()
    {
    	$name = $_POST["name"];
	  	$page_id = $_POST["page_id"];
	  	$text_comment = $_POST["text_comment"];
	  	$name = htmlspecialchars($name);// Преобразуем спецсимволы в HTML-сущности
		$text_comment = htmlspecialchars($text_comment);// Преобразуем спецсимволы в HTML-сущности

		$all_comments = array('page_id' => $page_id, 'commentator' => $name, 'text_comment' => $text_comment);
		Comments::create($all_comments);

		$mysqli = new mysqli("localhost", "root", "", "db");// Подключается к базе данных
		$mysqli->query("INSERT INTO `comments` (`commentator`, `page_id`, `comment_text`) VALUES ('$name', '$page_id', '$text_comment')");// Добавляем комментарий в таблицу
		header("Location: ".$_SERVER["HTTP_REFERER"]);// Делаем реридект обратно
    }

}
