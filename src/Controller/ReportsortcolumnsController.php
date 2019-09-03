<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Reportsortcolumns Controller
 *
 * @property \App\Model\Table\ReportsortcolumnsTable $Reportsortcolumns
 *
 * @method \App\Model\Entity\Reportsortcolumn[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ReportsortcolumnsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Reports']
        ];
        $reportsortcolumns = $this->paginate($this->Reportsortcolumns);

        $this->set(compact('reportsortcolumns'));
    }

    /**
     * View method
     *
     * @param string|null $id Reportsortcolumn id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $reportsortcolumn = $this->Reportsortcolumns->get($id, [
            'contain' => ['Reports']
        ]);

        $this->set('reportsortcolumn', $reportsortcolumn);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $reportsortcolumn = $this->Reportsortcolumns->newEntity();
        if ($this->request->is('post')) {
            $reportsortcolumn = $this->Reportsortcolumns->patchEntity($reportsortcolumn, $this->request->getData());
            if ($this->Reportsortcolumns->save($reportsortcolumn)) {
                $this->Flash->success(__('The reportsortcolumn has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The reportsortcolumn could not be saved. Please, try again.'));
        }
        $reports = $this->Reportsortcolumns->Reports->find('list', ['limit' => 200]);
        $this->set(compact('reportsortcolumn', 'reports'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Reportsortcolumn id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $reportsortcolumn = $this->Reportsortcolumns->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $reportsortcolumn = $this->Reportsortcolumns->patchEntity($reportsortcolumn, $this->request->getData());
            if ($this->Reportsortcolumns->save($reportsortcolumn)) {
                $this->Flash->success(__('The reportsortcolumn has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The reportsortcolumn could not be saved. Please, try again.'));
        }
        $reports = $this->Reportsortcolumns->Reports->find('list', ['limit' => 200]);
        $this->set(compact('reportsortcolumn', 'reports'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Reportsortcolumn id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $reportsortcolumn = $this->Reportsortcolumns->get($id);
        if ($this->Reportsortcolumns->delete($reportsortcolumn)) {
            $this->Flash->success(__('The reportsortcolumn has been deleted.'));
        } else {
            $this->Flash->error(__('The reportsortcolumn could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
