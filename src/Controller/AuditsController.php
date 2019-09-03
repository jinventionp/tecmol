<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Audits Controller
 *
 * @property \App\Model\Table\AuditsTable $Audits
 *
 * @method \App\Model\Entity\Audit[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AuditsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Entities', 'Requests', 'Sources']
        ];
        $audits = $this->paginate($this->Audits);

        $this->set(compact('audits'));
    }

    /**
     * View method
     *
     * @param string|null $id Audit id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $audit = $this->Audits->get($id, [
            'contain' => ['Entities', 'Requests', 'Sources', 'AuditDeltas']
        ]);

        $this->set('audit', $audit);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $audit = $this->Audits->newEntity();
        if ($this->request->is('post')) {
            $audit = $this->Audits->patchEntity($audit, $this->request->getData());
            if ($this->Audits->save($audit)) {
                $this->Flash->success(__('The audit has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The audit could not be saved. Please, try again.'));
        }
        $entities = $this->Audits->Entities->find('list', ['limit' => 200]);
        $requests = $this->Audits->Requests->find('list', ['limit' => 200]);
        $sources = $this->Audits->Sources->find('list', ['limit' => 200]);
        $this->set(compact('audit', 'entities', 'requests', 'sources'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Audit id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $audit = $this->Audits->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $audit = $this->Audits->patchEntity($audit, $this->request->getData());
            if ($this->Audits->save($audit)) {
                $this->Flash->success(__('The audit has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The audit could not be saved. Please, try again.'));
        }
        $entities = $this->Audits->Entities->find('list', ['limit' => 200]);
        $requests = $this->Audits->Requests->find('list', ['limit' => 200]);
        $sources = $this->Audits->Sources->find('list', ['limit' => 200]);
        $this->set(compact('audit', 'entities', 'requests', 'sources'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Audit id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $audit = $this->Audits->get($id);
        if ($this->Audits->delete($audit)) {
            $this->Flash->success(__('The audit has been deleted.'));
        } else {
            $this->Flash->error(__('The audit could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
