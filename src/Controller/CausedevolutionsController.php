<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Causedevolutions Controller
 *
 * @property \App\Model\Table\CausedevolutionsTable $Causedevolutions
 *
 * @method \App\Model\Entity\Causedevolution[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CausedevolutionsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $causedevolutions = $this->paginate($this->Causedevolutions);

        $this->set(compact('causedevolutions'));
    }

    /**
     * View method
     *
     * @param string|null $id Causedevolution id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $causedevolution = $this->Causedevolutions->get($id, [
            'contain' => ['Reviews']
        ]);

        $this->set('causedevolution', $causedevolution);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $causedevolution = $this->Causedevolutions->newEntity();
        if ($this->request->is('post')) {
            $causedevolution = $this->Causedevolutions->patchEntity($causedevolution, $this->request->getData());
            if ($this->Causedevolutions->save($causedevolution)) {
                $this->Flash->success(__('The causedevolution has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The causedevolution could not be saved. Please, try again.'));
        }
        $reviews = $this->Causedevolutions->Reviews->find('list', ['limit' => 200]);
        $this->set(compact('causedevolution', 'reviews'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Causedevolution id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $causedevolution = $this->Causedevolutions->get($id, [
            'contain' => ['Reviews']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $causedevolution = $this->Causedevolutions->patchEntity($causedevolution, $this->request->getData());
            if ($this->Causedevolutions->save($causedevolution)) {
                $this->Flash->success(__('The causedevolution has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The causedevolution could not be saved. Please, try again.'));
        }
        $reviews = $this->Causedevolutions->Reviews->find('list', ['limit' => 200]);
        $this->set(compact('causedevolution', 'reviews'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Causedevolution id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $causedevolution = $this->Causedevolutions->get($id);
        if ($this->Causedevolutions->delete($causedevolution)) {
            $this->Flash->success(__('The causedevolution has been deleted.'));
        } else {
            $this->Flash->error(__('The causedevolution could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
