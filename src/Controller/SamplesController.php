<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Samples Controller
 *
 * @property \App\Model\Table\SamplesTable $Samples
 *
 * @method \App\Model\Entity\Sample[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SamplesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Departments', 'Users', 'Products', 'Lines', 'States', 'Invoices', 'Requests', 'Typeconcepts']
        ];
        $samples = $this->paginate($this->Samples);

        $this->set(compact('samples'));
    }

    /**
     * View method
     *
     * @param string|null $id Sample id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $sample = $this->Samples->get($id, [
            'contain' => ['Departments', 'Users', 'Products', 'Lines', 'States', 'Invoices', 'Requests', 'Typeconcepts', 'Tests', 'Observations', 'Reviews']
        ]);

        $this->set('sample', $sample);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $sample = $this->Samples->newEntity();
        if ($this->request->is('post')) {
            $sample = $this->Samples->patchEntity($sample, $this->request->getData());
            if ($this->Samples->save($sample)) {
                $this->Flash->success(__('The sample has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sample could not be saved. Please, try again.'));
        }
        $departments = $this->Samples->Departments->find('list', ['limit' => 200]);
        $users = $this->Samples->Users->find('list', ['limit' => 200]);
        $products = $this->Samples->Products->find('list', ['limit' => 200]);
        $lines = $this->Samples->Lines->find('list', ['limit' => 200]);
        $states = $this->Samples->States->find('list', ['limit' => 200]);
        $invoices = $this->Samples->Invoices->find('list', ['limit' => 200]);
        $requests = $this->Samples->Requests->find('list', ['limit' => 200]);
        $typeconcepts = $this->Samples->Typeconcepts->find('list', ['limit' => 200]);
        $tests = $this->Samples->Tests->find('list', ['limit' => 200]);
        $this->set(compact('sample', 'departments', 'users', 'products', 'lines', 'states', 'invoices', 'requests', 'typeconcepts', 'tests'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Sample id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $sample = $this->Samples->get($id, [
            'contain' => ['Tests']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $sample = $this->Samples->patchEntity($sample, $this->request->getData());
            if ($this->Samples->save($sample)) {
                $this->Flash->success(__('The sample has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sample could not be saved. Please, try again.'));
        }
        $departments = $this->Samples->Departments->find('list', ['limit' => 200]);
        $users = $this->Samples->Users->find('list', ['limit' => 200]);
        $products = $this->Samples->Products->find('list', ['limit' => 200]);
        $lines = $this->Samples->Lines->find('list', ['limit' => 200]);
        $states = $this->Samples->States->find('list', ['limit' => 200]);
        $invoices = $this->Samples->Invoices->find('list', ['limit' => 200]);
        $requests = $this->Samples->Requests->find('list', ['limit' => 200]);
        $typeconcepts = $this->Samples->Typeconcepts->find('list', ['limit' => 200]);
        $tests = $this->Samples->Tests->find('list', ['limit' => 200]);
        $this->set(compact('sample', 'departments', 'users', 'products', 'lines', 'states', 'invoices', 'requests', 'typeconcepts', 'tests'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Sample id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $sample = $this->Samples->get($id);
        if ($this->Samples->delete($sample)) {
            $this->Flash->success(__('The sample has been deleted.'));
        } else {
            $this->Flash->error(__('The sample could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
