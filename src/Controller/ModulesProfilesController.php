<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ModulesProfiles Controller
 *
 * @property \App\Model\Table\ModulesProfilesTable $ModulesProfiles
 *
 * @method \App\Model\Entity\ModulesProfile[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ModulesProfilesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Modules', 'Profiles']
        ];
        $modulesProfiles = $this->paginate($this->ModulesProfiles);

        $this->set(compact('modulesProfiles'));
    }

    /**
     * View method
     *
     * @param string|null $id Modules Profile id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $modulesProfile = $this->ModulesProfiles->get($id, [
            'contain' => ['Modules', 'Profiles']
        ]);

        $this->set('modulesProfile', $modulesProfile);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $modulesProfile = $this->ModulesProfiles->newEntity();
        if ($this->request->is('post')) {
            $modulesProfile = $this->ModulesProfiles->patchEntity($modulesProfile, $this->request->getData());
            if ($this->ModulesProfiles->save($modulesProfile)) {
                $this->Flash->success(__('The modules profile has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The modules profile could not be saved. Please, try again.'));
        }
        $modules = $this->ModulesProfiles->Modules->find('list', ['limit' => 200]);
        $profiles = $this->ModulesProfiles->Profiles->find('list', ['limit' => 200]);
        $this->set(compact('modulesProfile', 'modules', 'profiles'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Modules Profile id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $modulesProfile = $this->ModulesProfiles->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $modulesProfile = $this->ModulesProfiles->patchEntity($modulesProfile, $this->request->getData());
            if ($this->ModulesProfiles->save($modulesProfile)) {
                $this->Flash->success(__('The modules profile has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The modules profile could not be saved. Please, try again.'));
        }
        $modules = $this->ModulesProfiles->Modules->find('list', ['limit' => 200]);
        $profiles = $this->ModulesProfiles->Profiles->find('list', ['limit' => 200]);
        $this->set(compact('modulesProfile', 'modules', 'profiles'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Modules Profile id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $modulesProfile = $this->ModulesProfiles->get($id);
        if ($this->ModulesProfiles->delete($modulesProfile)) {
            $this->Flash->success(__('The modules profile has been deleted.'));
        } else {
            $this->Flash->error(__('The modules profile could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
