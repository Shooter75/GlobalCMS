<?php

class Categories extends MY_Controller
{

    public function index()
    {
        
    }

    public function view($id = NULL)
    {
        $this->load->helper( ['url', 'form'] );

        $this->load->view( 'components/view_header',
            [
                'title' => 'Category',
                'auth'  => $this->data['auth'],
                'user'  => $this->data['user']
            ]
        );

        if($id == NULL)
        {
            $this->load->view( 'categories/view_categories',
                array
                (
                    'categories' => $this->data['categories']
                )
            );
            
        } else {

            $category_posts = $this->Model_categories->get_categories_posts($id);

            $this->load->view('categories/view_single',
                array
                (
                    'current_user' => $this->data['user'],
                    'category_posts' => $category_posts,
                    'categories' => $this->data['categories']
                )
            );
        }
    }

}