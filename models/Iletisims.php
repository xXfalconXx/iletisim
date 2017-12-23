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
            [['mail', 'isim_soyisim'], 'string', 'max' => 100],
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
}
