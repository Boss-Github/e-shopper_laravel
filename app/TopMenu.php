<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
use Menu;

class TopMenu extends Model
{
    //

    public static function menu (){

        $arrMenu = self::all();
        $mBuilder = Menu::make('MyNav', function($m) use ($arrMenu){
            foreach($arrMenu as $item){

                if (App::getLocale()=="ru"){
                    if($item->parent_id == 0){
                        $m->add($item->title_ru)->id($item->id);
                    }
                    //иначе формируем дочерний пункт меню
                    else {
                        //ищем для текущего дочернего пункта меню в объекте меню ($m)
                        //id родительского пункта (из БД)
                        if($m->find($item->parent_id)){
                            $m->find($item->parent_id)->add($item->title_ru)->id($item->id);
                        }
                    }
                }

                else if(App::getLocale()=="uz"){
                    if($item->parent_id == 0){
                        $m->add($item->title_uz)->id($item->id);
                    }
                    //иначе формируем дочерний пункт меню
                    else {
                        //ищем для текущего дочернего пункта меню в объекте меню ($m)
                        //id родительского пункта (из БД)
                        if($m->find($item->parent_id)){
                            $m->find($item->parent_id)->add($item->title_uz)->id($item->id);
                        }
                    }
                }

                else{
                    if($item->parent_id == 0){
                        $m->add($item->title)->id($item->id);
                    }
                    //иначе формируем дочерний пункт меню
                    else {
                        //ищем для текущего дочернего пункта меню в объекте меню ($m)
                        //id родительского пункта (из БД)
                        if($m->find($item->parent_id)){
                            $m->find($item->parent_id)->add($item->title)->id($item->id);
                        }
                    }
                }


                /*
                 * Для родительского пункта меню формируем элемент меню в корне
                 * и с помощью метода id присваиваем каждому пункту идентификатор
                 */

            }
        });
        return $mBuilder;
    }


}
