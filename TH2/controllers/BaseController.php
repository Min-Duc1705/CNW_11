<?php


class BaseController
{
    const VIEW_FOLDER_NAME = 'Views';
    const MODEL_FOLDER_NAME = 'Models';

    // Duong dan: folderName.filename
    //Laấy từ sau thư mục view
    protected function view($viewPath, array $data = [])
    {
        foreach ($data as $key => $value){
            $$key = $value;
        }
        
        
         require (self::VIEW_FOLDER_NAME . '/' . 
         str_replace('.','/',$viewPath) . '.php');

      
    }
   
    protected function loadModel($modelPath)
    {
        $modelPath = self::MODEL_FOLDER_NAME . '/' . 
         str_replace('.','/',$modelPath) . '.php';
         require ($modelPath); 
    }
}