<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Reportqueries Controller
 *
 * @property \App\Model\Table\ReportqueriesTable $Reportqueries
 *
 * @method \App\Model\Entity\Reportquery[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ReportqueriesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Reports', 'Operators']
        ];
        $reportqueries = $this->paginate($this->Reportqueries);

        $this->set(compact('reportqueries'));
    }

    /**
     * View method
     *
     * @param string|null $id Reportquery id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $reportquery = $this->Reportqueries->get($id, [
            'contain' => ['Reports', 'Operators']
        ]);

        $this->set('reportquery', $reportquery);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $reportquery = $this->Reportqueries->newEntity();
        if ($this->request->is('post')) {
            $reportquery = $this->Reportqueries->patchEntity($reportquery, $this->request->getData());
            if ($this->Reportqueries->save($reportquery)) {
                $this->Flash->success(__('The reportquery has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The reportquery could not be saved. Please, try again.'));
        }
        $reports = $this->Reportqueries->Reports->find('list', ['limit' => 200]);
        $operators = $this->Reportqueries->Operators->find('list', ['limit' => 200]);
        $this->set(compact('reportquery', 'reports', 'operators'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Reportquery id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $reportquery = $this->Reportqueries->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $reportquery = $this->Reportqueries->patchEntity($reportquery, $this->request->getData());
            if ($this->Reportqueries->save($reportquery)) {
                $this->Flash->success(__('The reportquery has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The reportquery could not be saved. Please, try again.'));
        }
        $reports = $this->Reportqueries->Reports->find('list', ['limit' => 200]);
        $operators = $this->Reportqueries->Operators->find('list', ['limit' => 200]);
        $this->set(compact('reportquery', 'reports', 'operators'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Reportquery id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $reportquery = $this->Reportqueries->get($id);
        if ($this->Reportqueries->delete($reportquery)) {
            $this->Flash->success(__('The reportquery has been deleted.'));
        } else {
            $this->Flash->error(__('The reportquery could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
