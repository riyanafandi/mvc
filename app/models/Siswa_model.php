<?php 

class Siswa_model  
{
    private $table = 'siswa';
    private $db;
   
    public function __construct(){
        $this->db = new Database;
    }

    public function getSiswa(){
       $this->db->query("SELECT * FROM " . $this->table);
       return $this->db->resultSet();
    }

    public function getDetailSiswa($id)
    {
        $this->db->query("SELECT * FROM " . $this->table . " WHERE id=:id");

        $this->db->bind('id', $id);
        return $this->db->single();
    }
    
    public function tambahDataSiswa($data)
    {
        $query = "INSERT INTO siswa VALUES ('', :nama, :kelas, :alamat, :jurusan, :email)";

        $this->db->query($query);
        $this->db->bind('nama', $data["nama"]);
        $this->db->bind('kelas', $data["kelas"]);
        $this->db->bind('alamat', $data["alamat"]);
        $this->db->bind('jurusan', $data["jurusan"]);
        $this->db->bind('email', $data["email"]);

        $this->db->execute();
        return $this->db->rowCount();
    }
    public function hapusDataSiswa($id)
    {
        $query = "DELETE FROM siswa WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();
        return $this->db->rowCount();
    }
    public function ubahDataSiswa($data){
        $query = "UPDATE siswa SET
                    nama = :nama,
                    kelas = :kelas,
                    alamat = :alamat,
                    jurusan = :jurusan,
                    email = :email
                WHERE id = :id
                ";
        $this->db->query($query);
        $this->db->bind('nama', $data["nama"]);
        $this->db->bind('kelas', $data["kelas"]);
        $this->db->bind('jurusan', $data["jurusan"]);
        $this->db->bind('alamat', $data["alamat"]);
        $this->db->bind('email', $data["email"]);
        $this->db->bind('id', $data["id"]);

        $this->db->execute();
        return $this->db->rowCount();
    }

}
