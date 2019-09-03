<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * SamplesTests Controller
 *
 * @property \App\Model\Table\SamplesTestsTable $SamplesTests
 *
 * @method \App\Model\Entity\SamplesTest[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SamplesTestsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Samples', 'Tests', 'Users', 'Typeconcepts']
        ];
        $samplesTests = $this->paginate($this->SamplesTests);

        $this->set(compact('samplesTests'));
    }

    /**
     * View method
     *
     * @param string|null $id Samples Test id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $samplesTest = $this->SamplesTests->get($id, [
            'contain' => ['Samples', 'Tests', 'Users', 'Typeconcepts']
        ]);

        $this->set('samplesTest', $samplesTest);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $samplesTest = $this->SamplesTests->newEntity();
        if ($this->request->is('post')) {
            $samplesTest = $this->SamplesTests->patchEntity($samplesTest, $this->request->getData());
            if ($this->SamplesTests->save($samplesTest)) {
                $this->Flash->success(__('The samples test has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The samples test could not be saved. Please, try again.'));
        }
        $samples = $this->SamplesTests->Samples->find('list', ['limit' => 200]);
        $tests = $this->SamplesTests->Tests->find('list', ['limit' => 200]);
        $users = $this->SamplesTests->Users->find('list', ['limit' => 200]);
        $typeconcepts = $this->SamplesTests->Typeconcepts->find('list', ['limit' => 200]);
        $this->set(compact('samplesTest', 'samples', 'tests', 'users', 'typeconcepts'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Samples Test id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $samplesTest = $this->SamplesTests->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $samplesTest = $this->SamplesTests->patchEntity($samplesTest, $this->request->getData());
            if ($this->SamplesTests->save($samplesTest)) {
                $this->Flash->success(__('The samples test has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The samples test could not be saved. Please, try again.'));
        }
        $samples = $this->SamplesTests->Samples->find('list', ['limit' => 200]);
        $tests = $this->SamplesTests->Tests->find('list', ['limit' => 200]);
        $users = $this->SamplesTests->Users->find('list', ['limit' => 200]);
        $typeconcepts = $this->SamplesTests->Typeconcepts->find('list', ['limit' => 200]);
        $this->set(compact('samplesTest', 'samples', 'tests', 'users', 'typeconcepts'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Samples Test id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $samplesTest = $this->SamplesTests->get($id);
        if ($this->SamplesTests->delete($samplesTest)) {
            $this->Flash->success(__('The samples test has been deleted.'));
        } else {
            $this->Flash->error(__('The samples test could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
