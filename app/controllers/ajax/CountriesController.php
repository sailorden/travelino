<?php

namespace Ajax;

class CountriesController extends AjaxController
{    
    protected $limit = 50;
    
    public function index()
    {
        $page = \Input::get('page', 1);
        
        $records = \Country::take(50)->get();
        
        if ($records) {
            $data = array('countries' => array());
            foreach ($records AS $record) {
                $data['countries'][] = array(
                    'id'   => $record->id,
                    'cid'  => $record->id,
                    'name_en' => $record->lang('en_US')->name,
                    'name_ru' => $record->lang('ru_RU')->name,
                    'continent_id' => $record->continent()->id,
                    'continent_name_en' => $record->continent()->lang('en_US')->name,
                    'continent_name_ru' => $record->continent()->lang('ru_RU')->name,
                );
            }
        } else {
            $data = array();
        }
        
        return \Response::json($data);
    }
    
    public function show($id)
    {        
        $record = \Country::find($id);
        
        if ($record) {
            $data = array(
                'country' => array(
                    'id'   => $record->id,
                    'cid'  => $record->id,
                    'name_en' => $record->lang('en_US')->name,
                    'name_ru' => $record->lang('ru_RU')->name,
                    'continent_id' => $record->continent()->id,
                    'continent_name_en' => $record->continent()->lang('en_US')->name,
                    'continent_name_ru' => $record->continent()->lang('ru_RU')->name,
                )
            );
        } else {
            $data = array();
        }
        
        return \Response::json($data);
    }
}