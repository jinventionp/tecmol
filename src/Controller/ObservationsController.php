<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Observations Controller
 *
 * @property \App\Model\Table\ObservationsTable $Observations
 *
 * @method \App\Model\Entity\Observation[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ObservationsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Samples']
        ];
        $observations = $this->paginate($this->Observations);

        $this->set(compact('observations'));
    }

    /**
     * View method
     *
     * @param string|null $id Observation id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $observation = $this->Observations->get($id, [
            'contain' => ['Users', 'Samples']
        ]);

        $this->set('observation', $observation);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $observation = $this->Observations->newEntity();
        if ($this->request->is('post')) {
            $observation = $this->Observations->patchEntity($observation, $this->request->getData());
            if ($this->Observations->save($observation)) {
                $this->Flash->success(__('The observation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The observation could not be saved. Please, try again.'));
        }
        $users = $this->Observations->Users->find('list', ['limit' => 200]);
        $samples = $this->Observations->Samples->find('list', ['limit' => 200]);
        $this->set(compact('observation', 'users', 'samples'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Observation id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $observation = $this->Observations->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $observation = $this->Observations->patchEntity($observation, $this->request->getData());
            if ($this->Observations->save($observation)) {
                $this->Flash->success(__('The observation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The observation could not be saved. Please, try again.'));
        }
        $users = $this->Observations->Users->find('list', ['limit' => 200]);
        $samples = $this->Observations->Samples->find('list', ['limit' => 200]);
        $this->set(compact('observation', 'users', 'samples'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Observation id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $observation = $this->Observations->get($id);
        if ($this->Observations->delete($observation)) {
            $this->Flash->success(__('The observation has been deleted.'));
        } else {
            $this->Flash->error(__('The observation could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
