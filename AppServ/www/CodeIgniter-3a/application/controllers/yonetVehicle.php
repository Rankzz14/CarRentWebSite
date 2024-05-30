<?
class yonetVehicle extends CI_Controller 
{
    public function index()
    {
        $this->load->model('araclar_model');
        $veriler = new stdClass();
        $veriler -> araclar = $this->araclar_model->GetAll();
        $this->load->view('yonetVehicle_index_view',$veriler);
    }
    public function add()
    {
        $veri['uyari']=null;
        $this->load->view('yonetVehicle_add_view',$veri);
    }

    public function addPost()
    {
        $this->load->model('araclar_model');
        $arac_bilgileri = array(
            'marka' => $this->input->post('marka_'),
            'model' => $this->input->post('model_'),
            'model_yili' => $this->input->post('model_yili_'),
            'vites' => $this->input->post('vites_'),
            'yakit' => $this->input->post('yakit_'),
            'fiyat' => $this->input->post('fiyat_')
        );

        $result = $this->araclar_model->Add($arac_bilgileri);

        if($result)
        {
            $veri['uyari']='İşlem Başarılı';
        }
        else
        {
            $veri['uyari']='İşlem Esnasında Bir Hata Meydana Geldi.';
        }
        $this->load->view('yonetVehicle_add_view',$veri);
    }

    public function Delete($id)
    {
        $this->load->model('araclar_model');
        $result = $this->araclar_model->Delete($id);
        if ($result)
        {
            redirect(base_url('yonetVehicle'));
        }
        else
        {
            $veri['uyari']='İşlem Esnasında Bir Hata Meydana Geldi.';
            //Hatayı Buraya Yazabilirsiniz.
        }
    }

    public function Update($id)
    {
        $this->load->model('araclar_model');
        $veri['arac']=$this->araclar_model->Get($id);
        $veri['uyari']=null;
        $this->load->view('yonetVehicle_update_view',$veri);
    }

    public function updatePost()
    {
        $this->load->model('araclar_model');
        $aid=$this->input->post('arac_id_');
        $arac=array(
            'arac_id' => $aid,
            'marka' => $this->input->post('marka_'),
            'model' => $this->input->post('model_'),
            'model_yili' => $this->input->post('model_yili_'),
            'vites' => $this->input->post('vites_'),
            'yakit' => $this->input->post('yakit_'),
            'fiyat' => $this->input->post('fiyat_')
        );

        $result = $this->araclar_model->Update($arac);

        if($result)
        {
            $veri['uyari']='Güncelleme İşlemi Başarılı.';
        }
        else
        {
            $veri['uyari']='Güncelleme İşlemi Başarısız.';
        }
        $veri['arac'] = $this->araclar_model->Get($aid);
        $this->load->view('yonetVehicle_update_view',$veri);
    }
    public function UploadImage($id)
    {
        $veri['arac_id'] = $id;

        $this->load->model('araclar_model');
        $arac = $this->araclar_model->Get($id);
        $veri['resim_var_mi']=$arac->resim_var_mi;
        $veri['uyari'] = null;
        $this->load->view('yonetVehicle_upload_image_view',$veri);
    }

    public function UploadImagePost()
    {
        $this->load->model('araclar_model');
        $arac_id = $this->input->post('arac_id_');
        $file = $arac_id . '.jpg';

        //Resim var ise silme işlemi yapılıyor.
        $arac = $this->araclar_model->Get($arac_id);
        $veri['resim_var_mi']=$arac->resim_var_mi;
        if($arac->resim_var_mi=='E')
        {
            unlink('_arac_resimleri/'.$file);
        }

        //---Silme işlemi tamamlandı---

        //Burada codeigniter upload kütüphanesi kullanılmaktadır.
        $config['upload_path'] = './_arac_resimleri/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 2048; //2mb sınırını aşamaz.
        $config['max_width'] = 2000; //pixel
        $config['max_height'] = 1600; //pixel
        $config['file_name'] = $file;

        //Codeigniter upload kütüphanesi yeni ayarlamalarla yükleniyor.
        $this->load->library('upload',$config);

        if(!$this->upload->do_upload('resim'))
        {
            $veri['uyari'] = 'Lütfen 1 Resim Seçiniz.';
        }
        else
        {
            $upload_data = $this->upload->data();
            $filename = $upload_data['file_name'];
            $result = $this->araclar_model->UpdateImage($arac_id);
            $veri['uyari'] = "Resim Başarıyla Yüklendi, Dosya Adı:".$filename;
        }
        
        $veri['arac_id'] = $arac_id;
        $this->load->view('yonetVehicle_upload_image_view',$veri);
    }
}
?>