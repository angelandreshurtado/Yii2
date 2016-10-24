<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "blognoticia".
 *
 * @property integer $idNoticia
 * @property string $tituloNoticia
 * @property string $contenidoNoticia
 * @property integer $estado
 */
class Blognoticia extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'blognoticia';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tituloNoticia', 'contenidoNoticia', 'estado'], 'required'],
            [['contenidoNoticia'], 'string'],
            [['estado'], 'integer'],
            [['tituloNoticia'], 'string', 'max' => 100],
        ];
    }

	public function tNoticia()
    {
		return 'tituloNoticia';
	}
	
    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idNoticia' => 'Id Noticia',
            'tituloNoticia' => 'Titulo Noticia',
            'contenidoNoticia' => 'Contenido Noticia',
            'estado' => 'Estado',
        ];
    }
}
