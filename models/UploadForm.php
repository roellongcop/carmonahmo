<?php
namespace app\models;

use yii\base\Model;
use yii\web\UploadedFile;
use Yii;
    
class UploadForm extends Model
{
    /**
     * @var UploadedFile
     */
    public $imageFile;

    public function rules()
    {
        return [
            [['imageFile'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg'],
        ];
    }
    
    
    public function upload($id)
    {
       
        if ($this->validate()) {
            $path = Yii::$app->basePath.'/resources/backend/img/' . $id . '.' . $this->imageFile->extension;
            $this->imageFile->saveAs($path);
            return Yii::$app->urlManager->baseUrl.'/resources/backend/img/' . $id . '.' . $this->imageFile->extension;
        } else {
            return false;
        }
    }
    
     public function beforeValidate()
    {
        return parent::beforeValidate();
    }
}

?>