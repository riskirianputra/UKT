<?php

namespace App\Imports;

use App\User;
use Spatie\Permission\Models\Role;

use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\WithHeadingRow; 
use PhpOffice\PhpSpreadsheet\Shared\Date;

class PendaftaranImport implements ToCollection, WithHeadingRow
{
   
    // public function model(array $row)
    // {
    //     return new Pendaftaran([
    //         'user_id' => $row['user'],
    //         'idJalur' => $row['jalur'], 
    //         'noPendaftaran' => $row['nopendaftaran'], 
    //         'angkatan' => $row['angkatan'],
    //         'ptnke' => $row['ptnke'],            
    //         'namaPeserta' => $row['namapeserta'],
    //         'kodeProdi' => $row['kodeprodi'], 
    //         'namaProdi' => $row['namaprodi'], 
    //         'bidikMisi' => $row['bidikmisi'],
    //         'alamat' => $row['alamat'], 
    //         'alamatKab' => $row['kota'], 
    //         'alamatProv' => $row['provinsi'],
    //         'jeniskelamin' => $row['jeniskelamin'], 
    //         'tanggalLahir' => $row['tanggallahir'], 
    //         'tempatLahir' => $row['tempatlahir'],
    //         'agama' => $row['agama'], 
    //         'kewarganegaraan' => $row['kewarganegaraan'],
    //         'telepon' => $row['telepon'],
    //         'nik' => $row['nik'], 
    //         'nisn' => $row['nisn'],
    //         'email' => $row['email'],
    //         'namaAyah' => $row['namaayah'], 
    //         'pendidikanAyah' => $row['pendidikanayah'],
    //         'pekerjaanAyah' => $row['pekerjaanayah'], 
    //         'penghasilanAyah' => $row['penghasilanayah'],
    //         'namaIbu' => $row['namaibu'], 
    //         'pendidikanIbu' => $row['pendidikanibu'],
    //         'pekerjaanIbu' => $row['pekerjaanibu'], 
    //         'penghasilanIbu' => $row['penghasilanibu'],
    //         'jumlahkakak' => $row['jumlahkakak'], 
    //         'jumlahadik' => $row['jumlahadik'],
    //         'npsn' => $row['npsn'], 
    //         'namaSekolah' => $row['namasekolah'],
    //         'kabSekolah' => $row['alamatsekolah'],
    //         'provSekolah' => $row['provinsisekolah'],
    //         'tahunLulus' => $row['tahunlulus'],
    //         'sppSekolah' => $row['sppsekolah'],
    //         'sppSekolahdibayar' => $row['sppsekolahyangdibayar'],
    //         'uangPembangunan' => $row['uangpembangunan'],
    //         'uangPembangunandibayar' => $row['uangpembangunanyangdibayar']
    //     ]);
    // }

    public function passwordTanggalLahir($tanggal)
    {
       $date = Date::excelToDateTimeObject($tanggal);
        return $date->format('dmY');
    }

    public function collection(Collection $rows)
    {
        foreach ($rows as $row) {
            $userData = [
                'name' => $row['nopendaftaran'],
                'email' => $row['email'],
                'password' => $this->passwordTanggalLahir($row['tanggallahir']),
            ];

            $date = Date::excelToDateTimeObject($row['tanggallahir']);

            $pendaftaranData = [
            'idJalur' => 1, 
            'noPendaftaran' => $row['nopendaftaran'], 
            'angkatan' => $row['angkatan'],                     
            'ptnke' => $row['ptnke'],            
            'namaPeserta' => $row['namapeserta'],
            'kodeProdi' => $row['kodeprodi'], 
            'namaProdi' => $row['namaprodi'], 
            'bidikMisi' => $row['bidikmisi'],
            'alamat' => $row['alamat'], 
            'alamatKab' => $row['kota'], 
            'alamatProv' => $row['provinsi'],
            'jeniskelamin' => $row['jeniskelamin'], 
            'tanggalLahir' => $date->format('Y-m-d'), 
            'tempatLahir' => $row['tempatlahir'],
            'agama' => $row['agama'], 
            'kewarganegaraan' => $row['kewarganegaraan'],
            'telepon' => $row['telepon'],
            'nik' => $row['nik'], 
            'nisn' => $row['nisn'],
            'email' => $row['email'],
            'namaAyah' => $row['namaayah'], 
            'pendidikanAyah' => $row['pendidikanayah'],
            'pekerjaanAyah' => $row['pekerjaanayah'], 
            'penghasilanAyah' => $row['penghasilanayah'],
            'namaIbu' => $row['namaibu'], 
            'pendidikanIbu' => $row['pendidikanibu'],
            'pekerjaanIbu' => $row['pekerjaanibu'], 
            'penghasilanIbu' => $row['penghasilanibu'],
            'jumlahkakak' => $row['jumlahkakak'], 
            'jumlahadik' => $row['jumlahadik'],
            'npsn' => $row['npsn'], 
            'namaSekolah' => $row['namasekolah'],
            'kabSekolah' => $row['alamatsekolah'],
            'provSekolah' => $row['provinsisekolah'],
            'tahunLulus' => $row['tahunlulus'],
            'sppSekolah' => $row['sppsekolah'],
            'sppSekolahdibayar' => $row['sppsekolahyangdibayar'],
            'uangPembangunan' => $row['uangpembangunan'],
            'uangPembangunandibayar' => $row['uangpembangunanyangdibayar']
            ];

            $user = User::create($userData);
            $user->pendaftaran()->create($pendaftaranData);
            $role_r = Role::where('name', 'Mahasiswa')->firstOrFail();            
            $user->assignRole($role_r); //Assigning role to user
        }
    }
}