<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Loginstories Controller
 *
 * @property \App\Model\Table\LoginstoriesTable $Loginstories
 *
 * @method \App\Model\Entity\Loginstory[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LoginstoriesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users']
        ];
        $loginstories = $this->paginate($this->Loginstories);

        $this->set(compact('loginstories'));
    }

    /**
     * View method
     *
     * @param string|null $id Loginstory id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $loginstory = $this->Loginstories->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('loginstory', $loginstory);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $loginstory = $this->Loginstories->newEntity();
        if ($this->request->is('post')) {
            $loginstory = $this->Loginstories->patchEntity($loginstory, $this->request->getData());
            if ($this->Loginstories->save($loginstory)) {
                $this->Flash->success(__('The loginstory has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The loginstory could not be saved. Please, try again.'));
        }
        $users = $this->Loginstories->Users->find('list', ['limit' => 200]);
        $this->set(compact('loginstory', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Loginstory id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $loginstory = $this->Loginstories->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $loginstory = $this->Loginstories->patchEntity($loginstory, $this->request->getData());
            if ($this->Loginstories->save($loginstory)) {
                $this->Flash->success(__('The loginstory has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The loginstory could not be saved. Please, try again.'));
        }
        $users = $this->Loginstories->Users->find('list', ['limit' => 200]);
        $this->set(compact('loginstory', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Loginstory id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $loginstory = $this->Loginstories->get($id);
        if ($this->Loginstories->delete($loginstory)) {
            $this->Flash->success(__('The loginstory has been deleted.'));
        } else {
            $this->Flash->error(__('The loginstory could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
