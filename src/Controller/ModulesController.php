<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Modules Controller
 *
 * @property \App\Model\Table\ModulesTable $Modules
 *
 * @method \App\Model\Entity\Module[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ModulesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $modules = $this->paginate($this->Modules);

        $this->set(compact('modules'));
    }

    /**
     * View method
     *
     * @param string|null $id Module id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $module = $this->Modules->get($id, [
            'contain' => ['Profiles', 'Fields', 'Trackersdetails']
        ]);

        $this->set('module', $module);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $module = $this->Modules->newEntity();
        if ($this->request->is('post')) {
            $module = $this->Modules->patchEntity($module, $this->request->getData());
            if ($this->Modules->save($module)) {
                $this->Flash->success(__('The module has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The module could not be saved. Please, try again.'));
        }
        $profiles = $this->Modules->Profiles->find('list', ['limit' => 200]);
        $this->set(compact('module', 'profiles'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Module id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $module = $this->Modules->get($id, [
            'contain' => ['Profiles']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $module = $this->Modules->patchEntity($module, $this->request->getData());
            if ($this->Modules->save($module)) {
                $this->Flash->success(__('The module has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The module could not be saved. Please, try again.'));
        }
        $profiles = $this->Modules->Profiles->find('list', ['limit' => 200]);
        $this->set(compact('module', 'profiles'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Module id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $module = $this->Modules->get($id);
        if ($this->Modules->delete($module)) {
            $this->Flash->success(__('The module has been deleted.'));
        } else {
            $this->Flash->error(__('The module could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
