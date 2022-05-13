<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class json_controller extends Controller
{
    public function checkJson(Request $reg)
    {
            if(!isset($reg['json']) || !$reg['json']){
                return json_encode(['status'=>'error']);
            }
            $count_podrazdelov = "";
            $data = json_decode($reg['json'], true);
            echo '<!DOCTYPE html><html><head><meta charset="utf-8"><title></title></head><body>';
            echo '<ul>';
            foreach($data['all']['razdel'] as $item){
                echo '<li>';
                echo $item['name'];
                echo '<ul>';
                foreach($item['photo'] as $photo)
                {
                    echo '<li>';
                    echo file_exists($photo['url_photo']) ? '<img src="'. $photo['url_photo'] .'" />' : 'Ошибка обработки фотографии. Файл не найден.';
                    echo '</li>';
                }
                echo '</ul>';
                echo '</li>';
            }
            echo '</ul>';
            echo '</body></html>';
    }
}
