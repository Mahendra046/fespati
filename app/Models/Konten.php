<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Konten extends Model
{
    use HasFactory;

    protected $table = 'konten';

    public function handleUploadImage()
    {
        $this->handleDelete();

        if (request()->hasFile('file')) {
            $file = request()->file('file');
            $destination = "images";
            $randomStr = Str::random(5);
            $filename = time() . "-" . $randomStr . "." . $file->extension();
            $url = $file->storeAs($destination, $filename);
            $this->file = "app/" . $url;
            $this->save();
        }
    }

    // Fungsi untuk mengupload file PDF
    public function handleUploadPdf()
    {
        $this->handleDelete();

        if (request()->hasFile('file')) {
            $file = request()->file('file');
            $destination = "pdfs";
            $randomStr = Str::random(5);
            $filename = time() . "-" . $randomStr . "." . $file->extension();
            $url = $file->storeAs($destination, $filename);
            $this->file = "app/" . $url;
            $this->jenis_file = 'pdf';
            $this->save();
        }
    }

    // Fungsi untuk mengatur konten URL tanpa file fisik
    public function handleUploadTeks()
    {
        $this->handleDelete();

        $this->file = null; // Tidak ada file fisik untuk jenis URL
        $this->jenis_file = 'teks';
        $this->link_konten = request()->input('link_konten');
        $this->save();
    }

    // Fungsi untuk menghapus file lama jika ada
    public function handleDelete()
    {
        if ($this->file && $this->jenis_file !== 'url') {
            $path = public_path($this->file);
            if (file_exists($path)) {
                unlink($path);
            }
        }
    }

    public function menu()
    {
        return $this->belongsTo(Menu::class, 'id_menu');
    }
}
