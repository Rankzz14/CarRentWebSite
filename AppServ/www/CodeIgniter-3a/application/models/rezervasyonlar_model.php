<?
class rezervasyonlar_model extends CI_Model
{
    public $tablo_adi=''; //global değişken

    public function __construct()
    {
        parent::__construct();
        $this->tablo_adi='tbl_rezervasyonlar';
    }

    //yeni bir rezervasyon oluşturuluyor
    public function Add($veri=array())
    {
        return $this->db->insert($this->tablo_adi,$veri);
    }

    //kişiye ait rezervasyon listesi
    public function GetReservations($tc)
    {
        $this->db->select('*');
        $this->db->from($this->tablo_adi);
        $this->db->join('tbl_araclar','tbl_araclar.arac_id=tbl_rezervasyonlar.arac_id');
        return $this->db->where('tckimlik',$tc)->get()->result();
    }

    //rezervasyon iptali
    public function dbCancelReservation($id)
    {
        //Update tbl_rezervasyonlar set iptal_mi='e', iptal_tarihi=now WHERE rezervasyon_id=$id
        $data = array('iptal_mi'=>'E','iptal_tarihi'=>date('Y-m-d'));
        $this->db->set($data);
        $this->db->where('rezervasyon_id',$id);
        return $this->db->update($this->tablo_adi);
    }
    //Tarihsel uygunluk sorgulama metodu
    public function AvailableReservation($a_tar,$t_tar,$arac_id)
    {
        //Durum 1
        $this->db->where('alma_tarihi <= ',$a_tar);
        $this->db->where('teslim_tarihi >= ',$a_tar);
        $d1 = $this->db->where('arac_id',$arac_id)->get($this->tablo_adi)->num_rows();

        //Durum 2
        $this->db->where('alma_tarihi <= ',$t_tar);
        $this->db->where('teslim_tarihi >= ',$t_tar);
        $d2 = $this->db->where('arac_id',$arac_id)->get($this->tablo_adi)->num_rows();

        //Durum 3
        $this->db->where('alma_tarihi >=',$a_tar);
        $this->db->where('teslim_tarihi <=',$t_tar);
        $d3 = $this->db->where('arac_id',$arac_id)->get($this->tablo_adi)->num_rows();

        if($d1>0 || $d2>0 || $d3>0)
        {
            $available = false;
        } else {
            $available = true;
        }
        return $available;
    }

}

?>