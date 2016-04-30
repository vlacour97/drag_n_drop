<?php
/**
 * Created by PhpStorm.
 * User: valentinlacour
 * Date: 19/02/16
 * Time: 14:25
 */


$array = json_decode($_GET['datas']);

foreach($array as $content)
{
    if($content[0] == 2){
        formTest($content[1][0]->value,$content[1][1]->value);
    }
}

function formTest($title,$text){

    echo '<form><div class="row owner">
                    <div class="col-md-2 col-md-offset-5 col-sm-4 col-sm-offset-4 col-xs-6 col-xs-offset-3 text-center">
                        <div class="avatar">
                            <img src="chet_faker_2.jpg" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                        </div>
                        <div class="name">
                            <h4>'.$title.'<br><small>'.$text.'</small></h4>
                        </div>
                    </div>
                </div></form>';

}