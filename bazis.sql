-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Waktu pembuatan: 20. April 2016 jam 14:20
-- Versi Server: 5.0.45
-- Versi PHP: 5.2.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `bazis`
-- 

-- --------------------------------------------------------

-- 
-- Struktur dari tabel `admin_bazis_jakut`
-- 

CREATE TABLE `admin_bazis_jakut` (
  `id_admin_bazis_jakut` int(11) NOT NULL auto_increment,
  `user_admin_bazis_jakut` varchar(50) collate latin1_general_ci NOT NULL,
  `password` varchar(50) collate latin1_general_ci NOT NULL,
  `nama` varchar(50) collate latin1_general_ci NOT NULL,
  `nip` varchar(20) collate latin1_general_ci NOT NULL,
  `jabatan` varchar(50) collate latin1_general_ci NOT NULL,
  `telpon` varchar(12) collate latin1_general_ci NOT NULL,
  `email` varchar(50) collate latin1_general_ci NOT NULL,
  `alamat` text collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id_admin_bazis_jakut`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=2 ;

-- 
-- Dumping data untuk tabel `admin_bazis_jakut`
-- 

INSERT INTO `admin_bazis_jakut` (`id_admin_bazis_jakut`, `user_admin_bazis_jakut`, `password`, `nama`, `nip`, `jabatan`, `telpon`, `email`, `alamat`) VALUES 
(1, 'not_style', '1sampai10', 'Adam Surya Des', '0218198198999', 'Devlop HTML', '089670849013', 'adhagras@ymail.com', 'jl.guru saenan no 31 rt 05 rw 009 klender, duren sawit jakarta timur');

-- --------------------------------------------------------

-- 
-- Struktur dari tabel `album_foto`
-- 

CREATE TABLE `album_foto` (
  `id_album_foto` int(3) NOT NULL auto_increment,
  `sampul_album_foto` varchar(300) collate latin1_general_ci NOT NULL,
  `nama_album_foto` varchar(100) collate latin1_general_ci NOT NULL,
  `tanggal_album_foto` varchar(12) collate latin1_general_ci NOT NULL,
  `keterangan_album_foto` text collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id_album_foto`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ;

-- 
-- Dumping data untuk tabel `album_foto`
-- 


-- --------------------------------------------------------

-- 
-- Struktur dari tabel `album_foto_isi`
-- 

CREATE TABLE `album_foto_isi` (
  `id_foto` int(6) NOT NULL auto_increment,
  `lokasi_foto` varchar(300) collate latin1_general_ci NOT NULL,
  `keterangan_foto` varchar(25) collate latin1_general_ci NOT NULL,
  `id_album_foto` int(3) NOT NULL,
  PRIMARY KEY  (`id_foto`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ;

-- 
-- Dumping data untuk tabel `album_foto_isi`
-- 


-- --------------------------------------------------------

-- 
-- Struktur dari tabel `album_vidio`
-- 

CREATE TABLE `album_vidio` (
  `id_album_vidio` int(3) NOT NULL auto_increment,
  `lokasi_album_vidio` varchar(100) collate latin1_general_ci NOT NULL,
  `nama_album_vidio` varchar(50) collate latin1_general_ci NOT NULL,
  `tanggal_album_vidio` varchar(12) collate latin1_general_ci NOT NULL,
  `keterangan_album_vidio` text collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id_album_vidio`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ;

-- 
-- Dumping data untuk tabel `album_vidio`
-- 


-- --------------------------------------------------------

-- 
-- Struktur dari tabel `anggota`
-- 

CREATE TABLE `anggota` (
  `id_anggota` int(3) NOT NULL auto_increment,
  `user_anggota` varchar(50) collate latin1_general_ci NOT NULL,
  `password_anggota` varchar(50) collate latin1_general_ci NOT NULL,
  `email_anggota` varchar(50) collate latin1_general_ci NOT NULL,
  `katagori` varchar(50) collate latin1_general_ci NOT NULL,
  `nama_anggota` varchar(50) collate latin1_general_ci NOT NULL,
  `jenis_identitas_anggota` varchar(50) collate latin1_general_ci NOT NULL,
  `no_identitas_anggota` varchar(50) collate latin1_general_ci NOT NULL,
  `foto_anggota` varchar(50) collate latin1_general_ci NOT NULL,
  `tanggal_bergabung` varchar(50) collate latin1_general_ci NOT NULL,
  `telpon` varchar(50) collate latin1_general_ci NOT NULL,
  `alamat` varchar(50) collate latin1_general_ci NOT NULL,
  `point_anggota` int(8) NOT NULL,
  PRIMARY KEY  (`id_anggota`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=4 ;

-- 
-- Dumping data untuk tabel `anggota`
-- 

INSERT INTO `anggota` (`id_anggota`, `user_anggota`, `password_anggota`, `email_anggota`, `katagori`, `nama_anggota`, `jenis_identitas_anggota`, `no_identitas_anggota`, `foto_anggota`, `tanggal_bergabung`, `telpon`, `alamat`, `point_anggota`) VALUES 
(1, 'zisu160000', 'adam', 'mamae@mamae.com', 'Individu', 'Adam Surya', 'KTP', '3175028218189', 'anggota570f959fe14d4Snapshot_20151001.JPG', '30-03-2015', '017182981912', 'duren sawit', 200),
(2, 'zisu160001', 'alfa', 'alfa@alfa.com', 'Individu', 'Alfa Sumarni', 'KTP', '31756322123', 'anggota56fb7d0c916d420151230_155859.jpg', '30-03-2016', '898298292898', 'buaran', 300),
(3, 'zisu160002', 'beni', 'beni@beni.com', 'Kelompok', 'beni', 'KTP', '9190190191819109891', '', '19-04-2016', '909009829820', 'kalimalang', 60);

-- --------------------------------------------------------

-- 
-- Struktur dari tabel `artikel_berita`
-- 

CREATE TABLE `artikel_berita` (
  `id_berita` int(4) NOT NULL auto_increment,
  `judul_berita` varchar(50) collate latin1_general_ci NOT NULL,
  `tanggal_berita` varchar(12) collate latin1_general_ci NOT NULL,
  `foto_berita` varchar(100) collate latin1_general_ci NOT NULL,
  `isi_berita` text collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id_berita`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ;

-- 
-- Dumping data untuk tabel `artikel_berita`
-- 


-- --------------------------------------------------------

-- 
-- Struktur dari tabel `berkas_laporan`
-- 

CREATE TABLE `berkas_laporan` (
  `id_laporan` int(5) NOT NULL auto_increment,
  `judul_laporan` varchar(50) collate latin1_general_ci NOT NULL,
  `tanggal_laporan` varchar(13) collate latin1_general_ci NOT NULL,
  `laporan` varchar(300) collate latin1_general_ci NOT NULL,
  `keterangan_laporan` text collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id_laporan`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ;

-- 
-- Dumping data untuk tabel `berkas_laporan`
-- 


-- --------------------------------------------------------

-- 
-- Struktur dari tabel `berkas_laporan_penerima`
-- 

CREATE TABLE `berkas_laporan_penerima` (
  `id_laporan_penerima` int(5) NOT NULL auto_increment,
  `judul_laporan_penerima` varchar(50) collate latin1_general_ci NOT NULL,
  `tanggal_laporan_penerima` varchar(13) collate latin1_general_ci NOT NULL,
  `laporan_penerima` varchar(100) collate latin1_general_ci NOT NULL,
  `keterangan_laporan_penerima` text collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id_laporan_penerima`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ;

-- 
-- Dumping data untuk tabel `berkas_laporan_penerima`
-- 


-- --------------------------------------------------------

-- 
-- Struktur dari tabel `pj_anggota`
-- 

CREATE TABLE `pj_anggota` (
  `id_pj_anggota` int(3) NOT NULL auto_increment,
  `nama_pj_anggota` varchar(50) collate latin1_general_ci NOT NULL,
  `telpon_pj_anggota` varchar(50) collate latin1_general_ci NOT NULL,
  `email_pj_anggota` varchar(50) collate latin1_general_ci NOT NULL,
  `alamat_pj_anggota` varchar(50) collate latin1_general_ci NOT NULL,
  `user_anggota` varchar(50) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id_pj_anggota`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=2 ;

-- 
-- Dumping data untuk tabel `pj_anggota`
-- 

INSERT INTO `pj_anggota` (`id_pj_anggota`, `nama_pj_anggota`, `telpon_pj_anggota`, `email_pj_anggota`, `alamat_pj_anggota`, `user_anggota`) VALUES 
(1, 'Adam Surya', '089670849013', 'alfa@alfa.com', 'jalan', 'zisu160012');

-- --------------------------------------------------------

-- 
-- Struktur dari tabel `zis_keranjang`
-- 

CREATE TABLE `zis_keranjang` (
  `id_zis_keranjang` int(8) NOT NULL auto_increment,
  `no_zis` varchar(50) collate latin1_general_ci NOT NULL,
  `tanggal` varchar(50) collate latin1_general_ci NOT NULL,
  `user_anggota` varchar(50) collate latin1_general_ci NOT NULL,
  `nama` varchar(50) collate latin1_general_ci NOT NULL,
  `no_identitas` varchar(50) collate latin1_general_ci NOT NULL,
  `telpon` varchar(50) collate latin1_general_ci NOT NULL,
  `alamat` varchar(50) collate latin1_general_ci NOT NULL,
  `jenis_zis` varchar(50) collate latin1_general_ci NOT NULL,
  `nominal` int(10) NOT NULL,
  `terbilang` varchar(50) collate latin1_general_ci NOT NULL,
  `point` int(5) NOT NULL,
  `status` enum('0','1','2') collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id_zis_keranjang`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ;

-- 
-- Dumping data untuk tabel `zis_keranjang`
-- 


-- --------------------------------------------------------

-- 
-- Struktur dari tabel `zis_konfirmasi`
-- 

CREATE TABLE `zis_konfirmasi` (
  `id_zis_konfirmasi` int(5) NOT NULL auto_increment,
  `no_zis` varchar(50) collate latin1_general_ci NOT NULL,
  `no_zis_konfirmasi` varchar(50) collate latin1_general_ci NOT NULL,
  `tanggal` varchar(50) collate latin1_general_ci NOT NULL,
  `nama_bank` varchar(50) collate latin1_general_ci NOT NULL,
  `rekening_bank` varchar(50) collate latin1_general_ci NOT NULL,
  `penyetor` varchar(50) collate latin1_general_ci NOT NULL,
  `nominal` int(8) NOT NULL,
  `terbilang` varchar(50) collate latin1_general_ci NOT NULL,
  `bukti` varchar(50) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id_zis_konfirmasi`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ;

-- 
-- Dumping data untuk tabel `zis_konfirmasi`
-- 

