<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CustomersTests Controller
 *
 * @property \App\Model\Table\CustomersTestsTable $CustomersTests
 *
 * @method \App\Model\Entity\CustomersTest[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CustomersTestsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Customers', 'Tests']
        ];
        $customersTests = $this->paginate($this->CustomersTests);

        $this->set(compact('customersTests'));
    }

    /**
     * View method
     *
     * @param string|null $id Customers Test id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $customersTest = $this->CustomersTests->get($id, [
            'contain' => ['Customers', 'Tests']
        ]);

        $this->set('customersTest', $customersTest);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $customersTest = $this->CustomersTests->newEntity();
        if ($this->request->is('post')) {
            $customersTest = $this->CustomersTests->patchEntity($customersTest, $this->request->getData());
            if ($this->CustomersTests->save($customersTest)) {
                $this->Flash->success(__('The customers test has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The customers test could not be saved. Please, try again.'));
        }
        $customers = $this->CustomersTests->Customers->find('list', ['limit' => 200]);
        $tests = $this->CustomersTests->Tests->find('list', ['limit' => 200]);
        $this->set(compact('customersTest', 'customers', 'tests'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Customers Test id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $customersTest = $this->CustomersTests->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $customersTest = $this->CustomersTests->patchEntity($customersTest, $this->request->getData());
            if ($this->CustomersTests->save($customersTest)) {
                $this->Flash->success(__('The customers test has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The customers test could not be saved. Please, try again.'));
        }
        $customers = $this->CustomersTests->Customers->find('list', ['limit' => 200]);
        $tests = $this->CustomersTests->Tests->find('list', ['limit' => 200]);
        $this->set(compact('customersTest', 'customers', 'tests'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Customers Test id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $customersTest = $this->CustomersTests->get($id);
        if ($this->CustomersTests->delete($customersTest)) {
            $this->Flash->success(__('The customers test has been deleted.'));
        } else {
            $this->Flash->error(__('The customers test could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
