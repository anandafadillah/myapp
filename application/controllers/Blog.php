<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
        $this->load->model('Blog_model');
    }

    public function index()
    {  
        $query = $this->Blog_model->getBlogs();
        $data['blogs'] = $query->result_array();
     
        $this->load->view('blog', $data);
    }
    
    public function detail($url)
    {
        $query = $this->Blog_model->getDetail('url', $url);
        $data['blog'] = $query->row_array();

        $this->load->view('detail', $data);
    }

    public function add()
    {
        //validasi jika datanya sudah diisi atau belum
        if($this->input->post()){
            $data['title'] = $this->input->post('title');
            $data['content'] = $this->input->post('content');
            $data['url'] = $this->input->post('url');
        
            //kirim data ke database melalui model insertBlog
            $id =  $this->Blog_model->insertBlog($data);

            //Validasi jika kirim datanya berhasil atau tidak
            if($id){
                echo "<script>alert('Data berhasil disimpan!');</script>";
            }else{
                echo "<script>alert('Data Gagal disimpan!');</script>";
            }
        }
        $this->load->view('form_add');
    }

    public function edit($id)
    {

        //ambil data dari database berdasarkan id
        $query = $this->Blog_model->getDetail('id',$id);
        $data['blog'] = $query->row_array();

        //mengupdate data yang baru di input
        if($this->input->post()){
            $post['title'] = $this->input->post('title');
            $post['content'] = $this->input->post('content');
            $post['url'] = $this->input->post('url');
        
            //query update data 
            $id =  $this->Blog_model->updateBlog($id, $post);

            if($id){
                echo "Data Berhasil di simpan";
            }else{
                echo "Data gagal disimpan";
            }
        }

        $this->load->view('form_edit', $data);
    }

    public function delete($id)
    {
        $this->Blog_model->deleteBlog($id);
        redirect('/');
    }
}
