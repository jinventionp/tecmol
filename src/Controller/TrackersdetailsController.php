<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Trackersdetails Controller
 *
 * @property \App\Model\Table\TrackersdetailsTable $Trackersdetails
 *
 * @method \App\Model\Entity\Trackersdetail[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TrackersdetailsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Modules', 'Users']
        ];
        $trackersdetails = $this->paginate($this->Trackersdetails);

        $this->set(compact('trackersdetails'));
    }

    /**
     * View method
     *
     * @param string|null $id Trackersdetail id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $trackersdetail = $this->Trackersdetails->get($id, [
            'contain' => ['Modules', 'Users']
        ]);

        $this->set('trackersdetail', $trackersdetail);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $trackersdetail = $this->Trackersdetails->newEntity();
        if ($this->request->is('post')) {
            $trackersdetail = $this->Trackersdetails->patchEntity($trackersdetail, $this->request->getData());
            if ($this->Trackersdetails->save($trackersdetail)) {
                $this->Flash->success(__('The trackersdetail has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The trackersdetail could not be saved. Please, try again.'));
        }
        $modules = $this->Trackersdetails->Modules->find('list', ['limit' => 200]);
        $users = $this->Trackersdetails->Users->find('list', ['limit' => 200]);
        $this->set(compact('trackersdetail', 'modules', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Trackersdetail id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $trackersdetail = $this->Trackersdetails->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $trackersdetail = $this->Trackersdetails->patchEntity($trackersdetail, $this->request->getData());
            if ($this->Trackersdetails->save($trackersdetail)) {
                $this->Flash->success(__('The trackersdetail has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The trackersdetail could not be saved. Please, try again.'));
        }
        $modules = $this->Trackersdetails->Modules->find('list', ['limit' => 200]);
        $users = $this->Trackersdetails->Users->find('list', ['limit' => 200]);
        $this->set(compact('trackersdetail', 'modules', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Trackersdetail id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $trackersdetail = $this->Trackersdetails->get($id);
        if ($this->Trackersdetails->delete($trackersdetail)) {
            $this->Flash->success(__('The trackersdetail has been deleted.'));
        } else {
            $this->Flash->error(__('The trackersdetail could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
