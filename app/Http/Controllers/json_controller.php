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
            $depth = 1;
            if(isset($reg['depth']))
            {
                $depth = $reg['depth'];
            }
            $count_podrazdelov = 1;
            $data = json_decode($reg['json'], true);
            echo '<!DOCTYPE html><html><head><meta charset="utf-8"><title></title></head>';
            if(isset($reg['background']))
            {
                $background = $reg['background'];

                echo '<body style="background: url('.$background.'); background-color:RGB'.$background.';">';
            }
            else
            {
                echo '<body>';
            }

            echo '<ul>';
            foreach($data['all']['razdel'] as $item){
                echo '<li>';
                echo $item['name'];
                echo '<ul>';
                foreach($item['photo'] as $photo)
                {
                    if (mb_strtolower($reg['depth']) == "max") {
                        echo '<li>';
                        echo file_exists($photo['url_photo']) ? '<img src="'. $photo['url_photo'] .'" />' : 'Ошибка обработки фотографии. Файл не найден.';
                        echo '</li>';
                    }
                    elseif ($depth >= 2) {
                        echo '<li>';
                        if ($depth != $count_podrazdelov) {
                            echo file_exists($photo['url_photo']) ? '<img src="'. $photo['url_photo'] .'" />' : 'Ошибка обработки фотографии. Файл не найден.';
                        }
                        else
                        {

                        }
                        echo '</li>';
                    }
                    elseif ($depth == 1) {
                        echo '<li>';
                        echo file_exists($photo['url_photo']) ? '<img src="'. $photo['url_photo'] .'" />' : 'Ошибка обработки фотографии. Файл не найден.';
                        echo '</li>';
                        break;
                    }
                    $count_podrazdelov++;
                }
                echo '</ul>';
                echo '</li>';
            }
            echo '</ul>';
            echo '</body></html>';
    }
}
