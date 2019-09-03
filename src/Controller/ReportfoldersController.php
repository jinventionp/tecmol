<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Reportfolders Controller
 *
 * @property \App\Model\Table\ReportfoldersTable $Reportfolders
 *
 * @method \App\Model\Entity\Reportfolder[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ReportfoldersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $reportfolders = $this->paginate($this->Reportfolders);

        $this->set(compact('reportfolders'));
    }

    /**
     * View method
     *
     * @param string|null $id Reportfolder id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $reportfolder = $this->Reportfolders->get($id, [
            'contain' => ['Reports']
        ]);

        $this->set('reportfolder', $reportfolder);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $reportfolder = $this->Reportfolders->newEntity();
        if ($this->request->is('post')) {
            $reportfolder = $this->Reportfolders->patchEntity($reportfolder, $this->request->getData());
            if ($this->Reportfolders->save($reportfolder)) {
                $this->Flash->success(__('The reportfolder has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The reportfolder could not be saved. Please, try again.'));
        }
        $this->set(compact('reportfolder'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Reportfolder id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $reportfolder = $this->Reportfolders->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $reportfolder = $this->Reportfolders->patchEntity($reportfolder, $this->request->getData());
            if ($this->Reportfolders->save($reportfolder)) {
                $this->Flash->success(__('The reportfolder has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The reportfolder could not be saved. Please, try again.'));
        }
        $this->set(compact('reportfolder'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Reportfolder id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $reportfolder = $this->Reportfolders->get($id);
        if ($this->Reportfolders->delete($reportfolder)) {
            $this->Flash->success(__('The reportfolder has been deleted.'));
        } else {
            $this->Flash->error(__('The reportfolder could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
