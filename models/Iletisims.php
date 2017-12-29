<?php

namespace kouosl\iletisim\models;

use Yii;

/**
 * This is the model class for table "iletisims".
 *
 * @property string $mail
 * @property string $konu
 * @property string $mesaj
 * @property string $tarih
 * @property string $isim_soyisim
 * @property int $id
 */
class Iletisims extends \yii\db\ActiveRecord
{	
	/*public $mail;
	public $konu;
	public $mesaj;
	public $isim_soyisim;
	public $id;
	*/
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'iletisims';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['mail', 'konu', 'mesaj', 'tarih', 'isim_soyisim', 'id'], 'required'],
            [['mesaj'], 'string'],
            [['tarih'], 'safe'],
            [['id'], 'integer'],
            [['mail', 'isim_soyisim'], 'string', 'max' => 100, 'message'=>'Lütfen email adresinizi giriniz'],
            [['konu'], 'string', 'max' => 250],
            [['id'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'mail' => 'Mail',
            'konu' => 'Konu',
            'mesaj' => 'Mesaj',
            'tarih' => 'Tarih',
            'isim_soyisim' => 'Isim Soyisim',
            'id' => 'ID',
        ];
    }
	
	
	$mail=$_GET[‘mail’];
	$konu=$_GET[‘konu’];
	$isim_soyisim=$_GET[‘isim’];
	$mesaj=$_GET[‘mesaj’];
	$id=$_GET[‘id’];

    Yii::$app->db->createCommand()->insert('iletisims', ['mail'=>'$mail','konu'=>'$konu','isim_soyisim'=>'$isim_soyisim','id'=>'$id','mesaj'=>'$mesaj'])->execute();
	
	
	
	
	
	
}

