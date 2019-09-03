<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * AuditDeltas Controller
 *
 * @property \App\Model\Table\AuditDeltasTable $AuditDeltas
 *
 * @method \App\Model\Entity\AuditDelta[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AuditDeltasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Audits']
        ];
        $auditDeltas = $this->paginate($this->AuditDeltas);

        $this->set(compact('auditDeltas'));
    }

    /**
     * View method
     *
     * @param string|null $id Audit Delta id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $auditDelta = $this->AuditDeltas->get($id, [
            'contain' => ['Audits']
        ]);

        $this->set('auditDelta', $auditDelta);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $auditDelta = $this->AuditDeltas->newEntity();
        if ($this->request->is('post')) {
            $auditDelta = $this->AuditDeltas->patchEntity($auditDelta, $this->request->getData());
            if ($this->AuditDeltas->save($auditDelta)) {
                $this->Flash->success(__('The audit delta has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The audit delta could not be saved. Please, try again.'));
        }
        $audits = $this->AuditDeltas->Audits->find('list', ['limit' => 200]);
        $this->set(compact('auditDelta', 'audits'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Audit Delta id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $auditDelta = $this->AuditDeltas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $auditDelta = $this->AuditDeltas->patchEntity($auditDelta, $this->request->getData());
            if ($this->AuditDeltas->save($auditDelta)) {
                $this->Flash->success(__('The audit delta has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The audit delta could not be saved. Please, try again.'));
        }
        $audits = $this->AuditDeltas->Audits->find('list', ['limit' => 200]);
        $this->set(compact('auditDelta', 'audits'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Audit Delta id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $auditDelta = $this->AuditDeltas->get($id);
        if ($this->AuditDeltas->delete($auditDelta)) {
            $this->Flash->success(__('The audit delta has been deleted.'));
        } else {
            $this->Flash->error(__('The audit delta could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
