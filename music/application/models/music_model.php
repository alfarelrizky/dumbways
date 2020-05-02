<?php
    defined('BASEPATH') OR exit('no direct script access allowed');

    class music_model extends CI_Model{
        public function view_all_data(){
            $query = $this->db->query("SELECT music.id , music.title, music.durasi , music.id_genre , music.Id_singer , music.photo , music.deskripsi ,genre.name as namegenre , singers.name as namesinger FROM `music` INNER JOIN genre ON music.id_genre = genre.id INNER JOIN singers ON music.Id_singer = singers.id");
            return $query->result_array();
        }
        public function view_per_data($table,$kolom,$id){
            $query = $this->db->query("SELECT music.id , music.title, music.durasi , music.id_genre , music.Id_singer , music.photo , music.deskripsi ,genre.name as namegenre,genre.id as idgenre , singers.name as namesinger, singers.id as idsinger FROM `music` INNER JOIN genre ON music.id_genre = genre.id INNER JOIN singers ON music.Id_singer = singers.id WHERE $table.$kolom='$id'");
            return $query->result_array();
        }
        public function filter($table, $kolom, $genre)
        {
            $query = $this->db->query("SELECT music.id , music.title, music.durasi , music.id_genre , music.Id_singer , music.photo , music.deskripsi ,genre.name as namegenre,genre.id as idgenre , singers.name as namesinger, singers.id as idsinger FROM `music` INNER JOIN genre ON music.id_genre = genre.id INNER JOIN singers ON music.Id_singer = singers.id WHERE $table.$kolom ='$genre'");
            return $query->result_array();
        }
        public function tambahbarumusic($id, $filemusic, $durasi, $genre, $singer, $filegambar, $deskripsi)
        {
            $query = $this->db->query("INSERT INTO `music` values('$id','$filemusic','$durasi','$genre','$singer','$filegambar','$deskripsi')");
            return $query;
        }
        public function editmusic($id, $filemusic, $durasi, $genre, $singer, $filegambar, $deskripsi)
        {
            $query = $this->db->query("UPDATE `music` set `title` = '$filemusic', `durasi` = '$durasi', `id_genre`= '$genre', `Id_singer`='$singer', `photo`='$filegambar', `deskripsi`='$deskripsi' where id='$id'");
            return $query;
        }
        public function hapus($tab, $column, $id)
        {
            $query = $this->db->query("DELETE FROM $tab where $column ='$id'");
            return $query;
        }

        public function view_all($table)
        {
            $query = $this->db->query("SELECT * FROM $table");
            return $query->result_array();
        }
        public function view_per_id($table, $kolom, $id)
        {
            $query = $this->db->query("SELECT * FROM $table where $kolom = '$id' limit 1");
            return $query->result_array();
        }
        public function tambahbarugenre($id,$name)
        {
            $query = $this->db->query("INSERT INTO `genre` values('$id','$name')");
            return $query;
        }
        public function editgenre($id, $genre)
        {
            $query = $this->db->query("UPDATE `genre` set `name` = '$genre' where id='$id'");
            return $query;
        }
        public function tambahbarusinger($id, $name)
        {
            $query = $this->db->query("INSERT INTO `singers` values('$id','$name')");
            return $query;
        }
        public function editsinger($id, $singer)
        {
            $query = $this->db->query("UPDATE `singers` set `name` = '$singer' where id='$id'");
            return $query;
        }
}
?>