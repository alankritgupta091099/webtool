<?php
/**
 * Created by PhpStorm.
 * User: Ely
 * Date: 18/04/2019
 * Time: 15:25
 */

class MIcon
{
    public function carbon($icon, $class = "icon-16") {
        $url = Manager::getThemeURL();
        return <<< HERE
  <svg class="{$class}" aria-hidden="false">
    <use xlink:href="{$url}components/widget/images/carbon-icons.svg#icon--{$icon}"></use>
  </svg>
HERE;

    }

}