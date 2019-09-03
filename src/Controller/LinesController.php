<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Lines Controller
 *
 * @property \App\Model\Table\LinesTable $Lines
 *
 * @method \App\Model\Entity\Line[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LinesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $lines = $this->paginate($this->Lines);

        $this->set(compact('lines'));
    }

    /**
     * View method
     *
     * @param string|null $id Line id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $line = $this->Lines->get($id, [
            'contain' => ['Samples']
        ]);

        $this->set('line', $line);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $line = $this->Lines->newEntity();
        if ($this->request->is('post')) {
            $line = $this->Lines->patchEntity($line, $this->request->getData());
            if ($this->Lines->save($line)) {
                $this->Flash->success(__('The line has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The line could not be saved. Please, try again.'));
        }
        $this->set(compact('line'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Line id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $line = $this->Lines->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $line = $this->Lines->patchEntity($line, $this->request->getData());
            if ($this->Lines->save($line)) {
                $this->Flash->success(__('The line has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The line could not be saved. Please, try again.'));
        }
        $this->set(compact('line'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Line id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $line = $this->Lines->get($id);
        if ($this->Lines->delete($line)) {
            $this->Flash->success(__('The line has been deleted.'));
        } else {
            $this->Flash->error(__('The line could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
