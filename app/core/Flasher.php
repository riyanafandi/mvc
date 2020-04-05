<?php 

class Flasher  
{
    public static function setFlash($pesan, $aksi, $tipe)
    {
        $_SESSION["flash"] = [
            "pesan" => $pesan,
            "aksi" => $aksi,
            "tipe" => $tipe
        ];
    }
    public static function flash()
    {
        if( isset($_SESSION["flash"]) )
        {
            echo '<div class="alert alert-' . $_SESSION["flash"]["tipe"] . '">
            Data Siswa <strong> ' . $_SESSION["flash"]["pesan"] . ' </strong> '. $_SESSION["flash"]["aksi"] .'
                        <button class="close" type="button" data-dismiss="alert">
                            <span>&times;</span>
                        </button>
                    </div>';

            unset($_SESSION["flash"]);
        }
    }
}
