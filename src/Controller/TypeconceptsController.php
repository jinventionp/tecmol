<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Typeconcepts Controller
 *
 * @property \App\Model\Table\TypeconceptsTable $Typeconcepts
 *
 * @method \App\Model\Entity\Typeconcept[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TypeconceptsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $typeconcepts = $this->paginate($this->Typeconcepts);

        $this->set(compact('typeconcepts'));
    }

    /**
     * View method
     *
     * @param string|null $id Typeconcept id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $typeconcept = $this->Typeconcepts->get($id, [
            'contain' => ['Departments', 'Samples', 'SamplesTests']
        ]);

        $this->set('typeconcept', $typeconcept);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $typeconcept = $this->Typeconcepts->newEntity();
        if ($this->request->is('post')) {
            $typeconcept = $this->Typeconcepts->patchEntity($typeconcept, $this->request->getData());
            if ($this->Typeconcepts->save($typeconcept)) {
                $this->Flash->success(__('The typeconcept has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The typeconcept could not be saved. Please, try again.'));
        }
        $departments = $this->Typeconcepts->Departments->find('list', ['limit' => 200]);
        $this->set(compact('typeconcept', 'departments'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Typeconcept id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $typeconcept = $this->Typeconcepts->get($id, [
            'contain' => ['Departments']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $typeconcept = $this->Typeconcepts->patchEntity($typeconcept, $this->request->getData());
            if ($this->Typeconcepts->save($typeconcept)) {
                $this->Flash->success(__('The typeconcept has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The typeconcept could not be saved. Please, try again.'));
        }
        $departments = $this->Typeconcepts->Departments->find('list', ['limit' => 200]);
        $this->set(compact('typeconcept', 'departments'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Typeconcept id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $typeconcept = $this->Typeconcepts->get($id);
        if ($this->Typeconcepts->delete($typeconcept)) {
            $this->Flash->success(__('The typeconcept has been deleted.'));
        } else {
            $this->Flash->error(__('The typeconcept could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
