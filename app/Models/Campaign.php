<?php

namespace App\Models;


class Campaign extends BaseModel
{
    protected $table = 'campaigns';
    protected $fillable = ['title_tr', 'title_en', 'description_tr', 'description_en', 'url_tr','url_en', 'main_image_tr','main_image_en', 'publish', 'position', 'created_by', 'updated_by'];
    public static $rules = array(
        'title_tr' => 'required|unique:campaigns',
        
    );
    public static $updaterules = array(
        'title_tr' => 'required',
    );

    public static $fields = array('title_tr', 'title_en','description_tr','description_en');
    public static $imageFields = array(
        ["name" => "main_image_tr", "width" => 5000, "height" => 5000, 'crop' => true, 'naming' => 'title_tr', 'diff' => ''], //1.6
        ["name" => "main_image_en", "width" => 5000, "height" => 5000, 'crop' => true, 'naming' => 'title_tr', 'diff' => ''] //1.6
      
    );
    public static $imageFieldNames = array(
        "main_image_tr",
        "main_image_en"
    );
    public static $docFields = array(
    );
    public static $booleanFields = array(
    );
    public static $dateFields = array(
    );
    public static $urlFields = array(
        ["name" => "url_tr", "map" => "title_tr"],
        ["name" => "url_en", "map" => "title_en"]
    );

    public static function boot(){
        parent::boot();
        static::creating(function($model)
        {
            
            if($model->title_en == null){
                $model->title_en = $model->title_tr;
            }

            if($model->description_en == null){
                $model->description_en = $model->description_tr;
            }
        });
    }
}