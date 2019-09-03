<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CausedevolutionsReviews Controller
 *
 * @property \App\Model\Table\CausedevolutionsReviewsTable $CausedevolutionsReviews
 *
 * @method \App\Model\Entity\CausedevolutionsReview[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CausedevolutionsReviewsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Causedevolutions', 'Reviews']
        ];
        $causedevolutionsReviews = $this->paginate($this->CausedevolutionsReviews);

        $this->set(compact('causedevolutionsReviews'));
    }

    /**
     * View method
     *
     * @param string|null $id Causedevolutions Review id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $causedevolutionsReview = $this->CausedevolutionsReviews->get($id, [
            'contain' => ['Causedevolutions', 'Reviews']
        ]);

        $this->set('causedevolutionsReview', $causedevolutionsReview);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $causedevolutionsReview = $this->CausedevolutionsReviews->newEntity();
        if ($this->request->is('post')) {
            $causedevolutionsReview = $this->CausedevolutionsReviews->patchEntity($causedevolutionsReview, $this->request->getData());
            if ($this->CausedevolutionsReviews->save($causedevolutionsReview)) {
                $this->Flash->success(__('The causedevolutions review has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The causedevolutions review could not be saved. Please, try again.'));
        }
        $causedevolutions = $this->CausedevolutionsReviews->Causedevolutions->find('list', ['limit' => 200]);
        $reviews = $this->CausedevolutionsReviews->Reviews->find('list', ['limit' => 200]);
        $this->set(compact('causedevolutionsReview', 'causedevolutions', 'reviews'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Causedevolutions Review id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $causedevolutionsReview = $this->CausedevolutionsReviews->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $causedevolutionsReview = $this->CausedevolutionsReviews->patchEntity($causedevolutionsReview, $this->request->getData());
            if ($this->CausedevolutionsReviews->save($causedevolutionsReview)) {
                $this->Flash->success(__('The causedevolutions review has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The causedevolutions review could not be saved. Please, try again.'));
        }
        $causedevolutions = $this->CausedevolutionsReviews->Causedevolutions->find('list', ['limit' => 200]);
        $reviews = $this->CausedevolutionsReviews->Reviews->find('list', ['limit' => 200]);
        $this->set(compact('causedevolutionsReview', 'causedevolutions', 'reviews'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Causedevolutions Review id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $causedevolutionsReview = $this->CausedevolutionsReviews->get($id);
        if ($this->CausedevolutionsReviews->delete($causedevolutionsReview)) {
            $this->Flash->success(__('The causedevolutions review has been deleted.'));
        } else {
            $this->Flash->error(__('The causedevolutions review could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
