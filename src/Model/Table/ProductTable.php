<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Product Model
 *
 * @method \App\Model\Entity\Product get($primaryKey, $options = [])
 * @method \App\Model\Entity\Product newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Product[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Product|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Product patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Product[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Product findOrCreate($search, callable $callback = null)
 */
class ProductTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('product');
        $this->displayField('id');
        $this->primaryKey(['id', 'id_combination']);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->integer('id_combination')
            ->allowEmpty('id_combination', 'create');

        $validator
            ->integer('id_type')
            ->requirePresence('id_type', 'create')
            ->notEmpty('id_type');

        $validator
            ->integer('nbr_img_min')
            ->allowEmpty('nbr_img_min');

        $validator
            ->integer('nbr_img_max')
            ->allowEmpty('nbr_img_max');

        $validator
            ->integer('nbr_img_row')
            ->allowEmpty('nbr_img_row');

        $validator
            ->allowEmpty('frame_color');

        $validator
            ->integer('id_img_type')
            ->requirePresence('id_img_type', 'create')
            ->notEmpty('id_img_type');

        $validator
            ->dateTime('created_at')
            ->allowEmpty('created_at');

        return $validator;
    }
}
