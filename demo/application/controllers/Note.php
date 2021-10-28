<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Note extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Note_model');
    }
    public function show()
    {
        $this->load->view('templates/header', [
            'navbar' => true,
            'base_url' => base_url()

        ]);
        $this->load->view('v_note', []);
        $this->load->view('templates/footer');
    }
    public function show_edit()
    {
        $id = $this->input->post('id');
        $note = $this->Note_model->get($id);
        $note = $note->result()[0];
        $this->load->view('templates/header', [
            'navbar' => true,
            'base_url' => base_url()
        ]);
        $this->load->view('v_note_edit', [

            'note' => $note
        ]);
        $this->load->view('templates/footer');
    }
    public function show_search()

    {
        $id = $this->session->userdata('id');
        $notes = $this->Note_model->select_note_by_create_by($id);
        $notes = $notes->result();
        $dates = [];

        foreach ($notes as $note) {
            $dates = [...$dates, $note->date_alert];
        }


        $this->load->view('templates/header', [
            'navbar' => true,
            'base_url' => base_url(),
            'dates' => $dates
        ]);
        $this->load->view('v_note_search', []);
        $this->load->view('templates/footer');
    }
    public function show_search_table()
    {
        $data = $this->input->post();
        $date = DateTime::createFromFormat('d/m/Y', $data['date_alert']);
        $data['date_alert'] = $date->format('Y-m-d');

        $date_alert = $data['date_alert'];
        $id = $this->session->userdata('id');
        $query = $this->Note_model->select_note_by_date_alert($date_alert, $id);
        $notes = $query->result();

        foreach ($notes as $note) {
            $note->time_alert =  substr($note->time_alert, 0, 5);
        }

        $this->load->view('templates/header', [
            'navbar' => true,
            'base_url' => base_url()

        ]);
        $this->load->view('v_note_search_table', [
            'notes' => $notes

        ]);
        $this->load->view('templates/footer');
    }

    public function show_search_table_bar()
    {
        $data = $this->input->post();
       
        $tag = $data['tag'];
        $id = $this->session->userdata('id');
        $query = $this->Note_model->select_note_by_tag($tag, $id);
        $notes = $query->result();

        foreach ($notes as $note) {
            $note->time_alert =  substr($note->time_alert, 0, 5);
        }

        $this->load->view('templates/header', [
            'navbar' => true,
            'base_url' => base_url()

        ]);
        $this->load->view('v_note_search_table', [
            'notes' => $notes

        ]);
        $this->load->view('templates/footer');
    }
    public function save()
    {
        //โหลด Img
        $tmpFilepathImage = $_FILES['formFileImage']['tmp_name'];
        $bytesImage = random_bytes(24); //random
        $generateImage = bin2hex($bytesImage);
        $pathGenImage = "./files/" . $generateImage; //
        mkdir($pathGenImage, 0777, true);
        $newFilePathImage = $pathGenImage . "/" . $_FILES["formFileImage"]['name']; //new
        move_uploaded_file($tmpFilepathImage, $newFilePathImage);
        //
        //โหลดวีดีโอ
        $tmpFilepathVideo = $_FILES['formFileVideo']['tmp_name'];
        $bytesVideo = random_bytes(24); //random
        $generateVideo = bin2hex($bytesVideo);
        $pathGenVideo = "./files/" . $generateVideo; //
        mkdir($pathGenVideo, 0777, true);
        $newFilePathVideo = $pathGenVideo . "/" . $_FILES["formFileVideo"]['name']; //new
        move_uploaded_file($tmpFilepathVideo, $newFilePathVideo);
        $data = $this->input->post();
        //

        $data['create_by'] = $this->session->userdata('id');
        $data['update_by'] = $this->session->userdata('id');
        $data['path_image'] = $newFilePathImage;
        $data['path_video'] = $newFilePathVideo;

        $this->Note_model->add($data);
        redirect('http://localhost/dev/demo/Note/show', 'refresh');
    }
    public function delete()
    {


        $data = $this->input->post();
        $id = $data['id'];
        $this->Note_model->del($id);
        redirect('http://localhost/dev/demo/index.php/Note/show_search_table', 'refresh');
    }
    public function update()
    {
        $data = $this->input->post();
        date_default_timezone_set('Asia/Bangkok');

        $date = date('Y-m-d h:i:s', time());
        $data['update_date'] = $date;

        $id = $this->session->userdata('id');
        $data['update_by'] = $id;

        $this->Note_model->update($data);
        redirect('http://localhost/dev/demo/index.php/Note/show', 'refresh');
    }
}
    
    /* End of file Note.php */
