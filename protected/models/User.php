<?php

class User extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id_user';

    public $id_user;
    public $nama_user;
    public $kategori_user;
    public $username;
    public $password;

    public function __construct()
    {
        // Inisialisasi kelas User
    }

    public function rules()
    {
        return [
            [['nama_user', 'kategori_user', 'username', 'password'], 'required'],
        ];
    }

    // Metode lainnya yang relevan untuk operasi pada tabel "users"
}