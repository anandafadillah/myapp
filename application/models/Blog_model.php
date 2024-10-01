<?php 

class Blog_model extends CI_Model{

    public function getBlogs()
    {
        $filter = $this->input->get('find');
        $this->db->like('title', $filter);
        return $this->db->get("blog");
    }
    public function getDetail($field,$value)
    {
        $this->db->where($field, $value);
        return $this->db->get('blog');
    }
    public function insertBlog($data)
    {
        $this->db->insert('blog', $data);
        return $this->db->insert_id();
    }
    public function updateBlog($id,$post)
    {
        //mencari data id
        $this->db->where('id', $id);
        //update data baru 
        $this->db->update('blog', $post);
        //mengembalikan data berdasarkan id yang di pilih
        return $this->db->affected_rows();
    }
    public function deleteBlog($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('blog');
        return $this->db->affected_rows();
    }
}

?>