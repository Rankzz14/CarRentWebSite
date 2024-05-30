<?
class araclar_model extends CI_Model
{
    public $tableName = "";
    public function __construct()
    {
        parent::__construct();
        $this-> tableName = "tbl_araclar";
    }

    public function GetAll()
    {
        //araçlar tablosundaki tüm satırları listeleyen metot
        //select * from tbl_araclar where musait_mi='E'
        $this->db->where('musait_mi','E');
        return $this->db->get($this->tableName)->result();
    }

    public function Get($id)
    {
        //tek bir aracı listeleyen metot
        //SQL sorgusu: select * from tbl_araclar where arac_id=5
        return $this->db->where("arac_id",$id)->get($this->tableName)->row();
    }

    public function Add($arac=array())
    {
        return $this->db->insert($this->tableName,$arac);
    }

    public function Delete($id)
    {
        return $this->db->where('arac_id',$id)->delete($this->tableName);
    }

    public function Update($arac=array())
    {
        //update tbl_araclar set marka=......, model=..... where arac_id=id
        return $this->db->where('arac_id',$arac['arac_id'])->update($this->tableName,$arac);
    }
    public function UpdateImage($id)
    {
        //Update tbl_araclar set resim_var_mi='E' where arac_id=5
        $data = array('resim_var_mi'=>'E');
        $this->db->set($data);
        $this->db->where('arac_id',$id);
        return $this->db->update($this->tableName);
    }
}

?>