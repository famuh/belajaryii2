<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pegawai".
 *
 * @property int $id_pegawai
 * @property string $nama
 * @property string $nik
 * @property string $alamat
 * @property int $id_jabatan
 */
class Pegawai extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pegawai';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'nik', 'alamat', 'id_jabatan'], 'required'],
            [['id_jabatan'], 'integer'],
            [['nama', 'nik', 'alamat'], 'string', 'max' => 250],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pegawai' => 'Id Pegawai',
            'nama' => 'Nama',
            'nik' => 'Nik',
            'alamat' => 'Alamat',
            'id_jabatan' => 'Id Jabatan',
        ];
    }

    public function getJabatanPasangan()
    {
        return $this->hasOne(Jabatan::className(), ['id_jabatan' => 'id_jabatan']);
    }
}
