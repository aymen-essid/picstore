<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ImageType Model
 *
 * @method \App\Model\Entity\ImageType get($primaryKey, $options = [])
 * @method \App\Model\Entity\ImageType newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ImageType[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ImageType|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ImageType patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ImageType[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ImageType findOrCreate($search, callable $callback = null)
 */
class ImageTypeTable extends Table
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

        $this->table('image_type');
        $this->displayField('name');
        $this->primaryKey('id');
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
            ->integer('width')
            ->requirePresence('width', 'create')
            ->notEmpty('width');

        $validator
            ->integer('height')
            ->requirePresence('height', 'create')
            ->notEmpty('height');

        $validator
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        return $validator;
    }
}
