-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Waktu pembuatan: 14. April 2016 jam 17:28
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
  PRIMARY KEY  (`id_admin_bazis_jakut`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=2 ;

-- 
-- Dumping data untuk tabel `admin_bazis_jakut`
-- 

INSERT INTO `admin_bazis_jakut` (`id_admin_bazis_jakut`, `user_admin_bazis_jakut`, `password`) VALUES 
(1, 'karma', 'qwer');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=11 ;

-- 
-- Dumping data untuk tabel `album_foto`
-- 

INSERT INTO `album_foto` (`id_album_foto`, `sampul_album_foto`, `nama_album_foto`, `tanggal_album_foto`, `keterangan_album_foto`) VALUES 
(10, 'album coba hapus juga570f50b0b9b00Snapshot_20160403.JPG', 'album coba hapus juga', '14-04-2016', 'hapus juga');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=31 ;

-- 
-- Dumping data untuk tabel `album_foto_isi`
-- 

INSERT INTO `album_foto_isi` (`id_foto`, `lokasi_foto`, `keterangan_foto`, `id_album_foto`) VALUES 
(26, 'album coba hapus juga570f50b0b9b00Snapshot_20160403.JPG', 'aaaa', 10),
(27, 'album coba hapus juga570f50c0e5434Snapshot_20160403_1.JPG', 'sasas', 10);

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=3 ;

-- 
-- Dumping data untuk tabel `anggota`
-- 

INSERT INTO `anggota` (`id_anggota`, `user_anggota`, `password_anggota`, `email_anggota`, `katagori`, `nama_anggota`, `jenis_identitas_anggota`, `no_identitas_anggota`, `foto_anggota`, `tanggal_bergabung`, `telpon`, `alamat`, `point_anggota`) VALUES 
(1, 'zisu160000', 'adam', 'mamae@mamae.com', 'Individu', 'Adam Surya', 'KTP', '3175028218189', 'anggota570f540b0fd84IMG_20150114_130522.jpg', '30-03-2016', '017182981912', 'asasdasdasdasdasd', 0),
(2, 'zisu160001', 'alfa', 'alfa@alfa.com', 'Individu', 'Alfa Sumarni', 'KTP', '31756322123', 'anggota56fb7d0c916d420151230_155859.jpg', '30-03-2016', '213123123123', 'adsdadsd', 0);

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=7 ;

-- 
-- Dumping data untuk tabel `artikel_berita`
-- 

INSERT INTO `artikel_berita` (`id_berita`, `judul_berita`, `tanggal_berita`, `foto_berita`, `isi_berita`) VALUES 
(5, 'apakah berhasil', '14-04-2016', 'berita570f5c3ed4dddIMG_20150114_130522.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sit amet egestas eros. Sed venenatis est nunc, id convallis tellus venenatis non. Proin id nisi euismod, molestie nisl vel, accumsan sem. Integer felis sem, lacinia eu auctor eget, dapibus feugiat elit. Duis lectus justo, ultrices ac placerat non, sollicitudin at massa. Integer pulvinar ipsum a posuere consectetur. Aenean placerat, quam sed varius congue, felis lectus ullamcorper massa, nec posuere ante massa finibus tortor. Nulla facilisi. Maecenas porttitor felis et tempor vulputate. Fusce ligula ante, venenatis hendrerit semper at, posuere vel velit. Pellentesque commodo nulla vel nisi fringilla, id malesuada sapien dictum. Morbi eget lobortis nulla. Suspendisse id aliquet felis.');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=4 ;

-- 
-- Dumping data untuk tabel `zis_keranjang`
-- 

INSERT INTO `zis_keranjang` (`id_zis_keranjang`, `no_zis`, `tanggal`, `user_anggota`, `nama`, `no_identitas`, `telpon`, `alamat`, `jenis_zis`, `nominal`, `terbilang`, `point`, `status`) VALUES 
(1, 'zis04160000', '12-04-2016', 'zisu160000', '', '', '', '', 'Zakat Perusahaan', 2000000, 'dua juta rupiah', 2000, '0'),
(2, 'zis04160001', '12-04-2016', 'zisu160001', '', '', '', '', 'Infak, Shadaqoh dan Amal Sosial', 600000, 'enam ratus ribu rupiah', 600, '0'),
(3, 'zis04160002', '12-04-2016', 'zisu160001', '', '', '', '', 'Zakat Perdagangan', 500000, 'lima ratus ribu rupiah', 500, '0');

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
  `pemilik_bank` varchar(50) collate latin1_general_ci NOT NULL,
  `nominal` int(8) NOT NULL,
  `terbilang` varchar(50) collate latin1_general_ci NOT NULL,
  `bukti` varchar(50) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id_zis_konfirmasi`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ;

-- 
-- Dumping data untuk tabel `zis_konfirmasi`
-- 

