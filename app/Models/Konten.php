<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


class Konten extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_menu', 'judul', 'deskripsi', 'file', 'jenis_file', 'tanggal', 'link_konten', 'pembuat'
    ];

    // Relasi ke menu
    public function menu()
    {
        return $this->belongsTo(Menu::class, 'id_menu');
    }

    // Validasi
    public static function validate($data)
    {
        return Validator::make($data, [
            'id_menu' => 'required|exists:menu,id',
            'judul' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'file' => 'nullable|file',
            'jenis_file' => 'required|in:pdf,image,url',
            'tanggal' => 'nullable|date',
            'link_konten' => 'nullable|url',
            'pembuat' => 'nullable|string|max:255'
        ]);
    }

    public function handleUploadFile()
    {
        $this->handleDelete(); // Hapus file lama jika ada

        if (request()->hasFile('file')) {
            $file = request()->file('file');

            // Tentukan folder berdasarkan jenis file
            switch ($this->jenis_file) {
                case 'pdf':
                    $destination = "uploads/konten/pdf";
                    break;
                case 'image':
                    $destination = "uploads/konten/images";
                    break;
                default:
                    $destination = "uploads/konten/others";
                    break;
            }

            $randomStr = Str::random(5);
            $filename = time() . "-" . $randomStr . "." . $file->extension();
            $url = $file->storeAs($destination, $filename);

            $this->file = "storage/" . $url; // Simpan path di kolom file
            $this->save();
        }
    }

    // Fungsi untuk menghapus file dari storage
    public function handleDelete()
    {
        $file = $this->file;
        if ($file && Storage::exists(str_replace('storage/', '', $file))) {
            Storage::delete(str_replace('storage/', '', $file));
            return true;
        }
        return false;
    }
}
