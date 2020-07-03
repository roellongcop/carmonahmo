<?php

namespace app\models;

use Yii;
use yii\web\UploadedFile;
/**
 * This is the model class for table "{{%about}}".
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property int $status
 */
class About extends \yii\db\ActiveRecord
{
    public $imageFile;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%about}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['description'], 'string'],
            [['status'], 'integer'],
            [['name'], 'string', 'max' => 32],
            [['imageFile'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'description' => 'Description',
            'status' => 'Status',
            'image_path' => 'Banner',
            'imageFile' => 'Banner'
        ];
    }
    
    public function getLegend()
    {
        return ($this->name == 'image_path') ? 'Banner': ucwords($this->name);
    }
    
    public function getDetail()
    {
        return ($this->name == 'image_path') ? '<img class="img-responsive" src="'. $this->description .'">' :ucwords($this->description);
    }
    
    
    public function upload()
    {
        if ($this->validate()) {
            $this->imageFile->saveAs(Yii::$app->basePath. '/resources/frontend/img/' . $this->imageFile->baseName . '.' . $this->imageFile->extension);
            
            $this->description = '/resources/frontend/img/' . $this->imageFile->baseName . '.' . $this->imageFile->extension;
            return true;
        } else {
            return false;
        }
        
    }

   
}
