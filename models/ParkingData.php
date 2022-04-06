<?php

namespace app\models;

use Yii;
use yii\helpers\Url;
use yii\web\UploadedFile;


/**
 * This is the model class for table "parking_data".
 *
 * @property int $id
 * @property string|null $city
 * @property string|null $distnict
 * @property string|null $address
 * @property string|null $balance
 * @property string|null $owner
 * @property string|null $phone
 * @property string|null $image
 * @property string|null $status
 * @property string|null $created_date
 * @property yii\web\UploadedFile $eventImage
 */
class ParkingData extends \yii\db\ActiveRecord
{

    public $eventImage;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'parking_data';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status'], 'string'],
            [['created_date'], 'safe'],
            [['city', 'distnict', 'address', 'balance', 'owner', 'phone', 'image'], 'string', 'max' => 255],
            [['eventImage'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg, jpeg, bmp'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'city' => 'City',
            'distnict' => 'Distnict',
            'address' => 'Address',
            'balance' => 'Balance',
            'owner' => 'Owner',
            'phone' => 'Phone',
            'image' => 'Image',
            'status' => 'Status',
            'created_date' => 'Created Date',
        ];
    }

    public function uploadPath()
    {
        $path = \Yii::getAlias('@webroot')."/uploads/pic";
        //return Url::to('@web/uploads/pic');
        return $path;
    }

    public function upload()
    {
        if(!is_null($this->eventImage)) {
            $path = null;
            try {
                $name = $this->id . '_' . uniqid(). "." . $this->eventImage->extension;
                $path = realpath($this->uploadPath()) ;
                $this->eventImage->saveAs($path."\\".$name,false);
                $this->image = $name;
                return $this->save();
            }catch (\Throwable $e){
                $this->addError('image',$e->getMessage()."\n".$path."\\".$name);
                return false;
            }
        }
        return true;
    }
}