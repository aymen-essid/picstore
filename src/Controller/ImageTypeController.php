<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ImageType Controller
 *
 * @property \App\Model\Table\ImageTypeTable $ImageType
 */
class ImageTypeController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $imageType = $this->paginate($this->ImageType);

        $this->set(compact('imageType'));
        $this->set('_serialize', ['imageType']);
    }

    /**
     * View method
     *
     * @param string|null $id Image Type id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $imageType = $this->ImageType->get($id, [
            'contain' => []
        ]);

        $this->set('imageType', $imageType);
        $this->set('_serialize', ['imageType']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $imageType = $this->ImageType->newEntity();
        if ($this->request->is('post')) {
            $imageType = $this->ImageType->patchEntity($imageType, $this->request->data);
            if ($this->ImageType->save($imageType)) {
                $this->Flash->success(__('The image type has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The image type could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('imageType'));
        $this->set('_serialize', ['imageType']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Image Type id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $imageType = $this->ImageType->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $imageType = $this->ImageType->patchEntity($imageType, $this->request->data);
            if ($this->ImageType->save($imageType)) {
                $this->Flash->success(__('The image type has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The image type could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('imageType'));
        $this->set('_serialize', ['imageType']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Image Type id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $imageType = $this->ImageType->get($id);
        if ($this->ImageType->delete($imageType)) {
            $this->Flash->success(__('The image type has been deleted.'));
        } else {
            $this->Flash->error(__('The image type could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
