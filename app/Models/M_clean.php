<?php

namespace App\Models;
use CodeIgniter\Model;

Class M_clean extends Model
{ 
    public function tampil_sesuai_join($table1, $tabel2, $on, $id_user)
{
    return $this->db->table($table1)->where('tb_order.id_user', $id_user)
                     ->join($tabel2,$on,'inner')
                     ->get()
                     ->getResult(); 
}
    public function tampil($tabel){
        return $this->db->table($tabel)
                        ->get()
                        ->getResult();
    }
	public function edit($tabel, $isi, $where){
        return $this->db->table($tabel)
                        ->update($isi,$where);
    }
    public function hapus($table,$where)
    {
        return $this->db->table($table)
                        ->delete($where);

    }
	public function getWhere($tabel,$where){
        return $this->db->table($tabel)
                        ->getwhere($where)
                        ->getRow();
    }
    public function join($tabel, $tabel2, $on){
        return $this->db->table($tabel)
                        ->join($tabel2, $on, 'left')
                        ->get()
                        ->getResult();
    }
    public function joinWhere($tabel, $tabel2, $on, $where){
        return $this->db->table($tabel)
                        ->join($tabel2, $on, 'left')
                        ->getWhere($where)
                        ->getRow();
    
    }

    public function joinThreeWhere($tabel, $tabel2, $tabel3, $on, $on2, $where){
        return $this->db->table($tabel)
                        ->join($tabel2, $on, 'left')
                        ->join($tabel3, $on2, 'left')
                        ->getWhere($where)
                        ->getRow();
    
    }

    public function joinThreeTables($tabel, $tabel2, $tabel3, $on1, $on2){
        return $this->db->table($tabel)
        ->join($tabel2, $on1, 'left')
        ->join($tabel3, $on2, 'left')
        ->get()
        ->getResult();
    }

    public function joinFourTables($tabel, $tabel2, $tabel3, $tabel4, $on1, $on2, $on3){
        return $this->db->table($tabel)
        ->join($tabel2, $on1, 'left')
        ->join($tabel3, $on2, 'left')
        ->join($tabel4, $on3, 'left')
        ->get()
        ->getResult();
     }

     public function joinFourWhere($tabel, $tabel2, $tabel3, $tabel4, $on, $on2, $on3, $where){
        return $this->db->table($tabel)
                        ->join($tabel2, $on, 'left')
                        ->join($tabel3, $on2, 'left')
                        ->join($tabel4, $on3, 'left')
                        ->getWhere($where)
                        ->getRow();
    
    }
     
    public function joinFiveTables($tabel, $tabel2, $tabel3, $tabel4,$tabel5, $on1, $on2, $on3, $on4){
         return $this->db->table($tabel)
         ->join($tabel2, $on1, 'left')
         ->join($tabel3, $on2, 'left')
         ->join($tabel4, $on3, 'left')
         ->join($tabel5, $on4, 'left')
         ->get()
         ->getResult();
      }

      public function joinFiveWhere($tabel, $tabel2, $tabel3, $tabel4, $tabel5, $on, $on2, $on3, $on4, $where){
        return $this->db->table($tabel)
                        ->join($tabel2, $on, 'left')
                        ->join($tabel3, $on2, 'left')
                        ->join($tabel4, $on3, 'left')
                        ->join($tabel5, $on4, 'left')
                        ->getWhere($where)
                        ->getRow();
    
    }
    
    public function tambah($tabel, $isi){
        return $this->db->table($tabel)
                        ->insert($isi);
    }

    public function upload($file){
        $imageName = $file->getName();
          $file->move(ROOTPATH . 'public/img', $imageName);
    }

    public function cari($tabel,$tabel2,$on,$awal,$akhir, $field){
        return $this->db->table($tabel)
                        ->join($tabel2,$on,'left')
                        ->getwhere($field." between '$awal' and '$akhir'")
                        ->getResult();
    }
}