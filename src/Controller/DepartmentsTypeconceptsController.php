<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * DepartmentsTypeconcepts Controller
 *
 * @property \App\Model\Table\DepartmentsTypeconceptsTable $DepartmentsTypeconcepts
 *
 * @method \App\Model\Entity\DepartmentsTypeconcept[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DepartmentsTypeconceptsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Departments', 'Typeconcepts']
        ];
        $departmentsTypeconcepts = $this->paginate($this->DepartmentsTypeconcepts);

        $this->set(compact('departmentsTypeconcepts'));
    }

    /**
     * View method
     *
     * @param string|null $id Departments Typeconcept id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $departmentsTypeconcept = $this->DepartmentsTypeconcepts->get($id, [
            'contain' => ['Departments', 'Typeconcepts']
        ]);

        $this->set('departmentsTypeconcept', $departmentsTypeconcept);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $departmentsTypeconcept = $this->DepartmentsTypeconcepts->newEntity();
        if ($this->request->is('post')) {
            $departmentsTypeconcept = $this->DepartmentsTypeconcepts->patchEntity($departmentsTypeconcept, $this->request->getData());
            if ($this->DepartmentsTypeconcepts->save($departmentsTypeconcept)) {
                $this->Flash->success(__('The departments typeconcept has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The departments typeconcept could not be saved. Please, try again.'));
        }
        $departments = $this->DepartmentsTypeconcepts->Departments->find('list', ['limit' => 200]);
        $typeconcepts = $this->DepartmentsTypeconcepts->Typeconcepts->find('list', ['limit' => 200]);
        $this->set(compact('departmentsTypeconcept', 'departments', 'typeconcepts'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Departments Typeconcept id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $departmentsTypeconcept = $this->DepartmentsTypeconcepts->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $departmentsTypeconcept = $this->DepartmentsTypeconcepts->patchEntity($departmentsTypeconcept, $this->request->getData());
            if ($this->DepartmentsTypeconcepts->save($departmentsTypeconcept)) {
                $this->Flash->success(__('The departments typeconcept has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The departments typeconcept could not be saved. Please, try again.'));
        }
        $departments = $this->DepartmentsTypeconcepts->Departments->find('list', ['limit' => 200]);
        $typeconcepts = $this->DepartmentsTypeconcepts->Typeconcepts->find('list', ['limit' => 200]);
        $this->set(compact('departmentsTypeconcept', 'departments', 'typeconcepts'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Departments Typeconcept id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $departmentsTypeconcept = $this->DepartmentsTypeconcepts->get($id);
        if ($this->DepartmentsTypeconcepts->delete($departmentsTypeconcept)) {
            $this->Flash->success(__('The departments typeconcept has been deleted.'));
        } else {
            $this->Flash->error(__('The departments typeconcept could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
