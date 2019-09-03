<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Fields Controller
 *
 * @property \App\Model\Table\FieldsTable $Fields
 *
 * @method \App\Model\Entity\Field[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FieldsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Modules']
        ];
        $fields = $this->paginate($this->Fields);

        $this->set(compact('fields'));
    }

    /**
     * View method
     *
     * @param string|null $id Field id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $field = $this->Fields->get($id, [
            'contain' => ['Modules', 'Profiles']
        ]);

        $this->set('field', $field);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $field = $this->Fields->newEntity();
        if ($this->request->is('post')) {
            $field = $this->Fields->patchEntity($field, $this->request->getData());
            if ($this->Fields->save($field)) {
                $this->Flash->success(__('The field has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The field could not be saved. Please, try again.'));
        }
        $modules = $this->Fields->Modules->find('list', ['limit' => 200]);
        $profiles = $this->Fields->Profiles->find('list', ['limit' => 200]);
        $this->set(compact('field', 'modules', 'profiles'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Field id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $field = $this->Fields->get($id, [
            'contain' => ['Profiles']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $field = $this->Fields->patchEntity($field, $this->request->getData());
            if ($this->Fields->save($field)) {
                $this->Flash->success(__('The field has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The field could not be saved. Please, try again.'));
        }
        $modules = $this->Fields->Modules->find('list', ['limit' => 200]);
        $profiles = $this->Fields->Profiles->find('list', ['limit' => 200]);
        $this->set(compact('field', 'modules', 'profiles'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Field id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $field = $this->Fields->get($id);
        if ($this->Fields->delete($field)) {
            $this->Flash->success(__('The field has been deleted.'));
        } else {
            $this->Flash->error(__('The field could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
