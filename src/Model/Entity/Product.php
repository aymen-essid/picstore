<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Product Entity
 *
 * @property int $id
 * @property int $id_combination
 * @property int $id_type
 * @property int $nbr_img_min
 * @property int $nbr_img_max
 * @property int $nbr_img_row
 * @property string $frame_color
 * @property int $id_img_type
 * @property \Cake\I18n\Time $created_at
 */
class Product extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false,
        'id_combination' => false
    ];
}
