<?
class vehicle extends CI_Controller
{
    public function index()
    {
        $this->load->model('araclar_model');
        $veriler = new stdClass();
        $veriler -> araclar = $this->araclar_model ->GetAll();
        $this->load->view('vehicle_index2_view',$veriler);
    }

    public function detail($id)
    {
        $this->load->model('araclar_model');
        $veri_paketi["arac"]=$this->araclar_model ->Get($id);
        $veri['uyari'] = null;
        $this->load->view('vehicle_detail_view',$veri_paketi);
    }

    public function PostRezervationAdd()
    {
        $this->load->model('araclar_model');
        $this->load->model('rezervasyonlar_model');
        $rezervasyon = array(
            'arac_id' => $this->input->post('arac_id_'),
            'tckimlik' => $this->input->post('tckimlik_'),
            'alma_tarihi' => $this->input->post('alma_tarihi_'),
            'teslim_tarihi' => $this->input->post('teslim_tarihi_'),
            'tutar' => $this->input->post('tutar_')
        );
        $durum = $this->rezervasyonlar_model->AvailableReservation($this->input->post('alma_tarihi_'), $this->input->post('teslim_tarihi_'), $this->input->post('arac_id_'));
        if($durum)
        {
            $result = $this->rezervasyonlar_model->Add($rezervasyon);
            $veri_paketi['uyari'] = "İşlem başarılı, araç rezerv edildi.";
        }
        else
        {
            $veri_paketi['uyari'] = "İşlem başarısız, Araç bu tarih aralığında uygun değil.";
        }
        $veri_paketi["arac"]=$this->araclar_model ->Get($this->input->post('arac_id_'));
        $this->load->view('vehicle_detail_view',$veri_paketi);

    }
    public function myreservations()
    {
        $veri['rezervasyonlar']=null;
        $veri['tc']=null;
        $this->load->view('vehicle_myreservations_view',$veri);
        
    }
    public function MyReservationsPost()
    {
        $this->load->model('rezervasyonlar_model');
        $tc = $this->input->post('tckimlik_');
        $veri['tc']=$tc;
        $veri['rezervasyonlar']=$this->rezervasyonlar_model->GetReservations($tc);
        $this->load->view('vehicle_myreservations_view',$veri);
    }
    public function CancelReservation($rid,$tc)
    {
        $this->load->model('rezervasyonlar_model');
        $result=$this->rezervasyonlar_model->dbCancelReservation($rid);
        $data['$tc']=$tc;
        $data['rezervasyonlar']=$this->rezervasyonlar_model->GetReservations($tc);
        $this->load->view('vehicle_myreservations_view',$data);
    }
}
?>